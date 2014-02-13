<?php
	require("../includes/connection.php");

	$query = mysql_query("select * from phonebook ORDER BY name LIMIT 0,10") or die(mysql_error());
	$numrow = mysql_num_rows($query);

	if($numrow != 0 ){
?>
	<div class="table-responsive">
		<table class="table table-bordered table-striped " style="table-layout: fixed;width: 980px;">
			<thead class="thead">
				<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th style="width:50px;">Delete</th>
		
				</tr>

			</thead>




<?php

	}else{
		echo "No record found";
	}
?>

	

<?php
	

	

	while ($row= mysql_fetch_array($query)) {
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

</table>
</div>