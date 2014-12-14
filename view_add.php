<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>View Posted Advertise Page</title>
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
	<a href="add_advertise.php" class="but" title="">Add Advertise</a>
    <a href="view_add.php" class="but" title="">View Advertise</a>
    <a href="logout.php" class="but" title="">LogOut</a>
     <?php
	session_start();
    $_SESSION["uid"];
	?>
	</div>
</div><div class="inner_copy"><div class="inner_copy">
</div></div>
<!-- / header -->
<!-- content -->
				<div class="cont_top"></div>
				<div id="content">
				<div style=" height:10px"></div>
				  <p align="center"><font size="+3" color="#993399">View Posted Advertise</font></p>
				  <p align="center">&nbsp;</p>
				  <div id="left">

							<div style=" height:25px; clear: both;"></div>
							<div >
								
							<div style=" height:15px; clear: both;"></div>
								<div class="box_about">
									

						<div style="table-layout:fixed"> 
                      
                        <table width="642" border="1">
                          <tr>
                            <td>&nbsp;Advertise ID</td>
                            <td>&nbsp;Advertise Category</td>
                            <td>&nbsp;Advertise Description</td>
                            <td>&nbsp;Date</td>
                            <td>&nbsp;Status</td>
                            <td>&nbsp;User ID</td>
                            <td>&nbsp;Detail</td>
                            <td>&nbsp;Update</td>
                            <td>&nbsp;Delete</td>
                          </tr>
<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("ocs",$link);

$str = "select aid,ad_cat,ad_desc,ad_date,status from ad_master";
$rs = mysql_query($str,$link);

while($row = mysql_fetch_row($rs))
{
	$aid=$row[0];
	$ad_cat=$row[1];
	$ad_desc=$row[2];
	$ad_date=$row[3];
	$status=$row[4];
	$uid=$_SESSION["uid"];
	//$uid=$row[0];
	echo "<tr>";
	echo "<td>".$aid."</td>";
	echo "<td>".$ad_cat."&nbsp;</td>";
	echo "<td>".$ad_desc."&nbsp;</td>";
	echo "<td>".$ad_date."&nbsp;</td>";
	echo "<td>".$status."&nbsp;</td>";
	echo "<td>".$uid."&nbsp;</td>";
	echo "<td>"."<a href='detail_ad.php?eid=".$aid."'>Detail</a>&nbsp;</td>";
	echo "<td>"."<a href='update_add.php?uid=".$aid."'>Update</a>&nbsp;</td>";
	echo "<td>"."<a href='view_add.php?id=".$aid."&my=0'>Delete</a>&nbsp;</td>";
  echo "</tr>";
	
}
if($aid != "" && $_REQUEST["my"] != "")
{
	
	$str1 = "delete from ad_master where aid=".$aid;
	mysql_query($str1,$link);
	
}


?>                            
</table>
</div></div>
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
	   
?>
</body>
</html>
