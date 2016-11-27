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
	<script type="text/javascript" src="msg.js"></script>
</head>

<body>
	<div id="wrapper">
		<div id="menu">
			<p class="welcome">Welcome, <b id="userid"><?php echo $_SESSION['name']; ?></b>
			, Chat with
			<select id="contact">
				<option value=""></option>
			</select>
			<button id="refresh">refresh</button>
			</p>
			<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
			<div style="clear:both"></div>
		</div>
		<div id="chatbox"></div>

		<form name="message" action="">
			<input name="usermsg" type="text" id="usermsg" size="63" />
			<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
		</form>
	</div>
</body>
</html>