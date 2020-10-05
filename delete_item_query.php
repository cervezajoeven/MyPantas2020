<?php 

//include('include/database.php');
include('connect.php');
include('session.php');

$get_id=$_GET['item_id'];

//$history_record=mysql_query("select * from user where user_id=$id_session");
//$row=mysql_fetch_array($history_record);

//$user=$row['name']; //." ".$row['lastname'];
//mysql_query("INSERT INTO history (date,action,data) VALUES (NOW(),'Delete Item','$user')")or die(mysql_error());

$sql = "delete from newequipment where eqid = '$get_id' ";
$sLink->exec($sql);

//mysql_query("delete from newequipment where eqid = '$get_id' ")or die(mysql_error());

header('location:list_of_equipment.php');
?>