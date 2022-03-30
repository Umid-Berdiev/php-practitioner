<?php

$router = new App\Models\Router();

// $router->define([
//   '' => 'controllers/index.php',
//   'about' => 'controllers/about.php',
//   'about/culture' => 'controllers/about-culture.php',
//   'contact' => 'controllers/contact.php',
//   'names' => 'controllers/add-name.php'
// ]);

$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('about/culture', 'PageController@aboutCulture');
$router->get('contact', 'PageController@contact');
// $router->get('about/culture', 'controllers/about-culture.php');
// $router->post('names', 'controllers/add-name.php');
$router->get('tasks', 'TaskController@index');
$router->post('tasks', 'TaskController@store');
// $router->post('tasks', 'controllers/tasks-store.php');

// var_dump($router->routes);
