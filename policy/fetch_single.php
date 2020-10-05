<?php
//include('db.php');
include('../connect.php');
include('function.php');

if(isset($_POST["user_id"]))

{
	$output = array();
	//$statement = $connection->prepare(
	$statement = $sLink->prepare(        
		"SELECT * FROM group_type 
		WHERE ID = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["name"] = $row["member_type_name"];
		$output["loan_limit"] = $row["loan_limit"];
        
 		$output["loan_period"] = $row["loan_period"];
		$output["reserve_limit"] = $row["reserve_limit"];
        
  		$output["reborrow_limit"] = $row["reborrow_limit"];
		$output["fine_each_day"] = $row["fine_each_day"];       
        
		//if($row["image"] != '')
		//{
		//	$output['user_image'] = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		//}
		//else
		//{
		//	$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		//}
	}
	echo json_encode($output);
}

?>

