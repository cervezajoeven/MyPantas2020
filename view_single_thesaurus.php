<?php
include('../connect.php');
include('function.php');

if(isset($_POST["user_id"]))

{
	$output = array();
	$statement = $sLink->prepare(        
		"SELECT * FROM thesaurus 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
    
	foreach($result as $row)
	{
		$output["title"] = $row["title"];
		//$output["maintext"] = $row["maintext"];
        
        $MyString1 = $row['maintext'];
        $MyArray1 = explode("", $MyString1);
        $TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
        $TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
        $TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
        $TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
        $TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
        $TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
        $TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);
        $TitleStr[8] = str_replace("<008>", "", $MyArray1[7]);
        $TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
        $TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);                
        $TitleStr[1] = str_replace(chr(34), "", $TitleStr[1]);          
        
		$output["sn"] = $TitleStr[2];  
 		$output["bt"] = $TitleStr[3];              
		$output["nt"] = $TitleStr[4];  
 		$output["rt"] = $TitleStr[5];          
		$output["use"] = $TitleStr[6];  
 		$output["uf"] = $TitleStr[7];          
		$output["subject"] = $TitleStr[8];  
 		$output["lang"] = $TitleStr[9];     
		$output["ref"] = $TitleStr[10];  
 		$output["image"] = $TitleStr[1];         
        
	}
	echo json_encode($output);
}

?>

