<?php

class All_notification_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	// public function getBlotter(){
	// 	 return $this->db->select("SELECT * FROM `blotter`");
	// }

	public function getNotif(){
		 return $this->db->select("SELECT * FROM `notification`");
	}

	public function getStation(){
		 return $this->db->select("SELECT * FROM `station`");
	}

	public function getUser(){
		 return $this->db->select("SELECT * FROM `users`");
	}

}


?>