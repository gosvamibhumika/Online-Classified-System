<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Registration Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function onlychar(uname,id)
{
var i,f=1;
var na=uname.toString();
	if(na.length==0)
	{
	   alert("Please Enter Value!!");
	   document.getElementById(""+id).value="";
	   document.getElementById(""+id).focus();
	   
	}
	for(i=0;i<na.length;i++)
	{
	      if((na.charAt(i)>='A' && na.charAt(i)<='Z') || (na.charAt(i)>='a' && na.charAt(i)<='z') || (na.charAt(i)==' '))
		  {
		  f=1;
		  }
		  else
		  {
		  f=0;
		  break;
		  }
	
	}
	if(f==0)
	{
	   alert("Please Enter Only characters!!");
	   document.getElementById(""+id).value="";
	   document.getElementById(""+id).focus();
	
	}
	}
function notnull(uname,id)
{
var na=uname.toString();
	if(na.length==0)
	{
	   alert("Please Enter Value!!");
	   document.getElementById(""+id).value="";
	   document.getElementById(""+id).focus();
	   
	}
	

}

	
		  
function onlyno(uname,id)
{
var i,f=1;
var na=uname.toString();
	if(na.length!=6)
		alert("Enter only 6 Digit");
	
	for(i=0;i<na.length;i++)
	{
	      if((na.charAt(i)>='0' && na.charAt(i)<='9')  || (na.charAt(i)==' '))
		  {
		  f=1;
		  }
		  else
		  {
		  f=0;
		  break;
		  }
	
	}
	
	if(f==0)
	{
	   alert("Please Enter Only Digit!!");
	   document.getElementById(""+id).value="";
	   document.getElementById(""+id).focus();
	
	}
	}
	
function onlydigi(na,id)
{
var i,f=1;

	
	for(i=0;i<na.length;i++)
	{
	      if((na.charAt(i)>='0' && na.charAt(i)<='9'))
		  {
		   
		  f=1;
		  }
		  else
		  {
		    
		  f=0;
		  break;
		  }
	
	}
	
	if(f==0)
	{
	   alert("Please Enter Only Digit!!");
	   document.getElementById(""+id).value="";
	   document.getElementById(""+id).focus();
	
	}
	 if(na.length<10 || na.length>12 || na.length==11)
	 	 alert("Please Enter 10 or 12 Digit!!");
		 document.getElementById(""+id).value="";
		 document.getElementById(""+id).focus();
		  
	}	
function comboval(id,msg)
{
  if( document.getElementById(id).selectedIndex==0)
  	alert(""+msg)
	}
	

function emailval(n,id)
{

  var n1=0,n2=0,n3=0;
  n1=n.indexOf('@');
  n2=n.indexOf('.');
  n3=n.lastIndexOf('.');
  var a=0,b=0;
       if(n1==0 || n2==0)
              alert("plz Enter correct emailid...");
       else{
	          if(n2==n3)
			      {
				     a=n1+6;
				     if(a!=n2)
					     alert("plz Enter correct charcter Inbetween @ and .");
				  }
		      else
			      {
				     b=n2+3;
				      if(b!=n3)
					      alert("plz enter correct charcter Inbetween . and .");
				  }
		   }		  	 
}



function passval(pass,id)
{
var p=pass.length;
 if(p<=6 || p>=20)
  		 {
alert("please enter in Between six to twenty Character");
document.getElementById(""+id).value="";
document.getElementById(""+id).focus();
		}
var c=pass.toString();
var up=0,lo=0,sp=0,di=0,i=0;
for(i=0;i<c.length;i++)
{
		if(c.charAt(i)>='0' && c.charAt(i)<='9')
		  {
		    di=1;
		  }
		
		
		  if(c.charAt(i)>='A' && c.charAt(i)<='Z')
		  {
		   up=1;
		  }
		
		
		  if(c.charAt(i)>='a' && c.charAt(i)<='z')
		  {
		    lo=1;
		  }
		
		  if((!(c.charAt(i)>='0' && c.charAt(i)<='9')) && (!(c.charAt(i)>='A' && c.charAt(i)<='Z')) && (!(c.charAt(i)>='a' && c.charAt(i)<='z')) )
		  {
		  sp=1;
		  }
	 }
	 
	 
if(up==1 && lo==1)
	    document.getElementById("lab").value="LOW";
if(up==1 && lo==1 && di==1)
		document.getElementById("lab").value="MEDIUM";
if(up==1 && lo==1 && di==1 && sp==1)
		document.getElementById("lab").value="STRONG";
		
  }
  
function cpassval(pass,id)
{
   var pa=document.getElementById("pass").value.toString();
   var cpa=pass.toString();
  if(pa!=cpa)
  {
    alert("Password not Matched");
	document.getElementById("pass").value="";
   document.getElementById("cpass").value="";
   document.getElementById("pass").focus();
  }
  
}
</script>

