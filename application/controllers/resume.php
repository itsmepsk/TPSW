<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resume extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		
		$this->load->model('functions');
		$logged_in = $this->customfunctions->is_logged_in();
		
		if(! $logged_in) {
		
			redirect(base_url()."login");
		
		}
		else {
			global $id;
			$id = $this->session->userdata('user');
			$id = $id['id'];
		}
		
	}
	
	public function index() {
		
		$id = $this->session->userdata('user');
		$id = $id['id'];
		
		$details = $this->functions->get_data($id);
		$data['details'] = $details;
		$this->load->view('resume',$data);
		
	}
	
	
}