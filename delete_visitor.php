<?php
include ('connect.php'); 
//database.php');
//$database = new PDO("mysql:host=localhost;dbname=eidosdb", 'root', 'divine');

$id = $_POST['id'];
$delete_data = "delete from outside_user where id = '$id' ";
$sLink->exec($delete_data);


?>