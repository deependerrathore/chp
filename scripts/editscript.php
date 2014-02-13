<?php 
	
	include("../includes/connection.php");

	@$name= strtoupper($_POST['name']);
	@$course= strtoupper($_POST['course']);
	@$enrollnumber= strtoupper($_POST['enrollnumber']);
	@$rollnumber= strtoupper($_POST['rollnumber']);
	@$email= $_POST['email'];
	@$mobile= $_POST['mobile'];
	@$branch= strtoupper($_POST['branch']);
	@$admissiondate= $_POST['admissiondate'];
	@$dob= $_POST['dob'];
	@$gender= $_POST['gender'];
	@$address= $_POST['address'];
	@$city= $_POST['city'];

	@$query = mysql_query("update stupersonal set
		name = '$name',
		course = '$course',
		enrollnumber = '$enrollnumber',
		email= '$email',
		mobile= '$mobile',
		branch ='$branch',
		admissiondate = '$admissiondate',
		dob = '$dob',
		gender = '$gender',
		address = '$address',
		city = '$city'
		where rollnumber = '$rollnumber' ") or die(mysql_error());

	if($query){
		echo 'Student Detail Updated '. '</br>';
	}
	else{
		echo 'Something Wrong!!!!:Student detail </br>';
	}

	
	@$fathername = strtoupper($_POST['fathername']);
	@$fathersalary = $_POST['fathersalary'];
	@$fatheroccupation = $_POST['fatheroccupation'];
	@$mothername = strtoupper($_POST['mothername']);
	@$motheroccupation = strtoupper($_POST['motheroccupation']);
	@$mothersalary = $_POST['mothersalary'];
	@$fathermobile = $_POST['fathermobile'];
	@$mothermobile = $_POST['mothermobile'];
	@$permanentaddress = strtoupper($_POST['permanentaddress']);
	@$parentcity = strtoupper($_POST['parentcity']);
	@$state = strtoupper($_POST['state']);


	@$testparentrow = mysql_query("select sturollnumber from stuparent where sturollnumber = '$rollnumber'");
	if(mysql_num_rows($testparentrow) == 0 ){
		@$query1 = mysql_query("insert into stuparent (sturollnumber,fathername,fatheroccupation,fathersalary,mothername,motheroccupation,mothersalary,fathermobile,mothermobile,permanentaddress,city,state) values ('$rollnumber','$fathername','$fatheroccupation','$fathersalary','$mothername','$motheroccupation','$mothersalary','$fathermobile','$mothermobile','$permanentaddress','$city','$state')") ;
	}else{
		@$query1 = mysql_query("update stuparent set
		fathername = '$fathername',
		fatheroccupation = '$fatheroccupation',
		fathersalary = '$fathersalary',
		mothername = '$mothername',
		motheroccupation= '$motheroccupation',
		mothersalary ='$mothersalary',
		fathermobile = '$fathermobile',
		mothermobile = '$mothermobile',
		permanentaddress = '$permanentaddress',
		city = '$parentcity',
		state = '$state'
		where sturollnumber = '$rollnumber' ") or die(mysql_error());

	}
	if($query1){
		echo 'Parent Detail Updated </br>';
	}else{
		echo 'Something Wrong:Parent detail';
	}
	 	

	

	
	@$ten = $_POST['ten'];
	@$twelve= $_POST['twelve'];
	@$semone= $_POST['semone'];
	@$semtwo= $_POST['semtwo'];
	@$semthree= $_POST['semthree'];
	@$semfour= $_POST['semfour'];
	@$semfive= $_POST['semfive'];
	@$semsix= $_POST['semsix'];
	@$semseven= $_POST['semseven'];
	@$semeight= $_POST['semeight'];

	include("../includes/functions.php");//for calculation aggreagate


	$aggregate = aggregate($semone,$semtwo,$semthree,$semfour,$semfive,$semsix,$semseven,$semeight);
	
	@$testrow = mysql_query("select rollnumber from stuacademic where rollnumber = '$rollnumber'");
	
	
	if(mysql_num_rows($testrow) == 0 ){
		
		@$query2 = mysql_query("insert into stuacademic (rollnumber,ten,twelve,semone,semtwo,semthree,semfour,semfive,semsix,semseven,semeight,aggregate) values ('$rollnumber','$ten','$twelve','$semone','$semtwo','$semthree','$semfour','$semfive','$semsix','$semseven','$semeight','$aggregate')");
		
	}
	else{
		@$query2 = mysql_query("update stuacademic set
		ten = '$ten',
		twelve = '$twelve',
		semone = '$semone',
		semtwo= '$semtwo',
		semthree= '$semthree',
		semfour ='$semfour',
		semfive = '$semfive',
		semsix = '$semsix',
		semseven = '$semseven',
		semeight = '$semeight',
		aggregate = '$aggregate'
		where rollnumber = '$rollnumber'") or die(mysql_error());
		
		

	}
	if($query2){
		echo 'Academic Detail Updated </br>';
	}else{
		echo 'Something Wrong:Academic detail';
	}
	
		
?>