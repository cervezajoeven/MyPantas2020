<!DOCTYPE html>
<html lang="en">
<head>
  <title>KMCS</title>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="w3css/w3.css">  


    <!-- Bootstrap core CSS -->


    <!-- Custom styling plus plugins -->
    <!-- <link href="css/custom.css" rel="stylesheet"> -->
    <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>  
  <link href='css/bootstrap.min.css' rel='stylesheet'>
  
    <!-- The vector icons -->
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- logo size-->        



		  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: #FA8072;
      background-image: none;   
      color:white;  
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #FFE4C4;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color:#FA8072;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
      


.button {
  display: inline-block;
  padding: 8px 8px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: gold;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: gold}

.button:active {
  background-color: gold;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
      

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}      
      
      
</style>
</head>
    
<body bgcolor="#EAF2D3" >
    
<?php ob_start(); ?>
<?php require ('connect.php'); ?>
<?php date_default_timezone_set("Asia/Manila"); ?>
 
<div class="container-fluid" >
  <div class="page-header">
      <center><h1><img src="./images/LibroHead.jpg" BORDER=0 ALIGN ="middle" ALT="Home" HEIGHT="75px" WIDTH="75px"> KNOWLEDGE MASTER ACADEMY</h1></center>
  </div>
</div>

<nav class = "navbar navbar-warning" role = "navigation">    
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img SRC="./images/LibroHead.jpg" BORDER=0 ALIGN ="middle" ALT="Home" HEIGHT="30px" WIDTH="30px"></a>    
    </div>
      
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="index.php?button=basic"><strong><i class="fa fa-home" style="font-size:24px" title="Go to Home"> </i></strong> </a></li>
          <li><a href="index.php"><strong><i class="fa fa-binoculars" style="font-size:24px" title="Basic search"></i></strong>  </a></li>
          <li><a href="index_advance.php?button=advance"><strong><i class="fa fa-search-plus" style="font-size:24px" title="Advance search"></i></strong> </a> </li>		
          <li><a href="index_archives.php"><strong><i class="fa fa-archive" style="font-size:24px" title="Archive search"></i></strong> </a> </li>	
          <li><a href="index_museum.php"><strong><i class="fa fa-university" style="font-size:24px" title="Museum search"></i></strong> </a> </li>
          <li><a href="index_thesaurus.php"><strong><i class="fa fa-gift" style="font-size:24px" title="Thesaurus search"></i></strong> </a> </li>            
          <li><a href="#"><strong><i class="fa fa-phone" style="font-size:24px" title="Contact us"></i></strong> </a> </li>   
          <li><a href="#"><strong><i class="fa fa-question-circle-o" style="font-size:24px" title="About us"></i></strong> </a> </li>  
      </ul>  
     
      <ul class="nav navbar-nav navbar-middle">
          <li><strong><marquee  width="1000" height="50" direction=left><font size="4"> Welcome to my Pantas</font></marquee></strong></li>       
      </ul> 
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="fa fa-edit"></span> Login</a></li>        
      </ul>
    </div>
  </div>
</nav>
    
 
    