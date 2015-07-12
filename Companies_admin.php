<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Companies
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
		</script>
	</head>
	<body style="word-wrap: break-word;">
		<div>
			<h1 class="text-center database"><a href="http://localhost/tpsw/temp/profile1.php" class="datab">Database</a>
				<small>
				<span class="flright headerclicks">
				<a><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a>
				<span class="dropdown" role="presentation">
					<a id= "dropdown" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
					<ul class="dropdown-menu absright" role="menu" aria-labelledby="dLabel">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../temp/password.php"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Change Password</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../temp/signin.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Logout</a></li>
					</ul>
				</span>
				</span>
				</small>
			</h1>
		</div>
		<div class="container containermob">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 left_com">
					<h2 class="text-center">Companies</h2>
					<div id="com0">
						<a class="links" onclick=show('change0','com0')><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><b>Add Company</b></a>
					</div>
					<div class="acompany" id="change0" style="display:none">
						<h3 class="text-center bluebox">Company</h3>
						<div class="comp_details">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="control-label question" for="name">Name:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="name" placeholder="Enter company name">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="date">Date:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="date1" placeholder="Enter Date">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="ctc">CTC:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="ctc1" placeholder="Enter Package">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="location">Location:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="location1" placeholder="Location">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="url">URL:</label>
									<div class="answerfill">
										<input type="url" class="form-control" id="url1" placeholder="Enter Link">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="deadline">Deadline:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="deadline1" placeholder="Enter Deadline">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="branches">Open For:</label>
									<div class="answerfill">
										<div class="row">
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="bt1" value="option1"> BT
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="che1" value="option2"> CHE
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="ce1" value="option3"> CE
												</label>
											</div>
										</div>
										<div class="row">
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="cs1" value="option1"> CS
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="ee1" value="option2"> EE
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="ec1" value="option3"> EC
												</label>
											</div>
										</div>
										<div class="row">
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="it1" value="option1"> IT
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="me1" value="option2"> ME
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="mme1" value="option3"> MME
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="criteria">Criteria:</label>
								</div>
								<div class="form-group">
									<label class="control-label question" for="cgpa1">CGPA:</label>
									<div class="answerfill">
										<input type="number" class="form-control" id="cgpa1" placeholder="Minimum CGPA">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="12th1">12<sup>th</sup> %:</label>
									<div class="answerfill">
										<input type="number" class="form-control" id="cgpa1" placeholder="Min 12th %">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="10th1">10<sup>th</sup> %:</label>
									<div class="answerfill">
										<input type="number" class="form-control" id="10th1" placeholder="Min 10th %">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="details">Details:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="details1" placeholder="Details">
									</div>
								</div>
								<div class="row">
									<div class="question">
										<br>
									</div>
									<div class="answerfill">
										<button type="submit" class="btn btn-primary">Update</button>
										<input type="button" onclick=show('com0','change0') value="Cancel" class="btn btn-default right0"></input>
									</div>
								</div>
							</form>
						</div> 
					</div>
					<div class="acompany">
						<h3 class="text-center bluebox">Inside View</h3>
						<div class="comp_details" id="com1">
							<div align="right" style="margin-right:5px"><a id= "edit1" onclick=show('change1','com1') data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></div>
							<div class="row gap">
								<div class="question">
									<div style="float:right">
										<b>Date: </b>
									</div>
								</div>
								<div class="answer"> 10/01/2015
								</div>
							</div>
							<div class="row gap">
								<div class="question">
									<div style="float:right">
										<b>CTC: </b>
									</div>
								</div>
								<div class="answer"> 9 lpa
								</div>
							</div>
							<div class="row gap">
								<div class="question">
									<div style="float:right">
										<b>Location: </b>
									</div>
								</div>
								<div class="answer"> Bangalore
								</div>
							</div>
							<div class="row gap">
								<div class="question">
									<div style="float:right">
										<b>URL: </b>
									</div>
								</div>
								<div class="answer"><a href="http://www.insideview.com" target="_blank"> http://www.insideview.com </a>
								</div>
							</div>
							<div class="row gap">
								<div class="question">
									<div style="float:right">
										<b>Deadline: </b>
									</div>
								</div>
								<div class="answer"> 02/01/2015
								</div>
							</div>
							<div class="row gap">
								<div class="question">
									<div style="float:right">
										<b>Open for: </b>
									</div>
								</div>
								<div class="answer"> CS, ECE, IT
								</div>
							</div>
							<div class="row gap">
								<div class="question">
									<div style="float:right">
										<b>Criteria: </b>
									</div>
								</div>
								<div class="answer"> CGPA- 7.0
								</div>
							</div>
							<div class="row gap">
								<div class="question">
									<div style="float:right">
										<b>Details: </b>
									</div>
								</div>
								<div class="answer"> Gaurav Chandak worked here
								</div>
							</div>
							<div class="text-center">
								<button class="btn btn-primary">Download file</button>
							</div>
						</div>
						<div class="comp_details" id="change1" style="display:none">
							<div class="row">
								<a href="/delete" id= "trashnot1"data-toggle="tooltip" title="Delete notification" onclick="return window.confirm('Do you really want to delete the notification?')"><span class="glyphicon normalicon glyphicon-trash right0" aria-hidden="true"></span></a>
							</div>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="control-label question" for="name">Name:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="name" placeholder="Enter company name">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="date">Date:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="date1" placeholder="Enter Date">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="ctc">CTC:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="ctc1" placeholder="Enter Package">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="location">Location:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="location1" placeholder="Location">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="url">URL:</label>
									<div class="answerfill">
										<input type="url" class="form-control" id="url1" placeholder="Enter Link">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="deadline">Deadline:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="deadline1" placeholder="Enter Deadline">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="branches">Open For:</label>
									<div class="answerfill">
										<div class="row">
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="bt1" value="option1"> BT
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="che1" value="option2"> CHE
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="ce1" value="option3"> CE
												</label>
											</div>
										</div>
										<div class="row">
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="cs1" value="option1"> CS
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="ee1" value="option2"> EE
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="ec1" value="option3"> EC
												</label>
											</div>
										</div>
										<div class="row">
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="it1" value="option1"> IT
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="me1" value="option2"> ME
												</label>
											</div>
											<div style="width:33.33%;float:left">
												<label class="checkbox-inline">
													<input type="checkbox" id="mme1" value="option3"> MME
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="criteria">Criteria:</label>
								</div>
								<div class="form-group">
									<label class="control-label question" for="cgpa1">CGPA:</label>
									<div class="answerfill">
										<input type="number" class="form-control" id="cgpa1" placeholder="Minimum CGPA">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="12th1">12<sup>th</sup> %:</label>
									<div class="answerfill">
										<input type="number" class="form-control" id="cgpa1" placeholder="Min 12th %">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="10th1">10<sup>th</sup> %:</label>
									<div class="answerfill">
										<input type="number" class="form-control" id="10th1" placeholder="Min 10th %">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label question" for="details">Details:</label>
									<div class="answerfill">
										<input type="text" class="form-control" id="details1" placeholder="Details">
									</div>
								</div>
								<div class="row">
									<div class="question">
										<br>
									</div>
									<div class="answerfill">
										<button type="submit" class="btn btn-primary">Update</button>
										<input type="button" onclick=show('com1','change1') value="Cancel" class="btn btn-default right0"></input>
									</div>
								</div>
							</form>
						</div> 
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 right_com">
					<h2 class="text-center">Notifications</h2>
					<div id="editn0">
						<a class="links" onclick=show('ednot0','editn0')><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><b>Add Notification</b></a>
					</div>
					<div class="acompany" id="ednot0" style="display:none">
						<h3 class="text-center bluebox">#New Notification</h3>
						<div class="comp_details">
							<form role="form">
								<label class="control-label" for="noti1">Notification:</label>
								<div style="padding-bottom:20px">
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</form>
							<div class="row">
								<div>
									<button type="submit" class="btn btn-primary">Update</button>
									<input type="button" onclick=show('editn0','ednot0') value="Cancel" class="btn btn-default right0"></input>
								</div>
							</div>
						</div>
					</div>
					<div class="acompany">
						<h3 class="text-center bluebox">#Facebook</h3>
						<div class="comp_details" id="not1">
							<div align="right" style="margin-right:5px"><a id= "editn1" onclick=show('ednot1','not1') data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></div>
							<div>
								So, here is the notification regarding Facebook. After much ado facebook has finally decided that it is not coming to our college. Thank You.
							</div>
						</div>
						<div class="comp_details" id="ednot1" style="display:none">
							<a href="/delete" id= "trashnot1"data-toggle="tooltip" title="Delete notification" onclick="return window.confirm('Do you really want to delete the notification?')"><span class="glyphicon normalicon glyphicon-trash right0" aria-hidden="true"></span></a>
							<form role="form">
								<label class="control-label" for="noti1">Notification:</label>
								<div style="padding-bottom:20px">
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</form>
							<div class="row">
								<div>
									<button type="submit" class="btn btn-primary">Update</button>
									<input type="button" onclick=show('not1','ednot1') value="Cancel" class="btn btn-default right0"></input>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>