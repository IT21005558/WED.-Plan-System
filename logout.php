<?php

	session_start();
	
	If(isset($_POST["logout"]))
	{
		session_destroy();
		header("Location:login.html");
	}
	else
	{
		header("homelogged.php");
	}
?>
