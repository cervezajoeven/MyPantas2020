<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>PANTAS: Integrated Library Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <meta charset="utf-8">
    
    <link href='./bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='./bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='./bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='./bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>    
    <link href='./bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>  
    <link href='./bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    
    <!-- The styles -->
    <link id="bs-css" href="./css/bootstrap-cerulean.min.css" rel="stylesheet">   
    <link href="./css/charisma-app.css" rel="stylesheet">    
    <link href='./css/jquery.noty.css' rel='stylesheet'>
    <link href='./css/noty_theme_default.css' rel='stylesheet'>
    <link href='./css/elfinder.min.css' rel='stylesheet'>
    <link href='./css/elfinder.theme.css' rel='stylesheet'>
    <link href='./css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='./css/uploadify.css' rel='stylesheet'>
    <link href='./css/animate.min.css' rel='stylesheet'>

    <!-- jQuery datatables is here -->
    <script src="./bower_components/jquery/jquery.min.js"></script>
    <script src="./js/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
 	<script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap.min.js"></script> 
	<link rel="stylesheet" href="./css/dataTables.bootstrap.min.css" />  
	<script src="./js/bootstrap.min.js"></script>

    <!-- The PANTAS icon -->
    <link rel="shortcut icon" href="./img/libro.jpg">
    
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->    
    <link rel="stylesheet" href="./css/font-awesome.min.css">      
 
    <style type="text/css">
      body{
       background-image: url("img/honey_im_subtle.png");
      }
        #loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('./images/loading.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
        }

    .buttonSave{
        text-align:right;
        margin-right:15px;
    }

    .btn_center{
        text-align:center;

    }
    </style>

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
            <a class="navbar-brand" href="home.php"> <img alt="Logo" src="images/librohead.jpg" class="hidden-xs"/>
                PANTAS UNIVERSITY
            </a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                
                <?php
                
                    $stmt = $sLink->query("select *  from user where id='$id_session'");
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    
                    {
                ?>
                    <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs-6"> <?php echo $row['name']; ?></span>
                        <span class="caret"></span>
                    </button>

                <?php } ?>
                <ul class="dropdown-menu">
                    <!---<li><a href="#">Profile</a></li>
                    <li class="divider"></li>-->
                    <li><a href="index.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
    
    
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header"><i class="fa fa-dashboard" style="font-size:24px"></i>Dashboard</li>
                        <li><a class="ajax-link" href="home.php"><i class="glyphicon glyphicon-home"></i><span> Home</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-file"></i><span> Files</span></a>
                            <ul class="nav nav-pills nav-stacked">
     							<li><a class="ajax-link" href="list_of_acquisition.php"><i class="glyphicon glyphicon-thumbs-up"></i><span> Acquisition</span></a></li>
                                <li><a class="ajax-link" href="list_of_internet.php"><i class="fa fa-laptop"></i><span> Computer</span></a></li>                              
								<li><a class="ajax-link" href="list_of_equipment.php"><i class="glyphicon glyphicon-camera"></i><span> Equipment</span></a></li>
                                <li><a class="ajax-link" href="list_of_locker.php"><i class="glyphicon glyphicon-lock"></i><span> Locker</span></a></li>
								<li><a class="ajax-link" href="list_of_client.php"><i class="glyphicon glyphicon-user"></i><span> Patron</span></a></li>
   								<li><a class="ajax-link" href="list_of_supplier.php"><i class="fa fa-group"></i><span> Supplier</span></a></li>                                  
 								<li><a class="ajax-link" href="list_of_visitors.php"><i class="fa fa-user-plus"></i><span> Visitor</span></a></li>                                
								<li><a class="ajax-link" href="user.php"><i class="fa fa-user-secret"></i><span> Staff Account</span></a></li>
                            </ul>
                        </li>
					
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-repeat"></i><span> Circulation</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="list_of_borrowed_books.php"><i class="glyphicon glyphicon-book"></i><span> Resource</span></a></li>
								<li><a class="ajax-link" href="list_of_borrowed_equipment.php"><i class="glyphicon glyphicon-camera"></i><span> Equipment</span></a></li>
								<li><a class="ajax-link" href="list_of_borrowed_locker.php"><i class="glyphicon glyphicon-lock"></i><span> Locker</span></a></li>								
								<li><a class="ajax-link" href="list_of_borrowed_internet.php"><i class="glyphicon glyphicon-globe"></i><span> Internet use</span></a></li>									
                            </ul>
                        </li>
						
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-credit-card"></i><span> Cataloguing</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="list_of_book.php"><i class="glyphicon glyphicon-book"></i><span> Books</span></a></li>
								<li><a class="ajax-link" href="list_of_av.php"><i class="glyphicon glyphicon-camera"></i><span> Audio-visual</span></a></li>
								<li><a class="ajax-link" href="list_of_theses.php"><i class="fa fa-graduation-cap"></i><span> Courseworks</span></a></li>
 								<li><a class="ajax-link" href="list_of_eresources.php"><i class="fa fa-desktop"></i><span> E-Resources</span></a></li>   <li><a class="ajax-link" href="list_of_serialscat.php"><i class="glyphicon glyphicon-calendar"></i><span> Serials cataloguing</span></a></li>
  								<li><a class="ajax-link" href="aaaz395gateway.php"><i class="fa fa-globe"></i><span> Z39.5</span></a></li>                                
                                
                            </ul>
                        </li>	
                        
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-inbox"></i><span> Indexing</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="list_of_analytics.php"><i class="fa fa-commenting-o"></i><span> Analytic</span></a></li>
								<li><a class="ajax-link" href="list_of_articles.php"><i class=" glyphicon glyphicon-comment"></i><span> Periodical Articles</span></a></li>
 								<li><a class="ajax-link" href="list_of_cases.php"><i class="fa fa-balance-scale"></i><span> Case Digest</span></a></li> 
								<li><a class="ajax-link" href="list_of_vf.php"><i class=" glyphicon glyphicon-file"></i><span> Vertical Files</span></a></li>
                            </ul>
                        </li>   
                        
                         <li class="accordion">
                            <a href="list_of_serials.php"><i class="glyphicon glyphicon-calendar"></i><span> Serials</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="list_of_serials.php"><i class="glyphicon glyphicon-list-alt"></i><span> Serials title</span></a></li>
                            </ul> 
                        </li>	
                        
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-check"></i><span> Inventory</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="list_of_inventory.php"><i class="glyphicon glyphicon-book"></i><span> Book inventory</span></a></li>
								<li><a class="ajax-link" href="list_of_inventory_av.php"><i class="glyphicon glyphicon-camera"></i><span> AV inventory</span></a></li>
                               	<li><a class="ajax-link" href="list_of_inventory_thesis.php"><i class="fa fa-graduation-cap"></i><span> Theses inventory</span></a></li>
                                <li><a class="ajax-link" href="list_of_inventory_serial.php"><i class="glyphicon glyphicon-calendar"></i><span> Serials inventory</span></a></li>
                           
                            </ul> 
                        </li>	 
                        
                         <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-list"></i><span> Accession list</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="list_of_accession.php"><i class="glyphicon glyphicon-list-alt"></i><span> Books </span></a></li>
								<li><a class="ajax-link" href="list_of_accession_av.php"><i class="glyphicon glyphicon-camera"></i><span> Audio-visual</span></a></li>
                               	<li><a class="ajax-link" href="list_of_accession_thesis.php"><i class="fa fa-graduation-cap"></i><span> Theses</span></a></li>
                                <li><a class="ajax-link" href="list_of_accession_serial.php"><i class="glyphicon glyphicon-calendar"></i><span> Serials</span></a></li>
                            </ul> 
                        </li>  
                        
                            <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span> Shelf list</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="list_of_shelflist.php"><i class="glyphicon glyphicon-book"></i><span>Books </span></a></li>
								<li><a class="ajax-link" href="list_of_shelflist_av.php"><i class="glyphicon glyphicon-camera"></i><span> Audio-visual</span></a></li>
                               	<li><a class="ajax-link" href="list_of_shelflist_thesis.php"><i class="fa fa-graduation-cap"></i><span> Theses</span></a></li>
                                <li><a class="ajax-link" href="list_of_shelflist_serial.php"><i class="glyphicon glyphicon-calendar"></i><span> Serials</span></a></li>
                            </ul> 
                        </li>                     
                        
                          <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-registration-mark"></i><span> Reservation</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="list_of_venue_reservation.php"><i class="glyphicon glyphicon-home"></i><span> Venues</span></a></li>
								<li><a class="ajax-link" href="list_of_equipment_reservation.php"><i class="glyphicon glyphicon-camera"></i><span> Equipment</span></a></li>
                            </ul> 
                        </li>      
                        
                        <li class="accordion">
                            <a href="#"><i class="fa fa-user-plus"></i><span> Attendance</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="./attendance/index.php"><i class="glyphicon glyphicon-import"></i><span> Enter</span></a></li>
								<li><a class="ajax-link" href="./attendance/index_exit.php"><i class="glyphicon glyphicon-export"></i><span> Exit</span></a></li>
                                <li><a class="ajax-link" href="list_of_attendance.php"><i class="glyphicon glyphicon-user"></i><span> List of Attendance</span></a></li> 
                            </ul> 
                        </li>                     
						
	
                        
                        <li class="accordion">
                            <a href="#"><i class="fa fa-bar-chart-o"></i><span> Report</span></a>
                            <ul class="nav nav-pills nav-stacked">
                               
   								<li><a class="ajax-link" href="list_of_loan_history_books.php"><i class=" fa fa-history"></i><span> Book transaction history</span></a></li>   
 								<li><a class="ajax-link" href="report_collection_page.php"><i class="fa fa-line-chart"></i><span> Collection distribution</span></a></li>                                
   								<li><a class="ajax-link" href="list_of_loan_history_equipment.php"><i class=" glyphicon glyphicon-camera"></i><span> Equipment transaction history</span></a></li>   
                                <li><a class="ajax-link" href="list_of_loan_history_internet.php"><i class="fa fa-wifi"></i><span> Internet transaction history</span></a></li>
                                <li><a class="ajax-link" href="list_of_loan_counter_av.php"><i class=" fa fa-search-plus"></i><span> Loan counter (AV)</span></a></li>                              
                                <li><a class="ajax-link" href="list_of_loan_counter.php"><i class=" fa fa-sort-numeric-asc"></i><span> Loan counter (Book)</span></a></li>    
                                <li><a class="ajax-link" href="list_of_loan_history_locker.php"><i class=" fa fa-unlock-alt"></i><span> Locker transaction history</span></a></li>
                                <li><a class="ajax-link" href="list_of_overdue_book.php"><i class=" fa fa-drivers-license-o"></i><span> List of overdue book</span></a></li>
                            </ul>
                        </li>
                        
                         <li class="accordion">
                            <a href="#"><i class="fa fa-wrench"></i><span> Policy and Utilities</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="./policy/index.php?grp_name=GROUP NAME"><i class="fa fa-users"></i><span> Group </span></a></li>
								<li><a class="ajax-link" href="./policy/list_services.php?grp_name=LIBRARY SERVICES"><i class="fa fa-home"></i><span> Services</span></a></li>
                                <li><a class="ajax-link" href="list_of_other_policies.php"><i class="fa fa-commenting-o"></i><span> Other policies</span></a></li> 
                          </ul> 
                        </li>     
                        
                          <li class="accordion">
                            <a href="#"><i class="fa fa-database"></i><span> Database</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a class="ajax-link" href="./db_backup/index.php"><i class="fa fa-upload"></i><span> Backup </span></a></li>
								<li><a class="ajax-link" href="./db_restore/index.php"><i class="fa fa-download"></i><span> Restore </span></a></li>

                            </ul> 
                        </li>                         
                        
						<li><a class="ajax-link" href="list_of_login.php"><i class="glyphicon glyphicon-user"></i><span> Staff log file</span></a></li>
						

                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->


        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
        <?php } ?>
