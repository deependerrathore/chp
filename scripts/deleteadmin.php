<?php
	include("../includes/connection.php");
	$email = $_POST['email'];

	$query= mysql_query("delete from login where email = '$email'") or die(mysql_error());

	if($query){
		echo 'User Deleted';
	}
?>