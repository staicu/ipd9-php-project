<?php

session_cache_limiter(false);
session_start();

require_once 'vendor/autoload.php';

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
    'cache' => dirname(__FILE__) . '/cache'
);


//admin logged in
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');
if (!isset($_SESSION['todouser'])) {
    $_SESSION['todouser'] = array();
}

//template selected for the survey
if (!isset($_SESSION['templateselected'])) {
    $_SESSION['templateselected'] = array();
}

//selected customer for survey
if (!isset($_SESSION['userselected'])) {
    $_SESSION['userselected'] = array();
}
//the survey name that is active for the specific event
if (!isset($_SESSION['activesurvey'])) {
    $_SESSION['activesurvey'] = array();
}
//selected questions to create a template
if (!isset($_SESSION['$selectedQuestions'])) {
    $_SESSION['$selectedQuestions'] = array();
}
//link to go back
if (!isset($_SESSION['$linkToGoBack'])) {
    $_SESSION['$linkToGoBack'] = "/";
}

$twig = $app->view()->getEnvironment();

//selected questions to create a template
$twig->addGlobal('$selectedQuestions', $_SESSION['$selectedQuestions']);
//active admin
$twig->addGlobal('todouser', $_SESSION['todouser']);
//active template
$twig->addGlobal('templateselected', $_SESSION['templateselected']);
//active surveyee
$twig->addGlobal('userselected', $_SESSION['userselected']);
//name of the current survey
$twig->addGlobal('activesurvey', $_SESSION['activesurvey']);
//link to go back
$twig->addGlobal('linkToGoBack', $_SESSION['$linkToGoBack']);

//function to display in header
include 'newdesign.php';

function topcontent() {

    if (!($_SESSION['templateselected'])) {
        $templateselected = "no template selected";
        $templateselectedid = "no template selected";
    } else {
        $templateselected = $_SESSION['templateselected']['name'];
        $templateselectedid = $_SESSION['templateselected']['id'];
    }
    if (!($_SESSION['userselected'])) {
        $userselected = "no customer selected";
        $userselectedid = "no customer selected";
    } else {
        $userselected = $_SESSION['userselected']['name'];
        $userselectedid = $_SESSION['userselected']['id'];
    }
    if (!($_SESSION['todouser'])) {
        $todouser = "no admin selected";
    } else {
        $todouser = $_SESSION['todouser']['name'];
    }
    return array($templateselected, $userselected, $todouser, $userselectedid,
        $templateselectedid,
    );
}

//when the application starts
$app->get('/', function() use ($app) {
    //print_r($_SESSION['todouser']);
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }

    $app->render('menu.html.twig', array(
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2],
        'userselectedid' => topcontent()[3],
        'templateselectedid' => topcontent()[4]
            )
    );
});
//login
$app->post('/', function() use ($app) {
    //    print_r($_POST);    
    $name = $app->request()->post('name');
    $pass = $app->request()->post('pass');
    // verification    
    $error = false;
    $user = DB::queryFirstRow("SELECT * FROM admins WHERE name=%s", $name);
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
        $app->render('menu.html.twig', array(
            'toptemplate' => topcontent()[0],
            'topuser' => topcontent()[1],
            'topadmin' => topcontent()[2]
                )
        );
    }
});
//logout
$app->get('/logout', function() use ($app) {
    unset($_SESSION['todouser']);
    unset($_SESSION['templateselected']);
    unset($_SESSION['userselected']);
    unset($_SESSION['activesurvey']);
    unset($_SESSION['linkToGoBack']);

    $app->render('login.html.twig');
});

