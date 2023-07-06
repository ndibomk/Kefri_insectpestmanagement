<?php
require('connection.php');


$entriesPerPage = 5;


$query = "SELECT COUNT(*) as total FROM trees";
$result = mysqli_query($dbconnect, $query);
$row = mysqli_fetch_assoc($result);

$totalEntries = $row['total'];

$totalPages = ceil($totalEntries / $entriesPerPage);


$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $entriesPerPage;


$query = "SELECT * FROM Trees LIMIT $offset, $entriesPerPage";
$results = mysqli_query($dbconnect, $query);

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM Trees WHERE 
        scientificname LIKE '%$search%' OR 
        uses LIKE '%$search%' OR 
         plantingknowhow  LIKE '%$search%' OR 
        plantinglocation  LIKE  '%$search%' OR 
         medicinalvalue  LIKE '%$search%' OR 
        affectingpests LIKE '%$search%' OR 
       
        othername LIKE '%$search%'";
    $results = mysqli_query($dbconnect, $query);
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

<style>
        
        tr{
            height: 72px;
        }
    </style>

<body>
<?php include 'header.php'; ?>

       
   
    <section id="addmoredetailss" style="width: 100%;">
    <section id="page-header" class="about-header" style="background-image:none !important">  
           <h2>#Our Trees</h2>
           <p>Learn and Explore the beauty and benefits of trees.</p>

    </section>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <div class="treeinfo">
             <p class="scientific"><?php echo $row['scientificname']; ?></p>
        <div class="treeimages">
            <div class="seedimages">
           

            <img class="seedimage" src="data:seedImage/jpeg;base64,<?php echo base64_encode($row['seedimage']); ?>" >
            <img class="seedlingimage" src="data:seedImage1/jpeg;base64,<?php echo base64_encode($row['seedlingimage']); ?>" > 
            </div> 
           
            <div>
            <img class="treeimage" src="data:seedImage2/jpeg;base64,<?php echo base64_encode($row['treeimage']); ?>" >
            </div>
            <div>
                <table class="mforestortable" style="margin-top:0px; width:400px;">
                    <tr>
                        <td class='headings'>Other Names</td>
                        <td><?php echo $row['othername']; ?> <br></td>
                    </tr>
                    <tr>
                        <td class='headings'>Uses</td>
                        <td><?php echo $row['uses']; ?></td>
                    </tr>
                    <tr>
                        <td class='headings'>Medicinalvalue</td>
                        <td><?php echo $row['medicinalvalue']; ?></td>
                    </tr>
                    <tr>
                        <td class='headings'>How to plant</td>
                        <td><?php echo $row['plantingknowhow']; ?> .If you want to know more <a style="color:black;"
                         href="https://www.kefri.org/treevalue/https://www.kefri.org/treevalue/">Click me</a></td>
                    </tr>
                    <tr>
                        <td class='headings'>Where to plant</td>
                        <td><?php echo $row['plantinglocation']; ?>
                         .If you want to know more <a style="color:black;" href="https://kefriapp.web.app/#/">click me</a></td>
                    </tr>
                    <tr>
                        <td class='headings'>Pests that can affect</td>
                        <td><?php echo $row['affectingpests']; ?></td>
                    </tr>


                </table>
            </div>
            </div>
            </div>

        <?php } ?>

    <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                <a href="?page=<?php echo $i; ?>" <?php if ($page == $i) echo 'class="active"'; ?>><?php echo $i; ?></a>
            <?php } ?>
        </div>
    </section>
    <?php include 'footer.php'; ?>
           
</body>
</html>
