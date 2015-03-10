<?php

    $f_data = array();

    foreach ( $details as $key => $value ) {
            $f_data [$key] = $value;
    }
    $variables['f_data'] = $f_data;


    $variables['f_pic'] = array (
                    'type' => 'file',
                    'name' => 'display_image',
                    'id' => 'lefile',
                    'required' => '',
                    'style'	=>	'display:none'
    );
    $variables['f_submit'] = array (
                    'type' => 'submit',
                    'name' => 'lesubmit',
                    'id' => 'lesubmit',
                    'required' => '',
                    'style'	=>	'display:none'
    );
    $variables['f_roll_no'] = array (
                    'type' => 'text',
                    'name' => 'roll_no',
                    'id' => 'roll_no',
                    'class' => '',
                    'required' => '',
                    'value' => $f_data ['roll_no'] 
    );

    $variables['f_name'] = array (
                    'type' => 'text',
                    'name' => 'name',
                    'id' => 'name',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data['name'] 
    );

    $variables['f_branch'] = array (
                    'type' => 'text',
                    'name' => 'branch',
                    'id' => 'branch',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['branch'] 
    );
    $variables['f_registration_no'] = array (
                    'type' => 'text',
                    'name' => 'registration_no',
                    'id' => 'registration_no',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['registration_no']
    );

    $variables['f_current_sem'] = array (
                    '0' => '--Select--',
                    '1' => '1st',
                    '2' => '2nd',
                    '3' => '3rd',
                    '4' => '4th',
                    '5' => '5th',
                    '6' => '6th',
                    '7' => '7th',
                    '8' => '8th'
    );

    $variables['f_sex'] = array (
                    '0' => '--Select--',
                    'male' => "Male",
                    'female' => "Female"
    );

    $variables['f_dob'] = array (
                    'type' => 'text',
                    'name' => 'dob',
                    'id' => 'dob',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['dob'] 
    );

    $variables['f_category'] = array (
                    '0' => '--Select--',
                    'gen' => 'General',
                    'obc' => 'OBC',
                    'sc' => 'SC',
                    'st' => 'ST'
    );

    $variables['f_email'] = array (
                    'type' => 'text',
                    'name' => 'email',
                    'id' => 'email',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['email'] 
    );

    $variables['f_contact_no_1'] = array (
                    'type' => 'text',
                    'name' => 'contact_no_1',
                    'id' => 'contact_no_1',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['contact_no_1'] 
    );

    $variables['f_contact_no_2'] = array (
                    'type' => 'text',
                    'name' => 'contact_no_2',
                    'id' => 'contact_no_2',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['contact_no_2'] 
    );

    $variables['f_home_town'] = array (
                    'type' => 'text',
                    'name' => 'home_town',
                    'id' => 'home_town',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['home_town']
    );

    $variables['f_home_address'] = array (
                    'type' => 'text',
                    'name' => 'home_address',
                    'id' => 'home_address',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['home_address'],
                    'rows'	=>	'3'
    );

    $variables['f_hostel_address'] = array (
                    'type' => 'text',
                    'name' => 'hostel_address',
                    'id' => 'hostel_address',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['hostel_address'],
                    'rows'	=>	'3' 
    );

    $variables['f_sgpa_1'] = array (
                    'type' => 'text',
                    'name' => 'sgpa_1',
                    'id' => 'sgpa_1',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['sgpa_1'] 
    );

    $variables['f_sgpa_2'] = array (
                    'type' => 'text',
                    'name' => 'sgpa_2',
                    'id' => 'sgpa_2',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['sgpa_2'] 
    );

    $variables['f_sgpa_3'] = array (
                    'type' => 'text',
                    'name' => 'sgpa_3',
                    'id' => 'sgpa_3',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['sgpa_3'] 
    );

    $variables['f_sgpa_4'] = array (
                    'type' => 'text',
                    'name' => 'sgpa_4',
                    'id' => 'sgpa_4',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['sgpa_4'] 
    );

    $variables['f_sgpa_5'] = array (
                    'type' => 'text',
                    'name' => 'sgpa_5',
                    'id' => 'sgpa_5',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['sgpa_5'] 
    );

    $variables['f_sgpa_6'] = array (
                    'type' => 'text',
                    'name' => 'sgpa_6',
                    'id' => 'sgpa_6',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['sgpa_6'] 
    );

    $variables['f_sgpa_7'] = array (
                    'type' => 'text',
                    'name' => 'sgpa_7',
                    'id' => 'sgpa_7',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['sgpa_7'] 
    );

    $variables['f_sgpa_8'] = array (
                    'type' => 'text',
                    'name' => 'sgpa_8',
                    'id' => 'sgpa_8',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['sgpa_8'] 
    );

    $variables['f_cgpa'] = array (
                    'type' => 'text',
                    'name' => 'cgpa',
                    'id' => 'cgpa',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['cgpa'] 
    );

    $variables['f_supplies'] = array (
                    'type' => 'text',
                    'name' => 'supplies',
                    'id' => 'supplies',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['supplies'] 
    );

    $variables['f_active_supplies'] = array (
                    'type' => 'text',
                    'name' => 'active_supplies',
                    'id' => 'active_supplies',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['active_supplies'] 
    );

    $variables['f_aieee_air'] = array (
                    'type' => 'text',
                    'name' => 'aieee_air',
                    'id' => 'aieee_air',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['aieee_air'] 
    );

    $variables['f_gap_12_btech'] = array (
                    'type' => 'text',
                    'name' => 'gap_12_btech',
                    'id' => 'gap_12_btech',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['gap_12_btech'] 
    );

    $variables['f_12_board'] = array (
                    'type' => 'text',
                    'name' => '12_board',
                    'id' => '12_board',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['12_board'] 
    );

    $variables['f_12_school'] = array (
                    'type' => 'text',
                    'name' => '12_school',
                    'id' => '12_school',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['12_school'] 
    );

    $variables['f_12_passing_year'] = array (
                    'type' => 'text',
                    'name' => '12_passing_year',
                    'id' => '12_passing_year',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['12_passing_year'] 
    );

    $variables['f_12_obtained_marks'] = array (
                    'type' => 'text',
                    'name' => '12_obtained_marks',
                    'id' => '12_obtained_marks',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['12_obtained_marks'] 
    );

    $variables['f_12_total_marks'] = array (
                    'type' => 'text',
                    'name' => '12_total_marks',
                    'id' => '12_total_marks',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['12_total_marks'] 
    );

    $variables['f_12_percent'] = array (
                    'type' => 'text',
                    'name' => '12_percent',
                    'id' => '12_percent',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['12_percent'] 
    );

    $variables['f_10_board'] = array (
                    'type' => 'text',
                    'name' => '10_board',
                    'id' => '10_board',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['10_board'] 
    );

    $variables['f_10_school'] = array (
                    'type' => 'text',
                    'name' => '10_school',
                    'id' => '10_school',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['10_school'] 
    );

    $variables['f_10_passing_year'] = array (
                    'type' => 'text',
                    'name' => '10_passing_year',
                    'id' => '10_passing_year',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['10_passing_year'] 
    );

    $variables['f_10_obtained_marks'] = array (
                    'type' => 'text',
                    'name' => '10_obtained_marks',
                    'id' => '10_obtained_marks',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['10_obtained_marks'] 
    );

    $variables['f_10_total_marks'] = array (
                    'type' => 'text',
                    'name' => '10_total_marks',
                    'id' => '10_total_marks',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['10_total_marks'] 
    );

    $variables['f_10_percent'] = array (
                    'type' => 'text',
                    'name' => '10_percent',
                    'id' => '10_percent',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['10_percent'] 
    );

    $variables['f_father_name'] = array (
                    'type' => 'text',
                    'name' => 'father_name',
                    'id' => 'father_name',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['father_name'] 
    );

    $variables['f_mother_name'] = array (
                    'type' => 'text',
                    'name' => 'mother_name',
                    'id' => 'mother_name',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['mother_name'] 
    );

    $variables['f_height'] = array (
                    'type' => 'text',
                    'name' => 'height',
                    'id' => 'height',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['height'] 
    );

    $variables['f_weight'] = array (
                    'type' => 'text',
                    'name' => 'weight',
                    'id' => 'weight',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['weight'] 
    );

    $variables['f_power_left'] = array (
                    'type' => 'text',
                    'name' => 'power_left',
                    'id' => 'power_left',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['power_left'] 
    );

    $variables['f_power_right'] = array (
                    'type' => 'text',
                    'name' => 'power_right',
                    'id' => 'power_right',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['power_right'] 
    );

    $variables['f_disability'] = array (
                    '0' => '--Select--',
                    'yes' => 'Yes',
                    'no' => 'No' 
    );

    $variables['f_disability_type'] = array (
                    'type' => 'text',
                    'name' => 'disability_type',
                    'id' => 'disability_type',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['disability_type'] 
    );

    $variables['f_disability_percent'] = array (
                    'type' => 'text',
                    'name' => 'disability_percent',
                    'id' => 'disability_percent',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => $f_data ['disability_percent'] 
    );

    $variables['f_scholastic_achievements'] = array (
                    'type' => 'text',
                    'name' => 'scholastic_achievements',
                    'id' => 'scholastic_achievements',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => ($f_data ['scholastic_achievements']),
                    'rows'	=>	'3' 
    );

    $variables['f_academic_projects'] = array (
                    'type' => 'text',
                    'name' => 'academic_projects',
                    'id' => 'academic_projects',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => nl2br($f_data ['academic_projects']),
                    'rows'	=>	'3' 
    );

    $variables['f_practical_training'] = array (
                    'type' => 'text',
                    'name' => 'practical_training',
                    'id' => 'practical_training',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => nl2br($f_data ['practical_training']),
                    'rows'	=>	'3' 
    );

    $variables['f_skills_capabilities'] = array (
                    'type' => 'text',
                    'name' => 'skills_capabilities',
                    'id' => 'skills_capabilities',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => nl2br($f_data ['skills_capabilities']),
                    'rows'	=>	'3' 
    );

    $variables['f_position_responsibility'] = array (
                    'type' => 'text',
                    'name' => 'position_responsibility',
                    'id' => 'position_responsibility',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => nl2br($f_data ['position_responsibility']),
                    'rows'	=>	'3' 
    );

    $variables['f_extra_curriculars'] = array (
                    'type' => 'text',
                    'name' => 'extra_curriculars',
                    'id' => 'extra_curriculars',
                    'class' => 'form-control',
                    'required' => '',
                    'value' => nl2br($f_data ['extra_curriculars']),
                    'rows'	=>	'3' 
    );

    $variables['class'] = array(
                    'class' => 'form-horizontal',
                    'role'	=>	'form'
    );
    
    $this->load->view('profile1',$variables);
    
?>