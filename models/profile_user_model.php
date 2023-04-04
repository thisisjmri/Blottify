<?php
class Profile_User_Model extends Model{


	public function __construct(){
		parent::__construct();
		Session::init();
        $loggedIn = Session::get("loggedIn");
        if($loggedIn == false){
            Session::destroy();
            header('location: login');
            exit;
        }
	}

    public function getAdmin(){
         return $this->db->select("SELECT * FROM `users`");
    }

    public function getStation(){
         return $this->db->select("SELECT * FROM `station`");
    }
    
    public function getAdmin1($admin){
        return $this->db->select("SELECT * FROM `users` WHERE id = '".$admin."' LIMIT 1 ");
    }

    public function getBlotterCount($admin){
        return $this->db->select("SELECT COUNT(*) AS count FROM `blotter` WHERE `d_policeuser` = '".$admin."'");
    }

    public function updateProfile($data,$admin_id){
        
        $image_name = $data['image_name'];
        $image_tmp = $data['image_tmp'];
        $image_target = $data['image_target'];

        $admin = $admin_id;
        if(move_uploaded_file($image_tmp, $image_target)){

            $sql = "UPDATE `users` SET `image` = '".$image_name."' WHERE `id` = ".$admin."";
            $query = $this->db->prepare($sql);
            $query->execute();   
            if($query->rowCount() > 0){
                echo 'SUCCESSFULLY';
            }else{
                echo 'ERROR';
            }
        }else{
            echo'eror';
        }
    }

    public function checkPassword($data,$admin_id){
        $admin = $admin_id;

        $sql = "SELECT password FROM admin WHERE admin_id = '".$admin."' LIMIT 1 ";
        $query = $this->db->prepare($sql);
        $query->execute();   
        if($query->rowCount() > 0){
            $query = $query->fetch();

            if(password_verify($data, $query['password'])) {
            // if($data == $query['password']){
                echo 'SUCCESSFULLY';
            
            }else{
                echo 'FAILED';
            }
            
        }
    }

    public function updateProf($data,$admin_id){
        $firstName = $data['firstName'];
        $middleName = $data['middleName'];
        $lastName = $data['lastName'];
        $username = $data['username'];
        $birthday = $data['birthday'];
        $station = $data['station'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $fullname = $data['firstName']." ".$data['middleName']." ".$data['lastName'];

        $admin = $admin_id;
        if($admin!=0){
            $dbh = new Database();
            $stmt = $dbh->prepare("UPDATE `users` SET `fullname` = :fullname, `firstname` = :firstname, `middlename` = :middlename, `lastname` = :lastname, `username` = :username, `bday` = :birthday, `station_id` = :station, `email` = :email, `contact` = :contact WHERE `id`= :id");

            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':firstname', $firstName);
            $stmt->bindParam(':middlename', $middleName);
            $stmt->bindParam(':lastname', $lastName);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':birthday', $birthday);
            $stmt->bindParam(':station', $station);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':contact', $mobile);
            $stmt->bindParam(':id', $admin);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "SUCCESS";
            }else{
                echo "ERROR";
            }
        }else{
            echo "ERROR";
        }
    }

    public function checkUsername($data){
        $username = $data;
        $id = Session::get("admin_id");
        $dbh = new Database();
        $stmt = $dbh->prepare("SELECT * FROM `users` WHERE `username`= :username AND `id` != :id");
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':id',$id);
        $stmt->execute();

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


    public function updatePassword($data){
        $current = $data['current'];
        $password = $data['password'];
        $id = $data['id'];

        $dbh = new Database();
        $stmt = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :id");
        $stmt->execute(compact('id'));

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(empty($user)){
            echo "User doesn't exist.";
        }
        else{
            $pass1 = $user['password'];

            define('AES_256_CBC', 'aes-256-cbc');
            $key = $id;
            $parts = explode(':', $pass1);
            $decrypted = openssl_decrypt($parts[0], AES_256_CBC, $key, 0, base64_decode($parts[1]));

            
            // check if current password is equal to the decrypted password;
            if($current == $decrypted){
                //current password is valid, proceed to changing password

                //ENCRYPTING PASSWORD
                $encryption_key = $id;
                $iv = random_bytes(16);  // generate 16 bytes of random data
                $raw = $password;
                $encrypted = openssl_encrypt($raw, AES_256_CBC, $encryption_key, 0, $iv);
                $encrypted = $encrypted . ':' . base64_encode($iv);

                $stmt1 = $dbh->prepare("UPDATE `users` SET `password`=:password WHERE `id`= :id");
                $stmt1->bindParam('password', $encrypted);
                $stmt1->bindParam('id', $id);
                $stmt1->execute();

                if ($stmt1->rowCount() > 0) {
                    echo "SUCCESS";
                }else{
                    echo "Error updating password";
                }
            }
            else{
                //current password is invalid
                echo "The password you've entered is incorrect.";
            }
        }
    }


}


?>