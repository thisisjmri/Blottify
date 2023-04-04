<?php

class Stations_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

  	public function getStation(){
         return $this->db->select("SELECT * FROM `station`");
    }

    public function getUser(){
         return $this->db->select("SELECT * FROM `users`");
    }

    public function setActive($data){
        $id = $data['a'];
        Session::init();
        Session::set('cur_station_stations',$id);
    }

    public function getName($data){
    	$id = $data['id'];
		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `id` = :id");
		$stmt->execute(compact('id'));
        $arr = [];

		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		

		if(empty($result)){
			echo "NOT FOUND";
		}
		else{
            $pic = "public/img/bruce-mars.jpg";
            if($result['image']!=''){
                $pic = "uploads/profile_image/".$result['image'];
            }
			// $name = $result['fullname'];
            $arr[0]['fullname'] = $result['fullname'];
            $arr[0]['image'] = $pic;
            $arr[0]['rank'] = $result['rank'];
            $arr[0]['status'] = $result['status'];
			echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		}
	}

	public function setStat($data){
    	$id = $data['id'];
    	$stat = $data['stat'];
        $erank = $data['erank'];

		$dbh = new Database();
		$stmt = $dbh->prepare("UPDATE `users` SET `status` = :val0, `rank` = :val2 WHERE `id` = :val1");
		$stmt->bindParam(':val0', $value0);
		$stmt->bindParam(':val1', $value1);
        $stmt->bindParam(':val2', $value2);

		// insert a row
		$value0 = $stat;
		$value1 = $id;
        $value2 = $erank;
		$stmt->execute();

		if ($stmt === false) {
		    echo "ERROR";
		} else {
			echo "SUCCESS";
		}
	}

	public function getResults($data){
        $ustatus = $data['ustatus'];
        $ustation = $data['ustation'];
        $arr =[];
        $i=0;
        
        $sql = "SELECT * FROM `users` ";

        if($ustatus != "all" && $ustation != "all"){
        	$sql .= "WHERE `status` = '$ustatus' AND `station_id` = '$ustation'";
        }
        else if($ustatus != "all" && $ustation == "all"){
        	$sql .= "WHERE `status` = '$ustatus'";
        }
        else if($ustatus == "all" && $ustation != "all"){
        	$sql .= "WHERE `station_id` = '$ustation'";
        }

        $dbh = new Database();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $pic = "public/img/bruce-mars.jpg";
                if($result['image']!=''){
                    $pic = "uploads/profile_image/".$result['image'];
                }
                $arr[$i]['id'] = $result['id'];
                $arr[$i]['image'] = $pic;
                $arr[$i]['fullname'] = $result['fullname'];
                $arr[$i]['email'] = $result['email'];
                $arr[$i]['status'] = $result['status'];
                $i++;
            }
        
        if(!empty($arr)){
            echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }
        else {
            echo json_encode($arr);
        }

    }
}

?>