<?php

$con = new mysqli ("localhost", "root", "", "weddingwithsmile");

if($con -> connect_error)
	{
		die("Connection failed!".$con->connect_error);
	}
	else
	{
		//echo "<script> alert('Connected Successfully!')</script>";
	}
	
?>