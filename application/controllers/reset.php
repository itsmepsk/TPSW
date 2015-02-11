<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

    class Reset extends CI_Controller {
        
            public function __construct() {

                parent::__construct();

            }
            
            public function index($token) {
                
                if($token == NULL) {
                    
                    redirect(base_url());
                    
                }
                else {
                    
                    $this->load->view('reset');
                    
                }
                
            }
            
            public function reset() {
                
                $new_password = $this->input->post('new_password');
                $confirm_password = $this->input->post('confirm_password');
                
                $validate = $this->validate_fields($new_password,$confirm_password);
                
                if($validate == TRUE) {
                    
                    $result = $this->functions->reset_password($new_password);
                    
                }
                
            }
            
            public function validate_fields ($param) {
                
                $config = array(
                    array(
                        'field'         =>         'new_password',
                        'label'         =>         'New Password',
                        'rules'         =>         'required|trim|xss_clean|min_length[8]|matches[confirm_password]'
                    ),
                    array(
                        'field'         =>         'confirm_password',
                        'label'         =>         'Confirm Password',
                        'rules'         =>         'required|trim|xss_clean|min_length[8]|matches[new_password]'
                    )
                );
                
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == FALSE) {
                    
                    $this->load->view('reset');
                    
                }
                
            }
        
    }
