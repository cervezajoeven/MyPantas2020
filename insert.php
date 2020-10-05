<?php
include('db.php');
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
        
		$statement = $connection->prepare("
			INSERT INTO group_type (member_type_name, loan_limit, loan_period, reserve_limit, reborrow_limit, fine_each_day) 
			VALUES (:name, :loan_limit, :loan_period, :reserve_limit, :reborrow_limit, :fine_each_day)
		");
		$result = $statement->execute(
			array(
				':name'	            =>	$_POST["name"],
				':loan_limit'  	    =>	$_POST["loan_limit"],
				':loan_period'	    =>	$_POST["loan_period"],
				':reserve_limit'  	=>	$_POST["reserve_limit"],                
  				':reborrow_limit'  	=>	$_POST["reborrow_limit"],
				':fine_each_day'	=>	$_POST["fine_each_day"],
                
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
        
		$statement = $connection->prepare(
			"UPDATE group_type 
			SET member_type_name = :name, loan_limit = :loan_limit, loan_period = :loan_period, reserve_limit = :reserve_limit, reborrow_limit = :reborrow_limit, fine_each_day =  :fine_each_day WHERE id = :id"
		);
		$result = $statement->execute(
			array(
				//':name'	        =>	$_POST["name"],
				//':grp'  	    =>	$_POST["grp"],
 				//':username'	    =>	$_POST["username"],
				//':address'  	=>	$_POST["address"],               
				//':image'		=>	$image,
				//':id'			=>	$_POST["user_id"]
                
 				':name'	            =>	$_POST["name"],
				':loan_limit'  	    =>	$_POST["loan_limit"],
				':loan_period'	    =>	$_POST["loan_period"],
				':reserve_limit'  	=>	$_POST["reserve_limit"],                
  				':reborrow_limit'  	=>	$_POST["reborrow_limit"],
				':fine_each_day'	=>	$_POST["fine_each_day"],               
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