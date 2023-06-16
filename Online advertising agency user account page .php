
<?php

session_start();

?>


<DOCTYPE! html> 
<html>

     <head>
          <title>User account</title>
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     </head>

     <link rel="stylesheet" href="styles/userpage.css">
     
     <hr>
   
    <center><h1 style = "font-family: arial;color: green;margin-top: 50px;font-size: 60px;">ADVERTISING GEEK</h1></center>
    
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
	<div style="border:1px solid rgb(5, 18, 51); margin-left: 100px; margin-right: 100px;">

	<center><h1>My Profile</center>
	<h3>
		<i class="material-icons icon" style="font-size:48px;">done</i>
		<i class="material-icons icon1" style="font-size:48px;">logout</i>
		<br><br>
	<ul class="menu1 ">
	<li class="menu2 "><a href = "Completed Orders.php"><b>Completed orders</a></b></li>
	
	<li class="menu1"><a href = "login.php"><b>Log out</a></b></li>
	</ul>
	</h3>
	

	<center><h1 >My Orders</center>
	<h3>
		<i class="material-icons icon " style="font-size:48px;">description</i>
		<i class="material-icons icon1 " style="font-size:48px;">paid</i>
		<br><br>
	<ul class="menu1">
	<li class="menu2"><a href = "Ongoing Orders.php"><b>Ongoing orders</a></b></li>
	<li class="menu1"><a href = "To Be Paid.php"><b>To be paid</a></b></li>
	</ul>
	</h3>
</div>
<br><br><br>
<center>
	<h6 > © 2022 - Advertising Geek Marketing Agency / Write For Us / Refer Advertising Geek / Terms  </h6>
</center>


</body>
</html>
