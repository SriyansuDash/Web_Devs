<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET username='$username', password='$password' WHERE id=$id";

	$result=mysqli_query($connection,$query);
	if(!$result) {
		echo "query failed";
	}

}



?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="container">
		<div class="col-xs-6">
			<form action="login_update.php" method="post">
				<div class="form-group">
					<select name="id" id="">
<?php 
	showAllData();
?>
					</select>
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" class="btn btn-primary" name="submit" value="Update">
			</form>
		</div>
	</div>
	
</body>
</html>