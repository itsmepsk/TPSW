<?php

class Email extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->model('emailFunctions');
		
	}
	
	public function index() {
		
		$details = $this->getDetails();
		$this->sendEmail($details);
		
	}
	
	
	public function getDetails() {
		
		return $this->emailFunctions->get_data();		
		
	}
	
	public function sendEmail($details) {
		
		var_dump($details);
		
		foreach ($details as $key) {
			$email[] = $key->email;
			$roll[] = $key->roll_no;
		}		
		
		$val = array_combine($roll, $email);
		var_dump($val);
		
		$subject = getSubject();
		$headers = getHeaders();
		foreach ($val as $roll=>$email) {
			$token = generateRandomString().$roll.$email;
			$message = getMessage($token);
			$sendEmail = mail($rec, $subject, $message, $headers);
			
			if ($sendEmail) {
				if ($this->emailFunctions->insertToken($roll, $token)) {
					echo "Success!";
				}
			}
			
		}
				
	}
	
	public function getSubject() {
		
		$subject = 'the subject';
		return $subject;
		
	}
	
	public function getHeaders() {
		
		$headers = 'From: admin@database.com' . "\r\n" .
				'Reply-To: webmaster@example.com' . "\r\n" .
				'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
		return $headers;
		
	}
	
	public function getMessage($token) {
		
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
		
	}
	
	public function generateRandomString($length = 80) {
		
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
		
	}
	
}