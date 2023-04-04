<?php

class Reset_Password extends Controller{
	
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
		$this->view->render('reset_password/index');
	}

	function emailOTP_second_attempt(){
		$this->model->emailOTP_second_attempt();
	}

	function checkOTP(){
		$this->model->checkOTP();
	}
	
}


?>