<?php

session_start();

?>


<!DOCTYPE html>
<html>

<head>

<title> Home Page </title>
<link rel = "stylesheet" href = "styles/HomePage.css";
</head>
<body>
<hr>

<div class = "box">	
<div id = "left">
<img src="images/logo.png" id = "logo">
</div> 
<div id = "middle">
<h1 style="font-family: arial;color: green;margin-top: 50px;font-size: 60px;"class = "center">ADVERTISING GEEK</h1>  
</div> 
<div id = "right">
<a href = "login.php" target = "_self">
<img src = "images/login.png" id = "login">
</a>
</div>
</div>
    
<hr>

<nav>
		
    <ul class ="menu">
    <li class ="menu"><a href ="Home.php">Home</a></li>
      <li class ="menu"><a href ="About us.php">About Us</a></li>
      <li class ="menu"><a href ="services.php">Services</a></li>
      <li class ="menu"><a href ="contactus.php">Contacts Us</a></li>
      <li class ="menu"><a href ="Registration.php">Sign Up</a></li>
     </ul>

</nav>

<hr>

<div class = "content">
 
<h1> HELLO , WE ARE ADVERTISING GEEKS !</h1>
<p> Quality digital services you really want. </p>

<div>
<a href = "services.php" target = "_self">
<button type= "button"><span></span>FIND NOW!</button>
</a>
<a href = "registration.php" target = "_self">
<button type= "button"><span></span>SIGN UP</button>
</a>
</div>
 
</div>

<center>

    <h6 class = "footer"> © 2022 - Advertising Geek Marketing Agency / Write For Us / Refer Advertising Geek / Terms  </h6>
</center>


</body>


</html>