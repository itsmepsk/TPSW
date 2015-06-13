<?php

class Export extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		$logged_in = $this->customfunctions->is_logged_in();
		if (!$logged_in) {
			redirect(base_url());
		}
		
	}
	
	public function index() {
		
		$this->load->view('export');
		
	}

    /**
     *
     */
    public function submit() {
		
		if (isset($_POST['export_submit'])) {
			
			$query = "SELECT * FROM details WHERE ";
			
			if ($this->input->post('branch')) {
				
				$branch = $this->input->post('branch');
				$query.= "branch = '$branch' ";
				
			}
			if ($this->input->post('cgpa')) {
			
				$cgpa= $this->input->post('cgpa');
				$query.= "AND cgpa > '$cgpa' ";
			
			}
			if ($this->input->post('current_suppli')) {
			
				$active_supplies = $this->input->post('active_supplies');
				if ($active_supplies == 'no') {
					
					$query.= "AND active_supplies = '0' ";
							
				}
			}
			if ($this->input->post('12_percent')) {
			
				$twelve_percent = $this->input->post('12_percent');
				$query.= "AND 12_percent > '$twelve_percent' ";
			
			}
			
			if ($this->input->post('10_percent')) {
			
				$ten_percent = $this->input->post('10_percent');
				$query.= "AND 10_percent > '$ten_percent' ";
			
			}
			
			echo $query;
			
		}
		else {
			
			redirect(base_url());
			
		}
	}
	
		
}