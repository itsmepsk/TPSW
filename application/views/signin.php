<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="<?php echo base_url(); ?>static/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
		<link href="<?php echo base_url(); ?>static/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>static/css/custom.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url(); ?>static/js/respond.js"></script>
		<script src="<?php echo base_url(); ?>static/js/signin.js"></script>
		<title>Sign In</title>
	</head>
	<body>
		<div>
			<h1 class="text-center database">
				<a href=<?php echo base_url(); ?> class="datab">Database</a>
			</h1>
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
				<br> <br> <br>
				<div class="box_style_2">
					<div id="signin"
						<?php if (isset($reset_error) || isset($reset_success)) {
							echo "style=display:none";
						}
						?>>
						<h2 class="text-center bluebox">Sign In</h2>
						<br> <br>
					</div>
					<div align="center"
						<?php if (!isset($login_error)) {
							echo "style=display:none";
						} else {
							echo "style=display:block";
						}
						?>>
						<span style='color: red'> <b>Invalid Roll No. or Password <br> <br></b> </span>
					</div>
					<?php
					$class = array(
							'class' =>  'form-horizontal',
							'role'  =>  'form'
							);
					?>
					<?php echo form_open(base_url()."login/validate/",$class); ?>
					<div id="loginform"
						<?php 
						if (isset($reset_error) || isset($reset_success)) {
							echo  "style=display:none";
							}
						?>>
						<div class="form-group">
							<label class="control-label col-lg-2" for="roll_no">Roll No:</label>
							<div class="col-lg-8">
								<?php echo form_input($f_roll_no); ?>
								<span style='color: red;'> <b><?php echo form_error('roll_no','<div class="error">', '</div>')?></b> </span>
								<span id="roll_error" style='color: red; display: none'> <b>Roll No. must be of format 12/IT/48 </b> </span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2" for="pwd">Password:</label>
							<div class="col-lg-8"> 
								<?php echo form_input($f_password); ?>
								<span style='color: red;'> <b><?php echo form_error('password','<div class="error">', '</div>')?></b> </span>
								<span id="pwd_error" style='color: red; display: none'> <b>Password must be an atleast 8 character long alphanumeric and may contain only these special characters _@ </b> </span>
							</div>
						</div>
					</div>
					<div id="buttonfp"
						<?php if (isset($reset_error) || isset($reset_success)) {
							echo  "style=display:none";
							}
						?>>
						<input type="submit" name="login_submit" value="Login" class="btn btn-primary col-lg-offset-2" onclick="return isvalid()">
						<br> <br>
						<p class="col-lg-offset-2">
							<a href="#" id="forget" onclick="toggle('comment','buttonfp','signin','loginform')">Forgot Password?</a>
						</p>
					</div>
					<?php echo form_close(); ?>
					<?php echo form_open(base_url().'login/reset'); ?>
					<div>
						<span id="comment"
							<?php if (!isset($reset_error) && !isset($reset_success)) {
								echo  "style=display:none";
								}
							?>>
							<h2 align="center" class="bluebox">Password Reset</h2>
							<br> <br>
							<div align="center">
								<p>Enter your email address.</p>
								<p>Your password reset instructions will be mailed to you.</p>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-2" for="remail">Email:</label>
								<div class="col-lg-8">
									<?php echo form_input($f_reset_email); ?>
									<span style='color: red'>
										<b>
											<?php echo form_error('reset_email','<div class="error">', '</div>')?>
											<?php
												if (isset($reset_error) == TRUE) {
													echo "<b>Invalid Email<b><br>";
													}
													else if (isset($reset_success) == TRUE) {
														echo "<b>Instructions have been sent successfully.";
													}
											?>
										</b>
									</span>
								</div>
								<br> <br> <br>
								<div class=" col-lg-offset-1 col-lg-9">
									<input type="submit" class="col-lg-offset-2 btn btn-primary" name="reset_submit" value="Reset"></input>
									<button type="button" class="btn btn3" onclick="toggle('comment','buttonfp','signin','loginform')" value="Cancel">Cancel</button>
								</div>
							</div>
						</span>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
		<div class="row mainpart">
			<div class="developers">
				<a href=<?php echo base_url()."about"; ?>>About Us</a>
			</div>
		</div>
	</body>
</html>