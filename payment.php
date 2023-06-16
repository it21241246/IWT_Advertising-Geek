<?php

session_start();

?>



<!DOCTYPE html>
<html>

<head>

<title> ADVERTISING GEEK </title>

<link rel = "stylesheet" href = "styles/payment.css">

</head>
<body>
<hr>
<!-- menu setting-->
<div class = "box">
<div id = "left">
<img src= "images/logo.png" id = "logo">
</div>
<div id = "middle">
<h1 style="font-family: arial;color: green;margin-top: 50px;font-size: 60px;"> ADVERTISING GEEK </h1>
</div>
<div id = "right">
<img src = "images/login.png" id = "login">
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

<div class="container">

    <form  method="POST" action="PHP/paymentpage.php" >

        <div class="row">

            

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
				<div>
				    <label for="type">Choose Package type</label>
                    <select id="type" name="type">
                        <option value="platinum">Platinum</option>
                        <option value="gold">Gold</option>
                        <option value="silver">silver</option>
						<option value="bronze">Bronze</option>
                    </select>
				</div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name ="name" placeholder="mr. Bruce Wayne">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name ="Cnumber" placeholder="0000-0000-0000-0000">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name ="ExpM"  placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name = "ExpY"  placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name = "CVV"  placeholder="123">
                    </div>
                </div>

            </div>
    
        </div>
	
        <input type="submit" value="Pay" class="submit-btn">
		<input type="submit" value="Cancel" class="cancel-btn">
        
    </form>

</div>    

<footer>
 
 <p> © 2022 - Advertising Geek Marketing Agency  / Write For Us / Refer Advertising Geek / Terms </p>
 
</footer>

</body>

</html