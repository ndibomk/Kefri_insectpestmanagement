<?php
require("connection.php");

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $email=$_POST['email'];

    $fileName = basename($_FILES["image"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    if(in_array($fileType, $allowTypes)) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $sql = "INSERT INTO persons (image, name, class,email) VALUES ('$imgContent', '$name', '$class','$email')";

        if ($dbconnect->query($sql) === TRUE) {
            $success = "<p style='color:green;'>Successful Signup! Now you can <a href='login.php'>Login</a>!<p/>";
        } else {
            $error = "<p style='color:red;'>Error: " . $dbconnect->error . "</p>";
        }
    } else {
        $error = "<p style='color:red;'>Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEFRI INSECT PEST MANAGEMENT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
    <form action="ourteamregister.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="text" name="name">
        <input type="text" name="class">
         <input type="email" name="email">
        <button type="submit" name="save">Register</button>
    </form>
    
</body>

</html>
