<?php
//include('db.php');
include('../connect.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		//$image = '';
		//if($_FILES["user_image"]["name"] != '')
		//{
		//	$image = upload_image();
		//}
        
		//$statement = $connection->prepare("        
		$statement = $sLink->prepare("
			INSERT INTO library_services (library_name, heading, photo_hour, photo_fine, ov_cutoff, ov_fine_hour, ov_fine_whole, time_open, time_closing, photo_path) 
			VALUES (:library_name, :heading, :photo_hour, :photo_fine, :overnight_cutoff, :overnight_fine, :fine_per_day, :time_open, :time_closing, :picture_path)
		");
		$result = $statement->execute(
			array(
				':library_name'	    =>	$_POST["library_name"],
				':heading'  	    =>	$_POST["heading"],
				':photo_hour'	    =>	$_POST["photo_hour"],
				':photo_fine'  	    =>	$_POST["photo_fine"],                
  				':overnight_cutoff'  =>	$_POST["overnight_cutoff"],
				':overnight_fine'	=>	$_POST["overnight_fine"],               
 				':fine_per_day'	    =>	$_POST["fine_per_day"],
				':time_open'  	    =>	$_POST["time_open"],                
  				':time_closing'     =>	$_POST["time_closing"],
				':picture_path'	    =>	$_POST["picture_path"],               
                
				//':image'	=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		//$image = '';
		//if($_FILES["user_image"]["name"] != '')
		//{
		//	$image = upload_image();
		//}
		//else
		//{
		//	$image = $_POST["hidden_user_image"];
		//}
        
		//$statement = $connection->prepare(
 		$statement = $sLink->prepare(           
			"UPDATE library_services 
			SET library_name=:library_name, heading=:heading, photo_hour=:photo_hour, photo_fine=:photo_fine, ov_cutoff=:overnight_cutoff, ov_fine_hour=:overnight_fine, ov_fine_whole=:fine_per_day, time_open=:time_open, time_closing=:time_closing, photo_path=:picture_path WHERE id = :id"
		);
		$result = $statement->execute(
			array(    
				':library_name'	    =>	$_POST["library_name"],
				':heading'  	    =>	$_POST["heading"],
				':photo_hour'	    =>	$_POST["photo_hour"],
				':photo_fine'  	    =>	$_POST["photo_fine"],                
  				':overnight_cutoff'  =>	$_POST["overnight_cutoff"],
				':overnight_fine'	=>	$_POST["overnight_fine"],               
 				':fine_per_day'	    =>	$_POST["fine_per_day"],
				':time_open'  	    =>	$_POST["time_open"],                
  				':time_closing'     =>	$_POST["time_closing"],
				':picture_path'	    =>	$_POST["picture_path"],  
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