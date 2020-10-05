<?php
$DBHOST = "localhost";
$DBNAME = "pantasdb";
$DBUSER = "root";
$sLink = mysql_connect($DBHOST,$DBUSER,'divine') or die('Connection with MySql Server failed');
mysql_select_db($DBNAME, $sLink) or die('MySql DB was not found');
?>