<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="stylesheet" href="./CSS/signup.css">
	<link rel="icon" type="image/x-icon" href="./images/favicon.ico.jpeg">
    <title>Clothes Gallery</title>
</head>
<body>

<!--Header-->
    <header>
        <nav>
            <div class="logo">
                <img src="./images/logo.jpeg" alt="Logo">
            </div>
			
			<div class="profile">
                <a href="userprofile.php"><img src="./images/pp.jpeg" alt="User Profile"></a>
            </div>
			
			<p class="p1">Hello!<p>
			
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="ourservices.php">Services</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="termsandconditions.php">Terms and Conditions</a></li>
            </ul>
        </nav>
    </header>
	
<br><br>

<!--Login Form-->	
	<div class="login-container">
	
        <div class="login-form">
		
			<h1>Sign Up</h1>
			
            <form method="POST" action="./include/signup.inc.php">
				<center>
                
					<input type="text" id="username" name="username" placeholder="User Name/Email" required>
					<input type="text" id="fullnam" name="fullname" placeholder="Fullname" required>
					<input type="email" id="email" name="email" placeholder="Email" required>
					<input type="password" id="password" name="password" placeholder="PassWord" required>
					<input type="password" id="pwdrepeat" name="pwdrepeat" placeholder="Re - Enter Password" required>
					<a id="forget" href="fmypw.php">Change Password</a><br>
					<a id="forget" href="deleteaccount.php">Delete Account</a>
			
					<button name="submit" type="submit">Sign up</button>
					
				</center>
            </form>
			
			<center>	
				
				<p id="p1">Allready Have an Account?</p><span>  </span> <a id="p1"href="login.php">Login</a><br>
				
	
				<a id="a1"href="termsandconditions.php">Terms and Conditions</a> <span> | </span>
				<a id="a1"href="privacypolicy.php">Privacy Policy</a>
			
			</center>
        </div>
    </div>

	
<!--image1-->
	
	<div class="image1-container" id="clearfix">	
		<img src="./images/login.jpeg" alt="image1">
	</div>		
		
		
<!--Footer-->	
	<footer>
		<center>
			<div class="social-media">
				<p>A Clean Start</p><br>
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
			</div><br><br>
			
			<div class="footer-links">
				<a href="privacypolicy.php">Privacy Policy</a><span>|</span>
				<a href="termsandconditions.php"> Terms and Conditions</a><span>|</span>
				<a href="contactus.php"> Contact Us</a>
			</div>
			
		</center>
    </footer>
	
</body>

</html>
