<?php

class Admin_Libraries_Model extends Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function getStation(){
         return $this->db->select("SELECT * FROM `station`");
    }

    public function getmForward(){
         return $this->db->select("SELECT * FROM `blotter` WHERE `remarks` = 0");
    }

    public function getBlotter(){
         return $this->db->select("SELECT * FROM `blotter`");
    }

    public function getUser(){
         return $this->db->select("SELECT * FROM `users`");
    }

    public function setActive($data){
        $id = $data['a'];
        Session::init();
        Session::set('cur_station_adlib',$id);
    }

    public function getResults($data){
        // $type_incident = $data['type_incident'];
        // $brgy_incident = $data['brgy_incident'];
        $id = $data['id'];

        $arr = [];
        $column_names = array();

        $dbh = new Database(); 
        $stmt = $dbh->prepare("SHOW COLUMNS FROM `blotter`");
        $stmt->execute();

        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $column_names[] = $result["Field"];
        }

        // $dbh = new Database();
        // $stmt = $dbh->prepare("SELECT * FROM `barangay` WHERE `id`= :brgy_incident");
        // $stmt->execute(compact('brgy_incident'));

        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if(empty($result)){
        //     echo "NOT FOUND";
        // }
        // else{
        //     $barangay_name = $result['barangay_name'];
        // }

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

    public function setForwarded($data){
        $id = $data['id'];
        $admin_id = Session::get("admin_id");
        $dbh = new Database();
        $stmt = $dbh->prepare("SELECT * FROM `blotter` WHERE `id`= :id");
        $stmt->execute(compact('id'));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($result)){
            date_default_timezone_set('Asia/Manila');
            $today = date("Y-m-d H:i:s");

            $stmt = $dbh->prepare("UPDATE `blotter` SET `remarks`= 1 WHERE `id`= :id");
            $stmt->execute(compact('id'));

            if ($stmt->rowCount() > 0) {
                $stmt1 = $dbh->prepare("INSERT INTO logger (user_id, activity, date_time)
                VALUES (:val4, :val5, :val6)");
                $stmt1->bindParam(':val4', $value4);
                $stmt1->bindParam(':val5', $value5);
                $stmt1->bindParam(':val6', $value6);

                // insert a row
                $value4 = $admin_id;
                $value5 = "forward blotter: Case #".$id;
                $value6 = $today;
                $stmt1->execute();

                if ($stmt->rowCount() > 0) {
                    echo "SUCCESS";
                }
                else{
                    echo "ERROR";
                }
            } else {
                echo "ERROR";
            }
        }
        else{
            echo "ERROR";
        }
        
    }

    public function getFilter($data){
        $cfilter = $data['cfilter'];
        $daily = $data['daily'];
        $monthly = $data['monthly'];
        $annual1 = $data['annual1'];
        $start = $data['start'];
        $end = $data['end']; //2023-03-10T16:35
        $arr =[];
        $i=0;

        $cur_station1;

        $admin_id = Session::get("admin_id");
        $station_type = Session::get("station_type");
        if($station_type == "Main Station"){
          $cur_station1 = Session::get("cur_station1");
        }
        else{
          $cur_station1 = Session::get("station_id");
        }
        
        $sql = "SELECT * FROM `blotter` WHERE `station_id` = '$cur_station1' ";



        if ($cfilter == 'daily') {
            if($daily != ""){
                //no end date
                $sql .= "AND DATE_FORMAT(dt_reported, '%Y-%m-%d') = '$daily'";
            }
        }

        if ($cfilter == 'monthly') {

            $date_string = $monthly;
            $date_parts = explode('-', $date_string);
            $year = $date_parts[0];
            $month = $date_parts[1];

            if($monthly != ""){
                //no end date
                $sql .= "AND YEAR(dt_reported) = '$year' AND MONTH(dt_reported) = '$month'";
            }
        }


        else if ($cfilter == 'annual1') {
            if($annual1 != ""){
                //no end date
                $sql .= "AND YEAR(dt_reported) = '$annual1'";
            }
        }


        else if ($cfilter == 'custom') {
            if($start == "" && $end == ""){
                //no filter on date
                $sql .= "";
            }
            else if($start != "" && $end == ""){
                //no end date
                $start .=" 00:00:00";
                $sql .= "AND `dt_reported` >= '$start'";
            }
            else if($start == "" && $end != ""){
                //no end date
                $end .= " 23:59:59";
                $sql .= "AND `dt_reported` <= '$end'";
            }
            else if($start == $end && $start != ""){
                //same start and end
                $start .=" 00:00:00";
                $end .= " 23:59:59";
                $sql .= "AND `dt_reported` >= '$start' AND `dt_reported` <= '$end'";
            }
            else{
                //complete dates
                $start .=" 00:00:00";
                $end .= " 23:59:59";
                $sql .= "AND `dt_reported` >= '$start' AND `dt_reported` <= '$end'";
            }
        }
            

        $dbh = new Database();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $id = $result['id'];
                $user_id = $result['d_policeuser'];
                $dt_reported = $result['dt_reported'];
                $remarks = $result['remarks'];

                $stmt1 = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :user_id");
                $stmt1->execute(compact('user_id'));

                $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

                if(!empty($result1)){
                    $pic = "public/img/bruce-mars.jpg";
                    if($result1['image']!=''){
                        $pic = "uploads/profile_image/".$result1['image'];
                    }

                    $rems = "Not Forwarded";
                    if($remarks==1){
                        $rems = "Forwarded";
                    }
                    $arr[$i]['id'] = $result['id'];
                    $arr[$i]['image'] = $pic;
                    $arr[$i]['fullname'] = $result1['fullname'];
                    $arr[$i]['email'] = $result1['email'];
                    $arr[$i]['dt_reported'] = $dt_reported;
                    $arr[$i]['remarks'] = $rems;
                    $i++;
                }
                else{
                    
                }
            }
        
        if(!empty($arr)){
            echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }
        else {
            echo "[]";
        }

    }

    public function forwardAll($data){
        $checkboxes1 = $data['checkboxes1'];
        $admin_id = Session::get("admin_id");
        $dbh = new Database();
        date_default_timezone_set('Asia/Manila');
        $today = date("Y-m-d H:i:s");
        $checker = 0;

        foreach($checkboxes1 as $val) {
            $stmt = $dbh->prepare("UPDATE `blotter` SET `remarks`= 1 WHERE `id`= :val");
            $stmt->execute(compact('val'));

            if ($stmt->rowCount() > 0) {
                $stmt1 = $dbh->prepare("INSERT INTO logger (user_id, activity, date_time)
                VALUES (:val4, :val5, :val6)");
                $stmt1->bindParam(':val4', $value4);
                $stmt1->bindParam(':val5', $value5);
                $stmt1->bindParam(':val6', $value6);

                // insert a row
                $value4 = $admin_id;
                $value5 = "forward blotter: Case #".$val;
                $value6 = $today;
                $stmt1->execute();

                if ($stmt1->rowCount() > 0) {
                    $checker++;
                }
                else{
                    $checker--;
                }
            } else {
                $checker--;
            }
        }

        if($checker==0){
            echo "ERROR";
        }
        else{
            echo "SUCCESS";
        }

    }


}

?>