

<?php

//include('db.php');
include('connect.php');

include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM thesaurus ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE title LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR maintext LIKE "%'.$_POST["search"]["value"].'%" ';
    
	//$query .= 'OR fine_each_day LIKE "%'.$_POST["search"]["value"].'%" ';      
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
//$statement = $connection->prepare($query);
$statement = $sLink->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
    
	$sub_array = array();
    //$sub_array[] = $row["id"];
	$sub_array[] = $row["title"];
	//$sub_array[] = $row["barcode"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-success btn-xs update">Update</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
	$sub_array[] = '<button type="button" name="view" id="'.$row["id"].'" class="btn btn-primary btn-xs view">View</button>';    
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records_thesaurus(),
	"data"				=>	$data
);
echo json_encode($output);
?>

