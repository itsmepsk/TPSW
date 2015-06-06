<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		
		$this->load_libraries();
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
	
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
	public function index() {		
		
                $field_list = $this->functions->fetch_fields(); 
                $x= $this->session->userdata('user');
                $id = $x['id'];
                $data['details'] = $this->get_data($id);
                $param = sha1(md5("updated"));
                $value = md5(sha1("updated"));
                
                $array = array(sha1(md5("success_basic")) => md5(sha1("success_basic")),sha1(md5("success_contact")) => md5(sha1("success_contact")),sha1(md5("success_academic")) => md5(sha1("success_academic")),sha1(md5("success_past"))=> md5(sha1("success_past")),sha1(md5("success_personal"))=> md5(sha1("success_personal")),sha1(md5("success_other"))=> md5(sha1("success_other")),sha1(md5("deleted_photo")) => md5(sha1("deleted_photo")));
                $updated = array();
                session_start();
                
                foreach($array as $key=>$value) {
                    if (isset($_SESSION[$key])) {
                        $updated[$key] = $value;
                        $temp = $key;
                    }
                }
                
                session_destroy();
                $data['updated'] = array();
                $data['updated'] = $updated;
                $this->load->view('details',$data);
        
	}
	
	public function submit() {
		//var_dump($_POST);
		$x= $this->session->userdata('user');
                $id = $x['id'];
		//$details = $_POST;
		if (isset($_POST['update_basic'])) {
			 
			$details = $_POST;
			unset($details['update_basic']);
			$validate = $this->validate_basic_fields($details);
			
			if ($validate == TRUE) {
				$status = $this->functions->update_details($id,$details);
				$param = sha1(md5("success_basic"));
				
				session_start();
				$_SESSION[$param] = md5(sha1("success_basic"));
				//$updated = TRUE;
				//echo $_SESSION[$param];
				redirect(base_url());
			}
		}
		else
		if (isset($_POST['update_contact'])) {
			
			$details = $_POST;
			unset($details['update_contact']);
			$validate = $this->validate_contact_fields($details);
			
			if ($validate == TRUE) {
				$status = $this->functions->update_details($id,$details);
				$param = sha1(md5("success_contact"));
			
				session_start();
				$_SESSION[$param] = md5(sha1("success_contact"));
				//$updated = TRUE;
				//echo $_SESSION[$param];
				redirect(base_url());
			}
			
		}
                else
		if (isset($_POST['update_academic'])) {

			$details = $_POST;
			//var_dump($details);
			unset($details['update_academic']);
			$validate = $this->validate_academic_fields($details);
				
			if ($validate == TRUE) {
				$status = $this->functions->update_details($id,$details);
				$param = sha1(md5("success_academic"));
					
				session_start();
				$_SESSION[$param] = md5(sha1("success_academic"));
				//$updated = TRUE;
				//echo $_SESSION[$param];
				redirect(base_url());
			}
				
		}
                else
		if (isset($_POST['update_past'])) {

			$details = $_POST;
			unset($details['update_past']);
			$validate = $this->validate_past_fields($details);
				
			if ($validate == TRUE) {
				$status = $this->functions->update_details($id,$details);
				$param = sha1(md5("success_past"));
					
				session_start();
				$_SESSION[$param] = md5(sha1("success_past"));
				//$updated = TRUE;
				//echo $_SESSION[$param];
				redirect(base_url());
			}
				
		}
                else
		if (isset($_POST['update_personal'])) {

			$details = $_POST;
			unset($details['update_personal']);
			$validate = $this->validate_personal_fields($details);
				
			if ($validate == TRUE) {
				$status = $this->functions->update_details($id,$details);
				$param = sha1(md5("success_personal"));
					
				session_start();
				$_SESSION[$param] = md5(sha1("success_personal"));
				//$updated = TRUE;
				//echo $_SESSION[$param];
				redirect(base_url());
			}
				
		}
                else
		if (isset($_POST['update_other'])) {
				
			$details = $this->input->post();
			var_dump($details);
			unset($details['update_other']);
			$validate = $this->validate_other_fields($details);
				
			if ($validate == TRUE) {
				$status = $this->functions->update_details($id,$details);
				$param = sha1(md5("success_other"));
					
				session_start();
				$_SESSION[$param] = md5(sha1("success_other"));
				//$updated = TRUE;
				//echo $_SESSION[$param];
				redirect(base_url());
			}
				
		}
        else
		if (isset($_POST['update_image'])) {
			
			$details = $this->input->post();
			//var_dump($_FILES);
			unset($details['update_image']);
			
			if ( !$_FILES['display_image']['error'] ) {
				
				if ( $_FILES['display_image']['name'] != '') {
					
					$name = (md5(sha1($id))).".jpg";
					//echo $name;
					$st = copy( $_FILES['display_image']['tmp_name'],"static/images/profiles/".$name );
					if (!$st) {
						echo "Error!";
					}
					$this->functions->update_photo($id,$name);
					$param = sha1(md5("success_image"));
					
					session_start();
					$_SESSION[$param] = md5(sha1("success_image"));
					//$updated = TRUE;
					//echo $_SESSION[$param];
					redirect(base_url());
					
				}
				else {
					
					die("No file specified!");
					
				}
				
			}
			
		}
		else {
			//redirect(base_url());
		}
	}
	
        public function delete() {
            
            $id= $this->session->userdata('user');
            $id = $id['id'];
            $result = $this->functions->delete_image($id);
            session_start();
            $param = sha1(md5("deleted_photo"));
            $_SESSION[$param] = md5(sha1("deleted_photo"));
            if ($result != NULL)
                redirect(base_url());
            
        }
        
	public function get_data($id) {
		
		$details = $this->functions->get_data($id);
		//$display_image = file_get_contents(base_url()."static/images/".md5($id));
		//array_merge($details,$display_image);
		return $details;
		
	}
	
	//---------->Load Libraries from here
	
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
	
	//---------->Load Libraries till here
	
	public function _alpha_space($str_in = '') {
		
	    if (! preg_match("/^([a-z0-9 ])+$/i", $str_in)) {
	    	
	        $this->form_validation->set_message('_alpha_dash_space', 'The %s field may only contain alpha-numeric characters, spaces, underscores, and dashes.');
	        return FALSE;
	        
	    }
	    else {
	    	
	        return TRUE;
	        
	    }
	} 
    
	
	public function validate_basic_fields($details) {
		
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
				)
		);
		
		$data['details'] = $this->get_data(1);
                //var_dump($data);
		$this->form_validation->set_rules($config);
		//$this->form_validation->set_message('integer', '%s Should be an integer');
		if($this->form_validation->run() == FALSE) {
				
			$updated = array();
                        $updated[sha1(md5("error_basic"))] = md5(sha1("error_basic"));
                        $updated["error_basic"] = 1;
                        //$data[sha1(md5("success_basic"))] = md5(sha1("success_basic"));
			//$data['details'] = $details;
                        $data['updated'] = $updated;
			$this->load->view('details',$data);
				
		}
		else {
		
			return TRUE;
		
		}
		
	}
	
	public function validate_contact_fields($details) {
		$config = array(
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
				)
		);
		
		$data['details'] = $this->get_data(1);
                //var_dump($data);
		$this->form_validation->set_rules($config);
                //echo "HIE";
		//$this->form_validation->set_message('integer', '%s Should be an integer');
		if($this->form_validation->run() == FALSE) {
                       // echo "hi<br>";
			$updated = array();
                        $updated[sha1(md5("error_contact"))] = md5(sha1("error_contact"));
                        $updated["error_contact"] = 1;
                        $data['updated'] = $updated;
			$this->load->view('details',$data);
		
		}
		else {
		
			return TRUE;
		
		}
		
	}
	
	public function validate_academic_fields($details) {
		
		$config = array(
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
				)
		);
		
		$data['details'] = $this->get_data(1);
		$this->form_validation->set_rules($config);
		//$this->form_validation->set_message('integer', '%s Should be an integer');
		if($this->form_validation->run() == FALSE) {
		
			$updated = array();
                        $updated[sha1(md5("error_academic"))] = md5(sha1("error_academic"));
                        $updated["error_academic"] = 1;
                        $data['updated'] = $updated;
			$this->load->view('details',$data);
		
		}
		else {
		
			return TRUE;
		
		}
		
	}
	
	public function validate_past_fields($details) {
		
		$config = array(
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
				)
		);
		
		$data['details'] = $this->get_data(1);
		$this->form_validation->set_rules($config);
		//$this->form_validation->set_message('integer', '%s Should be an integer');
		if($this->form_validation->run() == FALSE) {
		
			$updated = array();
                        $updated[sha1(md5("error_past"))] = md5(sha1("error_past"));
                        $updated["error_past"] = 1;
                        $data['updated'] = $updated;
			$this->load->view('details',$data);
		
		}
		else {
		
			return TRUE;
		
		}
		
	}
	
	public function validate_personal_fields($details) {
		
		$config = array(
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
				)
		);
		
		$data['details'] = $this->get_data(1);
		$this->form_validation->set_rules($config);
		//$this->form_validation->set_message('integer', '%s Should be an integer');
		if($this->form_validation->run() == FALSE) {
		
			$updated = array();
                        $updated[sha1(md5("error_personal"))] = md5(sha1("error_personal"));
                        $updated["error_personal"] = 1;
                        $data['updated'] = $updated;
			$this->load->view('details',$data);
		
		}
		else {
		
			return TRUE;
		
		}
		
	}
	
	public function validate_other_fields($details) {
		
		$config = array(
				array(
						'field'		=>		'scholastic_achievements',
						'label'		=>		'Scholastic Achievements',
						'rules'		=>		'trim|xss_clean|callback_texttostore'
				),
				array(
						'field'		=>		'academic_projects',
						'label'		=>		'Academic Projects',
						'rules'		=>		'trim|xss_clean|callback_texttostore'
				),
				array(
						'field'		=>		'practical_training',
						'label'		=>		'Practical Training',
						'rules'		=>		'trim|xss_clean|callback_texttostore'
				),
				array(
						'field'		=>		'skills_capabilities',
						'label'		=>		'Skills and Capabilities',
						'rules'		=>		'trim|xss_clean|callback_texttostore'
				),
				array(
						'field'		=>		'position_responsibility',
						'label'		=>		'Position of Responsibility',
						'rules'		=>		'trim|xss_clean|callback_texttostore'
				),
				array(
						'field'		=>		'extra_curriculars',
						'label'		=>		'Extra Curriculars',
						'rules'		=>		'trim|xss_clean|callback_texttostore'
				)
		);
		
		$data['details'] = $this->get_data(1);
		$this->form_validation->set_rules($config);
		//$this->form_validation->set_message('integer', '%s Should be an integer');
		if($this->form_validation->run() == FALSE) {
		
                        $updated = array();
                        $updated[sha1(md5("error_other"))] = md5(sha1("error_other"));
                        $updated["error_other"] = 1;
                        $data['updated'] = $updated;
			$this->load->view('details',$data);
		
		}
		else {
		
			return TRUE;
		
		}
		
	}
	
	public function texttostore($data) {
		
		return nl2br(htmlentities($data, ENT_QUOTES, 'UTF-8'));
		
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
                else {
                    
                    return TRUE;
                    
                }
		
	}
	
}