//get the add customer page
$app->get('/admin/customer/add', function() use ($app) {
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }

    $app->render("admin_customer_add.html.twig", array('operation' => "Register", 'url' => "add"));
});
$app->get('/admin/infoheader(/:i)', function($i = 0) use($app) {
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }
    switch ($i) {
        case 1:
            $title = "Admin";
            $textToDisplay = json_encode($_SESSION['todouser'], JSON_PRETTY_PRINT);
            break;
        case 3:
            $title = "Customer";
            $textToDisplay = json_encode($_SESSION['userselected'], JSON_PRETTY_PRINT);
            break;
        case 2:
            $title = "Survey";
            $textToDisplay = json_encode($_SESSION['templateselected'], JSON_PRETTY_PRINT);
            break;
    }
    $app->render('infoheader.html.twig', array(
        'title' => $title,
        'textToDisplay' => $textToDisplay
    ));
});
//post add customer 
$app->post('/admin/customer/add', function() use ($app) {
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }
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

        $idinserted = DB::insertId();

        //print_r($idinserted);
        $_SESSION['userselected'] = DB::queryFirstRow("SELECT * FROM users WHERE id=%i", $idinserted);
        //print_r($_SESSION['userselected']);

        $textToDisplay = $name . " : customer was added to the database";
        $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay,
            'toptemplate' => topcontent()[0],
            'topuser' => topcontent()[1],
            'topadmin' => topcontent()[2],
                // 'userselectedid' => topcontent[3]
        ));
    }
});

//list customers
$app->get('/admin/customer/list', function() use ($app) {
    $_SESSION['$linkToGoBack'] = "/admin/customer/list";
    $userList = DB::query("SELECT * FROM users");
    $app->render("admin_list.html.twig", array(
        'userList' => $userList,
        'titlelist' => "Customers"
    ));
});

//list customers
$app->get('/admin/customer/list/select', function() use ($app) {
    $onlyselect = 1;
    $userList = DB::query("SELECT * FROM users");
    $app->render("admin_list.html.twig", array(
        'userList' => $userList,
        'titlelist' => "Customers",
        'onlyselect' => $onlyselect
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
        'operation' => "Delete",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
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


//get the customer from the database for selection
$app->get('/admin/customer/select(/:id)', function($id = 0) use ($app) {

    $customer = DB::queryFirstRow("SELECT * FROM users WHERE id=%i", $id);
    if (!$customer) {
        echo 'Product not found';
        return;
    }
    //print_r($customer);
    $app->render("admin_customer_add.html.twig", array(
        'url' => 'select',
        'id' => $customer['id'],
        'name' => $customer['name'],
        'email' => $customer['email'],
        'phone' => $customer['phone'],
        'company' => $customer['company'],
        'position' => $customer['position'],
        'operation' => "Select",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    ));
})->conditions(array(
    'id' => '[0-9]+'));

//Select customer retreived from database
$app->post('/admin/customer/select', function () use($app) {

    $id = $app->request()->post('id');
    $name = $app->request()->post('name');
    $_SESSION['userselected'] = DB::queryFirstRow("SELECT * FROM users WHERE id=%i", $id);

    print_r($_SESSION['userselected']);
    $textToDisplay = $name . " : customer was selected for the survey";
    $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay,
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    ));
});


//list of Questions for Surveys
$app->get('/admin/question/list', function() use ($app) {
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }
    
    $userList = DB::query("SELECT * FROM questions");
    $linkToGoBack = $_SESSION['$linkToGoBack'];
    $app->render("admin_list.html.twig", array(
        'userList' => $userList,
        'titlelist' => "Questions",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    ));
});

//get the add question page
$app->get('/admin/question/add', function() use ($app) {

    $app->render("admin_question_add.html.twig", array('operation' => "Create", 'url' => "add"));
});

//post to add question 
$app->post('/admin/question/add', function() use ($app) {

    $question = $app->request()->post('question');
    $ans1 = $app->request()->post('ans1');
    $ans2 = $app->request()->post('ans2');
    $ans3 = $app->request()->post('ans3');
    $ans4 = $app->request()->post('ans4');

    $errorList = array();
    if (strlen($question) < 2 || strlen($question) > 150) {
        array_push($errorList, "Question must be 2-150 characters long");
    }
    if (strlen($ans1) < 2 || strlen($ans1) > 150) {
        array_push($errorList, "Answer1 must be 2-150 characters long");
    }
    if (strlen($ans2) < 2 || strlen($ans2) > 150) {
        array_push($errorList, "Answer2 must be 2-150 characters long");
    }
    if (strlen($ans3) < 2 || strlen($ans3) > 150) {
        array_push($errorList, "Answer3 must be 2-150 characters long");
    }
    if (strlen($ans4) < 2 || strlen($ans4) > 150) {
        array_push($errorList, "Answer4 must be 2-150 characters long");
    }
    $questionList = array(
        'question' => $question,
        'ans1' => $ans1,
        'ans2' => $ans2,
        'ans3' => $ans3,
        'ans4' => $ans4,
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    );

    //print_r($questionList);
    if ($errorList) {
        $errorMessage = "Please enter between 2 and 150 characters";
        $app->render("admin_question_add.html.twig", array(
            'operation' => "Create",
            'url' => "add",
            'errorMessage' => $errorMessage,
            'question' => $question,
            'ans1' => $ans1,
            'ans2' => $ans2,
            'ans3' => $ans3,
            'ans4' => $ans4
        ));
    } else {

        //print_r($questionList);
        DB::insert('questions', array(
            "question" => $question,
            "ans1" => $ans1,
            "ans2" => $ans2,
            "ans3" => $ans3,
            "ans4" => $ans4
        ));
        $textToDisplay = $question . " : Question was added to the database";
        $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay,
            'toptemplate' => topcontent()[0],
            'topuser' => topcontent()[1],
            'topadmin' => topcontent()[2]
        ));
    }
});


