

<?php
	include("../includes/connection.php");

	$from = $_POST['from'];
	
	$to = $_POST['to'];
	
	date_default_timezone_set("Asia/kolkata");
	if(!empty($from) && !empty($to)){

		$sql= mysql_query("SELECT name,course, enrollnumber,stupersonal.rollnumber,branch,admissiondate,email,mobile,dob,gender,address,stupersonal.city, fathername,fathermobile,mothername,mothermobile,fatheroccupation,fathersalary,motheroccupation,mothersalary ,permanentaddress,stuparent.city,state,ten,twelve,semone,semtwo, semthree,semfour,semfive,semsix ,semseven,semeight FROM stupersonal LEFT JOIN stuparent on stuparent.sturollnumber = stupersonal.rollnumber LEFT JOIN stuacademic on stupersonal.rollnumber =stuacademic.rollnumber where stupersonal.rollnumber between '$from' AND '$to' ORDER BY stupersonal.rollnumber") or die(mysql_error());


	}else{
		//$sql= mysql_query("SELECT name,course, enrollnumber,rollnumber,branch,admissiondate,email,mobile,dob,gender,address,stupersonal.city,fathername,mothername,stuparent.city FROM stupersonal, stuparent where (select distinct(rollnumber) from stupersonal INNER JOIN stuparent)") or die(mysql_error());
		$sql= mysql_query("SELECT name,course, enrollnumber,stupersonal.rollnumber,branch,admissiondate,email,mobile,dob,gender,address,stupersonal.city, fathername,fathermobile,mothername,mothermobile,fatheroccupation,fathersalary,motheroccupation,mothersalary ,permanentaddress,stuparent.city,state,ten,twelve,semone,semtwo, semthree,semfour,semfive,semsix ,semseven,semeight FROM stupersonal LEFT JOIN stuparent on stuparent.sturollnumber = stupersonal.rollnumber LEFT JOIN stuacademic on stupersonal.rollnumber =stuacademic.rollnumber ORDER BY stupersonal.rollnumber") or die(mysql_error());

	}
		$filename = '../uploads/'.strtotime("now").'.csv';
		//echo $filename;
		$fp = fopen($filename,"w");
		
		$row = mysql_fetch_assoc($sql);

		$seperator = "";
		$comma = "";
		foreach ($row as $name => $value) {
			
			$seperator .= $comma .''.str_replace('','""',$name);
			
			$comma = ',';
		}
		$seperator .= "\n";
		

		fputs($fp,$seperator);

		mysql_data_seek($sql, 0);//omit the first row

		while($row = mysql_fetch_assoc($sql)){

			$seperator = "";
			$comma = "";

			foreach ($row as $name => $value) {
				
				$seperator .= $comma .''.str_replace('','""',$value);
				$comma = ',';
			}
			$seperator .= "\n";
			fputs($fp,$seperator);
			
		}
			


		
		fclose($fp);
		echo $filename;
		
	
?>
