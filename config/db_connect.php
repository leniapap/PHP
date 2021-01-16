<?php




//connect to database

$conn =mysqli_connect('localhost','leniapap','1234','leniapizza');



//check connection_aborted
if(!$conn){     //if connection is false
	echo 'Connection error: ' . mysqli_connect_error();
	
}

?>