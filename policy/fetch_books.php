<?php

//include('db.php');
include('../connect.php');

include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM books WHERE tm='book' ";

if(isset($_POST["search"]["value"]))
{
	$query .= 'AND title LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'AND maintext LIKE "%'.$_POST["search"]["value"].'%" ';
      
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY bkid DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $sLink->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	if($row["tm"] == 'book'); 
	{

		$sub_array = array();
		$sub_array[] = $row["title"];
		$sub_array[] = $row["tm"];	
		$sub_array[] = '<button type="button" name="update" id="'.$row["bkid"].'" class="btn btn-success btn-xs update">Update</button>';
		$sub_array[] = '<button type="button" name="delete" id="'.$row["bkid"].'" class="btn btn-danger btn-xs delete">Delete</button>';  
		$data[] = $sub_array;
	}
	

	//$sub_array = array();
	//$sub_array[] = $row["title"];
	//$sub_array[] = $tm; //$row["tm"];	
	//$sub_array[] = '<button type="button" name="update" id="'.$row["bkid"].'" class="btn btn-success btn-xs update">Update</button>';
	//$sub_array[] = '<button type="button" name="delete" id="'.$row["bkid"].'" class="btn btn-danger btn-xs delete">Delete</button>';  
	//$data[] = $sub_array;

}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records_books(),
	"data"				=>	$data
);
echo json_encode($output);
?>

