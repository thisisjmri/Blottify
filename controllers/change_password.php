<?php

class Change_Password extends Controller{
	
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
		$this->view->render('change_password/index');
	}

	function updatePassword(){
		$admin_id = Session::get("admin_id");
		$data = array();
		$data['npass'] = $_POST['npass'];
		$data['cnpass'] = $_POST['cnpass'];
		$data['id'] = $admin_id;
		$this->model->updatePassword($data);
	}
	
}


?>