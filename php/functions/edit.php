<?php 

	include('../database/connect.php');

	$username= $_GET['username'];

	$username=$_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$pass_re = $_POST['pass_re'];
	$age = $_POST['age'];
	$address = $_POST['address'];

	$sql = "UPDATE customer SET firstname = '$firstname',lastname = '$lastname',password = '$password',pass_re = '$pass_re', age = '$age', address = '$address' WHERE username = '$username';";
	/*$sql="ALTER table customer WHERE id=$id;";*/

	if (mysqli_query($conn, $sql)) {
    echo "Saved successfully! \n";
	}

	else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

 ?>