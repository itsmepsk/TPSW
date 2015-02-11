<html>
    <head>
        <title>
            Login
        </title>
    </head>
    <body>
                
        <?php
        
            $f_username = array(               
                'type'              =>          'text',
                'name'              =>          'username',
                'placeholder'       =>          'Username',
                'value'             =>          '',
                'class'             =>          '',
                'id'                =>          '',
                'required'          =>          ''               
            );
                    
            $f_password = array(
                'type'              =>          'password',
                'name'              =>          'password',
                'placeholder'       =>          'password',
                'class'             =>          '',
                'id'                =>          '',
                'required'          =>          ''
            );
            
            $f_submit = array(
                'type'              =>          'submit',
                'value'             =>          'login',
                'name'              =>          'login'
            );
            
        ?>
        
        <?php echo form_open(base_url().'login/validate'); ?>
        <label>Username:</label>       
        <?php echo form_input($f_username); ?>
        <?php echo form_error('username'); ?>
        <br><br>
        <label>Password:</label>
        <?php echo form_password($f_password); ?>
        <?php echo form_error('password'); ?>
        <?php echo form_submit($f_submit,'Login'); ?>
        
    </body>
</html>