<?php

 require 'config.php';
	
	$pwd=$_POST['password'];
	$emailad=$_POST['email'];
	
	$sql="SELECT Admin_Email , Password FROM admin ";
	$result = $con->query($sql);
	while($row = $result->fetch_assoc())
	{
		$pswd=($row['Password']);
		$email=($row['Admin_Email']);
		
		if ($pswd==$pwd && $email==$emailad)
		{
			
			echo "<script> alert('Login Successful'); window.location.href = 'admin.php'; </script>";
				
		}
		else
		{
			echo"<script>alert('Invalid Email or Password! Try Again');</script>";
		}
			
	}
	
	$sql="SELECT Admin_Name FROM admin WHERE Admin_Email='$emailad'";
	$result = $con->query($sql);
	while($row = $result->fetch_assoc())
	{
		$aname=($row['Admin_Name']);
		 session_start();
	
		$_SESSION["aname"] = $aname;
		
	}
	
?>
		
	