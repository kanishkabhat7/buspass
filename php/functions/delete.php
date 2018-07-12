<?php
 include('../database/connect.php');
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['username'])&&is_numeric($_GET['username']))
 {
	 // get id value
	 $username = $_GET['username'];
	 
	 // delete the entry
	 $result = mysqli_query($conn,"DELETE FROM customer WHERE username=$username;");
	 header("Location:../../index.html"); // Move back to login.php with a logout message
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: customer-view.php");
 }
 
?>