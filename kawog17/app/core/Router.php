<?php

class Router {
	
	protected $controller = 'HomeController';
	protected $method = 'index';
	protected $params = [];
	

	function __construct () {
		$url = $this->get_url_as_array();
		$url = $this->initialize_controller($url);
		$url = $this->prepare_function_call($url);
		
		
		$this->params = $url ? array_values($url) : [];

		
		call_user_func_array([$this->controller, $this->method], $this->params);
		
	}
	
	
	private function get_url_as_array () {
		
		$url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
		
		
		if(substr($url, -1) === "/") {
			$url = substr($url, 0, strlen($url) - 1);
		}

		$url = explode('/', $url);
		return array_slice($url, 1);
	}
	
		
	private function initialize_controller($url) {
		
		$controller_path = __DIR__ . '/../controllers/'
							. $this->controller . '.php';
		
		
		if(isset($url[0])) {
			$temp_controller_path = __DIR__ . '/../controllers/' 
								. ucfirst($url[0]) 
								. 'Controller.php';
			if(file_exists($temp_controller_path)) {
				$controller_path = $temp_controller_path;
				$this->controller = ucfirst($url[0]) . 'Controller';
				$url = array_slice($url, 1);
			}
		}
		
		
		require_once $controller_path;
		$this->controller = new $this->controller;

		return $url;
	}

	
	private function prepare_function_call($url) {
		if(isset($url[0])) {
			if(method_exists($this->controller, $url[0])) {
				$this->method = $url[0];
				$url = array_slice($url, 1);
			}
		}
		return $url;
	}
}
