<?php
	$connection = mysqli_connect('localhost','root','','logindb');
	if(!$connection) {
		echo "Sorry You are not connected";
	}
?>