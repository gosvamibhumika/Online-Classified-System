<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Forgot Password Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
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
	<a href="Login.php" class="but" title="">Login</a>
    <a href="Registration.php" class="but" title="">Registration</a>
	
	</div>
</div>
<!-- / header -->
<!-- content -->
				<div class="cont_top"></div>
				<div id="content">
					<div style=" height:10px"></div>
				    <p align="center"><font size="+3" color="#993399">Forgot Password? </font></p>

				  <div id="left">
		      <div style="height: 55px;">
					    <div style="width:570; float: left;">
					    </div>
						</div>
						<div style="height: 10px;"></div>
							<img src="images/img22.jpg" class="img_l" alt="" />
						<h1>User Name  :<input class="input_txt" type="text" name="uname" placeholder="Enter User Name" /></h1>					<p>&nbsp;</p>
                            <h1>Security Question   :<select name="que"><option value="0">-Select Question-</option>
                          <option value="1">What is Your Favourite Color?</option>
                          <option value="2">What is Your Favourite Chocolate?</option>
                          <option value="3">What is Your Favourite Teacher?</option></select></h1>
                        <p>&nbsp;</p>	
						<p>&nbsp;</p>
                         <h1>Security Answer :<input class="input_txt" type="text" name="ans" placeholder="Enter Security Answer" /></h1>
                        <p>&nbsp;</p>
                        
							<input type="submit" name="submit"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" name="reset" />
                           </div>
					
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
<?php
  include('conn.php');
 
	  $con=new createConnection();
	  $con->connectToDatabase();
	  echo "<br/>";
	  $con->selectDatabase();
	  echo "<br/>";
	  
	  if(isset($_POST["submit"]))
	  {
     
	 $rs=$con->forpsw($_POST['uname'],$_POST['que'],$_POST['ans']);
	 $norow=mysql_num_rows($rs);
    

	 $row=mysql_fetch_row($rs);
	 if($norow>0)
	 {
		 $pass=$row[2];
		 //echo $pass;
		 echo "<script>alert('Your Password is=$pass plz change the password ');</script>";
	 }
	 else
	 {
	    echo "<script>alert('Unknown user')</script>";
	 }

}
	  ?>
</form>

</body>
</html>
