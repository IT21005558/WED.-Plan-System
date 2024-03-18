<?php
	session_start();

	$adminName = "";
	if(isset($_SESSION["aname"])){
		
		$adminName=$_SESSION["aname"];
	}
	else{
		header("Location:'adminlogin.php'");
	}
?>
<html>
	<head>
		<title> Home : Wedding with Smile </title>
		
		<!--add stylesheet-->
		<link rel="stylesheet" href="styles/home.css">
		
	</head>
	
	<body>
		<!--header-->
		<div name="header">
			<img class="logo" src = "images\logo.png" onclick="window.location.href = 'homelogged.php'" width="250" height="200" alt="Logo"> 
		
		
		<h1 class="title"> Wedding with Smile </h1>
		
		<div class="register">
		<form method="POST" action="logout.php">
			<input type ="submit" name="logout" class="btnlogin" value="Log Out" > 	
		</form>
		<form method="POST" action="admin.php">
			<input type ="submit" class="btnsignup" value="Profile" >
		</form>
	
		</div>
		
		
		
		<ul class="menu">
			<li class="menulist"><a href="contactuslogged.html"> Contact Us</a></li>
			<li class="menulist"><a href="aboutuslogged.html">About Us</a></li>
			<li class="menulist"><a href="ourpackageslogged.html">Our Services</a></li>
			<li class="menulist"><a href="#">Home</a></li>
		</ul>
		</div>
		<br><br>
		
	
		<div class="pictures">
			<img class="image" src="images/1home.jpg" alt="planningimg" >
			<div class="textstyle" onclick="window.location.href ='planningpkg.html'">
			<div class="text" style="background-color: #37BEB0;" >Wedding Planning</div>

			</div>
			
		</div>
		
		<div class="pictures">
			<img class="image" src="images/2travel.jpg" alt="toursimg" >
			<div class="textstyle" onclick="window.location.href ='tourspkg.html'">
			<div class="text" style="background-color: #FFA384" a href="#" >Honeymoon Tours</div>

			</div>
		</div>
		
		<div class="pictures">
			<img class="image" src="images/photo.jpg" alt="photoimg" heigth="50px">
			<div class="textstyle" onclick="window.location.href ='photography.html'">
			<div class="text" style="background-color: #E95670">Wedding Photography</div>

			</div>
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

			<p class="footer-copyright"> Wedding with Smile &copy; 2021</p>

		</footer>
		</div>
		
	</body>
	
	</html>