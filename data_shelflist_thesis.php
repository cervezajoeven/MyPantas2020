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
	'ye_ar',
    'publisher',
	'call_number',
	);

	$query = $datatable->get_custom("select * from acctd",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
 	$ResultData[] = $value->call_number;
    $ResultData[] = $value->title;    
	$ResultData[] = $value->author;
	$ResultData[] = $value->ye_ar;
	$ResultData[] = $value->publisher;        
    $ResultData[] = $value->accession;        


	$ResultData[] = "
                        <a href='view_shelflist_thesis.php?item_id=".$value->id."' class='btn btn-success'><i class='glyphicon glyphicon-eye-open icon-white'></i> View</a> 
                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
