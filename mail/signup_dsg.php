<?php
$secretKey = "6LebGj8UAAAAAGLy2sapjgWwmJxZmINpBUX4LeeB";
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=". $secretKey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$googleobj = json_decode($response);
$verified = $googleobj->success;


if ($verified === true){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email_address = $_POST['email'];
		
	
	$to = 'contact@orlandothrivetherapy.com';
	$email_subject = "Divorce Support Group For Women Sign Up Form from $fname";
	$email_body = "You have received a new message from Orlando Thrive Therapy — Divorce Support Group For Women Sign Up Form.\n\n".
	"Here are the details:

	First Name: $fname
	Last Name: $lname
	Phone Number: $phone
	Email: $email_address";
	
	$headers = "From: signupform@orlandothrivetherapy.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	mail($to,$email_subject,$email_body,$headers,"-f noreply@orlandothrivetherapy.com");
	return true;
}	
?>