<?php

class Index extends Controller{
	
	function __construct(){
		parent::__construct();
		Session::init();
		$loggedIn = Session::get("loggedIn");
		$type = Session::get("type");
		if($loggedIn == true){
			if ($type == 'USER'){
				header('location: dashboardss');
			}
			else{
				header('location: admin_dashboardss');
			}
		}
	}

	function index(){
		$this->view->render('index/index');
		header('location: index');
	}
	
}


?>