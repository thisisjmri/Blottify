<?php

class Libraries_Main_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

  	public function getStation(){
         return $this->db->select("SELECT * FROM `station`");
    }

    public function getBlotter(){
         return $this->db->select("SELECT * FROM `blotter`");
    }

    public function getAdmin(){
         return $this->db->select("SELECT * FROM `users`");
    }

    public function setActive($data){
    	$id = $data['a'];
      $remarks = $data['b'];
        Session::init();
		Session::set('cur_station',$id);
    Session::set('remarks',$remarks);
    }


}

?>