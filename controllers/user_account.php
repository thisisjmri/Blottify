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
		$this->view->getUser = $this->model->getUser();

		$this->view->render('user_account/index');
	}

	function addStation(){
		Session::init();
		$admin_id = Session::get("admin_id");
		$data = array();
		$data['stname'] = $_POST['stname'];
		$data['staddress'] = $_POST['staddress'];
		$data['sttype'] = $_POST['sttype'];
		$data['stanumber'] = $_POST['stanumber'];
		$data['admin_id'] = $admin_id;
		$this->model->addStation($data);
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
	
	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}
	
}


?>