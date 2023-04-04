 <?php

class Blotter_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function getIncident(){
         return $this->db->select("SELECT * FROM `crime`");
    }

    public function getBarangay(){
         return $this->db->select("SELECT * FROM `barangay`");
    }

    public function getStation(){
         return $this->db->select("SELECT * FROM `station`");
    }

    public function getUser(){
         return $this->db->select("SELECT * FROM `users`");
    }

 //    public function getIRFID() {
	//     //VALIDATING ID UNIQUENESS
	//     $dbh = new Database();
	//     $stmt = $dbh->prepare("SELECT * FROM `blotter` ORDER BY id DESC LIMIT 1;");
	//     $stmt->execute();

	//     $result = $stmt->fetch(PDO::FETCH_ASSOC);

	// 	// Initialize current year and month to the current date
	//     $current_year = date("Y");
	//     $current_month = date("m");
	//     $incremental_number;

	//     if (empty($result)) {
	//         // If there are no existing IRF IDs, start with "0001"
	//         $incremental_number = "1";
	//     } else {
	//         // Extract the last generated IRF ID
	//         $last_irf_id = $result['id'];

	//         // Extract the year and incremental number from the last IRF ID
	//         $last_year = substr($last_irf_id, 0, 4);
	//         $last_month = substr($last_irf_id, 5, 2);
	//         $last_incremental_number = substr($last_irf_id, 8);

	//         // Get the current year and month
	//         $current_year = date("Y");
	//         $current_month = date("m");

	//         $incremental_number=$last_incremental_number +1;

	//         // // Reset the incremental number to 1 if the year and month have changed
	//         // if ($current_year != $last_year || $current_month != $last_month) {
	//         //     $incremental_number = "0001";
	//         // } else {
	//         //     // Increment the incremental number from the last IRF ID
	//         //     $incremental_number = str_pad($last_incremental_number + 1, 4, "0", STR_PAD_LEFT);
	//         // }
	//     }

	//     // Generate the new IRF ID in the format "YYYY/MM/NNNN"
	//     $id = $current_year . $current_month . $incremental_number;

	//     echo $id;
	// }



