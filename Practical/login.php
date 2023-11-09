<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<form action="login.inc.php" method="POST">
                <div class="form-group first">
                  
                  <input type="text" class="form-control" name="email" placeholder="Enter Email" id="email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name= "password" placeholder="Password" id="password">
                </div>
                

                <input type="submit" value="LOGIN" class="btn btn-block py-2 " style="background-color: rgb(180, 159, 134); color: whitesmoke;">
                <a href="signup.php">REGISTER</a>
	</div>

</body>
</html>