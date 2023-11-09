<?php
  session_start();
  include 'dbh.php';
  
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <h1>MiniBlog</h1>
        <hr>
      </nav>
    </div>
	<div class="container">
<?php

// Fetch posts from the database
$sql = "SELECT id, title, content, created_at FROM post ORDER BY created_at DESC";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Loop through each row of the result set
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $created_at = $row['created_at'];

        // Display post information
        $id;
        echo "<h2>$title</h2>";
        echo "<p>$content</p>";
        echo "<p>Date: $created_at</p>";
        echo "<hr>"; 
        echo '<a href="delete.php?id=' . $row['id'] . '"><button type="button" class="btn btn-danger">DELETE</button></a> <a href="edit.php?id=' . $row['id'] . '"><button type="button" class="btn btn-primary">EDIT</button></a>';
    }
    ?>
    <div class="container">
      <a href="addpost.php"><button >CREATE NEW POST!</button></a>
      
    </div>


    <?php
} else {
    echo "No posts available.";
}

// Close the database connection
$con->close();
?>
                
	</div>

</body>
</html>