<?php

session_start();

?>



<DOCTYPE html>
    <html>
    
    <head>
         <title>Contact us</title>
         <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- links the font-->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- links the font-->
        <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Lato:wght@700&display=swap" rel="stylesheet"><!-- links the font-->
    
        <hr> <!-- hoprizontol line-->
        <title>advertising geek</title>
        <center><h1 style="font-family: arial;color: green;margin-top: 50px;font-size: 60px;">ADVERTISING GEEK</h1></center>
        <link rel="stylesheet" href="styles/contactus.css">
        <body>
            <br> <!-- line break-->
            <hr>
            <ul class ="menu">
            <li class ="menu"><a href ="Home.php">Home</a></li>
      <li class ="menu"><a href ="About us.php">About Us</a></li>
      <li class ="menu"><a href ="services.php">Services</a></li>
      <li class ="menu"><a href ="contactus.php">Contacts Us</a></li>
      <li class ="menu"><a href ="Registration.php">Sign Up</a></li>
             </ul>
    
    </head>

    <a href = "login.php" target = "_self"> <!-- links to login page-->
      <img src = "images/login.png" id = "login"> <!--sets the image -->
      </a>
    
    <link rel="stylesheet" href="contactus.css"> <!-- links the css file -->
    
    <body>

         <div style="margin-top: 150px;" class="slid">
            <div id="slider">
                <figure>
                    <img src="images/1.png"> <!--sets the image -->
                    <img src="images/2.png"> <!--sets the image -->
                    <img src="images/3.png"> <!--sets the image -->
                    <img src="images/4.png"> <!--sets the image -->
                </figure>
    
            </div>
    
        </div>
        
        <div class = "group1">
        <center style="margin-top: -370px;" class="forum boarder" > <h2 class = "header1"> Get In Touch</h2>
            <h4 class = "header2"> 
                Contact us to see how we may help your company <br>prosper through 
                digital advertising.

            </h4>  

          

     
<!--creates the form -->
       
        
        <form style="margin-top: 20px;" class="forum "action="PHP/contactuspage.php" target="_self" method="post" onsubmit="">
        <feildset>
           <label class="forum1">Full Name :</label>
           <input class="forum2"type="text" name="FullName" placeholder="John Doe" required><br><br>
           <label class="forum1">Email Address :</label>
           <input class="forum2" type="email" name="EmailAddress" placeholder="johndoe@gmail.com" required><br><br>
           <label class="forum1">Phone No :</label>
           <input  class="forum2"type="phone" name="PhoneNumber" pattern="[0-9]{10}" placeholder="076890088" required><br><br>
           <label class="forum1">Company :</label>
           <input  class="forum2"type="text" name="Company" placeholder="Inline Co" required><br><br>
           <label class="forum1">How can we help :</label>
           <input  class="forum2"type="text " name="msg" placeholder="Talk to us" required><br><br><br><br>



           <button id="btn">Submit</button> <!--button -->

    
           
           <br>
           
        </feildset>  
        </form>
        
       </div>

       <img class="image1" src = "images/arrow-down.png"> <!--sets the image -->
       
            </center>
            
            <center><button class="feedbutton"><a href ="feedback.php">Feedback</a></button> </center>
            <center><button class="combutton"><a href ="complaints.php">Complaints</a></button> </center>

            <br>
    
            <center> <!--centers the text -->
                <h6 class = "footer"> © 2022 - Advertising Geek Marketing Agency / Write For Us / Refer Advertising Geek / Terms  </h6>
            </center>
    </body>
    </html>