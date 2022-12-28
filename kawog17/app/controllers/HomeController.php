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
            $this->view('home', 'dashboard', $viewbag);
        }else{
            $this->view('user', 'login', $viewbag);
        }
        
	}
	
    
	public function restricted () {
		if($this->logged_in()) {
			$this->view('home', 'restricted');
		} else {
			header('Location: /user/login');
		}
	}
    
    
    public function dashboard (){
        if($this->logged_in()) {
            $viewbag['images'] = $this->model('home')->get_images();
			$this->view('home', 'dashboard', $viewbag);
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
    
    public function upload () {
        if($this->method('post')) {
            $username = $this->model('Home')->upload();
            header('Location: /home/dashboard');
        } else {
            $this->view('home', 'uploadpage');
        }
    }
	
}