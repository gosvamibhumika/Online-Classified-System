<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Change Password Page</title>
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
	<a href="Registration.php" class="but" title="">Registration</a>
	</div>
</div>
<!-- / header -->
<!-- content -->
	  <div class="cont_top"></div>
				<div id="content">
				  <div style=" height:10px"></div>
				    <p align="center"><font size="+3" color="#993399">Change Password Page</font></p>
<?php
  include('conn.php');
	 $uname=$_SESSION["uname"];
		  $con=new createConnection();

	 $rs=$con->feedback($uname);
	 $norow=mysql_num_rows($rs);
	 $row=mysql_fetch_row($rs);
	 
?>

				  <div id="left">
		      <div style="height: 55px;">
					    <div style="width:570; float: left;">
					    </div>
					</div>
						<div style="height: 10px;"></div>
							<img src="images/img45.jpg" class="img_l" alt="" />
                            <h1>User ID  :
                            <?php ?></h1>
						<h1>User Name  :<input class="input_txt" type="text" name="uname"/></h1>
						<h1>Feedback Date  :</h1><select name="dd" id="dd"><option>DD</option>
		 <option>1</option>
		  <option>2</option>	
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		  <option>6</option>
		  <option>7</option>
		  <option>8</option>
		  <option>9</option>
		  <option>10</option>
		  <option>11</option>
		  <option>12</option>
		  <option>13</option>
		  <option>14</option>
		  <option>15</option>
		  <option>16</option>
		  <option>17</option>
		  <option>18</option>
		  <option>19</option>
		  <option>20</option>
		  <option>21</option>
		  <option>22</option>
		  <option>23</option>
		  <option>24</option>
		  <option>25</option>
		  <option>26</option>
		  <option>27</option>
		  <option>28</option>
		  <option>29</option>
		  <option>30</option>
		  <option>31</option></select>
		<select name="mm" id="mm"><option>MM</option>
		   <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		  <option>6</option>
		  <option>7</option>
		  <option>8</option>
		  <option>9</option>
		  <option>10</option>
		  <option>11</option>
		  <option>12</option></select>
		<select name="yy" id="yy"><option>YY</option>
		  <option>2008</option>
          <option>2009</option>
          <option>2010</option>
		  <option>2011</option>
		  <option>2012</option>
		  <option>2013</option>
		  <option>2014</option>
           <option>2015</option></select>
                            <h1>Description   :<textarea name="desc" class="text_area"></textarea>          
                            </h1>
                        <p>&nbsp;</p>
							<input type="submit" name="submit" value="SEND"/>
							<input type="reset" name="reset" value="RESET"/>
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
	  

if($_POST["submit"])
{
$uname=$_POST["uname"];
$uid=$_POST["uid"];
$desc=$_POST["desc"];
$i=$con->insertfdk($uid,$uname,$desc);
if($i==1)
    echo "<script>alert('successfully saved');</script>";
}
?>
</form>
</body>
</html>
