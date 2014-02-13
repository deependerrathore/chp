<?php
	include("../includes/connection.php");

	$array = array();
	$queryforMaleIT= mysql_query("Select COUNT(*) from stupersonal where gender='male' and branch='Information technology'") or die(mysql_error());
	$array[0] = mysql_fetch_row($queryforMaleIT);
	$queryforFemaleIT= mysql_query("Select COUNT(*) from stupersonal where gender='female' and branch='Information technology'") or die(mysql_error());
	$array[1] = mysql_fetch_row($queryforFemaleIT);

	$queryforMalecs= mysql_query("Select COUNT(*) from stupersonal where gender='male' and branch='computer science'") or die(mysql_error());
	$array[2] = mysql_fetch_row($queryforMalecs);
	$queryforFemalecs= mysql_query("Select COUNT(*) from stupersonal where gender='female' and branch='computer science'") or die(mysql_error());
	$array[3] = mysql_fetch_row($queryforFemalecs);

	
	$queryforMaleece= mysql_query("Select COUNT(*) from stupersonal where gender='male' and branch='ELECTRONICS & COMMUNICATION'") or die(mysql_error());
	$array[4] = mysql_fetch_row($queryforMaleece);
	$queryforFemaleece= mysql_query("Select COUNT(*) from stupersonal where gender='female' and branch='ELECTRONICS & COMMUNICATION'") or die(mysql_error());
	$array[5] = mysql_fetch_row($queryforFemaleece);

	$queryforMaleme= mysql_query("Select COUNT(*) from stupersonal where gender='male' and branch='MECHANICAL'") or die(mysql_error());
	$array[6] = mysql_fetch_row($queryforMaleme);
	$queryforFemaleme= mysql_query("Select COUNT(*) from stupersonal where gender='female' and branch='MECHANICAL'") or die(mysql_error());
	$array[7] = mysql_fetch_row($queryforFemaleme);

	
	$queryforMalecivil= mysql_query("Select COUNT(*) from stupersonal where gender='male' and branch='CIVIL'") or die(mysql_error());
	$array[8] = mysql_fetch_row($queryforMalecivil);
	$queryforFemalecivil = mysql_query("Select COUNT(*) from stupersonal where gender='female' and branch='CIVIL'") or die(mysql_error());
	$array[9] = mysql_fetch_row($queryforFemalecivil);

	

	echo json_encode($array);
	
?>