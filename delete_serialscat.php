<?php 


include('connect.php');	

$get_id=$_POST['id'];

$sql = "delete from books where bkid = '$get_id' ";

$sLink->exec($sql);

?>