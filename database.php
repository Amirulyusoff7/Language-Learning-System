<?php

/**
 * @file
 * Connect to mysql
 */

//Create connection credentials
$db_host = 'localhost';
$db_name = 'pr_tue07test';
$db_user = 'root';
$db_pass = '';

//Create mysqli object
//$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 

//Error handler
if($conn->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}


?>
