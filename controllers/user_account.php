<?php

class User_Account extends Controller{
	
	function __construct(){
		parent::__construct();
		Session::init();
		$loggedIn = Session::get("loggedIn");
		$type = Session::get("type");
		if($loggedIn == false){
			Session::destroy();
			header('location: login');
			exit;
		}else if ($type == 'USER'){
			header('location: dashboardss');
		}
	}

	function index(){
		$this->view->getStation = $this->model->getStation();
		$this->view->getRank = $this->model->getRank();
		$this->view->getUser = $this->model->getUser();

		$this->view->render('user_account/index');
	}

	function addUser(){
		$data = array();
		$data['firstname'] = $_POST['firstname'];
		$data['middlename'] = $_POST['middlename'];
		$data['lastname'] = $_POST['lastname'];
		$data['userstation'] = $_POST['userstation'];
		$data['user_name'] = $_POST['user_name'];
		$data['bday'] = $_POST['bday'];
		$data['email'] = $_POST['email'];
		$data['contact'] = $_POST['contact'];
		$data['sex'] = $_POST['sex'];
		$data['rank'] = $_POST['rank'];
		$this->model->addUser($data);
	}

	function checkUsername(){
		$data = $_POST['user_name'];
		$this->model->checkUsername($data);
	}

	function checkEmail(){
		$data = $_POST['email'];
		$this->model->checkEmail($data);
	}
	
	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}
	
}


?>