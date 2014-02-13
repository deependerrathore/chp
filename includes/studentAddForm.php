<form method="post" name="studentadd" class="form-inline" >
	<fieldset>
    <legend>Student Personal Information</legend>
    	<table>
        <tr>
        	<td><label for="student">Name</label>
        		<input type="text" maxlength="50"  required id="name" pattern="[A-Za-z ]+" placeholder="Required" name="name" />
            </td>
            <td><label for="student">Course</label>
        		<select id="course" class="selectpicker">
                	<option value="B.Tech">B.Tech</option>
                    <option value="M.Tech">M.Tech</option>
                    <option value="MBA">MBA</option>
                    <option value="Parma">Parma</option>
                    <option value="Hotel Management">Hotel Management</option>
                </select>
            	
            </td>
        </tr>
        
        <tr>
        	<td> <label for="student">Enrollnumber</label>
        		<input type="text" id="enrollnumber" />
            </td>
            <td><label for="student">Rollnumber</label>
       			<input type="text" required id="rollnumber" placeholder="Required" />
            </td>
        </tr>
        
        <tr>
        	<td> 
            	<label for="student">Email</label>
        		<input type="email" id="email" />
            </td>
            <td><label for="student">Mobile</label>
        		<input type="text" maxlength="10"  id="mobile" pattern="[0-9]{10}" />
            </td>
        </tr>
        
        <tr>
        	<td><label for="student">Branch</label>
            <select id="branch" class="selectpicker">
            	<optgroup label="B.Tech">
            	<option  >Branch</option>
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
            <td><label for="student">Addmission Date</label>
        		<input type="text" id="admissiondate" />
           </td>
        </tr>
        
        <tr>
            <td><label for="student">DOB</label>
        	   <input type="text" id="dob"/>
            </td>
            <td><label for="student">Gender</label>
        		<input type="radio" value="MALE" name="gender" id="gender" checked="checked" />Male
                <input type="radio" value="FEMALE" name="gender" id="gender" />Female
           </td>
        </tr>
        
         <tr>
        	<td>
             	<label for="student">Address</label>
        		<textarea type="text" id="address"></textarea>
            </td>
            <td><label for="student">City</label>
        		<input type="text" id="city" />
            </td>
        </tr>
        <tr>
        	<td style="padding:20px;">
        	<label></label>
        	<input type="submit" value="submit" onclick="studentsubmitform(); return false;" class="btn btn-primary"/>
        	</td>
       		<td></td>
       </tr>
        </table>
        
        
    </fieldset>
</form>
