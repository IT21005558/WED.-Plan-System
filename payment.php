<?php
	session_start();
	require ("config.php");
	$userName = "";
	if(isset($_SESSION["uname"])){
		
		$userName=$_SESSION["uname"];
	}
	else{
		header("Location:'login.html'");
	}
	
	$EMAIL = "";
	$ADDRESS  = "";
	
	$db = "SELECT Email_Address, Address FROM usertable WHERE User_Name='$userName'";
	$dbdata = mysqli_query($con, $db) or die('error');
	
	while($row = mysqli_fetch_array($dbdata, MYSQLI_ASSOC)){
		$EMAIL = $row['Email_Address'];
		$ADDRESS  = $row['Address'];
	}
?>

<html>
	<head>
		<title> Payment Center </title>
		
		<!--add stylesheet-->
		<link rel="stylesheet" href="styles/home.css">
		<link rel="stylesheet" href="styles/payment.css">
		<script src="js/payment.js"></script>
		
	</head>
	
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
		<br>
		<form name = "form1">
		<div class = "formpay">
		<div class ="row1">
		<div class="box">
		<div class ="colum1">
		<div class ="container">
		
		    <div class ="row1">
			<div class ="cloum2">
			
			<h2> Billing Address </h2>
			
				 <label for="Fname"><i class="user"></i> Full Name </label>
				 <input type="text" id="Fname" name="firstname" value="<?php echo $userName; ?>" placeholder="Dasun Udaraka">
				 
				 <label for="email"><i class="Email"></i> Email</label>
				 <input type="text" id="email" name="email" value="<?php echo $EMAIL; ?>" placeholder="dasun@example.com">
				 
				 <label for="adress"><i class="useraddress"></i> Address</label>
				 <input type="text" id="adress" name="Address" value="<?php echo $ADDRESS; ?>" placeholder="652 K. 17th Dalada Street">
				
				<label for="pkg"><i class="userpkg"></i> Select Package </label>
				<input type="text" id="okg" name="city" placeholder="Package 1">
			
				<div class ="row1">
				<div class ="cloum2">
			
		  
				<div class="cloum2">
				<h2> Payment </h2>
				
				<label for="price">Package Price</label>
				<input type="text" id="price" name="price" placeholder=" 15000" disabled>
				
				<label for="Fname"> Accepted Cards </label>
		  
				<div class="icon-container">
				<img src="images/pay2.png" width="350" height="60">
				</div>
			
				<label for="cardname">Name on Card</label>
				<input type="text" id="cardname" name="cardname" required>
				
				<label for="cardnumber">Credit card number</label>
				<input type="text" id="cnum" name="cardnumber"  pattern="[0-9]{12}" placeholder="Card Number" required>
				
				<label for="expircc">Expire Date</label>
				<input type="text" id="expircc" name="expircc" placeholder="Expir MM/YY" required>
				
				 </div>
			  
			  
				<div class="cloum2">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="557" pattern="[0-9]{3}" required>
				</div>
				</div>
				</div>

				</div>
		
				</div>
				
				<label> <input type="checkbox" onclick="enableButton()" id="check" checked="checked" name="sameadress"> Informations that I Provided are Correct and Valid</label>
				<button type="submit" onclick="window.location.href ='User_Profile.html'" id="btnsub" class="btn">Continue to checkout</button>
				</form>
				</div>
				</div>
				</div>
				</div>
				</div>
				</form>
				
		
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