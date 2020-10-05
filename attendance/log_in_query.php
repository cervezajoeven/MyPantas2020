<?php
include('dbcon.php');

if (isset($_POST['log_in'])){

$school_number=$_POST['school_number'];

$login_query=mysql_query("select * from member where school_number='$school_number' ");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_assoc($login_query);

if ($count > 0){
session_start();
$_SESSION['user_id']=$row['id'];

header('location:log_in.php');
}else{
?>
    <div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
   Please check your UserName and Password
    </div>
<?php } 
}
?>