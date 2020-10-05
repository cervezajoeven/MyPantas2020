<?php
//include('db.php');
include('../connect.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM library_services ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE library_name LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR heading LIKE "%'.$_POST["search"]["value"].'%" ';
    
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
	//$image = '';
	//if($row["image"] != '')
	//{
	//	$image = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" />';
	//}
	//else
	//{
	//	$image = '';
	//}
    
	$sub_array = array();
    //$sub_array[] = $row["id"];
	$sub_array[] = $row["library_name"];
	$sub_array[] = $row["heading"];
	$sub_array[] = $row["photo_hour"];
	$sub_array[] = $row["photo_fine"];  
	$sub_array[] = $row["ov_cutoff"];
	$sub_array[] = $row["ov_fine_hour"]; 
	$sub_array[] = $row["ov_fine_whole"];     
	$sub_array[] = $row["time_open"];
	$sub_array[] = $row["time_closing"];
	$sub_array[] = $row["photo_path"];  
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records_services(),
	"data"				=>	$data
);
echo json_encode($output);
?>

