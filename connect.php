<?php

	$database_hostname = "localhost";
	$database_user = "joeven";
	$database_password = "joeven241";
	$database_name = "pantasdbnew";
	//$database_name = "pantasdb_latest";
	try{

        $sLink = new PDO("mysql:host=$database_hostname;dbname=$database_name",$database_user,$database_password);
		$sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $z){

		die($z->getMessage());
	}


?>
