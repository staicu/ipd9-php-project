<?php

session_cache_limiter(false);
session_start();

require_once '../vendor/autoload.php';

//DB::$host = '127.0.0.1';
DB::$user = 'surveydb';
DB::$password = 'vLRY2kgGn571UVKe';
DB::$dbName = 'surveydb';
DB::$port = 3306;
DB::$encoding = 'utf8';



// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/../cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/html');
if (!isset($_SESSION['todouser'])) {
    $_SESSION['todouser'] = array();
}

$twig = $app->view()->getEnvironment();
$twig->addGlobal('todouser', $_SESSION['todouser']);


$app->get('/', function() use ($app) {
    print_r($_SESSION['todouser']);
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
$app->get('/surveylist', function() use ($app) {
    /* $productList =  DB::query("SELECT * FROM products");
      $app->render("surveylist.html.twig", array(
      'productList' => $productList
      )); */
    $app->render("surveylist.html.twig");
});
$app->get('/register', function() use ($app) {
    /* $productList =  DB::query("SELECT * FROM products");
      $app->render("surveylist.html.twig", array(
      'productList' => $productList
      )); */
    $app->render("register.html.twig");
});

$app->post('/admin/users/add', function() use ($app) {
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

        $app->render("register.html.twig");
        echo 'not added';
    } else {

        print_r($errorList);
        print_r($userList);
        DB::insert('users', array(
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "company" => $company,
            "position" => $position
        ));
        $textToDisplay = $name." The surveyee was added to the database";
        $app->render("congratulation.html.twig",array('textToDisplay'=>$textToDisplay));
    }
});
$app->get('/admin/users/list', function() use ($app) {
    $userList =  DB::query("SELECT * FROM users");
    $app->render("surveylist.html.twig", array(
        'userList' => $userList
    ));
});

$app->run();
