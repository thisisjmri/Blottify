<?php

class All_notification extends Controller{
	
	function __construct(){
		parent::__construct();
	}

	function index(){
		// $this->view->getBlotter = $this->model->getBlotter();
		$this->view->getNotif = $this->model->getNotif();
		$this->view->getStation = $this->model->getStation();
		$this->view->getUser = $this->model->getUser();

		$this->view->render('all_notification/index');
	}
	
}


?>