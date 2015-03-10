<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Password Reset
		</title>
		<script src="./static/js/jquery.min.js"></script>
        <script src="./static/js/bootstrap.min.js"></script>
        <link href="./static/css/bootstrap.css" rel = "stylesheet" type="text/css">
        <link href="./static/css/custom.css" rel="stylesheet" type="text/css">
        <script src="./static/js/respond.js"></script>
		
	</head>
	<body>
		<div>
			<h1 class="text-center database"><a href="http://localhost/tpsw/temp/profile1.php" class="datab">Database</a></h1>
		</div>
		<div class="row mainpart">
			<div class="col-lg-offset-3 col-lg-6">
				<br><br><br>
				<div class="box_style_2">
				<h2 class="text-center bluebox">Set New Password</h2>
				<br><br>
				<form role="form">
					<div class="form-group">
						<label for="pwd">New Password:</label>
							<input type="password" class="form-control" id="pwd" placeholder="Enter password">
					</div>
					<div class="form-group">
						<label for="pwd1">Re-enter password:</label>
							<input type="password" class="form-control" id="pwd1" placeholder="Re-enter password">
					</div>
					<div align="center">
						<button type="submit" class="btn btn-primary">Reset Password</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>