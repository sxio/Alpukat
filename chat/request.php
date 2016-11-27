<?php
session_start();
require "db.php";
if(isset($_SESSION['name'])){
	$contact = $_POST['contact'];
	$user = $_SESSION['name'];

	$chat = "SELECT * FROM chat WHERE ((CONTACT = '$contact' AND USERID = '$user') OR (CONTACT = '$user' AND USERID = '$contact'))";
	$que = mysqli_query($con, $chat);

	$res = "";
	while($row = mysqli_fetch_array($que)){
		$waktu = $row['TIME'];
		$waktu = explode(':', $waktu);
		array_pop($waktu);
		$waktu = join(':',$waktu);
		$res .= "<div class='msgln'>(". $waktu .") <b>". $row['USERID'] .":</b> ". $row['CHAT_TEXT'] ."<br></div>";
	}
	echo $res;

	mysqli_close($con);
}
?>