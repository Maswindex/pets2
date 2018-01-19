<?php
    require_once("vendor/autoload.php");


    //create an instance of the Base class
    $f3 = Base::instance();

    //Define a default route
    $f3->route('GET /', function () {
        $view = new View;
        echo $view->render('views/home.html');
    });

    //Define a default route
    $f3->route('GET /pets/show/@pets', function ($f3, $params) {
        switch($params['pets']) {
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

    //Define a default route
    $f3->route('GET /pets/order', function () {
        $view = new View;
        echo $view->render('views/form1.html');
    });

    //Define a default route
    $f3->route('POST /pets/order2', function () {
        $view = new View;
        echo $view->render('views/form2.php');
    });

    //Define a default route
    $f3->route('POST /pets/results', function () {
        $view = new View;
        echo $view->render('views/results.php');
    });

    //run fat free
    $f3->run();
