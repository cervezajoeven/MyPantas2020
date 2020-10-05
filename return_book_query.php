<?php 
//include('include/database.php');
include('connect.php');	

$id=$_GET['id'];


//mysql_query("update tbl_release LEFT JOIN release_details on tbl_release.release_id = release_details.release_id   
//set release_status='returned',date_return= NOW() 
//where tbl_release.release_id='$id' and release_details.item_id = '$item_id'")or die(mysql_error());	

mysql_query("delete from borrower where id = '$id' ")or die(mysql_error());
					
 header('location:return_eq.php');

?>	