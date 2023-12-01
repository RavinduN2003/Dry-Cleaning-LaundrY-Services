<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> Contact Us </title>
  <link rel="stylesheet" href="./CSS/contactus.css">
  
</head>
<body>

  <!-- Header -->
 <header>
     <nav>
         <div class="logo">
             <img src="./images/logo.jpeg" alt="Logo">
         </div>
         <div class="profile">
             <a href="userprofile.php"><img src="./images/pp.jpeg" alt="User Profile"></a>
         </div>
         <p class="p1">Hello!</p>
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

  <section class="contact-content">

    <h1>Contact Us</h1><br><br>

    <div class="contact-form">

        <form action="contactus.php" method="post">
            
            <!--(placeholder is) hint or description about the expected value of an input-->

          <input type="text" name="name" placeholder="Your Name" id="name" required>
          <input type="email" name="email" placeholder="Email Address" id="email" required>
          <textarea name="message" placeholder="Message" rows="4" id="message" required></textarea>
          <button type="submit"name="submit">Send</button>

        </form>
      
    </div>
    
  </section>

  <div>
    <br><br><br><br><br>
  </div>

  <!-- Footer -->
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

</body>
</html>

<?php

include './include/dbh.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    

    $sql = "INSERT INTO `contact` (`name`,`email`,`message`)
    VALUES('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script type="text/javascript">
        window.onload = function () { alert("Data Inserted !"); 
            window.location.href = "viewc.php";
    }

</script>';
    } else {
        echo "Failed";
    }
}
?>





