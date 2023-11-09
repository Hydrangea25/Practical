<?php
  session_start();
  include 'dbh.php';

  // Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    

    
        // Prepare and execute the SQL query
    $sql = "INSERT INTO post (title, content) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        echo "Post created successfully!";
        // You can redirect the user to a different page if needed
         header('Location: index.php');
        // exit();
    } else {
        echo "Error creating post: " . $con->error;
    }
    
 

    

    // Close the statement and connection
    $stmt->close();
    $con->close();
}

  ?>