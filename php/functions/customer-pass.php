
<?php 
   if (isset($_POST['submit'])) 
	{
		include('php/database/connect.php');
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
      else {
            echo "Error";
      }
   mysqli_close($conn);
}
?>


<html>
  
<head>
   
 <meta charset="utf-8">
    
 <title></title>
    
 <meta name="viewport" content="width=device-width, initial-scale=1">
   
 <link rel="stylesheet" href="main.css"/>
 
</head>
  
<body>

<?php include("main1.php"); ?>
    
<div class="nav" style="background-color:black;font-size:50px;margin-top:0">
<marquee style="color:white;font-size:41px;">WELCOME TO BUS PASS SYSTEM<img src="Eicher.jpg" 
 height="50" /></marquee>
</div>

  
<div class="home-wrapp">
      
<div class="register-wrapp">
      
<h3>Create Pass</h3>

        
<form action="" name="customer-pass" method="post">
       
   <label for="username">User Name <br/>
           
 	<input type="text" name="username" required />
         
   </label> 

        
   <label for="pass_id">Pass ID <br/>
          
	<input type="text" name="pass_id" required />
          
   </label> 

         
   <label for="bus_no">Bus No <br/>
          
	<input type="number" name="bus_no" required />
        
   </label> 

         
   <label for="start_stp">Start Stop <br/>
        
  	<input type="text" name="start_stp" required />
         
   </label> 

        
   <label for="end_stp">End Stop<br/>
       
   	<input type="text" name="end_stp" required />
 
   </label>
   <label for="bus_type">Bus Type</br>    
	 <select name="bus_type"><option selected="true" disabled="disabled">Choose tagging</option><option value="Monthly">
Monthly</option> <option value="Quarterly">Quarterly</option><option value="Yearly">
Yearly</option><option value="Halfyearly">
Half Yearly</option></select>  
   	   </label>
   <label for="pass_amt">Pass Amount</br>     
         <input type="text" name="pass_amt" required />
 
   </label>  
   <label for="card_no">Card No      
   	<input type="text" name="card_no" required />
       
   </label> 

  
    <label for="expiry">Expiry Date      
   	<input type="text" name="expiry" required />
       
   </label> 

  
   <label>        
	<input type="submit" value="Submit" />
 
   </label>      
 </form>
     
 </body>

</html>

