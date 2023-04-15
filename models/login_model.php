<?php

class Login_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

  	public function run($data){
		$username = $data['username'];
		$password = $data['password'];

		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `username`= :username");
		$stmt->execute(compact('username'));

		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		$is_locked = $user['is_locked'];

		if(empty($user)){
		    echo "NOT FOUND";
		}
		else if ($is_locked == 1) {
			echo "LOCKED";
		}
		else{
			$pass = $user['password'];
			$type = $user['type'];
			$status = $user['status'];
			$station_id = $user['station_id'];
			$attempts = $user['attempts'];

			$stmt1 = $dbh->prepare("SELECT * FROM `station` WHERE `id`= :station_id");
			$stmt1->execute(compact('station_id'));

			$result = $stmt1->fetch(PDO::FETCH_ASSOC);

			if(empty($result)){
			    echo "Error";
			}

			$station_type = $result['station_type'];

	  		define('AES_256_CBC', 'aes-256-cbc');
			$key = $user['id'];
			$parts = explode(':', $pass);
			$decrypted = openssl_decrypt($parts[0], AES_256_CBC, $key, 0, base64_decode($parts[1]));

			// echo $decrypted;
			if($password == $decrypted){
				if($status == "ACTIVE"){
					$stmtz = $dbh->prepare("UPDATE `users` SET `attempts`= 0 WHERE `username`= :username");
		            $stmtz->execute(compact('username'));

		            if ($stmtz->rowCount() < 0) {
		            	echo "Error..";
		            }
					Session::init();
			        Session::set('loggedIn',false);
			        Session::set('admin_id',$key);
			        Session::set('type',$type);
			        Session::set('station_id',$station_id);
			        Session::set('station_type',$station_type);
					echo "VALID";
				}
				else{
					echo "INACTIVE";
				}				
			}
			else{
				if($attempts == 4){
					$stmtx = $dbh->prepare("UPDATE `users` SET `is_locked`= 1 WHERE `username`= :username");
		            $stmtx->execute(compact('username'));

		            if ($stmtx->rowCount() > 0) {
		            	echo "LOCKED";
		            }
		            else{
		            	echo "Error..";
		            }
				}
				else{
					$attempts++;
					$stmty = $dbh->prepare("UPDATE `users` SET `attempts`= :attempts WHERE `username`= :username");
					$stmty->bindParam(':attempts', $attempts);
					$stmty->bindParam(':username', $username);
		            $stmty->execute();

		            if ($stmty->rowCount() > 0) {
		            	$left = 5 - $attempts;
		            	echo $left;
		            }
		            else{
		            	echo "Error..";
		            }
				}
			}
		}
		
	}
	
	public function logout(){
        Session::destroy();
        header('location: ../login');
        exit;
    }

}

?>