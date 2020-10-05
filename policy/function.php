<?php

//function upload_image()
//{
//	if(isset($_FILES["user_image"]))
//	{
//		$extension = explode('.', $_FILES['user_image']['name']);
//		$new_name = rand() . '.' . $extension[1];
//		$destination = './upload/' . $new_name;
//		move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
//		return $new_name;
//	}
//}

//function get_image_name($user_id)
//{
//	include('db.php');
//	$statement = $connection->prepare("SELECT image FROM user WHERE id = '$user_id'");
//	$statement->execute();
//	$result = $statement->fetchAll();
//	foreach($result as $row)
//	{
//		return $row["image"];
//	}
//}

function get_total_all_records()
{

    include('../connect.php'); 
	$statement = $sLink->prepare("SELECT * FROM group_type");    
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

function get_total_all_records_services()
{

    include('../connect.php'); 
    $statement = $sLink->prepare("SELECT * FROM library_services");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

function get_total_all_records_computer()
{

    include('../connect.php'); 
    $statement = $sLink->prepare("SELECT * FROM computer");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

function get_total_all_records_thesaurus()
{

    include('../connect.php');   
    $statement = $sLink->prepare("SELECT * FROM thesaurus");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

function get_total_all_records_books()
{

    include('../connect.php');   
	//$statement = $sLink->prepare("SELECT * FROM books where tm='book' and maintext like '%education%' and title is not null");
	$statement = $sLink->prepare("SELECT * FROM books WHERE tm='book'");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>