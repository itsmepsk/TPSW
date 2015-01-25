<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		
		$this->load_libraries();
		$this->load->model('functions');
		
	}
	
	public function index() {		
		
        $filed_list = $this->functions->fetch_fields();
        
        
        $data['details'] = $this->get_data(1);
        //var_dump($data);
        
		$this->load->view('details',$data);
		
	}
	
	public function get_data($id) {
		
		$details = $this->functions->get_data($id);
		return $details;
		
	}
	
	public function load_libraries() {
		
		$this->load_custom_libraries();
		
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