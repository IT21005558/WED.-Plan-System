<?php
	session_start();
	require "config.php";
	$userName = "";
	if(isset($_SESSION["uname"])){
		
		$userName=$_SESSION["uname"];
	}
	else{
		header("Location:'login.html'");
	}
	
	$EMAIL = "";
	$PHONE  = "";
	
	$db = "SELECT Email_Address, Mobile_Number FROM usertable WHERE User_Name='$userName'";
	$dbdata = mysqli_query($con, $db) or die('error');
	
	while($row = mysqli_fetch_array($dbdata, MYSQLI_ASSOC)){
		$EMAIL = $row['Email_Address'];
		$PHONE  = $row['Mobile_Number'];
	}
	
	$db2 = "SELECT Package_Name, Package_Price FROM package WHERE Package_Type = 'Tour'";
	$dbdata2 = mysqli_query($con, $db2) or die('error');

?>


<html>

	<head>
		<title> Booking : Wedding with Smile </title>
		
		<!--add stylesheet-->
		<link rel="stylesheet" href="styles/home.css">
		<link rel="stylesheet" href="styles/bookingwp.css">
		
		<!--add javascript-->
		<script src= "js/booking.js" >
		</script>
		<script>  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	
		<link rel="icon" href="images\heart.png">
	
	<body>
		<!--header-->
		<div name="header">
			<img class="logo" src = "images\logo.png" onclick="window.location.href = 'homelogged.php'" width="250" height="200" alt="Logo">
		
		
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
		<center> <h2 style="color:#AB0552; font-size: 40px; font-family:Calibri" > Honeymoon Tours </h2></center>
		</div>
		
		<div><fieldset style="border: 2px solid black;">
		
		<legend><b> Booking </b></legend>
			<img class=image src="images/hp.png">
		
		<div class="container" >
		<form action="booking.php"  class="content" method="post">
		
			  <div class="form-inputs">
				<label for="name">Your Name</label>
				<input type="text" class="frminput" id="name" name="visitor_name" value="<?php echo $userName; ?>" required>
			  </div>
			  
			  <div class="form-inputs">
				<label for="email">Your E-mail</label>
				<input type="email" class="frminput" id="email" name="visitor_email" value="<?php echo $EMAIL; ?>" required>
			  </div>
			  
			  <div class="form-inputs">
				<label for="phone">Your Phone</label>
				<input type="tel" class="frminput" id="phone" name="visitor_phone" value=" <?php echo $PHONE; ?>" required>
			  </div>
			  
			  <div class="form-inputs">
				<label for="pkg">Selected Package</label>
				
				<select name = "pkg">
				<?php
				while($rows = $dbdata2 -> fetch_assoc())
				{
					$pkgname = $rows['Package_Name'];
					echo "<option value = '$pkgname'> $pkgname </option>";
				}
				?>
				</select>
			</div>
			
			<div class="form-inputs">
				<label for="price">Price</label>
				<input type="price" class="frminput" id="price" name="pkg_price" placeholder="**************" disabled>
			</div>
			
			  
			 
			  <div class="form-inputs">
				<label for="checkout-date">Check-out Date</label>
				<input type="date" class="frminput" id="checkout-date" name="checkout" required>
			  </div><br>
			  
			  <!--<p class="msg"><mark> For book a package you have to pay advance payment of 10% from selected package price.</mark></p>
			  -->
			  </form>
			  
			  <div class="center1">
			  <button type="submit" class="btnbook" onclick="window.location.href = 'payment.php'">Book the Package</button>
			  </div><br><br><br>
		 </div>
		 </fieldset></div>
		
		
		
		
		
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

