<?php
//delete.php
//$connect = mysqli_connect("localhost", "root", "divine", "eidosdb");
require ('connect.php'); 

if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  //$query = "DELETE FROM outside_user WHERE id = '".$id."'";
  //mysqli_query($connect, $query);
 $sql = "delete from outside_user where id = '$id' ";
 $sLink->exec($sql);        
 }
}
?>