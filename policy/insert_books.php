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
			$txtstr = "<001>" . $_POST['str0'] . ""; //'title
			$txtstr = $txtstr . "<002>" . $_POST['str1'] . ""; //reponsibility
			$txtstr = $txtstr . "<003>" . $_POST['str2'] . ""; //parallel title
			$txtstr = $txtstr . "<004>" . $_POST['str3'] . ""; //main creator
			$txtstr = $txtstr . "<005>" . $_POST['str4'] . ""; //numeration
			$txtstr = $txtstr . "<006>" . $_POST['str5'] . ""; //'other_creator or author
			$txtstr = $txtstr . "<007>" . $_POST['str6'] . ""; //'contributors ... editors
			$txtstr = $txtstr . "<008>" . $_POST['str7'] . ""; //'corporate author
			$txtstr = $txtstr . "<009>" . $_POST['str8'] . ""; //'place of publication
			$txtstr = $txtstr . "<0010>" . $_POST['str9'] . ""; //'publisher
			$txtstr = $txtstr . "<0011>" . $_POST['str10'] . ""; //'year of publication
			$txtstr = $txtstr . "<0012>" . $_POST['str11'] . ""; //'edition
			$txtstr = $txtstr . "<0013>" . $_POST['str12'] . ""; //'pages/extent
			$txtstr = $txtstr . "<0014>" . $_POST['str13'] . ""; //'other details
			$txtstr = $txtstr . "<0015>" . $_POST['str14'] . ""; //'dimension
			$txtstr = $txtstr . "<0016>" . $_POST['str15'] . ""; //'accompanying materials
			$txtstr = $txtstr . "<0017>" . $_POST['str16'] . ""; //'series
			$txtstr = $txtstr . "<0018>" . $_POST['str17'] . ""; //'general notes
			$txtstr = $txtstr . "<0019>" . $_POST['str18'] . ""; //'isbn
			$txtstr = $txtstr . "<0020>" . $_POST['str19'] . ""; //'topical
			$txtstr = $txtstr . "<0021>" . $_POST['str20'] . ""; //'personal
			$txtstr = $txtstr . "<0022>" . $_POST['str21'] . ""; //'corporate
			$txtstr = $txtstr . "<0023>" . $_POST['str22'] . ""; //'geographical
			$txtstr = $txtstr . "<0024>" . $_POST['str23'] . ""; //'prefix
			$txtstr = $txtstr . "<0025>" . $_POST['str24'] . ""; //'call number
			$txtstr = $txtstr . "<0026>" . $_POST['str25'] . ""; //'accession
			$txtstr = $txtstr . "<0027>" . $_POST['str26'] . ""; //'language
			$txtstr = $txtstr . "<0028>" . $_POST['str27'] . ""; //'location
			$txtstr = $txtstr . "<0029>" . $_POST['str28'] . ""; //'filename
			$txtstr = $txtstr . "<0030>" . $_POST['str29'] . ""; //'copy
			$txtstr = $txtstr . "<0031>" . $_POST['str30'] . ""; //'inn
			$txtstr = $txtstr . "<0032>" . $_POST['str31'] . ""; //'out
			$txtstr = $txtstr . "<0033>" . $_POST['str32'] . ""; //'content
			$txtstr = $txtstr . "<0034>" . $_POST['str33'] . ""; //'summary
			$txtstr = $txtstr . "<0035>" . $_POST['str34'] . ""; //'abstract
			$txtstr = $txtstr . "<0036>" . $_POST['str35'] . ""; //'timesout
			$txtstr = $txtstr . "<0037>" . $_POST['str36'] . ""; // preferred
			$txtstr = $txtstr . "<0038>" . $_POST['str37'] . ""; 
			$txtstr = $txtstr . "<0039>" . $_POST['str38'] . ""; 
			$txtstr = $txtstr . "<0040>" . $_POST['str39'] . ""; 
			$txtstr = $txtstr . "<0041>" . $_POST['str40'] . ""; 
			$maintext = $txtstr . "<0042>" .  $_POST['str41'] . "";
			//$maintext = $txtstr . "<0042>" . $_POST['str41'] . ""; 
			//$maintext = addslashes($maintext);
			$maintext = str_replace("'", "`", $maintext);
				
			$title = $_POST['str0'];
			//$title = addslashes($title);                      
			$title = str_replace("'", "`", $title);                           
			$charlength = strlen($title);
			if ($charlength > 250){
				$title = mb_substr($title,0,250,'UTF-8');                                  
			}                            
				
			$image = $_POST['str41'];
			$tm = 'book';

			$n_copy = $_POST['str29'];
			$inn = $_POST['str29'];						
			$t_out = 0; //$_POST['str31'];
			$t_timesout = 0; //$_POST['str35'];		
			
			$entered_by = $_SESSION['charger'];
			$updated_by = $_SESSION['charger']; 	
			$date_entered = date("Y-m-d H:i:s");
			$date_updated = date("Y-m-d H:i:s");
			
			$tr = $_POST['tr']; //'type
			$fr = $_POST['fr']; //'type
			$circ = $_POST['circ']; //'type
			$ref = $_POST['ref']; //'type
			$fil = $_POST['fil']; //'type
			$sm = $_POST['sm']; //'type
			$bio = $_POST['bio']; //'type
			$res = $_POST['res']; //'type
			$schl = $_POST['schl']; //'type
			$easy = $_POST['easy']; //'type
			$fic = $_POST['fic']; //'type
			$gc = $_POST['gc']; //'type		
			$mtype = $_POST['mtype']; //'type					

			if(isset($_POST['tr']) && $_POST['tr'] == 'tr') 
			{
				$tr = 1;
			}
			else
			{
				$tr = 0;
			}  	

			if(isset($_POST['fr']) && $_POST['fr'] == 'fr') 
			{
				$fr = 1;
			}
			else
			{
				$fr = 0;
			}						
			if(isset($_POST['circ']) && $_POST['circ'] == 'circ') 
			{
				$circ = 1;
			}
			else
			{
				$circ = 0;
			}						
			if(isset($_POST['ref']) && $_POST['ref'] == 'ref') 
			{
				$ref = 1;
			}
			else
			{
				$ref = 0;
			}								
			if(isset($_POST['fil']) && $_POST['fil'] == 'fil') 
			{
				$fil = 1;
			}
			else
			{
				$fil = 0;
			}	
			if(isset($_POST['sm']) && $_POST['sm'] == 'sm') 
			{
				$sm = 1;
			}
			else
			{
				$sm = 0;
			}						
			if(isset($_POST['bio']) && $_POST['bio'] == 'bio') 
			{
				$bio = 1;
			}
			else
			{
				$bio = 0;
			}						
			if(isset($_POST['res']) && $_POST['res'] == 'res') 
			{
				$res = 1;
			}
			else
			{
				$res = 0;
			}	
			if(isset($_POST['res']) && $_POST['res'] == 'res') 
			{
				$res = 1;
			}
			else
			{
				$res = 0;
			}	
			if(isset($_POST['schl']) && $_POST['schl'] == 'schl') 
			{
				$schl = 1;
			}
			else
			{
				$schl = 0;
			}							
			if(isset($_POST['easy']) && $_POST['easy'] == 'easy') 
			{
				$easy = 1;
			}
			else
			{
				$easy = 0;
			}	
			if(isset($_POST['fic']) && $_POST['fic'] == 'fic') 
			{
				$fic = 1;
			}
			else
			{
				$fic = 0;
			}
			if(isset($_POST['gc']) && $_POST['gc'] == 'gc') 
			{
				$gc = 1;
			}
			else
			{
				$gc = 0;
			}						

		//$statement = $connection->prepare("
		$statement = $sLink->prepare("        
			INSERT INTO books (title,maintext,tm,entered_by,updated_by,date_entered,date_updated,tr,fr,circ,ref,fil,sm,bio,res,schl,easy,fic,gc,mtype,copy,inn,t_out,t_timesout, images) 
			VALUES (:title, :maintext, :tm, :entered_by, :updated_by, :date_entered, :date_updated, :tr, :fr, :circ, :ref, :fil, :sm, :bio, :res, :schl, :easy, :fic, :gc, :mtype, :n_copy, :inn, :t_out, :t_timesout, :image_location)

		");
		$result = $statement->execute(
			array(
				':title'	        =>	$title, //$_POST["title"],
				':maintext'  	 	=>	$maintext,
				':tm'  	 			=>	$tm,
                ':entered_by'    	=> 	$entered_by,								
				':updated_by'    	=> 	$updated_by,
                ':date_entered'  	=> 	$date_entered,				
				':date_updated'  	=> 	$date_updated,	
				':tr'  	 			=>	$tr,	
				':fr'  	 			=>	$fr,
				':circ'  	 		=>	$circ,
				':ref'  	 		=>	$ref,
				':fil'  	 		=>	$fil,
				':sm'  	 			=>	$sm,
				':bio'  	 		=>	$bio,
				':res'  	 		=>	$res,
				':schl'  	 		=>	$schl,					
				':easy'  	 		=>	$easy,
				':fic'  	 		=>	$fic,				
				':gc'  	 			=>	$gc,	
				':mtype'  	 		=>	$mtype,								
				':n_copy'  	 		=>	$n_copy,
				':inn'  	 		=>	$inn,
				':t_out'  	 		=>	$t_out,
				':t_timesout'  	 	=>	$t_timesout,
				':image_location'   => 	$imglocation,		

			)
		);
		if(!empty($result))
		{
			echo 'New book catalog data is successfully inserted.';
		}
	}
	if($_POST["operation"] == "Edit")
	{
        
        //move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads_image/" . $_FILES["image"]["name"]);			
        //$imglocation=$_FILES["image"]["name"];
        //if ($imglocation <> "")
         //   {
         //     $imglocation=$_FILES["image"]["name"];
         //   }
        //else
         //   {
          //    $imglocation=$_POST['image_location'];        
          //  }
						
		unset($txtstr);
		$txtstr = "<001>" . $_POST['str0'] . ""; //'title
		$txtstr = $txtstr . "<002>" . $_POST['str1'] . ""; //reponsibility
		$txtstr = $txtstr . "<003>" . $_POST['str2'] . ""; //parallel title
		$txtstr = $txtstr . "<004>" . $_POST['str3'] . ""; //main creator
		$txtstr = $txtstr . "<005>" . $_POST['str4'] . ""; //numeration
		$txtstr = $txtstr . "<006>" . $_POST['str5'] . ""; //'other_creator or author
		$txtstr = $txtstr . "<007>" . $_POST['str6'] . ""; //'contributors ... editors
		$txtstr = $txtstr . "<008>" . $_POST['str7'] . ""; //'corporate author
		$txtstr = $txtstr . "<009>" . $_POST['str8'] . ""; //'place of publication
		$txtstr = $txtstr . "<0010>" . $_POST['str9'] . ""; //'publisher
		$txtstr = $txtstr . "<0011>" . $_POST['str10'] . ""; //'year of publication
		$txtstr = $txtstr . "<0012>" . $_POST['str11'] . ""; //'edition
		$txtstr = $txtstr . "<0013>" . $_POST['str12'] . ""; //'pages/extent
		$txtstr = $txtstr . "<0014>" . $_POST['str13'] . ""; //'other details
		$txtstr = $txtstr . "<0015>" . $_POST['str14'] . ""; //'dimension
		$txtstr = $txtstr . "<0016>" . $_POST['str15'] . ""; //'accompanying materials
		$txtstr = $txtstr . "<0017>" . $_POST['str16'] . ""; //'series
		$txtstr = $txtstr . "<0018>" . $_POST['str17'] . ""; //'general notes
		$txtstr = $txtstr . "<0019>" . $_POST['str18'] . ""; //'isbn
		$txtstr = $txtstr . "<0020>" . $_POST['str19'] . ""; //'topical
		$txtstr = $txtstr . "<0021>" . $_POST['str20'] . ""; //'personal
		$txtstr = $txtstr . "<0022>" . $_POST['str21'] . ""; //'corporate
		$txtstr = $txtstr . "<0023>" . $_POST['str22'] . ""; //'geographical
		$txtstr = $txtstr . "<0024>" . $_POST['str23'] . ""; //'prefix
		$txtstr = $txtstr . "<0025>" . $_POST['str24'] . ""; //'call number
		$txtstr = $txtstr . "<0026>" . $_POST['str25'] . ""; //'accession
		$txtstr = $txtstr . "<0027>" . $_POST['str26'] . ""; //'language
		$txtstr = $txtstr . "<0028>" . $_POST['str27'] . ""; //'location
		$txtstr = $txtstr . "<0029>" . $_POST['str28'] . ""; //'filename
		$txtstr = $txtstr . "<0030>" . $_POST['str29'] . ""; //'copy
		$txtstr = $txtstr . "<0031>" . $_POST['str30'] . ""; //'inn
		$txtstr = $txtstr . "<0032>" . $_POST['str31'] . ""; //'out
		$txtstr = $txtstr . "<0033>" . $_POST['str32'] . ""; //'content
		$txtstr = $txtstr . "<0034>" . $_POST['str33'] . ""; //'summary
		$txtstr = $txtstr . "<0035>" . $_POST['str34'] . ""; //'abstract
		$txtstr = $txtstr . "<0036>" . $_POST['str35'] . ""; //'timesout
		$txtstr = $txtstr . "<0037>" . $_POST['str36'] . ""; //preferred
		$txtstr = $txtstr . "<0038>" . $_POST['str37'] . ""; 
		$txtstr = $txtstr . "<0039>" . $_POST['str38'] . ""; 
		$txtstr = $txtstr . "<0040>" . $_POST['str39'] . ""; 
		$txtstr = $txtstr . "<0041>" . $_POST['str40'] . ""; 
		$maintext = $txtstr . "<0042>" .  $_POST['str41'] . "";
		//$maintext = $txtstr . "<0042>" . $_POST['str41'] . ""; 
		//$maintext = addslashes($maintext);
		$maintext = str_replace("'", "`", $maintext);

		$title = $_POST['str0'];
        $title = str_replace("'", "`", $title); 
        $charlength = strlen($title);
        if ($charlength > 250){
            $title = mb_substr($title,0,250,'UTF-8');                                  
		} 
		//$entered_by = $_POST['entered_by']; //$_SESSION['charger'];  					
		$updated_by = $_POST['updated_by']; //$_SESSION['charger']; 
		//$date_entered = date("Y-m-d H:i:s");		    
		$date_updated = date("Y-m-d H:i:s");
		$cover = $_POST['str41'];				

		if(isset($_POST['tr']) && $_POST['tr'] == 'tr') 
		{
			$tr = 1;
		}
		else
		{
			$tr = 0;
		}  	

		if(isset($_POST['fr']) && $_POST['fr'] == 'fr') 
		{
			$fr = 1;
		}
		else
		{
			$fr = 0;
		}						
		if(isset($_POST['circ']) && $_POST['circ'] == 'circ') 
		{
			$circ = 1;
		}
		else
		{
			$circ = 0;
		}						
		if(isset($_POST['ref']) && $_POST['ref'] == 'ref') 
		{
			$ref = 1;
		}
		else
		{
			$ref = 0;
		}								
		if(isset($_POST['fil']) && $_POST['fil'] == 'fil') 
		{
			$fil = 1;
		}
		else
		{
			$fil = 0;
		}	
		if(isset($_POST['sm']) && $_POST['sm'] == 'sm') 
		{
			$sm = 1;
		}
		else
		{
			$sm = 0;
		}						
		if(isset($_POST['bio']) && $_POST['bio'] == 'bio') 
		{
			$bio = 1;
		}
		else
		{
			$bio = 0;
		}						
		if(isset($_POST['res']) && $_POST['res'] == 'res') 
		{
			$res = 1;
		}
		else
		{
			$res = 0;
		}	
		if(isset($_POST['res']) && $_POST['res'] == 'res') 
		{
			$res = 1;
		}
		else
		{
			$res = 0;
		}	
		if(isset($_POST['schl']) && $_POST['schl'] == 'schl') 
		{
			$schl = 1;
		}
		else
		{
			$schl = 0;
		}							
		if(isset($_POST['easy']) && $_POST['easy'] == 'easy') 
		{
			$easy = 1;
		}
		else
		{
			$easy = 0;
		}	
		if(isset($_POST['fic']) && $_POST['fic'] == 'fic') 
		{
			$fic = 1;
		}
		else
		{
			$fic = 0;
		}
		if(isset($_POST['gc']) && $_POST['gc'] == 'gc') 
		{
			$gc = 1;
		}
		else
		{
			$gc = 0;
		}				

		//$statement = $connection->prepare(        
		$statement = $sLink->prepare(            		 
			"UPDATE books 
			 SET title = :title, maintext = :maintext, mtype = :mtype, ref = :ref, updated_by = :updated_by, date_updated = :date_updated, images = :cover WHERE bkid = :id"
			//"UPDATE books 
			//SET title = :title, maintext = :maintext, entered_by = :entered_by, updated_by = :updated_by, date_entered = :date_entered, date_updated = :date_updated, images = :image_location WHERE bkid = :id"
			 
				
		);
		$result = $statement->execute(
			array(
                
 				':title'         	=>	$title, //$_POST["title"],
				':maintext'  		=>	$maintext, //$_POST["maintext"],     
                ':updated_by'    	=>  $updated_by,
				//':entered_by'  		=>  $entered_by,
				//':date_entered'    	=>  $date_entered,
				':date_updated'  	=>  $date_updated,
				//':image_location' 	=>  $imglocation,
				':cover'			=>	$cover,
				':mtype'    		=>  $mtype,				
				':ref'    			=>  $ref,

 				':id'			 	=>	$_POST["user_id"]               
                
			)
		);
		if(!empty($result))
		{
			echo 'Book catalog record is successfully updated.';
		}
	}
}

?>