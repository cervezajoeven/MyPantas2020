<?php
include('../connect.php');
include('function.php');

if(isset($_POST["user_id"]))

{
	$output = array();
	$statement = $sLink->prepare(        
		"SELECT * FROM books 
		WHERE bkid = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
    
	foreach($result as $row)
	{
		$output["title"] = $row["title"];

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
        $TitleStr[11] = str_replace("<0011>", "", $MyArray1[10]);
        $TitleStr[12] = str_replace("<0012>", "", $MyArray1[11]);
        $TitleStr[13] = str_replace("<0013>", "", $MyArray1[12]);
        $TitleStr[14] = str_replace("<0014>", "", $MyArray1[13]);
        $TitleStr[15] = str_replace("<0015>", "", $MyArray1[14]);
        $TitleStr[16] = str_replace("<0016>", "", $MyArray1[15]);
        $TitleStr[17] = str_replace("<0017>", "", $MyArray1[16]);
        $TitleStr[18] = str_replace("<0018>", "", $MyArray1[17]);
        
        $TitleStr[19] = str_replace("<0019>", "", $MyArray1[18]);
        $TitleStr[20] = str_replace("<0020>", "", $MyArray1[19]);
        $TitleStr[21] = str_replace("<0021>", "", $MyArray1[20]);
        $TitleStr[22] = str_replace("<0022>", "", $MyArray1[21]);
        $TitleStr[23] = str_replace("<0023>", "", $MyArray1[22]);
        $TitleStr[24] = str_replace("<0024>", "", $MyArray1[23]);
        $TitleStr[25] = str_replace("<0025>", "", $MyArray1[24]);
        $TitleStr[26] = str_replace("<0026>", "", $MyArray1[25]);
        $TitleStr[27] = str_replace("<0027>", "", $MyArray1[26]);
        $TitleStr[28] = str_replace("<0028>", "", $MyArray1[27]);	
        
        $TitleStr[29] = str_replace("<0029>", "", $MyArray1[28]);
        $TitleStr[30] = str_replace("<0030>", "", $MyArray1[29]);
        $TitleStr[31] = str_replace("<0031>", "", $MyArray1[30]);
        $TitleStr[32] = str_replace("<0032>", "", $MyArray1[31]);
        $TitleStr[33] = str_replace("<0033>", "", $MyArray1[32]);
        $TitleStr[34] = str_replace("<0034>", "", $MyArray1[33]);
        $TitleStr[35] = str_replace("<0035>", "", $MyArray1[34]);
        $TitleStr[36] = str_replace("<0036>", "", $MyArray1[35]);
        $TitleStr[37] = str_replace("<0037>", "", $MyArray1[36]);
        $TitleStr[38] = str_replace("<0038>", "", $MyArray1[37]);
        $TitleStr[39] = str_replace("<0039>", "", $MyArray1[38]);
        $TitleStr[40] = str_replace("<0040>", "", $MyArray1[39]);
        $TitleStr[41] = str_replace("<0041>", "", $MyArray1[40]);
        $TitleStr[42] = str_replace("<0042>", "", $MyArray1[41]);
    
        $TitleStr[1] = str_replace(chr(34), "", $TitleStr[1]);              
                    
                    
        $tr = $row['tr'];
        if($tr == '1') 
        {
            $trchecked = "checked";
        }
        
        $fr = $row['fr'];
        if($fr == '1') 
        {
            $frchecked = "checked";
        }	
        
        $circ = $row['circ'];
        if($circ == '1') 
        {
            $circchecked = "checked";
        }	
        
        $ref = $row['ref'];
        if($ref == '1') 
        {
            $refchecked = "checked";
        }
    
        $fil = $row['fil'];
        if($fil == '1') 
        {
            $filchecked = "checked";
        }	
        
        $sm = $row['sm'];
        if($sm == '1') 
        {
            $smchecked = "checked";
        }
    
        $bio = $row['bio'];
        if($bio == '1') 
        {
            $biochecked = "checked";
        }	
        
        $res = $row['res'];
        if($res == '1') 
        {
            $reschecked = "checked";
        }
        
        $schl = $row['schl'];
        if($schl == '1') 
        {
            $schlchecked = "checked";
        }	
        
        $easy = $row['easy'];
        if($easy == '1') 
        {
            $easychecked = "checked";
        }	
    
        $fic = $row['fic'];
        if($fic == '1') 
        {
            $ficchecked = "checked";
        }		
        
        $gc = $row['gc'];
        if($gc == '1') 
        {
            $gcchecked = "checked";
        }

		$output["title"] = $TitleStr[1]; //$row["title"];
		$output["responsibility"] = $TitleStr[2];  
 		$output["parallel"] = $TitleStr[3];              
		$output["main_creator"] = $TitleStr[4];  
        $output["call_number"] = $TitleStr[5];  
        $output["other_creator"] = $TitleStr[6];       
 		$output["contributors"] = $TitleStr[7];          
		$output["corporate_body"] = $TitleStr[8];  
 		$output["place"] = $TitleStr[9];     
		$output["publisher"] = $TitleStr[10];  
        $output["date_of_publication"] = $TitleStr[11];    
        $output["edition"] = $TitleStr[12]; 
 		$output["extent"] = $TitleStr[13];              
		$output["illustrative_content"] = $TitleStr[14];  
        $output["dimension"] = $TitleStr[15];  
        $output["accompanying_materials"] = $TitleStr[16];       
 		$output["series"] = $TitleStr[17];          
		$output["supplementary"] = $TitleStr[18];  
 		$output["isbn"] = $TitleStr[19];     
		$output["topical"] = $TitleStr[20];  
        $output["personal"] = $TitleStr[21];    
        $output["corporate"] = $TitleStr[22];          
        $output["geographical"] = $TitleStr[23];  
        
        $output["prefix"] = $TitleStr[24];  
        $output["call_number"] = $TitleStr[25];
        $output["accession"] = $TitleStr[26];    
        $output["language"] = $TitleStr[27];          
        $output["location"] = $TitleStr[28];
        $output["electronic_access"] = $TitleStr[29]; 
        $output["cover"] = $row["images"];  

        $output["content"] = $TitleStr[33]; 
        $output["abstract"] = $TitleStr[34]; 
        $output["review"] = $TitleStr[35]; 

        $output["preferred"] = $TitleStr[37];  
        $output["url"] = $TitleStr[38];   

        $output["n_copy"] = $row["copy"];        
        $output["on_shelf"] = $row["inn"];  
        $output["t_out"] = $row["t_out"];        
        $output["t_timesout"] = $row["t_timesout"];  

        $output["mtype"] = $row["mtype"]; 

        $output["entered_by"] = $row["entered_by"];        
        $output["updated_by"] = $row["updated_by"];  
        $output["date_entered"] = $row["date_entered"];        
        $output["date_updated"] = $row["date_updated"]; 
        
        $output["fil"] = $filchecked; 
        $output["ref"] = $refchecked; 
 
	}
	echo json_encode($output);
}

?>


