<?php
//echo'php';
session_cache_limiter(false);
session_start();

require_once '../vendor/autoload.php';

//DB::$host = '127.0.0.1';
DB::$user = 'slimtodo';
DB::$password = 'aaa';
DB::$dbName = 'slimdoto';
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

$app->render('/login/login.html.twig');



//$app->run();