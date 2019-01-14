<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');

//create and instance of the Base class
$f3 = Base::instance();
//turn on fat free error reporting
$f3->set('DEBUG',3);

//define a default route
$f3->route('GET /', function(){
    //echo '<h1>My Favorite Food</h1>';
    $view = new View();
    echo $view->render('views/home.html');
});

//run fat free
$f3->run();


