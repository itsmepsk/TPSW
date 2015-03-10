<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="<?php echo base_url(); ?>static/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
        <link href="<?php echo base_url(); ?>static/css/bootstrap.css" rel = "stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>static/css/custom.css" rel = "stylesheet" type="text/css">
        <script src="<?php echo base_url(); ?>static/js/respond.js"></script>
        <script src="<?php echo base_url(); ?>static/js/custom.js"></script>
        <title>Sign In</title>
        <script>
            var valid=[false, false];
            $(document).ready(function(){
                    $('#roll_no').on('blur', function() {
                            roll=this.value;
                            rollregex=/^[0-9][0-9](\/|-)?[a-zA-Z][a-zA-Z](\/|-)?[0-9][0-9]?[0-9]?$/;
                            if(!rollregex.test(roll) || roll=='' || roll==null)
                            {
                                    document.getElementById('roll_error').style.display = 'block';
                            }
                            else
                            {
                                    valid[0] = true;
                                    document.getElementById('roll_error').style.display = 'none';
                            }
                    });
                    $('#pwd').on('blur', function() {
                            password=this.value;
                            passregex=/^[a-zA-Z0-9_@]*$/;
                            if(!passregex.test(password) || password=='' || password==null)
                            {
                                    document.getElementById('pwd_error').style.display = 'block';
                            }
                            else
                            {
                                    valid[1] = true;
                                    document.getElementById('pwd_error').style.display = 'none';
                            }
                    });
            });
            function isvalid() {
                    validhai=valid[0] && valid[1];
                    if(!valid[0])
                    {
                            document.getElementById('roll_error').style.display = 'block';
                    }
                    if(!valid[1])
                    {
                            document.getElementById('pwd_error').style.display = 'block';
                    }
                    return validhai;
            }
            function show(target) {
                document.getElementById(target).style.display = 'block';
                document.getElementById("buttonfp").style.display = 'none';
                document.getElementById("signin").style.display = 'none';
                document.getElementById("loginform").style.display = 'none';
            }
            function hide(target) {
                document.getElementById(target).style.display = 'none';
                document.getElementById("buttonfp").style.display = 'block';
                document.getElementById("signin").style.display = 'block';
                document.getElementById("loginform").style.display = 'block';
            }
        </script>
    </head>
    <body>
        <div>
            <h1 class="text-center database"><a href=<?php echo base_url(); ?> class="datab">Database</a></h1>
	</div>
	<?php
	$f_roll_no = array (
			'type' => 'text',
			'name' => 'roll_no',
			'id' => 'roll_no',
			'class' => 'form-control',
			'required' => '',
			'placeholder' => '12EC93' 
	);
	$f_password = array (
			'type' => 'password',
			'name' => 'password',
			'id' => 'pwd',
			'class' => 'form-control',
			'required' => '',
			'placeholder' => 'Enter Password' 
	);
	$f_rememberme = array (
			'type' => 'checkbox',
			'name' => 'rememberme',
			'id' => 'rememberme',
			'class' => '' 
	);
	$f_reset_email = array (
			'type' => 'email',
			'name' => 'reset_email',
			'id' => 'remail',
			'class' => 'form-control',
			'required' => '',
			'placeholder' => 'Enter email' 
	);
	$f_login_submit = array(
			'type'              =>          'submit',
			'value'             =>          'login',
			'name'              =>          'login'
	);
	$f_reset_submit = array(
			'type'              =>          'submit',
			'value'             =>          'reset',
			'name'              =>          'reset'
	);
	?>
	<div class="row mainpart">
		<div class="col-lg-offset-3 col-lg-6">
                    <br><br><br>
			<h1 class="text-center databasep">Database</h1>
			<div>
				<div class="col-lg-6 lefty1">
					<br>
					<br>
					<br>
					<br> <img
						src=<?php echo base_url()."static/images/logo.png"; ?>
						width=90%>
				</div>
				<div class="col-lg-6 righty1">
					<div id="signin">
						<br>
						<br>
						<h2 class="col-lg-offset-2">Sign In</h2>
						<br>
						<br>
					</div>
			<?php //echo validation_errors(); ?>
			<?php 

				if ($login_error == TRUE) {
					
					echo "<b>Invalid Credentials.<b><br><br>";
					
				}
			
			?>
			<?php echo form_open(base_url()."login/validate/"); ?>
				<div id="loginform">
						<div class="row">
                                                <label class="control-label col-lg-2" for="roll_no">Roll No:</label>
                                                <div class="col-lg-5">
                                                    <?php echo form_input($f_roll_no); ?>
                                                    <?php echo form_error('roll_no','<div class="error">', '</div>')?>
                                                </div>
                                                <span id="roll_error" style='color: red; display: none'> Roll No.
								must be of format 12/IT/48 </span>
						</div>
						<br>
						<div class="row">
							<label class="control-label col-lg-2" for="pwd">Password:</label>
							<div class="col-lg-5"> 
						<?php echo form_input($f_password); ?>
						<?php echo form_error('password','<div class="error">', '</div>')?>
					</div>
							<span id="pwd_error" style='color: red; display: none'> Password
								must be alphanumeric and may contain only these special
								characters _,@ </span>
						</div>
						<div class="form-group">
							<div class="checkbox col-lg-offset-2">
								<label><?php echo form_input($f_rememberme); ?> Remember me</label>
							</div>
						</div>
					</div>
					<div id="buttonfp">
					<?php /*echo form_submit(array('name'	=>	'login','value'	=>	'login',
							'class'	=> 'btn btn-primary col-lg-offset-2',
							'onclick'	=>	'isValid()'));*/
					 ?>
						<?php //'echo form_submit($f_submit,'Login',array("class => 'btn btn-primary col-lg-offset-2'")); ?>
						  <input type="submit" name = "login_submit" value = "Login" class="btn btn-primary col-lg-offset-2"
							onclick="isvalid()">
						<p class="col-lg-offset-2">
							<a id="forget" onclick="show('buttonfp','signin','loginform','comment')">Forgot
								Password?</a>
						</p>
					</div>
				<?php echo form_close(); ?>
				<?php echo form_open(base_url().'login/reset'); ?>
				<div>
						<span id="comment" style="display: none"> <br>
						<br>
							<h2 align="center">Password Reset</h2> <br>
						<br>
							<div align="center">
								<p>Enter your email address.</p>
								<p>Your password reset instructions will be mailed to you.</p>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-2" for="remail">Email:</label>
								<div class="col-lg-5">
								<?php echo form_input($f_reset_email); ?>
								<?php echo form_error('reset_email','<div class="error">', '</div>')?>
								<?php 
									if ($reset_error == TRUE) {
										
										echo "<b>Invalid Email<b><br>";
										
									}
									else 
									if ($reset_success == TRUE) {
										
										echo "<b>Instructions have been sent successfully.";
										
									}
								
								?>
							</div>
								<br>
								<br>
								<br>
								<div class=" col-lg-offset-1 col-lg-9">
									<?php 
										$class = array(
											'class'		=>		'col-lg-offset-2 btn btn-primary'
										);
									?>
									
									<input type="submit" class="col-lg-offset-2 btn btn-primary" name = "reset_submit" value = "Reset">
									<button type="button" class="btn btn3">Cancel</button>
								</div>
							</div>
						</span>
					</div>
				<?php echo form_close(); ?>
		</div>
			</div>

</body>
</html>