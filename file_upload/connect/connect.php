<?php 
	$host = "localhost";
	$user = "root";
	$pass = "divinity";
	$db = "pantasdbnew";

	try {
		$con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'Connection Failed:' . $e->getMessage();
	}
?>