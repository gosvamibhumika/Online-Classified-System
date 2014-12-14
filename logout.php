<?php	
	session_start();
	
	if(isset($_SESSION['uid']) || isset($_SESSION['uname']))
	{
		unset($_SESSION['uid']);
		unset($_SESSION['uname']);
		
		session_destroy();
		header("location:index.php");
		exit;	
	}	
?>
