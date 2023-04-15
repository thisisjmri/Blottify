<?php

class Dashboardss extends Controller{
	
	function __construct(){
		parent::__construct();
		Session::init();
		$loggedIn = Session::get("loggedIn");
		$type = Session::get("type");
		if($loggedIn == false){
			Session::destroy();
			header('location: login');
			exit;
		}else if ($type == 'ADMIN'){
			header('location: admin_dashboardss');
		}
	}

	function index(){
		$this->view->getBlotter = $this->model->getBlotter();
		$this->view->getBlotter1 = $this->model->getBlotter1();
		$this->view->getNotif = $this->model->getNotif();
		$this->view->getStation = $this->model->getStation();
		$this->view->getUser = $this->model->getUser();

		$this->view->render('dashboardss/index');
	}

	function getNotifications(){
		$this->model->getNotifications();
	}

	function getCount(){
		$this->model->getCount();
	}

	function setOpen(){
		$this->model->setOpen();
	}

	function genChart(){
		$this->model->genChart();
	}

	function getResults(){
		$data['id'] = $_POST['id'];
		$this->model->getResults($data);
	}

	function getNResults(){
		$data = array();
		$data['id'] = $_POST['id'];
		$data['isread'] = $_POST['isread'];
		$this->model->getNResults($data);
	}
	
	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}
	
}


?>