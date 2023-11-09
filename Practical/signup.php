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
			<form action="signup.inc.php" method="POST">
				<h1>Registration</h1><br>
				<h1>See the Registration Rules!</h1><br>
				<div class="form-group first">
	                  
	                  <input type="text" class="form-control" name="username" placeholder="Enter Username" id="username">
	                </div>
	                <div class="form-group first">
	                  
	                  <input type="text" class="form-control" name="email" placeholder="Enter Email" id="username">
	                </div>
	                <div class="form-group last mb-3">
	                  
	                  <input type="password" class="form-control" name="password" placeholder="Enter Password" id="password">
	                </div>
	                <div class="form-group last mb-3">
	                  
	                  <input type="password" class="form-control" name="repassword" placeholder="Confirm 	Password" id="password">
	                </div>
				
				<button type="submit">Sign Up</button>
				<p>Return to <a href="login.php">LOGIN PAGE</a></p>
				
			</form>
		</div>

		

	</body>
	</html>