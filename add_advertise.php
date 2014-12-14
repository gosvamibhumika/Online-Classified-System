<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Add Advertise Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<?php
session_start();
?>
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
	<a href="add_advertise.php" class="but" title="">Add Advertise</a>
    <a href="view_add.php" class="but" title="">View Advertise</a>
    <a href="logout.php" class="but" title="">LogOut</a>
     <?php

	echo "Welcome". $_SESSION["uname"]. "!";
	?>
	</div>
</div><div class="inner_copy"><div class="inner_copy">
</div></div>
<!-- / header -->
<!-- content -->
				<div class="cont_top"></div>
				<div id="content">
				<div style=" height:10px"></div>
				  <p align="center"><font size="+3" color="#993399">Add Advertise</font></p>
				  <p align="center">&nbsp;</p>
				  <div id="left">

							<div style=" height:25px; clear: both;"></div>
							<div >
								
							<div style=" height:15px; clear: both;"></div>
								<div class="box_about">
									<img src="images/img43.jpg" class="img_l" alt="" />

						<div style="table-layout:fixed">
                       <table>
                       <tr>
                       <td>Advertise Category :</td>
                       <td><select name="cat"><option>-Select Category-</option>
                       <option>For Sale</option>
                       <option>For Buy</option><option>For Rent</option></select></td></tr>
                       <tr>
                       <td>Advertise Title    :</td>
                       <td><input type="text" name="title" class="input_txt" /></td>
                       </tr>
                       <tr>
                       <td>Advertise Description    :</td>
                       <td><textarea name="desc" class="text_area"></textarea></td>
                       </tr>
                        <tr>
                       <td>Ad_Post_Date    :</td>
                       <td><select name="dd" id="dd"><option>DD</option>
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
		   <option>January</option>
		  <option>February</option>
		  <option>March</option>
		  <option>April</option>
		  <option>May</option>
		  <option>June</option>
		  <option>July</option>
		  <option>August</option>
		  <option>September</option>
		  <option>October</option>
		  <option>November</option>
		  <option>December</option></select>
		<select name="yy" id="yy"><option>YY</option>
		  <option>2008</option>
          <option>2009</option>
          <option>2010</option>
		  <option>2011</option>
		  <option>2012</option>
		  <option>2013</option>
		  <option>2014</option>
           <option>2015</option></select></td>
                       </tr>
                       <tr>
                       <td>Status    :</td>
                       <td><input type="radio" name="status" value="Active" /> Active 
                       <input type="radio" name="status" value="Deactive" />  Deactive
                      </td>
                       </tr>
                       <tr>
                       <td>City    :</td>
                       <td><input type="text" name="city" class="input_txt" /></td>
                       </tr>
                       <tr>
                       <td>Address    :</td>
                       <td><textarea name="add" class="text_area"></textarea></td>
                       </tr>
                       <tr>
                       <td>Pincode    :</td>
                       <td><input type="text" name="pin" class="input_txt" /></td>
                       </tr>
                       <tr>
                       <td>Contact No    :</td>
                       <td><input type="text" name="no" class="input_txt" /></td>
                       </tr>
                       <tr>
                       <td>Email ID    :</td>
                       <td><input type="text" name="eid"  class="input_txt"/></td>
                       </tr>
                        <tr>
                       <td>Advertise Image    :</td>
                       <td><input type="file" id="img" name="img" /></td>
                       </tr>
                       <tr>
                       <td colspan="2"><input type="submit" name="submit" value="ADD"/>
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
	   
	   
	   
	   
	   $date=$_POST["dd"];
	   $year=$_POST["yy"];
	   $month=$_POST["mm"];
	   $sdate=$date."/".$month."/".$year;
	  
	   if(isset($_POST['submit']))
  		{
			
			//$imagename = $_FILES['img']['name'];
		
            //$source = $_FILES['img']['tmp_name'];
			//echo $source."  ".$imagename;
			
 		   // move_uploaded_file($source, "adimg/".$imagename);
			
	  $msg = $con->add_ad($_POST['cat'],$_POST['title'],$_POST['desc'],$sdate,$_POST['status'],$_POST['city'],$_POST['add'],$_POST['pin'],$_POST['no'],$_POST['eid'],$_POST['img'],$_SESSION['uid']);
      echo $msg."<br>";
      echo "<script>alert('Advertise Add Successful!!..');</script>";
	 
  }
  $con->closeConnection();

?>

</body>
</html>
