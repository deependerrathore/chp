$("#logindetail").click(function(){//side tab 2
	$("#action").find("li").each(function(){
    		$('li').attr("class","");//dashboard.php ul
  	});
  	
	$("#internalform").attr("style","display:none");
	$.get("scripts/getlogindetail.php",function(data){
		$("#table-area").html(data);

	});
});
/*#showhide is the id of <a> tag .on click it show/hide the content of #divshowhide.
 #divshowhide is present in two file 
 getrecentpostform.php and 
 getphonebookform.php
 */
$(document).on("click",'#showhide',function(){
	if($("#showhide").html() == "Show"){
		
		$("#divshowhide").slideDown();
		$("#showhide").html("Hide");
	}else if($("#showhide").html() == "Hide"){
		$("#divshowhide").slideUp();
		$("#showhide").html("Show");
	}
	
	

});
$(document).ready(function(){
	recentpost();
});


$("#recentnews").click(function(){//tab 4
	
	recentpost();

});
function recentpost(){
	$("#action").find("li").each(function(){
    		$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(0).attr("class","active");
  	$("#internalform").attr("style","");
	//$("#internalform").show();//we use .show() because we are hideing this div tag in #logindetal tab
	$.get("includes/getrecentpostform.php",function(data){
		$("#internalform").html(data);
	});
	$.get("scripts/getrecentpost.php",function(result){
			$("#table-area").html(result);
	});
}


$(document).on("click","#submitpost",function(){
	if($("#name").val() !=="" && $("#email").val() !=="" &&  $("#subject").val() !=="" && $("#message").val() !=="" ){
		
					$.ajax({
						url:"scripts/submitpost.php",
						type:"POST",
						data:({
							name:$("#name").val(),
							email:$("#email").val(),
							subject:$("#subject").val(),
							message:$("#message").val()
						}),
						success:function(data){
							$('form')[0].reset();
							$("#message-success").attr('style','').html(data).fadeOut(4000);
							$.get("scripts/getrecentpost.php",function(result){
								$("#table-area").html(result);
							});
						}
					});
		
				

	}else{
		$("#message-error").attr('style','').html('Please fill out all the information').fadeOut(4000);

	}
	
		
});



$(window).scroll(function(){
	
	if(window.location.hash == "#recentpost"){
		if($(window).scrollTop() == $(document).height() - $(window).height()){
			var start = $("table tbody tr").length;
			console.log(start);
			$.post("scripts/dynamicpost.php",{start:start},function (result){
				console.log(start);
				$("tr").last().after(result);
			});


		}
	}
	
	
});


$("#phonebook").click(function (){
	
	$("#action").find("li").each(function(){
    		$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(1).attr("class","active");
  	$("#internalform").attr("style","");
	//$("#internalform").show();
	$.get("includes/getphonebookform.php",function(data){
		
		$("#internalform").html(data);
	});
	$.get("scripts/getphonenumber.php",function(result){
			$("#table-area").html(result);
	});

	//console.log("deepak");
});

$(document).on("click","#submitphone",function(){
	if($("#name").val() !=="" && $("#email").val() !=="" &&  $("#phonenumber").val() !==""){
		
					$.ajax({
						url:"scripts/submitphonenumber.php",
						type:"POST",
						data:({
							name:$("#name").val(),
							email:$("#email").val(),
							phonenumber:$("#phonenumber").val(),
							
						}),
						success:function(data){
							$('form')[0].reset();
							$("#message-success").attr('style','').html(data).fadeOut(4000);
							$.get("scripts/getphonenumber.php",function(result){
								$("#table-area").html(result);
							});
						}
					});
		
				

	}else{
		$("#message-error").attr('style','').html('Please fill out all the information').fadeOut(4000);

	}
	
		
});
$(window).scroll(function(){
	
	if(window.location.hash == "#phonebook"){
		if($(window).scrollTop() == $(document).height() - $(window).height()){
			var start = $("table tbody tr").length;
			console.log(start);
			$.post("scripts/dynamicphonenumber.php",{start:start},function (result){
				console.log(start);
				$("tr").last().after(result);
			});


		}
	}
	
	
});

$(document).on("click","#delete",function(){
	var sure = confirm("Are you sure you want to delete this number");
	var email = $(this).attr("email");
	if(sure == true){
		$.post("scripts/deletephonenumber.php",{email:email},function(data){
			$("#message-success").attr('style','').html(data).fadeOut(4000);
			
			$.get("scripts/getphonenumber.php",function(result){
				$("#table-area").html(result);
			});
		});
	}else{
		$("#message-error").attr('style','').html('Phone number can not deleted.').fadeOut(4000);
	}
	
	
	
});


$("#csv").click(function(){
	$("#internalform").attr("style","display:none");
	$("#action").find("li").each(function(){
    		$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(2).attr("class","active");
	$.get("includes/get-csv-form.php",function(data){
		$("#table-area").html("<div class='alert alert-info'>Remove the COLUMN that are not useful from the file.Please don't make unnecessary Request. </div>"+data);
	});
});

$(document).on("click","#downloadcsv",function(){

	if($("#from").val() =='' && $("#to").val()=='' || $("#from").val() !=='' && $("#to").val()!==''){
			var from = $("#from").val(); 
			var to = $("#to").val();
			$.post("scripts/download-csv.php",{from:from,to:to},function(data){
			var addr = data.replace("../",'');
		
			document.location.href = addr ;
			});

	}else{
		alert("Please leave both Empty or fill Both");
	}
	
	return false;
});