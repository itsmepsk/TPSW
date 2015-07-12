<html>
	<head>
		<title>
			Export 
		</title>
	</head>
	<body>
		<h1>
			Export database
		</h1>

        <?php
            $f_branch = array(
                '0'        =>          'SELECT',
                'bt'            =>          'BT',
                'ch'            =>          'CHE',
                'ce'            =>          'CE',
                'cse'           =>          'CSE',
                'ece'           =>          'ECE',
                'ee'            =>          'EE',
                'it'            =>          'IT',
                'me'            =>          'ME',
                'mme'           =>          'MME'
            );

            $f_cgpa = array(
                'type'          =>          'text',
                'name'          =>          'cgpa',
                'value'         =>          '',
                'class'         =>          '',
                'placeholder'   =>          'CGPA Greater or equal to'
            );

            $f_active_supplies = array(
                'type'          =>          'checkbox',
                'name'          =>          'active_supplies',
                'value'         =>          'no',
                'class'         =>          '',
                'placeholder'   =>          'Allow active supplies'
            );

            $f_12_percent = array(
                'type'          =>          'text',
                'name'          =>          '12_percent',
                'value'         =>          '',
                'class'         =>          '',
                'placeholder'   =>          'Minimum 12th Percentage'
            );

            $f_10_percent = array(
                'type'          =>          'text',
                'name'          =>          '10_percent',
                'value'         =>          '',
                'class'         =>          '',
                'placeholder'   =>          'Minimum 10th Percentage'
            );

            $f_submit = array(
                'type'          =>          'submit',
                'name'          =>          'export_submit',
                'value'         =>          'Submit'
            );

        ?>

        <?php

             echo form_open(base_url()."export/submit");

        ?>

        <?php echo form_dropdown('branch',$f_branch); ?>
        <br><br>
        <?php echo form_input($f_cgpa); ?>
        <br><br>
        <?php echo form_checkbox($f_active_supplies); ?>
        <br><br>
        <?php echo form_input($f_12_percent); ?>
        <br><br>
        <?php echo form_input($f_10_percent); ?>
        <br><br>

        <?php echo form_submit($f_submit); ?>

        <?php

            echo form_close();

        ?>

	</body>
</html>