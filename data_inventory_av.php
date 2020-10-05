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
    'accession',
    'title',
	'author',                             
	'call_number',
    'type',
	'idate',
    'status',
	);

	$query = $datatable->get_custom("select * from sm_inventory",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
    $ResultData[] = $value->accession;    
    $ResultData[] = $value->title;    
	$ResultData[] = $value->author;
	$ResultData[] = $value->call_number;
    $ResultData[] = $value->type;    
	$ResultData[] = $value->idate;
	$ResultData[] = $value->status;
        
	$ResultData[] = "
                        <a href='edit_av_inventory.php?item_id=".$value->id."' class='btn btn-primary'><i class='glyphicon glyphicon-edit icon-white'></i> Edit</a> 
                        
                        <a href='delete_av_inventory.php?item_id=".$value->id."' class='btn btn-danger'><i class='glyphicon glyphicon-trash icon-white'></i> Delete</a> 

                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
