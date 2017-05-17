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
$app->get('/logout', function() use ($app) {
    unset($_SESSION['todouser']);
    $app->render('login.html.twig');
});
$app->run();
