<?php

session_start();

?>




<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
		<link rel="stylesheet" href="styles/reg.css">

		<script src="js/script.js"></script>

</head>
<body>
<hr>

<div class = "box">	
<div id = "left">
<img src="images/logo.png" id = "logo">
</div> 
<div id = "middle">
<h1 class = "topic" style="font-family: arial;color: green;margin-top: 50px;font-size: 60px;">ADVERTISING GEEK</h1>  
</div> 
<div id = "right">

<a href = "login.php" target = "_self">
<img src = "images/login.png" id = "login" > 
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
		<center>
		<h1 class = "topic">Create Account</h1>
		<h3 class = "topic">Get started with your free account</h3>
		</center>
<style>
	body
	{background-image : url("images/123.jpg")
	}
</style>

<div id = "form">	
	<form method="post" class="login-form" action="PHP/registrationphp.php" enctype="multipart/form-data">
	
	Enter First Name :  
	<input name="fname" type="text" id="fname"><br/><br/>

    Enter Last Name :  
	<input name="lname" type="text" id="lname"><br/><br/>

    Enter date of birth :
    <input type="date"  name="dob" id="dob"><br/><br/>
	
	You are :
	<input name="gender" type="radio" value="m">Male
	<input name="gender" type="radio" value="f">Female<br/><br/>
	
    Enter E-mail
    <input type="email" name="email" id="email"><br/><br/>

    Enter password :
    <input type="password" name="pwd" id="pwd"><br/><br/>

    Confirm password :
    <input type="password" name="confirmpwd" id="confirmpwd"><br/><br/>

    Enter Your Address :<br>
	<textarea class="regTextArea" name="address" rows="8" cols="40"></textarea><br/><br/>

    Enter contact number : 
    <input class="contact" type="phone" name="mobile"><br/><br/>
<center>	
    <button type="submit" class="registerbtn" name ="submit" id="registerbtn" onclick="checkPassword()">Register</button>
</center>
	</form>
</div>

<footer>
 
 <p> © 2022 - Advertising Geek Marketing Agency  / Write For Us / Refer Advertising Geek / Terms </p>
 
</footer>

</body>
</html>