public function getIRFID() {
    //VALIDATING ID UNIQUENESS
    $dbh = new Database();	
    $stmt = $dbh->prepare("SELECT * FROM `blotter` ORDER BY id DESC LIMIT 1;");
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Initialize current year and month to the current date
    $current_year = date("Y");
    $current_month = date("m");
    $incremental_number = "0001";

    if (!empty($result)) {
        // Extract the last generated IRF ID
        $last_irf_id = $result['id'];

        // Extract the year and incremental number from the last IRF ID
        $last_year = substr($last_irf_id, 0, 4);
        $last_incremental_number = substr($last_irf_id, 6);

        // Check if the last generated IRF ID is for the current year and month
        if ($last_year == $current_year) {
            // Generate a new incremental number based on the last IRF ID
            $incremental_number = str_pad($last_incremental_number + 1, 4, "0", STR_PAD_LEFT);
        }
    }

    // Generate the new IRF ID in the format "YYYYMMNNNN"
    $id = $current_year . $current_month . $incremental_number;

    echo $id;
}





	// public function getIRFID(){
	// 	//VALIDATING ID UNIQUENESS
	// 	$dbh = new Database();
	// 	$stmt = $dbh->prepare("SELECT * FROM `blotter` ORDER BY id DESC LIMIT 1;");
	// 	$stmt->execute();

	// 	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	// 	if(empty($result)){
	// 		echo "1";
	// 	}
	// 	else{
	// 		$id = $result['id'];
	// 		echo $id+1;
	// 	}
	// }

	public function getBrgy($data){
		//GETTING BRGY NAME
		$id = $data['brgy_incident'];

		if($id != null){
			$dbh = new Database();
			$stmt = $dbh->prepare("SELECT * FROM `barangay` WHERE `id`= :id");
			$stmt->execute(compact('id'));

			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			if(empty($result)){
				echo "Error in fetching";
			}
			else{
				$barangay_name = $result['barangay_name'];
				echo $barangay_name;
			}
		}
	}

	public function getTypeOfIncident($data){
		//GETTING BRGY NAME
		$id = $data['type_incident'];

		if($id != null){
			$dbh = new Database();
			$stmt = $dbh->prepare("SELECT * FROM `crime` WHERE `id`= :id");
			$stmt->execute(compact('id'));

			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			if(empty($result)){
				echo "Error in fetching";
			}
			else{
				$crime_name = $result['crime_name'];
				echo $crime_name;
			}
		}
	}

	public function saveBlotter($data){
        $irfid = $data['irfid'];
        $type_incident = $data['type_incident'];
        $copyFor = $data['copyFor'];
        $dt_reported = $data['dt_reported'];
        $dt_incident = $data['dt_incident']; 
        $place_incident = $data['place_incident']; 
        $brgy_incident = $data['brgy_incident']; 
        $a_lastname = $data['a_lastname']; 
        $a_firstname = $data['a_firstname'];
        $a_middlename = $data['a_middlename'];
        // $a_qualifier = $data['a_qualifier'];
        $a_nickname = $data['a_nickname'];
        $a_citizenship = $data['a_citizenship']; 
        $a_sex = $data['a_sex'];
        $a_civil = $data['a_civil'];
        $a_bday = $data['a_bday'];
        $a_age = $data['a_age'];
        $a_pob = $data['a_pob'];
        $a_mobilephone = $data['a_mobilephone'];
        $a_currentadd = $data['a_currentadd'];
        $a_currentvill = $data['a_currentvill'];
        $a_currentbrgy = $data['a_currentbrgy'];
        $a_currentcity = $data['a_currentcity'];
        $a_currentprov = $data['a_currentprov'];
        $a_otheradd = $data['a_otheradd'];
        $a_othervill = $data['a_othervill'];
        $a_otherbrgy = $data['a_otherbrgy'];
        $a_othercity = $data['a_othercity'];
        $a_otherprov = $data['a_otherprov']; 
        $a_occupation = $data['a_occupation'];
        $a_idcard = $data['a_idcard'];
        $b_lastname = $data['b_lastname'];
        $b_firstname = $data['b_firstname'];
        $b_middlename = $data['b_middlename'];
        // $b_qualifier = $data['b_qualifier'];
        $b_nickname = $data['b_nickname'];
        $b_citizenship = $data['b_citizenship']; 
        $b_sex = $data['b_sex'];
        $b_civil = $data['b_civil'];
        $b_bday = $data['b_bday'];
        $b_age = $data['b_age'];
        $b_pob = $data['b_pob']; 
        $b_mobilephone = $data['b_mobilephone'];
        $b_currentadd = $data['b_currentadd'];
        $b_currentvill = $data['b_currentvill'];
        $b_currentbrgy = $data['b_currentbrgy'];
        $b_currentcity = $data['b_currentcity'];
        $b_currentprov = $data['b_currentprov'];
        $b_otheradd = $data['b_otheradd'];
        $b_othervill = $data['b_othervill'];
        $b_otherbrgy = $data['b_otherbrgy'];
        $b_othercity = $data['b_othercity'];
        $b_otherprov = $data['b_otherprov'];
        $b_occupation = $data['b_occupation'];
        $b_relation = $data['b_relation'];
        // $b_selectinfluence = $data['b_selectinfluence'];
        $b_influence = $data['b_influence'];
        $c_lastname = $data['c_lastname'];
        $c_firstname = $data['c_firstname'];
        $c_middlename = $data['c_middlename'];
        // $c_qualifier = $data['c_qualifier'];
        $c_nickname = $data['c_nickname'];
        $c_citizenship = $data['c_citizenship'];
        $c_sex = $data['c_sex'];
        $c_civil = $data['c_civil'];
        $c_bday = $data['c_bday'];
        $c_age = $data['c_age'];
        $c_pob = $data['c_pob'];
        $c_mobilephone = $data['c_mobilephone'];
        $c_currentadd = $data['c_currentadd'];
        $c_currentvill = $data['c_currentvill'];
        $c_currentbrgy = $data['c_currentbrgy'];
        $c_currentcity = $data['c_currentcity'];
        $c_currentprov = $data['c_currentprov'];
        $c_otheradd = $data['c_otheradd'];
        $c_othervill = $data['c_othervill'];
        $c_otherbrgy = $data['c_otherbrgy'];
        $c_othercity = $data['c_othercity'];
        $c_otherprov = $data['c_otherprov'];
        $c_occupation = $data['c_occupation'];
        $c_workadd = $data['c_workadd'];
        // $d_type = $data['d_type'];
        // $d_dtincident = $data['d_dtincident'];
        // $d_pincident = $data['d_pincident'];
        $d_narrative = $data['d_narrative'];
        // $d_reporting = $data['d_reporting'];
        // $d_police = $data['d_police'];
        // $d_rank = $data['d_rank'];
        $d_policeuser = $data['d_policeuser'];
        // $d_entrynum = $data['d_entrynum'];
        // $d_station = $data['d_station'];
        // $d_telephone = $data['d_telephone'];
        // $d_investigator = $data['d_investigator'];
        // $d_mobile1 = $data['d_mobile1'];
        // $d_chief = $data['d_chief'];
        // $d_mobile2 = $data['d_mobile2'];

        $station_id = Session::get("station_id");
        $dbh = new Database();
        $stmt = $dbh->prepare("INSERT INTO blotter (id, type_incident, copyfor, dt_reported, dt_incident, place_incident, brgy_incident, a_lastname, a_firstname, a_middlename, a_nickname, a_citizenship, a_sex, a_civil, a_bday, a_age, a_pob, a_mobilephone, a_currentadd, a_currentvill, a_currentbrgy, a_currentcity, a_currentprov, a_otheradd, a_othervill, a_otherbrgy, a_othercity, a_otherprov, a_occupation, a_idcard, b_lastname, b_firstname, b_middlename, b_nickname, b_citizenship, b_sex, b_civil, b_bday, b_age, b_pob, b_mobilephone, b_currentadd, b_currentvill, b_currentbrgy, b_currentcity, b_currentprov, b_otheradd, b_othervill, b_otherbrgy, b_othercity, b_otherprov, b_occupation, b_relation, b_influence, c_lastname, c_firstname, c_middlename, c_nickname, c_citizenship, c_sex, c_civil, c_bday, c_age, c_pob, c_mobilephone, c_currentadd, c_currentvill, c_currentbrgy, c_currentcity, c_currentprov, c_otheradd, c_othervill, c_otherbrgy, c_othercity, c_otherprov, c_occupation, c_workadd, d_narrative, d_policeuser, station_id) VALUES (:val1, :val2, :val3, :val4, :val5, :val6, :val7, :val8, :val9, :val10, :val12, :val13, :val14, :val15, :val16, :val17, :val18, :val19, :val20,:val21, :val22, :val23, :val24, :val25, :val26, :val27, :val28, :val29, :val30, :val31, :val32, :val33, :val34, :val36, :val37, :val38, :val39, :val40, :val41, :val42, :val43, :val44, :val45, :val46, :val47, :val48, :val49, :val50, :val51, :val52, :val53, :val54, :val55, :val57, :val58, :val59, :val60, :val62, :val63, :val64, :val65, :val66, :val67, :val68, :val69, :val70, :val71, :val72, :val73, :val74, :val75, :val76, :val77, :val78, :val79, :val80, :val81, :val85, :val89, :val90)");

		$stmt->bindParam(':val1', $irfid);
		$stmt->bindParam(':val2', $type_incident);
		$stmt->bindParam(':val3', $copyFor);
		$stmt->bindParam(':val4', $dt_reported);
		$stmt->bindParam(':val5', $dt_incident);
		$stmt->bindParam(':val6', $place_incident);
		$stmt->bindParam(':val7', $brgy_incident);
		$stmt->bindParam(':val8', $a_lastname);
		$stmt->bindParam(':val9', $a_firstname);
		$stmt->bindParam(':val10', $a_middlename);
		// $stmt->bindParam(':val11', $a_qualifier);
		$stmt->bindParam(':val12', $a_nickname);
		$stmt->bindParam(':val13', $a_citizenship);
		$stmt->bindParam(':val14', $a_sex);
		$stmt->bindParam(':val15', $a_civil);
		$stmt->bindParam(':val16', $a_bday);
		$stmt->bindParam(':val17', $a_age);
		$stmt->bindParam(':val18', $a_pob);
		$stmt->bindParam(':val19', $a_mobilephone);
		$stmt->bindParam(':val20', $a_currentadd);
		$stmt->bindParam(':val21', $a_currentvill);
		$stmt->bindParam(':val22', $a_currentbrgy);
		$stmt->bindParam(':val23', $a_currentcity);
		$stmt->bindParam(':val24', $a_currentprov);
		$stmt->bindParam(':val25', $a_otheradd);
		$stmt->bindParam(':val26', $a_othervill);
		$stmt->bindParam(':val27', $a_otherbrgy);
		$stmt->bindParam(':val28', $a_othercity);
		$stmt->bindParam(':val29', $a_otherprov);
		$stmt->bindParam(':val30', $a_occupation);
		$stmt->bindParam(':val31', $a_idcard);
		$stmt->bindParam(':val32', $b_lastname);
		$stmt->bindParam(':val33', $b_firstname);
		$stmt->bindParam(':val34', $b_middlename);
		// $stmt->bindParam(':val35', $b_qualifier);
		$stmt->bindParam(':val36', $b_nickname);
		$stmt->bindParam(':val37', $b_citizenship);
		$stmt->bindParam(':val38', $b_sex);
		$stmt->bindParam(':val39', $b_civil);
		$stmt->bindParam(':val40', $b_bday);
		$stmt->bindParam(':val41', $b_age);
		$stmt->bindParam(':val42', $b_pob);
		$stmt->bindParam(':val43', $b_mobilephone);
		$stmt->bindParam(':val44', $b_currentadd);
		$stmt->bindParam(':val45', $b_currentvill);
		$stmt->bindParam(':val46', $b_currentbrgy);
		$stmt->bindParam(':val47', $b_currentcity);
		$stmt->bindParam(':val48', $b_currentprov);
		$stmt->bindParam(':val49', $b_otheradd);
		$stmt->bindParam(':val50', $b_othervill);
		$stmt->bindParam(':val51', $b_otherbrgy);
		$stmt->bindParam(':val52', $b_othercity);
		$stmt->bindParam(':val53', $b_otherprov);
		$stmt->bindParam(':val54', $b_occupation);
		$stmt->bindParam(':val55', $b_relation);
		// $stmt->bindParam(':val56', $b_selectinfluence);//
		$stmt->bindParam(':val57', $b_influence);
		$stmt->bindParam(':val58', $c_lastname);
		$stmt->bindParam(':val59', $c_firstname);
		$stmt->bindParam(':val60', $c_middlename);
		// $stmt->bindParam(':val61', $c_qualifier);
		$stmt->bindParam(':val62', $c_nickname);
		$stmt->bindParam(':val63', $c_citizenship);
		$stmt->bindParam(':val64', $c_sex);
		$stmt->bindParam(':val65', $c_civil);
		$stmt->bindParam(':val66', $c_bday);
		$stmt->bindParam(':val67', $c_age);
		$stmt->bindParam(':val68', $c_pob);
		$stmt->bindParam(':val69', $c_mobilephone);
		$stmt->bindParam(':val70', $c_currentadd);
		$stmt->bindParam(':val71', $c_currentvill);
		$stmt->bindParam(':val72', $c_currentbrgy);
		$stmt->bindParam(':val73', $c_currentcity);
		$stmt->bindParam(':val74', $c_currentprov);
		$stmt->bindParam(':val75', $c_otheradd);
		$stmt->bindParam(':val76', $c_othervill);
		$stmt->bindParam(':val77', $c_otherbrgy);
		$stmt->bindParam(':val78', $c_othercity);
		$stmt->bindParam(':val79', $c_otherprov);
		$stmt->bindParam(':val80', $c_occupation);
		$stmt->bindParam(':val81', $c_workadd);
		// $stmt->bindParam(':val82', $d_type);
		// $stmt->bindParam(':val83', $d_dtincident);
		// $stmt->bindParam(':val84', $d_pincident);
		$stmt->bindParam(':val85', $d_narrative);
		// $stmt->bindParam(':val86', $d_reporting);
		// $stmt->bindParam(':val87', $d_police);
		// $stmt->bindParam(':val88', $d_rank);
		$stmt->bindParam(':val89', $d_policeuser);
		$stmt->bindParam(':val90', $station_id);
		// $stmt->bindParam(':val90', $d_entrynum);
		$stmt->execute();

		if ($stmt === false) {
		    echo "Error executing query: " . print_r($pdo->errorInfo(), true);
		} else {
			//ADD LOGS
			date_default_timezone_set('Asia/Manila');
			$today = date("Y-m-d H:i:s");

			$dbh1 = new Database();
		    $stmt1 = $dbh1->prepare("INSERT INTO logger (user_id, activity, date_time)
			VALUES (:val1, :val2, :val3)");
			$stmt1->bindParam(':val1', $value1);
			$stmt1->bindParam(':val2', $value2);
			$stmt1->bindParam(':val3', $value3);

			// insert a row
			$value1 = $d_policeuser;
			$value2 = "added a Blotter: Case #".$irfid;
			$value3 = $today;
			$stmt1->execute();
		    echo "success";
		}
    }
}

?>