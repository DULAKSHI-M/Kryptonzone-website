
<?php session_start();?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Krypton Zone - Admin Login </title>
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
									<span>Admin Login</span>
									
									<hr id="Indicator">
								</div>
								
								<form class="form-center" action="adminnew.php" method="post"  id="LoginForm" >
									<input type="text" name="email" id="email" placeholder="Email" required>
									<input type="password" name="password" id="password" placeholder="Password" required>
									<button type="submit" name="loginbtn" class="button1">Login</button>
									<br>
									<a href="adminsignup.php">Create an account</a>
								</form>
								
								
							</div>
							
						</div>
						
					</div>
				</div>
			
			</div>

	
<?php
	if(isset($_POST["loginbtn"]))
	{
		$email3 = $_POST["email"];
		$password = $_POST["password"];
		
		
		$con = 
			mysqli_connect("localhost","root","","kz_db");
		if(!$con){
			die("Sorry Error");
		}
		$sql="SELECT * FROM `admin1` WHERE `email` = '".$email3."' and `password` = '".$password."';";
		$results = mysqli_query($con,$sql);
		
		if(mysqli_num_rows($results)>0)
		  
		{
			$_SESSION["userName"] = $email3;	
			
			header('Location:indexnew.php');
		
		}
		else{
			echo "Please enter correct password";
		}
		
			
		mysqli_close($con);
	
	}
	?>	
	
</body>
<br>
<div class="footer">
		  <div class="container">
			<div class="row">
			  <div class="footer-col-1">
				<h2>KryptonZone</h2>		
			  </div>
			</div>
		  </div>
</div>

</html>