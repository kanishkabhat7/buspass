
<?php

$id = $_POST['id'];
include("../database/connect.php");
$sql = "DELETE FROM customer WHERE id =  '$id'";
mysqli_query($conn , $sql );
header("location:../../index.html");
?>