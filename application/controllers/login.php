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
		
		$this->load->view('login');
		
	}
	
	public function validate() {
		
		$this->validate_fields();
		
	}
	
	public function validate_fields() {
		
		$config	= array(
			array(
				'field'		=>		'username',
				'label'		=>		'Username',
				'rules'		=>		'required|trim|xss_clean|alpha_numeric'
			),
			array(
				'field'		=>		'password',
				'label'		=>		'password',
				'rules'		=>		'required|trim|xss_clean|min_length[8]'
			)
		);
		$this->form_validation->set_rules($config);
		
		if($this->form_validation->run() == FALSE) {
                    
                    $this->load->view('login');
                    
                }
		else {
                    
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $this->check_user($username ,$password );
                    
                }
	}
	
        public function check_user($username ,$password ) {
            
                $result = $this->functions->user_exists($username,$password);
                    
                if ($result == NULL) {

                    echo 'Invalid Credentials.';

                }
                else {
                    
                    
                    foreach ($result as $key) {
                        
                        $user['id'] = $key->id;
                        
                    }
                    
                    $this->session->set_userdata('user',$user);
                    //var_dump($result);

                }
            
        }
	
}