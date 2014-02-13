<?php
	include("../includes/connection.php");

	$array = array();

	$itTopper = mysql_query("select  max(stuacademic.aggregate)  from stupersonal inner join stuacademic  where stupersonal.rollnumber = stuacademic.rollnumber and branch ='information technology'");

	$array[0] = mysql_fetch_row($itTopper);

	$csTopper = mysql_query("select  max(stuacademic.aggregate)  from stupersonal inner join stuacademic  where stupersonal.rollnumber = stuacademic.rollnumber and branch ='computer science'") or die(mysql_error());

	$array[1] = mysql_fetch_row($csTopper);

	$eceTopper = mysql_query("select  max(stuacademic.aggregate)  from stupersonal inner join stuacademic  where stupersonal.rollnumber = stuacademic.rollnumber and branch ='Electronics & communication'") or die(mysql_error());

	$array[2] = mysql_fetch_row($eceTopper);

	$meTopper = mysql_query("select  max(stuacademic.aggregate)  from stupersonal inner join stuacademic  where stupersonal.rollnumber = stuacademic.rollnumber and branch ='Mechanical' ") or die(mysql_error());

	$array[3] = mysql_fetch_row($meTopper);

	$civilTopper = mysql_query("select  max(stuacademic.aggregate)  from stupersonal inner join stuacademic  where stupersonal.rollnumber = stuacademic.rollnumber and branch =  'Civil' ") or die(mysql_error());

	$array[4] = mysql_fetch_row($civilTopper);

	echo json_encode($array);


?>