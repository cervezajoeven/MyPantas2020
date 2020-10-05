<?php 

//include('include/database.php');
include('connect.php');	
//include('session.php');

$get_id=$_GET['bkid'];

mysql_query("delete from txtarchive where txtid = '$get_id' ")or die(mysql_error());

header('location:list_of_archives.php');
?>