<?php

class User_Logs_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	
    }

	public function getUserinfo(){
         return $this->db->select("SELECT * FROM `users`");
    }

    public function getUser(){
         return $this->db->select("SELECT * FROM `users`");
    }

    public function getULogs(){
         return $this->db->select("SELECT * FROM `logger`");
    }

    public function getStation(){
         return $this->db->select("SELECT * FROM `station`");
    }

    public function setActive($data){
        $id = $data['a'];
        Session::init();
        Session::set('cur_station_uslog',$id);
    }

	public function getResults($data){
        $location = $data['location'];
        $start = $data['start'];
        $end = $data['end']; //2023-03-10T16:35
        $kind = $data['kind'];
        $cfilter = $data['cfilter'];
        $daily = $data['daily'];
        $monthly = $data['monthly'];
        $annual1 = $data['annual1'];
        $arr =[];
        $i=0;
        
        $sql = "SELECT * FROM `logger` ";

        if($kind == "all"){
            if ($cfilter == 'daily') {
                if($daily != ""){
                    //no end date
                    $sql .= "WHERE DATE_FORMAT(date_time, '%Y-%m-%d') = '$daily'";
                }
            }

            else if ($cfilter == 'monthly') {
                $date_string = $monthly;
                $date_parts = explode('-', $date_string);
                $year = $date_parts[0];
                $month = $date_parts[1];

                if($monthly != ""){
                    //no end date
                    $sql .= "WHERE YEAR(date_time) = '$year' AND MONTH(date_time) = '$month'";
                }
            }

            else if ($cfilter == 'annual1') {
                if($annual1 != ""){
                    //var_dump($annual1);
                    //no end date
                    $sql .= "WHERE YEAR(date_time) = '$annual1'";
                }
            }


            else if ($cfilter == 'custom') {
                if($start == "" && $end == ""){
                    //all activity, no filter on date
                    $sql .= "";
                }
                else if($start != "" && $end == ""){
                    //all activity, no end date
                    $start .=" 00:00:00";
                    $sql .= "WHERE `date_time` >= '$start'";
                }
                else if($start == "" && $end != ""){
                    //all activity, no end date
                    $end .= " 23:59:59";
                    $sql .= "WHERE `date_time` <= '$end'";
                }
                else if($start == $end && $start != ""){
                    $start .=" 00:00:00";
                    $end .= " 23:59:59";
                    $sql .= "WHERE `date_time` >= '$start' AND `date_time` <= '$end'";
                }
                else{
                    //all activity, complete dates
                    $start .=" 00:00:00";
                    $end .= " 23:59:59";
                    $sql .= "WHERE `date_time` >= '$start' AND `date_time` <= '$end'";
                }
            }
        }
        else{
            if ($cfilter == 'daily') {
                if($daily != ""){
                    //no end date
                    $sql .= "WHERE `activity` LIKE '%$kind%' AND DATE_FORMAT(date_time, '%Y-%m-%d') = '$daily'";
                }
            }

            else if ($cfilter == 'monthly') {

                $date_string = $monthly;
                $date_parts = explode('-', $date_string);
                $year = $date_parts[0];
                $month = $date_parts[1];

                if($monthly != ""){
                    //no end date
                    $sql .= "WHERE `activity` LIKE '%$kind%' AND YEAR(date_time) = '$year' AND MONTH(date_time) = '$month'";
                }
            }


            else if ($cfilter == 'annual1') {
                if($annual1 != ""){
                    //no end date
                    $sql .= "WHERE `activity` LIKE '%$kind%' AND YEAR(date_time) = '$annual1'";
                }
            }


            else if ($cfilter == 'custom') {
                if($start == "" && $end == ""){
                    // activity, no filter on date
                    $sql .= "WHERE `activity` LIKE '%$kind%'";
                }
                else if($start != "" && $end == ""){
                    // activity, no end date
                    $start .=" 00:00:00";
                    $sql .= "WHERE `activity` LIKE '%$kind%' AND `date_time` >= '$start'";
                }
                else if($start == "" && $end != ""){
                    // activity, no start date
                    $end .= " 23:59:59";
                    $sql .= "WHERE `activity` LIKE '%$kind%' AND `date_time` <= '$end'";
                }
                else if($start == $end && $start != ""){
                    $start .=" 00:00:00";
                    $end .= " 23:59:59";
                    $sql .= "WHERE `activity` LIKE '%$kind%' AND `date_time` >= '$start' AND `date_time` <= '$end'";
                }
                else{
                    // activity, complete dates
                    $start .=" 00:00:00";
                    $end .= " 23:59:59";
                    $sql .= "WHERE `activity` LIKE '%$kind%' AND `date_time` >= '$start' AND `date_time` <= '$end'";
                }
            }
                
        }

        $dbh = new Database();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $user_id = $result['user_id'];
                $activity = $result['activity'];
                $dt = $result['date_time'];

                $stmt1 = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :user_id");
                $stmt1->execute(compact('user_id'));

                $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

                if(!empty($result1)){
                    $userstation = $result1['station_id'];
                        $stmt2 = $dbh->prepare("SELECT * FROM `station` WHERE `id`= :userstation");
                        $stmt2->execute(compact('userstation'));

                        $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);

                    if($location == "all"){
                        $arr[$i]['id'] = $i+1;
                        $arr[$i]['fullname'] = $result1['fullname'];
                        $arr[$i]['activity'] = $result['activity'];
                        $arr[$i]['date_time'] = $result['date_time'];
                        $arr[$i]['station_name'] = $result2['station_name'];
                        $i++;
                    }
                    else if($location == $userstation){
                        $arr[$i]['id'] = $i+1;
                        $arr[$i]['fullname'] = $result1['fullname'];
                        $arr[$i]['activity'] = $result['activity'];
                        $arr[$i]['date_time'] = $result['date_time'];
                        $arr[$i]['station_name'] = $result2['station_name'];
                        $i++;
                    }

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
}

?>