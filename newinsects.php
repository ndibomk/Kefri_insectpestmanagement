<?php
require("connection.php");

if (isset($_POST['addnew'])){
    $fileName = basename($_FILES["image"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

        
        
    $category=$species=$genus=$theorder=$family=$symptoms=$biology=$control_methods='';
    $growth_stage=$disease_name=$synonym=$hostname=$affected_parts='';

      
  $category=$_POST["category"];
  $species=$_POST["species"];
  $genus=$_POST["genus"];
  $theorder=$_POST["theorder"];
  $family=$_POST["family"];
  $symptoms=$_POST["symptoms"];
  $biology=$_POST["biology"];
  $control_methods=$_POST["control_methods"];
  $growth_stage=$_POST["growth_stage"];
  $disease_name=$_POST["disease_name"];
  $synonym=$_POST["synonym"];
  $hostname=$_POST["hostname"];
  $affected_parts=$_POST["affected_parts"];
    

  // if (empty($synonym)) {
  //   echo 'Please enter synonyms';
  //   return false;
  // }

  // if (empty($category)) {
  //   echo 'Please enter category';
  //   return false;
  // }

  // if (empty($genus)) {
  //   echo 'Please enter genus';
  //   return false;
  // }

  // if (empty($species)) {
  //   echo 'Please enter species';
  //   return false;
  // }

  // if (empty($theorder)) {
  //   echo 'Please enter order';
  //   return false;
  // }

  // if (empty($family)) {
  //   echo 'Please enter Family';
  //   return false;
  // }

  // if (empty($symptoms)) {
  //   echo 'Please enter symptoms';
  //   return false;
  // }

  // if (empty($biology)) {
  //   echo 'Please enter the biology';
  //   return false;
  // }

  // if (empty($control_methods)) {
  //   echo 'Please enter the control methods';
  //   return false;
  // }

  // if (empty($growth_stage)) {
  //   echo 'Please enter growth stage';
  //   return false;
  // }

  // if (empty($disease_name)) {
  //   echo 'Please enter disease name';
  //   return false;
  // }

  // if (empty($hostname)) {
  //   echo 'Please enter synonyms';
  //   return false;
  // }



  // // All validations passed, form is valid
  // return true;


  $sql = "INSERT INTO insects (image, category, species, genus, theorder, family, symptoms, biology, control_methods, growth_stage, disease_name, synonym, host_name, affected_parts)
  VALUES ('$imgContent', '$category', '$species', '$genus', '$theorder', '$family', '$symptoms', '$biology', '$control_methods', '$growth_stage', '$disease_name', '$synonym', '$hostname', '$affected_parts')";
  
       

       if ($dbconnect->query($sql) === TRUE) {
        echo ("<p style='color:green;'>Successful Signup<p/>");
        } else {
       echo( "<p style='color:green;'>unSuccessful Signup<p/>");
        }

}}
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
    <?php include 'adminheader.php'; ?>

        

        <section id="add_details" class="section-p1"> 
        <h6  class="newinsectsheading">Add New Insects Form</h6>

            <div class="a_details">
                <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form_column">
                        <p>Image</p>
                        
                      
                     <input type="file" name="image" width="300">
                        <p>Synonym</p>
                        <input type="text" required name="synonym" placeholder="Synonym">
                        <p>Category</p>
                        <input type="text" required name="category" placeholder="Category">
                        <p>Genus</p>
                        <input type="text" required name="genus" placeholder="Genus">
                        <p>Species</p>
                        <input type="text" required name="species" placeholder="Species">
                        <p>Order</p>
                        <input type="text" required name="theorder"  placeholder="Order">
                        <p>Family</p>
                        <input type="text" required name="family" placeholder="Family">
                        
                    </div>

                    <div class="form_column">
                        <p>Symptoms</p>
                        <input type="text" required name="symptoms" placeholder="Symptoms">
                        <p>Biology ie: physical appearance of the diseased part</p>
                        <input type="text" required name="biology" placeholder="Biology">
                        <p>Control Methods</p>
                        <input type="text" required name="control_methods" placeholder="Control Methods">
                        <p>Growth stage</p>
                        <input type="text" required name="growth_stage" placeholder="Growth stage">
                        <p>Disease Name</p>
                        <input type="text" required name="disease_name" placeholder="Disease Name">
                        <p>Host Name</p>
                        <input type="text" required name="hostname" placeholder="Host name">
                        <p>Affected part</p>
                        <input type="text" required name="affected_parts" required placeholder="Affected part">
                    </div>

                    <button id="addbutton" name="addnew" type="submit">Add</button>
                </form>
                </div>
            </div>
        </section>


        <?php include 'footer.php'; ?>
           

       
    </body>
</html>