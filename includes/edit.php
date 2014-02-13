<?php 
	include("../includes/connection.php");
	@$rollnumber = $_POST['rollnumber'];

	$query = mysql_query("Select * from stupersonal where rollnumber='$rollnumber'") or die(mysql_error());
	$query1 = mysql_query("Select * from stuparent where sturollnumber='$rollnumber'") or die(mysql_error());
	$query2 = mysql_query("Select * from stuacademic where rollnumber='$rollnumber'") or die(mysql_error());
	
	$row = mysql_fetch_assoc($query);
	$row1= mysql_fetch_assoc($query1);
	$row2 = mysql_fetch_assoc($query2);
 
?>
<table id="css_showfulldetail" >
	<fieldset>
    <legend>Student Detail</legend>
	<tr>
      <td class="span2"><label>Name ::</label></td>
      <td class="span4"><input type="text" id="name" value="<?php echo $row['name']?>" /></td>
      <td class="span2 bold"><label>Course ::</label></td>
      <td class="span4"><input type="text" id="course" value="<?php echo $row['course']?>" /></td>
    </tr>
    <tr>
      <td><label>Roll Number ::</label></td>
      <td><input type="text" id="rollnumber" value="<?php echo $row['rollnumber']?>"  disabled/></td>
      <td><label>Enrollment Number ::</label></td>
      <td><input type="text" id="enrollnumber" value="<?php echo $row['enrollnumber']?>" /></td>
    </tr>
    <tr>
      <td><label>Branch ::</label></td>
      <td>
          <select id="branch" class="selectpicker">
              <optgroup label="B.Tech">
              <option  ><?php echo $row['branch']?></option>
              <option value="Information technology" >Information Technology</option>
                <option value="Computer Science" >Computer Science</option>
                <option value="Electronics & communication">Electronics & Communication</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Civil">Civil</option>
                </optgroup>
                <optgroup label="MBA">
            <option value="Finance">Finance</option>
            <option value="Business Management">Business management</option>
            <option value="Marketing">Marketing</option>
          </optgroup>
            </select>
      </td>
      <td><label>Admission Date ::</label></td>
      <td><input type="text" id="admissiondate" value="<?php echo $row['admissiondate']?>" /></td>
    </tr>
    <tr>
      <td><label>Email ::</label></td>
      <td><input type="text" id="email" value="<?php echo $row['email']?>" /></td>
      <td><label>Mobile ::</label></td>
      <td><input type="text" id="mobile" value="<?php echo $row['mobile']?>" /></td>
    </tr>
    <tr>
      <td><label>DOB ::</label></td>
      <td><input type="text" id="dob" value="<?php echo $row['dob']?>" /></td>
      <td><label>Gender ::</label></td>
      <td><input type="text" id="gender" value="<?php echo $row['gender']?>" /> (MALE/FEMALE)</td>
    </tr>
     <tr>
      <td><label>Address ::</label></td>
      <td><textarea  id="address"><?php echo $row['address']?> </textarea> </td>
      <td><label>City ::</label></td>
      <td><input type="text" id="city" value="<?php echo $row['city']?>" /></td>
    </tr>
    
    </fieldset>

    
    
</table>

<table id="css_showfulldetail">
  <fieldset>
    <legend>Upload Student Photo</legend>
    <tr>
      <td class="span2" ><label>Upload Image::</label></td>
      <td colspan="4" class="span6"><form method="POST" action="dashboard.php" enctype="multipart/form-data" ><input class="btn" type="file" name="image" /><input type="hidden" name="rollnum" value="<?php echo $row['rollnumber'];?>" />
      <br/><input type="submit" class="btn" value="Upload" name="submitimage"></form></td>
      
    </tr>
  </fieldset>
</table>

