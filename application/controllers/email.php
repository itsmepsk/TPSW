<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

class Email extends CI_Controller {
    
        public function __construct() {

            parent::__construct();
            $this->load->library('email');

        }

        public function index() {
            
            $this->email->from('prathamesh.kakade18@gmail.com','Prathamesh Kakade');
            $this->email->to('prathamesh.kakade18@gmail.com','Prathamesh Kakade');
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');
            $this->email->send();
            
            echo $this->email->print_debugger();
        }
    
}