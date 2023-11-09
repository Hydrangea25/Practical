<?php
       session_start();

include 'dbh.php';



// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Prepare and execute the SQL query
    $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    

    // Get the result
    $result = $stmt->get_result();

    // Check if the query returned a matching user
    if ($result->num_rows === 1) {
        // Authentication successful, store user information in the session
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];

        header('Location: index.php');

    } else {
        // Authentication failed
        echo "Invalid email or password.";
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>