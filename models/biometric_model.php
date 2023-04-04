<?php

class Biometric_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function addLogs($data){
		$id = $data;
		date_default_timezone_set('Asia/Manila');
		$today = date("Y-m-d H:i:s");

		$dbh = new Database();

		$stmtz = $dbh->prepare("UPDATE `users` SET `attempts`= 0, `bio_timer` = NULL WHERE `id`= :id");
        $stmtz->execute(compact('id'));

        if ($stmtz->rowCount() < 0) {
        	echo "Error..";
        }
	    $stmt = $dbh->prepare("INSERT INTO logger (user_id, activity, date_time)
		VALUES (:val1, :val2, :val3)");
		$stmt->bindParam(':val1', $value1);
		$stmt->bindParam(':val2', $value2);
		$stmt->bindParam(':val3', $value3);

		// insert a row
		$value1 = $data;
		$value2 = "logged in.";
		$value3 = $today;
		$stmt->execute();

		Session::init();
        Session::set('loggedIn',true);
        $type = Session::get("type");

        if($type = "ADMIN"){
        	echo "admin_dashboardss";
        }
        else{
        	echo "dashboardss";
        }
	}

	public function setAttempts($data){
		$id = $data;
		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :id");
		$stmt->execute(compact('id'));

		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		$attempts = $user['attempts'];

		if($attempts == 2){
			$stmtx = $dbh->prepare("UPDATE `users` SET `bio_timer` = NOW() WHERE `id`= :id");
            $stmtx->execute(compact('id'));

            if ($stmtx->rowCount() > 0) {
            	date_default_timezone_set('Asia/Manila');
            	$currentDateTime = date('Y-m-d H:i:s');
            	echo $currentDateTime;
            }
            else{
            	echo "Error..";
            }
		}
		else{
			$attempts++;
			$stmty = $dbh->prepare("UPDATE `users` SET `attempts`= :attempts WHERE `id`= :id");
			$stmty->bindParam(':attempts', $attempts);
			$stmty->bindParam(':id', $id);
            $stmty->execute();

            if ($stmty->rowCount() > 0) {
            	$left = 3 - $attempts;
            	echo $left;
            }
            else{
            	echo "Error..";
            }
		}
	}

	public function checkTimer($data){
		$id = $data;
		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :id");
		$stmt->execute(compact('id'));

		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		$bio_timer = $user['bio_timer'];
		$attempts = $user['attempts'];

		if($bio_timer == null){
			//if the bio timer is null it means that the user has no previous record of severe attempts
            	echo "proceed";
		}
		else {
			//the user has experinced time limits
		    $current_time = time();
		    $lastattempt = strtotime($bio_timer);
		    $timer_diff = $current_time - $lastattempt;

		    // var_dump("current:".$current_time." last:".$lastattempt." diff:".$timer_diff);
		    if ($timer_diff > 60) {
		    	//the user can attempt bio again, the timer has been reset
		    	$stmt1 = $dbh->prepare("UPDATE `users` SET `attempts`=0,`bio_timer`= NULL WHERE `id`= :id");
				$stmt1->execute(compact('id'));
		        echo "proceed";
		    } else {
		    	//the user's time is still running. should proceed to set attempts function
		        echo $bio_timer;
		    }
		}
	}

	public function resetBio($data){
		$id = $data;
		$dbh = new Database();
		$stmt = $dbh->prepare("UPDATE `users` SET `attempts`=0,`bio_timer`= NULL WHERE `id`= :id");
		$stmt->execute(compact('id'));

		if ($stmty->rowCount() < 0) {
        	echo "Error..";
        }
	}

}

?>