<?php
	include("../includes/connection.php");

	$query = mysql_query("select * from login") or die(mysql_error());

?>
<table class="table table-bordered table-striped table-condense">
	<thead class="thead">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Last Login</th>
	</tr>
	</thead>
<?php
	while ($row = mysql_fetch_array($query)) {
?>
	<tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['logintime']." " ; ?>(YYYY-MM-DD HH:MM:SS)</td>
	</tr>


<?php
	}
?>


</table>