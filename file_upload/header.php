<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyPANTAS File Upload</title>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
     <!-- logo size-->        

  <style>

    body{
      background: lightblue;
    }

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

      
      
      
  </style>
</head>


    
<body  >
    
<?php ob_start(); ?>
<?php require ('connect.php'); ?>
<?php date_default_timezone_set("Asia/Manila"); ?>
 
<div class="container-fluid" >
  <div class="page-header">
      <center><h1><img src="./images/LibroHead.jpg" BORDER=0 ALIGN ="middle" ALT="Home" HEIGHT="100px" WIDTH="100px"> KNOWLEDGE MASTER ACADEMY</h1></center>
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
        <li class="active"><a href="index.php?button=basic"><strong>Home</strong></a></li>
          <li><a href="index.php"><strong>Basic search</strong></a></li>
          <li><a href="index_advance.php?button=advance"><strong>Advance search</strong></a></li>		
          <li><a href="index_archives.php"><strong>Archives search</strong></a></li>	
          <li><a href="index_museum.php"><strong>Museum search</strong></a></li>	         
          <li><a href="#"><strong>About</strong></a></li>
          <li><a href="#"><strong>Contact</strong></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="fa fa-edit"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>