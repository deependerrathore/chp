<?php
	session_start();
	require("../includes/connection.php");

	$email = mysql_real_escape_string($_SESSION['email']);
	$subject = mysql_real_escape_string(ucfirst($_POST['subject']));
	$message = mysql_real_escape_string(ucfirst($_POST['message']));

	$getname = mysql_query("select name from login where email='$email'") or die(mysql_error());
	
	$rowname = mysql_fetch_assoc($getname);

	$name= $rowname['name'];
	

	date_default_timezone_set("Asia/Kolkata");
	$date = date('d/m/Y h:i:s a', time());

	if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
		$query = mysql_query("insert into recentpost (sendername , senderemail ,subject,message,dateposted) values ('$name','$email','$subject','$message','$date')") or die(mysql_error());
		echo 'Message successfully submitted';
	}else{

		echo 'please fill all the information';
	}
	


?>