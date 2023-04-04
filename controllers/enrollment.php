<?php

class Enrollment extends Controller{
	
	function __construct(){
		parent::__construct();
		Session::init();
	}

	function index(){
		$this->view->getUser = $this->model->getUser();
		
		$this->view->render('enrollment/index');
	}

	function getID(){
		$data['uname'] = $_POST['uname'];
		$this->model->getID($data);
	}

	
}


?>