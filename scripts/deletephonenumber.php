<?php
	include('../includes/connection.php');
	$email = mysql_real_escape_string($_POST['email']);

	
	if(!empty($email)){
		$query = mysql_query("delete from phonebook where email = '$email'") or die(mysql_error());
	}
	

	

	if($query){
		echo 'Phone number Sucessfully Deleted';
	}else{
		echo 'There is something wrong';
	}
?>