<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		
		$this->load_libraries();
		$this->load->model('functions');
		
	}
	
	public function index($status = NULL) {		
		
        $field_list = $this->functions->fetch_fields();        
        $data['details'] = $this->get_data(1);
        $param = sha1(md5("updated"));
        $value = md5(sha1("updated"));
        session_start();
        //echo $_SESSION[$param];
        if (isset($_SESSION[$param]) && ($_SESSION[$param] == $value)) {
        	
        	$data['details']->updated = TRUE;
        	unset($_SESSION[$param]);
        	session_destroy();
        	
        }
        
        $this->load->view('details',$data);
        
	}
	
	public function submit() {
		
		$details = $_POST;
		$validate = $this->validate_fields($details);
		
		if ($validate == TRUE) {
			$status = $this->functions->update_details($details);
			$param = sha1(md5("updated"));
			
			session_start();
			$_SESSION[$param] = md5(sha1("updated"));
			//$updated = TRUE;
			//echo $_SESSION[$param];
			redirect(base_url());
		}
		
	}
	
	public function get_data($id) {
		
		$details = $this->functions->get_data($id);
		return $details;
		
	}
	
	public function validate_fields($details) {
		
		$config = array(
			array(
				'field'		=>		'registration_no',
				'label'		=>		'Registration number',
				'rules'		=>		'required|trim|xss_clean|integer|exact_length[8]'
			),
			array(
				'field'		=>		'name',
				'label'		=>		'Name',
				'rules'		=>		'required|trim|xss_clean|callback_alpha_dash_space'
			),
			array(
				'field'		=>		'email',
				'label'		=>		'Email',
				'rules'		=>		'required|trim|xss_clean|valid_email'
			),
			array(
				'field'		=>		'contact_no_1',
				'label'		=>		'Contact No. 1',
				'rules'		=>		'required|trim|xss_clean|integer|exact_length[10]'
			),
			array(
				'field'		=>		'contact_no_2',
				'label'		=>		'Contact No. 2',
				'rules'		=>		'trim|xss_clean|integer'
			),
			array(
				'field'		=>		'home_town',
				'label'		=>		'Home Town',
				'rules'		=>		'required|trim|xss_clean|callback_alpha_dash_space'
			),
			array(
				'field'		=>		'home_address',
				'label'		=>		'Home Address',
				'rules'		=>		'required|trim|xss_clean'
			),
			array(
				'field'		=>		'hostel_address',
				'label'		=>		'Hostel Address',
				'rules'		=>		'required|trim|xss_clean'
			),
			array(
				'field'		=>		'sgpa_1',
				'label'		=>		'1st Semester SGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'sgpa_2',
				'label'		=>		'2nd Semester SGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'sgpa_3',
				'label'		=>		'3rd Semester SGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'sgpa_4',
				'label'		=>		'4th Semester SGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'sgpa_5',
				'label'		=>		'5th Semester SGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'sgpa_6',
				'label'		=>		'6th Semester SGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'sgpa_7',
				'label'		=>		'7th Semester SGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'sgpa_8',
				'label'		=>		'8th Semester SGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'cgpa',
				'label'		=>		'CGPA',
				'rules'		=>		'required|trim|xss_clean|decimal|greater_than[0]|less_than[10]'
			),
			array(
				'field'		=>		'supplies',
				'label'		=>		'Supplies till previous semester',
				'rules'		=>		'required|trim|xss_clean|is_natural'
			),
			array(
				'field'		=>		'active_supplies',
				'label'		=>		'Active Supplies',
				'rules'		=>		'required|trim|xss_clean|is_natural'
			),
			array(
				'field'		=>		'aieee_air',
				'label'		=>		'AIEEE Rank',
				'rules'		=>		'required|trim|xss_clean|is_natural_no_zero'
			),
			array(
				'field'		=>		'12_school',
				'label'		=>		'12th School Name',
				'rules'		=>		'required|trim|xss_clean|callback_alpha_dash_space'
			),
			array(
				'field'		=>		'12_obtained_marks',
				'label'		=>		'12th Obtained marks',
				'rules'		=>		'required|trim|xss_clean|integer'
			),
			array(
				'field'		=>		'12_total_marks',
				'label'		=>		'12th Total marks',
				'rules'		=>		'required|trim|xss_clean|is_natural_no_zero'
			),
			array(
				'field'		=>		'10_school',
				'label'		=>		'10th School Name',
				'rules'		=>		'required|trim|xss_clean|callback_alpha_dash_space'
			),
			array(
				'field'		=>		'10_obtained_marks',
				'label'		=>		'10th Obtained marks',
				'rules'		=>		'required|trim|xss_clean|integer'
			),
			array(
				'field'		=>		'10_total_marks',
				'label'		=>		'10th Total marks',
				'rules'		=>		'required|trim|xss_clean|is_natural_no_zero'
			),
			array(
				'field'		=>		'disability_type',
				'label'		=>		'Disability Type',
				'rules'		=>		'required|trim|xss_clean'
			),
			array(
				'field'		=>		'disability_percent',
				'label'		=>		'Disability Percentage',
				'rules'		=>		'required|trim|xss_clean|float'
			),
			array(
				'field'		=>		'father_name',
				'label'		=>		'Father\'s Name',
				'rules'		=>		'required|trim|xss_clean|callback_alpha_dash_space'
			),
			array(
				'field'		=>		'mother_name',
				'label'		=>		'Mother\'s Name',
				'rules'		=>		'required|trim|xss_clean|callback_alpha_dash_space'
			),
			array(
				'field'		=>		'height',
				'label'		=>		'Height',
				'rules'		=>		'required|trim|xss_clean|is_natural_no_zero'
			),
			array(
				'field'		=>		'weight',
				'label'		=>		'Weight',
				'rules'		=>		'required|trim|xss_clean|is_natural_no_zero'
			),
			array(
				'field'		=>		'power_left',
				'label'		=>		'Left eye Power',
				'rules'		=>		'required|trim|xss_clean|float'
			),
			array(
				'field'		=>		'power_right',
				'label'		=>		'Right eye Power',
				'rules'		=>		'required|trim|xss_clean|float'
			),
			array(
				'field'		=>		'scholastic_achievements',
				'label'		=>		'Scholastic Achievements',
				'rules'		=>		'trim|xss_clean'
			),
			array(
				'field'		=>		'academic_projects',
				'label'		=>		'Academic Projects',
				'rules'		=>		'trim|xss_clean'
			),
			array(
				'field'		=>		'practical_training',
				'label'		=>		'Practical Training',
				'rules'		=>		'trim|xss_clean'
			),
			array(
				'field'		=>		'skills_capabilities',
				'label'		=>		'Skills and Capabilities',
				'rules'		=>		'trim|xss_clean'
			),
			array(
				'field'		=>		'position_responsibility',
				'label'		=>		'Position of Responsibility',
				'rules'		=>		'trim|xss_clean'
			),
			array(
				'field'		=>		'extra_curriculars',
				'label'		=>		'Extra Curriculars',
				'rules'		=>		'trim|xss_clean'
			),
		);
		$data['details'] = $this->get_data(1);
		$this->form_validation->set_rules($config);
		//$this->form_validation->set_message('integer', '%s Should be an integer');
		if($this->form_validation->run() == FALSE) {
			
			$data['details'] = $details;
			$this->load->view('details',$data);
			
		}
		
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
	
	function _alpha_space($str_in = '') {
		
	    if (! preg_match("/^([a-z0-9 ])+$/i", $str_in)) {
	    	
	        $this->form_validation->set_message('_alpha_dash_space', 'The %s field may only contain alpha-numeric characters, spaces, underscores, and dashes.');
	        return FALSE;
	        
	    }
	    else {
	    	
	        return TRUE;
	        
	    }
	} 
	
}