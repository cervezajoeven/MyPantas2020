<?php 

//include('include/database.php');
include('connect.php');
include('session.php');

$get_id=$_GET['item_id'];


mysql_query("delete from accsm where id = '$get_id' ")or die(mysql_error());

header('location:list_of_accession_av.php');
?>