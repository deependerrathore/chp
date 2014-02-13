<form method="post" class="form-inline" >
	<fieldset>
    <legend>Student Personal Information</legend>
    	<table>
        <tr>
        	<td><label for="student">Roll Number</label>
        		<input type="text" id="rollnumber" placeholder="Can be FILLED only once"/>
            </td>
            <td><label for="student">10th Percent</label>
        		<input type="text" id="ten" maxlength="5" placeholder="xx% OR xx.xx%" pattern="[0-9]{2}"/>
            	
            </td>
        </tr>
        
        <tr>
        	<td> <label for="student">12th Percent</label>
        		<input type="text" id="twelve" placeholder="xx% OR xx.xx%" />
            </td>
            <td><label for="student">1st Semester Percent</label>
       			<input type="text" id="semone" placeholder="xx% OR xx.xx%" />
            </td>
        </tr>
        
        <tr>
        	<td> 
            	<label for="student">2nd Semester Percent</label>
        		<input type="text" id="semtwo" placeholder="xx% OR xx.xx%" />
            </td>
            <td><label for="student">3rd Semester Percent</label>
        		<input type="text" id="semthree" placeholder="xx% OR xx.xx%"/>
            </td>
        </tr>
        
        <tr>
        	<td><label for="student">4th Semester Percent</label>
        		<input type="text" id="semfour" placeholder="xx% OR xx.xx%" />
            </td>
            <td><label for="student">5th Semester Percent</label>
        		<input type="text" id="semfive" placeholder="xx% OR xx.xx%" />
           </td>
        </tr>
        
        <tr>
        <td><label for="student">6th Semester Percent</label>
        	<input type="text" id="semsix"  placeholder="xx% OR xx.xx%"/>
            </td>
            <td><label for="student">7th Semester Percent </label>
        		<input type="text" id="semseven" placeholder="xx% OR xx.xx%"/>
           </td>
        </tr>
        
         <tr>
        	<td>
             	<label for="student">8th Semester Percent</label>
        		<input type="text" id="semeight" placeholder="xx% OR xx.xx%"/>
            </td>
            <td>
            </td>
        </tr>
        <tr>
        	<td style="padding:20px;">
        	<label></label>
        	<input type="submit" value="submit" onclick="academicsubmitform(); return false;" class="btn btn-primary"/>
        	</td>
       		<td></td>
       </tr>
        </table>
        
        
    </fieldset>
</form>
