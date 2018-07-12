<?php
error_reporting(0);

$user = 'root';
$pass = 'transport';
$url = 'localhost';
$db_name = 'Transport';

// Create connection
$conn = mysqli_connect($url, $user, $pass, $db_name);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
