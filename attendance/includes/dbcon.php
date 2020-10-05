<?php
//mysql_select_db('Eidosdb',mysql_connect('localhost','root','divine'))or die(mysql_error());

	$database_hostname = "localhost";
	$database_user = "root";
	$database_password = "";
	$database_name = "pantasdbnew";
	
	try{
        
        $sLink = new PDO("mysql:host=$database_hostname;dbname=$database_name",$database_user,$database_password);
		$sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $z){
		
		die($z->getMessage());
	}

?>