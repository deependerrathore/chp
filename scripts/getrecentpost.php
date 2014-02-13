<?php
	require("../includes/connection.php");



?>
<div class="table-responsive">
<table class="table table-bordered table-striped " style="table-layout: fixed;width: 980px;">
	<thead class="thead">
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th style="width=300px;">Message</th>
		<th>Posted date</th>
	</tr>

	</thead>
	

<?php
	$query = mysql_query("select * from recentpost ORDER BY id DESC LIMIT 0,10") or die(mysql_error());
	while ($row= mysql_fetch_array($query)) {
?>
	<tr >
		<td><?php echo $row['sendername'];?></td>
		<td><a href="mailto:<?php echo $row['senderemail']; ?>"><?php echo $row['senderemail']; ?></a></td>
		<td><?php echo $row['subject']; ?></td>
		<td style="width=300px;overflow:auto;"><?php echo $row['message']; ?></td>
		<td><?php echo $row['dateposted']; ?></td>
	</tr>
<?php
	}
?>

</table>
</div>