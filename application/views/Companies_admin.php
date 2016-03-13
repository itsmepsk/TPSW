<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Companies
		</title>
		<script src="<?php echo base_url(); ?>static/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
        <link href="<?php echo base_url(); ?>static/css/bootstrap.css" rel = "stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>static/css/custom.css" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url(); ?>static/js/respond.js"></script>
		<script>
			function show(target1,target2)
			{
				document.getElementById(target1).style.display = 'block';
				document.getElementById(target2).style.display = 'none';
			}
		</script>
	</head>
	<body style="word-wrap: break-word;">
    <?php
//    var_dump($details);
    ?>
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

                    <?php

                        if (isset($details['success']) && isset($details['success_id_company'])) {

                            $success = $details['success'];
                            $success_id = $details['success_id_company'];
                            unset($details['success']);
                            unset($details['success_id_company']);
                        }
                        else if (isset($details['success']) && isset($details['success_add_company'])) {

                            $success = $details['success'];
                            $success_add_company = $details['success_add_company'];
                            unset($details['success']);
                            unset($details['success_add_company']);
                        }
                        else if (isset($details['success']) && isset($details['success_delete_company'])) {

                            $success = $details['success'];
                            $success_delete_company = $details['success_delete_company'];
                            unset($details['success']);
                            unset($details['success_delete_company']);
                        }

                    ?>

                    <?php
                        if (isset($details['success_add_company']) && $details['success_add_company'] == true) {
                            echo '<div class="alert alert-danger alert-dismissible fade in" style="text-align:center" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                <p>Company already added!</p>
                            </div>';
                        }
                        if (isset($success) && $success == true && isset($success_add_company) && $success_add_company == true) {
                            echo '<div class="alert alert-success alert-dismissible fade in" style="text-align:center" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                <p>Company added Successfully!</p>
                            </div>';
                        }
                        if (isset($success) && $success == true && isset($success_delete_company) && $success_delete_company == true) {
                            echo '<div class="alert alert-warning alert-dismissible fade in" style="text-align:center" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                <p>Company deleted Successfully!</p>
                            </div>';
                        }
                        if (isset($success) && $success == false && isset($success_delete_company) && $success_delete_company == false) {
                            echo '<div class="alert alert-danger alert-dismissible fade in" style="text-align:center" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                    <p>Company deletion failed!</p>
                                </div>';
                        }
                    ?>

					<div id="com0"
                        <?php
                        if (isset($details['company_exists']) || isset($details['success_add_company']) && $details['success_add_company'] == false) {
                            echo 'style="display:none"';
                        }
                        ?>
                        >
						<a class="links" onclick=show('change0','com0')><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><b>Add Company</b></a>
					</div>

                    <?php

                    $branch = array(
                        'bt'                =>          "BT",
                        'che'               =>          "CHE",
                        'ce'                =>          "CE",
                        'cse'               =>          "CSE",
                        'ece'               =>          "ECE",
                        'ee'                =>          "EE",
                        'it'                =>          "IT",
                        'me'                =>          "ME",
                        'mme'               =>          "MME",
                    );

                    $key_map = array(
                        "company_name"                  =>      "Name",
                        "ctc"                           =>      "CTC",
                        "date_of_placement"             =>      "Date",
                        "location"                      =>      "Location",
                        "company_website"               =>      "URL",
                        "deadline"                      =>      "Deadline",
                        "open_branches"                 =>      "Open for",
                        "min_cgpa"                      =>      "Min. CGPA",
                        "min_tenth"                     =>      "Min. 10<sup>th</sup> %",
                        "min_twelve"                    =>      "Min. 12<sup>th</sup> %",
                        "other_details"                 =>      "Details",
                        "allow_active_suppli"           =>      "Allo active supplies?"
                    );

                    $placeholder_map = array (
                        "company_name"                  =>      "Enter-company-name",
                        "ctc"                           =>      "Enter-Package",
                        "date_of_placement"             =>      "Enter-Date",
                        "location"                      =>      "Location",
                        "company_website"               =>      "Enter-Link",
                        "deadline"                      =>      "Enter-Deadline",
                        "open_branches"                 =>      "Open-for-branches",
                        "min_cgpa"                      =>      "Minimum CGPA",
                        "min_tenth"                     =>      "Min.-10th%",
                        "min_twelve"                    =>      "Min.-12th%",
                        "other_details"                 =>      "Details"
                    );
                    ?>


                    <!--    Form to add new company begins     -->

                    <div class="acompany" id="change0"
                         <?php
                             if (!isset($details['company_exists']) || !isset($success_add_company)) {
                                 echo 'style="display:none"';
                             }
                         ?>

                        >
                        <h3 class="text-center bluebox">Company</h3>
                        <div class="comp_details">
                            <form method = "post" action="<?php echo base_url(); ?>tpr/submit" class="form-horizontal" role="form">
                                <?php
                                    if (isset($details['company_exists'])) {
                                        echo '<div class="alert alert-danger alert-dismissible fade in" style="text-align:center" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                        <p>Company already added!</p>
                                        </div>';
                                    }
                                    foreach ($key_map as $key=>$value) {
                                    if ($key == "open_branches") {

                                        echo '<div class="form-group">';
                                            echo '<label class="control-label question" for="name">Open For:</label>';
                                            echo '<div class="answerfill">';
                                                $counter = 1;
                                                foreach ($branch as $one=>$two) {
                                                    if ($counter%3 == 0) {
                                                        echo '<div class="row">';
                                                    }
                                                    echo '<div style="width:33.33%;float:left">';
                                                    echo '<label class="checkbox-inline">';
                                                    echo '<input name = "open_branches[]" type="checkbox" id="'.$one.'" value="'.$two.'" />';
                                                    echo $two;
                                                    echo '</label>';
                                                    echo '</div>';
                                                    if ($counter%3 == 0) {
                                                        echo '</div>';
                                                    }
                                                    $counter++;
                                                }
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<span style="color: red;text-align: center"> ';
                                            echo '<b>' . form_error($key, "<div class=\"error\">", "</div>") . '</b><br>';
                                        echo '</span>';

                                    }
                                    else
                                    if ($key == "allow_active_suppli") {

                                        echo '<div class="form-group">';
                                            echo '<label class="control-label question" for="name">Allow Active Suppli? :</label>';
                                            echo '<div class="answerfill">';
                                                echo '<div class="row">';
                                                    echo '<div style="width:33.33%;float:left">';
                                                    echo '<label class="checkbox-inline">';
                                                        echo '<input type="checkbox" name ="allow_active_suppli" id = "allow_active_suppli"  value = 1';
                                                        if (set_value("allow_Active_suppli") == 1) {
                                                            echo " checked";
                                                        }
                                                        echo '/>';
                                                    echo '</label>';
                                                    echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<span style="color: red;text-align: center"> ';
                                            echo '<b>' . form_error($key, "<div class=\"error\">", "</div>") . '</b><br>';
                                        echo '</span>';

                                    }
                                    else {
                                        echo '<div class="form-group">';
                                        echo '<label class="control-label question" for="name">' . $key_map[$key] . ':</label>';
                                            echo '<div class="answerfill">';
                                                echo '<input type="text" name ="' . $key . '" id = "' . $key . '" class="form-control" placeholder=' . $placeholder_map[$key] . '  value = "'.set_value($key).'">';
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<span style="color: red;text-align: center"> ';
                                            echo '<b>' . form_error($key, "<div class=\"error\">", "</div>") . '</b><br>';
                                        echo '</span>';
                                    }
                                }

                                    echo '<div class="row">';
                                        echo '<div class="question">';
                                            echo '<br>';
                                        echo '</div>';
                                        echo '<div class="answerfill">';
                                            echo '<input type="submit" class="btn btn-primary" value="Add Company" name="new_company" />';
                                            echo "<button type=\"button\" onclick=\"show('com0','change0')\" value=\"Cancel\" class=\"btn btn-default right0\"/>Cancel</button>";
                                        echo '</div>';
                                    echo '</div>';

                                ?>
                            </form>
                        </div>
                    </div>

                    <!--    Form to add new company ends    -->

                    <!--    Companies list start    -->

                    <?php

                    foreach ($details as $company) {
//                        var_dump($details);
                        $company_name = $company->company_name;
                        $submit_id = $company->id;
                        $f_branch = trim($company->open_branches);
                        $hashed_id = $company->hashed_id;
                        $active_suppli = $company->allow_active_suppli;
                        $change = "change".$submit_id;
                        $com = "com".$submit_id;

//                        <!--    Displays company details starts   -->

                        echo '<div class="acompany">';
                            echo '<h3 class="text-center bluebox">' . $company->company_name . '</h3>';

                            echo '<div class="comp_details" id='.$com;

                                if (isset($success) && $success == false && isset($success_id_company) && $success_id_company == $company->hashed_id) {

                                    echo ' style="display:none">';

                                }
                                else {

                                    echo " >";

                                }

                                $com = "com".$submit_id;
                                $first = "change".$submit_id;
                                $second = "com".$submit_id;

                                if (isset($success) && $success == true  && isset($success_id_company) && $success_id_company == $hashed_id) {
                                    echo '<div class="alert alert-success alert-dismissible fade in" style="text-align:center" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                <p>Updated Successfully!</p>
                                                </div>';
                                }

                                echo "<div align=\"right\" style=\"margin-right:5px\">
                                            <a id= \"edit1\" onclick=\"show('".$first."','".$second."')\" data-toggle=\"tooltip\" title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a>
                                        </div>";
                                unset($company->id);
                                unset($company->company_name);
                                unset($company->submit_id);
                                unset($company->allow_active_suppli);
                                unset($company->hashed_id);
                                foreach ($company as $key=>$value) {
                                    if (!empty($value)) {
                                        echo '<div class="row gap">';
                                        echo '<div class="question">';
                                        echo '<div style="float:right">';
                                        echo '<b>' . $key_map[$key] . ':</b>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '<div class="answer">';
                                        if (strstr($value, 'http://')) {
                                            echo '<a target="_blank" href="' . $value . '">' . $value . '</a>';
                                        } else {
                                            echo $value;
                                        }
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                }
                                echo '<div class="text-center">';
                                    echo '<a href="'.base_url().'companies_download.php"><button class="btn btn-primary">Download file</button></a>';
                                echo '</div>';
                            echo '</div>';

                        ?>

                        <!--    Displays company details ends   -->

                        <?php

                            echo '<div  id='.$change.' class="comp_details" ';

                                if (isset($success) && $success == false && isset($success_id_company) && $success_id_company == $hashed_id) {

                                    echo ">";

                                }
                                else {

                                    echo 'style="display:none">';

                                }
                            ?>

                    <div class="row">
                        <?php

                            echo '<form method = "post" action="'.base_url().'tpr/delete_company" class="form-horizontal" role="form">';
                                echo '<input type="hidden" name = "hashed_id" value = '.$hashed_id.'>';
                                echo '<input id= "trashnot1"data-toggle="tooltip" type="submit" class="btn btn-primary" value="Delete" name="delete_company" onclick="return window.confirm(\'Do you really want to delete the company?\')"/>';
                            echo form_close();

                        ?>
<!--                        <a href="/delete" id= "trashnot1"data-toggle="tooltip" title="Delete Company" onclick="return window.confirm('Do you really want to delete the company?')"><span class="glyphicon normalicon glyphicon-trash right0" aria-hidden="true"></span></a>-->

                    </div>
                            <?php
                                unset($company->submit_id);
                                echo '<form method = "post" action="'.base_url().'tpr/submit_company" class="form-horizontal" role="form">';
                                    echo '<input type="hidden" name = "hashed_id" value = '.$hashed_id.'>';
                                    unset($company->open_branches);
                                    unset($company->allow_active_suppli);

                                    $company2 = new stdClass();
                                    $company2->company_name = $company_name;

                                    foreach ($company as $key=>$value) {
                                        $company2->$key = $value;
                                    }

                                    foreach ($company2 as $key=>$value) {
                                        if (isset($success) && $success == false && isset($success_id_company) && $success_id_company == $hashed_id) {
                                            echo '<span style="color: red;text-align: center"> ';
                                            echo '<b>' . form_error($key, "<div class=\"error\">", "</div>") . '</b><br>';
                                            echo '</span>';
                                        }
                                        echo '<div class="form-group">';
                                            echo '<label class="control-label question" for="name">' . $key_map[$key] . ':</label>';
                                            echo '<div class="answerfill">';
                                                echo '<input type="text" name ="'.$key.'" id = "'.$key.'" class="form-control" placeholder='.$placeholder_map[$key].'  value = '.$value.'>';
                                            echo '</div>';
                                        echo '</div>';
                                    }

                                    echo '<div class="form-group">';
                                        echo '<label class="control-label question" for="name">Allow Active Suppli? :</label>';
                                        echo '<div class="answerfill">';
                                            echo '<div class="row">';
                                                echo '<div style="width:33.33%;float:left">';
                                                    echo '<label class="checkbox-inline">';
                                                        echo '<input type="checkbox" name ="allow_active_suppli" id = "allow_active_suppli"  value = 1';
                                                        if ($active_suppli == true) {
                                                            echo " checked";
                                                        }
                                                        echo '/>';
                                                    echo '</label>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                    $f_branch = explode(" ", $f_branch);
//                                    var_dump($f_branch);
                                    echo '<div class="form-group">';
                                        echo '<label class="control-label question" for="name">Open For:</label>';
                                        echo '<div class="answerfill">';
                                            $counter = 1;
                                            foreach ($branch as $one=>$two) {
                                                if ($counter%3 == 0) {
                                                    echo '<div class="row">';
                                                }
                                                echo '<div style="width:33.33%;float:left">';
                                                    echo '<label class="checkbox-inline">';
                                                        echo '<input name = "open_branches[]" type="checkbox" id="'.$one.'" value="'.$two.'"';
                                                            if (in_array($two, $f_branch)) {
                                                                echo ' checked';
                                                            }
                                                            echo '/>';
                                                        echo $two;
                                                    echo '</label>';
											    echo '</div>';
                                                if ($counter%3 == 0) {
                                                    echo '</div>';
                                                }
                                                $counter++;
                                            }
                                        echo '</div>';
                                    echo '</div>';

                                    echo '<div class="row">';
                                        echo '<div class="question">';
                                            echo '<br>';
                                        echo '</div>';
                                        echo '<div class="answerfill">';
                                            echo '<input type="submit" class="btn btn-primary" value="update" name="update" />';
                                            echo "<button type=\"button\" onclick=\"show('".$com."','".$change."')\" value=\"Cancel\" class=\"btn btn-default right0\"/>Cancel</button>";
                                        echo '</div>';
                                    echo '</div>';
                                echo form_close();
                            echo '</div>';
//                        echo '</div>';
//                        $company->submit_id = $submit_id;
//                        echo '<div class="acompany">';
//                            echo '<h3 class="text-center bluebox">' . $company->company_name . '</h3>';




                        echo '</div>';
                    }

                    ?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 right_com">
					<h2 class="text-center">Notifications</h2>
					<div id="editn0">
						<a class="links" onclick=show('ednot0','editn0')><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><b>Add Notification</b></a>
					</div>
					<div class="acompany" id="ednot0" style="display:none">
						<h3 class="text-center bluebox">#New Notification</h3>
						<div class="comp_details">
							<form method = "POST" action = "<?php echo base_url()?>tpr/notification" role="form">
								<label class="control-label" for="noti1">Notification:</label>
								<div style="padding-bottom:20px">
									<textarea class="form-control" rows="3"></textarea>
								</div>
                                <div class="row">
                                    <div>
                                        <input type="submit" name = "add_notification" value = "Add notification" class="btn btn-primary"/>
                                        <button type="button" onclick=show('editn0','ednot0') value="Cancel" class="btn btn-default right0">Cancel</button>
                                    </div>
                                </div>
                            </form>
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