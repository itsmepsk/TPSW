<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		
		$this->load->library('../controllers/libraries');
		
	}
	
	public function index() {		
		
		$this->load->view('details');
		
	}
	
	public function submit() {
		$filed_list = $this->fetch->fetch_field();
	}
	
}