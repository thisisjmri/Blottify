<?php

class Dashboardss_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function getBlotter(){
		 return $this->db->select("SELECT * FROM `blotter`");
	}

	public function getBlotter1(){
        $station_id = Session::get("station_id");
		return $this->db->select("SELECT * FROM `blotter` WHERE `station_id` = '$station_id' GROUP BY `dt_reported` DESC LIMIT 5");
	}

	public function getNotif(){
		 return $this->db->select("SELECT * FROM `notification`");
	}

	public function getStation(){
		 return $this->db->select("SELECT * FROM `station`");
	}

	public function getUser(){
		 return $this->db->select("SELECT * FROM `users`");
	}

	public function getNotifications(){
		$admin_id = Session::get("admin_id");
		$station_id = Session::get("station_id");
		$notifications = [];
		$i=0;
		$today = new DateTime("now", new DateTimeZone('Asia/Manila'));

		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `station` WHERE `id`= :station_id");
        $stmt->execute(compact('station_id'));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($result)){
        	$station_name = $result['station_name'];

        	$stmt2 = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :station_id");
	        $stmt2->execute(compact('station_id'));

	        $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);

	        if(!empty($result2)){
	        	$fullname = $result2['fullname'];
	        	$image = $result2['image'];
        
				$stmt1 = $dbh->prepare("SELECT * FROM `notification` WHERE `user_id` = :admin_id ORDER BY `date_time` DESC LIMIT 6");
				$stmt1->execute(compact('admin_id'));

				while ($result1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
					//get time
					// $notifications[] = $row;
					$date_time = $result1['date_time'];
					$interval = $today->diff(new DateTime($date_time));

					if ($interval->y > 0) {
					    $diff_string = $interval->y . ' year' . ($interval->y > 1 ? 's' : '') . ' ago';
					} elseif ($interval->m > 0) {
					    $diff_string = $interval->m . ' month' . ($interval->m > 1 ? 's' : '') . ' ago';
					} elseif ($interval->d > 0) {
					    $diff_string = $interval->d . ' day' . ($interval->d > 1 ? 's' : '') . ' ago';
					} elseif ($interval->h > 0) {
					    $diff_string = $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
					} elseif ($interval->i > 0) {
					    $diff_string = $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
					} else {
					    $diff_string = $interval->s . ' second' . ($interval->s > 1 ? 's' : '') . ' ago';
					}
					$color = "";
					if($result1['is_read']==0){
						$color = "#bfcddb";
					}

					$notifications[$i]['color'] = $color;
					$notifications[$i]['isread'] = $result1['is_read'];
					$notifications[$i]['image'] = $image;
					$notifications[$i]['fullname'] = $fullname;
					$notifications[$i]['blotter_id'] = $result1['blotter_id'];
					$notifications[$i]['station_name'] = $station_name;
					$notifications[$i]['time'] = $diff_string;
					$i++;
				}

				echo json_encode($notifications);
			}
			else{
				echo "[]";
			}
		}
		else{
			echo "[]";
		}	
    }

    public function getCount(){
		$admin_id = Session::get("admin_id");
		$notifications = array();
		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM `notification` WHERE `user_id` = :admin_id AND `is_opened` = 0 ORDER BY date_time");
		$stmt->execute(compact('admin_id'));

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

        if(empty($result)){
            echo "0";
        }
        else{
        	$notifications = $result['count'];
        }

		echo $notifications;
    }

    public function setOpen(){
		$admin_id = Session::get("admin_id");
		$stat = 0;
		$dbh = new Database();
		$stmt = $dbh->prepare("UPDATE `notification` SET `is_opened`= 1 WHERE `user_id`= :admin_id");
		$stmt->execute(compact('admin_id'));

        if ($stmt->rowCount() > 0) {
        	$stat = 1;
        }

		echo $stat;
    }

    public function genChart(){
    	$arr = [];
    	$i=0;
        $dbh = new Database();
        $stmt = $dbh->prepare("SELECT * FROM `crime`");
        $stmt->execute();

            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $id = $result['id'];
                $crime_name = $result['crime_name'];
                $color = $result['crime_color'];

                $stmt1 = $dbh->prepare("SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= :id");
                $stmt1->execute(compact('id'));

                $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

                if(!empty($result1)){
                	//naay count ang crime
                    
                    $arr[$i]['crime_name'] = $result['crime_name'];
                    $arr[$i]['count'] = $result1['count'];
                    $arr[$i]['borderColor'] = $color;
                    $arr[$i]['backgroundColor'] = $color;
                    $arr[$i]['remarks'] = "A graph showing all crime reports recorded in Tagum City";
                    $arr[$i]['repTitle'] = "Tagum City Crime Reports";
                    $i++;
                }
                else{
                    //walay count ang crime pero nag exist na to na crime
                    $arr[$i]['crime_name'] = $result['crime_name'];
                    $arr[$i]['count'] = 0;
                    $arr[$i]['borderColor'] = $color;
                    $arr[$i]['backgroundColor'] = $color;
                    $arr[$i]['remarks'] = "A graph showing all crime reports recorded in Tagum City";
                    $arr[$i]['repTitle'] = "Tagum City Crime Reports";
                    $i++;
                }
            }
        // var_dump($arr);
        if(!empty($arr)){
            echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }
        else {
            echo "[]";
        }

    }

    public function getResults($data){
        $id = $data['id'];

        $arr = [];
        $column_names = array();

        $dbh = new Database(); 
        $stmt = $dbh->prepare("SHOW COLUMNS FROM `blotter`");
        $stmt->execute();

        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $column_names[] = $result["Field"];
        }

        $dbh1 = new Database();
        $stmt1 = $dbh1->prepare("SELECT * FROM `blotter` WHERE `id`= :id");
        $stmt1->execute(compact('id'));

        $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

        if(empty($result1)){
            echo "NOT FOUND";
        }
        else{
            $type_incident = $result1['type_incident'];
            $brgy_incident = $result1['brgy_incident'];
            $d_policeuser = $result1['d_policeuser'];

            //fetching crime_name
            $dbh = new Database();
            $stmt = $dbh->prepare("SELECT * FROM `crime` WHERE `id`= :type_incident");
            $stmt->execute(compact('type_incident'));

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(empty($result)){
                echo "NOT FOUND";
            }
            else{
                $crime_name = $result['crime_name'];
            }

            //fetching police user
            $stmt3 = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :d_policeuser");
            $stmt3->execute(compact('d_policeuser'));

            $result3 = $stmt3->fetch(PDO::FETCH_ASSOC);

            if(empty($result3)){
                echo "NOT FOUND";
            }
            else{
                $d_policeuser = $result3['fullname'];
                $puser_statid = $result3['station_id'];

                $stmt4 = $dbh->prepare("SELECT * FROM `station` WHERE `id`= :puser_statid");
                $stmt4->execute(compact('puser_statid'));

                $result4 = $stmt4->fetch(PDO::FETCH_ASSOC);

                if(empty($result4)){
                    echo "NOT FOUND";
                }
                else{
                    $station_name = $result4['station_name'];
                    $station_number = $result4['station_number'];
                }
            }

            //inserting into array
            $stmt2 = $dbh->prepare("SELECT * FROM `barangay` WHERE `id`= :brgy_incident");
            $stmt2->execute(compact('brgy_incident'));

            $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);

            if(empty($result2)){
                echo "NOT FOUND";
            }
            else{
                $barangay_name = $result2['barangay_name'];
            }
            for($a=0; $a<count($column_names); $a++){
                $arr[$a] = $result1[$column_names[$a]];
            }

            $arr[81] = $barangay_name;
            $arr[82] = $crime_name;
            $arr[83] = $d_policeuser;
            $arr[84] = $station_name;
            $arr[85] = $station_number;
        }

        // $arr[6] = $result1['place_incident'].", ".$barangay_name;
        // $arr[1] = $crime_name;

        // var_dump($result1);

        echo json_encode($arr);
    }

    public function getNResults($data){
        $blotter_id = $data['id'];
        $isread = $data['isread'];
        $admin_id = Session::get("admin_id");

        $arr = [];
        $column_names = array();

        $dbh = new Database(); 
        $stmt = $dbh->prepare("SHOW COLUMNS FROM `blotter`");
        $stmt->execute();

        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $column_names[] = $result["Field"];
        }

        $dbh1 = new Database();
        $stmt1 = $dbh1->prepare("SELECT * FROM `blotter` WHERE `id`= :blotter_id");
        $stmt1->execute(compact('blotter_id'));

        $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

        if(empty($result1)){
            echo "NOT FOUND";
        }
        else{
            $type_incident = $result1['type_incident'];
            $brgy_incident = $result1['brgy_incident'];
            $d_policeuser = $result1['d_policeuser'];

            //fetching crime_name
            $dbh = new Database();
            $stmt = $dbh->prepare("SELECT * FROM `crime` WHERE `id`= :type_incident");
            $stmt->execute(compact('type_incident'));

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(empty($result)){
                echo "NOT FOUND";
            }
            else{
                $crime_name = $result['crime_name'];
            }

            //fetching police user
            $stmt3 = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :d_policeuser");
            $stmt3->execute(compact('d_policeuser'));

            $result3 = $stmt3->fetch(PDO::FETCH_ASSOC);

            if(empty($result3)){
                echo "NOT FOUND";
            }
            else{
                $d_policeuser = $result3['fullname'];
                $puser_statid = $result3['station_id'];

                $stmt4 = $dbh->prepare("SELECT * FROM `station` WHERE `id`= :puser_statid");
                $stmt4->execute(compact('puser_statid'));

                $result4 = $stmt4->fetch(PDO::FETCH_ASSOC);

                if(empty($result4)){
                    echo "NOT FOUND";
                }
                else{
                    $station_name = $result4['station_name'];
                    $station_number = $result4['station_number'];
                }
            }

            //inserting into array
            $stmt2 = $dbh->prepare("SELECT * FROM `barangay` WHERE `id`= :brgy_incident");
            $stmt2->execute(compact('brgy_incident'));

            $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);

            if(empty($result2)){
                echo "NOT FOUND";
            }
            else{
                $barangay_name = $result2['barangay_name'];
            }
            for($a=0; $a<count($column_names); $a++){
                $arr[$a] = $result1[$column_names[$a]];
            }

            $arr[81] = $barangay_name;
            $arr[82] = $crime_name;
            $arr[83] = $d_policeuser;
            $arr[84] = $station_name;
            $arr[85] = $station_number;

            if($isread == 0){
            	$stmt5 = $dbh->prepare("UPDATE `notification` SET `is_read`= 1 WHERE `user_id`= :admin_id AND `blotter_id`=:blotter_id");
            	$stmt5->bindParam(':admin_id',$admin_id);
            	$stmt5->bindParam(':blotter_id',$blotter_id);
				$stmt5->execute();
            }
			
        }

        echo json_encode($arr);
    }

}

?>