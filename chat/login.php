<?php
	session_start();
	require 'db.php';

	$username = strtolower($_POST["name"]);
	$password = $_POST["pass"];
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con,$username);
	$password = mysqli_real_escape_string($con,$password);

	$query = "SELECT * FROM profile";
	$res = mysqli_query($con,$query);

	$counter = 0;
	while($row = mysqli_fetch_array($res)){
		$user = $row["USER"];
		$pass = $row["PASSWORD"];
		if($user == $username && $pass == $password){
			$_SESSION['name'] = $user;
			$counter += 1;
			echo "berhasil";
			die();
		}
	}
	echo "Login Gagal!";
?>