<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <hr> <!-- horizontol line-->
    <title>Log in</title>
    <center><h1 style = "font-family: arial;color: green;margin-top: 50px;font-size: 60px;"> ADVERTISING GEEK </h1></center>

<!-- Links to the css file-->
    <link rel="stylesheet" href="styles/login.css">
    <body>
        <br>
        <hr> 
        <ul class ="menu">
        <li class ="menu"><a href ="Home.php">Home</a></li>
      <li class ="menu"><a href ="About us.php">About Us</a></li>
      <li class ="menu"><a href ="services.php">Services</a></li>
      <li class ="menu"><a href ="contactus.php">Contacts Us</a></li>
      <li class ="menu"><a href ="Registration.php">Sign Up</a></li>
         </ul>
        
        <center>
    
<!-- creates the form-->
         <form action="PHP/loginpage.php" target="_self" method="post" onsubmit="">
            <br><br><legend style="font-size : 70px; color: rgb(255, 255, 255);" >Login</legend><br>
             <input type = "text" name ="username" placeholder="Email" required><br><br>
             <input type = "password" name ="password" placeholder="Password" required><br><br>
             <span ><a href="forget password.php">forget password?</a></span><br><br>
             <span ><a href="Registration.php">Register</a></span><br><br>

             <button type ="submit" name="login" value="login">Login</button> 
              

         </form>
        </center>

        <br><br><br><br>

        <center> <!--centers the sentence -->
            
<!-- Footer-->
            <h6 style="font-weight: bold;">© 2022 - Advertising Geek Marketing Agency / Write For Us / Refer Advertising Geek /<a href="Terms of Services.php">Terms</a></h6>
        

    </body>
</html>