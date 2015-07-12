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
	</head>
	<body style="word-wrap: break-word;">
		<div>
			<h1 class="text-center database"><a href="http://localhost/tpsw/temp/profile1.php" class="datab">Database</a>
				<small>
				<span class="flright headerclicks">
				<a><span class="glyphicon glyphicon-bell" aria-hidden="true"></span><span class="badge">4</span></a>
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
        <?php
            $key_map = array(
                "ctc"                           =>      "CTC",
                "date_of_placement"             =>      "Date",
                "location"                      =>      "Location",
                "company_website"               =>      "URL",
                "deadline"                      =>      "Deadline",
                "open_branches"                 =>      "Open for",
                "min_cgpa"                      =>      "Min. CGPA",
                "min_tenth"                     =>      "Min. 10<sup>th</sup> %",
                "min_twelve"                    =>      "Min, 12<sup>th</sup> %",
                "other_details"                 =>      "Details"
            );
        ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 left_com">
					<h2 class="text-center">Companies</h2>
                    <?php
                    $key_map = array(
                        "ctc"                           =>      "CTC",
                        "date_of_placement"             =>      "Date",
                        "location"                      =>      "Location",
                        "company_website"               =>      "URL",
                        "deadline"                      =>      "Deadline",
                        "open_branches"                 =>      "Open for",
                        "min_cgpa"                      =>      "Min. CGPA",
                        "min_tenth"                     =>      "Min. 10<sup>th</sup> %",
                        "min_twelve"                    =>      "Min. 12<sup>th</sup> %",
                        "other_details"                 =>      "Details"
                    );
                        foreach ($details as $company) {
                            unset($company->id);
                            unset($company->submit_id);
                            echo '<div class="acompany">';
                            echo '<h3 class="text-center bluebox">' . $company->company_name . '</h3>';
                            echo '<div class="comp_details">';
                            unset($company->company_name);
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
                            echo '<button type="submit" class="btn btn-primary">Update</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 right_com">
					<h2 class="text-center">Notifications</h2>
					<div class="acompany">
						<h3 class="text-center bluebox">#Facebook</h3>
						<div class="comp_details" id="not1">
							<div>
								So, here is the notification regarding Facebook. After much ado facebook has finally decided that it is not coming to our college. Thank You.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>