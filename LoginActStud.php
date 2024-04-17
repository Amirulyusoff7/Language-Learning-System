<?php 

session_start();

include "database.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
	function action($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	   return $data;
	}

	$user = action($_POST['username']);
	$pass = action($_POST['password']);

if (empty($user)) {
	header("Location: LoginStudent.php?error=Please enter a username");
		exit(); 
	}	else if(empty($pass)) {
 	header("Location: LoginStudent.php?error=Please enter the password");
	    exit();
	} else {

		$sql = "SELECT * FROM visitor WHERE VISITORUSERNAME='$user' AND VISITORPASSWORD='$pass'" ;

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['VISITORUSERNAME'] === $user && $row['VISITORPASSWORD'] === $pass){
				$_SESSION['VISITORUSERNAME'] = $row['VISITORUSERNAME'];
            	$_SESSION['VISITORUSERNAME'] = $row['VISITORUSERNAME'];
            	$_SESSION['VISITORID'] = $row['VISITORID'];
            	header("Location: HomePage.php");
		        exit();
			} else {
				header("Location: LoginStudent.php?error=Incorect username or password");
		        exit(); }
			}else{
			header("Location: LoginStudent.php?error=Incorect username or password");
	        exit();
		}
	}

} else{
	header("Location: HomePage.php");
	exit();
}