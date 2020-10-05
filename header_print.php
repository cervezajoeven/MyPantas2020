<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>myPANTAS: Integrated Library Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <meta charset="utf-8">
    
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>

    
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery datatables is here -->
    <script src="bower_components/jquery/jquery.min.js"></script>
    
   


    <!-- The PANTAS icon -->
    <link rel="shortcut icon" href="img/libro.jpg">
    
    <!-- The vector icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

<body>
<?php ob_start(); ?>
<?php require ('connect.php'); ?>
<?php require ('session.php'); ?>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"> <img alt="PANTAS Logo" src="img/libro.jpg" class="hidden-xs"/>
                <span>PANTAS</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                
<?php
   

    $stmt = $sLink->query("select *  from user where id='$id_session'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    


    {
?>
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs-6"> <?php echo $row['lastname']; ?></span>
                    <span class="caret"></span>
                </button>

<?php } ?>
                <ul class="dropdown-menu">
                    <!---<li><a href="#">Profile</a></li>
                    <li class="divider"></li>-->
                    <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->



        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
    
    
