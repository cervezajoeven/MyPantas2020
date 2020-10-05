<?php 

//include('include/database.php');
include('connect.php');	
//include('session.php');

$get_id=$_GET['client_id'];

//$history_record=mysql_query("select * from user where user_id=$id_session");
//$row=mysql_fetch_array($history_record);
//$user=$row['firstname']." ".$row['lastname'];
//mysql_query("INSERT INTO history (date,action,data) VALUES (NOW(),'Delete Client','$user')")or die(mysql_error());

mysql_query("delete from clientlog where id_record = '$get_id' ")or die(mysql_error());

header('location:list_of_attendance.php');
?>