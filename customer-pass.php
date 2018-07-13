<html>
<head>
   
 <meta charset="utf-8">
    
 <title></title>
    
 <meta name="viewport" content="width=device-width, initial-scale=1">
   
 <link rel="stylesheet" href="main.css"/>
 
</head>
  
<body>
   <?php
   include("main1.php");
   ?>
    
<div class="nav" style="background-image: linear-gradient(to bottom, #004da4 0%, #1e3c6e 100%);font-size:50px;margin-top:0">
<marquee style="color:white;font-size:41px;">WELCOME TO BUS PASS SYSTEM<img src="images/bus.jpg" 
 height="50" /></marquee>
</div>

<center>
<div class="home-wrapp" style="margin-left: 350px;">
      
<div class="register-wrapp">
      
<h3>Create Pass</h3>

        
<form action="php/functions/customer-passs.php" name="customer-pass" method="post">
       
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
   <label for="card_no">Card No</br>      
   	<input type="text" name="card_no" required />
       
   </label> 

  
    <label for="expiry">Expiry Date</br>    
   	<input type="text" name="expiry" required />
       
   </label> 

  
   <label>        
	<input type="submit" value="Submit" />
 
   </label>      
 </form>
</div>
</div>
</center>
     
 </body>

</html>

