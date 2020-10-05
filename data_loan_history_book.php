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
    'degree_course',
	'accession',
    'title',
	'date_loan',
    'date_returned',

	);

	$query = $datatable->get_custom("select * from returned",$columns);

	//initialize array data
	$data = array();

	foreach ($query	as $value) {

	//array data
	$ResultData = array();
	
	//data ke array column table
    $ResultData[] = $value->name;    
    $ResultData[] = $value->id_number;    
    $ResultData[] = $value->degree_course;     
	$ResultData[] = $value->accession;
	$ResultData[] = $value->title;
	$ResultData[] = $value->date_loan;        
	$ResultData[] = $value->date_returned;    
       


	$ResultData[] = "
                        <a href='view_loan_history_book.php?item_id=".$value->id."' class='btn btn-success'><i class='glyphicon glyphicon-eye-open icon-white'></i> View </a> 
                        
                        <a href='delete_loan_history_book.php?item_id=".$value->id."' class='btn btn-danger'><i class='glyphicon glyphicon-trash icon-white'></i> Delete</a> 

                    ";
   

	//variable $data

	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
