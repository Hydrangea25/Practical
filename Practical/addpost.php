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
		<form action="post.inc.php" method="POST">
      <h1>Create a Post!</h1>
                <div class="form-group first">
                  
                  <input type="text" class="form-control" name="title" placeholder="Enter Title" id="email">
                </div>
                <div class="form-group last mb-3">
                  
                  <textarea type="text" class="form-control" name= "content" placeholder="Enter Content" id="password"></textarea>
                </div>
                

                <input type="submit" value="POST" class="btn btn-block py-2 " style="background-color: rgb(180, 159, 134); color: whitesmoke;">
                
	</div>

</body>
</html>