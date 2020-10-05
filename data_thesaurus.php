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

	$query = $datatable->get_custom("select * from thesaurus",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
	$ResultData[] = $value->title;



	$ResultData[] = "
                        <a href='edit_thesaurus.php?id=".$value->id."' class='btn btn-primary'><i class='glyphicon glyphicon-edit icon-white'></i> Edit</a> 
                        
                        <a href='delete_thesaurus.php?id=".$value->id."' class='btn btn-danger'><i class='glyphicon glyphicon-trash icon-white'></i> Delete</a> 
                        
                        <a href='view_thesaurus.php?id=".$value->id."' class='btn btn-info'><i class='glyphicon glyphicon-search icon-white'></i> View</a>                      


                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
