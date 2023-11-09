 <?php
       session_start();

include 'dbh.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repass = $_POST['repassword'];

    if($password != $repass){
        echo "Password did not match!";
        header('Location: signup.php');
    }
    else{
        // Prepare and execute the SQL query
    $sql = "INSERT INTO user (username, email, password, repassword) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $repass);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        echo "Account created successfully!";
        // You can redirect the user to a different page if needed
         header('Location: login.php');
        // exit();
    } else {
        echo "Error creating account: " . $con->error;
    }
    }
 

    

    // Close the statement and connection
    $stmt->close();
    $con->close();
}





?>