<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script language="javascript">

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


</script>
</head>
<body>
<form method="post" action="">
<div id="main_bg">
<div id="main">
<!-- header -->
<div id="header">
	<div id="logo">
		<img src="images/logo.jpg" height="100%" width="100%" />
	</div>
 <div id="buttons">
	<a href="index.php" class="but_home" title=""></a><div class="but_razd"></div>
	<a href="Registration.php" class="but" title="">Registration</a>
	</div>
</div>
<!-- / header -->
<!-- content -->
				<div class="cont_top"></div>
				<div id="content">
					<div style=" height:10px"></div>
				    <p align="center"><font size="+3" color="#993399">LogIn Page</font></p>

				  <div id="left">
		      <div style="height: 55px;">
					    <div style="width:570; float: left;">
					    </div>
						</div>
						<div style="height: 10px;"></div>
							<a href="forgotpsw.php"><img src="images/img21.jpg" class="img_l" alt="" /></a>
						<h1>User Name  :<input class="input_txt" type="text" name="uname" onBlur="notnull(this.value);" placeholder="Enter User Name" /></h1>
						<p>&nbsp;</p>
                            <h1>Password   :          
                              <input class="input_txt" type="password" name="pass" onBlur="notnull(this.value);"placeholder="Enter Password" /></h1>
                        <p>&nbsp;</p>
							<input type="submit" name="login" value="LOGIN"/>
					
							<div style=" height:5px"></div>
							<div style=" height:20px"></div> 
							<div style="height: 55px;">
							</div>
				<div style="height: 10px; clear: both"></div>
							<div style=" height:21px;"></div>
						
					</div>
					<div style="clear: both"></div>
</div></div>
  <div style="height:15px"></div>

	<div id="footer">
		<p>Welcome To Our Website </p>
		
	</div>
</div>

</div>
</form>
<?php
  include("conn.php");
  
  if(isset($_POST['login']))
  {
	  $con= new createConnection();
	  $con->connectToDatabase();
	  echo "<br/>";
	  $con->selectDatabase();
	  echo "<br/>";
	  $uname=$_POST['uname'];
	  $pass=$_POST['pass'];
	  $sql="select * from user_master";
	  if(!$sql)
	  {
		  die("query failed!");
	  }
	  $rs=$con->fetchData($sql);
	  
	  while($Row=mysql_fetch_row($rs))
	  {
		  if($Row[1]==$uname && $Row[2]==$pass)
		  {
			  session_start();
			  $_SESSION['uid']=$Row[0];
			  $_SESSION['uname']=$Row[1];
			  header("location:Home.php");
			   echo "<br/>".$Row[0];
		  }
		  else
		  echo "Sorry! You are Not Registered";
		 
	  }
	  $con->closeConnection();
	  
  }
?>
</body>
</html>
