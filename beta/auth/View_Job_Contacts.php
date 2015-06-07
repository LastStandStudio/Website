<?php
    ob_start(); //Fixed header error issues

    mysql_connect("localhost","laststand","tUewqYCBDjmVG7HV") or die("ERROR CONNECTING TO MYSQL SERVER!");
    mysql_select_db("laststandstudio") or die("ERROR SELECTING DB!");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Job Contacts</title>
		<link rel="stylesheet" href="../css/foundation.css"/>
		<link rel="stylesheet" href="../css/custom.css"/>
    </head>
    <body>
	    <div class="row">
		
			<h1>Contacts</h1>
		</div>
		<div class="row">
			<table style="height:80%;width:100%;">
				<tr>
					<th>ID</th>
					<th>DATE</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					<th>DEPARTMENT</th>
					<th>CONTACT</th>
					<th>EXP. PAY</th>
					<th>STATUS</th>
				</tr>
				<?php
					$query = mysql_query("SELECT * FROM `job_application` ORDER BY `id` DESC");
					
					while($row = mysql_fetch_assoc($query)){

				?>
					<tr>
						<td><?php echo $row['id']?></td>
						<td><?php echo $row['date_sub']?></td>
						<td><?php echo $row['first_name']?></td>
						<td><?php echo $row['last_name']?></td>
						<td><?php echo $row['department']?></td>
						<td><?php echo $row['contact_info']?></td>
						<td><?php echo $row['exp_pay']?></td>
						<td><?php echo $row['status']?></td>
					</tr>
				
				<?php
					}
				?>
			</table>
		</div>
    </body>
</html>
