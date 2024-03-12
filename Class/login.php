<?php
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$connection = mysqli_connect('localhost','root','','logindb');
	if($connection) {
		echo "Yay!!  We are connected";
	}else {
		echo "Not connected";
	}
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="container">
		<div class="col-xs-6">
			<form action="login.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control">
				</div>
				<input type="submit" class="btn btn-primary" name="submit" value="Submit">
			</form>
		</div>
	</div>
	
</body>
</html>