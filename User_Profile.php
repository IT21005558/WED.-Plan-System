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
	$ADDRESS = "";
	
	$db = "SELECT Address, Email_Address, Mobile_Number FROM usertable WHERE User_Name='$userName'";
	$dbdata = mysqli_query($con, $db) or die('error');
	
	while($row = mysqli_fetch_array($dbdata, MYSQLI_ASSOC)){
		$EMAIL = $row['Email_Address'];
		$PHONE  = $row['Mobile_Number'];
		$ADDRESS = $row['Address'];
	}
	
	$PID = "";
	$PNAME = "";
	$AMOUNT = "";
	$CDATE = "";
	$STATUS = "";
	
	$db2 = "SELECT b.packageID, b.Package_name, b.Amount, b.checkoutdate, p.Payment_status FROM booking b, payment p WHERE p.Booking_ID = b.BookingID and email='$EMAIL'";
	$dbdata2 = mysqli_query($con, $db2) or die('error');
	
	while($row = mysqli_fetch_array($dbdata2, MYSQLI_ASSOC)){
		$PID = $row['packageID'];
		$PNAME = $row['Package_name'];
		$AMOUNT = $row['Amount'];
		$CDATE = $row['checkoutdate'];
		$STATUS = $row['Payment_status'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> User Profile </title>
		
		<!--add stylesheet-->
		<link rel="stylesheet" href="styles/home.css">
		<link rel="stylesheet" href="styles/userprofile.css">
		
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
	    
		<h1>User Profile</h1>
		    
		<div class="card">
        <div class="imgcontainer">
        <img src="images\log.jpg" alt="Avatar" class="avatar">
		
		
		

       <div class="row">
       <div class="column" style="background-color:#88c7dc;">
    
       <p>
	       
     			    
     	   <h1> User Details</h1><br><br>
		 
	       <h2>Name :<?php echo $userName; ?></h2>
		   <h4>Mobile Number : <?php echo $PHONE; ?></h4>
		   <h4>Email   : <?php echo $EMAIL; ?> </h4>
		   <h4>Address : <?php echo $ADDRESS; ?>  </h4>
		   
	   </p>
      </div>
  
      <div class="column" style="background-color:#aaa;">
      <p> 
	       <h2>Selectet Pacakage</h2><br><br><br>
		   
		<table>
            <tr>
                <th>Pacakage ID</th>	
                <th>Pacakage Name</th>			
                <th>Price</th>	
                <th>Date</th>	
                <th>Payment Status</th>		
            </tr>	

            <tr>
                <td><?php echo $PID; ?></td>
                <td><?php echo $PNAME; ?></td>
                <td><?php echo $AMOUNT; ?></td>  
                <td><?php echo $CDATE; ?></td>
                <td><?php echo $STATUS; ?></td>
            </tr>	

             <tr>
                <td></td>
                <td></td>
                <td></td>  
                <td></td>
                <td></td>
            </tr>		
			
        </table>			
	  <br><br>
		<input type="submit" class="fbbtn" onclick="window.location.href = 'feedback.php'" value="Write Feedback">
	  
	  </p>
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
		</div>

		
		
	</body>
	
	</html>