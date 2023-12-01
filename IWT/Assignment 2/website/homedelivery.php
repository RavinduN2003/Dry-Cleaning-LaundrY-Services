<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>
			Home Delivery Page
		</title>


		<!-- css file link -->
		<link rel="stylesheet" href="./CSS/homedelivery.css">
        
	</head>
	<body>
        
		
</body>
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
                <li><a href="#">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="ourservices.php">Services</a></li>
				<li><a href="outlet.php">Outlets</a></li>
                <li><a href="homedelivery.php">Home Delivery</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="termsandconditions.php">Terms and Conditions</a></li>
            </ul>
            
        </nav>
		
    </header>
	
	

    <section class="hero">
	<div id="container">
        <!-- Slideshow container -->
        <div class="slideshow-container">
           
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                
                    <img src="./images/gentcasu.jpg" style="width:300px" >
                
            </div>
      
            <div class="mySlides fade">
                
                    <img src="./images/gentformal.jpg" style="width:500px" >
                
            </div>
      
            <div class="mySlides fade">
                
                    <img src="./images/kidsss.jpeg" style="width: 500px" >
                
            </div>

            <div class="mySlides fade">
                
                <img src="./images/School-uniform.jpg" style="width: 500px" >
            
        </div>
    
      
            
            
        </div>
        <br>
      
              <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div> 
        <script src="js/delivery.js"></script>
    
    </div>	
    </section>

    <div class="gallery">
        <a target="_blank" href="images/bathtowel.jpg">
          <img src="./images/bathtowel.jpg" alt="Cinque Terre" width="400" height="300">
        </a>
        <div class="desc"><button class="button">Click Me</button></div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="images/bedsheet.jpg">
          <img src="./images/bedsheet.jpg" alt="Forest" width="400" height="300">
        </a>
        <div class="desc"><button class="button">Click Me</button></div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="images/bluse.jpg">
          <img src="./images/bluse.jpg" alt="Northern Lights" width="400" height="300">
        </a>
        <div class="desc"><button class="button">Click Me</button></div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="images/saree.jpg">
          <img src="./images/saree.jpg" alt="Mountains" width="400" height="300">
        </a>
        <div class="desc"><button class="button">Click Me</button>
      </div>

      <div class="gallery">
        <a target="_blank" href="images/frock.jpg">
          <img src="./images/frock.jpg" alt="Cinque Terre" width="400" height="300">
        </a>
        <div class="desc"><button class="button">Click Me</button></div>
      </div>

      <div class="gallery">
        <a target="_blank" href="images/jacket.jpg">
          <img src="./images/jacket.jpg" alt="Cinque Terre" width="400" height="300">
        </a>
        <div class="desc"><button class="button">Click Me</button></div>
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
				<a href="privacypolicy.php">Privacy Policy</a> <span>|</span>
				<a href="termsandconditions.php">Terms and Conditions</a> <span>|</span>
				<a href="contactus.php">Contact Us</a>
			</div>
			
		</center>
    </footer>

	</body>
	</html>