<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Download applicants
		</title>
		<script src="./static/js/jquery.min.js"></script>
        <script src="./static/js/bootstrap.min.js"></script>
        <link href="./static/css/bootstrap.css" rel = "stylesheet" type="text/css">
        <link href="./static/css/compdown.css" rel="stylesheet" type="text/css">
        <script src="./static/js/respond.js"></script>
		<script>
			function tickall(source,name) {
			  checkboxes = document.getElementsByName(name);
			  for(var i=0, n=checkboxes.length;i<n;i++) {
				checkboxes[i].checked = source.checked;
			  }
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
			<h2 class="text-center">Download File</h2>
			<div class="acompany">
				<h3 class="text-center bluebox">Inside View</h3>
				<div class="optionsbody">
					<div class="row">
						<div class="markall">
							<label class="checkbox-inline">
								<input type="checkbox" id="basicinfo" value="option1" onclick="tickall(this,'basic')"> <strong>Basic Info</strong>
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="basic" id="bt1" value="option1"> Name
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="basic" id="che1" value="option2"> Reg. No.
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="basic" id="ce1" value="option3"> Curr. Sem.
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="basic" id="cs1" value="option1"> Sex
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="basic" id="ee1" value="option2"> DOB
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="basic" id="ec1" value="option3"> Category
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="basic" id="it1" value="option1"> Email Id
							</label>
						</div>
					</div>
					<div class="row">
						<div class="markall">
							<label class="checkbox-inline">
								<input type="checkbox" id="contactinfo" value="option1" onclick="tickall(this,'contact')"> <strong>Contact Info</strong>
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="contact" id="me1" value="option2"> Contact No. 1
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="contact" id="mme1" value="option3"> Contact No. 2
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="contact" id="mme1" value="option3"> Hometown
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="contact" id="mme1" value="option3"> Home Address
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="contact" id="mme1" value="option3"> Hostel Address
							</label>
						</div>
					</div>
					<div class="row">
						<div class="markall">
							<label class="checkbox-inline">
								<input type="checkbox" id="academicinfo" value="option1" onclick="tickall(this,'academic')"> <strong>Academic Info</strong>
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> 1st Sem SGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> 2nd Sem SGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> 3rd Sem SGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> 4th Sem SGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> 5th Sem SGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> 6th Sem SGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> 7th Sem SGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> 8th Sem SGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> CGPA
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> Supplies
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="academic" id="mme1" value="option3"> Active Supplies
							</label>
						</div>
					</div>
					<div class="row">
						<div class="markall">
							<label class="checkbox-inline">
								<input type="checkbox" id="pasteducation" value="option1" onclick="tickall(this,'pastedu')"> <strong>Past Education</strong>
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> AIEEE rank
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> Gap 12 & B.Tech
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 12 Board name
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 12 School name
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 12 passing year
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 12 total marks
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 12 max marks
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 12 percentage
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 10 Board name
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 10 School name
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 10 passing year
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 10 total marks
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 10 max marks
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="pastedu" id="mme1" value="option3"> 10 percentage
							</label>
						</div>
					</div>
					<div class="row">
						<div class="markall">
							<label class="checkbox-inline">
								<input type="checkbox" id="personalinfo" value="option1" onclick="tickall(this,'personal')"> <strong>Personal Info</strong>
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Father's Name
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Mother's Name
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Height
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Weight
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Power(L)
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Power(R)
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Disability
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Disability Type
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="personal" id="mme1" value="option3"> Disability %
							</label>
						</div>
					</div>
					<div class="row">
						<div class="markall">
							<label class="checkbox-inline">
								<input type="checkbox" id="otherinfo" value="option1" onclick="tickall(this,'other')"> <strong>Other Info</strong>
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="other" id="mme1" value="option3"> Scholastic Achievements
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="other" id="mme1" value="option3"> Academic Projects
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="other" id="mme1" value="option3"> Practial Training
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="other" id="mme1" value="option3"> Skills
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="other" id="mme1" value="option3"> Position of Resp.
							</label>
						</div>
						<div class="oneoption">
							<label class="checkbox-inline">
								<input type="checkbox" name="other" id="mme1" value="option3"> Extra Curriculars
							</label>
						</div>
					</div>
					<div class="text-center">
						<button class="btn btn-primary">Download file</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>