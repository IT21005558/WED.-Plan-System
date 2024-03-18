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

<!DOCTYPE html>
<html>
	<head>
		<title> Home : Wedding with Smile </title>
		
		<!--add stylesheet-->
		<link rel="stylesheet" href="styles/admin.css">
		
	</head>
	
	<body>
		<!--header-->
		<div name="header">
			<img class="logo" src = "images\logo.png"  width="250" height="200" alt="Logo">
		
		
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
			<li class="menulist"><a href="adminhomelogged.php">Home</a></li>
		</ul>
		</div>
		
		<!--adding...............................................................-->
		
		


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 20px;
  height: 500px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
 <br><br>
 <center> <h2 style="color:#AB0552; font-size: 40px; font-family:Calibri">Admin Login</h2> </center>

<div align="center" class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Admin Account</h2>
   <div class="card">
  <div class="imgcontainer">
    <img src="images\log.jpg" alt="Avatar" class="avatar">
  </div> 
 <center> <h1><?php echo $adminName; ?></h1>
 
  <p>Name : <?php echo $adminName; ?> <br><br>
  Company Name : Wedding with Smile<br><br>
  Email : adminkamal@wedsmile.com
   </p> </center>
  <div style="margin: 24px 0;">
    
  </div>
  
</div>
  </div>
  
  
  
  <div align="center" class="column" style="background-color:#bbb;">
    <h2>Update packages</h2><br><br><br>
    <div class="btn-group">
  <button class="button" onclick="window.location.href = 'addphoto.html'">Photography</button>
  <button class="button" onclick="window.location.href = 'addwp.html'">Wedding Planning</button>
  <button class="button" onclick="window.location.href = 'addht.html'">Honeymoon Tours</button>
  
</div>
  </div>
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
		
		
	</body>
	
	</html>