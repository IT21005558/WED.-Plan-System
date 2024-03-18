<?php

	require 'config.php';

	$name  = $_POST["name"];
	$email  = $_POST["mail"];
	$subject  = $_POST["subject"];
	$question  = $_POST["message"];
	
	$sql = "INSERT INTO contactus(Inquiry_ID, Name, Email, Subject, Question)
			VALUES ('', '$name', '$email' , '$subject', '$question')";
			
	if ($con -> query($sql))
	{
		header("Location:home.html");
		echo "<script> alert ('Insereted Successfully')</script>";
		
	}
	else
	{
		echo "error" .$con->error;
		echo "<script> alert ('Error!')</script>" ;
		
	}

	$con -> close();
?>
	
	
