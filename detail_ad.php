<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Update Advertise Page</title>
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
	</div>
</div><div class="inner_copy"><div class="inner_copy">
</div></div>
<!-- / header -->
<!-- content -->
				<div class="cont_top"></div>
				<div id="content">
				<div style=" height:10px"></div>
				  <p align="center"><font size="+3" color="#993399">Advertise Detail Page</font></p>
				  <p align="center">&nbsp;</p>
				  <div id="left">

							<div style=" height:25px; clear: both;"></div>
							<div >
								
							<div style=" height:15px; clear: both;"></div>
								<div class="box_about">
									<img src="images/img44.png" class="img_l" alt="" />

						<div style="table-layout:fixed">
                        <?php
$link = mysql_connect("localhost","root","");
mysql_select_db("ocs",$link);


$str = "select * from ad_master where aid=".$_REQUEST["eid"];
$rs=mysql_query($str,$link);

while($row = mysql_fetch_row($rs))
{

	$cat=$row[1];
	$title=$row[2];
	$desc=$row[3];
	$date=$row[4];
	$status=$row[5];
	$city=$row[6];
	$add=$row[7];
	$pin=$row[8];
	$no=$row[9];
	$eid=$row[10];
	$img=$row[11];
}
  
?>	
                       <table>
                       <tr>
                       <td width="122">Advertise Category :</td>
                       <td width="328">&nbsp;<?php echo $cat; ?></td></tr>
                       <tr>
                       <td>Advertise Title    :</td>
                       <td>&nbsp;<?php echo $title; ?></td>
                       </tr>
                       <tr>
                       <td>Advertise Description    :</td>
                       <td>&nbsp;<?php echo $desc; ?></td>
                       </tr>
                        <tr>
                       <td>Posted_Date    :</td>
                       <td><?php echo $date; ?></td>
                       </tr>
                       <tr>
                       <td>Status    :</td>
                       <td><?php echo $status; ?></td>
                       </tr>
                       <tr>
                       <td>City    :</td>
                       <td><?php echo $city; ?></td>
                       </tr>
                       <tr>
                       <td>Address    :</td>
                       <td><?php echo $add; ?></td>
                       </tr>
                       <tr>
                       <td>Pincode    :</td>
                       <td><?php echo $pin; ?></td>
                       </tr>
                       <tr>
                       <td>Contact No   :</td>
                       <td><?php echo $no; ?></td>
                       </tr>
                       <tr>
                       <td>Email ID    :</td>
                       <td><?php echo $eid; ?></td>
                       </tr>
                        <tr>
                       <td>Advertise Image    :</td>
                       <td><img src="adimg/<?php echo $img;?>" height="70" width="70"></td>
                       </tr>
                       <tr>
                       <td colspan="2"><input type="submit" name="submit" value="BACK"/>
                      </td>
                       </tr>
                       </table>
                       <?php

if($_REQUEST["submit"] != NULL)
{
	 header("location:view_add.php");
}
?></div>
								
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
</body>
</html>
