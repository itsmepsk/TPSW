<html>
	<head>
		<title>
			Details
		</title>
	</head>
	<body>
		<?php 
			//var_dump($details);
			foreach ($details as $key=>$value) {
				$f_data[$key]	=	$value;
			}
			
			//var_dump($f_data);
			
			if (isset($f_data['updated'])) {
				
				echo '<h1>Updated!</h1><br/>';
				
			}
		
		?>
		<?php 
		
			$f_id					=			array(
				'id'				=>				$f_data['id']
			);
			
			$f_roll_no 				= 			array(
				'type'				=>				'text',
				'name'				=>				'roll_no',
				'id'				=>				'roll_no',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['roll_no']
			);
			
			$f_registration_no 		= 			array(
				'type'				=>				'text',
				'name'				=>				'registration_no',
				'id'				=>				'registration_no',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['registration_no']
			);
			
			$f_name					=			array(
				'type'				=>				'text',
				'name'				=>				'name',
				'id'				=>				'name',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['name']
			);
			
			$f_branch				=			array(
				'BT'				=>				'Bio-Technology',
				'CHE'				=>				'Chemical Engineering',
				'CIV'				=>				'Civil Engineering',
				'CSE'				=>				'Computer Science and Engineering',
				'EE'				=>				'Electrical Engineering',
				'ECE'				=>				'Electronics and Communication',
				'IT'				=>				'Information Technology',
				'ME'				=>				'Mechanical Engineering',
				'MME'				=>				'Metallurgical & Materials Engineering'
			);
			$f_current_sem			=			array(
				'1'					=>				'1st',
				'2'					=>				'2nd',
				'3'					=>				'3rd',
				'4'					=>				'4th',
				'5'					=>				'5th',
				'6'					=>				'6th',
				'7'					=>				'7th',
				'8'					=>				'8th'
			);
			$f_sex					=			array(
				'male'				=>				"Male",
				'female'			=>				"Female"
			);
			$f_dob					=			array(
				'type'				=>				'text',
				'name'				=>				'dob',
				'id'				=>				'dob',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['dob']
			);
			
			$f_category				=			array(
				'gen'				=>				'General',
				'obc'				=>				'OBC',
				'sc'				=>				'SC',
				'st'				=>				'ST'
			);
			$f_email				= 			array(
				'type'				=>				'text',
				'name'				=>				'email',
				'id'				=>				'email',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['email']
			);
			$f_contact_no_1			= 			array(
				'type'				=>				'text',
				'name'				=>				'contact_no_1',
				'id'				=>				'contact_no_1',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['contact_no_1']
			);
			$f_contact_no_2			= 			array(
				'type'				=>				'text',
				'name'				=>				'contact_no_2',
				'id'				=>				'contact_no_2',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['contact_no_2']
			);
			$f_home_town			= 			array(
				'type'				=>				'text',
				'name'				=>				'home_town',
				'id'				=>				'home_town',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['home_town']
			);
			$f_home_address			= 			array(
				'type'				=>				'text',
				'name'				=>				'home_address',
				'id'				=>				'home_address',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['home_address']
			);
			$f_hostel_address		= 			array(
				'type'				=>				'text',
				'name'				=>				'hostel_address',
				'id'				=>				'hostel_address',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['hostel_address']
			);
			$f_sgpa_1				= 			array(
				'type'				=>				'text',
				'name'				=>				'sgpa_1',
				'id'				=>				'sgpa_1',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['sgpa_1']
			);
			$f_sgpa_2				= 			array(
				'type'				=>				'text',
				'name'				=>				'sgpa_2',
				'id'				=>				'sgpa_2',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['sgpa_2']
			);
			$f_sgpa_3				= 			array(
				'type'				=>				'text',
				'name'				=>				'sgpa_3',
				'id'				=>				'sgpa_3',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['sgpa_3']
			);
			$f_sgpa_4				= 			array(
				'type'				=>				'text',
				'name'				=>				'sgpa_4',
				'id'				=>				'sgpa_4',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['sgpa_4']
			);
			$f_sgpa_5				= 			array(
				'type'				=>				'text',
				'name'				=>				'sgpa_5',
				'id'				=>				'sgpa_5',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['sgpa_5']
			);
			$f_sgpa_6				= 			array(
				'type'				=>				'text',
				'name'				=>				'sgpa_6',
				'id'				=>				'sgpa_6',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['sgpa_6']
			);
			$f_sgpa_7				= 			array(
				'type'				=>				'text',
				'name'				=>				'sgpa_7',
				'id'				=>				'sgpa_7',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['sgpa_7']
			);
			$f_sgpa_8				= 			array(
				'type'				=>				'text',
				'name'				=>				'sgpa_8',
				'id'				=>				'sgpa_8',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['sgpa_8']
			);
			$f_cgpa					= 			array(
				'type'				=>				'text',
				'name'				=>				'cgpa',
				'id'				=>				'cgpa',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['cgpa']
			);
			$f_supplies				= 			array(
				'type'				=>				'text',
				'name'				=>				'supplies',
				'id'				=>				'supplies',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['supplies']
			);
			$f_active_supplies		= 			array(
				'type'				=>				'text',
				'name'				=>				'active_supplies',
				'id'				=>				'active_supplies',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['active_supplies']
			);
			$f_aieee_air				= 			array(
				'type'				=>				'text',
				'name'				=>				'aieee_air',
				'id'				=>				'aieee_air',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['aieee_air']
			);
			$f_gap_12_btech			= 			array(
				'type'				=>				'text',
				'name'				=>				'gap_12_btech',
				'id'				=>				'gap_12_btech',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['gap_12_btech']
			);
			$f_12_board				= 			array(
				'type'				=>				'text',
				'name'				=>				'12_board',
				'id'				=>				'12_board',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['12_board']
			);
			$f_12_school			= 			array(
				'type'				=>				'text',
				'name'				=>				'12_school',
				'id'				=>				'12_school',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['12_school']
			);
			$f_12_passing_year		= 			array(
				'type'				=>				'text',
				'name'				=>				'12_passing_year',
				'id'				=>				'12_passing_year',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['12_passing_year']
			);
			$f_12_obtained_marks	= 			array(
				'type'				=>				'text',
				'name'				=>				'12_obtained_marks',
				'id'				=>				'12_obtained_marks',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['12_obtained_marks']
			);
			$f_12_total_marks		= 			array(
				'type'				=>				'text',
				'name'				=>				'12_total_marks',
				'id'				=>				'12_total_marks',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['12_total_marks']
			);
			$f_12_percent			= 			array(
				'type'				=>				'text',
				'name'				=>				'12_percent',
				'id'				=>				'12_percent',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['12_percent']
			);
			$f_10_board				= 			array(
				'type'				=>				'text',
				'name'				=>				'10_board',
				'id'				=>				'10_board',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['10_board']
			);
			$f_10_school			= 			array(
				'type'				=>				'text',
				'name'				=>				'10_school',
				'id'				=>				'10_school',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['10_school']
			);
			$f_10_passing_year		= 			array(
				'type'				=>				'text',
				'name'				=>				'10_passing_year',
				'id'				=>				'10_passing_year',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['10_passing_year']
			);
			$f_10_obtained_marks	= 			array(
				'type'				=>				'text',
				'name'				=>				'10_obtained_marks',
				'id'				=>				'10_obtained_marks',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['10_obtained_marks']
			);
			$f_10_total_marks		= 			array(
				'type'				=>				'text',
				'name'				=>				'10_total_marks',
				'id'				=>				'10_total_marks',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['10_total_marks']
			);
			$f_10_percent			= 			array(
				'type'				=>				'text',
				'name'				=>				'10_percent',
				'id'				=>				'10_percent',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['10_percent']
			);
			$f_disability			= 			array(
				'y'					=>				'yes',
				'n'					=>				'no'
			);
			$f_disability_type		= 			array(
				'type'				=>				'text',
				'name'				=>				'disability_type',
				'id'				=>				'disability_type',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['disability_type']
			);
			$f_disability_percent	= 			array(
				'type'				=>				'text',
				'name'				=>				'disability_percent',
				'id'				=>				'disability_percent',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['disability_percent']
			);
			$f_father_name			= 			array(
				'type'				=>				'text',
				'name'				=>				'father_name',
				'id'				=>				'father_name',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['father_name']
			);
			$f_mother_name			= 			array(
				'type'				=>				'text',
				'name'				=>				'mother_name',
				'id'				=>				'mother_name',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['mother_name']
			);
			$f_height				= 			array(
				'type'				=>				'text',
				'name'				=>				'height',
				'id'				=>				'height',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['height']
			);
			$f_weight				= 			array(
				'type'				=>				'text',
				'name'				=>				'weight',
				'id'				=>				'weight',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['weight']
			);
			$f_power_left			= 			array(
				'type'				=>				'text',
				'name'				=>				'power_left',
				'id'				=>				'power_left',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['power_left']
			);
			$f_power_right			= 			array(
				'type'				=>				'text',
				'name'				=>				'power_right',
				'id'				=>				'power_right',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['power_right']
			);
			$f_scholastic_achievements	= 			array(
				'type'				=>				'text',
				'name'				=>				'scholastic_achievements',
				'id'				=>				'scholastic_achievements',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['scholastic_achievements']
			);
			$f_academic_projects	= 			array(
				'type'				=>				'text',
				'name'				=>				'academic_projects',
				'id'				=>				'academic_projects',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['academic_projects']
			);
			$f_practical_training	= 			array(
				'type'				=>				'text',
				'name'				=>				'practical_training',
				'id'				=>				'practical_training',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['practical_training']
			);
			$f_skills_capabilities	= 			array(
				'type'				=>				'text',
				'name'				=>				'skills_capabilities',
				'id'				=>				'skills_capabilities',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['skills_capabilities']
			);
			$f_position_responsibility	= 			array(
				'type'				=>				'text',
				'name'				=>				'position_responsibility',
				'id'				=>				'position_responsibility',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['position_responsibility']
			);
			$f_extra_curriculars	= 			array(
				'type'				=>				'text',
				'name'				=>				'extra_curriculars',
				'id'				=>				'extra_curriculars',
				'class'				=>				'',
				'required'		=>				'',
				'value'				=>				$f_data['extra_curriculars']
			);
			
			$f_submit				=			array(
				'type'				=>				'submit',
				'value'				=>				'Update',
				'name'				=>				'update',
				'class'				=>				'',
				'id'				=>				''
			);
				
		?>
		
		<?php echo validation_errors(); ?>
		<?php echo form_open(base_url().'details/submit'); ?>
		
		<?php echo form_hidden($f_id,''); ?>
		<label>Registration Number: </label>
		<?php echo form_input($f_registration_no); ?>
		<br><br>
		<label>Roll Number: </label>
		<?php echo form_input($f_roll_no); ?>
		<br><br>
		<label>Name:</label>
		<?php echo form_input($f_name); ?>
		<br><br>
		<label>Branch:</label>
		<?php echo form_dropdown("branch",$f_branch,$f_data['branch']); ?>
		<br><br>
		<label>Current Semester:</label>
		<?php echo form_dropdown("current_sem", $f_current_sem,$f_data['current_sem']); ?>
		<br><br>
		<label>Sex:</label>
		<?php echo form_dropdown("sex", $f_sex); ?>
		<br><br>
		<label>Date of Birth:</label>
		<?php echo form_input($f_dob); ?>
		<br><br>
		<label>Category:</label>
		<?php echo form_dropdown("category", $f_category); ?>
		<br><br>
		<label>Email:</label>
		<?php echo form_input($f_email); ?>
		<br><br>
		<label>Contact No. 1:</label>
		<?php echo form_input($f_contact_no_1); ?>
		<br><br>
		<label>Contact No. 2:</label>
		<?php echo form_input($f_contact_no_2); ?>
		<br><br>
		<label>Home Town:</label>
		<?php echo form_input($f_home_town); ?>
		<br><br>
		<label>Home Address:</label>
		<?php echo form_input($f_home_address); ?>
		<br><br>
		<label>Hostel Address:</label>
		<?php echo form_input($f_hostel_address); ?>
		<br><br>
		<label>1st Semester's SGPA:</label>
		<?php echo form_input($f_sgpa_1); ?>
		<br><br>
		<label>2nd Semester's SGPA:</label>
		<?php echo form_input($f_sgpa_2); ?>
		<br><br>
		<label>3rd Semester's SGPA:</label>
		<?php echo form_input($f_sgpa_3); ?>
		<br><br>
		<label>4th Semester's SGPA:</label>
		<?php echo form_input($f_sgpa_4); ?>
		<br><br>
		<label>5th Semester's SGPA:</label>
		<?php echo form_input($f_sgpa_5); ?>
		<br><br>
		<label>6th Semester's SGPA:</label>
		<?php echo form_input($f_sgpa_6); ?>
		<br><br>
		<label>7th Semester's SGPA:</label>
		<?php echo form_input($f_sgpa_7); ?>
		<br><br>
		<label>8th Semester's SGPA:</label>
		<?php echo form_input($f_sgpa_8); ?>
		<br><br>
		<label>CGPA:</label>
		<?php echo form_input($f_cgpa); ?>
		<br><br>
		<label>No. of Supplies till last Semester:</label>
		<?php echo form_input($f_supplies); ?>
		<br><br>
		<label>No. of Active Supplies:</label>
		<?php echo form_input($f_active_supplies); ?>
		<br><br>
		<label>AIEEE Rank:</label>
		<?php echo form_input($f_aieee_air); ?>
		<br><br>
		<label>Gap between 12th and B.Tech:</label>
		<?php echo form_input($f_gap_12_btech); ?>
		<br><br>
		<label>12th board name:</label>
		<?php echo form_input($f_12_board); ?>
		<br><br>
		<label>12th School Name:</label>
		<?php echo form_input($f_12_school); ?>
		<br><br>
		<label>12th Passing Year:</label>
		<?php echo form_input($f_12_passing_year); ?>
		<br><br>
		<label>Total marks obtained in 12th:</label>
		<?php echo form_input($f_12_obtained_marks); ?>
		<br><br>
		<label>Max marks in 12th:</label>
		<?php echo form_input($f_12_total_marks); ?>
		<br><br>
		<label>12th percentage:</label>
		<?php echo form_input($f_12_percent); ?>
		<br><br>
		<label>10th board name:</label>
		<?php echo form_input($f_10_board); ?>
		<br><br>
		<label>10th School Name:</label>
		<?php echo form_input($f_10_school); ?>
		<br><br>
		<label>10th Passing Year:</label>
		<?php echo form_input($f_10_passing_year); ?>
		<br><br>
		<label>Total marks obtained in 10th:</label>
		<?php echo form_input($f_10_obtained_marks); ?>
		<br><br>
		<label>Max marks in 10th:</label>
		<?php echo form_input($f_10_total_marks); ?>
		<br><br>
		<label>10th percentage:</label>
		<?php echo form_input($f_10_percent); ?>
		<br><br>
		<label>disability:</label>
		<?php echo form_dropdown("disability", $f_disability, "n"); ?>
		<br><br>
		<label>Disability Percent:</label>
		<?php echo form_input($f_disability_percent); ?>
		<br><br>
		<label>Disability Type:</label>
		<?php echo form_input($f_disability_type); ?>
		<br><br>
		<label>Father's Name:</label>
		<?php echo form_input($f_father_name); ?>
		<br><br>
		<label>Mother's Name:</label>
		<?php echo form_input($f_mother_name); ?>
		<br><br>
		<label>Height:</label>
		<?php echo form_input($f_height); ?>
		<br><br>
		<label>Weight:</label>
		<?php echo form_input($f_weight); ?>
		<br><br>
		<label>Power(Left eye):</label>
		<?php echo form_input($f_power_left); ?>
		<br><br>
		<label>Power(Right eye):</label>
		<?php echo form_input($f_power_right); ?>
		<br><br>
		<label>Scholastic Achievements:</label>
		<?php echo form_textarea($f_scholastic_achievements); ?>
		<br><br>
		<label>Academic Projects:</label>
		<?php echo form_textarea($f_academic_projects); ?>
		<br><br>
		<label>Practical Training:</label>
		<?php echo form_textarea($f_practical_training); ?>
		<br><br>
		<label>Skills and Capabilities:</label>
		<?php echo form_textarea($f_skills_capabilities); ?>
		<br><br>
		<label>Position of Responsibility:</label>
		<?php echo form_textarea($f_position_responsibility); ?>
		<br><br>
		<label>Extra Curriculars:</label>
		<?php echo form_textarea($f_extra_curriculars); ?>
		<br><br>
		<?php echo form_submit($f_submit,'Update'); ?>
		<?php echo form_close(); ?>
	</body>
</html>