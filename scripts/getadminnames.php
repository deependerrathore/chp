<?php
	include("../includes/connection.php");

	$query = mysql_query("select * from login") or die(mysql_error());

	
?>
	<table class="table table-bordered table-striped table-condense">
		<tr><th>Admin Name & Email</th></tr>
<?php 
	while($row = mysql_fetch_array($query)){
?>
		<tr><td><?php echo $row['name']; ?><a href="#" onclick="deleteadmin(<?php echo '\''.$row['email'].'\''; ?>); return false;">&nbsp Delete</a> </td></tr>
		<tr><td><?php echo $row['email']; ?> </td></tr>
		

	
<?php
	}
?>
	</table>