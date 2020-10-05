
<?php
//delete.php
$connect = mysqli_connect("localhost", "root", "divine", "eidosdb");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM clientlog WHERE id_record = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>