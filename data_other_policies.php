<?php
session_start();
include "lib/config.php";



$columns = array(
    'monday',
    'friday',
	'saturday',
	'sunday',
    'heading',

	);

	$query = $datatable->get_custom("select * from overduecharge",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
    $ResultData[] = $value->monday;    
    $ResultData[] = $value->friday;    
	$ResultData[] = $value->saturday;
	$ResultData[] = $value->sunday;
	$ResultData[] = $value->heading;        
      

	$ResultData[] = "
                        <a href='edit_other_policies.php?item_id=".$value->id."' class='btn btn-primary'><i class='glyphicon glyphicon-edit icon-white'></i> Edit</a> 
                        
                        <a href='delete_other_policies.php?item_id=".$value->id."' class='btn btn-danger'><i class='glyphicon glyphicon-trash icon-white'></i> Delete</a> 

                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
