<?php

//include('db.php');
include('connect.php');
include("./policy/function.php");

if(isset($_POST["user_id"]))
{
    
    //statement = $connection->prepare(
	$statement = $sLink->prepare(
		"DELETE FROM computer WHERE id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>