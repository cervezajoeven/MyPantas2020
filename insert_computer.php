<?php
//include('db.php');
include('connect.php');
include('./policy/function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
        
		//$statement = $connection->prepare("
		$statement = $sLink->prepare("        
			INSERT INTO computer (computer, barcode) 
			VALUES (:computer, :barcode)
		");
		$result = $statement->execute(
			array(
				':computer'	            =>	$_POST["computer"],
				':barcode'  	    =>	$_POST["barcode"],

			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
        
		//$statement = $connection->prepare(
		$statement = $sLink->prepare(            
			"UPDATE computer 
			SET computer = :computer, barcode = :barcode WHERE id = :id"
		);
		$result = $statement->execute(
			array(
                
 				':computer'         =>	$_POST["computer"],
				':barcode'  	    =>	$_POST["barcode"],              
 				':id'			    =>	$_POST["user_id"]               
                
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>