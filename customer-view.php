<html>
<head>
    <meta charset="utf-8">
    <title>Travellers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" />
</head>
<body>


<?php
  include("main1.php"); 
  include("php/database/connect.php");

	$sql = "SELECT * FROM customer;";

	$result = mysqli_query($conn , $sql);
	while($row = mysqli_fetch_array( $result )) {
		$username=$row['username'] ;
		$firstname= $row['firstname'] ;
		$lastname=$row['lastname'] ;
		$age=$row['age'] ;
		$gender=$row['gender'] ;
		$address= $row['address']  ;
	}
	$conn->close();
?>

<div style="width:57%;height:50px;">

<h2 style="text-align:left;color:black;background-color: green">Registered Travellers</h2>

</div>
<div >
	<div style="width:100%;float:left;margin:10px">
</div>
	

<div style="width:60%;float:left;color:blue;">
    	
      <table  border=1 style="width: 95%;margin:40px 10px;float: left">

             <tr>
                <td>Username</td>
             	<td><?php echo $username; ?></td>
             	
             </tr>
             <tr>
                <td>Name</td>
             	<td><?php echo $firstname. $lastname ; ?></td>
             	
             </tr>

             <tr>
                <td>Age</td>
             	<td><?php echo $age; ?></td>
             	
             </tr>

             <tr>
                <td>Address</td>
             	<td><?php echo $address; ?></td>
             	
              </tr>

              <tr>
                <td>Gender</td>
              	<td><?php echo $gender; ?></td>
              	
              </tr>
	</table>
	<style>
	table tr td
	{
		color:blue;
		padding:10px;
	}
</style>
</div>
<p class="butt-new"><a href="traveller-edit.php">Edit</a></p>
<p class="butt-new"><a href="delete.php">Delete</a></p>

</body>
</html>	