<?php 


include('connect.php');	

$get_id=$_POST['id'];

$sql = "delete from logfile where id = '$get_id' ";

$sLink->exec($sql);

?>