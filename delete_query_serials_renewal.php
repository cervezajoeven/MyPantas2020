<?php 

//include('include/database.php');
include('connect.php');	
//include('session.php');

$get_id=$_GET['id'];

$sql = "delete from renewal where id = '$get_id' ";
// use exec() because no results are returned
$sLink->exec($sql);
//mysql_query("delete from renewal where id = '$get_id' ")or die(mysql_error());

header('location:list_of_serials.php');
?>