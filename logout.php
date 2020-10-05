<?php
include('include/database.php');
include('session.php');

$logout_query=mysql_query("select * from user where id=$id_session");
$row=mysql_fetch_array($logout_query);
$user=$row['lastname'];
session_start();
session_destroy();

mysql_query("INSERT INTO history_new (date,action,data)VALUES(NOW(),'Logout','$user')")or die(mysql_error());

header('location:index.php');

?>