<?php

	require("../includes/connection.php");
	$name = mysql_real_escape_string(ucwords($_POST['name']));
	$email = mysql_real_escape_string($_POST['email']);
	$phonenumber = mysql_real_escape_string($_POST['phonenumber']);
	

	

	if(!empty($name) && !empty($email) && !empty($phonenumber)){
		$query = mysql_query("insert into phonebook (name , email ,phonenumber) values ('$name','$email','$phonenumber')") or die(mysql_error());
		echo 'Phonenumber successfully Inserted';
	}else{

		echo 'please fill all the information';
	}
	


?>