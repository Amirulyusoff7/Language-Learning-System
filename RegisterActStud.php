<?php

include "database.php";

$sid = mysqli_real_escape_string($conn, $_REQUEST['sid']);
$sname = mysqli_real_escape_string($conn, $_REQUEST['name']);
$semail = mysqli_real_escape_string($conn, $_REQUEST['email']);
$susername = mysqli_real_escape_string($conn, $_REQUEST['username']);
$spassword = mysqli_real_escape_string($conn, $_REQUEST['password']);


		$sql=sprintf("INSERT INTO visitor (VISITORID,VISITORNAME, VISITOREMAIL, VISITORUSERNAME, VISITORPASSWORD ) VALUES ('".$sid."','".$sname."', '".$semail."', '".$susername."', '".$spassword."')");

		if(mysqli_query($conn, $sql))
		{
			echo "Successfully saved.";
			header("Location: LoginStudent.php");
		}
		else
		{
			echo "There were errors while saving the data.";
		}

?>