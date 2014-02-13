<?php
	session_start();
	include("../includes/connection.php");
	date_default_timezone_set("Asia/Kolkata");
	$date = date('d/m/Y h:i:s a', time());

	$email = mysql_real_escape_string(htmlentities($_POST['email']));

	$password =mysql_real_escape_string(htmlentities(md5($_POST['password'])));

	if(!empty($email) && !empty($password)){
		$query = mysql_query("select * from login where email='$email' and password='$password' LIMIT 1") or die(mysql_error());

		if($query){

			$numberofrow = mysql_num_rows($query);

			if($numberofrow == 1){

				$_SESSION['email'] = $email;

				
				$update = mysql_query("update login set logintime= '$date' where email='$email'") or die(mysql_error());
				echo 'ok';

			}else{

				echo 'Invalid Email or Password';
			}
		}
	}else{

		echo 'Fill Username and Password';
	}

	