//get the question from the database for update
$app->get('/admin/question/edit(/:id)', function($id = 0) use ($app) {

    $question = DB::queryFirstRow("SELECT * FROM questions WHERE id=%i", $id);
    if (!$question) {
        echo 'Product not found';
        return;
    }
    //print_r($question);
    $app->render("admin_question_add.html.twig", array(
        'url' => 'modify',
        'id' => $question['id'],
        'question' => $question['question'],
        'ans1' => $question['ans1'],
        'ans2' => $question['ans2'],
        'ans3' => $question['ans3'],
        'ans4' => $question['ans4'],
        'operation' => "Modify",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    ));
})->conditions(array(
    'id' => '[0-9]+'));

//update question from retreived database
$app->post('/admin/question/modify', function () use($app) {

    $id = $app->request()->post('id');
    $question = $app->request()->post('question');
    $ans1 = $app->request()->post('ans1');
    $ans2 = $app->request()->post('ans2');
    $ans3 = $app->request()->post('ans3');
    $ans4 = $app->request()->post('ans4');
    $questionList = array(
        'id' => $id,
        'question' => $question,
        'ans1' => $ans1,
        'ans2' => $ans2,
        'ans3' => $ans3,
        'ans4' => $ans4,
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    );

    print_r($questionList);
    $errorList = array();
    if (strlen($question) < 2 || strlen($question) > 150) {
        array_push($errorList, "Question must be 2-150 characters long");
    }
    if (strlen($ans1) < 2 || strlen($ans1) > 150) {
        array_push($errorList, "Answer1 must be 2-150 characters long");
    }
    if (strlen($ans2) < 2 || strlen($ans2) > 150) {
        array_push($errorList, "Answer2 must be 2-150 characters long");
    }
    if (strlen($ans3) < 2 || strlen($ans3) > 150) {
        array_push($errorList, "Answer3 must be 2-150 characters long");
    }
    if (strlen($ans4) < 2 || strlen($ans4) > 150) {
        array_push($errorList, "Answer4 must be 2-150 characters long");
    }

    if ($errorList) {
        $errorMessage = "Please modify fields between 2 and 150 characters";
        $app->render("admin_question_add.html.twig", array(
            'url' => 'modify',
            'errorMessage' => $errorMessage,
            'id' => $questionList['id'],
            'question' => $questionList['question'],
            'ans1' => $questionList['ans1'],
            'ans2' => $questionList['ans2'],
            'ans3' => $questionList['ans3'],
            'ans4' => $questionList['ans4'],
            'operation' => "Modify",
            'toptemplate' => topcontent()[0],
            'topuser' => topcontent()[1],
            'topadmin' => topcontent()[2]
        ));
    } else {
        //print_r($question);
        DB::update('questions', array(
            "question" => $question,
            "ans1" => $ans1,
            "ans2" => $ans2,
            "ans3" => $ans3,
            "ans4" => $ans4
                ), 'id=%i', $id);
        $textToDisplay = $question . " : question was updated in the database";
        $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay,
            'toptemplate' => topcontent()[0],
            'topuser' => topcontent()[1],
            'topadmin' => topcontent()[2]));
    }
});


