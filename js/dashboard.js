

$(window).bind('popstate',function(){
	

	var url = window.location.hash;

	switch(url){
		case '#addstudent':addstudent();break;
		case '#searchstudent':searchstudent();break;
		case '#showstudent':showstudent();break;
		case '#addadmin':addadmin();break;

	}
	var roll = url.substr(0,5);
	if(roll == '#nso#'){
		gobackfromsearch(window.location.hash);
	}else if(roll == '#swo#'){
		gobackfromsearchwithoption(window.location.hash);
	}
	
	url='';
	

});
function gobackfromsearch(val){
	var val1 = val.replace("#nso#",'');
	//alert(val1);
	$.post("scripts/searchstudent.php",{string:val1},function(result){$("#table-area").html(result);});
}
function gobackfromsearchwithoption(val){
	var val1 = val.replace("#swo#","");
	$.post("scripts/searchwithoption.php",{string:val1},function(result){$("#table-area").html(result);});
}

$(document).ready(function(){
	addstudent();
});
function addstudent(){
		history.pushState('','addstudent','#addstudent');//data,title,url
		$("#action").find("li").each(function(){
    		$('li').attr("class","");//dashboard.php ul
  		});
  		$('#action li').eq(0).attr("class","active");
			
			
			$.ajax({
				url:"includes/studentAddForm.php",
				type:"POST",
				data:({id:0}),
				success:function(result){
						
						$("#table-area").html(result);
						$('#dob').datepicker({ dateFormat: 'dd-mm-yy', changeMonth: true, changeYear: true,yearRange: '1950:2050'});
						$('#admissiondate').datepicker({ dateFormat: 'dd-mm-yy', changeMonth: true, changeYear: true,yearRange: '1950:2050'});
						
				}
			});
			$.ajax({
				url:"includes/right-menu.php",
				type:"POST",
				data:({id:0}),
				success:function(result){
						$("#right-menu-area").html(result);					
				}
			});
}




function addparent(){
	$.ajax({
		url:"includes/parentAddForm.php",
		type:"POST",
		data:({id:0}),
		success: function(result){
			$("#table-area").html(result);
			$()
		}	
	});
}

function addacademic(){
	$.ajax({
		url:"includes/academicAddForm.php",
		type:"POST",
		data:({
			id:0}),
		success:function(result){
				$("#table-area").html(result);
			}
		});
	}

function studentsubmitform(){
		$.ajax({
			url:"scripts/addstudentscript.php",
			type:"POST",
			data:({
				name:$("#name").val(),
				course:$("#course").val(),
				enrollnumber:$("#enrollnumber").val(),
				rollnumber:$("#rollnumber").val(),
				email:$("#email").val(),
				mobile:$("#mobile").val(),
				branch:$("#branch").val(),
				admissiondate:$("#admissiondate").val(),
				dob:$("#dob").val(),
				gender:$("#gender:checked").val(),
				address:$("#address").val(),
				city:$("#city").val()
				}),
			success: function(result){
				$('form')[0].reset();
				alert(result);	
			}		
		});
}

function academicsubmitform(){
	$.ajax({
			url:"scripts/addacademicscript.php",
			type:"POST",
			data:({
			rollnumber:$("#rollnumber").val(),
			ten:$("#ten").val(),
			twelve:$("#twelve").val(),
			semone:$("#semone").val(),
			semtwo:$("#semtwo").val(),
			semthree:$("#semthree").val(),
			semfour:$("#semfour").val(),
			semfive:$("#semfive").val(),
			semsix:$("#semsix").val(),
			semseven:$("#semseven").val(),
			semeight:$("#semeight").val(),
			
			}),
			success: function(result){
				$('form')[0].reset();
				alert(result);
			}
		});	
}

