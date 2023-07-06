<?php
require("connection.php");

if(isset($_POST['save'])){

    //Creating variables to hold the form data
    $name = $email  = $password = '';
   
  
    //Picking up the data from form
    $name = $_POST['name'];
   $email = $_POST['email'];
    $password = $_POST['password'];
   
    $sql = "INSERT INTO adminusers (name, email, password)
  VALUES ('$name', '$email',  '$password')";

 
  if ($dbconnect->query($sql) === TRUE) {
  $success = "<p style='color:green;'>Successful Signup! Now you can <a href='login.php'>Login</a>!<p/>";
  } else {
  $error['general'] = "<p style='color:red;'> Error: " . $dbconnect->error . "</p>";
  }

}
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KEFRI INSECT PEST MANAGEMENT</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    </head>

    <body>
        <form action="register.php" method="post">
            <input type="text" name="name">
            <input type="email" name="email">
            <input type="password" name="password">
            <button name="save">Register</button>
        </form>
    </body>
</html>