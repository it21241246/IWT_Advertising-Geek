<?php

session_start();

?>


<!DOCTYPE HTML>   
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" href="styles/feedback.css">
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
  
<a href = "login.php" target = "_blank">
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

<style>
	body
	{background-image : url("images/123.jpg")
	}
</style>

<h1 class = "topic"> We would like your  feedback to improve our website </h1>

<div class="rating">
  
  <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
  <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
  <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
  <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
  <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>

</div>
<center>
<div class = "feedbk">

<label for = "feedback" style = "font-size:15pt"> Please Leave Your Feedback Below: </label>
<textarea rows="1" cols = "30"></textarea>
<center>
  <a href = "cty.php">
<button type="submit" class="registerbtn" name ="submit" id="registerbtn">Submit</button>
</a>

</center>
</div>
</center>
<footer>
 
 <p> © 2022 - Advertising Geek Marketing Agency  / Write For Us / Refer Advertising Geek / Terms </p>
 
</footer>

	
</body>
</html>