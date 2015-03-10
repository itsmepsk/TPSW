<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Profile1
		</title>
		<script src="./static/js/jquery.min.js"></script>
        <script src="./static/js/bootstrap.min.js"></script>
        <link href="./static/css/bootstrap.css" rel = "stylesheet" type="text/css">
        <link href="./static/css/custom.css" rel="stylesheet" type="text/css">
        <script src="./static/js/respond.js"></script>
		<script>
			function show(target1,target2)
			{
				document.getElementById(target1).style.display = 'block';
				document.getElementById(target2).style.display = 'none';
			}
			function readURL(input) 
			{
				if (input.files && input.files[0]) 
				{
					var reader = new FileReader();
					reader.onload = function (e) 
					{
						document.getElementById('prevImage').src=e.target.result;
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
	
			function confirmDelete() {
				return confirm("Do you really want to delete your photo?");
			}

		</script>
	</head>
	<body>
		<div>
			<h1 class="text-center database"><a href="http://localhost/tpsw/temp/profile1.php" class="datab">Database</a><small><span class="dropdown flright" role="presentation">
					<a id= "dropdown" data-toggle="dropdown" class="dropdown-toggle flright" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><span class="caret"></span></a>
					<ul class="dropdown-menu absright" role="menu" aria-labelledby="dLabel">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../temp/password.php"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Change Password</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../temp/signin.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Logout</a></li>
					</ul>
					</span></small></h1>
		</div>
		<div class="row mainpart">
			<div class="col-lg-4 rightpr">
				<h2 class="text-center bluebox">Gaurav Chandak</h2>
				<div id="picture" class="pic">
					<img src="../temp/static/images/dp.png" width=100%>
					<div class="editbutt"><a id= "editbutton" onclick=show('newpic','picture') data-toggle="tooltip" title="Update picture"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></div>
				</div>
				<div>
				<h3 class="text-center rollno bluebox">12/IT/48</h3>
				</div>
				<div id="newpic" style=display:none>
					<form id="Imgfrm">
						<input id="lefile" type="file" accept="/image" style="display:none">
						<div class="input-append">
							<a class="btn btn1" onclick="$('input[id=lefile]').click();">Upload File</a>
							<a href="/delete" id= "trash"data-toggle="tooltip" title="Delete image" onclick="return window.confirm('Do you really want to delete your photo?')"><span class="glyphicon glyphicon-trash right0" aria-hidden="true"></span></a>
						</div>
						<script type="text/javascript">
							$('input[id=lefile]').change(function() {
							$('#photoCover').val($(this).val());
							});
						</script>
						<br>
						<img id="preview" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png" alt="your image" /width=100%>
						<script>
							$("#lefile").change(function(){
								if (this.files && this.files[0]) 
								{
									var reader = new FileReader();
									reader.onload = function (e) 
									{
										$('#preview').attr('src', e.target.result);
									}
									reader.readAsDataURL(this.files[0]);
								}
							});
						</script>
						<br><br>
						<input id="lesubmit" type="submit" style="display:none"/>
						<div class="input-append">
							<a class="btn btn2">Submit</a>
							<input type="button" onclick=show('picture','newpic') value="Cancel" class="btn btn-default right0"></input>
						</div>
					</form>
					<br><br>
				</div>
			</div>
			<div class="leftpr">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<div>Basic Info</div>
								</h4>
							</div>
						</a>
						<div id="collapseOne" <?php $update_contact=0; $update_academic=0; $update_past=0; $update_personal=0; $update_other=0;  if($update_contact==0 && $update_academic==0 && $update_past==0 && $update_personal==0 && $update_other==0) echo 'class="panel-collapse collapse in"'; else echo 'class="panel-collapse collapse"';?> role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body saman">
								<div id="clickmeid1" <?php $error_basic=0; if($error_basic==1)echo 'style=display:none'; ?>>
									<div align="right"><a id= "clickmeid" onclick=show('comment1','clickmeid1') data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></div>
									<div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Name:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">Gaurav Chandak</div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Registration no:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">20120623</div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Current Semester:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">6th</div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Sex:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">Female</div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Date of Birth:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">01/01/1993</div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Category:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">General</div>
										</div>
									</div>
								</div>
								<div>
									<div id="comment1" <?php if($error_basic==0) echo 'style=display:none';?>>
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<label class="control-label col-lg-3" for="name">Name:</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="name" placeholder="Enter name">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-3" for="regno">Registration no:</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="regno" placeholder="Enter registration number">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-offset-1 col-lg-2" for="sex">Sex:</label>
												<div class="col-lg-8">
													<select class="form-control" id="sex">
														<option>--Select--</option>
														<option>Male</option>
														<option>Female</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-3" for="sem">Current Semester:</label>
												<div class="col-lg-8">
													<select class="form-control" id="sem">
														<option>--Select--</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
														<option>8</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-offset-1 col-lg-2" for="dob">Date of Birth:</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="dob" placeholder="DD-MM-YYYY">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-offset-1 col-lg-2" for="cat">Category:</label>
												<div class="col-lg-8">
													<select class="form-control" id="dept">
														<option>--Select--</option>
														<option>General</option>
														<option>OBC</option>
														<option>SC</option>
														<option>ST</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-3">
												</div>
												<div class="col-lg-8">
												<button type="submit" class="btn btn-primary">Update</button>
												<input type="button" onclick=show('clickmeid1','comment1') value="Cancel" class="btn btn-default right0"></input>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<div>Contact Info</div>
								</h4>
							</div>
						</a>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body saman">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<div>Academic Performance</div>
								</h4>
							</div>
						</a>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body saman">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<div>Past Education</div>
								</h4>
							</div>
						</a>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body saman">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<div>Personal Info</div>
								</h4>
							</div>
						</a>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="panel-body saman">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							<div class="panel-heading" role="tab" id="headingSix">
								<h4 class="panel-title">
									<div>Other Info</div>
								</h4>
							</div>
						</a>
						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
							<div class="panel-body saman">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
							<div class="panel-heading" role="tab" id="headingSeven">
								<h4 class="panel-title">
									<div>Resume</div>
								</h4>
							</div>
						</a>
						<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
							<div class="panel-body saman">
								<div>
									<p><b>Your personalised resume</b></p>
									<div class="input-append">
										<a onclick="$('input[id=leresume]').click();" class="btn" data-toggle="tooltip" title="Upload Resume"><img src="../temp/static/images/up1.png" width=50px></a>
										<a onclick="$('input[id=leresume]').click();" class="btn" data-toggle="tooltip" title="Download Resume"><img src="../temp/static/images/down1.png" width=50px></a>
										<a onclick="$('input[id=leresume]').click();" class="btn" data-toggle="tooltip" title="Delete Resume"><img src="../temp/static/images/trash.png" width=50px></a>
									</div>
								</div>
								<div>
								<br>
								<p><b>Special Feature</b></p>
									<a href="#"><b>Download your resume in college format</b></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mainpart">
			<div class="developers">
				<a href="../temp/about.php">About Us</a>
			</div>
		</div>
	</body>
</html>