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
				
		if($this->logged_in()){
            $this->view('home', 'index', $viewbag);
        }else{
            $this->view('user', 'login', $viewbag);
        }
        
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
    
    public function userlist (){
        if($this->logged_in()) {
			$this->view('home', 'userlist');
		} else {
			header('Location: /user/login');
		}
    }
    
    public function dashboard (){
        if($this->logged_in()) {
			$this->view('home', 'dashboard');
		} else {
			header('Location: /user/login');
		}
    }
    
    public function uploadpage (){
        if($this->logged_in()) {
			$this->view('home', 'uploadpage');
		} else {
			header('Location: /user/login');
		}
    }
	
}