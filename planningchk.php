<?php
	session_start();
	
	$userName = "";
	
	if(isset($_SESSION["uname"])) { //Already logged in
		$userName = $_SESSION["uname"]; //Use the session value
		header("Location:bookingwp.php");
	}
	else {// Not logged in
		echo "<script> alert('Please Log In to Continue..'); window.location.href = 'login.html'; </script>";
		//Redirect to the login page
	}
?>