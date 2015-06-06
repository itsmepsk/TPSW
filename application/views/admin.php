<html>

	<head>
	
		<title>
			Admin Panel.
		</title>
	
	</head>

	<body>
	
		<table border="1px solid black">
		
			<?php 
			
				foreach ($details as $key) {
					
					echo form_open(base_url()."admin/submit");
					echo "<input type='hidden' name = 'roll_no' value = {$key->roll_no}>";
					echo "<tr>";
					echo "<td>";
					echo $key->roll_no;
					echo "</td>";
					echo "<td>";
					echo $key->name;
					echo "</td>";
					echo "<td>";
					echo $key->email;
					echo "</td>";
					echo "<td>";
					echo "<input type = 'submit' name = 'activate' value = 'activate'>";
					echo "</td>";
					echo "</tr>";
					echo form_close();
					
				}
				
			?>
			
		</table>
	
	</body>
	
</html>