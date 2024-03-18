<?php
	require 'config.php';
	
	$name  = $_POST["Package_Name"];
	$price  = $_POST["Package_Price"];
	$description  = $_POST["Package_description"];
	$type = "Tour";
	
	$sql = "INSERT INTO package(Package_ID, Package_Type, Package_Name, Package_Price, Package_description)
			VALUES ('', '$type', '$name', '$price', '$description')";
			
	if ($con -> query($sql))
	{
		echo "<script> alert('Succesfully Added!'); window.location.href = 'admin.php'; </script>";
	}
	else
	{
		//echo "error" .$con->error;
		echo "<script>alert('Error!');</script>";
		
	}

	$con -> close();
?>