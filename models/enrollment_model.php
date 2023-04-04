<?php

class Enrollment_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function getUser(){
		$admin_id = Session::get("admin_id");
         return $this->db->select("SELECT * FROM `users` WHERE `id`='$admin_id' LIMIT 1");
    }

    public function getID($data){
		$uname = $data['uname'];
		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `username`= :uname AND `indexfinger` IS NULL");
		$stmt->execute(compact('uname'));

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($result)){
			echo "failed";
		}
		else{
			//error
			$id = $result['id'];
			echo $id;
		}
		
	}

}

?>