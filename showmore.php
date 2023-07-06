
</html>
<?php
require("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve species ID from query string
    $species_id = $_GET['species_id'];

    // Fetch the insect details from the database
    $sql = "SELECT * FROM insects WHERE species_id = '$species_id'";
    $result = mysqli_query($dbconnect, $sql);
    $row = mysqli_fetch_assoc($result);

    mysqli_close($dbconnect);
}
?>
<html>
<head>
        <meta charset="UTF=8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KEFRI INSECT PEST MANAGEMENT</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
     <style>
        table {
    border-collapse: collapse;
    width: 600px;
    height: 100% !important;
    /* margin-top: 20px;
    margin:auto; */
    backdrop-filter: blur(5px);
   
  
    font-size: 18px;
    margin-top: 0% !important;
    color: rgb(221, 218, 218) !important;
      
}

 td {
    border: 1px solid rgb(155, 155, 155);
    padding: 8px;
    background-color:#2c632c !important;
    width: 80% !important;
   
}
th{
    border: 1px solid rgb(155, 155, 155);
    background-color:#2c632c !important;
    padding: 8px;
    width: 20% !important;
   
}
.imageshow{
    object-fit: cover;
    width: 300px; 
    height: auto;
   
    border: 1px solid white;
   
}
</style>
    </head>
    <body>

    <?php include 'header.php'; ?>

<?php if (!empty($row)) { ?>
   
    <section id="addmoredetails"  class="">
    <h2 style="text-align: center;font-size:40px; text-transform: capitalize; ">More Information about:<?php echo $row['species']; ?> </h2>
    <div class='allitems'>
    <div  >
     <img class="imageshow" src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="Image">
   </div>
    <table>  
        <tr>
            <th>Category</th>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <tr>
            <th>Species</th>
            <td><?php echo $row['species']; ?></td>
        </tr>
        <tr>
            <th>Genus</th>
            <td><?php echo $row['genus']; ?></td>
        </tr>
        <tr>
            <th>Order</th>
            <td><?php echo $row['theorder']; ?></td>
        </tr>
        <tr>
            <th>Family</th>
            <td><?php echo $row['family']; ?></td>
        </tr>
        <tr>
            <th>Symptoms</th>
            <td><?php echo $row['symptoms']; ?></td>
        </tr>
        <tr>
            <th>Biology</th>
            <td><?php echo $row['biology']; ?></td>
        </tr>
        <tr>
            <th>Control Methods</th>
            <td><?php echo $row['control_methods']; ?></td>
        </tr>
        <tr>
            <th>Growth Stage</th>
            <td><?php echo $row['growth_stage']; ?></td>
        </tr>
        <tr>
            <th>Disease Name</th>
            <td><?php echo $row['disease_name']; ?></td>
        </tr>
        <tr>
            <th>Synonym</th>
            <td><?php echo $row['synonym']; ?></td>
        </tr>
        <tr>
            <th>Host Name</th>
            <td><?php echo $row['host_name']; ?></td>
        </tr>
        <tr>
            <th>Affected&nbsp; Parts</th>
            <td><?php echo $row['affected_parts']; ?></td>
        </tr>
        <tr>
            <td colspan="2">
          
            <?php echo "<a href=\"edit.php?species_id=" . $row['species_id'] . "\">edit</a>"; ?>
            <?php echo "<a href=\"delete.php?species_id=" . $row['species_id'] . "\">Delete</a>"; ?></td>
            </td>
        </tr>
       
    </table>
<?php } else { ?>
    <p>No insect details found for the given ID.</p>
<?php } ?>
</div>
</section>
<?php include 'footer.php'; ?>
            

</body>
</html>
