<?php

$con = new mysqli("localhost","root","","onlineadvertisingagency"); // the connection Object
	if ($con-> connect_error){ //check Connection
		die("Connection Failed." .$con-> connect_error );
	}	
//#post=taking the user value
//assigning the variables 
 $FullName = $_POST['FullName'];
 $EmailAddress = $_POST['EmailAddress'];
 $PhoneNumber = $_POST['PhoneNumber'];
 $Company = $_POST['Company'];
 $msg = $_POST['msg'];

//insert table
 $sql = "INSERT INTO contacts(`Full_Name`,`Email`,`Phone`,`Company`,`msg` ) 
 values ( '$FullName', ' $EmailAddress', '$PhoneNumber', '$Company ','$msg')" ;

$con->query($sql); //excute the query
header("Location: ../cty.php" ); //destination file
$con->close();  //closing the connection

?>