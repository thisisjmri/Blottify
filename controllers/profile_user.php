<?php

class Profile_User extends Controller{
	
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
		$this->view->getAdmin = $this->model->getAdmin();
		$this->view->getStation = $this->model->getStation();
		$this->view->getAdmin1 = $this->model->getAdmin1($admin_id);
		$this->view->getBlotterCount = $this->model->getBlotterCount($admin_id);

		$this->view->render('profile_user/index');
	}
    
    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;
    }

	function updateProfile(){
		$admin_id = Session::get("admin_id");
		$data = array();

		$data['image_name'] = $_FILES['image']['name'];
		$data['image_tmp'] = $_FILES['image']['tmp_name'];
		$data['image_target'] = "uploads/profile_image/" . basename($_FILES["image"]["name"]);

		$this->model->updateProfile($data,$admin_id);
	}

	function updatePassword(){
		$admin_id = Session::get("admin_id");
		$data = array();
		$data['password'] = $_POST['password'];
		$data['current'] = $_POST['current'];
		$data['id'] = $admin_id;
		$this->model->updatePassword($data);
	}

	function checkPassword(){
		$admin_id = Session::get("admin_id");

		$data = $_POST['current'];
		$this->model->checkPassword($data,$admin_id);
	}

	function updateProf(){
		$admin_id = Session::get("admin_id");
		$data = array();

        $data['firstName'] = $_POST['firstName'];
		$data['middleName'] = $_POST['middleName'];
		$data['lastName'] = $_POST['lastName'];
		$data['username'] = $_POST['username'];
		$data['birthday'] = $_POST['birthday'];
		$data['station'] = $_POST['station'];
		$data['email'] = $_POST['email'];
		$data['mobile'] = $_POST['mobile'];

		$this->model->updateProf($data,$admin_id);
	}

	function checkUsername(){
		$data = $_POST['username'];
		$this->model->checkUsername($data);
	}

}


?>