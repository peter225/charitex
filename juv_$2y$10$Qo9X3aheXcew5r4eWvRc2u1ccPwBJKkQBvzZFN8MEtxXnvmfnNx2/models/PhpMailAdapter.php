<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\SMTP;

// Load PHPMailer autoload file
require 'vendor/autoload.php';

class PHPMailAdapter 
{

	// Define email verification function
	public function sendRegistrationEmail($email, $firstname) 
	{
    	// Instantiate PHPMailer object
    	

    	try 
    	{
    		$mail = new PHPMailer(true);

    		
	        // Setup SMTP configuration
	        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	        $mail->isSMTP();
			$mail->Host       = $_ENV['PHPMailer_Host']; // SMTP server
			
			$mail->SMTPAuth   = $_ENV['PHPMailer_SMTPAuth']; // Enable SMTP authentication
			
			$mail->Username   = $_ENV['PHPMailer_Username']; // SMTP username
			
			$mail->Password   = $_ENV['PHPMailer_Password']; // SMTP password
			
	        $mail->SMTPAutoTLS = $_ENV['PHPMailer_SMTPAutoTLS'];
	        // Enable TLS encryption
			$mail->Port = $_ENV['PHPMailer_Port']; // TCP port to connect to
			
	        if($_ENV['PHPMailer_Port']==587 || $_ENV['PHPMailer_Port']==465){
	        	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	        }
	        // Set email content
	        
			$mail->addAddress($email);
			
	        (new CustomLogAdapter())->logInfo($_ENV['PHPMailer_Password']);
			$mail->setFrom($_ENV['PHPMailer_Username']);
			
			$mail->isHTML(true);
			
			$mail->Subject = 'Complete your registration';
			
			$mail->Body = 'Hello'.$firstname.'!<br><br>
							Please use this link to set your password and complete your registration:<br><br><a href="'. $_ENV['BASE_URL'].'/login?email=' . $email .  
							'">Complete registration</a><br><br>Thank you,<br>Charitex';

        // Send email
			$mail->send();
			
        	return true;
    	} 
    	catch (PHPMailerException $e) 
    	{
        // Handle exception
    		(new CustomLogAdapter())->logInfo($e->getMessage());
        	//echo $e->getMessage();
        	//return false;
    	}
    	catch (Exception $e) 
    	{
        // Handle exception
        	echo $e->getMessage();
        	return false;
    	}
	}
}



// Example usage
// $email = 'user@example.com';
// $verification_code = '123456';
// if (send_verification_email($email, $verification_code)) {
//     echo 'Verification email sent successfully.';
// } else {
//     echo 'Failed to send verification email.';
// }
