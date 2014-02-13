<div class='alert alert-info'>Here you can add different user for Login.</div>
<form class="form-inline">
	<table>
		<tr>
			<td>
				<label for="name">Name</label>
				<input type="text" id="name" required maxlength="50" pattern="[a-zA-Z ]+" />
			</td>
			<td>
				<label for="email">Email</label>
				<input type="text" id="email" required pattern="[a-zA-Z0-9 @ .]+">
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">Password</label>
				<input type="password" id="password" required" />
			</td>
			<td></td>
		</tr>
		<tr>
			<td><label></label><input type="submit" value="Submit" onclick="submitaddadmin(); return false;" class="btn btn-primary" /></td>
		</tr>
	</table>
	
	
	

</form>