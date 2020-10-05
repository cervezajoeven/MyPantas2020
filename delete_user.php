<?php 


include('connect.php');	


$get_id=$_POST['id'];

$sql = "delete from user where id = '$get_id' ";

$sLink->exec($sql);


?>