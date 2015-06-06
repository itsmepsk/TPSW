<html>
    <head>
        <title>
            Resume
        </title>
    </head>
    <body>
    
	    <?php
			
			foreach ( $details as $key => $value ) {
				$f_data [$key] = $value;
			}
			//var_dump($f_data);
		?>
    
        <div class="container">
            <table class="head">
                <tr>
                    <td>
                        <img src = "./static/images/logo.png" width="100px" height="100px" align="left">
                    </td>
                    <td "style=vertical-align:top">
                        <h4>
                            <b><span class = "college" >NATIONAL INSTITUTE OF TECHNOLOGY DURGAPUR </span>
                            <br><span class="india">INDIA</span></b>
                        </h4><span class="india">CIRRICULUM VITAE</span>
                    </td>
                </tr>
            </table>
            <div class="main">
                <b><span class="org">Name of the<br> Industry/Organisation: </span></b> <?php echo "Microsoft"; ?><br>
				
                <div class="picture">
                    <img src =<?php echo "./static/images/".$f_data['image']."?".time();?> height="100px" width="100px">
                </div>
                <div class="yohohoho">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="heading">
                                        <b>
                                        1. &nbsp;&nbsp;&nbsp;GENERAL
                                        </b>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="org">
                                        <b>
                                            1.1 &nbsp;&nbsp;Name: 
                                        </b>
                                        <?php echo $f_data['name']; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="org">
                                       <b>
                                           1.2 &nbsp;&nbsp;dob: 
                                       </b>
                                       <span class="boxed">
                                           <?php echo $f_data['dob'][0]?>
                                       </span>
                                       &nbsp;
                                       <span class="boxed">
                                           <?php echo $f_data['dob'][1]?>
                                       </span>
                                       &nbsp;&nbsp;&nbsp;
                                       <span class="boxed">
                                           <?php echo $f_data['dob'][3]?>
                                       </span>
                                       &nbsp;
                                       <span class="boxed">
                                           <?php echo $f_data['dob'][4]?>
                                       </span>
                                       &nbsp;&nbsp;&nbsp;
                                       <span class="boxed">
                                           <?php echo $f_data['dob'][6]?>
                                       </span>
                                       &nbsp;
                                       <span class="boxed">
                                           <?php echo $f_data['dob'][7]?>
                                       </span>
                                       &nbsp;
                                       <span class="boxed">
                                           <?php echo $f_data['dob'][8]?>
                                       </span>
                                       &nbsp;
                                       <span class="boxed">
                                           <?php echo $f_data['dob'][9]?>
                                       </span>
                                       &nbsp;&nbsp;&nbsp;
                                       DD/MM/YYYY
                                   </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="org">
                                        <b>
                                            1.3 &nbsp;&nbsp;Father's / Mother's Name:
                                        </b>
                                        <?php echo $f_data['father_name']; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="org">
                                        <b>
                                            1.4 &nbsp;&nbsp;Roll no: 
                                        </b>
                                        <?php echo $f_data['roll_no']; ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <b>
                                            Branch: 
                                        </b>
                                        <?php echo $f_data['branch']; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="org">
                                        <b>
                                            1.5 &nbsp;&nbsp;Height: 
                                        </b>
                                        <?php echo $f_data['height']; ?>
                                        <b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;Weight:
                                        </b>
                                        <?php echo $f_data['weight']; ?>
                                        <br>
                                        <b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Power of Glasses &nbsp;&nbsp;&nbsp;&nbsp;L: 
                                        </b>
                                        <?php echo $f_data['power_left']; ?>
                                        <b>
                                            &nbsp;&nbsp;R: 
                                        </b>
                                        <?php echo $f_data['power_right']; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="org">
                                        <b>
                                            1.6 &nbsp;&nbsp;Present Address: 
                                        </b>
                                        <?php echo $f_data['hostel_address']; ?>
                                    </span> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="org">
                                        <b>
                                            1.7 &nbsp;&nbsp;Address for Correspondence: 
                                        </b>
                                        <?php echo $f_data['home_address']; ?>
                                    </span> 
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <span class="org">
                                        <b>
                                            1.8 &nbsp;&nbsp;E-Mail Id: 
                                        </b>
                                        <?php echo $f_data['email']; ?>
										<b>
                                            Cell No:
                                        </b>
                                        <?php echo $f_data['contact_no_1']; ?>
                                    </span> 
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <span class="heading">
                                        <b>
                                        2. &nbsp;&nbsp;&nbsp;EDUCATIONAL QUALIFICATIONS
                                        </b>
                                    </span>
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <span class="heading">
                                        <b>
                                        2.1 &nbsp;&nbsp;&nbsp;Secondary & Higher Secondary
                                        </b>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
					<div class="row">
						<div class="examination">
							<b>Examination</b>
						</div>
						<div class="board">
							<b>Board</b>
						</div>
						<div class="yop">
							<b>Year of passing</b>
						</div>
						<div class="marks">
							<b>Marks obtained</b>
							<div class="row">
								<div class="obtained">
									<b>Obtained</b>
								</div>
								<div class="total">
									<b>Out of (total)</b>
								</div>
								<div class="perc">
									<b>%</b>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="heading">
							<b>3. &nbsp;&nbsp;&nbsp;SCHOLASTIC ACHIEVEMENTS</b>
						</div>
						<div class="or1">
							<?php echo $f_data['scholastic_achievements']; ?>
						</div>
					</div>
					<div>
						<div class="heading">
							<b>4. &nbsp;&nbsp;&nbsp;ACADEMIC PROJECTS</b>
						</div>
						<div class="or1">
							<?php echo $f_data['academic_projects']; ?>
						</div>
					</div>
					<div>
						<div class="heading">
							<b>5. &nbsp;&nbsp;&nbsp;PRACTICAL TRAINING</b>
						</div>
						<div class="or1">
							<?php echo $f_data['practical_training']; ?>
						</div>
					</div>
					<div>
						<div class="heading">
							<b>6. &nbsp;&nbsp;&nbsp;SKILLS AND CAPABILITIES</b>
						</div>
						<div class="or1">
							<?php echo $f_data['skills_capabilities']; ?>
						</div>
					</div>
					<div>
						<div class="heading">
							<b>7. &nbsp;&nbsp;&nbsp;POSITIONS OF RESPONSIBILITY</b>
						</div>
						<div class="or1">
							<?php echo $f_data['position_responsibility']; ?>
						</div>
					</div>
					<div>
						<div class="heading">
							<b>8. &nbsp;&nbsp;&nbsp;EXTRA CURRICULARS</b>
						</div>
						<div class="or1">
							<?php echo $f_data['extra_curriculars']; ?>
						</div>
					</div>
					<br>
					<br>
					<div>
						<div class="or1">
							<p>I hereby declare that the information given above is true and correct.</p>
						</div>
						<div class="row1">
							<div style="width:20%; float:left"><b>DATE: <?php echo date('d-m-3y');?></b></div>
							<div class="sign"><b>SIGNATURE:</b></div>
						</div>
					</div>
                </div>
				<br>
				<br>
                <div class="box">
					<div style="text-align:center">
						<b>TRAINING AND PLACEMENT CELL</b>
					</div>
					<div class="row1">
						<div class="left">
							<div class="row1">
								<div style="width:35%;float:left"><b> &nbsp;&nbsp;Contact No: </b></div>
								<div style="width:65%;float:right">
									<div>0343-2546753</div>
									<div>0343-2752230</div>
									<div>0343-2752228</div>
								</div>
							</div>
							<div class="row1">
								<div style="width:25%;float:left"><b> &nbsp;&nbsp;URL: </b></div>
								<div style="width:75%;float:right">
									<div> http://www.nitdgp.ac.in </div>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="row1">
								<div style="width:25%;float:left"><b>Fax: </b></div>
								<div style="width:75%;float:right">
									<div>0343-2546753</div>
									<br><br>
								</div>
							</div>
							<div class="row1">
								<div style="width:18%;float:left"><b>E-mail: </b></div>
								<div style="width:82%;float:right">
									<div>placementcell@admin.nitdgp.ac.in</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </body>
    <style>
        .picture{
			position:absolute;
			left:500px;
		}
		.box{
			width:100%;
			border: 1px solid #000;
		}
		.row
		{
			display:table;
			width:100%;
			text-align:center;
		}
		.left
		{
			width:50%;
			float:left;
		}
		.right
		{
			width:50%;
			float:right;
		}
		.row1
		{
			display:table;
			width:100%;
			clear:both;
			content:" ";
		}
		.row div{
			border:1px;
			border-color:#000;
			}
		.date{
			float:left;
			padding-left:25px;
		}
		.sign{
			float:right;
			padding-right:200px;
			width:20%;
			}
		.examination{
			float:left;
			width: 15%;
			height:57px;
			border-top:3px solid #000;
		}
		.examination b{
			position:relative;
			top:19px;
			vertical-align:middle;
		}
		.board{
			float:left;
			width: 37%;
		}
		.yop{
			float:left;
			width: 13%;
		}
		.marks{
			float:left;
			width: 35%;
		}
		.obtained{
			float:left;
			width: 33%;
		}
		.total{
			float:left;
			width: 34%;
		}
		.perc{
			float:left;
			width: 33%;
		}
        .main table {
            
            table-layout: fixed;
            width: 100%; 
        }
        
        .main td {
            
            word-wrap: break-word;
            
        }
        
        .imtable {
            
            float: left;
            
        }
        
        .container {
            
            margin: 20px;
            width:607px;
        }
        
        .head td {
            
            text-align: center;*/
            vertical-align: top;
            
        }
        
        h4 {
            
            font-size: 14px;
            
        }
        
        .college {
            
            font-family: Engravers MT;
            text-align: center;
            vertical-align: top;
        }
        
        .main {
            margin-top: 30px;
            font-family: Book Antiqua;
        }
        
        .india {
            
            font-family: Times New Roman;
            text-align: center;
            /*padding-left: 50%;*/
            
        }
        
        .org {
            
            font-size: 13px;
            
        }
        
		.or1 {
			font-size:13px;
			padding-left:30px;
		}
        .heading {
            
            font-size: 14px;
			width:100%;
            
        }
        
        .boxed {
            border: 1px solid black ;
            padding-left: 4px;
            padding-right: 4px;
            /*margin-right: 0px;*/
        }
        
        .photo {
            border: 1px solid black ;
            width: 200px;
            height: 200px;
            text-align: center;
            padding-top: 20%;
        }
        
    </style>
</html>