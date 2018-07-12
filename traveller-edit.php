 <?php   

include('php/database/connect.php');

$username = $_GET['username'];

$result = mysqli_query($conn, "SELECT * FROM customer WHERE username='$username';");

$row = mysqli_fetch_array( $result );

  $username=$_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $pass_re = $_POST['pass_re'];
  $age = $_POST['age'];
  $address = $_POST['address'];

?>
 <html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div class="nav"></div>
    <form action="php/functions/edit.php?username=<?php echo $username ?>" method="post">
      <label for="username">Username <br/>
        <input name="username" value="<?php echo $username ?>" required />
      </label> 
      <label for="firstname">First Name <br/>
        <input name="firstname" value="<?php echo $firstname ?>" required />
      </label> 
      <label for="lastname">Last Name <br/>
        <input name="lastname" value="<?php echo $lastname ?>" required />
      </label> 
      <label for="password">Password<br/>
        <input type="password" name="password" value="<?php echo $password ?>" required />
      </label> 
      <label for="pass_re">Password Re-enter<br/>
        <input type="password" name="pass_re" value="<?php echo $pass_re ?>" required />
      </label>
     <label for="age">Age <br/>
      <input type="number" name="age" value="<?php echo $age ?>" required />
      </label> 

      <label for="address">Address <br/>
      <input type="text" name="address" value="<?php echo $address ?>" required />
      </label> 

      <input type="submit" value="Save" />
    </form>
    
  </body>
</html>