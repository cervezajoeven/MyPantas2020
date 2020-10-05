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
    'id_number',
	'grp',
	'level',
    'petsa',
    'location',
    'status',

	);

	$query = $datatable->get_custom("select * from clientlog",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
    $ResultData[] = $value->name;    
    $ResultData[] = $value->id_number;    
	$ResultData[] = $value->grp;
	$ResultData[] = $value->level;
	$ResultData[] = $value->petsa;        
	$ResultData[] = $value->location;
	$ResultData[] = $value->status;         

	$ResultData[] = "
                        <a href='edit_clientlog.php?item_id=".$value->id."' class='btn btn-primary'><i class='glyphicon glyphicon-edit icon-white'></i> Edit</a> 
                        
                        <a href='delete_attendance.php?item_id=".$value->id."' class='btn btn-danger'><i class='glyphicon glyphicon-trash icon-white'></i> Delete</a> 

                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
