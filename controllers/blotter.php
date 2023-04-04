<?php

class Blotter extends Controller{
	
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
			header('location: admin_blotter');
		}
	}

	function index(){
		$this->view->getIncident = $this->model->getIncident();
		$this->view->getBarangay = $this->model->getBarangay();
        $this->view->getStation = $this->model->getStation();
        $this->view->getUser = $this->model->getUser();

		$this->view->render('blotter/index');
	}

    function getBrgy(){
        $data = array();

        $data['brgy_incident'] = $_POST['brgy_incident'];
        $this->model->getBrgy($data);
    }

    function getTypeOfIncident(){
        $data = array();

        $data['type_incident'] = $_POST['type_incident'];
        $this->model->getTypeOfIncident($data);
    }
	
	function getIRFID(){
		$this->model->getIRFID();
	}
    
    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;
    }

    function saveBlotter(){
        $admin_id = Session::get("admin_id");
        $dt_reported = $_POST['dt_reported'];
        $dt_incident = $_POST['dt_incident'];

        $date1 = strtotime($dt_reported);
        $date2 = strtotime($dt_incident);

        $dt_reported = date("Y-m-d H:i:s", $date1);
        $dt_incident = date("Y-m-d H:i:s", $date2);

        $data = array();
        $data['irfid'] = $_POST['irfid'];
        $data['type_incident'] = $_POST['type_incident'];
        $data['copyFor'] = $_POST['copyFor'];
        $data['dt_reported'] = $dt_reported;
        $data['dt_incident'] = $dt_incident;
        $data['place_incident'] = $_POST['place_incident'];
        $data['brgy_incident'] = $_POST['brgy_incident'];
        $data['a_lastname'] = $_POST['a_lastname'];
        $data['a_firstname'] = $_POST['a_firstname'];
        $data['a_middlename'] = $_POST['a_middlename'];
        $data['a_nickname'] = $_POST['a_nickname'];
        $data['a_citizenship'] = $_POST['a_citizenship'];
        $data['a_sex'] = $_POST['a_sex'];
        $data['a_civil'] = $_POST['a_civil'];
        $data['a_bday'] = $_POST['a_bday'];
        $data['a_age'] = $_POST['a_age'];
        $data['a_pob'] = $_POST['a_pob'];
        $data['a_mobilephone'] = $_POST['a_mobilephone'];
        $data['a_currentadd'] = $_POST['a_currentadd'];
        $data['a_currentvill'] = $_POST['a_currentvill'];
        $data['a_currentbrgy'] = $_POST['a_currentbrgy'];
        $data['a_currentcity'] = $_POST['a_currentcity'];
        $data['a_currentprov'] = $_POST['a_currentprov'];
        $data['a_otheradd'] = $_POST['a_otheradd'];
        $data['a_othervill'] = $_POST['a_othervill'];
        $data['a_otherbrgy'] = $_POST['a_otherbrgy'];
        $data['a_othercity'] = $_POST['a_othercity'];
        $data['a_otherprov'] = $_POST['a_otherprov'];
        $data['a_occupation'] = $_POST['a_occupation'];
        $data['a_idcard'] = $_POST['a_idcard'];
        $data['b_lastname'] = $_POST['b_lastname'];
        $data['b_firstname'] = $_POST['b_firstname'];
        $data['b_middlename'] = $_POST['b_middlename'];
        $data['b_nickname'] = $_POST['b_nickname'];
        $data['b_citizenship'] = $_POST['b_citizenship'];
        $data['b_sex'] = $_POST['b_sex'];
        $data['b_civil'] = $_POST['b_civil'];
        $data['b_bday'] = $_POST['b_bday'];
        $data['b_age'] = $_POST['b_age'];
        $data['b_pob'] = $_POST['b_pob'];
        $data['b_mobilephone'] = $_POST['b_mobilephone'];
        $data['b_currentadd'] = $_POST['b_currentadd'];
        $data['b_currentvill'] = $_POST['b_currentvill'];
        $data['b_currentbrgy'] = $_POST['b_currentbrgy'];
        $data['b_currentcity'] = $_POST['b_currentcity'];
        $data['b_currentprov'] = $_POST['b_currentprov'];
        $data['b_otheradd'] = $_POST['b_otheradd'];
        $data['b_othervill'] = $_POST['b_othervill'];
        $data['b_otherbrgy'] = $_POST['b_otherbrgy'];
        $data['b_othercity'] = $_POST['b_othercity'];
        $data['b_otherprov'] = $_POST['b_otherprov'];
        $data['b_occupation'] = $_POST['b_occupation'];
        $data['b_relation'] = $_POST['b_relation'];
        $data['b_influence'] = $_POST['b_influence'];
        $data['c_lastname'] = $_POST['c_lastname'];
        $data['c_firstname'] = $_POST['c_firstname'];
        $data['c_middlename'] = $_POST['c_middlename'];
        $data['c_nickname'] = $_POST['c_nickname'];
        $data['c_citizenship'] = $_POST['c_citizenship'];
        $data['c_sex'] = $_POST['c_sex'];
        $data['c_civil'] = $_POST['c_civil'];
        $data['c_bday'] = $_POST['c_bday'];
        $data['c_age'] = $_POST['c_age'];
        $data['c_pob'] = $_POST['c_pob'];
        $data['c_mobilephone'] = $_POST['c_mobilephone'];
        $data['c_currentadd'] = $_POST['c_currentadd'];
        $data['c_currentvill'] = $_POST['c_currentvill'];
        $data['c_currentbrgy'] = $_POST['c_currentbrgy'];
        $data['c_currentcity'] = $_POST['c_currentcity'];
        $data['c_currentprov'] = $_POST['c_currentprov'];
        $data['c_otheradd'] = $_POST['c_otheradd'];
        $data['c_othervill'] = $_POST['c_othervill'];
        $data['c_otherbrgy'] = $_POST['c_otherbrgy'];
        $data['c_othercity'] = $_POST['c_othercity'];
        $data['c_otherprov'] = $_POST['c_otherprov'];
        $data['c_occupation'] = $_POST['c_occupation'];
        $data['c_workadd'] = $_POST['c_workadd'];
        $data['d_narrative'] = $_POST['d_narrative'];
        $data['d_policeuser'] = $admin_id;

        $this->model->saveBlotter($data);
    }
}


?>