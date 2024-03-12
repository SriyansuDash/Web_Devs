<?php include "header.php"; 

if(isset($_GET['cat'])) {
	$get_cat_id=$_GET['cat'];
	$query="SELECT * FROM products WHERE 'cat_id'='$get_cat_id'";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_assoc($result)) {
		//Write code for products variables

	}

}


?>

<!-- Write html and css and proper echo for the products to be displayed -->

