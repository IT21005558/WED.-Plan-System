<?php
	session_start();

	$userName = "";
	if(isset($_SESSION["uname"])){
		
		$userName=$_SESSION["uname"];
	}
	else{
		header("Location:'login.html'");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Honeymoon Tours </title>
		
		<!--add stylesheet-->
		<link rel="stylesheet" href="styles/home.css">
		<link rel="stylesheet" href="styles/tourspkg.css">

	</head>
	
		<link rel="icon" href="images\heart.png">
	
	<body>
		<!--header-->
		<div name="header">
			<img class="logo" src = "images\logo.png" onclick="window.location.href = 'home.html'" width="250" height="200" alt="Logo">
		
		
		<h1 class="title"> Wedding with Smile </h1>
		
		<div class="register">
		<form method="POST" action="logout.php">
			<input type ="submit" name="logout" class="btnlogin" value="Log Out" >	
		</form>
		<form method="POST" action="User_Profile.php">
			<input type ="submit" class="btnsignup" value="Profile" >
		</form>
		</div>
		
		<ul class="menu">
			<li class="menulist"><a href="contactuslogged.html"> Contact Us</a></li>
			<li class="menulist"><a href="aboutuslogged.html">About Us</a></li>
			<li class="menulist"><a href="ourpackageslogged.html">Our Services</a></li>
			<li class="menulist"><a href="homelogged.php">Home</a></li>
		</ul>
		
		</div>
		
		<div align="center">
		<center> <h2 style="color:#AB0552; font-size: 40px; font-family:Calibri" > Find Your Romantic Gateway... </h2></center>
		</div>
		
		<div name="packages">
		<fieldset>
			
				 <legend ><b> Sri Lanka </b></legend>
				 
				 <form method="POST" action="tourchk.php">
				 
				 <img  class="honeyimg" src="images/srilanka.jpg" align ="center">
				 
				 <ul>
					 <li class="details"> A Sri Lankan honeymoon guarantees an epic journey because nowhere else in the world can you experience such a wide array of cultures and experiences in one compact destination. </li><br>
					 <li class="details"> Lots of luxury hotels and resorts for accommodation.</li><br>
					 <li class="details"> Along with that, our Sri Lanka tour package also assures you to deliver incredible services along with remarkable arrangements to make your Sri Lanka vacation momentous.</li><br>

				</ul>
				
				<h5>LKR 35,000 per Night (Up to 4 Nights)</h5>
				
				<center><input type="submit" name="submit" class="btns"  value="Book Now!" id="submitsl"></center>	
			</form>
		</fieldset><br><br>
		
		
		<fieldset>
				
				 <legend><b> Maldives </b></legend>
				 
				 <form method="POST" action="tourchk.php">
				 
				 <img class="honeyimg" src="images/maldives.jpg" align ="center">
				 
				 <ul>
					 <li class="details">The island nation of the Maldives is popular with honeymooners looking for seclusion and adventurers looking to explore the depths of the sea on a scuba diving and snorkeling excursion.</li><br>
					 <li class="details">The rainy season is May through September (though it can stretch a bit further into the fall), however, traveling during this time does have some advantages. </li><br>
					 <li class="details">Options include everything from luxurious hotel brands to more niche, boutique properties to eco-friendly resorts.</li><br>
				 </ul>
				 
				 <h5>LKR 55,000 per Night (Up to 4 Nights)</h5>
				 
				 <center>
				 <input type="submit" name="submit" class="btns" value="Book Now!" id="submitmld"></center>	 
				</form>	
		</fieldset><br><br>
		
		<fieldset>
				
				 <legend ><b> Paris </b></legend>
				 
				 <form method="POST" action="tourchk.php">
				 
				 <img class="honeyimg" src="images/paris.jpg" align ="center">
				 
				 <ul>
					 <li class="details">If there is a perfect destination for romantic vacations, it is Paris without any doubt.</li><br>
					 <li class="details">For those of you seeking an idyllic spot for your honeymoon in France or a place for a valentines day trip, Paris is the perfect destination.</li><br>
					 <li class="details">Enjoy luxury accommodations while you explore the city of lights. View some of the richest collections of art, go to landmarks like the Eiffel Tower, go on a Seine River cruise, and on a day trip to Versaille.</li><br>
				</ul>
				
				<h5>LKR 65,000 per Night (Up to 5 Nights)</h5>
				
				<center><input type="submit" name="submit" class="btns" value="Book Now!" id="submitpar"></center>	
				</form>
		</fieldset><br><br>
		
		
		</div>
		
		
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
		
		</div>
		
	</body>
	
	</html>