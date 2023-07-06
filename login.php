<?php
require("connection.php");

$error = '';

if (isset($_POST['save'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password are provided and not empty
    if (!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM adminusers WHERE email='$email' AND password='$password'";
        $result = $dbconnect->query($sql);

        // Check if the query returned a matching row
        if ($result && $result->num_rows > 0) {
            // Authentication successful, redirect to another page
            header("Location: allinsects.php");
            exit(); // Make sure to exit after the redirect
        } else {
            // Authentication failed
            $error = "Invalid email or password!";
        }
    } else {
        // Email or password is empty
        $error = "Please enter email and password!";
    }

    // Close the database connection
    $dbconnect->close();
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
<?php include 'header.php'; ?>

    <section id="hero" style="padding-top: 90px; padding-bottom:50px">  
        <div class="wrapper-login" >
            <h2 style="margin-bottom: 10px;">Member Login</h2>
            <form action="#" method="post">
                <div class="input-box">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <input type="email" placeholder="Enter your email" class="inputclass" name="email">
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <input type="password" placeholder="Enter your password" name="password">
                </div>
                <?php if (!empty($error)): ?>
                    <p style="color: white;"><?php echo $error; ?></p>
                <?php endif; ?>
                <button name="save" class="btnlogin">Login</button>
            </form>
        </div>
    </section>

    <?php include 'footer.php'; ?>
           
</body>
</html>
