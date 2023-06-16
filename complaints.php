<?php

session_start();

?>


<!DOCTYPE html>
<html>

<head>
	<title>Complaints</title>
</head>

<link rel="stylesheet" href="styles/complaints.css">

<hr>
   
    <center><h1 style="font-family: arial;color: green;margin-top: 50px;font-size: 60px;" >ADVERTISING GEEK</h1></center>
    
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

		 <a href = "login.php" target = "_blank">
		 <img class='image b'src="images/login.png" alt="login">
		 </a>
         <br><br><br>
         <h4 ><a class="b" href = "Online advertising agency user account page .php">My Profile</a></h4>

		 
	<center  class="forum boarder" ><h2 style = "font-size: 40px;color: white;">New Complaint</h2>
		
	<form  class="forum "action="PHP/complaintpage.php" target="_self" method="post" onsubmit="">

	<feildset>
	   <label class="forum1">Name :</label>
	   <input class="forum2"type="text" name="name" placeholder="Name" required><br><br>
	   <label class="forum1">User Name :</label>
	   <input class="forum2" type="text" name="username" placeholder="User Name" required><br><br>
	   <label class="forum1">Contact No :</label>
       <input  class="forum2"type="text" name="mobile" pattern="[0-9]{10}" placeholder="0123456789" required><br><br>
       <label class="forum1">Email :</label>
       <input  class="forum2"type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required><br><br>
	   <label class="forum1">Your Complaint :</label>
	   <input  class="forum2"type="text" name="complaint" placeholder="Your Complaint" required><br><br><br><br>
	   
	   <button class="submit"mtype= "submit" class = "border"> Submit </button>
	   <br>
	   <button class="submit"mtype= "submit" class = "border "><a class="c" href = "contactus.php">Back </a></button>
	   
    </feildset>  
	</form>
        </center>
		</div>
		<br>

		<center>
			<h6 > © 2022 - Advertising Geek Marketing Agency / Write For Us / Refer Advertising Geek / Terms  </h6>
		</center>
</body>
</html>