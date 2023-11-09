<?php

session_start();

// Database connection configuration
include 'dbh.php';

// Check if the ID parameter is provided
if (isset($_GET['id'])) {
    // Get the ID from the URL parameter
    $id = $_GET['id'];


    

    // Construct the SQL query to delete the record with the given ID
    $sql = "DELETE FROM post WHERE id = '$id'";

    // Execute the query
    $result = mysqli_query($con, $sql);

    // Check if the deletion was successful
    if ($result) {
        echo "Post deleted successfully.";
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
} else {
    echo "ID parameter is missing.";
}

?>