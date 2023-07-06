<?php
require("connection.php");

$species_id = $_GET['species_id'] ?? null;
$row = null;

if ($species_id) {
    $sql = "SELECT * FROM insects WHERE species_id = '$species_id'";
    $result = mysqli_query($dbconnect, $sql);
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST["category"] ?? $row['category'];
    $species = $_POST["species"] ?? $row['species'];
    $genus = $_POST["genus"] ?? $row['genus'];
    $theorder = $_POST["theorder"] ?? $row['theorder'];
    $family = $_POST["family"] ?? $row['family'];
    $symptoms = $_POST["symptoms"] ?? $row['symptoms'];
    $biology = $_POST["biology"] ?? $row['biology'];
    $control_methods = $_POST["control_methods"] ?? $row['control_methods'];
    $growth_stage = $_POST["growth_stage"] ?? $row['growth_stage'];
    $disease_name = $_POST["disease_name"] ?? $row['disease_name'];
    $synonym = $_POST["synonym"] ?? $row['synonym'];
    $hostname = $_POST["hostname"] ?? $row['host_name'];
    $affected_parts = $_POST["affected_parts"] ?? $row['affected_parts'];

    $sql = "UPDATE insects SET category = '$category', species = '$species', genus = '$genus',
        theorder = '$theorder', family = '$family', symptoms = '$symptoms', biology = '$biology', 
        control_methods = '$control_methods', growth_stage = '$growth_stage', disease_name = '$disease_name',
        synonym = '$synonym', host_name = '$hostname', affected_parts = '$affected_parts'
        WHERE species_id = '$species_id'";

    mysqli_query($dbconnect, $sql);
    mysqli_close($dbconnect);
    header("Location: allinsects.php");
    exit();
}



?>

<!DOCTYPE html>
<html>
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
<body>
<section id="add_details" class="section-p1"> 
<h1>Edit Insect</h1>
    <div class="a_details">
    <div class="forms">
    <form action="#" method="POST">
    <div class="form_column">
        <label for="category">Category:</label>
        <input type="text" name="category" value="<?php echo $row['category'] ?? ''; ?>"><br>

        <label for="species">Species:</label>
        <input type="text" name="species" value="<?php echo $row['species'] ?? ''; ?>"><br>

        <label for="genus">Genus:</label>
        <input type="text" name="genus" value="<?php echo $row['genus'] ?? ''; ?>"><br>

        <label for="theorder">Order:</label>
        <input type="text" name="theorder" value="<?php echo $row['theorder'] ?? ''; ?>"><br>

        <label for="family">Family:</label>
        <input type="text" name="family" value="<?php echo $row['family'] ?? ''; ?>"><br>
 
  
      <label for="symptoms">Symptoms:</label>
        <input type="text" name="symptoms" value="<?php echo $row['symptoms'] ?? ''; ?>"><br>

        <label for="biology">Biology:</label>
        <input type="text" name="biology" value="<?php echo $row['biology'] ?? ''; ?>"><br>
        </div>
        <div class="form_column">
        <label for="control_methods">Control Methods:</label>
        <input type="text" name="control_methods" value="<?php echo $row['control_methods'] ?? ''; ?>"><br>

        <label for="growth_stage">Growth Stage:</label>
        <input type="text" name="growth_stage" value="<?php echo $row['growth_stage'] ?? ''; ?>"><br>

        <label for="disease_name">Disease Name:</label>
        <input type="text" name="disease_name" value="<?php echo $row['disease_name'] ?? ''; ?>"><br>

        <label for="synonym">Synonym:</label>
        <input type="text" name="synonym" value="<?php echo $row['synonym'] ?? ''; ?>"><br>

        <label for="hostname">Host Name:</label>
        <input type="text" name="hostname" value="<?php echo $row['host_name'] ?? ''; ?>"><br>

        <label for="affected_parts">Affected Parts:</label>
        <input type="text" name="affected_parts" value="<?php echo $row['affected_parts'] ?? ''; ?>"><br>

        <input style=" background-color:#45a049; border: none; color:white;" type="submit" value="Update">
    </div>
    </form>
    </div>
    </div>
</section>
</body>

</html>
