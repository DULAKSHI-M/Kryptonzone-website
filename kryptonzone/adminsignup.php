
<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>KryptonZone - Admin Signup</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body>
<!----------------------------Navbar------------------------------->

		<div class="container">
		  <div class="navbar">
			<div class="logo"> <img src="kz-logo-vector.jpg" width="125px"> </div>
			<nav>
			  <ul id="MenuItems">
				<li><a href=""></a> </li>
				<li><a href="adminnew.php">Admin Login</a> </li>
				  <li><a href="adminsignup.php">Admin Signup</a> </li>
			  </ul>
			</nav>
		 </div>
		</div>
	
			
			<!------------------account---------------->
			<div class="account">
				<div class="container">
					<div class="row">
						
						<div class="col-2">
							<div class="form">
								<div class="form-btn">
									<span>Admin Signup</span>
									<hr id="Indicator">
								</div>
								
								<form action="adminsignup.php" method="post" id="LoginForm">
									<input type="text" name="name" id="username" placeholder="Username" required>
									<input type="text" name="email2" id="email" placeholder="Email" required>
									<input type="text" name="address" id="address" placeholder="Address" required>
									<input type="tel" name="mobile" id="mobile" placeholder="Contact Number" required>
									<input type="password" name="pwd2" id="password2" placeholder="Enter Password" required>
									<input type="password" name="pwd3" id="password3" placeholder="Confirm Password" required>
									
									<button type="submit" name="registerbtn" id="registerbtn" class="button1">Submit</button>
									
								</form>
								
								
							</div>
							
						</div>
						
					</div>
				</div>
			
			</div>
		 
<?php 
			
	if(isset($_POST["registerbtn"]))
	{
		$fullName = $_POST["name"];
		$email = $_POST["email2"];
		$address = $_POST["address"];
		$contact = $_POST["mobile"];
		$password1 = $_POST["pwd2"];
		$password2 = $_POST["pwd3"];
		
		
		
		$con = mysqli_connect("localhost","root","","kz_db");
		if(!$con)
		{
			die("Sorry, Technical Issue");
		}
		$sql = "INSERT INTO `admin1`(`adminid`, `email`, `mobile`, `adminname`, `address`, `password`) VALUES (NULL,'".$email."','".$contact."','".$fullName."','".$address."','".$password1."'); ";
		mysqli_query($con,$sql);
		header('Location:adminnew.php');
		mysqli_close($con);	
	
	}
	
	?>	
	
	
	
		<!----------------------------Footer---------------------->
		<div class="footer">
		  <div class="container">
			<div class="row">
			  <div class="footer-col-1">
				<h2>KryptonZone</h2>
				
			  </div>
			</div>
		  </div>
		</div>

	
			
		</body>
		</html>