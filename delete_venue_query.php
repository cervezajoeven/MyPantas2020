<?php 

//include('include/database.php');
include('connect.php');
include('session.php');

$get_id=$_GET['item_id'];

$sql = "delete from venue_schedule where id = '$get_id' ";
// use exec() because no results are returned
$sLink->exec($sql);
//mysql_query("delete from venue_schedule where id = '$get_id' ")or die(mysql_error());

header('location:list_of_venue_reservation.php');
?>