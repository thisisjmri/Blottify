<?php

class Forget_Password_Model extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function checkEmail($data){
	    $eemail = $data;
	    $yes=0;
	    $dbh = new Database();
	    $stmt = $dbh->prepare("SELECT * FROM `users` WHERE `email`= :eemail");
	    $stmt->execute(compact('eemail'));

	    $result = $stmt->fetch(PDO::FETCH_ASSOC);

	    if(!empty($result)){
	        // Email exists in database
	        $yes = $result['fullname'];
	        Session::set('resetId',$result['id']);
	    } 

	    echo $yes;
	}

	function emailOTP_first_attempt(){

		$string = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$otp = '';
		$len = strlen($string);

		for ($i = 0; $i < 6; $i++) {
		  $otp .= $string[rand(0, $len - 1)];
		}

        $id = Session::get("resetId");

		$dbh = new Database();
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `id`= :id");
		$stmt->execute(compact('id'));

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($result)){
			echo "Error in fetching";
		}
		else{
			$to      = $result['email'];
			$subject = 'Blottify OTP Login Verification'; //change to blottify
			 
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			 
			// Create email headers
			$headers .= 'From: Blottify Team'."\r\n".
			    'Reply-To: Blottify Team'."\r\n" .
			    'X-Mailer: PHP/' . phpversion();
			 
			// Compose a simple HTML email message
			$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">

			<head>
			  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1.0">
			  <title>HELLO, '.$result['username'].'. Verify your login</title>
			  <!--[if mso]><style type="text/css">body, table, td, a { font-family: Arial, Helvetica, sans-serif !important; }</style><![endif]-->
			</head>

			<body style="font-family: Helvetica, Arial, sans-serif; margin: 0px; padding: 0px; background-color: #ffffff;">
			  <table role="presentation"
			    style="width: 100%; border-collapse: collapse; border: 0px; border-spacing: 0px; font-family: Arial, Helvetica, sans-serif; background-color: rgb(239, 239, 239);">
			    <tbody>
			      <tr>
			        <td align="center" style="padding: 1rem 2rem; vertical-align: top; width: 100%;">
			          <table role="presentation" style="max-width: 600px; border-collapse: collapse; border: 0px; border-spacing: 0px; text-align: left;">
			            <tbody>
			              <tr>
			                <td style="padding: 40px 0px 0px;">
			                  <div style="text-align: left;">
			                    <div style="padding-bottom: 20px;"><img src="https://i.ibb.co/Qbnj4mz/logo.png" alt="Company" style="width: 56px;"></div>
			                  </div>
			                  <div style="padding: 20px; background-color: rgb(255, 255, 255);">
			                    <div style="color: rgb(0, 0, 0); text-align: left;">
			                      <h1 style="margin: 1rem 0">Verification code</h1>
			                      <p style="padding-bottom: 16px">HELLO, <b>'.$result['username'].'<b> use the verification code below to sign in.</p>
			                      <p style="padding-bottom: 16px; color: red;">Don\'t share this to anyone!</p>
			                      <p style="padding-bottom: 16px"><h1><strong>'.$otp.'</strong></h1></p>
			                      <p style="padding-bottom: 16px">If you didn\'t request this, you can ignore this email.</p>
			                      <p style="padding-bottom: 16px">Thanks,<br>Blottify Team</p>
			                    </div>
			                  </div>
			                  <div style="padding-top: 20px; color: rgb(153, 153, 153); text-align: center;">
			                    <p style="padding-bottom: 16px">Copyright &nbsp; 2023 Blottify</p>
			                  </div>
			                </td>
			              </tr>
			            </tbody>
			          </table>
			        </td>
			      </tr>
			    </tbody>
			  </table>
			</body>

			</html>';
			 
			// Sending email
			if(mail($to, $subject, $message, $headers)){
			    Session::set("otp", $otp);
			} else{
			    echo 'failed';
			}		
		}
	}
	
}

?>