<?php

class createConnection 
{
	var $host="localhost";
	var $username="root";
	var $password="";
	var $database="ocs";
	var $myconn;
	var $sql;
	var $rs;
	var $msg;

	function connectToDatabase()
	{
		$conn=mysql_connect($this->host,$this->username,$this->password);

		if(mysql_error()){ echo "cannot connect to database";}
		else{
			$this->myconn = $conn;
			echo "Connection established";
		}
		return $this->myconn;		
	}
	function selectDatabase()
	{
		mysql_select_db($this->database);
		if(mysql_error()){  echo "cannot find the database"; }
		else
			echo "Databse selected";
	}
	function fetchData($sql)
	{
		$this->sql =$sql;
		$this->rs=mysql_query($this->sql);
		return $this->rs;
	}
	function insertData($uname,$upass,$gen,$add,$state,$pin,$no,$eid,$que,$ans)
	{
		$uid=0;
		$rs=mysql_query("select uid from user_master order by uid desc");
		$norow=mysql_num_rows($rs);
		if($norow<1)
		   $uid=1;
   else
   {
       $row=mysql_fetch_row($rs);
       $uid=$row[0];
       $uid=$uid+1;
   }
	echo "user id==$uid";
		$this->sql="insert into user_master values($uid,'$uname','$upass','$gen','$add','$state',$pin,$no,'$eid','$que','$ans')";
		mysql_query($this->sql);
		$this->msg="record successfully inserted";
		return $this->msg;
	}
	function add_ad($cat,$title,$desc,$sdate,$status,$city,$add,$pin,$no,$eid,$img,$uid)
	{
		$aid=0;
    $rs=mysql_query("select aid from ad_master order by aid desc");
    $norow=mysql_num_rows($rs);
    if($norow<1)
	   $aid=1;
   else
   {
       $row=mysql_fetch_row($rs);
      $aid=$row[0];
      $aid=$aid+1;
   }
	echo "add id==$aid";
		$this->sql="insert into ad_master values($aid,'$cat','$title','$desc','$sdate','$status','$city','$add',$pin,$no,'$eid','$img',$uid)";
		mysql_query($this->sql);
		echo $this->sql;
		$this->msg="record successfully inserted";
		return $this->msg;
	}
	function forpsw($uname,$que,$ans)
	{

		$rs=mysql_query("select * from user_master where uname='$uname' and sec_que=$que and sec_ans='$ans'");
	    return $rs;
	}
	function feedback($uname)
	{
	$rs=mysql_query("select * from user_master where uname='$uname'");
	return $rs;
	}
	function insertfdk($uid,$uname,$desc)
	{
		$fid=0;
    $rs=mysql_query("select fId from feedback_master order by fId desc");
    $norow=mysql_num_rows($rs);
    if($norow<1)
	   $fid=1;
   else
   {
       $row=mysql_fetch_row($rs);
      $fid=$row[0];
      $fid=$fid+1;
   }

		$fdate=$year."-".$month."-".$date;
		$sql="insert into feedback_master values($fid,$uid,'$uname','$desc');";
mysql_query($sql);
     return 1;
	}
	
	function closeConnection()
	{
		mysql_close($this->myconn);
		echo "connection closed";
	}
	
}
?>