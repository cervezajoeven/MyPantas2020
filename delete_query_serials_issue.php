<?php 

//include('include/database.php');
include('connect.php');	
//include('session.php');

$get_id=$_GET['id'];

$sql = "delete from serials where idd = '$get_id' ";
// use exec() because no results are returned
$sLink->exec($sql);
//mysql_query("delete from serials where idd = '$get_id' ")or die(mysql_error());

header('location:list_of_serials_view_issues.php');
?>