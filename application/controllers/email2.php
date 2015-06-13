<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

class Email2 extends CI_Controller {
    
        public function __construct() {

            parent::__construct();
            $config = $this->configEmail();
            $this->load->library('email', $config);
            $this->load->model('emailFunctions');
            
            $id = $this->session->userdata('user');
            $GLOBALS['id'] = $id['id'];
        }

        public function index() {
            
            $this->email->from('email','Prathamesh Kakade');
            $this->email->to('email','Prathamesh Kakade');
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');
            $this->email->send();
            
            echo $this->email->print_debugger();
            
        }
        
        public function first_time() {
        	
        	$id = $GLOBALS['id'];
        	$data = $this->emailFunctions->get_data();
        	
        	foreach ($data as $key) {
        		
        		$token = $this->generateToken();
        		$this->emailFunctions->insertToken($key->roll_no, $token);
        		$this->sendEmail($key->email, $key->roll_no, $token);
        		break;
        	}
        	
        }
        
        public function generateToken($length = 80) {
        	
        	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        	$charactersLength = strlen($characters);
        	$token = '';
        	for ($i = 0; $i < $length; $i++) {
        		$token .= $characters[rand(0, $charactersLength - 1)];
        	}
        	
//         	if ($this->emailFunctions->checkToken($token) == NULL) {
//         		$this->generateToken();
//         	}
//         	else {
        		
//         	}
        	
        	return $token;
        	
        }
        
        
        public function sendEmail($email, $roll_no, $token) {
        	
        	
        	//$this->email->initialize($config);
        	
        	$this->email->from('prathamesh.kakade18@gmail.com','Prathamesh Kakade');
        	$this->email->to($email);
        	$this->email->subject('Activate your account.');
        	$message = $this->setMessage($roll_no, $token);
        	$this->email->message($message);
        	$this->email->send();
        	
        	echo $this->email->print_debugger();
        	
        }
        
        public function configEmail() {
        	
        	$config['mailtype'] 	= 	'HTML';
        	$config['charset'] 		= 	'iso-8859-1';
        	$config['protocol']    	= 	'smtp';
        	$config['smtp_host']    = 	'ssl://smtp.gmail.com';
        	$config['smtp_port']    = 	'465';
        	$config['smtp_timeout'] = 	'30';
        	$config['smtp_user']    = 	'tpsw2016@gmail.com';
        	$config['smtp_pass']    = 	'tpsw2k16';
        	$config['newline']   	=	 "\r\n";
        	$config['validation'] 	=	 TRUE;

        	return $config;
        	
        }
        
        public function setMessage($rol, $token) {
        	
        	$message = "
        		<html>
        			<head>
        				<title>
        					Verify your account.
        				</title>
        			<head>
        			<body>
        				Click <a href = 'http://psks.tk/verify.php?&roll='.$rol.'&token='.$token.'>here</a> to set your password.
        			</body>
        		<html>
        	";
        	
        	return $message;
        	
        }
        
        
    
}