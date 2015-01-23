<html>
	<head>
		<title>
			Details
		</title>
	</head>
	<body>
	
		<?php 
			$f_roll_no 				= 			array(
				'type'				=>				'text',
				'name'				=>				'roll_no',
				'id'				=>				'roll_no',
				'class'				=>				'',
				'aria-requires'		=>				'required',
				'value'				=>				''
			);
			
			$f_registration_no 		= 			array(
				'type'				=>				'text',
				'name'				=>				'registration_no',
				'id'				=>				'registration_no',
				'class'				=>				'',
				'aria-requires'		=>				'required',
				'value'				=>				''
			);
			
			$f_name					=			array(
				'type'				=>				'text',
				'name'				=>				'name',
				'id'				=>				'name',
				'class'				=>				'',
				'aria-requires'		=>				'required',
				'value'				=>				''
			);
			
			$f_branch				=			array(
				'bt'				=>				'Bio-Technology',
				'che'				=>				'Chemical Engineering',
				'civ'				=>				'Civil Engineering',
				'cse'				=>				'Computer Science and Engineering',
				'ee'				=>				'Electrical Engineering',
				'ece'				=>				'Electronics and Communication',
				'it'				=>				'Information Technology',
				'me'				=>				'Mechanical Engineering',
				'mme'				=>				'Metallurgical & Materials Engineering'
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
				'aria-requires'		=>				'required',
				'value'				=>				''
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
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_contact_no_1				= 			array(
					'type'				=>				'text',
					'name'				=>				'contact_no_1',
					'id'				=>				'contact_no_1',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_contact_no_2				= 			array(
					'type'				=>				'text',
					'name'				=>				'contact_no_2',
					'id'				=>				'contact_no_2',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_home_town				= 			array(
					'type'				=>				'text',
					'name'				=>				'home_town',
					'id'				=>				'home_town',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_home_address				= 			array(
					'type'				=>				'text',
					'name'				=>				'home_address',
					'id'				=>				'home_address',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_hostel_address				= 			array(
					'type'				=>				'text',
					'name'				=>				'hostel_address',
					'id'				=>				'hostel_address',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_sgpa_1				= 			array(
					'type'				=>				'text',
					'name'				=>				'sgpa_1',
					'id'				=>				'sgpa_1',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_sgpa_2				= 			array(
					'type'				=>				'text',
					'name'				=>				'sgpa_2',
					'id'				=>				'sgpa_2',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_sgpa_3				= 			array(
					'type'				=>				'text',
					'name'				=>				'sgpa_3',
					'id'				=>				'sgpa_3',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_sgpa_4				= 			array(
					'type'				=>				'text',
					'name'				=>				'sgpa_4',
					'id'				=>				'sgpa_4',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_sgpa_5				= 			array(
					'type'				=>				'text',
					'name'				=>				'sgpa_5',
					'id'				=>				'sgpa_5',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_sgpa_6				= 			array(
					'type'				=>				'text',
					'name'				=>				'sgpa_6',
					'id'				=>				'sgpa_6',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_sgpa_7				= 			array(
					'type'				=>				'text',
					'name'				=>				'sgpa_7',
					'id'				=>				'sgpa_7',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_sgpa_8				= 			array(
					'type'				=>				'text',
					'name'				=>				'sgpa_8',
					'id'				=>				'sgpa_8',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_cgpa				= 			array(
					'type'				=>				'text',
					'name'				=>				'cgpa',
					'id'				=>				'cgpa',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_supplies				= 			array(
					'type'				=>				'text',
					'name'				=>				'supplies',
					'id'				=>				'supplies',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_active_supplies				= 			array(
					'type'				=>				'text',
					'name'				=>				'active_supplies',
					'id'				=>				'active_supplies',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_aieee_air				= 			array(
					'type'				=>				'text',
					'name'				=>				'aieee_air',
					'id'				=>				'aieee_air',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_gap_12_btech				= 			array(
					'type'				=>				'text',
					'name'				=>				'gap_12_btech',
					'id'				=>				'gap_12_btech',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_12_board				= 			array(
					'type'				=>				'text',
					'name'				=>				'12_board',
					'id'				=>				'12_board',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_12_school				= 			array(
					'type'				=>				'text',
					'name'				=>				'12_school',
					'id'				=>				'12_school',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_12_passing_year				= 			array(
					'type'				=>				'text',
					'name'				=>				'12_passing_year',
					'id'				=>				'12_passing_year',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_12_obtained_marks				= 			array(
					'type'				=>				'text',
					'name'				=>				'12_obtained_marks',
					'id'				=>				'12_obtained_marks',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_12_total_marks				= 			array(
					'type'				=>				'text',
					'name'				=>				'12_total_marks',
					'id'				=>				'12_total_marks',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_12_percent				= 			array(
					'type'				=>				'text',
					'name'				=>				'12_percent',
					'id'				=>				'12_percent',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_10_board				= 			array(
					'type'				=>				'text',
					'name'				=>				'10_board',
					'id'				=>				'10_board',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_10_school				= 			array(
					'type'				=>				'text',
					'name'				=>				'10_school',
					'id'				=>				'10_school',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_10_passing_year				= 			array(
					'type'				=>				'text',
					'name'				=>				'10_passing_year',
					'id'				=>				'10_passing_year',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_10_obtained_marks				= 			array(
					'type'				=>				'text',
					'name'				=>				'10_obtained_marks',
					'id'				=>				'10_obtained_marks',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_10_total_marks				= 			array(
					'type'				=>				'text',
					'name'				=>				'10_total_marks',
					'id'				=>				'10_total_marks',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_10_percent				= 			array(
					'type'				=>				'text',
					'name'				=>				'10_percent',
					'id'				=>				'10_percent',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_disability				= 			array(
					'y'					=>				'yes',
					'n'					=>				'no'
			);
			$f_disability_type				= 			array(
					'type'				=>				'text',
					'name'				=>				'disability_type',
					'id'				=>				'disability_type',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_disability_percent				= 			array(
					'type'				=>				'text',
					'name'				=>				'disability_percent',
					'id'				=>				'disability_percent',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_father_name				= 			array(
					'type'				=>				'text',
					'name'				=>				'father_name',
					'id'				=>				'father_name',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_mother_name				= 			array(
					'type'				=>				'text',
					'name'				=>				'mother_name',
					'id'				=>				'mother_name',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_height				= 			array(
					'type'				=>				'text',
					'name'				=>				'height',
					'id'				=>				'height',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_weight				= 			array(
					'type'				=>				'text',
					'name'				=>				'weight',
					'id'				=>				'weight',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_power_left				= 			array(
					'type'				=>				'text',
					'name'				=>				'power_left',
					'id'				=>				'power_left',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_power_right				= 			array(
					'type'				=>				'text',
					'name'				=>				'power_right',
					'id'				=>				'power_right',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_scholastic_achievements				= 			array(
					'type'				=>				'text',
					'name'				=>				'scholastic_achievements',
					'id'				=>				'scholastic_achievements',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_academic_projects				= 			array(
					'type'				=>				'text',
					'name'				=>				'academic_projects',
					'id'				=>				'academic_projects',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_practical_training				= 			array(
					'type'				=>				'text',
					'name'				=>				'practical_training',
					'id'				=>				'practical_training',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_skills_capabilities				= 			array(
					'type'				=>				'text',
					'name'				=>				'skills_capabilities',
					'id'				=>				'skills_capabilities',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_position_responsibility				= 			array(
					'type'				=>				'text',
					'name'				=>				'position_responsibility',
					'id'				=>				'position_responsibility',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
			$f_extra_curriculars				= 			array(
					'type'				=>				'text',
					'name'				=>				'extra_curriculars',
					'id'				=>				'extra_curriculars',
					'class'				=>				'',
					'aria-requires'		=>				'required',
					'value'				=>				''
			);
				
		?>
	
		<?php echo form_open(base_url().'details/submit'); ?>
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
		<?php echo form_dropdown("branch",$f_branch); ?>
		<br><br>
		<label>Current Semester:</label>
		<?php echo form_dropdown("current_sem", $f_current_sem); ?>
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
		<?php echo form_close(); ?>
	</body>
</html>