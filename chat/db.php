<?php
	// $con = mysqli_connect("localhost","id219419_alpukatuser","password123456","id219419_message");
	$con = mysqli_connect("localhost","root","","chat_testing");
	if(!$con){
		die("Database connection error: ". mysqli_connect_error());
	}
?>