//get the question from the database for deletion
$app->get('/admin/question/delete(/:id)', function($id = 0) use ($app) {
    //print_r($id);
    $question = DB::queryFirstRow("SELECT * FROM questions WHERE id=%i", $id);
    if (!$question) {
        $errorMessage = "Product not found";
        $app->render("admin_question_add.html.twig", array(
            'errorMessage' => $errorMessage,
            'url' => 'delete',
            'id' => $question['id'],
            'question' => $question['question'],
            'ans1' => $question['ans1'],
            'ans2' => $question['ans2'],
            'ans3' => $question['ans3'],
            'ans4' => $question['ans4'],
            'operation' => "Delete",
            'toptemplate' => topcontent()[0],
            'topuser' => topcontent()[1],
            'topadmin' => topcontent()[2]
        ));
        return;
    }
    //print_r($question);
    $app->render("admin_question_add.html.twig", array(
        'url' => 'delete',
        'id' => $question['id'],
        'question' => $question['question'],
        'ans1' => $question['ans1'],
        'ans2' => $question['ans2'],
        'ans3' => $question['ans3'],
        'ans4' => $question['ans4'],
        'operation' => "Delete",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    ));
})->conditions(array(
    'id' => '[0-9]+'));

//delete customer retreived from database
$app->post('/admin/question/delete', function () use($app) {

    $id = $app->request()->post('id');
//    print_r($id);
    $question = $app->request()->post('question');
//    print_r($question);
    DB::delete('questions', 'id=%i', $id);
    $textToDisplay = $question . " : question was deleted from the database";
    $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay,
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]));
});

//list of  Survey Templates - table style
$app->get('/admin/template/list', function() use ($app) {
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }

    $templatelist = DB::query("SELECT * FROM templates as t,questions as q, templatesquestions as tq
WHERE q.id=tq.idquestion AND tq.idtemplate=t.id ORDER BY  t.id");
    print_r($templatelist);
    $app->render("list_template.html.twig", array(
        'templatelist' => $templatelist));
});

