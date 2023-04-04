<?php

class Admin_Dashboardss extends Controller{
	
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
		$this->view->getBlotter = $this->model->getBlotter();
		$this->view->getBlotter1 = $this->model->getBlotter1();
		$this->view->getStation = $this->model->getStation();
		$this->view->getUser = $this->model->getUser();

		$this->view->render('admin_dashboardss/index');
	}

    function setActive(){
        $data = array();
        $data['a'] = $_POST['a'];
        $this->model->setActive($data);
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
	
	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}
	
}


?>