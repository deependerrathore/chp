<?php 
	include("../includes/connection.php");
	$array = array();

	$query = mysql_query("select count(*) from stuacademic where aggregate between 90 AND 100") or die(mysql_error());
	$array[0] = mysql_fetch_row($query);

	$query1 = mysql_query("select count(*) from stuacademic where aggregate between 80 AND 89") or die(mysql_error());
	$array[1] = mysql_fetch_row($query1);

	$query2 = mysql_query("select count(*) from stuacademic where aggregate between 70 AND 79") or die(mysql_error());
	$array[2] = mysql_fetch_row($query2);

	$query3 = mysql_query("select count(*) from stuacademic where aggregate between 60 AND 69") or die(mysql_error());
	$array[3] = mysql_fetch_row($query3);

	$query4 = mysql_query("select count(*) from stuacademic where aggregate between 50 AND 59") or die(mysql_error());
	$array[4] = mysql_fetch_row($query4);

	$query5 = mysql_query("select count(*) from stuacademic where aggregate between 40 AND 49") or die(mysql_error());
	$array[5] = mysql_fetch_row($query5);

	$query6 = mysql_query("select count(*) from stuacademic where aggregate between 30 AND 39") or die(mysql_error());
	$array[6] = mysql_fetch_row($query6);

	$query7 = mysql_query("select count(*) from stuacademic where aggregate between 20 AND 29") or die(mysql_error());
	$array[7] = mysql_fetch_row($query7);

	$query8 = mysql_query("select count(*) from stuacademic where aggregate between 10 AND 19") or die(mysql_error());
	$array[8] = mysql_fetch_row($query8);

	$query9 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 90 AND 100");
	$array[9] = mysql_fetch_row($query9);
	$query10 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 80 AND 89");
	$array[10] = mysql_fetch_row($query10);
	$query11 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 70 AND 79");
	$array[11] = mysql_fetch_row($query11);
	$query12 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 60 AND 69");
	$array[12] = mysql_fetch_row($query12);
	$query13 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 50 AND 59");
	$array[13] = mysql_fetch_row($query13);
	$query14 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 40 AND 49");
	$array[14] = mysql_fetch_row($query14);
	$query15 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 30 AND 39");
	$array[15] = mysql_fetch_row($query15);
	$query16 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 40 AND 49");
	$array[16] = mysql_fetch_row($query16);
	$query17 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'information technology' And aggregate between 40 AND 49");
	$array[17] = mysql_fetch_row($query17);

	$query18 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 90 AND 100");
	$array[18] = mysql_fetch_row($query18);
	$query19 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 80 AND 89");
	$array[19] = mysql_fetch_row($query19);
	$query20 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 70 AND 79");
	$array[20] = mysql_fetch_row($query20);
	$query21 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 60 AND 69");
	$array[21] = mysql_fetch_row($query21);
	$query22 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 50 AND 59");
	$array[22] = mysql_fetch_row($query22);
	$query23 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 40 AND 49");
	$array[23] = mysql_fetch_row($query23);
	$query24 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 30 AND 39");
	$array[24] = mysql_fetch_row($query24);
	$query25 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 40 AND 49");
	$array[25] = mysql_fetch_row($query25);
	$query26 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'computer science' And aggregate between 40 AND 49");
	$array[26] = mysql_fetch_row($query26);

	$query27 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 90 AND 100");
	$array[27] = mysql_fetch_row($query27);
	$query28 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 80 AND 89");
	$array[28] = mysql_fetch_row($query28);
	$query29 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 70 AND 79");
	$array[29] = mysql_fetch_row($query29);
	$query30 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 60 AND 69");
	$array[30] = mysql_fetch_row($query30);
	$query31 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 50 AND 59");
	$array[31] = mysql_fetch_row($query31);
	$query32 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 40 AND 49");
	$array[32] = mysql_fetch_row($query32);
	$query33 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 30 AND 39");
	$array[33] = mysql_fetch_row($query33);
	$query34 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 40 AND 49");
	$array[34] = mysql_fetch_row($query34);
	$query35 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Electronics & communication' And aggregate between 40 AND 49");
	$array[35] = mysql_fetch_row($query35);

	$query36 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 90 AND 100");
	$array[36] = mysql_fetch_row($query36);
	$query37 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 80 AND 89");
	$array[37] = mysql_fetch_row($query37);
	$query38 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 70 AND 79");
	$array[38] = mysql_fetch_row($query38);
	$query39 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 60 AND 69");
	$array[39] = mysql_fetch_row($query39);
	$query40 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 50 AND 59");
	$array[40] = mysql_fetch_row($query40);
	$query41 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 40 AND 49");
	$array[41] = mysql_fetch_row($query41);
	$query42 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 30 AND 39");
	$array[42] = mysql_fetch_row($query42);
	$query43 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 40 AND 49");
	$array[43] = mysql_fetch_row($query43);
	$query44 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Mechanical' And aggregate between 40 AND 49");
	$array[44] = mysql_fetch_row($query44);

	$query45 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 90 AND 100");
	$array[45] = mysql_fetch_row($query45);
	$query46 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 80 AND 89");
	$array[46] = mysql_fetch_row($query46);
	$query47 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 70 AND 79");
	$array[47] = mysql_fetch_row($query47);
	$query48 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 60 AND 69");
	$array[48] = mysql_fetch_row($query48);
	$query49 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 50 AND 59");
	$array[49] = mysql_fetch_row($query49);
	$query50 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 40 AND 49");
	$array[50] = mysql_fetch_row($query50);
	$query51 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 30 AND 39");
	$array[51] = mysql_fetch_row($query51);
	$query52 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 40 AND 49");
	$array[52] = mysql_fetch_row($query52);
	$query53 = mysql_query("select count(*) from stuacademic inner join stupersonal where stupersonal.rollnumber = stuacademic.rollnumber and branch= 'Civil' And aggregate between 40 AND 49");
	$array[53] = mysql_fetch_row($query53);

	

	echo json_encode($array);

?>