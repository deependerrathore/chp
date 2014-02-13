<?php
include_once("../includes/connection.php");
$rollnumber = strtoupper($_POST['rollnumber']);
$fathername = strtoupper($_POST['fathername']);
$fatheroccupation = strtoupper($_POST['fatheroccupation']);
$fathersalary = $_POST['fathersalary'];
$mothername = strtoupper($_POST['mothername']);
$motheroccupation = strtoupper($_POST['motheroccupation']);
$mothersalary = $_POST['mothersalary'];
$fathermobile = $_POST['fathermobile'];
$mothermobile = $_POST['mothermobile'];
$permanentaddress = strtoupper($_POST['permanentaddress']);
$city = strtoupper($_POST['city']);
$state = strtoupper($_POST['state']);

$testrow = mysql_query("select sturollnumber from stuparent where sturollnumber = '$rollnumber'");
	if(!empty($rollnumber)){
		if(mysql_num_rows($testrow) == 0 ){
		
		mysql_query("insert into stuparent (sturollnumber,fathername,fatheroccupation,fathersalary,mothername,motheroccupation,mothersalary,fathermobile,mothermobile,permanentaddress,city,state) values ('$rollnumber','$fathername','$fatheroccupation','$fathersalary','$mothername','$motheroccupation','$mothersalary','$fathermobile','$mothermobile','$permanentaddress','$city','$state')") ;
		echo "Record successfully inserted.";
		}
		else{
		echo 'Record already Exits.Please Update Record';
		}

	}else{
		echo 'Please Enter some detail';

	}
	

?>