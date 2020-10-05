<?php
//include('db.php');
include('../connect.php');
include('../config.php');
include('Function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
        
        move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads_image/" . $_FILES["image"]["name"]);			
        $imglocation=$_FILES["image"]["name"];
        if ($imglocation <> "")
            {
              $imglocation=$_FILES["image"]["name"];
            }
        else
            {
               $imglocation=$_POST['image_location'];
               
            }
						
		unset($txtstr);
		$txtstr = "<001>" . $_POST['title'] . ""; //'title
		$txtstr = $txtstr . "<002>" . $_POST['sn'] . ""; 
		$txtstr = $txtstr . "<003>" . $_POST['bt'] . ""; 
		$txtstr = $txtstr . "<004>" . $_POST['nt'] . ""; 
		$txtstr = $txtstr . "<005>" . $_POST['rt'] . ""; //numeration
		$txtstr = $txtstr . "<006>" . $_POST['use'] . ""; //'other_author
		$txtstr = $txtstr . "<007>" . $_POST['uf'] . ""; //'editors...
		$txtstr = $txtstr . "<008>" . $_POST['subject'] . ""; //'corporate author
		$txtstr = $txtstr . "<009>" . $_POST['lang'] . ""; //'corporate author   
		$maintext = $txtstr . "<0010>" . $_POST['ref'] . ""; //'other details
        $maintext = str_replace("'", "`", $maintext);
    
		$title = $_POST['title'];
        $title = str_replace("'", "`", $title); 
        $charlength = strlen($title);
        if ($charlength > 250){
            $title = mb_substr($title,0,250,'UTF-8');                                  
        } 			
						
        $updated_by = $_SESSION['charger'];     
		$date_updated = date("Y-m-d H:i:s");        
        
		//$statement = $connection->prepare("
		$statement = $sLink->prepare("        
			INSERT INTO thesaurus (title, maintext, updated_by, date_updated, image_location) 
			VALUES (:title, :maintext, :updated_by, :date_updated, :image_location)
		");
		$result = $statement->execute(
			array(
				':title'	        =>	$_POST["title"],
				//':maintext'  	    =>	$_POST["maintext"],
                
  				//':title'         =>	$title,
				':maintext'  	 =>	$maintext,   
                ':updated_by'    => $updated_by,
                ':date_updated'  => $date_updated,
                ':image_location'   => $imglocation,

			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
        
        move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads_image/" . $_FILES["image"]["name"]);			
        $imglocation=$_FILES["image"]["name"];
        if ($imglocation <> "")
            {
              $imglocation=$_FILES["image"]["name"];
            }
        else
            {
              $imglocation=$_POST['image_location'];
                   
        }
						
		unset($txtstr);
		$txtstr = "<001>" . $_POST['title'] . ""; //'title
		$txtstr = $txtstr . "<002>" . $_POST['sn'] . ""; 
		$txtstr = $txtstr . "<003>" . $_POST['bt'] . ""; 
		$txtstr = $txtstr . "<004>" . $_POST['nt'] . ""; 
		$txtstr = $txtstr . "<005>" . $_POST['rt'] . ""; //numeration
		$txtstr = $txtstr . "<006>" . $_POST['use'] . ""; //'other_author
		$txtstr = $txtstr . "<007>" . $_POST['uf'] . ""; //'editors...
		$txtstr = $txtstr . "<008>" . $_POST['subject'] . ""; //'corporate author
 		$txtstr = $txtstr . "<009>" . $_POST['lang'] . ""; //'corporate author   
		$maintext = $txtstr . "<0010>" . $_POST['ref'] . ""; //'other details
        $maintext = str_replace("'", "`", $maintext);
    
		$title = $_POST['title'];
        $title = str_replace("'", "`", $title); 
        $charlength = strlen($title);
        if ($charlength > 250){
            $title = mb_substr($title,0,250,'UTF-8');                                  
        } 			
		$updated_by = $_SESSION['charger'];     
		$date_updated = date("Y-m-d H:i:s");
        
		//$statement = $connection->prepare(        
		$statement = $sLink->prepare(            
			"UPDATE thesaurus 
			SET title = :title, maintext = :maintext, updated_by = :updated_by, date_updated = :date_updated, image_location = :image_location WHERE id = :id"
            
		);
		$result = $statement->execute(
			array(
                
 				':title'         =>	$title, //$_POST["title"],
				':maintext'  	 =>	$maintext, //$_POST["maintext"],     
                ':updated_by'    => $updated_by,
                ':date_updated'  => $date_updated,
                ':image_location' => $imglocation,
 				':id'			 =>	$_POST["user_id"]               
                
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>