<?php

class Libraries extends Controller{
	
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
		$this->view->getStation = $this->model->getStation();
		$this->view->getBlotter = $this->model->getBlotter();
		$this->view->getmForward = $this->model->getmForward();
		$this->view->getUser = $this->model->getUser();
		
		$this->view->render('libraries/index');
	}

    function setActive(){
        $data = array();
        $data['a'] = $_POST['a'];
        $data['b'] = $_POST['b'];
        $this->model->setActive($data);
    }

	function getResults(){
		// $data = array();
		// $data['type_incident'] = $_POST['type_incident'];
		// $data['brgy_incident'] = $_POST['brgy_incident'];
		$data['id'] = $_POST['id'];
		$this->model->getResults($data);
	}

	function setForwarded(){
		$data['id'] = $_POST['id'];
		$this->model->setForwarded($data);
	}

	function getFilter(){
		$data = array();
		$data['cfilter'] = $_POST['cfilter'];
		$data['daily'] = $_POST['daily'];
		$data['monthly'] = $_POST['monthly'];
		$data['annual1'] = $_POST['annual1'];
		$data['start'] = $_POST['start'];
		$data['end'] = $_POST['end'];

		$this->model->getFilter($data);
	}

	function forwardAll(){
		$data = $_POST;
		$this->model->forwardAll($data);
	}

    
    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;
    }

}


?>