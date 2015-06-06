<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		
		parent:: __construct();
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
		$details = $this->functions->get_db();
		//var_dump($details);
		$data['details'] = $details;
// 		foreach ($details as $user) {
// 			$user['id']	=	
// 		}
		$this->load->view('admin',$data);
		
	}
	
	public function submit() {
		
		if (isset($_POST['activate'])) {
			
			$roll = $_POST['roll_no'];
			$activate = $this->functions->activate($roll);
			if ($activate) {
				
				redirect(base_url()."admin");
				
			}
			
			
		}
		
	}
	
	
}