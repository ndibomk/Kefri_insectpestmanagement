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
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
    <style>
         table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
           /* background-color: #f2f2f2; */
           background-color: rgb(78, 145, 69);
           color: white;
           font-size: 18px;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
            color: black;
            
        }
        .pagination {
        margin-top: 10px;
        display: flex;
        margin-left: 2%;
        /* justify-content: center; */
        /* align-items: center; */
    }
    
    .pagination a {
        color: #333;
        text-decoration: none;
        padding: 5px 10px;
        margin: 0 2px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    
    .pagination a.active {
        background-color:black;
        color: white;
    }
    
    .pagination a:hover {
        background-color: white;
        color: black;
    }
    
@media (min-width: 576px){
.container, .container-sm {
    max-width: none !important;
}}
    </style>
</head>
<body>
<?php include 'adminheader.php'; ?>



<section id="addmoredetails">
  <div class="titlandsearch">
       <h1>#IPM  Database</h1>
       <p>Learn about pests that affect our plantations!</p> 
    <div class="search-bar">
        <form method="get" action="">
            <input type="text" name="search" placeholder="Search..." class="searchinput" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button type="submit" class="searchicon"><img src="./images/search.svg" alt=""></button>
        </form>
    </div>
    </div>
        <div class="container mt-3">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Category</th>
          <th>Species</th>
          <th>Genus</th>
          <th>Order</th>
          <th>Family</th>
          <th>Symptoms</th>
          <th>Biology</th>
          <th>Show more</th>
          <th>Edit</th>
                <th>Delete</th>
        </tr>
      </thead>
      <tbody>
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
              <?php echo "<a href=\"showmore.php?species_id=" . $row['species_id'] . "\">show more</a>"; ?>
              <td class="more"><?php echo "<a href=\"edit.php?species_id=" . $row['species_id'] . "\">edit</a>"; ?></td>
                    <td class="more"><?php echo "<a href=\"delete.php?species_id=" . $row['species_id'] . "\">Delete</a>"; ?></td>
                </tr>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
        <!-- Pagination links -->
        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                <a href="?page=<?php echo $i; ?>" <?php if ($page == $i) echo 'class="active"'; ?>><?php echo $i; ?></a>
            <?php } ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>         
</body>
</html>
