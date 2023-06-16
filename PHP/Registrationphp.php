<?php

 
	
$con = new mysqli("127.0.0.1","root","","onlineadvertisingagency"); // the connection Object
	if ($con-> connect_error){ //check Connection
		die("Connection Failed." .$con-> connect_error );
	}	

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$confirmpwd = $_POST['confirmpwd'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];

$sql="INSERT INTO Customer_details( `First_Name`, `Last_Name`, `DOB`, `Gender`, `Email`, `Password`,`Address`, `Mobile`)
                         VALUES ('$fname','$lname','$dob','$gender','$email','$pwd','$address','$mobile')";
 
	 $con->query($sql);
	 header("Location: ../Online advertising agency user account page .php" );
	$con->close(); 

?>