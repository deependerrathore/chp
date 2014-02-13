<?php

	
	include("../includes/connection.php");

	
	
	$start = $_POST['start'];

	
	if(isset($start)){
		$query = mysql_query("select * from recentpost ORDER BY id desc LIMIT $start,5") or die(mysql_error());

	}
	
		
	
		

	
	
	
	while($row = mysql_fetch_array($query)){

?>
	<tr >
		<td><?php echo $row['sendername'];?></td>
		<td><?php echo $row['senderemail']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		<td style="width=300px;overflow:auto;"><?php echo $row['message']; ?></td>
		<td><?php echo $row['dateposted']; ?></td>
	</tr>

<?php
	

	}

?>