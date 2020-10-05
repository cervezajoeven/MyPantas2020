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

	'maintext',

	);

	$query = $datatable->get_custom("select * from books where tm='vf'",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
	$ResultData[] = $value->title;
	$ResultData[] = $value->tm;
	$ResultData[] = $value->copy;


	$ResultData[] = "
                        <a href='edit_vf.php?bkid=".$value->bkid."' class='btn btn-primary'><i class='glyphicon glyphicon-edit icon-white'></i> Edit</a> 
                        
                        <a href='delete_vf.php?bkid=".$value->bkid."' class='btn btn-danger'><i class='glyphicon glyphicon-trash icon-white'></i> Delete</a> 

                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
