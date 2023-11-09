<?php
  session_start();
  include 'dbh.php';
  
  // Check if the ID parameter is present in the URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Prepare and execute the SQL query to retrieve the row with the specified ID
  $sql = "SELECT * FROM post WHERE id = $id";
  $result = $con->query($sql);

  // Check if a row is found
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Retrieve the values from the row
    $title = $row['title'];
    $content = $row['content'];
 
    // Use the retrieved values to pre-fill the input fields in the HTML form
    // ...
  } else {
    echo "No record found with the specified ID.";
  }
} else {
  echo "ID parameter is missing in the URL.";
}

// Close the connection
$con->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<form action="edit.inc.php?id=<?php echo $id; ?>" method="POST">
      <h1>Edit Post - <?php echo $row['title'];?></h1>
                <div class="form-group first">
                  
                  <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" id="email">
                </div>
                <div class="form-group last mb-3">
                  
                  <textarea type="text" class="form-control" name= "content"  id="password"><?php echo $row['content']; ?></textarea>
                </div>
                

                <input type="submit" name="SAVE" value="SAVE" class="btn btn-block py-2 " style="background-color: rgb(180, 159, 134); color: whitesmoke;">
                
	</div>

</body>
</html>