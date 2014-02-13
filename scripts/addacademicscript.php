<?php
include_once("../includes/connection.php");
$rollnumber = $_POST['rollnumber'];
$ten = $_POST['ten'];
$twelve= $_POST['twelve'];
$semone= $_POST['semone'];
$semtwo= $_POST['semtwo'];
$semthree= $_POST['semthree'];
$semfour= $_POST['semfour'];
$semfive= $_POST['semfive'];
$semsix= $_POST['semsix'];
$semseven= $_POST['semseven'];
$semeight= $_POST['semeight'];


include("../includes/functions.php");


$aggregate = aggregate($semone,$semtwo,$semthree,$semfour,$semfive,$semsix,$semseven,$semeight);

$queryrollnumber = mysql_query("select rollnumber from stuacademic where rollnumber = '$rollnumber'")  or die(mysql_error());

$numberofrow = mysql_num_rows($queryrollnumber);
if($numberofrow == 0 && !empty($rollnumber)) {
	$query = mysql_query("insert into stuacademic (rollnumber,ten,twelve,semone,semtwo,semthree,semfour,semfive,semsix,semseven,semeight,aggregate) values ('$rollnumber','$ten','$twelve','$semone','$semtwo','$semthree','$semfour','$semfive','$semsix','$semseven','$semeight','$aggregate')");

	if($query){
		echo "Record Successfully inserted";
	}
	else{
	echo "There is something Wrong!";
	}

}
else{
	echo 'Please update Record from EDIT option';
}




?>