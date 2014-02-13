
$(document).ready(function(){
	contactus();
});
$("#contactus").click(function(){
	contactus();
});
function contactus(){
	$("#action").find("li").each(function(){
    		$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(0).attr("class","active");
	
	$.get("includes/contactus.php",function(data){
		$("#table-area").html(data);
	});

}


$(document).on("click","#submitcontactus",function(){
	var name = $("#name").val();
	var subject = $("#subject").val();
	var query = $("#query").val();
	$.post("scripts/mailandsavequery.php",{name:name,subject:subject,query:query},function(data){
		$("#table-area").html(data);
	});
	return false;

});

$("#aboutus").click(function(){
	$("#action").find("li").each(function(){
    		$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(1).attr("class","active");
	$.get("includes/get-about-us.php",function(data){
		$("#table-area").html(data);
	});
});


$("#documentation").click(function(){
	$("#action").find("li").each(function(){
    		$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(2).attr("class","active");
});