//template list only 
$app->get('/admin/template/onlytemplatelist', function() use ($app) {
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }

    $templatelist = DB::query("SELECT * FROM templates as t ORDER BY  t.id");
    //print_r($templatelist);
    $_SESSION['$linkToGoBack'] = "/admin/template/onlytemplatelist";
    $app->render("list_onlytemplate.html.twig", array(
        'templatelist' => $templatelist));
});
//select template to delete
$app->get('/admin/template/onlytemplatelist/delete(/:id)', function($id = 0) use ($app) {

    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }
    $template = DB::query("SELECT question,ans1,ans2,ans3,ans4 FROM templates as t,questions as q, templatesquestions as tq
WHERE q.id=tq.idquestion AND tq.idtemplate=t.id AND  t.id=%i", $id);
    $templatename = DB::queryFirstRow("SELECT name FROM templates as t WHERE t.id=%i", $id);
    //print_r($template);

    $linkToGoBack = $_SESSION['$linkToGoBack'];
    $textToDisplay = json_encode($template, JSON_PRETTY_PRINT);
    $mainTitle = "Delete Template :";
    $title = json_encode($templatename, JSON_PRETTY_PRINT);
    $action = "Delete";
    $actionUrl = "/admin/template/onlytemplatelist/delete";
    $app->render('json_display_with_links.html.twig', array(
        'mainTitle' => $mainTitle,
        'title' => $title,
        'textToDisplay' => $textToDisplay,
        'goBack' => $linkToGoBack,
        'action' => $action,
        'actionUrl' => $actionUrl,
        'id' => $id
    ));
});
//select template to delete
$app->get('/admin/template/onlytemplatelist/select(/:id)', function($id = 0) use ($app) {

    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }
    $_SESSION['templateselected'] = DB::queryFirstRow("SELECT * FROM templates WHERE id=%i", $id);
    print_r($_SESSION['templateselected']);
    $template = DB::query("SELECT question,ans1,ans2,ans3,ans4 FROM templates as t,questions as q, templatesquestions as tq
WHERE q.id=tq.idquestion AND tq.idtemplate=t.id AND  t.id=%i", $id);
    $templatename = DB::queryFirstRow("SELECT name FROM templates as t WHERE t.id=%i", $id);

    $linkToGoBack = $_SESSION['$linkToGoBack'];
    $textToDisplay = json_encode($template, JSON_PRETTY_PRINT);
    $mainTitle = "Selected Template :";
    $title = json_encode($templatename, JSON_PRETTY_PRINT);
    $action = "Select";
    $app->render('json_display_with_links.html.twig', array(
        'mainTitle' => $mainTitle,
        'title' => $title,
        'textToDisplay' => $textToDisplay,
        'goBack' => $linkToGoBack,
        'action' => $action,
        'id' => $id
    ));
});


//Delete the template
$app->post('/admin/template/onlytemplatelist/delete', function () use($app) {
    if (!$_SESSION['todouser']) {
        $app->render('login.html.twig'
        );
        return;
    }
    $id = $app->request()->post('id');
    print_r($id);
});



//list of  Survey Templates
$app->get('/admin/template/list/select', function() use ($app) {
    $surveyList1 = DB::query("SELECT * FROM surveys");
    $surveyList2 = array();
    $onlyselect = 1;
    foreach ($surveyList1 as $key => $value) {
        // var_dump($survey); 
        $question1 = DB::queryFirstRow("SELECT q.question as question1,q.id as q1idQT FROM questions as q WHERE q.id = $value[idquestion1] ");

        $question2 = DB::queryFirstRow("SELECT q.question as question2,q.id as q2dQT FROM questions as q WHERE q.id = $value[idquestion2] ");


        $result = array_merge($value, $question1, $question2);
        $surveyList2[] = $result;
    };

    $app->render("admin_list.html.twig", array(
        'userList' => $surveyList2,
        'titlelist' => "Survey Template",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2],
        'onlyselect' => $onlyselect
    ));
});


//get the template from the database to Select as Active Template
$app->get('/admin/template/select(/:id)', function($id = 0) use ($app) {
    //print_r($id);
    $survey = DB::queryFirstRow("SELECT * FROM surveys WHERE id=%i", $id);
    // print_r($survey);
    $question1 = DB::queryFirstRow("SELECT q.question as question1,q.id as q1idQT FROM questions as q WHERE q.id = $survey[idquestion1] ");
    $question2 = DB::queryFirstRow("SELECT q.question as question2,q.id  as q2dQT FROM questions as q WHERE q.id = $survey[idquestion2] ");
    //print_r($survey);
    if (!$survey || !$question1 || !$question2) {
        echo 'Product not found';
        return;
    }
    $result = array_merge($survey, $question1, $question2);
    $app->render("admin_template_add.html.twig", array(
        'url' => 'select',
        'id' => $result['id'],
        'name' => $result['name'],
        'idquestion1' => $result['idquestion1'],
        'idquestion2' => $result['idquestion2'],
        'question1' => $result['question1'],
        'question2' => $result['question2'],
        'operation' => "Select",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    ));
})->conditions(array(
    'id' => '[0-9]+'));
