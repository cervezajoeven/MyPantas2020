<?php 
date_default_timezone_set('Asia/Manila');
include('connect.php');
include('session.php');

$title=$_POST['title'];
$itemcode=$_POST['itemcode'];
$volume=$_POST['volume'];
$issue=$_POST['issue'];
$date_year=$_POST['date_year'];
$id =$_POST['id'];
$date1 = strtr($_POST['date_encoded'], '/', '-');
$date_encoded = date('Y-m-d', strtotime($date1));	

//$date_encoded = date('Y-m-d');	
//$id =$_GET['id'];

{

                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO serials (title,itemcode,volume,issue,date_year,date_received) VALUES ('$title','$itemcode','$volume','$issue','$date_year','$date_encoded')";

                            $sLink->exec($sql);  

                            //mysql_query ("INSERT INTO serials (title,itemcode,volume,issue,date_year,date_received) VALUES ('$title','$itemcode','$volume','$issue','$date_year','$date_encoded')") or die(mysql_error());
                            //header('location:list_of_serials.php');
}

                            echo "<script>alert('Item issue is successfully added!'); window.location='list_of_serials.php'</script>";
                            //header('location:list_of_serials.php');
?>