<?php
//delete.php
//$connect = mysqli_connect("localhost", "root", "divine", "eidosdb");
require ('connect.php'); 

if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
 $sql = "delete from vshelf where id = '$id' ";
 $sLink->exec($sql);        
 }
}
?>