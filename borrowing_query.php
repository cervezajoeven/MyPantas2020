	<?php
 	//require ('include/database.php');
	require('connect.php');
 	require ('session.php');
	
	$id=$_POST['selector'];
 	$client_id  = $_POST['client_id'];
	$query=mysql_query("select * from client where idnum='$client_id'")or die(mysql_error());
	$row=mysql_fetch_array($query);
	$name  = $row['name'];
	
	//$item_id  = $_POST['item_id'];
	//$item_id  = $_POST['selector'];
	$code  = $_POST['barcode'];	
	$description = $_POST['description'];
	$query=mysql_query("select * from newequipment where barcode='$code'")or die(mysql_error());
	$arow=mysql_fetch_array($query);	
	$description = $arow['description'];
	$code = $arow['barcode'];
	
	if ($id == '' ){
	header("location: borrowing.php");
	?>
	

	<?php }else{

	mysql_query ("insert into equip_borrower (id_number,name,description,barcode,date_borrowed) values ('$client_id','$name','$description','$code',NOW())") or die(mysql_error());
	
	//$query = mysql_query("select * from equip_borrower order by id_number DESC")or die(mysql_error());
	//$row = mysql_fetch_array($query);
	//$release_id  = $row['release_id']; 
	
//$history_record=mysql_query("select * from user where user_id=$id_session");
//$row1=mysql_fetch_array($history_record);
//$user=$row1['firstname']." ".$row1['lastname'];	

//$N = count($id);
//for($i=0; $i < $N; $i++)
//{
	//	mysql_query("INSERT INTO transaction_history (item_id,action,client_id,release_id,admin_name,date_added) VALUES ('$id[$i]','Borrowing Item','$client_id','$release_id','$user',NOW())")or die(mysql_error());


		//mysql_query("insert into release_details (item_id,release_id,release_status) values ('$id[$i]','$release_id','pending')")or die(mysql_error());

//}



header("location: borrowing.php");
}  
?>
	
	

	
	