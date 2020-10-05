<?php
session_start();
include "lib/config.php";

//column
//$columns = array(
//	'title',
//	'tm',
//	'maintext',
//	'bkid',
//	);
    

$columns = array(
    'name',
    'client_id',
	'barcode',
    'locker',  
    'level',
	'time_borrowed',
    'time_returned',

	);

	$query = $datatable->get_custom("select * from locker_history",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
    $ResultData[] = $value->name;    
    $ResultData[] = $value->client_id;    
	$ResultData[] = $value->barcode;
    $ResultData[] = $value->locker; 
    $ResultData[] = $value->level;       
	$ResultData[] = $value->time_borrowed;        
	$ResultData[] = $value->time_returned;    
       


	$ResultData[] = "
                        <a href='view_loan_history_locker.php?item_id=".$value->id_record."' class='btn btn-success'><i class='glyphicon glyphicon-eye-open icon-white'> </i> View</a> 
                        
                        <a href='delete_loan_history_locker.php?item_id=".$value->id_record."' class='btn btn-danger'><i class='glyphicon glyphicon-trash icon-white'> </i> Delete</a> 

                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
