<?php
	$connection = mysqli_connect('localhost','root','','logindb');


	$query = "SELECT * FROM `users`";
	$result = mysqli_query($connection,$query);
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>read</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="container">
		<div class="col-sm-6">
			<?php
			while($row = mysqli_fetch_assoc($result)) {
				?>
				<pre>
				<?php
				print_r($row);
				?>
				</pre>
				<?php
			}
			?>
		</div>
	</div>
	
</body>
</html>