//Active template from database
$app->post('/admin/template/select', function () use($app) {

    $id = $app->request()->post('id');
    $name = $app->request()->post('name');
    $_SESSION['templateselected'] = DB::queryFirstRow("SELECT * FROM surveys WHERE id=%i", $id);
    $textToDisplay = $name . " : survey is the active one";
    $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay,
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]));
});


//get the template from the database to delete
$app->get('/admin/template/delete(/:id)', function($id = 0) use ($app) {
    //print_r($id);
    $survey = DB::queryFirstRow("SELECT * FROM surveys WHERE id=%i", $id);
    // print_r($survey);
    $question1 = DB::queryFirstRow("SELECT q.question as question1,q.id as q1idQT FROM questions as q WHERE q.id = $survey[idquestion1] ");
    $question2 = DB::queryFirstRow("SELECT q.question as question2,q.id  as q2dQT FROM questions as q WHERE q.id = $survey[idquestion2] ");
    //print_r($survey);
    if (!$survey || !$question1 || !$question2) {
        echo 'Product not found';
        return;
    }
    $result = array_merge($survey, $question1, $question2);
    $app->render("admin_template_add.html.twig", array(
        'url' => 'delete',
        'id' => $result['id'],
        'name' => $result['name'],
        'idquestion1' => $result['idquestion1'],
        'idquestion2' => $result['idquestion2'],
        'question1' => $result['question1'],
        'question2' => $result['question2'],
        'operation' => "Delete",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    ));
})->conditions(array(
    'id' => '[0-9]+'));

//delete template from database
$app->post('/admin/template/delete', function () use($app) {

    $id = $app->request()->post('id');
    $name = $app->request()->post('name');
    //print_r($id);
    DB::delete('surveys', 'id=%i', $id);
    $textToDisplay = $name . " : survey was deleted from the database";
    $app->render("congratulation.html.twig", array('textToDisplay' => $textToDisplay,
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]));
});

//list of Questions to create a Survey Template
$app->get('/admin/template/add', function() use ($app) {
    $userList = DB::query("SELECT * FROM questions");
    print_r($userList);
    $app->render("admin_list.html.twig", array(
        'userList' => $userList,
        'titlelist' => "Questions",
        'admin' => "template",
        'extraTitle' => "Please Select All the Questions you need and press Next.",
        'toptemplate' => topcontent()[0],
        'topuser' => topcontent()[1],
        'topadmin' => topcontent()[2]
    ));
});
//display the info of the template to be added
$app->post('/admin/template/add/step1', function() use ($app) {
    $id = $app->request()->post('id');
    if (!$id) {
        $textToDisplay = "You have not selected any questions";
        $app->render("question_selection_error_for_template.html.twig", array(
            'textToDisplay' => $textToDisplay
                )
        );
        return;
    }
    //print_r($id);    
    foreach ($id as $q) {
        $selectedQuestion[] = DB::queryFirstRow("SELECT * FROM questions WHERE id=%i", $q);
    }
    $_SESSION['$selectedQuestions'] = $selectedQuestion;
    print_r(count($_SESSION['$selectedQuestions']));
    print_r($_SESSION['$selectedQuestions']);

    $app->render("add_template_list.html.twig", array(
        'selectedQuestions' => $_SESSION['$selectedQuestions']
            )
    );
});
//add template to database
$app->post('/admin/template/add/step2', function() use ($app) {

    $templatename = $app->request()->post('templatename');
//    print_r($templatename);
//   
//
    $errorList = array();
    if (strlen($templatename) < 2 || strlen($templatename) > 100) {
        array_push($errorList, "Template name must be 2-100 characters long");
    }

    if ($errorList) {

        $app->render("add_template_list.html.twig", array(
            'selectedQuestions' => $_SESSION['$selectedQuestions'],
            'errorlist' => $errorList[0]));
    } else {
        DB::insert('templates', array(
            "name" => $templatename
        ));
        $idinserted = DB::insertId();

        $_SESSION['templateselected'] = DB::queryFirstRow("SELECT * FROM templates WHERE id=%i", $idinserted);

        foreach ($_SESSION['$selectedQuestions'] as $q) {
            DB::insert('templatesquestions', array(
                "idtemplate" => $idinserted,
                "idquestion" => $q['id']));
        }
        $template = DB::query("SELECT * FROM templates as t,questions as q, templatesquestions as tq "
                        . "WHERE q.id=tq.idquestion AND tq.idtemplate=t.id	AND t.id=%i", $idinserted);
        print_r($template);
        $app->render("display_template.html.twig", array(
            'selectedQuestions' => $_SESSION['$selectedQuestions'],
            'templatename' => $templatename));
    }
});


