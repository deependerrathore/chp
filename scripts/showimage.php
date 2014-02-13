<?php

	include("../includes/connection.php");

	if(isset($_GET['rollnumber'])){
		$rollnumber = mysql_real_escape_string($_GET['rollnumber']);

		$query = mysql_query("select imagename from stupersonal where rollnumber='$rollnumber'  AND imagename <> '0'");

		if(mysql_num_rows($query) == 1 ){
			$query1 = mysql_query("select image from stupersonal where rollnumber = '$rollnumber' ");
			while($row = mysql_fetch_assoc($query1)){
			$imageData = $row['image'];
			}
			header("content-type: image/jpeg");
			echo $imageData;

		}else{
			echo "No image found";
		}

		

		

	}
?>