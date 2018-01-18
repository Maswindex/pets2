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

//Define a default route
$f3->route('GET /pets/show/@pets', function ($f3, $params)
{
    switch($params['pets'])
    {
        case 'dog' :
            echo '<h2>Dog</h2>';
            echo "<img src='../../images/dog.jpeg'>";
            break;
        case 'cat' :
            echo '<h2>Cat</h2>';
            echo "<img src='../../images/cat.jpeg' alt='cat'>";
            break;
        default:
            $f3->error(404);
    }
});

//define form1
$f3->route('GET /pets/order', function ()
{
    $view = new View;
    echo $view->render('views/form1.html');
});


//Define order 2 form 2
$f3->route('GET /pets/order2', function ()
{
    $view = new View;
    echo $view->render('views/form2.html');
});


//Define a results page
$f3->route('GET /pets/results', function ()
{
    $view = new View;
    echo $view->render('views/results.html');
});


//run fat free
$f3->run();
