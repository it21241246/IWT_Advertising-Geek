<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "onlineadvertisingagency";

$con = new mysqli($servername, $username, $password,$db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }
    
    if(!empty($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query="select * from customer_details where Email ='$username' and Password = '$password'";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            header("Location: ../Online advertising agency user account page .php" );
        }
        else{
            echo "unsuccesfull";
        }
    }

    ?>


