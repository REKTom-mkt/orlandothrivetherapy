<?php
function clean($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	// $data = htmlspecialchars($data);
	return $data;
}

$url = "https://www.google.com/recaptcha/api/siteverify";
$data = [
'secret' => "6Le9b98eAAAAAJYJq-zZFG0lVouM3VXdC8iEyQXv", // change secret ket
'response' => $_POST['token'],
'remoteip' => $_SERVER['REMOTE_ADDR']
];

$options = array(
    'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => http_build_query($data)
    )
);

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$res = json_decode($response, true);

if ($res['success'] == true && $res['score'] >= 0.3) {

    $name = clean($_POST['name']);
	$phone = clean($_POST['phone']);
	$email_address = clean($_POST['email']);
	$best_time = clean($_POST['best_time']);
	$location = clean($_POST['location']);
	$requestedservice = clean($_POST['requestedservice']);
	$message = clean($_POST['message']);
		
	
	$to = 'contact@orlandothrivetherapy.com';

	$email_subject = "Orlando Thrive Therapy Contact Form from: $name";
	$email_body = "You have received a new message from Orlando Thrive Therapy Contact Form.\n\n".
	"Here are the details:

	Name: $name
	Phone Number: $phone
	Email: $email_address
	Preferred Session Time: $best_time
	Office Location Preference: $location
	Requested Service: $requestedservice
	Reason(s) for Seeking Therapy: $message";
	
	$headers = "From: contactform@orlandothrivetherapy.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$success = mail($to,$email_subject,$email_body,$headers,"-f noreply@orlandothrivetherapy.com");
    if ($success) {
		$res['code'] = 200;
        echo json_encode($res);
        http_response_code(200);
        // return true;
    } else {
		$res['code'] = 500;
    	echo json_encode($res);
        http_response_code(500);
    }
} else {
	$res['code'] = 500;
    echo json_encode($res);
    http_response_code(500);
}

?>