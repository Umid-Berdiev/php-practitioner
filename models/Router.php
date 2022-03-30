<?php

/**
 * Router class
 */
class Router
{
  public $routes = [
    'GET' => [],
    'POST' => [],
    'PATCH' => [],
    'PUT' => [],
    'DELETE' => []
  ];

  public function define($routes)
  {
    $this->routes = $routes;
  }

  public function direct($uri, $request_method)
  {
    if (array_key_exists($uri, $this->routes[$request_method])) {
      return $this->callAction(
        ...explode('@', $this->routes[$request_method][$uri])
      );
      // return $this->routes[$request_method][$uri];
    }

    throw new Exception("No route defined for this URI.", 1);
  }

  public static function load($file)
  {
    $router = new static; // same as new Router()
    require $file;
    return $router;
  }

  public function get($uri, $controller)
  {
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri, $controller)
  {
    $this->routes['POST'][$uri] = $controller;
  }

  public function callAction($controller, $action)
  {
    $controller = new $controller;

    if (!method_exists($controller, $action)) {
      throw new Exception("$controller does not respond to the $action action", 1);
    }

    return $controller->$action();
  }
}
