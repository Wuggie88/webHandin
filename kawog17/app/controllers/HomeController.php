<?php

/** Default Controller */
class HomeController extends Controller {
	
	/**
	 * Default function for HomeController
	 * 
	 * Collects info in "viewbag":
	 * - using functino parameters
	 * - using services
	 * - using models
	 * and sending it to the view
	 */
	public function index ($param_a = null, $param_b = null) {
				
		$this->view('user', 'login', $viewbag);
	}
	
	/**
	 * Example of function that must only be called when user is logged in
	 */
	public function restricted () {
		if($this->logged_in()) {
			$this->view('home', 'restricted');
		} else {
			header('Location: /user/login');
		}
	}
	
}