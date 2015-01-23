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
				'name'				=>				'registration_no',
				'id'				=>				'registration_no',
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
				''
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
		?>
	
		<?php echo form_open(base_url().'details/submit'); ?>
		<label>Registration Number: </label>
		<?php echo form_input($f_registration_no); ?>
		<br>
		<label>Roll Number: </label>
		<?php echo form_input($f_roll_no); ?>
		<br>
		<label>Name:</label>
		<?php echo form_input($f_name); ?>
		<br>
		<label>Branch:</label>
		<?php echo form_dropdown("branch",$f_branch); ?>
		<?php echo form_close(); ?>
	</body>
</html>