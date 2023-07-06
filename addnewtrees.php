<?php
require("connection.php");

if (isset($_POST['addnew'])) {
    $fileName = basename($_FILES["seedimage"]["name"]);
    $fileName1 = basename($_FILES["seedlingimage"]["name"]);
    $fileName2 = basename($_FILES["treeimage"]["name"]);

    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION);
    $fileType2 = pathinfo($fileName2, PATHINFO_EXTENSION);

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    if (in_array($fileType, $allowTypes) && in_array($fileType1, $allowTypes) && in_array($fileType2, $allowTypes)) {
        $seedImage = $_FILES['seedimage']['tmp_name'];
        $seedlingImage = $_FILES['seedlingimage']['tmp_name'];
        $treeImage = $_FILES['treeimage']['tmp_name'];

        $seedImgContent = addslashes(file_get_contents($seedImage));
        $seedlingImgContent = addslashes(file_get_contents($seedlingImage));
        $treeImgContent = addslashes(file_get_contents($treeImage));

        // Rest of your code for processing and storing the image contents
        $scientificname = $_POST["scientificname"];
        $othernames = $_POST["othernames"];
        $uses = $_POST["uses"];
        $medicinalvalue = $_POST["medicinalvalue"];
        $plantingknowhow = $_POST["plantingknowhow"];
        $plantinglocation = $_POST["plantinglocation"];
        $affectingpests = $_POST["affectingpests"];
       

        $sql = "INSERT INTO Trees (scientificname,othername, uses, medicinalvalue, plantingknowhow, plantinglocation, affectingpests, seedimage,  seedlingimage,  treeimage)
         VALUES ('$scientificname','$othernames', '$uses', '$medicinalvalue', '$plantingknowhow', '$plantinglocation', '$affectingpests', '$seedImgContent',  '$seedlingImgContent',  '$treeImgContent')";

        if ($dbconnect->query($sql) === TRUE) {
            echo ("<p style='color:green;'>Successful Signup<p/>");
        } else {            echo ("<p style='color:red;'>Unsuccessful Signup<p/>");
        }
    } else {
        echo ("<p style='color:red;'>Invalid file type. Only JPG, PNG, JPEG, and GIF files are allowed.<p/>");
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
    <?php include 'header.php'; ?>


        <section id="add_details" class="section-p1"> 
            <h1 style="font-size: 30px; text-align:center; ">Add New Tree Form</h1>
            <div class="a_details">
                <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form_column">
                        <p>Seed Image</p>
                         <input type="file" name="seedimage" width="300">
                         <p>Seedling Image</p>
                         <input type="file" name="seedlingimage" width="300">
                         <p>Tree Image</p>
                         <input type="file" name="treeimage" width="300">
                         <p>scientific Name</p>
                        <input type="text" required name="scientificname" >
                        <p>Other Name</p>
                        <input type="text" required name="othernames" >
                        <p>Uses</p>
                        <input type="text" required name="uses" >
                        
                    </div>

                    <div class="form_column">
                    <p>How to plant</p>
                        <input type="text" required name="plantingknowhow" >
                        <p>Pest that can affect</p>
                        <input type="text" required name="affectingpests">
                        <p>Where to plant</p>
                        <input type="text" required name="plantinglocation"  >
                        <p>Medicinal value</p>
                        <input type="text" required name="medicinalvalue">
                        <p>Tree value</p>
                        <input type="text" required name="treevalue">

                        
                    </div>

                    <button id="addbutton" name="addnew" type="submit">Add</button>
                </form>
                </div>
            </div>
        </section>


        <?php include 'footer.php'; ?>
            

       
    </body>
</html>