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

// Define a breakfast route
$f3->route('GET /breakfast', function(){
    //echo '<h1>My Favorite Food</h1>';
    $view = new View();
    echo $view->render('views/breakfast.html');
});

// Define a lunch route
$f3->route('GET /lunch', function(){
    //echo '<h1>My Favorite Food</h1>';
    $view = new View();
    echo $view->render('views/lunch.html');
});

// Define a pancakes route
$f3->route('GET /breakfast/pancakes', function(){
    //echo '<h1>My Favorite Food</h1>';
    $view = new View();
    echo $view->render('views/pancakes.html');
});

// Define a dinner route
$f3->route('GET /dinner', function(){
    //echo '<h1>My Favorite Food</h1>';
    $view = new View();
    echo $view->render('views/dinner.html');
});

// Define a fettuccine alfredo route
$f3->route('GET /dinner/fettuccinealfredo', function(){
    //echo '<h1>My Favorite Food</h1>';
    $view = new View();
    echo $view->render('views/fettuccinealfredo.html');
});

// Define a chicken adobo route
$f3->route('GET /dinner/chickenadobo', function(){
    //echo '<h1>My Favorite Food</h1>';
    $view = new View();
    echo $view->render('views/chickenadobo.html');
});

// Define a chicken enchiladas route
$f3->route('GET /dinner/chickenenchiladas', function(){
    //echo '<h1>My Favorite Food</h1>';
    $view = new View();
    echo $view->render('views/chickenenchiladas.html');
});


//define a route parameter
	$f3->route('GET /@food', function ($f3, $params)
	{
		print_r($params);
		echo "<h3>I like " .$params['food']."</h3>";
	});


	//define a route with multiple parameter
	$f3->route('GET /@meal/@food', function ($f3, $params)
	{
		print_r($params);
		echo "<h3>I like " .$params['food']." for ".$params['meal']."</h3>";
	});

//run fat free
$f3->run();


