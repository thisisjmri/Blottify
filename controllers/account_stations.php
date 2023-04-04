<?php

class Account_Stations extends Controller{
	
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
		$this->view->getRank = $this->model->getRank();


		$this->view->render('account_stations/index');
	}

	function getStationType(){
		$this->view->getStationType = $this->model->getStationType();

		$this->view->render('account_stations/index');
	}


//ADD STATION
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


//ADD CRIME
	function addCrime(){
		Session::init();
		$admin_id = Session::get("admin_id");
		$data = array();
		$data['crime_name'] = $_POST['crime_name'];
		$data['admin_id'] = $admin_id;
		$this->model->addCrime($data);
	}

//USER-RANK-STATUS
	function getName(){
		$data = array();
		$data['id'] = $_POST['id'];

		$this->model->getName($data);
	}

	function setStat(){
		$data = array();
		$data['id'] = $_POST['id'];
		$data['stat'] = $_POST['stat'];
		$data['erank'] = $_POST['erank'];

		$this->model->setStat($data);
	}
	
	function getResults(){
		$data = array();
		$data['ustatus'] = $_POST['ustatus'];
		$data['ustation'] = $_POST['ustation'];

		$this->model->getResults($data);
	}

	function getStationinfo(){
		$data = array();
		$data['id'] = $_POST['id'];

		$this->model->getStationinfo($data);
	}

	function setStationinfo(){	
		$data = array();
		$data['id'] = $_POST['id'];
		$data['station_name'] = $_POST['station_name'];
		$data['station_location'] = $_POST['station_location'];
		$data['station_type'] = $_POST['station_type'];
		$data['station_number'] = $_POST['station_number'];

		$this->model->setStationinfo($data);
	}

   }

?>