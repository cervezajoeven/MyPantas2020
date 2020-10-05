<?php

//include('db.php');
//include("function.php");
ob_start();
require ('connect.php');

if(isset($_POST["id"]))
{

	$statement = $sLink->prepare(
		"DELETE FROM books WHERE bkid = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>