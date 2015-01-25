<?php

class Libraries extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		
		$this->load_libraries();
		
	}
	
	public function index() {
		
		//$this->load_libraries();
		
	}
	
	public function load_libraries() {
		
		
		
		
		
	}	
	
	public function load_standard_libraries() {
		
		$this->load->helper('form');
		
		$this->load->helper('url');
		
		$this->load->library('form_validation');
		
		$this->load->library('session');
		
		//$this->load->library('database');
		
	}
	
	
	public function load_custom_libraries() {
		
		$this->load_models();
		
		$this->load_controllers();
			
	}
	
	public function load_models() {
		
		$this->load->model('functions');
		
	}
	
	public function load_controllers() {
		
				
		
	}
	
}