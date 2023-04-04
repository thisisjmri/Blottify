<?php

class Login extends Controller{
	
	function __construct(){
		parent::__construct();
		Session::init();
		$loggedIn = Session::get("loggedIn");
		$type = Session::get("type");
		if($loggedIn == true){
			if ($type == 'USER'){
				header('location: dashboardss');
			}
			else{
				header('location: admin_dashboardss');
			}
		}
	}

	function index(){
		$this->view->render('index/index');
	}

	function run(){
		$data = array();
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		$this->model->run($data);
	}
	
	function logout(){
		$this->model->logout();
	}
}


?>