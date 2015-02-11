<html>
    <head>
        <title>
            Reset Password
        </title>
    </head>
    <body>
        <?php
        
            $f_new_password = array(
                'type'              =>              'password',
                'name'              =>              'new_password',
                'required'          =>              '',
                'placeholder'       =>              'Enter New Password',
                'class'             =>              '',
                'id'                =>              ''
            );
            
            $f_confirm_password = array(
                'type'              =>              'password',
                'name'              =>              'confirm_password',
                'required'          =>              '',
                'placeholder'       =>              'Confirm New Password',
                'class'             =>              '',
                'id'                =>              ''
            );
                    
            $f_submit = array(
                'type'              =>              'submit',
                'name'              =>              'reset_password',
                'value'             =>              'Reset Password',
                'class'             =>              '',
                'id'                =>              ''
            )
        ?>
        
        <?php echo form_open(base_url()."reset/reset"); ?>
        
        <label>Enter New Password:</label>
        <?php echo form_password($f_new_password); ?>
        <?php echo form_error('new_password'); ?>
        <br><br>
        <label>Confirm New Password:</label>
        <?php echo form_password($f_confirm_password); ?>
        <?php echo form_error('confirm_password'); ?>
        <br><br>
        <?php echo form_submit($f_submit,'Reset Password'); ?>
    </body>
</html>