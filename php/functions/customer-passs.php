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
   
    $sql = "INSERT INTO pass(username, pass_id, bus_no,start_stp,end_stp,bus_type,pass_amt,card_no,expiry) VALUES ('$username', 
    '$pass_id','$bus_no','$start_stp','$end_stp','$bus_type','$pass_amt','$card_no','$expiry');";
      if (mysqli_query($conn,$sql)) 
      {
         echo "Registered successfully";
      }
      else 
      {
            echo "Error";
      }
     
      $sql1="UPDATE pass SET username=username+'$username',pass_id=pass_id+'$pass_id', bus_no=bus_no+'$bus_no',start_stp=start_stp+'$start_stp',end_stp=end_stp+'$end_stp',bus_type=bus_type+'$bus_type',pass_amt=pass_amt+'$pass_amt',card_no=card_no+'$card_no',expiry=expiry+'$expiry';";
       if(mysqli_query($conn,$sql))
      {
         
      echo "Registered successfully";
       }
   mysqli_close($conn);
?>