<html>
	<head>
		<title>
			Johnny
		</title>
		<script src="./static/js/jquery.min.js"></script>
        <script src="./static/js/bootstrap.min.js"></script>
        <link href="./static/css/bootstrap.css" rel = "stylesheet" type="text/css">
        <link href="./static/css/jw.css" rel="stylesheet" type="text/css">
		<script src="./static/js/respond.js"></script>
		<script>
			function show(target)
			{
				document.getElementById(target).style.display = 'block';
				document.getElementById("buttonfp").style.display = 'none';
				document.getElementById("signin").style.display = 'none';
				document.getElementById("loginform").style.display = 'none';
			}
			function hide(target)
			{
				document.getElementById(target).style.display = 'none';
				document.getElementById("buttonfp").style.display = 'block';
				document.getElementById("signin").style.display = 'block';
				document.getElementById("loginform").style.display = 'block';
			}
		</script>
	</head>
	<body>
		<div>
			<h1 class="text-center topfixed"><a href="#" class="johnny">JOHNNY</a></h1>
		</div>
		<div class="mainbg">
			<div class="container">
				<div class="col-lg-offset-3 col-lg-6 bmid">
					<div class="box_style_3">
						<div id="signin">
						<h4 class="text-center">If you are a Johnny</h4>
						<h3 class="text-center">SIGN IN</h3>
						</div>
						<form class="form-horizontal" role="form">
							<div id="loginform">
								<div class="form-group">
									<label class="control-label col-lg-2" for="roll_no">Username:</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="roll_no" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-lg-2" for="pwd">Password:</label>
									<div class="col-lg-10"> 
										<input type="password" class="form-control" id="pwd" placeholder="Enter password">
									</div>
								</div>
								<div class="form-group"> 
									<div class="checkbox col-lg-offset-2">
										<label><input type="checkbox"> Remember me</label>
									</div>
								</div>
							</div>
							<div id="buttonfp">	
								<button type="submit" class="btn btn-primary col-lg-offset-2">Sign In</button>
								<div>
								<p class="col-lg-offset-2"><a id= "forget" onclick=show('comment')>Forgot Password?</a></p>
								</div>
							</div>
							<div>
								<span id="comment" style=display:none>
									<h2 align="center">Password Reset</h2>
									<br><br>
									<div align="center">
										<p>Enter your email address.</p>
										<p>Your password reset instructions will be mailed to you.</p>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="remail">Email:</label>
										<div class="col-lg-10">
											<input type="email" class="form-control" id="remail" placeholder="Enter email">
										</div>
										<br><br><br>
										<div class=" col-lg-offset-1 col-lg-9">
											<button type="submit" class="col-lg-offset-2 btn btn-primary">Submit</button>
											<input type="button" class="btn btn3" onclick=hide('comment') value="Cancel">
										</div>
									</div>
									<br>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>