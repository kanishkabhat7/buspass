<?php 

	include('../database/connect.php');
    
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$pass_re = $_POST['pass_re'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	if($password != $pass_re) die("Passwords did not match. Try Again! \n\n Press back!");
    $sql = "INSERT INTO customer(username, firstname, lastname, password,pass_re,age,gender,address) VALUES ('$username', '$firstname', '$lastname','$password','$pass_re','$age','$gender','$address');";
		if (mysqli_query($conn, $sql)) {
	    	echo "Registered successfully";
		}
		else {
   			echo "Error";
		}
	mysqli_close($conn);
?>