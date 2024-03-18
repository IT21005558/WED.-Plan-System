<?php

	require_once "config.php";
	//require_once "session.php";

?>

<!DOCTYPE html>

<html>
	<head>
		<title> Log In </title>
		
		<!--add stylesheet-->
		<link rel="stylesheet" href="styles/home.css">
		<link rel="stylesheet" href="styles/login.css">
		
	</head>
	
	<body>
		<!--header-->
		<div name="header">
			<img class="logo" src = "images\logo.png" onclick="window.location.href = 'home.html'" width="250" height="200" alt="Logo">
		
		
		<h1 class="title"> Wedding with Smile </h1>
		
		<div class="register">
			<input type ="button" onclick="window.location.href = 'login.html'" class="btnlogin" value="Log In" > 
		</div>
		
		<ul class="menu">
			<li class="menulist"><a href="contactus.html"> Contact Us</a></li>
			<li class="menulist"><a href="Aboutus.html">About Us</a></li>
			<li class="menulist"><a href="ourpackages.html">Our Services</a></li>
			<li class="menulist"><a href="home.html">Home</a></li>
		</ul>
		
		
		</div>
		
		

		<!--login Form-->
		<div class="login" >
			<form action="adminloginchk.php" method="POST">
				<center> <h2 style="color:#AB0552; font-size: 40px; font-family:Calibri" > Admin Login </h2></center>
				
				<div class="box">
				
				<label>
				<input type="email" id="email" name="email" required placeholder="Email" oninvalid="this.setCustomValidity('Please Enter Valid Email')" oninput="setCustomValidity('')" required >
				</label> <br><br>
				
				<label>
				<input type="password" id="pwd"name="password" required placeholder="Password" oninvalid="this.setCustomValidity('Please Enter Your Password')" oninput="setCustomValidity('')" required >
				</label> <br><br>
				
				<input type="submit" id="btnLog1"  value="LOGIN">
				<br>
			</form>
		</div>
		
			<!--footer-->
			<div name="footer">
			<footer class="footer">
				<img src="images/logo.png" align ="center" width="120" height="90" alt="Logo">
				<p>
					<a href="#">Home</a>
					&nbsp
					<a href="#">Terms of Use</a>
					&nbsp
					<a href="#">News</a>
					&nbsp
					<a href="aboutus.html">About Us</a>
					&nbsp
					
				</p>

				<p class="footer-copyright">Wedding with Smile &copy; 2021</p>

			</footer>
	</body>
</html>