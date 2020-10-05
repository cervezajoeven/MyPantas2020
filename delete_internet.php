<?php 

//include('include/database.php');
include('connect.php');
//include('session.php');

$get_id=$_POST['id'];
$sql = "delete from computer where id = '$get_id' ";
// use exec() because no results are returned
$sLink->exec($sql);

?>