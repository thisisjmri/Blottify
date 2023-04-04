<?php

class Account_Stations_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

  	public function getStation(){
         return $this->db->select("SELECT * FROM `station`");
    }

    public function getUser(){
         return $this->db->select("SELECT * FROM `users`");
    }

    public function getRank(){
         return $this->db->select("SELECT * FROM `rank`");
    }

//USER-RANK-STATUS
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

//USER-RANK-STATUS
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

//USER-RANK-STATUS
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


//ADD STATION
    public function addStation($data){
        $station_name = $data['stname'];
        $station_location = $data['staddress'];
        $station_type = $data['sttype'];
        $station_number = $data['stanumber'];
        $admin_id = $data['admin_id'];
        $station_typeorg = "Main Station";
        $checker = 0;

        $dbh = new Database();
        $stmt = $dbh->prepare("SELECT * FROM `station` WHERE `station_name`= :station_name");
        $stmt->execute(compact('station_name'));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if(empty($result)){
            $stmt = $dbh->prepare("SELECT * FROM `station` WHERE `station_type`= :station_typeorg");
            $stmt->execute(compact('station_typeorg'));

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(empty($result)){
                    $checker =1; //can use main station type
            }
            else{
                //bawal main
                $checker =2; // can't use main station type
            }

            if($station_type == "Main Station" && $checker == 2){
                echo "Main Station is already defined";
            }
            else{
                date_default_timezone_set('Asia/Manila');
                $today = date("Y-m-d H:i:s");

                $stmt = $dbh->prepare("INSERT INTO station (station_name, station_location, station_type, station_number)
                VALUES (:val1, :val2, :val3, :val4)");
                $stmt->bindParam(':val1', $value1);
                $stmt->bindParam(':val2', $value2);
                $stmt->bindParam(':val3', $value3);
                $stmt->bindParam(':val4', $value4);

                // insert a row
                $value1 = $station_name;
                $value2 = $station_location;
                $value3 = $station_type;
                $value4 = $station_number;
                $stmt->execute();

                $stmt1 = $dbh->prepare("INSERT INTO logger (user_id, activity, date_time)
                VALUES (:val5, :val6, :val7)");
                $stmt1->bindParam(':val5', $value5);
                $stmt1->bindParam(':val6', $value6);
                $stmt1->bindParam(':val7', $value7);

                // insert a row
                $value5 = $admin_id;
                $value6 = "added a station: ".$station_name;
                $value7 = $today;
                $stmt1->execute();

                echo "Station Added Successfully";
            }
        }
        else{
            //error
            echo "Station Name Already Taken";
        }
        
    }

//ADD CRIME
    public function addCrime($data){
        $hexCode = ["#fc4e03", "#fc7303", "#fc9003", "#fcc203", "#c6fc03", "#6ffc03", "#03fc4a", "#03fcbe", "#031cfc", "#4103fc", "#7303fc", "#a103fc", "#ce03fc", "#fc03f4", "#fc03b1", "#fc3503", "#fc8c03", "#e7fc03", "#31fc03", "#8cfc03", "#14fc03", "#03fca5", "#03f4fc", "#824a01", "#827701", "#01825b", "#025575", "#400275", "#558201", "#088201", "#017582", "#00689c", "#8102a8", "#baab02", "#60a802", "#027568", "#75023c", "#330182", "#4da802", "#00de5c", "#4f0182", "#9c7500", "#a88402", "#025575", "#025ba8", "#de00c8", "#820175", "#02ba74", "#589c00", "#02a871"];
        $crime_name = $data['crime_name'];
        $admin_id = $data['admin_id'];

        $dbh = new Database();
        $stmt = $dbh->prepare("SELECT * FROM `crime` WHERE `crime_name`= :crime_name");
        $stmt->execute(compact('crime_name'));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if(empty($result)){
            $i=0;
            $stmt1 = $dbh->prepare("SELECT * FROM `crime` ORDER BY id DESC LIMIT 1;");
            $stmt1->execute();

            $result = $stmt1->fetch(PDO::FETCH_ASSOC);

            if (!empty($result)) {
                $i = $result['id'];
            }
                $stmt2 = $dbh->prepare("INSERT INTO crime (crime_name, crime_color)
                VALUES (:val1, :val2)");
                $stmt2->bindParam(':val1', $value1);
                $stmt2->bindParam(':val2', $value2);

                // insert a row
                $value1 = $crime_name;
                $value2 = $hexCode[$i];
                $stmt2->execute();

                echo "Incident Type Added Successfully";
            
        }
        else{
            //error
            echo "Incident Type Already Taken";
        }
        
    }

//EDIT STATION
    public function getStationinfo($data){
        $id = $data['id'];
        $dbh = new Database();
        $stmt = $dbh->prepare("SELECT * FROM `station` WHERE `id` = :id");
        $stmt->execute(compact('id'));
        $arr = [];

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(empty($result)){
                echo "NOT FOUND";
            }
            else{
                $arr[0]['station_name'] = $result['station_name'];
                $arr[0]['station_location'] = $result['station_location'];
                $arr[0]['station_type'] = $result['station_type'];
                $arr[0]['station_number'] = $result['station_number'];
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            }
        }

        public function setStationinfo($data) {
            $id = $data['id'];
            $station_name = $data['station_name'];
            $station_location = $data['station_location'];
            $station_type = $data['station_type'];
            $station_number = $data['station_number'];
            $station_typeorg = "Main Station";
            $checker = 0;

            $dbh = new Database();
            $stmt = $dbh->prepare("SELECT * FROM `station` WHERE `id`= :id");
            $stmt->execute(compact('id'));

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($station_type == "Main Station") {
                if ($result['station_type'] == "Main Station") {
                    $checker = 1; // can use main station type
                } else {
                    // can't use main station type if there is already a station with Main Station type
                    $stmt = $dbh->prepare("SELECT * FROM `station` WHERE `station_type` = :station_typeorg");
                    $stmt->execute(compact('station_typeorg'));
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);

                    if (empty($result) || $result['id'] == $id) {
                        $checker = 1; // can use main station type
                    } else {
                        $checker = 2; // can't use main station type
                    }
                }
            } else {
                $checker = 1; // can use non-main station type
            }

            if ($checker == 2) {
                echo "Main Station is already defined";
            } else {
                date_default_timezone_set('Asia/Manila');
                $today = date("Y-m-d H:i:s");

                $stmt = $dbh->prepare("UPDATE `station` SET `station_name` = :station_name, `station_location` = :station_location, `station_type` = :station_type, `station_number` = :station_number WHERE `id` = :id");
                $stmt->bindParam(':station_name', $station_name);
                $stmt->bindParam(':station_location', $station_location);
                $stmt->bindParam(':station_type', $station_type);
                $stmt->bindParam(':station_number', $station_number);
                $stmt->bindParam(':id', $id);
                $stmt->execute();

                if ($stmt === false) {
                    echo "ERROR";
                } else {
                    echo "SUCCESS";
                }
            }
        }



    // public function setStationinfo($data){
    //     $id = $data['id'];
    //     $station_name = $data['station_name'];
    //     $station_location = $data['station_location'];
    //     $station_type = $data['station_type'];
    //     $station_number = $data['station_number'];
    //     $stationType = "Main Station";
    //     $checkerr = 0;

    //     if(empty($result)){
    //             $stmt = $dbh->prepare("SELECT * FROM `station` WHERE `station_type`= :stationType");
    //             $stmt->execute(compact('stationType'));

    //             $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //             if(empty($result)){
    //                     $checkerr =1; //can use main station type
    //             }
    //             else{   
    //                 //bawal main
    //                 $checkerr =2; // can't use main station type
    //             }

    //             if($stationType == "Main Station" && $checkerr == 2){
    //                 echo "Main Station is already defined";
    //             }
    //             else{            
    //                 date_default_timezone_set('Asia/Manila');
    //                 $today = date("Y-m-d H:i:s");

    //                 $stmt = $dbh->prepare("UPDATE station (station_name, station_location, station_type, station_number)
    //                 VALUES (:val0, :val2, :val3, :val4)");
    //                 $stmt->bindParam(':val1', $value0);
    //                 $stmt->bindParam(':val2', $value2);
    //                 $stmt->bindParam(':val3', $value3);
    //                 $stmt->bindParam(':val4', $value4);

    //                 // insert a row
    //                 $value1 = $station_name;
    //                 $value2 = $station_location;
    //                 $value3 = $station_type;
    //                 $value4 = $station_number;
    //                 $stmt->execute(); 
    //             }
    //         }   

    //     $dbh = new Database();
    //     $stmt = $dbh->prepare("UPDATE `station` SET `station_name` = :val0, `station_location` = :val2, `station_type` = :val3, `station_number` = :val4 WHERE `id` = :val1");
    //     $stmt->bindParam(':val0', $value0);
    //     $stmt->bindParam(':val1', $value1);
    //     $stmt->bindParam(':val2', $value2);
    //     $stmt->bindParam(':val3', $value3);
    //     $stmt->bindParam(':val4', $value4);

    //     // insert a row
    //     $value0 = $station_name;
    //     $value1 = $id;
    //     $value2 = $station_location;
    //     $value3 = $station_type;
    //     $value4 = $station_number;
    //     $stmt->execute();

    //     if ($stmt === false) {
    //         echo "ERROR";
    //     } else {
    //         echo "SUCCESS";
    //     }
    // }

}

?>