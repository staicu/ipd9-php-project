<?php

session_cache_limiter(false);
session_start();

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));



require_once 'local.php';

DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

function nonsql_error_handler($params) {
    global $app, $log;
    $log->error("Database error: " . $params['error']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

function sql_error_handler($params) {
    global $app, $log;
    $log->error("SQL error: " . $params['error']);
    $log->error(" in query: " . $params['query']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die; // don't want to keep going if a query broke
}

// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/../cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/../templates');
if (!isset($_SESSION['todouser'])) {
    $_SESSION['todouser'] = array();
}

$twig = $app->view()->getEnvironment();
$twig->addGlobal('todouser', $_SESSION['todouser']);

//when the application starts
$app->get('/', function() use ($app) {
    //print_r($_SESSION['todouser']);
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig');
        return;
    }

    $app->render('menu.html.twig');
});
//login
$app->post('/', function() use ($app) {
    //    print_r($_POST);    
    $name = $app->request()->post('name');
    $pass = $app->request()->post('pass');
    // verification    
    $error = false;
    $user = DB::queryFirstRow("SELECT * FROM users WHERE name=%s", $name);
    if (!$user) {
        $error = true;
    } else {
        if ($user['password'] != $pass) {
            $error = true;
        }
    }
    // decide what to render
    if ($error) {
        $app->render('login.html.twig', array("error" => true));
    } else {
        unset($user['password']);
        $_SESSION['todouser'] = $user;
        $app->render('menu.html.twig');
    }
});
//logout
$app->get('/logout', function() use ($app) {
    unset($_SESSION['todouser']);
    $app->render('login.html.twig');
});
//survey page
$app->get('/survey', function() use ($app) {

    $app->render("survey.html.twig");
});
//get the add customer page
$app->get('/admin/customer/add', function() use ($app) {

    $app->render("admin_customer_add.html.twig", array('operation' => "Register", 'url' => "add"));
});

//post add customer customer
$app->post('/admin/customer/add', function() use ($app) {
    $name = $app->request()->post('name');
    $email = $app->request()->post('email');
    $phone = $app->request()->post('phone');
    $company = $app->request()->post('company');
    $position = $app->request()->post('position');
    $userList = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'company' => $company,
        'position' => $position
    );

    $errorList = array();
    if (strlen($name) < 2 || strlen($name) > 100) {
        array_push($errorList, "Name must be 2-100 characters long");
    }

    if ($errorList) {

        $app->render("admin_customer_add.html.twig");
        echo 'not added';
    } else {

        //print_r($errorList);
        //print_r($userList);
        DB::insert('users', array(
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "company" => $company,
            "position" => $position
        ));
        $textToDisplay = $name . " : customer was added to the database";
        $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay));
    }
});

//list customers
$app->get('/admin/customer/list', function() use ($app) {
    $userList = DB::query("SELECT * FROM users");
    $app->render("admin_list.html.twig", array(
        'userList' => $userList,
        'titlelist' => "Customers"
    ));
});


//get the customer from the database for update
$app->get('/admin/customer/edit(/:id)', function($id = 0) use ($app) {

    $customer = DB::queryFirstRow("SELECT * FROM users WHERE id=%i", $id);
    if (!$customer) {
        echo 'Product not found';
        return;
    }
    //print_r($customer);
    $app->render("admin_customer_add.html.twig", array(
        'url' => 'modify',
        'id' => $customer['id'],
        'name' => $customer['name'],
        'email' => $customer['email'],
        'phone' => $customer['phone'],
        'company' => $customer['company'],
        'position' => $customer['position'],
        'operation' => "Update"
    ));
})->conditions(array(
    'id' => '[0-9]+'));

//update customer from retreived database
$app->post('/admin/customer/modify', function () use($app) {

    $id = $app->request()->post('id');
    $name = $app->request()->post('name');
    $email = $app->request()->post('email');
    $phone = $app->request()->post('phone');
    $company = $app->request()->post('company');
    $position = $app->request()->post('position');
    $userList = array(
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'company' => $company,
        'position' => $position
    );
    //print_r($userList);
    DB::update('users', array(
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "company" => $company,
        "position" => $position
            ), 'id=%i', $id);
    $textToDisplay = $name . " : customer was updated in the database";
    $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay));
});

//get the customer from the database for deletion
$app->get('/admin/customer/delete(/:id)', function($id = 0) use ($app) {

    $customer = DB::queryFirstRow("SELECT * FROM users WHERE id=%i", $id);
    if (!$customer) {
        echo 'Product not found';
        return;
    }
    //print_r($customer);
    $app->render("admin_customer_add.html.twig", array(
        'url' => 'delete',
        'id' => $customer['id'],
        'name' => $customer['name'],
        'email' => $customer['email'],
        'phone' => $customer['phone'],
        'company' => $customer['company'],
        'position' => $customer['position'],
        'operation' => "Delete"
    ));
})->conditions(array(
    'id' => '[0-9]+'));

//delete customer retreived from database
$app->post('/admin/customer/delete', function () use($app) {

    $id = $app->request()->post('id');
    $name = $app->request()->post('name');
    //print_r($id);
    DB::delete('users', 'id=%i', $id);
    $textToDisplay = $name . " : customer was deleted from the database";
    $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay));
});

//list of Questions for Surveys
$app->get('/admin/question/list', function() use ($app) {
    $userList = DB::query("SELECT * FROM questions");
    $app->render("admin_list.html.twig", array(
        'userList' => $userList,
        'titlelist' => "Questions"
    ));
});

//get the add question page
$app->get('/admin/question/add', function() use ($app) {

    $app->render("admin_question_add.html.twig", array('operation' => "Create", 'url' => "add"));
});

//get the question from the database for update
$app->get('/admin/question/edit(/:id)', function($id = 0) use ($app) {

    $question = DB::queryFirstRow("SELECT * FROM questions WHERE id=%i", $id);
    if (!$question) {
        echo 'Product not found';
        return;
    }
    //print_r($customer);
    $app->render("admin_question_add.html.twig", array(
        'url' => 'modify',
        'id' => $question['id'],
        'name' => $question['question'],
        'email' => $question['ans1'],
        'phone' => $question['ans2'],
        'operation' => "Update"
    ));
})->conditions(array(
    'id' => '[0-9]+'));
//post add customer customer
$app->post('/admin/question/add', function() use ($app) {
    
    $question = $app->request()->post('email');
    $ans1 = $app->request()->post('phone');
    $ans2 = $app->request()->post('company');
    $questionList = array(
        'question' => $question,
        'ans1' => $ans1,
        'ans2' => $ans2       
    );

    $errorList = array();
    if (strlen($question) < 2 || strlen($question) > 100) {
        array_push($errorList, "Name must be 2-100 characters long");
    }

    if ($errorList) {

        $app->render("admin_question_add.html.twig");
        echo 'not added';
    } else {

        print_r($errorList);
        print_r($questionList);
        DB::insert('questions', array(
            "question" => $question,
            "ans1" => $ans1,
            "ans2" => $ans2
        ));
        $textToDisplay = $question . " : Question was added to the database";
        $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay));
    }
});


$app->run();
