<?php 

	include('../database/connect.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	

	$sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password';";

	if (mysqli_query($conn, $sql)->fetch_array(MYSQLI_NUM) > 0) {
		echo "Logged in";
    	header("Location: ../../main1.php");
	} 
	else {
	    echo "Invalid Credentials";
	}

	mysqli_close($conn);

 ?>