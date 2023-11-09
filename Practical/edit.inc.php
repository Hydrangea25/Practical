<?php
session_start();
include 'dbh.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['SAVE'])) {
        $id = $_GET['id']; // Get the ID from the URL parameter

        $title = $_POST['title'];
        $content = $_POST['content'];

        // Use prepared statements to prevent SQL injection
        $sql = "UPDATE post SET title = ?, content = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssi", $title, $content, $id);

        // Execute the statement
        $stmt->execute();

        // Check if the update was successful
        if ($stmt->affected_rows > 0) {
            header("Location: edit.php?id=$id");
            exit();
        } else {
            header("Location: edit.php?error=DataNotUpdated");
            exit();
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the connection
$con->close();
?>