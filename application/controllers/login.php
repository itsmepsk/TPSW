<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

class Login extends CI_Controller {
	
	public function __construct() {
		
		parent :: __construct();
		
        $this->load->model('functions');
		$this->load->library('customfunctions');
                
		if($this->customfunctions->is_logged_in()) {
			redirect(base_url().'details');
		}
		
	}
	
	public function index() {
		
//		$data['reset_success'] = FALSE;
//		$data['reset_error'] = FALSE;
//		$data['login_error'] = FALSE;
		$this->load->view('signin');
		
	}
	
	public function validate() {
		
		if ($_POST['login_submit']) {

			//var_dump($_POST);
			$this->validate_fields();
		
		}
		else {
			
			redirect(base_url());
			
		}
		
	}
	
	public function reset() {
		
		if ($_POST['reset_submit']) {
			
			//var_dump($_POST);
			
			$id = $this->validate_email();
			
			//$data['reset_error'] = FALSE;
			
			if ($id == NULL) {
				
				$data['reset_error'] = TRUE;
				
			}
			else {
				
				$email = $this->input->post('reset_email');
				$data['reset_success'] = TRUE;
				$data['reset_email'] = $email;
				
			}
			
			$this->load->view('signin',$data);
			
		}
		else {
			
			$this->index();
			redirect(base_url()."login");
			
		}
		
	}
	
	public function validate_email() {
		
			
		$email = $this->input->post('reset_email');
		$id = $this->check_email(trim($email));
		
		return $id;
			
		
	}
	
	public function check_email($email) {
		
		$id = $this->functions->email_exists($email);
		
		return $id;
		
	}
	
	public function validate_fields() {
		
		$config	= array(
			array(
				'field'		=>		'roll_no',
				'label'		=>		'Roll No.',
				'rules'		=>		'required|trim|xss_clean|callback_remove_special|callback_to_uppercase'
			),
			array(
				'field'		=>		'password',
				'label'		=>		'Password',
				'rules'		=>		'required|trim|xss_clean|min_length[8]'
			)
		);
		$this->form_validation->set_rules($config);
		
		if($this->form_validation->run() == FALSE) {
              
			//$data['login_error'] = TRUE;
//			$data['reset_success'] = FALSE;
//			$data['reset_error'] = FALSE;
                        $this->load->view('signin');
                    
		}
		else {
                    
				$username = $this->input->post('roll_no');
				$password = $this->input->post('password');
				//echo $username."<br>";
				//echo $password."<br>";
				$this->check_user($username ,$password );
                    
		}
	}
	
	
	public function remove_special($roll) {
		
		return preg_replace('/[^a-zA-Z0-9]/', '', $roll);
		
	}
	
	public function to_uppercase($roll) {
		
		return strtoupper($roll);
		
	}
	
        public function check_user($username ,$password ) {
            
                $result = $this->functions->user_exists($username,$password);
                    
                if ($result == NULL) {
                	
                	$data['login_error'] = TRUE;
//                	$data['reset_error'] = FALSE;
                	$this->load->view('signin',$data);
                    //echo 'Invalid Credentials.';

                }
                else {
                    
                    
                    foreach ($result as $key) {
                        
                        $user['id'] = $key->id;
                        
                    }
                    
                    $this->session->set_userdata('user',$user);
                    redirect(base_url());

                }
            
        }
	
}