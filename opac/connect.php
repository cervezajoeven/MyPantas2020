<?php

//$DBHOST = "localhost";
//$DBNAME = "newrdadb";
//$DBUSER = "root";
//$sLink = mysql_connect($DBHOST,$DBUSER,'divine') or die('Connection with MySql Server failed');
//mysql_select_db($DBNAME, $sLink) or die('MySql DB was not found');


	$database_hostname = "localhost";
	$database_user = "joeven";
	$database_password = "joeven241";
	$database_name = "pantasdbnew";

	try{

		//database_connection = new PDO("mysql:host=$database_hostname;dbname=$database_name",$database_user,$database_password);
		//$database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sLink = new PDO("mysql:host=$database_hostname;dbname=$database_name",$database_user,$database_password);
		$sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $z){

		die($z->getMessage());
	}


?>
