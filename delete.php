<?php

require("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve student ID from query string
    $species_id = $_GET['species_id'];

    // Delete student from the database
    $sql = "DELETE FROM insects WHERE species_id = '$species_id'";
    if (mysqli_query($dbconnect, $sql)) {
        header("Location: allinsects.php");
        echo "Student deleted successfully.";
    } else {
        echo "Error deleting student: " . mysqli_error($dbconnect);
    }
}

mysqli_close($dbconnect);


?>
