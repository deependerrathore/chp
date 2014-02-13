<?php 
	include("../includes/connection.php");

	$array = array();
	$query = mysql_query("select COUNT(*) from stupersonal where branch='INFORMATION TECHNOLOGY'") or die(mysql_error());
	$array[0] = mysql_fetch_row($query);
	
	
	$query1 = mysql_query("select COUNT(*)  from stupersonal where branch='Computer science'") or die(mysql_error());
	$array[1] = mysql_fetch_row($query1);
	

	$query2 = mysql_query("select COUNT(*) from stupersonal where branch='Electronics & communication'") or die(mysql_error());
	$array[2] = mysql_fetch_row($query2);

	$query3 = mysql_query("select COUNT(*) from stupersonal where branch='Mechanical'") or die(mysql_error());
	$array[3] = mysql_fetch_row($query3);

	$query4 = mysql_query("select COUNT(*) from stupersonal where branch='Civil'") or die(mysql_error());
	$array[4] = mysql_fetch_row($query4);

	
	echo json_encode($array);

?>