<?php

class Libraries_Main extends Controller{
	
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
		$admin_id = Session::get("admin_id");
        $this->view->getStation = $this->model->getStation();
        $this->view->getBlotter = $this->model->getBlotter();
        $this->view->getAdmin = $this->model->getAdmin();

		$this->view->render('libraries_main/index');
	}

    function setActive(){
        $data = array();
        $data['a'] = $_POST['a'];
        $data['b'] = $_POST['b'];
        $this->model->setActive($data);
    }
    
    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;
    }
	
}


?>