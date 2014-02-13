$("#submitlogin").click(function(){
	if($("#email").val() == "" || $("#password").val() == ""){
		
		$("#login-error").show().html("Please Enter Username and Passwrod");
	}else{
		$.post("scripts/loginuser.php",{email:$("#email").val(),password:$("#password").val()},function(data){
			if(data == 'ok'){
				window.location.href= "index.php"; 
			}else{
				$("#login-error").show().html(data);
			}
			
		});
	}
	return false;
});