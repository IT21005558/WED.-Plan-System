<?php
	session_start();
	require_once 'config.php';

	$name  = $_POST["uname"];
	$email  = $_POST["email"];
	$phone  = $_POST["number"];
	$birthday  = $_POST["ubirthday"];
	$gender = $_POST["ugender"];
	$address  = $_POST["address"];
	$pword = $_POST["password"];
	
	$sql = "INSERT INTO usertable(UserID, User_Name, Email_Address, Mobile_Number, Birthday,Gender, Address, Password)
			VALUES ('', '$name', '$email' , '$phone', '$birthday', '$gender', '$address', '$pword')";
			
	if ($con -> query($sql))
	{
		echo "<script>alert('Succesfully registered. Welcome to Wedding with Smile!'); window.location.href = 'login.html';</script>";	
	}
	else
	{
		echo "error" .$con->error;
		echo "<script> alert ('Error!');</script>" ;
		
	}
	
	/*$sql = "SELECT User_Name FROM usertable WHERE Email_Address='$email'";
	$result = $con->query($sql);
	while($row = $result->fetch_assoc())
	{
		$uname=($row['User_Name']);
		//$EMAIL = ($row['Email_Address']);
		//$PHONE = ($row['Mobile_Number']);
		
		//session_start();
	
		$_SESSION["uname"] = $uname;
		//$_SESSION["uemail"] = $EMAIL;
		//$_SESSION["uphone"] = $PHONE;
	}
	*/
	$con -> close();
?>