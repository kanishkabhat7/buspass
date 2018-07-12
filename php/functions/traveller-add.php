<?php 

	include('../database/connect.php');

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$passwordre = $_POST['passwordre'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	$sql = "INSERT INTO customer(name, gender, age, address, validity) VALUES ('$firstname',$lastname,$password,$passwordre, '$gender', $age,'$address');";

	if (mysqli_query($conn, $sql)) {
    echo "Registered successfully! \n";

    $result = mysqli_query($conn, "SELECT id FROM customer WHERE name = '$name';");

    $row = mysqli_fetch_array( $result );

    $id = $row['id'];
	} 
	else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

 ?>