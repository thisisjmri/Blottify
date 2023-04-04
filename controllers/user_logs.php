<?php

class User_Logs extends Controller{
	
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

		$this->view->getUserinfo = $this->model->getUserinfo();
		// $this->view->getDatetime = $this->model->getDatetime();
		// $this->view->getActivity = $this->model->getActivity();
		$this->view->getStation = $this->model->getStation();
		$this->view->getUser = $this->model->getUser();
		$this->view->getULogs = $this->model->getULogs();

		;

		$this->view->render('user_logs/index');
	}

    function setActive(){
        $data = array();
        $data['a'] = $_POST['a'];
        $this->model->setActive($data);
    }

	function getResults(){
		$data = array();

		$data['location'] = $_POST['location'];
		$data['start'] = $_POST['start'];
		$data['end'] = $_POST['end'];
		$data['kind'] = $_POST['kind'];
		$data['cfilter'] = $_POST['cfilter'];
		$data['daily'] = $_POST['daily'];
		$data['monthly'] = $_POST['monthly'];
		$data['annual1'] = $_POST['annual1'];

		$this->model->getResults($data);
	}

	// function logout(){
	// 	$this->model->logout();
	// }
	
	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}
}


?>