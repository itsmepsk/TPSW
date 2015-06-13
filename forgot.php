<?php
// require "Mail.php";

$hoste = "localhost";
$user = "root";
$pass = "";
$db = "tpsw";
$server   = "ssl://smtp.gmail.com";
$username = "email";
$password = "password";
$port     = "465";
$sender    = "email";

$connection = new mysqli($hoste,$user,$pass,$db);

if (!$connection) {

	die($connection->error);

}


/* $smtp = Mail::factory("smtp",
		array(
				"host"     => $server,
				"username" => $username,
				"password" => $password,
				"auth"     => true,
				"port"     => 465
		)
);
 */


if (isset($_POST['reset_email'])) {
	
	$email = $_POST['reset_email'];
	$query = "SELECT * FROM details WHERE email = '$email'";
	$result = $connection->query($query);
	$details = $result->fetch_object();
	$roll = $details->hashed_roll;
	
	/* $subject = "Password Reset";
	$headers = array(
			"From"    => $sender,
			"To"      => $email,
			"Subject" => $subject,
			"Content-type"	=>	"text/html; charset=iso-8859-1",
			"X-Mailer"		=>	"PHP/" . phpversion()
				
	);
	
	
	$token = generateRandomString().$roll;
	$message = '
		<html>
			<head>
				<title>NIT Durgapur TPSW database password reset</title>
			</head>
			<body>
			Please click on the link below to set new password.<br>
			The given link is one time link so be careful.After setting a new password, you will be redirected to login page.<br>
			Click <a href = "http:/tpsw-itsmepsk.rhcloud.com/verify/token/'.$token.'"><button>here</button></a> to reset your password.
			</body>
		</head>
	
	';
	$mail = $smtp->send($rec, $headers, $message);
	
	if (PEAR::isError($mail)) {
		echo ($mail->getMessage());
	}
	
	$query = "UPDATE token SET token='{$token}' WHERE roll_no='{$rol}'";
	if (!$connection->query($query)) {
		echo $connection->error;
	} */
}
else {
	echo "hi";
	header("Location: /");
	
}

function generateRandomString($length = 80) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
