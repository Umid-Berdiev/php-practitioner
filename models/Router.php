<?php

/**
 * Router class
 */
class Router {
	protected $routes = [];

	public function define($routes) {
		$this->routes = $routes;
	}

	public function direct($uri) {
		if (array_key_exists($uri, $this->routes)) {
			return $this->routes[$uri];
		}

		throw new Exception("No route defined for this URI.", 1);
	}

	public static function load($file) {
		$router = new static; // same as new Router()
		require $file;
		return $router;
	}
}
