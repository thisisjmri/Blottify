<?php

class Change_Password_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

    public function updatePassword($data){
        $npass = $data['npass'];
        $cnpass = $data['cnpass'];
		$id = Session::get("resetId");
        
        $dbh = new Database(); 
        $stmt2 = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :id");
		$stmt2->execute(compact('id'));

		$user = $stmt2->fetch(PDO::FETCH_ASSOC);

		if(empty($user)){
		    echo "NOT FOUND";
		}
		else{
			$type = $user['type'];
			$station_id = $user['station_id'];
	        $stmt = $dbh->prepare("SELECT * FROM `station` WHERE `id`= :station_id");
			$stmt->execute(compact('station_id'));

			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			if(empty($result)){
			    echo "Error.";
			}
			else{
				$station_type = $result['station_type'];
				Session::init();
		        define('AES_256_CBC', 'aes-256-cbc');


		        //ENCRYPTING PASSWORD
		        $encryption_key = $id;
		        $iv = random_bytes(16);  // generate 16 bytes of random data
		        $raw = $npass;
		        $encrypted = openssl_encrypt($raw, AES_256_CBC, $encryption_key, 0, $iv);
		        $encrypted = $encrypted . ':' . base64_encode($iv);

		        $stmt1 = $dbh->prepare("UPDATE `users` SET `password`=:npass, `is_locked` = 0 WHERE `id`= :id");
		        $stmt1->bindParam('npass', $encrypted);
		        $stmt1->bindParam('id', $id);
		        $stmt1->execute();

		        if ($stmt1->rowCount() > 0) {
		        	Session::set('admin_id',$encryption_key);
			        Session::set('type',$type);
			        Session::set('station_id',$station_id);
			        Session::set('station_type',$station_type);
			        Session::set('resetId',0);
		            echo "SUCCESS";
		        }else{
		            echo "Error updating password";
		        }
			}
		}
        
    }

  

}

?>