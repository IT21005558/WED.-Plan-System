<?php
	
	require 'config.php';
	
	$pwd=$_POST['password'];
	$emailad=$_POST['email'];
	
	$sql="SELECT Email_Address, Password FROM usertable WHERE Email_Address='$emailad'";
	$result = $con->query($sql);
	
	while($row = $result->fetch_assoc())
	{
		$pword=($row['Password']);
		$email=($row['Email_Address']);
		
		if ($pword==$pwd && $email==$emailad)
		{
			echo"<script> alert('Login Successful'); window.location.href = 'homelogged.php'; </script>";	
		}
		else
		{
			echo"<script>alert('Invalid Email or Password! Try Again'); window.location.href = 'login.html';</script>";
		}	
	}
	
	$sql = "SELECT * FROM usertable WHERE Email_Address='$emailad'";
	$result = $con->query($sql);
	while($row = $result->fetch_assoc())
	{
		$uname=($row['User_Name']);
		//$EMAIL = ($row['Email_Address']);
		//$PHONE = ($row['Mobile_Number']);
		
		session_start();
	
		$_SESSION["uname"] = $uname;
		//$_SESSION["uemail"] = $EMAIL;
		//$_SESSION["uphone"] = $PHONE;
	}
?>
	
		
	