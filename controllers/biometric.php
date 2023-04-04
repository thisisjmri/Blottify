<?php

class Biometric extends Controller{
	
	function __construct(){
		parent::__construct();
		Session::init();
		$loggedIn = Session::get("loggedIn");
		$type = Session::get("type");
		if($loggedIn == true){
			if ($type == 'ADMIN'){
				header('location: admin_dashboardss');
			}
			else{
				header('location: dashboardss');
			}
		}
	}

	function index(){
		$this->view->render('biometric/index');
	}

	function addLogs(){
		$data = $_POST['id'];
		$this->model->addLogs($data);
	}

	function setAttempts(){
		$data = $_POST['id'];
		$this->model->setAttempts($data);
	}

	function checkTimer(){
		$data = $_POST['id'];
		$this->model->checkTimer($data);
	}

	function resetBio(){
		$data = $_POST['id'];
		$this->model->resetBio($data);
	}
	
}


?>