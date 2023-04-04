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
			header('location: admin_dashboardss');
		}else if ($station_type == 'Sub Station'){
			header('location: dashboardss');
		}
	}

	function index(){
		$this->view->render('mapss/index');
	}
	
}


?>