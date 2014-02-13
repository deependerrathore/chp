<?php
	session_start();

	include("../includes/connection.php");
	$name =  mysql_real_escape_string(htmlentities($_POST['name']));
	$email = $_SESSION['email'];
	$subject =  mysql_real_escape_string(htmlentities($_POST['subject']));// subject
	$querymessage = mysql_real_escape_string(htmlentities($_POST['query']));
	

	$query = mysql_query("insert into contactus values ('','$name','$email','$subject','$querymessage')") or die(mysql_error());

	if($query){
		echo '</h5>Message successfully deliverd</h5>';
	}else{
		echo 'There is something wrong!';
	}
	// multiple recipients
	$to  = 'deepenrathore28@gmail.com'; // note the comma
	$to .= ','.'deepak.republic@gmial.com';

	
	

// message
$message = '
<html>
<head>
  <title>Query From maietinfo</title>
</head>
<body>
	<img src="../img/logo.jpg" alt="this is maietinfo logo" />
	<h3>This is the query message from : '.$name.' and email : ' .$email.'</h3>
	<h3>This is the subject : '.$subject.'<hr><br>
  	<h3>This is the query : '. $querymessage . '</h3>
  
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type:text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'To: Deepak <deepak.rpeublic@htomail.com>, Deepender rathore <deepak.republic@yahoo.in>' . "\r\n";
$headers .= 'From: Maietinfo Query manager <maietinfo@tk.com>' . "\r\n";
//$headers .= 'Cc: deepenrathore@outlook.com' . "\r\n";
//$headers .= 'Bcc: deepenrathore28@gmail.com' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);


?>