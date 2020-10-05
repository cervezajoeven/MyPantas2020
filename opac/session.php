<?php 
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}
$id_session=$_SESSION['id'];

//day exclusion setting
$monday = false;
$tuesday = false;
$wednesday = false;
$thursday = false;
$friday = false;
$saturday = false;
$sunday = true;
$holiday = true;

//number of hours for photocopying
$photocopy = 2;

//equipment borrowing fine
$fine_equipment = 3;

//setting up of picture path
$pixpath = "pix/";
    
//setting up of print header
$print_header = "SCHOOL OF SAINT SEBASTIAN";    

?>