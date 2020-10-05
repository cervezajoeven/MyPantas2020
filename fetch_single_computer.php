<?php
include('connect.php');
include('./policy/function.php');

if(isset($_POST["user_id"]))

{
	$output = array();
	$statement = $sLink->prepare(        
		"SELECT * FROM computer 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["computer"] = $row["computer"];
		$output["barcode"] = $row["barcode"];
  
        
	}
	echo json_encode($output);
}

?>

