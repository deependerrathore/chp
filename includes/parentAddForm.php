<form method="post" class="form-inline" >
	<fieldset>
    <legend>Parent Information</legend>
    	<table>
        <tr>
        	<td><label for="parent">Student Roll Number</label>
        		<input type="text" id="rollnumber" placeholder="Can be FILLED only once" required  />
            </td>
            <td><label for="parent">Father Name</label>
        		<input type="text" id="fathername" />
            	
            </td>
        </tr>
        
        <tr>
        	<td> <label for="parent">Father Occupation</label>
        		<input type="text" id="fatheroccupation" />
            </td>
            <td><label for="parent">Father Salary</label>
       			<input type="text" id="fathersalary"  maxlength="3" placeholder="In lakh" />
            </td>
        </tr>
        
        <tr>
        	<td> 
            	<label for="parent">Mother Name</label>
        		<input type="text" id="mothername" />
            </td>
            <td><label for="parent">Mother Occupation</label>
        		<input type="text" id="motheroccupation" />
            </td>
        </tr>
        
        <tr>
        	<td><label for="parent">Mother Salary</label>
        		<input type="text" id="mothersalary" maxlength="3" placeholder="In lakh"  />
            </td>
            <td><label for="parent">Father Mobile</label>
        		<input type="text" maxlength="10" id="fathermobile" pattern="[0-9]{10}" />
           </td>
        </tr>
        
        <tr>
        <td><label for="parent">Mother Mobile</label>
        	<input type="text" maxlength="10" id="mothermobile" pattern="[0-9]{10}"/>
            </td>
            <td><label for="parent">Permanent Address</label>
        		<textarea type="text" id="permanentaddress"></textarea>
           </td>
        </tr>
        
         <tr>
        	<td>
             	<label for="parent">City</label>
        		<input type="text" id="city" />
            </td>
            <td><label for="parent">State</label>
        		<select id="state" class="selectpicker">
                	<option>State</option>
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
        <tr>
        	<td style="padding:20px;">
        	<label></label>
        	<input type="submit" value="submit" onclick="parentsubmitform(); return false;" class="btn btn-primary"/>
        	</td>
       		<td></td>
       </tr>
        </table>
        
        
    </fieldset>
</form>
