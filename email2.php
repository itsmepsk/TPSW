<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "tpsw";

	$conn = new mysqli($host,$user,$pass,$db);
	
	if (!$conn) {
		echo $conn->error;
	}
	
	$query = "SELECT email,roll_no FROM token";
	$result = $conn->query($query);
	
	while($row = $result->fetch_row()){
		$email[] = $row[0];
		$roll[] = $row[1];
	}
	
	$val = array_combine($roll, $email);
	var_dump($val);
			
?>
