<?php

class router {

	protected $routes =[

		'GET' => [],
		'POST' => []

	];

	public static function load ($file) {

		$router = new static;

		require $file;

		return $router;
	}

	public function GET ($uri,$controller_path) {

		$this->routes['GET'][$uri] = $controller_path;

	}

		public function POST ($uri,$controller_path) {

			$this->routes['POST'][$uri] = $controller_path;
		
	}

	public function direct ($uri, $RequestTipe) {

		if (array_key_exists($uri, $this->routes[$RequestTipe])) {

			return $this->routes[$RequestTipe][$uri];
		}

		throw new Exception ('This rout didnt exist!');

	}
}