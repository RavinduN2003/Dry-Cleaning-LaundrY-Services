<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="stylesheet" href="./CSS/fmypw.css">
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

<!--Form-->	
	<div class="login-container">
	
        <div class="login-form">
		
			<h1>Change Password</h1>
			
            <form method="POST" action="./include/fmypw.inc.php">
				<center>
					<input type="text" id="username" name="username" placeholder="Enter Username" required>
					<input type="password" id="password" name="password" placeholder="Enter Previous PassWord" required>
					<br>
					<input type="password" id="pnewpwd" name="newpwd" placeholder="Enter New Password" required>
					<input type="password" id="pwdrepeat" name="pwdrepeat" placeholder="Re - Enter Password" required>

				
					<button name="submit" type="submit">Change Password</button>
					
				</center>
            </form>
			
			<center>
				<a id="a1"href="termsandconditions.php">Terms and Conditions</a> <span> | </span>
				<a id="a1"href="privacypolicy.php">Privacy Policy</a>
			
			</center>
        </div>
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