</head>
<body>
<form method="post"  action="">
<div id="main_bg">
<div id="main">
<!-- header -->
<div id="header">
	<div id="logo">
		<img src="images/logo.jpg" height="100%" width="100%" />
	</div>
 <div id="buttons">
	<a href="index.php" class="but_home" title=""></a><div class="but_razd"></div>
	<a href="Login.php" class="but" title="">LogIn</a>
	<a href="Registration.php" class="but" title="">Registration</a>
	</div>
</div><div class="inner_copy"><div class="inner_copy">
</div></div>
<!-- / header -->
<!-- content -->
				<div class="cont_top"></div>
				<div id="content">
				<div style=" height:10px"></div>
				  <p align="center"><font size="+3" color="#993399">Registration Page</font></p>
				  <p align="center">&nbsp;</p>
				  <div id="left">

							<div style=" height:25px; clear: both;"></div>
							<div >
								
							<div style=" height:15px; clear: both;"></div>
								<div class="box_about">
									<img src="images/img42.jpg" class="img_l" alt="" />
                                    <div style="table-layout:fixed">
                       <table>
                       <tr>
                       <td>User Name :</td>
                       <td><input type="text" class="input_txt" name="uname" onBlur="onlychar(this.value,this.id);"/></td></tr>
                       <tr>
                       <td>Gender    :</td>
                       <td><input type="radio" name="gen" value="m" />Male 
                        <input type="radio" name="gen" value="f" /> Female  
                       </td>
                       </tr>
                       <tr>
                       <td>Address    :</td>
                       <td><textarea name="add" class="text_area" onBlur="notnull(this.value);"></textarea></td>
                       </tr>
                        <tr>
                       <td>State    :</td>
                       <td><input type="text" name="state" class="input_txt" onBlur="notnull(this.value);" /></td>
                       </tr>
                       <tr>
                       <td>Pincode    :</td>
                       <td><input type="text" name="pin" class="input_txt" onBlur="onlyno(this.value)" /></td>
                       </tr>
                       <tr>
                       <td>Contact No    :</td>
                       <td><input type="text" name="no" class="input_txt" onBlur="onlydigi(this.value)" /></td>
                       </tr>
                       <tr>
                       <td>Email ID    :</td>
                       <td><input type="text" name="eid" class="input_txt" id="id" onBlur="emailval(this.value,this.id)" /></td>
                       </tr>
                       <tr>
                       <td>Password    :</td>
                       <td><input type="password" name="pass" class="input_txt" id="pass" onBlur="passval(this.value,this.id);" /> <input type="label" name="lab" id="lab" class="labcolor" readonly="readonly"></td>
                       </tr>
                       <tr>
                       <td>Confirm Password    :</td>
                       <td><input type="password" name="cpass" class="input_txt" id="cpass" onBlur="cpassval(this.value,this.id)"/></td>
                       </tr>
                       <tr>
                       <td>Security Question    :</td>
                       <td><select name="que" id="que" onBlur="comboval(this.id,'Please select Question');"><option value="0">-Select Question-</option>
                          <option value="1">What is Your Favourite Color?</option>
                          <option value="2">What is Your Favourite Chocolate?</option>
                          <option value="3">What is Your Favourite Teacher?</option></select></td>
                       </tr>
                        <tr>
                       <td>Security Answer    :</td>
                       <td><input type="text" name="ans" class="input_txt" id="ans" onBlur="onlychar(this.value,this.id);" /></td>
                       </tr>
                       <tr>
                       <td colspan="2"><input type="submit" name="submit" value="CONFIRM REGISTER"/>
                      <input type="reset" name="reset" value="RESET"/></td>
                       </tr>
                       </table></div>
								
						    </div>
								<div class="box_about" style=" margin-left:20px">
								  <div style=" height:10px"></div>
									
							</div>
								<div style="clear: both"></div>
					</div>
					<div style=" height:20px"></div>
					<div style=" height:10px"></div> 
						
				</div>
					<div style="clear: both"></div>
    </div>
  </div>
<!-- / content --> 
  <div style="height:15px"></div>
<!-- bottom -->
	<div id="bottom"></div>
	<div style="clear: both;"></div>
</div>

<!-- / bottom --> 
	<div id="footer">
		<p>Welcome To Our Website</p>
		
</div>
</div>

</div>
</form>
<?php
  include('conn.php');
 
	  $con=new createConnection();
	  $con->connectToDatabase();
	  echo "<br/>";
	  $con->selectDatabase();
	  echo "<br/>";
	  
	  
	   if(isset($_POST['submit']))
  	   {
	  $msg = $con->insertData($_POST['uname'],$_POST['pass'],$_POST['gen'],$_POST['add'],$_POST['state'],$_POST['pin'],      $_POST['no'],$_POST['eid'],$_POST['que'],$_POST['ans']);
      echo $msg."<br>";
      echo "<script>alert('Registration Successful!!..');</script>";
      }
  $con->closeConnection();

?>
</body>
</html>
 