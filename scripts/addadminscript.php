<?php
	include("../includes/connection.php");
	$name = mysql_real_escape_string(ucwords($_POST['name']));
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string(md5($_POST['password']));

	

	$check = mysql_query("select * from login where email='$email' ") or die(mysql_error());

	$numberofrow = mysql_num_rows($check);
	if($numberofrow == 0 ){
		$query = mysql_query("insert into login (name,email,password) values ('$name','$email','$password')") or die("There is Something Wrong");
		if($query){
		echo "Record successfully inserted";
		}
	}else{
		echo "User already exits";
	}
	
	
?>