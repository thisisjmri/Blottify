<?php

class User_Account_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

  	public function getStation(){
         return $this->db->select("SELECT * FROM `station`");
    }

    public function getRank(){
         return $this->db->select("SELECT * FROM `rank`");
    }

  	public function getUser(){
         return $this->db->select("SELECT * FROM `users`");
    }

	// public function addUser($data){
	// 	date_default_timezone_set('Asia/Manila');
 //        $today = date("Y-m-d H:i:s");
	// 	$admin_id = Session::get('admin_id');
	// 	$firstname = $data['firstname'];
	// 	$middlename = $data['middlename'];
	// 	$lastname = $data['lastname'];
	// 	$userstation = $data['userstation'];
	// 	$user_name = $data['user_name'];
	// 	$bday = $data['bday'];
	// 	$email = $data['email'];
	// 	$contact = $data['contact'];
	// 	$sex = $data['sex'];
	// 	$status = "ACTIVE";
	// 	$rank = $data['rank'];
	// 	$uuid; 

	// 	//VALIDATING EMAIL
	// 	$dbh = new Database();
	// 	$stmt0 = $dbh->prepare("SELECT * FROM `users` WHERE `email`= :email");
	// 	$stmt0->execute(compact('email'));

	// 	$result0 = $stmt0->fetch(PDO::FETCH_ASSOC);

	// 	if(empty($result0)){
	// 		//VALIDATING ID UNIQUENESS
	// 		$validId = true;
	// 		do{
	// 			$uuid = mt_rand(0, PHP_INT_MAX) & mt_rand(0, PHP_INT_MAX);// generate uuid
	// 			echo $uuid;
	// 			$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :uuid");
	// 			$stmt->execute(compact('uuid'));

	// 			$result = $stmt->fetch(PDO::FETCH_ASSOC);

	// 			if(empty($result)){
	// 			    //ID IS UNIQUE
	// 				$validId = false;
	// 			}
	// 		}while($validId == true);
			
	// 		//ENCRYPTING PASSWORD
	// 		define('AES_256_CBC', 'aes-256-cbc');
	// 		$encryption_key = $uuid;
	// 		$iv = random_bytes(16);  // generate 16 bytes of random data
	// 		$raw = $bday;
	// 		$encrypted = openssl_encrypt($raw, AES_256_CBC, $encryption_key, 0, $iv);
	// 		$encrypted = $encrypted . ':' . base64_encode($iv);

	// 	    $stmt = $dbh->prepare("INSERT INTO users (id, username, fullname, password, station_id, firstname, middlename, lastname, bday, email, contact, sex, status, type, rank, image)
	// 		VALUES (:val0, :val1, :val2, :val3, :val4, :val5, :val6, :val7, :val8, :val9, :val10, :val11, :val12, :val13, :val14, :val15)");
	// 		$stmt->bindParam(':val0', $value0);
	// 		$stmt->bindParam(':val1', $value1);
	// 		$stmt->bindParam(':val2', $value2);
	// 		$stmt->bindParam(':val3', $value3);
	// 		$stmt->bindParam(':val4', $value4);
	// 		$stmt->bindParam(':val5', $value5);
	// 		$stmt->bindParam(':val6', $value6);
	// 		$stmt->bindParam(':val7', $value7);
	// 		$stmt->bindParam(':val8', $value8);
	// 		$stmt->bindParam(':val9', $value9);
	// 		$stmt->bindParam(':val10', $value10);
	// 		$stmt->bindParam(':val11', $value11);
	// 		$stmt->bindParam(':val12', $value12);
	// 		$stmt->bindParam(':val13', $value13);
	// 		$stmt->bindParam(':val14', $value14);
	// 		$stmt->bindParam(':val15', $value15);

	// 		// insert a row
	// 		$value0 = $uuid;
	// 		$value1 = $user_name;
	// 		$value2 = $firstname." ".$middlename." ".$lastname;
	// 		$value3 = $encrypted;
	// 		$value4 = $userstation;
	// 		$value5 = $firstname;
	// 		$value6 = $middlename;
	// 		$value7 = $lastname;
	// 		$value8 = $bday;
	// 		$value9 = $email;
	// 		$value10 = $contact;
	// 		$value11 = $sex;
	// 		$value12 = $status;
	// 		$value13 = "USER";
	// 		$value14 = $rank;
	// 		$value15 = "bruce-mars.jpg";
	// 		$stmt->execute();

	// 		Session::init();
	//         Session::set('enrollee_id',$uuid);

	//         $stmt1 = $dbh->prepare("INSERT INTO logger (user_id, activity, date_time)
	// 		VALUES (:vals4, :vals5, :vals6)");
	// 		$stmt1->bindParam(':vals4', $values4);
	// 		$stmt1->bindParam(':vals5', $values5);
	// 		$stmt1->bindParam(':vals6', $values6);

	// 		// insert a row
	// 		$values4 = $admin_id;
	// 		$values5 = "ADDED ".$value2;
	// 		$values6 = $today;
	// 		$stmt1->execute();

	// 		echo "success";
	// 	}
	// 	else{
	// 		echo "invalid";
	// 	}		
	// }

	public function addUser($data){
		$admin_id = Session::get("admin_id");
		date_default_timezone_set('Asia/Manila');
		$today = date("Y-m-d H:i:s");
		$firstname = $data['firstname'];
		$middlename = $data['middlename'];
		$lastname = $data['lastname'];
		$userstation = $data['userstation'];
		$user_name = $data['user_name'];
		$bday = $data['bday'];
		$email = $data['email'];
		$contact = $data['contact'];
		$sex = $data['sex'];
		$status = "ACTIVE";
		$rank = $data['rank'];
		$uuid; 

		//VALIDATING EMAIL
		$dbh = new Database();
		$stmt0 = $dbh->prepare("SELECT * FROM `users` WHERE `email`= :email");
		$stmt0->execute(compact('email'));

		$result0 = $stmt0->fetch(PDO::FETCH_ASSOC);

		if(empty($result0)){//EMAIL IS UNIQUE
			//VALIDATING ID UNIQUENESS
			$validId = true;
			do{
				$uuid = mt_rand(0, PHP_INT_MAX) & mt_rand(0, PHP_INT_MAX);// generate uuid
				$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :uuid");
				$stmt->execute(compact('uuid'));

				$result = $stmt->fetch(PDO::FETCH_ASSOC);

				if(empty($result)){
				    //ID IS UNIQUE
					$validId = false;
				}
			}while($validId == true);
			
			//ENCRYPTING PASSWORD
			define('AES_256_CBC', 'aes-256-cbc');
			$encryption_key = $uuid;
			$iv = random_bytes(16);  // generate 16 bytes of random data
			$raw = $bday;
			$encrypted = openssl_encrypt($raw, AES_256_CBC, $encryption_key, 0, $iv);
			$encrypted = $encrypted . ':' . base64_encode($iv);


		    $stmt = $dbh->prepare("INSERT INTO users (id, username, fullname, password, station_id, firstname, middlename, lastname, bday, email, contact, sex, status, type, rank, image)
			VALUES (:val0, :val1, :val2, :val3, :val4, :val5, :val6, :val7, :val8, :val9, :val10, :val11, :val12, :val13, :val14, :val15)");
			$stmt->bindParam(':val0', $value0);
			$stmt->bindParam(':val1', $value1);
			$stmt->bindParam(':val2', $value2);
			$stmt->bindParam(':val3', $value3);
			$stmt->bindParam(':val4', $value4);
			$stmt->bindParam(':val5', $value5);
			$stmt->bindParam(':val6', $value6);
			$stmt->bindParam(':val7', $value7);
			$stmt->bindParam(':val8', $value8);
			$stmt->bindParam(':val9', $value9);
			$stmt->bindParam(':val10', $value10);
			$stmt->bindParam(':val11', $value11);
			$stmt->bindParam(':val12', $value12);
			$stmt->bindParam(':val13', $value13);
			$stmt->bindParam(':val14', $value14);
			$stmt->bindParam(':val15', $value15);

			// insert a row
			$value0 = $uuid;
			$value1 = $user_name;
			$value2 = $firstname." ".$middlename." ".$lastname;
			$value3 = $encrypted;
			$value4 = $userstation;
			$value5 = $firstname;
			$value6 = $middlename;
			$value7 = $lastname;
			$value8 = $bday;
			$value9 = $email;
			$value10 = $contact;
			$value11 = $sex;
			$value12 = $status;
			$value13 = "USER";
			$value14 = $rank;
			$value15 = "bruce-mars.jpg";
			$stmt->execute();

			Session::init();
	        Session::set('enrollee_id',$uuid);

	        $stmt1 = $dbh->prepare("INSERT INTO logger (user_id, activity, date_time)
			VALUES (:vals4, :vals5, :vals6)");
			$stmt1->bindParam(':vals4', $values4);
			$stmt1->bindParam(':vals5', $values5);
			$stmt1->bindParam(':vals6', $values6);

			// insert a row
			$values4 = $admin_id;
			$values5 = "ADDED ".$value2;
			$values6 = $today;
			$stmt1->execute();

			echo "success";
		}
		else{
			echo "invalid";
		}		
	}

	public function checkUsername($data){
		$username = $data;
		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `username`= :username");
		$stmt->execute(compact('username'));

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($result)){
		    //No similar username
		    echo "UNIQUE";
		}
		else{
			//Username exist
			echo "LIKE";
		}
		
	}

	public function checkEmail($data){
		$email = $data;
		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `email`= :email");
		$stmt->execute(compact('email'));

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($result)){
		    //No similar Email Address
		    echo "UNIQUE";
		}
		else{
			//Email Address exist
			echo "LIKE";
		}
		
	}


}

?>