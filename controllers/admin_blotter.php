<?php

class Admin_Blotter extends Controller{
	
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
        $this->view->getBlotter = $this->model->getBlotter();
        $this->view->getAdmin = $this->model->getAdmin();

		$this->view->render('admin_blotter/index');
	}

    function setActive(){
        $data = array();
        $data['a'] = $_POST['a'];
        $this->model->setActive($data);
    }
	
	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}
	
}


?>