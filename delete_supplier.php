<?php 


include('connect.php');	

$get_id=$_POST['id'];

$sql = "delete from supplier where userid = '$get_id' ";
// use exec() because no results are returned
$sLink->exec($sql);

?>