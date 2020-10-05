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
    'equipment',
    'date_reservation',
	'time_reservation',
	'name',
    'subject',
	'purpose',
	'date_submitted',
	);

	$query = $datatable->get_custom("select * from equipmentnew_schedule",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
    $ResultData[] = $value->equipment;    
    $ResultData[] = $value->date_reservation;    
	$ResultData[] = $value->time_reservation;
	$ResultData[] = $value->name;
	$ResultData[] = $value->subject;        
	$ResultData[] = $value->purpose;
	$ResultData[] = $value->date_submitted;        


	$ResultData[] = "
                        <a href='edit_equipment_reservation.php?item_id=".$value->id."' class='btn btn-primary'><i class='glyphicon glyphicon-edit icon-white'></i> Edit</a> 
                        
                        <a href='delete_equipment_reservation.php?item_id=".$value->id."' class='btn btn-danger'><i class='glyphicon glyphicon-trash icon-white'></i> Delete</a> 

                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