<table id="css_showfulldetail">
	<fieldset>
    <legend>Academic Detail</legend>
	<tr>
      <td class="span2"><label>10th ::</label></td>
      <td class="span4"><input id="ten" type="text" value="<?php echo $row2['ten'] ; ?>" /></td>
      <td class="span2 bold"><label>12th ::</label></td>
      <td class="span4"><input id="twelve" type="text" value="<?php echo $row2['twelve']; ?>" /></td>
    </tr>
    <tr>
      <td><label>1nd Semester ::</label></td>
      <td><input id="semone" type="text" value="<?php echo $row2['semone']; ?>" /></td>
      <td><label>2nd Semester ::</label></td>
      <td><input id="semtwo" type="text" value="<?php echo $row2['semtwo']; ?>" /></td>
    </tr>
    <tr>
      <td><label>3rd Semester ::</label></td>
      <td><input id="semthree" type="text" value="<?php echo $row2['semthree'];?>" /></td>
      <td><label>4th Semester ::</label></td>
      <td><input  id="semfour" type="text" value="<?php echo $row2['semfour'] ;?>" /></td>
    </tr>
    <tr>
      <td><label>5th Semester ::</label></td>
      <td><input id="semfive" type="text" value="<?php echo $row2['semfive'] ;?>" /></td>
      <td><label>6th Semester ::</label></td>
      <td><input id="semsix" type="text" value="<?php echo $row2['semsix'] ;?>" /></td>
    </tr>
    <tr>
      <td><label>7th Semester ::</label></td>
      <td><input id="semseven" type="text" value="<?php echo $row2['semseven'];?>" /></td>
      <td><label>8th Semester ::</label></td>
      <td><input id="semeight" type="text" value="<?php echo $row2['semeight'] ;?>" /></td>
    </tr>
     <tr>
      <td><label>Aggregate ::</label></td>
      <td><input id="aggregate" type="text" value="<?php echo $row2['aggregate'] ;?>"  disabled/></td>
      
    </tr>
    </fieldset>
    
    
</table>
<table id="css_showfulldetail" >
	<fieldset>
    <legend>Parent Detail</legend>
	<tr>
      <td class="span2"><label>Father Name ::</label></td>
      <td class="span4"><input id="fathername" type="text" value="<?php echo $row1['fathername'];?>" /></td>
      <td class="span2 bold"><label>Father Occupation ::</label></td>
      <td class="span4"><input id="fatheroccupation" type="text" value="<?php echo $row1['fatheroccupation'] ; ?>" /></td>
    </tr>
    <tr>
      <td><label>Father Salary ::</label></td>
      <td><input id="fathersalary" type="text" value="<?php echo $row1['fathersalary']; ?>" /></td>
      <td><label>Mother Name ::</label></td>
      <td><input id="mothername" type="text" value="<?php echo $row1['mothername'] ; ?>" /></td>
    </tr>
    <tr>
      <td><label>Mother Occupation ::</label></td>
      <td><input id="motheroccupation" type="text" value="<?php echo $row1['motheroccupation'] ;?>" /></td>
      <td><label>Mother Salary ::</label></td>
      <td><input id="mothersalary" type="text" value="<?php echo $row1['mothersalary']."" ;?>" /></td>
    </tr>
    <tr>
      <td><label>Father Mobile ::</label></td>
      <td><input  id="fathermobile"  type="text" value="<?php echo $row1['fathermobile'] ;?>" /></td>
      <td><label>Mother Mobile ::</label></td>
      <td><input id="mothermobile"  type="text" value="<?php echo $row1['mothermobile'] ;?>" /></td>
    </tr>
    <tr>
      <td><label>Permanent Address ::</label></td>
      <td><textarea  id="permanentaddress" ><?php echo $row1['permanentaddress'] ;?></textarea> </td>
      <td><label>City ::</label></td>
      <td><input  id="parentcity"  type="text" value="<?php echo $row1['city'] ;?>" /></td>
    </tr>
     <tr>
      <td><label>State ::</label></td>
      <td><select id="state" class="selectpicker">
                	<option><?php echo $row1['state'] ;?></option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Pondicherry">Pondicherry</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
              </select>
        </td>
      
      
    </tr>
    </fieldset>

    
    
</table>
<div class="submitButton"><input type="submit" onclick="submitedit();" value="Submit" class="btn btn-primary"  /></div>


