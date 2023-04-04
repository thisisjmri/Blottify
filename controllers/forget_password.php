<?php

class Forget_Password extends Controller{
	
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
		$this->view->render('forget_password/index');
	}

	// function checkEmail(){
	// 	$data = $_POST['eemail'];
	// 	$this->model->checkEmail($data);
	// }

	function checkEmail(){
	    $data = $_POST['eemail'];
	    $this->model->checkEmail($data);
	}

	function emailOTP_first_attempt(){
		$this->model->emailOTP_first_attempt();
	}
	
}


?>