// JavaScript Document

// login page
$(document).ready(function(){
		
		$('#uname').focus();
	});
	
function validate_login()
		{			
			$("#message").html("");
			var flag=0;
			if($("#uname").val()== "" && $("#pass").val()=="")
			{				
				$('#uname').css({'background-color':'rgba(255,0,0,0.2)'});
				$('#pass').addClass('bgRed');
				$("#message").show('slow').html("Both fields are required");
				flag=1;}
			else
			{
				if($("#uname").val()==""){
					$("#message").show('slow').html("Enter username");
					$('#uname').addClass('bgRed');
					flag=1;			}	
				if($("#pass").val()==""){
					$("#message").show('slow').html("Enter password");
					$('#pass').addClass('bgRed');
					flag=1;			}	
			}
			
			if(flag==0){
				return true;}
			else if(flag==1){
				return false;}	
		}	
		
// registeration page

function validate_registeration()
{
	var flag=0,local=0;
	var alpha=/^[a-zA-Z]+$/;
	 
	var alphanum=/^(a-zA-Z0-9)+$/;
	var emailPattern=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})+$/;
		
	if(($("#uname").val().length==0) || (!alpha.test($("#uname").val())))	
	{
		$("#uname").addClass("bgRed");
		flag=1;
	}
	else
		$("#uname").removeClass("bgRed");		
	
	if(($("#lname").val().length==0) || (!alpha.test($("#lname").val())))	
	{
		$("#lname").addClass("bgRed");
		flag=1;
	}
	else
		$("#lname").removeClass("bgRed");
		
	if(($("#email").val().length==0) || (!emailPattern.test($("#email").val())))	
	{
		$("#email").addClass("bgRed");
		flag=1;
	}
	else
		$("#email").removeClass("bgRed");
	
	if($("#passwd1").val().length==0) 	
	{
		$("#passwd1").addClass("bgRed");
		flag=1;
	}
	else
		$("#passwd1").removeClass("bgRed");
		
	if($("#passwd2").val().length==0) 	
	{
		$("#passwd2").addClass("bgRed");
		flag=1;
	}
	else
		$("#passwd2").removeClass("bgRed");
		
	if( ($("#passwd1").val().length != 0 ) && ($("#passwd2").val().length!=0) )
	{
		if($("#passwd1").val() != $("#passwd2").val()){
			$("#passwd1").addClass("bgRed");
			$("#passwd2").addClass("bgRed");
			flag=1;
		}
		else{
			$("#passwd1").removeClass("bgRed");
			$("#passwd2").removeClass("bgRed");
		}
	}
	if($("#que").val() == 0){
		$("#que").addClass("bgRed");
		flag=1;
	}
	else{
		$("#que").removeClass("bgRed");
	}
	
	if(document.getElementsByName('gender')[0].checked == false && document.getElementsByName('gender')[1].checked== false)
	{
		flag=1;
	}
	if(flag==0)
		return true;
	else if(flag==1)	
		return false;
}

function focusOut(field)
{
	if(field == 'year' || field == 'month' || field == 'day' || field== 'occupation')
	{
		if(($('#'+field).val()) == "0"){
			$('#'+field).css({'background-color':'rgba(255,0,0,0.2)'});
		}
		else{
			$('#'+field).css({'background-color':'#fff'});
		}
	}
	else
	{
		$('#'+field).val($.trim($('#'+field).val()));
	
		if($("#"+field).val().length==0){
			$('#'+field).addClass('bgRed');	
		}
		else{
			$("#"+field).removeClass('bgRed');
		}
	}
}

function focusIn(field)
{
	if(field == 'year' || field == 'month' || field == 'day' || field== 'occupation' )
	{
		$('#'+field).css({'background-color':'#fff'});
	}
	else
	{
		$("#"+field).removeClass('bgRed');
	}
}
function checkYear()
	{
		var year=document.getElementById('year');
		var month=document.getElementById('month');
		var day=document.getElementById('day');

		if(year.value!="0")
			month.disabled=false;
		if(year.value=="0"){
			month.disabled=true;
			day.disabled=true;
		}

		if(month.value=="2"){
			var n=((year.value % 4) == 0)?29:28;

			var temp=day.length;
			for(i=1;i<=temp;i++)
			{
				day.options[i]=null;	
			}
			for(i=1;i<=n;i++)
			{
				var myNewOption = new Option(i,i);
				day.options[i] = myNewOption;
			}
		}		
	}
	function checkMonth()
	{
		var year=document.getElementById('year');
		var month=document.getElementById('month');
		var day=document.getElementById('day');
		
		if(month.value!="0")
			day.disabled=false;
		if(month.value=="0")
			day.disabled=true;
			
		if(month.value=="2"){
			var n=((year.value % 4) == 0)?29:28;
		}
		else if(month.value=="4" || month.value=="6" || month.value=="9" || month.value=="11"){
			var n=30;
		}
		else if(month.value=="1" || month.value=="3" || month.value=="5" || month.value=="7" || month.value=="8" || month.value=="10" || month.value=="12")	{
			var n=31;
		}
		var temp=day.length;
			for(i=1;i<=temp;i++)
			{
				day.options[i]=null;	
			}
		for(i=1;i<=n;i++)
		{
			var myNewOption = new Option(i,i);
			day.options[i] = myNewOption;
		} 
	}