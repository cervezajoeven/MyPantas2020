<?php
include('includes/dbcon.php');
include('session.php');
$id=$_SESSION['idnumber'];
$result3 = mysql_query("SELECT * FROM user where user_id='$id'");
while($row3 = mysql_fetch_array($result3))
{ 
$school_number=$row3['school_number'];
$firstname=$row3['firstname'];
$lastname=$row3['lastname'];
$user_image=$row3['user_image'];

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EIDOS INTEGRATED LIBRARY INFORMATION SYSTEM</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
<style>
.blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 1s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 1s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color:maroon;
 font-size:16px;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
</style>

</head>

<body style="background:#F7F7F7;">
    
    <div class="">

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form action="" method="post">
                        <h1 class="blink_text">Welcome</h1>
<div class="alert alert-success" style="width:670px; text-align:center; font-size:25px; float:right; margin-right:-154px;">
		<?php if($user_image != ""): ?>
		<img src="../admin/upload/<?php echo $user_image ?>" width="150px" height="150px" style="border:4px groove #CCCCCC; border-radius:5px;">
		<?php else: ?>
		<img src="images/user.png" width="150px" height="150px" style="border:4px groove #CCCCCC; border-radius:5px;">
		<?php endif; ?>
		
		<?php echo $firstname." ".$lastname ?>
</div>
                        <div>
                            <input type="text" class="form-control" name="school_number" style="height:45px;" placeholder="School ID Number....." autofocus required />
                        </div>
						<div class="clearfix"></div>
						<br />
                        <div>
								<button class="btn btn-primary submit" type="submit" name="log_in"><i class="glyphicon glyphicon-check"></i> Enter</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
						
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-university" style="font-size: 26px;"></i> Valladolid National High School</h1>

                                <p>© <?php echo date('Y'); ?> <i class="fa fa-book"></i> Library Management System</p>
                            </div>
                        </div>
                    </form>
<?php
include('../admin/include/dbcon.php');

if (isset($_POST['log_in'])){

$school_number=$_POST['school_number'];

$login_query=mysql_query("select * from user where school_number='$school_number' and status = 'Active' ");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_assoc($login_query);
$firstname=$row['firstname'];
$middlename=$row['middlename'];
$lastname=$row['lastname'];
$user_id=$row['user_id'];

if ($count > 0){
session_start();
$_SESSION['id']=$row['user_id'];

$user_id_query=$row['user_id'];
$user=$row['firstname']." ".$row['middlename']." ".$row['lastname'];

mysql_query("INSERT INTO user_log (user_name,user_id,date_log)VALUES('$user','$user_id_query',NOW())")or die(mysql_error());

header('location:log_in.php');
}else{
?>
    <div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
   Please check your School ID Number or Your Not Active Member Yet
    </div>
<?php } 
}
?>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>