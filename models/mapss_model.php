<?php

class Mapss_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function getBlotter(){
         return $this->db->select("SELECT * FROM `blotter`");
    }

    public function getCrime(){
         return $this->db->select("SELECT * FROM `crime`");
    }

    public function genChart($data){
        $crime = $data['crime'];
        $start = $data['start'];
        $end = $data['end'];
        $cfilter = $data['cfilter'];
        $daily = $data['daily'];
        $monthly = $data['monthly'];
        $annual1 = $data['annual1'];
        $brgy_name = $data['brgy'];
    	$arr = [];
    	$i=0;
        $dbh = new Database();
        $stmt0 = $dbh->prepare("SELECT * FROM `barangay` WHERE `barangay_name`=:brgy_name");
        $stmt0->execute(compact('brgy_name'));
        $result0 = $stmt0->fetch(PDO::FETCH_ASSOC);
        $brgy = $result0['id'];
        $final_brgy_name = $result0['barangay_name'];

        if($crime == "all"){
            $sql_genChart = "SELECT * FROM `crime`";
        }
        else{
            $sql_genChart = "SELECT * FROM `crime` WHERE `id`='$crime'";
        }

        $stmt = $dbh->prepare($sql_genChart);
        $stmt->execute();

        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $result['id'];//crime_id
            $crime_name = $result['crime_name'];
            $color = $result['crime_color'];


            $subsql;

            if ($cfilter == 'daily') {
                if($daily != ""){
                    //no end date
                    $subsql = "SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= '$id' AND `brgy_incident`= '$brgy' AND DATE_FORMAT(dt_reported, '%Y-%m-%d') = '$daily'";
                }
                else{
                    //date now
                }
            }

            else if ($cfilter == 'monthly') {
                $date_string = $monthly;
                $date_parts = explode('-', $date_string);
                $year = $date_parts[0];
                $month = $date_parts[1];

                if($monthly != ""){
                    //no end date
                    $subsql = "SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= '$id' AND `brgy_incident`= '$brgy' AND YEAR(dt_reported) = '$year' AND MONTH(dt_reported) = '$month'";
                }
                else{
                    //month now
                }
            }

            else if ($cfilter == 'annual1') {
                if($annual1 != ""){
                    //var_dump($annual1);
                    //no end date
                    $subsql = "SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= '$id' AND `brgy_incident`= '$brgy' AND YEAR(dt_reported) = '$annual1'";
                }
                else{
                    //year now
                }
            }


            else if ($cfilter == 'custom') {
                if($start == "" && $end == ""){
                    //all activity, no filter on date
                    $subsql = "SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= '$id' AND `brgy_incident`= '$brgy'";
                }
                else if($start != "" && $end == ""){
                    //all activity, no end date
                    $start .=" 00:00:00";
                    $subsql = "SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= '$id' AND `brgy_incident`= '$brgy' AND `dt_reported` >= '$start'";
                }
                else if($start == "" && $end != ""){
                    //all activity, no end date
                    $end .= " 23:59:59";
                    $subsql = "SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= '$id' AND `brgy_incident`= '$brgy' AND `dt_reported` <= '$end'";

                }
                else if($start == $end && $start != ""){
                    $start .=" 00:00:00";
                    $end .= " 23:59:59";
                    $subsql = "SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= '$id' AND `brgy_incident`= '$brgy' AND `dt_reported` >= '$start' AND `dt_reported` <= '$end'";
                }
                else{
                    //all activity, complete dates
                    $start .=" 00:00:00";
                    $end .= " 23:59:59";
                    $subsql = "SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= '$id' AND `brgy_incident`= '$brgy' AND `dt_reported` >= '$start' AND `dt_reported` <= '$end'";
                }
            }

            $stmt1 = $dbh->prepare($subsql);
            $stmt1->execute();

            $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

            if(!empty($result1)){
            	//naay count ang crime
                
                $arr[$i]['crime_name'] = $result['crime_name'];
                $arr[$i]['count'] = $result1['count'];
                $arr[$i]['borderColor'] = $color;
                $arr[$i]['backgroundColor'] = $color;
                $arr[$i]['remarks'] = "A graph showing all crime reports recorded in Barangay ".$final_brgy_name;
                $arr[$i]['repTitle'] = $final_brgy_name." Crime Reports";
                $i++;
            }
            else{
                //walay count ang crime pero nag exist na to na crime
                $arr[$i]['crime_name'] = $result['crime_name'];
                $arr[$i]['count'] = 0;
                $arr[$i]['borderColor'] = $color;
                $arr[$i]['backgroundColor'] = $color;
                $arr[$i]['remarks'] = "A graph showing all crime reports recorded in Barangay ".$final_brgy_name;
                $arr[$i]['repTitle'] = $final_brgy_name." Crime Reports";
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

    //might delete for redundancy
    // public function specChart($data){
    //     $crime = $data['crime'];
    //     $start = $data['start'];
    //     $end = $data['end'];
    //     $brgy_name = $data['brgy'];
    // 	$arr = [];
    // 	$i=0;
    //     $dbh = new Database();

    //     $stmt0 = $dbh->prepare("SELECT * FROM `barangay` WHERE `barangay_name`=:brgy_name");
    //     $stmt0->execute(compact('brgy_name'));
    //     $result0 = $stmt0->fetch(PDO::FETCH_ASSOC);
    //     $brgy = $result0['id'];
    //     $final_brgy_name = $result0['barangay_name'];

    //     $stmt = $dbh->prepare("SELECT * FROM `crime` WHERE `id`=:crime");
    //     $stmt->execute(compact('crime'));

    //         while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //             $id = $result['id'];
    //             $crime_name = $result['crime_name'];
    //             $color = $result['crime_color'];

    //             $stmt1 = $dbh->prepare("SELECT COUNT(*) AS count FROM `blotter` WHERE `type_incident`= :id AND `brgy_incident`=:brgy");
    //             $stmt1->bindParam("id", $id);
    //             $stmt1->bindParam("brgy", $brgy);
    //             $stmt1->execute();

    //             $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

    //             if(!empty($result1)){
    //             	//naay count ang crime
                    
    //                 $arr[$i]['crime_name'] = $result['crime_name'];
    //                 $arr[$i]['count'] = $result1['count'];
    //                 $arr[$i]['borderColor'] = $color;
    //                 $arr[$i]['backgroundColor'] = $color;
    //                 $arr[$i]['remarks'] = "A graph showing all crime reports recorded in Barangay ".$final_brgy_name;
    //                 $arr[$i]['repTitle'] = $final_brgy_name." Crime Reports";
    //                 $i++;
    //             }
    //             else{
    //                 //walay count ang crime pero nag exist na to na crime
    //                 $arr[$i]['crime_name'] = $result['crime_name'];
    //                 $arr[$i]['count'] = 0;
    //                 $arr[$i]['borderColor'] = $color;
    //                 $arr[$i]['backgroundColor'] = $color;
    //                 $arr[$i]['remarks'] = "A graph showing all crime reports recorded in Barangay ".$final_brgy_name;
    //                 $arr[$i]['repTitle'] = $final_brgy_name." Crime Reports";
    //                 $i++;
    //             }
    //         }
    //     // var_dump($arr);
    //     if(!empty($arr)){
    //         echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    //     }
    //     else {
    //         echo "[]";
    //     }

    // }

    public function setGencolor($data){
        $crime = $data['crime'];
        $start = $data['start'];
        $end = $data['end'];
        $cfilter = $data['cfilter'];
        $daily = $data['daily'];
        $monthly = $data['monthly'];
        $annual1 = $data['annual1'];

        $start1 = $data['start'];
        $end1 = $data['end'];
    	$arr = [];
        $circles = [];
        $legend = [];
        $leg=0;
    	$i=0;
        $dbh = new Database();
        $stmt = $dbh->prepare("SELECT * FROM `barangay`");
        $stmt->execute();

        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $result['id'];//BARANGAY ID

            //ASSIGNING BRGY COLOR
            $sqls;


            if($crime == "all"){
                if ($cfilter == 'daily') {
                    if($daily != ""){
                        //no end date
                        $sqls = "SELECT *, COUNT(*) as incident_count FROM `blotter` WHERE DATE_FORMAT(dt_reported, '%Y-%m-%d') = '$daily' AND `brgy_incident` = '$id' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                }

                else if ($cfilter == 'monthly') {
                    $date_string = $monthly;
                    $date_parts = explode('-', $date_string);
                    $year = $date_parts[0];
                    $month = $date_parts[1];

                    if($monthly != ""){
                        //no end date
                        $sqls = "SELECT *, COUNT(*) as incident_count FROM `blotter` WHERE YEAR(dt_reported) = '$year' AND MONTH(dt_reported) = '$month' AND `brgy_incident` = '$id' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                }

                else if ($cfilter == 'annual1') {
                    if($annual1 != ""){
                        //var_dump($annual1);
                        //no end date
                        $sqls = "SELECT *, COUNT(*) as incident_count FROM `blotter` WHERE YEAR(dt_reported) = '$annual1' AND `brgy_incident` = '$id' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                }


                else if ($cfilter == 'custom') {
                    if($start == "" && $end == ""){
                        //all activity, no filter on date
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' GROUP BY `type_incident` ORDER BY `incident_count` DESC LIMIT 1";
                    }
                    else if($start != "" && $end == ""){
                        //all activity, no end date
                        $start .=" 00:00:00";
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `dt_reported` >= '$start' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                    else if($start == "" && $end != ""){
                        //all activity, no end date
                        $end .= " 23:59:59";
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `dt_reported` <= '$end' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                    else if($start == $end && $start != ""){
                        $start .=" 00:00:00";
                        $end .= " 23:59:59";
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `dt_reported` >= '$start' AND `dt_reported` <= '$end' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                    else{
                        //all activity, complete dates
                        $start .=" 00:00:00";
                        $end .= " 23:59:59";
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `dt_reported` >= '$start' AND `dt_reported` <= '$end' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                }
            }
            else{
                if ($cfilter == 'daily') {
                    if($daily != ""){
                        //no end date
                        $sqls = "SELECT *, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `type_incident` = '$crime' AND DATE_FORMAT(dt_reported, '%Y-%m-%d') = '$daily' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                }

                else if ($cfilter == 'monthly') {

                    $date_string = $monthly;
                    $date_parts = explode('-', $date_string);
                    $year = $date_parts[0];
                    $month = $date_parts[1];

                    if($monthly != ""){
                        //no end date
                        $sqls = "SELECT *, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `type_incident` = '$crime' AND YEAR(dt_reported) = '$year' AND MONTH(dt_reported) = '$month' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                }


                else if ($cfilter == 'annual1') {
                    if($annual1 != ""){
                        //no end date
                        $sqls = "SELECT *, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `type_incident` = '$crime' AND YEAR(dt_reported) = '$annual1' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                }


                else if ($cfilter == 'custom') {
                    if($start == "" && $end == ""){
                        // activity, no filter on date
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `type_incident` = '$crime' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                    else if($start != "" && $end == ""){
                        // activity, no end date
                        $start .=" 00:00:00";
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `type_incident` = '$crime' AND `dt_reported` >= '$start' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                    else if($start == "" && $end != ""){
                        // activity, no start date
                        $end .= " 23:59:59";
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `type_incident` = '$crime' AND `dt_reported` <= '$end' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                    else if($start == $end && $start != ""){
                        $start .=" 00:00:00";
                        $end .= " 23:59:59";
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `type_incident` = '$crime' AND `dt_reported` >= '$start' AND `dt_reported` <= '$end' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                    else{
                        // activity, complete dates
                        $start .=" 00:00:00";
                        $end .= " 23:59:59";
                        $sqls = "SELECT `type_incident`, COUNT(*) as incident_count FROM `blotter` WHERE `brgy_incident` = '$id' AND `type_incident` = '$crime' AND `dt_reported` >= '$start' AND `dt_reported` <= '$end' GROUP BY `type_incident` ORDER BY incident_count DESC LIMIT 1";
                    }
                }
                    
            }

            $stmt1 = $dbh->prepare($sqls);
            $stmt1->execute();
            $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

            if(!empty($result1)){
            	//naay record ang kani na brgy sa blotter
                $crime_id = $result1['type_incident'];
                //GET CRIME NAME AND COLOR
                $stmt2 = $dbh->prepare("SELECT * FROM `crime` WHERE `id`=:crime_id");
                $stmt2->execute(compact('crime_id'));

                $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                if(!empty($result2)){
                    $arr[$i]['id'] = $result['id'];
                	$arr[$i]['crime_name'] = $result2['crime_name'];
                    $arr[$i]['crime_color'] = $result2['crime_color'];
                    $arr[$i]['incident_count'] = $result1['incident_count'];
                    
                    // if (empty($legend)) {
                    //     $legend[$leg]['crime_color'] = $result2['crime_color'];
                    //     $legend[$leg]['crime_name'] = $result2['crime_name'];
                    //     $leg++;
                    // } else {
                    //     $found = false;
                    //     foreach ($legend as $crime) {
                    //         if ($crime['crime_name'] == $result2['crime_name']) {
                    //             $found = true;
                    //             break;
                    //         }
                    //     }
                    //     if (!$found) {
                    //         $legend[$leg]['crime_color'] = $result2['crime_color'];
                    //         $legend[$leg]['crime_name'] = $result2['crime_name'];
                    //         $leg++;
                    //     }
                    // }
                }
            }
            else{
                $arr[$i]['id'] = $result['id'];
            	$arr[$i]['crime_name'] = "";
                $arr[$i]['crime_color'] = "";
                $arr[$i]['incident_count'] = 0;
            }

            //PLOTTING CIRLES ON MAP
            $sql = "SELECT * FROM `blotter` WHERE `brgy_incident` = '$id' ";
            if($crime == "all"){
                if ($cfilter == 'daily') {
                    if($daily != ""){
                        //no end date
                        $sql .= "AND DATE_FORMAT(dt_reported, '%Y-%m-%d') = '$daily'";
                    }
                }

                else if ($cfilter == 'monthly') {
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
                        //var_dump($annual1);
                        //no end date
                        $sql .= "AND YEAR(dt_reported) = '$annual1'";
                    }
                }

                else if ($cfilter == 'custom') {
                    if($start1 == "" && $end1 == ""){
                        //all activity, no filter on date
                        $sql .= "";
                    }
                    else if($start1 != "" && $end1 == ""){
                        //all activity, no end date
                        $start1 .=" 00:00:00";
                        $sql .= "AND `dt_reported` >= '$start1'";
                    }
                    else if($start1 == "" && $end1 != ""){
                        //all activity, no end date
                        $end1 .= " 23:59:59";
                        $sql .= "AND `dt_reported` <= '$end1'";
                    }
                    else if($start1 == $end1 && $start1 != ""){
                        $start1 .=" 00:00:00";
                        $end1 .= " 23:59:59";
                        $sql .= "AND `dt_reported` >= '$start1' AND `dt_reported` <= '$end1'";
                    }
                    else{
                        //all activity, complete dates
                        $start1 .=" 00:00:00";
                        $end1 .= " 23:59:59";
                        $sql .= "AND `dt_reported` >= '$start1' AND `dt_reported` <= '$end1'";
                    }
                }
            }
            else{
                if ($cfilter == 'daily') {
                    if($daily != ""){
                        //no end date
                        $sql .= "AND `type_incident`='$crime' AND DATE_FORMAT(dt_reported, '%Y-%m-%d') = '$daily'";
                    }
                }

                else if ($cfilter == 'monthly') {

                    $date_string = $monthly;
                    $date_parts = explode('-', $date_string);
                    $year = $date_parts[0];
                    $month = $date_parts[1];

                    if($monthly != ""){
                        //no end date
                        $sql .= "AND `type_incident`='$crime' AND YEAR(dt_reported) = '$year' AND MONTH(dt_reported) = '$month'";
                    }
                }


                else if ($cfilter == 'annual1') {
                    if($annual1 != ""){
                        //no end date
                        $sql .= "AND `type_incident`='$crime' AND YEAR(dt_reported) = '$annual1'";
                    }
                }

                else if ($cfilter == 'custom') {
                    if($start1 == "" && $end1 == ""){
                        // activity, no filter on date
                        $sql .= "AND `type_incident` = '$crime'";
                    }
                    else if($start1 != "" && $end1 == ""){
                        // activity, no end date
                        $start1 .=" 00:00:00";
                        $sql .= "AND `type_incident` = '$crime' AND `dt_reported` >= '$start1'";
                    }
                    else if($start1 == "" && $end1 != ""){
                        // activity, no start date
                        $end1 .= " 23:59:59";
                        $sql .= "AND `type_incident` = '$crime' AND `dt_reported` <= '$end1'";
                    }
                    else if($start1 == $end1 && $start1 != ""){
                        $start1 .=" 00:00:00";
                        $end1 .= " 23:59:59";
                        $sql .= "AND `type_incident` = '$crime' AND `dt_reported` >= '$start1' AND `dt_reported` <= '$end1'";
                    }
                    else{
                        // activity, complete dates
                        $start1 .=" 00:00:00";
                        $end1 .= " 23:59:59";
                        $sql .= "AND `type_incident` = '$crime' AND `dt_reported` >= '$start1' AND `dt_reported` <= '$end1'";
                    }
                }
            }

            $stmt3 = $dbh->prepare($sql);
            $stmt3->execute();
            $j = 0;
            while ($result3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                $circles[$i][$j]['id'] = $result['id']; //BARANGAY ID
                $circles[$i][$j]['location'] = $result3['location'];

                $crime_id = $result3['type_incident'];
                //GET CRIME COLOR
                $stmt4 = $dbh->prepare("SELECT * FROM `crime` WHERE `id`=:crime_id");
                $stmt4->execute(compact('crime_id'));

                $result4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                if(!empty($result4)){
                    $circles[$i][$j]['crime_color'] = $result4['crime_color'];
                }
                else{
                    $circles[$i][$j]['crime_color'] = "";
                }
                $j++;
            }
            if (empty($result3)) {
                $circles[$i][$j]['id'] = $result['id'];
            }
            $i++;
        }
$legend = array();
foreach ($arr as $element) {
    if (!empty($element['crime_name'])) {
        $found = false;

        foreach ($legend as $crime) {
            if ($crime['crime_name'] == $element['crime_name']) {
                $found = true;
                break;
            }
        }

        if (!$found) {
            $legend[] = array(
                'crime_color' => $element['crime_color'],
                'crime_name' => $element['crime_name']
            );
        }
    }
}

// re-index the array numerically
$legend = array_values($legend);


        // var_dump($legend);
        if(!empty($arr) && !empty($circles)){
            json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            json_encode($circles, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            json_encode($legend, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            echo json_encode(array('arr' => $arr, 'circles' => $circles, 'legend' => $legend), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }
        else {
            echo "[]";
        }

    }

    public function getFilter($data){
    	$crime = $data['crime'];
        $start = $data['start'];
        $end = $data['end']; //2023-03-10T16:35
        $arr =[];
        $i=0;

        $sql = "SELECT * FROM `blotter` ";
		
        if($start == "" && $end == ""){
            //no filter on date
            if($crime!="all"){
	        	$sql .= "WHERE type_incident = '$crime'";
	        }
        }
        else if($start != "" && $end == ""){
            //no end date
            $start .=" 00:00:00";
            $sql .= "WHERE `dt_reported` >= '$start'";
        }
        else if($start == "" && $end != ""){
            //no end date
            $end .= " 23:59:59";
            $sql .= "WHERE `dt_reported` <= '$end'";
        }
        else if($start == $end && $start != ""){
            //same start and end
            $start .=" 00:00:00";
            $end .= " 23:59:59";
            $sql .= "WHERE `dt_reported` >= '$start' AND `dt_reported` <= '$end'";
        }
        else{
            //complete dates
            $start .=" 00:00:00";
            $end .= " 23:59:59";
            $sql .= "WHERE `dt_reported` >= '$start' AND `dt_reported` <= '$end'";
        }

//SELECT `type_incident`,`brgy_incident`, COUNT(`type_incident`) AS count FROM `blotter` WHERE `type_incident`=6 AND `dt_reported` >= '2023-02-03 00:00:00' AND `dt_reported` <= '2023-03-02 23:59:59' GROUP BY `brgy_incident` ORDER BY COUNT(`type_incident`) DESC;

//         SELECT b.`id`, IFNULL(COUNT(`type_incident`), 0) AS count 
// FROM (SELECT `id` FROM `barangay`) AS b 
// LEFT JOIN `blotter` ON b.`id` = `blotter`.`brgy_incident` 
// GROUP BY b.`id`
// ORDER BY COUNT(`type_incident`) DESC;

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


}

?>