<?php
	session_start();

	include 'db.php';

	$user = $_GET['userid'];

	$res = '';
	$res .= "<option value=''></option>";
	$cont = "SELECT CONTACTID FROM contact WHERE USERID = '$user'";
	$qcont = mysqli_query($con, $cont);
	while($row = mysqli_fetch_array($qcont)){
		$res .= "<option value='". $row['CONTACTID'] ."'>". $row['CONTACTID'] ."</option>";
	}
	echo $res;
?>