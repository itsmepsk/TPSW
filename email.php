<?php

$host = "mysql.hostinger.in";
$database = "u127548221_tpsw";
$name = "u127548221_tpsw";
$pass = "password";
$connection = new mysqli($host, $name, $pass, $database);

if (!$connection) {
	die($connection->error);
}

$query = "SELECT email,roll_no FROM token";
$result = $connection->query($query);

while($row = $result->fetch_row()){
     $email[] = $row[0];
	 $roll[] = $row[1];
}

$val = array_combine($roll, $email);

$subject = 'the subject';

$headers = 'From: admin@database.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
	'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 foreach ($val as $rol=>$rec) {
	$token = generateRandomString().sha1(md5($rol));
	$message = '
		<html>
			<head>
				<title>Password Reset</title>
			</head>
			<body>
			Click <a href = "http://psks.tk/verify.php?&token='.$token.'">here</a> to reset your password.
			</body>
		</head>
	
	';
	$s = mail($rec, $subject, $message, $headers);
	if ($s) {
		echo "Mail Sent successfully to {$rec}.<br>";
	}
	else {
		echo "Failed.<br>";
	}
	
	$query = "UPDATE token SET token='{$token}' WHERE roll_no='{$rol}'";
	if ($connection->query($query)) {
		echo "Inserted token for {$rec} successfully.<br>";
	}
	else {
		echo $connection->error;
	}
	
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

echo "<pre>";
var_dump($email);
var_dump($roll);
echo "</pre>";  

/* if ($result) {
	
	$items = $result->fetch_array();
	var_dump($items);
	
}
else {
	die($connection->error);
} */


/* $to      = array('prathamesh.kakade18@gmail.com','itsmepsk@gmail.com','sagarjain0907@gmail.com','sagarj0907@gmail.com');
$subject = 'the subject';

$headers = 'From: admin@database.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
	'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
foreach ($to as $rec) {
	$token = generateRandomString();
	$message = '
		<html>
			<head>
				<title>Password Reset</title>
			</head>
			<body>
			Click <a href = "http://nitdgp.ac.in?'.$token.'">here</a> to reset your password.
			</body>
		</head>
	
	';
	$s = mail($rec, $subject, $message, $headers);
	if ($s) {
		echo "Mail Sent successfully to {$rec}.<br>";
	}
	else {
		echo "Failed.<br>";
	}
}
*/


?>