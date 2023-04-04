<?php

class Stations extends Controller{
	
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

		$this->view->render('stations/index');
	}

    function setActive(){
        $data = array();
        $data['a'] = $_POST['a'];
        $this->model->setActive($data);
    }

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
}


?>