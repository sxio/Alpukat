<?php
session_start();
require "db.php";
if(isset($_SESSION['name'])){
	$text = $_POST['text'];
	date_default_timezone_set("Asia/Jakarta");
	$time = date("h:i:s");
	$user = $_SESSION['name'];
	$contact = $_POST['contact'];

	if(strlen($text) == 0){
		return;
	}

	$chat = "INSERT INTO chat(USERID, CHAT_TEXT, TIME, CONTACT) VALUES('$user','$text','$time','$contact')";
	$que = mysqli_query($con, $chat);

	mysqli_close($con);

	// $fp = fopen("log.html", 'a');
	// fwrite($fp, "<div class='msgln'>(".date("h:i").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	// fclose($fp);
}
?>