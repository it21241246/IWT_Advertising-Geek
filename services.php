
<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="servicespage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Lato:wght@700&display=swap" rel="stylesheet">
    <title>Services</title>




    <hr> <!-- horiztontal line-->
    <title>advertising geek</title>
    <center><h1 style="font-family: arial;color: green;margin-top: 50px;font-size: 60px;">ADVERTISING GEEK</h1></center>
    <link rel="stylesheet" href="styles/servicespage.css">
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

</head>
<a href = "login.php" target = "_blank"> <!-- links to the login page-->
    <img src = "images/login.png" id = "login">
    </a>
<body>
    <!-- slideshow-->
    <div class="slid"> <!--start div tag -->
        <div id="slider">
            <figure>
                <img src="images/A.png">
                <img src="images/C.png">
                <img src="images/B.png">
                <img src="images/D.png">
                <img src="images/E.png">
            </figure>

        </div>

    </div>

  <div class = "group1">
  
        <p class = "pcktyp">
        Platinum 
        </p>
       

     <P class = "list">
         <ul>
             <li>  PPC Managment Services</li>
             <li>  SEO Services</li>
             <li>  SEO Audits</li>
             <li>  Programmatic Advertising </li>
             <li>  Social media support</li>
             <li>  24/7 Service</li>
         </ul>
     </P>

     <a href ="payment.php"> <!-- links to the payment page-->
        <button  class = "button" >
           Get Package
       </button>  
   </a>

    </div>

    <div class = "group1">
  
        <p class = "pcktyp">
        Gold
        </p>
       

     <P class = "list">
         <ul>
             <li>  Social media support</li>
             <li>  Social media design</li>
             <li>  Enterprise PPC Management Services</li>
             <li>  SEO </li>
             <li>  24/7 Support</li>
             <li>  PPC</li>
         </ul>
     </P>

     <a href ="payment.php">
        <button  class = "button" >
           Get Package
       </button>  
   </a>
    </div>
    <div class = "group1">
  
        <p class = "pcktyp">
        Silver
        </p>
       

     <P class = "list">
         <ul>
             <li>  Social media support</li>
             <li>  Enterprise PPC Management Services</li>
             <li>  Ecommerce SEO Services</li>
             <li>  24/7 Support</li>
             <li>  Social media help</li>
             <li>  SEO</li>
         </ul>
     </P>

     <a href ="payment.php">
        <button  class = "button" >
           Get Package
       </button>  
   </a>

    </div>
    <br>
    <br>
    <div class = "group1">
  
        <p class = "pcktyp">
        Bronze
        </p>
       

     <P class = "list">
         <ul>
             <li> Social media support </li>
             <li>  Social Media Design</li>
             <li>  Ecommerce PIM</li>
             <li>  ADA Compliance Services</li>
             <li>  Voice Search Content Optimization</li>
             <li>  24/7 support</li>
         </ul>
         <a href ="payment.php">
         <button  class = "button" >
            Get Package
        </button>  
    </a>
     </P>

    </div>
    
            <center>
                <!-- footer-->
                <h6 class = "footer"> © 2022 - Advertising Geek Marketing Agency / Write For Us / Refer Advertising Geek / Terms  </h6>
            </center>

</body>















</html>