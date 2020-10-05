<?php
include ('connect.php'); 
//database.php');
//$database = new PDO("mysql:host=localhost;dbname=eidosdb", 'root', 'divine');

$id = $_POST['id'];
$delete_data = "delete from vshelf where id = '$id' ";
$sLink->exec($delete_data);


?>