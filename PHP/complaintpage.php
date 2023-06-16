<?php

$con = new mysqli("localhost","root","","onlineadvertisingagency"); // the connection Object
	if ($con-> connect_error){ //check Connection
		die("Connection Failed." .$con-> connect_error );
	}	


 $name = $_POST['name'];
 $username = $_POST['username'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $complaint = $_POST['complaint'];

 $sql = "INSERT INTO complaints(`Name`,`Username`,`ContactNo`,`Email`,`Complaint`) 
 values ( '$name', ' $username', '$mobile','$email', '$complaint')" ;

$con->query($sql);
$con->close(); 

?>