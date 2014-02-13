<?php
	require('../includes/connection.php');
	$name= strtoupper($_POST['name']);
	$course= strtoupper($_POST['course']);
	$enrollnumber= strtoupper($_POST['enrollnumber']);
	$rollnumber= strtoupper($_POST['rollnumber']);
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$branch= strtoupper($_POST['branch']);
	$admissiondate= $_POST['admissiondate'];
	$dob= $_POST['dob'];
	$gender= $_POST['gender'];
	$address= $_POST['address'];
	$city= $_POST['city'];
	
	
	
	
	
	
	
	$query = mysql_query("insert into stupersonal (name,course,enrollnumber,rollnumber,email,mobile,branch,admissiondate,dob,gender,address,city) value ('$name','$course','$enrollnumber','$rollnumber','$email','$mobile','$branch','$admissiondate','$dob','$gender','$address','$city')");
	if($query){
		echo "Record sucessfully Inserted.";
	}else{
		echo "There is something wrong!";}

	
	
	
	
?>