<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Password Reset
    </title>
    <script src='<?php echo base_url(); ?>static/js/jquery.min.js'></script>
    <script src='<?php echo base_url(); ?>static/js/bootstrap.min.js'></script>
    <link href='<?php echo base_url(); ?>static/css/bootstrap.css' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url(); ?>static/css/custom.css' rel="stylesheet" type="text/css">
    <script src='<?php echo base_url(); ?>static/js/respond.js'></script>
    <script src='<?php echo base_url(); ?>static/js/profile.js'></script>

</head>

<?php

$f_new_password = array(
    'type' => 'password',
    'name' => 'new_password',
    'required' => 'required',
    'placeholder' => 'Enter New Password',
    'class' => 'form-control',
    'id' => 'pwd'
);

$f_confirm_password = array(
    'type' => 'password',
    'name' => 'confirm_password',
    'required' => 'required',
    'placeholder' => 'Confirm New Password',
    'class' => 'form-control',
    'id' => 'pwd1'
);

$f_uid = array(
    'type' => 'hidden',
    'name' => 'uid',
    'value' => $uid
);

$f_submit = array(
    'type' => 'submit',
    'name' => 'reset_password',
    'value' => 'Reset Password',
    'class' => 'btn btn-primary',
    'id' => ''
)
?>
<div>
    <h1 class="text-center database"><a href=<?php echo base_url() ?>" class=" datab">Database</a></h1>
</div>
<div class="row mainpart">
    <div class="col-lg-offset-3 col-lg-6">
        <br><br><br>

        <div class="box_style_2">
            <h2 class="text-center bluebox">Set New Password</h2>
            <br><br>
            <?php echo form_open(base_url() . "reset/submit"); ?>
            <?php echo form_hidden("uid", $uid); ?>
            <div class="form-group">
                <label for="pwd">New Password:</label>
                <?php echo form_password($f_new_password); ?>
                <span style='color: red;font-weight:bold;'>
									<?php echo form_error('new_password', '<div class="error">', '</div>'); ?>
								</span>
            </div>
            <div class="form-group">
                <label for="pwd1">Re-enter password:</label>
                <?php echo form_password($f_confirm_password); ?>
                <span style='color: red;font-weight:bold;'>
						        	<?php echo form_error('confirm_password', '<div class="error">', '</div>'); ?>
						        </span>
            </div>
            <div align="center">
                <?php echo form_submit($f_submit, 'Reset Password'); ?>
                <!-- 							<button type="submit" class="btn btn-primary">Reset Password</button> -->
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</body>
</html>