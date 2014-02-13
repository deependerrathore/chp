<?php
	$rollnumber = $_POST['rollnumber'];

	include('../includes/connection.php');

	$query = mysql_query("delete from stupersonal where rollnumber = '$rollnumber'") or die(mysql_error());

	$query1 = mysql_query("delete from stuparent where sturollnumber = '$rollnumber'") or die(mysql_error());

	$query2 = mysql_query("delete from stuacademic where rollnumber = '$rollnumber'") or die(mysql_error());

	if($query && $query1 && $query2){
		echo 'Record Sucessfully Deleted';
	}else{
		echo 'There is something wrong';
	}
?>