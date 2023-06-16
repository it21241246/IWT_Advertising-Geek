<?php

$con = new mysqli("localhost","root","","onlineadvertisingagency"); // the connection Object
	if ($con-> connect_error){ //check Connection
		die("Connection Failed." .$con-> connect_error );
	}	


    $name = $_POST['name'];
	$Cnumber = $_POST['Cnumber'];
	$ExpM= $_POST['ExpM'];
	$ExpY = $_POST['ExpY'];
	$CVV = $_POST['CVV'];
	

    $sql="INSERT INTO payments( `Name`, `Cnumber`, `ExpM`, `ExpY`, `CVV`)
                         VALUES ('$name','$Cnumber','$ExpM','$ExpY','$CVV')";
 
	 $con->query($sql);
	 header("Location: ../Online advertising agency user account page .php" );
	$con->close(); 

?>