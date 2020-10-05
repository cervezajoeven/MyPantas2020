<?php
//include('db.php');
include('../connect.php');
include('function.php');

if(isset($_POST["user_id"]))

{
	$output = array();
	//$statement = $connection->prepare(
	$statement = $sLink->prepare(        
		"SELECT * FROM library_services 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		//$output["name"] = $row["member_type_name"];
		//$output["loan_limit"] = $row["loan_limit"];    
 		//$output["loan_period"] = $row["loan_period"];
		//$output["reserve_limit"] = $row["reserve_limit"];
  		//$output["reborrow_limit"] = $row["reborrow_limit"];
		//$output["fine_each_day"] = $row["fine_each_day"];     
        
        $output["library_name"] = $row["library_name"];
        $output["heading"] = $row["heading"];
        $output["photo_hour"] = $row["photo_hour"];
        $output["photo_fine"] = $row["photo_fine"];  
        $output["overnight_cutoff"] = $row["ov_cutoff"];
        $output["overnight_fine"] = $row["ov_fine_hour"]; 
        $output["fine_per_day"] = $row["ov_fine_whole"];     
        $output["time_open"] = $row["time_open"];
        $output["time_closing"] = $row["time_closing"];
        $output["picture_path"] = $row["photo_path"];   
        
       
        
        
	}
	echo json_encode($output);
}

?>

