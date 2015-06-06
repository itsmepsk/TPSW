<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

    class Reset extends CI_Controller {
        
            public function __construct() {

                parent::__construct();
                $this->load->model('functions');        

            }
            
            public function index($token = null) {
                
            	$logged_in = $this->customfunctions->is_logged_in();
            	
            	if ($logged_in) {
            		$id = $this->session->userdata('user');
            		$id = $id['id'];
            		$details = $this->functions->get_data($id);
            		$uid = $details->roll_no;
            		$data['uid'] = sha1(md5($uid));
            		$this->load->view('reset',$data);
            	         
            	}
            	else {
            		
            		if($token == NULL) {
            			
            			redirect(base_url());
            		
            		}
            		else {
            		
            			$roll = $this->check_token($token);
            			if ($roll != NULL) {
            				
            				$data['uid'] = sha1(md5($roll->roll_no));
            				$this->load->view('reset',$data);
            				
            			}
            			else {
            				
            				redirect(base_url());
            				
            			}
            			
            		}
            		
            	}           	                              
            }
            
            public function check_token($token) {
            	
            	$roll = $this->functions->check_token($token);
            	return $roll;
            	
            }
            
            public function submit() {
            	
            	if ($_POST == NULL) {
            		
            		redirect(base_url()."reset");
            		
            	}
            	
                $new_password = $this->input->post('new_password');
                $confirm_password = $this->input->post('confirm_password');
                $uid = $this->input->post('uid');
                //echo $uid;
                $validate = $this->validate_fields($new_password,$confirm_password);
                
                if($validate == TRUE) {
                    
                    $result = $this->functions->reset_password($uid,$new_password);
                    
                    if ($result) {
                    	echo "Successfully reset!";
                    }
                    
                }
                
            }
            
            public function validate_fields () {
                
                $config = array(
                    array(
                        'field'         =>         'new_password',
                        'label'         =>         'New Password',
                        'rules'         =>         'required|trim|xss_clean|min_length[8]'
                    ),
                    array(
                        'field'         =>         'confirm_password',
                        'label'         =>         'Confirm Password',
                        'rules'         =>         'required|trim|xss_clean|min_length[8]|matches[new_password]'
                    )
                );
                
                $this->form_validation->set_rules($config);
                
                if ($this->form_validation->run() == FALSE) {
                    
                    $uid = $this->session->userdata('user');
            		$data['uid'] = sha1(md5($uid['id']));
            		$this->load->view('reset',$data);
                    
                }
                else {
                	
                	return true;
                	
                }
            }
        
    }
