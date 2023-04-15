<?php

class Mapss extends Controller{
	
	function __construct(){
		parent::__construct();
		Session::init();
		$loggedIn = Session::get("loggedIn");
		$type = Session::get("type");
		$station_type = Session::get("station_type");
		if($loggedIn == false){
			Session::destroy();
			header('location: login');
			exit;
		}else if ($type == 'ADMIN'){
			header('location: admin_blotter');
		}else if ($station_type == 'Sub Station'){
			header('location: dashboardss');
		}
	}

	function index(){
		$this->view->getBlotter = $this->model->getBlotter();
		$this->view->getCrime = $this->model->getCrime();

		$this->view->render('mapss/index');
	}

	function genChart(){
		$data = array();
		$data['crime'] = $_POST['crime'];
		$data['start'] = $_POST['start'];
		$data['end'] = $_POST['end'];
		$data['cfilter'] = $_POST['cfilter'];
		$data['daily'] = $_POST['daily'];
		$data['monthly'] = $_POST['monthly'];
		$data['annual1'] = $_POST['annual1'];
		$data['brgy'] = $_POST['brgy'];
		$this->model->genChart($data);
	}
	
	function specChart(){
		$data = array();
		$data['crime'] = $_POST['crime'];
		$data['start'] = $_POST['start'];
		$data['end'] = $_POST['end'];
		$data['brgy'] = $_POST['brgy'];
		$this->model->specChart($data);
	}

	function setGencolor(){
		$data = array();
		$data['crime'] = $_POST['crime'];
		$data['start'] = $_POST['start'];
		$data['end'] = $_POST['end'];
		$data['cfilter'] = $_POST['cfilter'];
		$data['daily'] = $_POST['daily'];
		$data['monthly'] = $_POST['monthly'];
		$data['annual1'] = $_POST['annual1'];
		$this->model->setGencolor($data);
	}

	// function getFilter(){
	// 	$data = array();
	// 	$data['crime'] = $_POST['crime'];
	// 	$data['start'] = $_POST['start'];
	// 	$data['end'] = $_POST['end'];

	// 	$this->model->getFilter($data);
	// }
	
}


?>