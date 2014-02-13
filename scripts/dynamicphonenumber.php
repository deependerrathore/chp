<?php

	
	include("../includes/connection.php");

	
	
	$start = $_POST['start'];

	
	if(isset($start)){
		$query = mysql_query("select * from phonebook ORDER BY name LIMIT $start,5") or die(mysql_error());

	}
	
		
	
		

	
	
	
	while($row = mysql_fetch_array($query)){

?>
	<tr >
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['phonenumber']; ?></td>
		<td><a href="#" email="<?php echo $row['email']; ?>" id="delete">Delete</a></td>
		
	</tr>

<?php
	

	}

?>