<?php
require('connection.php');


$entriesPerPage = 60;


$query = "SELECT COUNT(*) as total FROM insects";
$result = mysqli_query($dbconnect, $query);
$row = mysqli_fetch_assoc($result);
$totalEntries = $row['total'];

$totalPages = ceil($totalEntries / $entriesPerPage);


$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $entriesPerPage;


$query = "SELECT * FROM insects LIMIT $offset, $entriesPerPage";
$results = mysqli_query($dbconnect, $query);

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM insects WHERE 
        category LIKE '%$search%' OR 
        species LIKE '%$search%' OR 
        genus LIKE '%$search%' OR 
        theorder LIKE '%$search%' OR 
        family LIKE '%$search%' OR 
        symptoms LIKE '%$search%' OR 
        biology LIKE '%$search%'";
    $results = mysqli_query($dbconnect, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEFRI INSECT PEST MANAGEMENT</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        
#page-header{ 
    background-image: url(images/background.jpg);
    background-size: cover;
    width: 100%;
    height: 40vh;
    display: flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    padding: 10px;
}
#page-header h2{
    color: #000;
    font-size: 70px;
    margin-bottom: 5px;
    margin-top: 5px;
}
#page-header p{
    color: #000;
    font-weight: 500;
    font-size: 30px;
    margin-top: 0px;
}
         table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 0px;
           /* background-color: #f2f2f2; */
           background-color: #ccffbb;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
    

  
 
    </style>
</head>
<body>

   
   
<?php include 'header.php'; ?>
    <section id="page-header">
        
           
           <h2>#IPM  Database</h2>
           <p>Learn about pests that affect our plantations!</p> 

          
           
    </section>



    <section id="addmoredetails">
        <table class="tableall">
            <tr>
                <th>Category</th>
                <th>Species</th>
                <th>Genus</th>
                <th>Order</th>
                <th>Family</th>
                <th>Symptoms</th>
                <th>Biology</th>
                <th>Show more</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['species']; ?></td>
                    <td><?php echo $row['genus']; ?></td>
                    <td><?php echo $row['theorder']; ?></td>
                    <td><?php echo $row['family']; ?></td>
                    <td><?php echo $row['symptoms']; ?></td>
                    <td><?php echo $row['biology']; ?></td>
                    <td class="more">
                        <?php echo "<a href=\"showmoreall.php?species_id=" . $row['species_id'] . "\">show more</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <!-- Pagination links -->
        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                <a href="?page=<?php echo $i; ?>" <?php if ($page == $i) echo 'class="active"'; ?>><?php echo $i; ?></a>
            <?php } ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>
            
</body>
</html>
