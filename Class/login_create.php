<?php
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$connection = mysqli_connect('localhost','root','','logindb');
	if(!connection){
		die("Connection not available");
	}
	$username = mysqli_real_escape_string($connection,$username);
	$password = mysqli_real_escape_string($connection,$password);
	$query = "INSERT INTO users(username,password) ";
	$query .= "VALUES ('$username','$password')";
	$result = mysqli_query($connection,$query);
	//Encrypting our password
	$hashFormat = "$2y$10$";
	$salt = "sjkdafajsdfasdbaskl22";
	$hash_and_$salt = $hashformat.$salt;
	$password = crypt($password,$hash_and_salt);


	$query = "INSERT INTO users(usrname,password)";
	$query .=" VALUES('$username', '$password')";
	$result = mysqli_query($connection,$query);
	if(!$result) {
		echo "Query Failed";
	}
	else {
		echo "Inserting into table succeeded";
	}
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login_create      </title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="container">
		<div class="col-xs-6">
			<form action="login_create.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" class="btn btn-primary" name="submit" value="Submit">
			</form>
		</div>
	</div>
	
</body>
</html>