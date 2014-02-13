<!doctype html>
<html>
<head>
	<title>This is the login page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	
</head>
<body>
	<div id="loginForm" class="well">
	<h4>Log In</h4><br/>
		<form class="form form-inline span4" method="POST" action="#">
			<table>
				<tr>
					<div id="login-error" class="alert alert-error"></div>
					
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" id="email"></td>
				</tr>
				<tr>
					<td>Password&nbsp</td>
					<td><input type="password" id="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input  id="submitlogin" type="submit" class="btn btn-primary" value="LogIn"  /></td>
				</tr>
			</table>
			
		
		</form>
	</div>
	<script type="text/javascript" src="js/login.js"></script>
	
</body>
</html>