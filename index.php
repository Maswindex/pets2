<?php


session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once("vendor/autoload.php");

//create an instance of the Base class
$f3 = Base::instance();


//Define a default route
$f3->route('GET /', function ()
{
    $view = new View;
    echo $view->render('views/home.html');
});

///fatfree enable error reporting
$f3->set('DEBUG', 3); // highest is 3 lowest 0;

//run fat free
$f3->run();
