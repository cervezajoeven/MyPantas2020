<?php 

include('connect.php');
//include('session.php');

$id = $_POST['id'];

$sql = "delete from acquisition where id = '$id' ";

$sLink->exec($sql);


?>