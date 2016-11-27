<?php
session_start();
require "db.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat - Customer Module</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
</head>
<body>
	<span class="error" id="error"></span>
	<div id="loginform">
		<form action="login.php" method="post" id="submitLogin">
			<p>Please enter your name to continue:</p>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name">
			<br>
			<label for="pass">Pass:</label>
			<input type="password" name="pass" id="pass">
			<br>
			<button type="submit" id="submit">Submit</button>
		</form>
	</div>
</body>
</html>