function parentsubmitform(){
	$.ajax({
		url:"scripts/addparentscript.php",
		type:"POST",
		data:({
			rollnumber:$("#rollnumber").val(),
			fathername:$("#fathername").val(),
			fatheroccupation:$("#fatheroccupation").val(),
			fathersalary:$("#fathersalary").val(),
			mothername:$("#mothername").val(),
			motheroccupation:$("#motheroccupation").val(),
			mothersalary:$("#mothersalary").val(),
			fathermobile:$("#fathermobile").val(),
			mothermobile:$("#mothermobile").val(),
			permanentaddress:$("#permanentaddress").val(),
			city:$("#city").val(),	
			state:$("#state").val(),
		}),
		success: function(result){
			$('form')[0].reset();
			alert(result);
		}	
	});	
}


$(function() {
    $( "#datepicker" ).datepicker();
  });
  
function searchstudent(){

	history.pushState(null,'addstudent','#searchstudent');
	$("#action").find("li").each(function(){
    	$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(1).attr("class","active");
	$.ajax({
		url:"includes/searchstudentAdd.php",
		type:"POST",
		data:({id:0}),
		success: function(result){
			$("#right-menu-area").html(result);
			$("#table-area").html("<div class='alert alert-info'>This page is only used to see data because it would be safe to not show EDIT & DELETE operation here.</div>");
		}		
	});
}

function callsearch(){
	$("#spinner").attr("style","");
	history.pushState(null,'search','#nso#' + $("#searchbox").val());//nso == normal search option
	$.ajax({
		url:"scripts/searchstudent.php",
		type:"POST",
		data:({
			string:$("#searchbox").val()
			
		}),
		success: function(result){
			$("#table-area").html("<h4>Search Result</h4><br />" + result);
			$("#spinner").attr("style","display:none");
		}
	});	

}


function showfulldetail(rollnumber){
	
   $.ajax({
		url:"scripts/showfulldetail.php",
		type:"POST",
		data:({
			rollnumber:rollnumber
			
		}),
		success: function(result){
			$("#table-area").html(result);
		}	
	});	
	
}

function showstudent(){
	history.pushState(null,'addstudent','#showstudent');
	$("#action").find("li").each(function(){
    	$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(2).attr("class","active");
	
	$.ajax({
		url:"scripts/showstudentscript.php",
		type:"POST",
		data:({id:0}),
		success: function(result){
			$("#table-area").html("<div class='alert alert-info'>This page is used to perform UPDATE & DELETE operation.Be Carefull</div>"+result);
			$.get("includes/getsearchwithoption.php",function(data){
				$("#right-menu-area").html(data);
			});
			
			
			
			
		}	
	});
	
}

function callSearchWithOption(){
	$("#spinner").attr("style","");
	history.pushState(null,'searchwithoption','#swo#' + $("#searchbox").val());//swo == search with option
	
	$.ajax({
		url:"scripts/searchwithoption.php"	,
		type:"POST",
		data:({
			string:$("#searchbox").val()	
		}),
		success: function(result){
			$("#table-area").html(result);
			$("#spinner").attr("style","display:none");
		}
	});	
}
function branchWiseSearch(){
	
	var branchs ="";
	$('#checkbox input[type="checkbox"]:checked').each(function(){
          branchs += $(this).val() +",";
		  
      });
	  
	$.ajax({
		url:"scripts/showstudentscript.php",
		type:"POST",
		data:({
			branchs:branchs}),
		success: function(result){
			$("#table-area").html(result);
		}		 
	});
	
}


function edit(rollnumber){
	$.ajax({
		url:"includes/edit.php",
		type:"POST",
		data:({rollnumber:rollnumber}),
		success:function(result){
			$("#table-area").html(result);
			$('#dob').datepicker({ dateFormat: 'dd-mm-yy', changeMonth: true, changeYear: true,yearRange: '1950:2050'});
			$('#admissiondate').datepicker({ dateFormat: 'dd-mm-yy', changeMonth: true, changeYear: true,yearRange: '1950:2050'});
		}
	});
}

function submitedit(){
	$.ajax({
		url:"scripts/editscript.php",
		type:"POST",
		data:({
			name:$("#name").val(),
				course:$("#course").val(),
				enrollnumber:$("#enrollnumber").val(),
				rollnumber:$("#rollnumber").val(),
				email:$("#email").val(),
				mobile:$("#mobile").val(),
				branch:$("#branch").val(),
				admissiondate:$("#admissiondate").val(),
				dob:$("#dob").val(),
				gender:$("#gender").val(),
				address:$("#address").val(),
				city:$("#city").val(),

				ten:$("#ten").val(),
				twelve:$("#twelve").val(),
				semone:$("#semone").val(),
				semtwo:$("#semtwo").val(),
				semthree:$("#semthree").val(),
				semfour:$("#semfour").val(),
				semfive:$("#semfive").val(),
				semsix:$("#semsix").val(),
				semseven:$("#semseven").val(),
				semeight:$("#semeight").val(),
				
				fathername:$("#fathername").val(),
				fatheroccupation:$("#fatheroccupation").val(),
				fathersalary:$("#fathersalary").val(),
				mothername:$("#mothername").val(),
				motheroccupation:$("#motheroccupation").val(),
				mothersalary:$("#mothersalary").val(),
				fathermobile:$("#fathermobile").val(),
				mothermobile:$("#mothermobile").val(),
				permanentaddress:$("#permanentaddress").val(),
				parentcity:$("#parentcity").val(),	
				state:$("#state").val()
		}),
		success:function(result){
			
			$("#table-area").html('');
			$("#message-success").attr('style','').html(result).fadeOut(4000);

		}
	});
}
function deletestudent(rollnumber){

	var ans = confirm("Are you sure you want to Delete this record?");
	if(ans == true){
		$.ajax({
			url:"scripts/delete.php",
			type:"POST",
			data:({
				rollnumber:rollnumber
			}),
			success:function (result){
				var content = showstudent();
				$("#message-success").attr('style','').html(result).fadeOut(4000);
				$("#table-area").html(content);
				
			}
		});	
	}else{
		$("#message-error").attr('style','').html('Record cannot Deleted').fadeOut(4000);
	}
	
}

function addadmin(){
	history.pushState(null,'addstudent','#addadmin');
	$("#action").find("li").each(function(){
    	$('li').attr("class","");//dashboard.php ul
  	});
  	$('#action li').eq(3).attr("class","active");

	$.get("includes/addadminForm.php",function(data){
		$("#table-area").html(data);
		$.get("scripts/getadminnames.php",function(result){
			$("#right-menu-area").html(result);
		});
		
	});
}

function submitaddadmin(){

	if($("#name").val() == ""){
		$("#message-error").attr('style','').html('Please fill out Name').fadeOut(4000);
	}else{
		if($("#email").val() == ""){
			$("#message-error").attr('style','').html('Please fill out Email').fadeOut(4000);
		}else{
			if($("#password").val() == ""){
				$("#message-error").attr('style','').html('Please fill out Password').fadeOut(4000);
			}else{
				$.post("scripts/addadminscript.php",
					{name:$("#name").val(),email:$("#email").val(),password:$("#password").val()},
					function(data){
						$('form')[0].reset(); 
						$("#message-success").attr('style','').html(data).fadeOut(4000);
						$.get("scripts/getadminnames.php",function(result){
						$("#right-menu-area").html(result);
						});
					}
				);
				
				
			}
		}
	}
	
	

}

function deleteadmin(email){
	var ans = confirm("Are you sure you want to DELETE");
	if(ans == true){
		$.post("scripts/deleteadmin.php",{email:email},function(data){
			$.get("scripts/getadminnames.php",function(result){
			$("#right-menu-area").html(result);
			});
			$("#message-success").attr('style','').html(data).fadeOut(4000);

		});
	}
	else{
		$("#message-error").attr('style','').html('User not deleted').fadeOut(4000);
	}
	
}

$(window).scroll(function(){
	$("#spinner").attr("style","");
	if(window.location.hash == "#showstudent"){
		if($(window).scrollTop() == $(document).height() - $(window).height()){
			var start = $("table tbody tr").length;
			
			$.post("scripts/dynamictableload.php",{start:start},function (result){
				console.log(start);
				$("tr").last().after(result);
			});


		}
	}
	$("#spinner").attr("style","display:none");
	
});



$(function(){
	$(".errorhide").css("color","#F16A23").fadeOut(4000);
});