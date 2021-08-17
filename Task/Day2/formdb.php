<?php

$host= "localhost";
$dbUsername= "root@";
$dbPassword= "";
$dbName= "form";

$conn= new mysqli($host,$dbUsername,$dbPassword,$dbName);

if ($conn->connect_error){
	die('couid not connect to database');
}
else{
	echo "connection successful"; 	
	
}

?>



	

