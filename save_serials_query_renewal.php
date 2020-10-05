<?php 
date_default_timezone_set('Asia/Manila');
include('connect.php');
include('session.php');

$title=$_POST['title'];
$itemcode=$_POST['itemcode'];
$source=$_POST['source'];
$remarks=$_POST['remarks'];
$period=$_POST['period'];
$amount=$_POST['amount'];

$id =$_POST['id'];

$date1 = strtr($_POST['date_order'], '/', '-');
$date_order = date('Y-m-d', strtotime($date1));	

{
        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO renewal (title,itemcode,source,remarks,period_cover,amount,date_order) VALUES ('$title','$itemcode','$source','$remarks','$period','$amount','$date_order')";

         $sLink->exec($sql);  

        //mysql_query ("INSERT INTO renewal (title,itemcode,source,remarks,period,amount,date_order) VALUES ('$title','$itemcode','$source','$remarks','$period','$amount','$date_order')") or die(mysql_error());
        //header('location:list_of_serials.php');
}


header('location:list_of_serials.php');
?>