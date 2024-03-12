
<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
	<div class="header">
		<div class="logo">
			<img src="./images/logo.png" scale="0.2" alt="amazon logo">
		</div>
		<div class="after-logo">
			<div class="searchbar">
				<form action="search.php" method="post">
					<input type="text" placeholder="Type Here to search">
					<input type="button" name="Search">
				</form>
			</div>
<?php
$query="SELECT * FROM categories";
$result=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($result)) {
	$cat_id=$row['cat_id'];
	$cat_title=$row['cat_title'];
?>
			<div class="categories">
				<a class="nav-text" href="./categories.php?cat=<?php echo $cat_id; ?>"> <?php echo $cat_title; ?> </a>
			</div>
<?php
}
?>

		</div>
	</div>
	
</body>
</html>