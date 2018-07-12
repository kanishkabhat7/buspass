<?php 

   include('../database/connect.php');

   $username = $_POST['username'];
   $pass_id = $_POST['pass_id'];
   $bus_no = $_POST['bus_no'];
   $start_stp = $_POST['start_stp'];
   $end_stp = $_POST['end_stp'];
   $bus_type=$_POST['bus_type'];
   $pass_amt=$_POST['pass_amt'];
   $card_no=$_POST['card_no'];
   $expiry=$_POST['expiry'];
   
    $sql = "INSERT INTO pass(username, pass_id, bus_no,start_stp,end_stp,bus_type,pass_amt,card_no,expiry) VALUES ('$username', '$pass_id', '$bus_no','$start_stp','$end_stp','$bus_type','$pass_amt','$card_no','$expiry');";
      if (mysqli_query($conn, $sql)) {
         echo "Registered successfully";
      }
      else 
      {
            echo "Error";
      }
   mysqli_close($conn);
?>