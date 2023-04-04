<?php

class Admin_Dashboardss_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function getBlotter(){
		 return $this->db->select("SELECT * FROM `blotter`");
	}

	public function getBlotter1(){
        $station_id = Session::get("station_id");
		return $this->db->select("SELECT * FROM `blotter` GROUP BY `dt_reported` DESC LIMIT 5");
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
        Session::set('cur_station_dash',$id);
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

}

?>