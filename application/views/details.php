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