//get the add customer window to start a new survey
$app->get('/admin/start/survey/addcustomer', function() use ($app) {
    if (!$_SESSION['userselected']) {
        $textToDisplay = "Please select a customer from list to start a survey";
        $app->render("user_selection_error.html.twig", array(
            'textToDisplay' => $textToDisplay
                )
        );
        return;
    }
    if (!$_SESSION['templateselected']) {
        $textToDisplay = "Please select a template from list to start a survey";
        $app->render("template_selection_error.html.twig", array(
            'textToDisplay' => $textToDisplay
                )
        );
        return;
    }
    print_r($_SESSION['userselected']);
    $app->render("admin_customer_add.html.twig", array('extraoperation' =>
        "Start a Survey", 'operation' =>
        "Registration", 'url' => "survey",
        'surveyname' => topcontent()[0],
        'name' => $_SESSION['userselected']['name'],
        'phone' => $_SESSION['userselected']['phone'],
        'email' => $_SESSION['userselected']['email'],
        'company' => $_SESSION['userselected']['company'],
        'position' => $_SESSION['userselected']['position'],
        'topuser' => $_SESSION['templateselected']['name'],
        'toptemplate' => $_SESSION['userselected']['name'],
        'topadmin' => $_SESSION['todouser']['name']
    ));
});
//start survey question1
$app->post('/admin/customer/survey', function() use ($app) {
    $surveydate = $app->request()->post('surveydate');
    $_SESSION['datesurvey'] = $surveydate;
    $idquestion1 = $_SESSION['templateselected']['idquestion1'];

    $idquestion2 = $_SESSION['templateselected']['idquestion2'];
    $question1 = DB::queryFirstRow("SELECT * FROM questions WHERE id=%s", $idquestion1);
    $question2 = DB::queryFirstRow("SELECT * FROM questions WHERE id=%s", $idquestion2);

    print_r($question2);

    $app->render("admin_survey_question1.html.twig", array(
        'username' => $_SESSION['userselected']['name'],
        'question1' => $question1['question'],
        'ans11' => $question1['ans1'],
        'ans12' => $question1['ans2'],
        'question2' => $question2['question'],
        'ans21' => $question2['ans1'],
        'ans22' => $question2['ans2']
            )
    );
});


//quiz answer question
$app->post('/admin/customer/survey/answer', function() use ($app) {
    $selection1 = $app->request()->post('selection1');
    $selection2 = $app->request()->post('selection2');
    print_r($selection1);
    print_r($_SESSION['datesurvey']);
    print_r($_SESSION['userselected']);
    print_r($_SESSION['templateselected']);

    DB::insert('responses', array(
        "userid" => $_SESSION['userselected']['id'],
        "name" => $_SESSION['activesurvey'],
        "surveyid" => $_SESSION['templateselected']['id'],
        "anstoquestion1" => $selection1,
        "anstoquestion2" => $selection2,
        "date" => $_SESSION['datesurvey']
    ));
    $idinserted = DB::insertId();
    print_r($idinserted);
    $textToDisplay = "Congratulation " . $_SESSION['userselected']['name'] . " completed " . $_SESSION['templateselected']['name'] . " survey.";
    $app->render("congratulation.html.twig", array(
        'textToDisplay' => $textToDisplay,
        'topuser' => $_SESSION['templateselected']['name'],
        'toptemplate' => $_SESSION['userselected']['name'],
        'topadmin' => $_SESSION['todouser']['name']
    ));
});
$app->run();


