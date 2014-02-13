<?php /*?>This file is called from 
function showfulldetail(param){}
param = rollnumber ;<?php */?>



<?php
	$rollnumber = $_POST['rollnumber'];
	
	include('../includes/connection.php');
	
	$query = mysql_query("Select * from stupersonal where rollnumber='$rollnumber'") or die(mysql_error());
	$query1 = mysql_query("Select * from stuparent where sturollnumber='$rollnumber'") or die(mysql_error());
	$query2 = mysql_query("Select * from stuacademic where rollnumber='$rollnumber'") or die(mysql_error());
	
	$row = mysql_fetch_assoc($query);
	$row1= mysql_fetch_assoc($query1);
	$row2 = mysql_fetch_assoc($query2);
  

  

?>
<table id="css_showfulldetail" class="table table-bordered ">
	<fieldset>
    <legend>Student Detail</legend>
    <tr>
      
      
      <td class="span2 bold"><label>Student Photo ::</label></td>
      <td class="span4"><img src="scripts/showimage.php?rollnumber=<?php echo $rollnumber;?>"  class="img-polaroid" width="100" height="100 " /></td>
      
    </tr>
	<tr>
      <td class="span2"><label>Name ::</label></td>
      <td class="span4"><?php echo $row['name']?></td>
      <td class="span2 bold"><label>Course ::</label></td>
      <td class="span4"><?php echo $row['course']?></td>
    </tr>
    <tr>
      <td><label>Roll Number ::</label></td>
      <td><?php echo $row['rollnumber']?></td>
      <td><label>Enrollment Number ::</label></td>
      <td><?php echo $row['enrollnumber']?></td>
    </tr>
    <tr>
      <td><label>Branch ::</label></td>
      <td><?php echo $row['branch']?></td>
      <td><label>Admission Date ::</label></td>
      <td><?php echo $row['admissiondate']?></td>
    </tr>
    <tr>
      <td><label>Email ::</label></td>
      <td><?php echo $row['email']?></td>
      <td><label>Mobile ::</label></td>
      <td><?php echo $row['mobile']?></td>
    </tr>
    <tr>
      <td><label>DOB ::</label></td>
      <td><?php echo $row['dob']?></td>
      <td><label>Gender ::</label></td>
      <td><?php echo $row['gender']?></td>
    </tr>
     <tr>
      <td><label>Address ::</label></td>
      <td><?php echo $row['address']?></td>
      <td><label>City ::</label></td>
      <td><?php echo $row['city']?></td>
    </tr>
     
    </fieldset>
    
    
</table>

<table id="css_showfulldetail" class="table table-bordered ">
	<fieldset>
    <legend>Academic Detail</legend>
	<tr>
      <td class="span2"><label>10th ::</label></td>
      <td class="span4"><?php echo $row2['ten'] ;?></td>
      <td class="span2 bold"><label>12th ::</label></td>
      <td class="span4"><?php echo $row2['twelve']; ?></td>
    </tr>
    <tr>
      <td><label>1nd Semester ::</label></td>
      <td><?php echo $row2['semone']; ?></td>
      <td><label>2nd Semester ::</label></td>
      <td><?php echo $row2['semtwo'] ; ?></td>
    </tr>
    <tr>
      <td><label>3rd Semester ::</label></td>
      <td><?php echo $row2['semthree'] ;?></td>
      <td><label>4th Semester ::</label></td>
      <td><?php echo $row2['semfour'] ;?></td>
    </tr>
    <tr>
      <td><label>5th Semester ::</label></td>
      <td><?php echo $row2['semfive'] ;?></td>
      <td><label>6th Semester ::</label></td>
      <td><?php echo $row2['semsix'] ;?></td>
    </tr>
    <tr>
      <td><label>7th Semester ::</label></td>
      <td><?php echo $row2['semseven'] ;?></td>
      <td><label>8th Semester ::</label></td>
      <td><?php echo $row2['semeight'] ;?></td>
    </tr>
     <tr>
      <td><label>Aggregate ::</label></td>
      <td><?php echo $row2['aggregate'] ;?></td>
      
    </tr>
    </fieldset>
    
    
</table>
<table id="css_showfulldetail" class="table table-bordered ">
	<fieldset>
    <legend>Parent Detail</legend>
	<tr>
      <td class="span2"><label>Father Name ::</label></td>
      <td class="span4"><?php echo $row1['fathername'];?></td>
      <td class="span2 bold"><label>Father Occupation ::</label></td>
      <td class="span4"><?php echo $row1['fatheroccupation'] ; ?></td>
    </tr>
    <tr>
      <td><label>Father Salary ::</label></td>
      <td><?php echo $row1['fathersalary']; ?></td>
      <td><label>Mother Name ::</label></td>
      <td><?php echo $row1['mothername'] ; ?></td>
    </tr>
    <tr>
      <td><label>Mother Occupation ::</label></td>
      <td><?php echo $row1['motheroccupation'] ;?></td>
      <td><label>Mother Salary ::</label></td>
      <td><?php echo $row1['mothersalary']."" ;?></td>
    </tr>
    <tr>
      <td><label>Father Mobile ::</label></td>
      <td><?php echo $row1['fathermobile'] ;?></td>
      <td><label>Mother Mobile ::</label></td>
      <td><?php echo $row1['mothermobile'] ;?></td>
    </tr>
    <tr>
      <td><label>Permanent Address ::</label></td>
      <td><?php echo $row1['permanentaddress'] ;?></td>
      <td><label>City ::</label></td>
      <td><?php echo $row1['city'] ;?></td>
    </tr>
     <tr>
      <td><label>State ::</label></td>
      <td><?php echo $row1['state'] ;?></td>
      
    </tr>
    </fieldset>
    
    
</table>
