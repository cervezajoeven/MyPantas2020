<style type=text/css> 

	table.goback{
		border: 0;
	}
	
	td {
		vertical-align: middle;
		background-color: #FFE4E1;
		color: black;
	}
	
	#hits {
		font-family: calibri, Arial, Helvetica, sans-serif;
		width: 100%;
		border-collapse: collapse;
	}

	#hits td, #hits th {
		font-size: 1.5em;
		border: 1px solid #98bf21;
		padding: 3px 7px 2px 7px;
	}

	#hits th {
		font-size: 1.5em;
		text-align: center;
		padding-top: 5px;
		padding-bottom: 4px;
		background-color: #E9967A;
		color: #ffffff;
		height: 30px;
	}

	#hits tr.alt td {
		color: #000000;
		background-color: #EAF2D3;
		text-align: left;
	}

	li {
		display: inline;
	}	
	
	a.back {
		text-decoration: none;
		background-color: ;
		width: 10em;
	}


	.highlight{
		background:lightblue;
		font-weight:bold;
	}

</style>

<script type="text/javascript">

	function printChecked(){
		var items=document.getElementsByName('item');
		var selectedItems="";
		for(var i=0; i<items.length; i++){
			if(items[i].type=='checkbox' && items[i].checked==true)
				selectedItems+=items[i].value+"\n";
		}
		alert(selectedItems);
	}	
	

}   	
</script>

<form action="print_selected_item.php" method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:10px;">


<div class="col-sm-8 text-left">
    
<?php

require_once("connect.php");
//$keyword = $_POST['txtKeyword'];


//if (isset($_POST['submit'])) {
//    $btn_click = $_GET ['btn_click'];
//    if ($btn_click=='basic') {    
    
        $search = str_replace(chr(34), "", $_GET["search"]);  // preg_replace("/[^a-zA-Z0-9]+/", "-", $_GET["search"]);
        $search = str_replace(chr(39), "", $search);
        $button = $_GET ['submit'];
        //$search = $_GET ['search']; 
        $mtype = $_GET['mtype'];

        if(strlen($search)<=1)
            echo "Search term too short<center>";

        $search_exploded = explode (" ", $search);

        $x = "";
        $construct = "";  

        foreach($search_exploded as $search_each)
        {
        $x++;
        if($x==1)
            $construct .="maintext LIKE '%$search_each%'";
        else
            $construct .="AND maintext LIKE '%$search_each%'"; 
        }

        if($mtype=='all')
            $constructs ="SELECT * FROM books WHERE $construct ";

        elseif ($mtype=='archive'){
            $constructs ="SELECT * FROM txtarchive WHERE $construct ";
        }
        elseif ($mtype=='museum'){
            $constructs ="SELECT * FROM museum WHERE $construct ";
        }
        elseif ($mtype=='thesaurus'){
            $constructs ="SELECT * FROM thesaurus WHERE $construct ";
        }  
        else{
            $constructs ="SELECT * FROM books WHERE tm='$mtype' AND $construct ";
        }
    //}
    
    //else {

    //}
    
//}
    
//$run = mysql_query($constructs);
//$foundnum = mysql_num_rows($run);
        
$run = $sLink->query($constructs);                         
$foundnum = $run->rowcount();   
    
if ($foundnum==0)

	echo "<center><h3><span class='label label-danger'>Sorry, no record found on <b>$search</b>.</span></h3></center>";	
    
else{ 
    
  	echo '<div class="col-md-12 text-center"> <br />
          <button id="singlebutton" name="singlebutton" class="btn btn-warning btn-sm" role="button" aria-pressed="true">
              <a href="javascript:history.back()">Back</a></button> 
          </div>';
	echo "<center><h3><span class='label label-danger'>Your searched on <b>$search</b> found <b>$foundnum</b> result(s)!</span></h3><center>";
	  
	$per_page = 10;
	$start = isset($_GET['start']) ? $_GET['start']: '';
	$max_pages = ceil($foundnum / $per_page);
	if(!$start)
	$start=0; 

	//$getquery = mysql_query("SELECT * FROM books WHERE tm='$mtype' AND $construct LIMIT $start, $per_page");

	if($mtype=='all'){
		//$getquery = mysql_query("SELECT * FROM books WHERE $construct ORDER BY Title LIMIT $start, $per_page");
        $getquery = $sLink->query("SELECT * FROM books WHERE $construct ORDER BY Title LIMIT $start, $per_page");              
    }
	elseif($mtype=='archive'){
		//$getquery = mysql_query("SELECT * FROM txtarchive WHERE $construct LIMIT $start, $per_page");
        $getquery = $sLink->query("SELECT * FROM txtarchive WHERE $construct LIMIT $start, $per_page");          
	}
	elseif($mtype=='museum'){
		//$getquery = mysql_query("SELECT * FROM museum WHERE $construct LIMIT $start, $per_page");	
        $getquery = $sLink->query("SELECT * FROM museum WHERE $construct LIMIT $start, $per_page");          
	}	
    
 	elseif($mtype=='thesaurus'){
        $getquery = $sLink->query("SELECT * FROM thesaurus WHERE $construct LIMIT $start, $per_page");          
	}   
	else{
		//$getquery = mysql_query("SELECT * FROM books WHERE tm='$mtype' AND $construct ORDER BY Title LIMIT $start, $per_page");
        $getquery = $sLink->query("SELECT * FROM books WHERE tm='$mtype' AND $construct ORDER BY Title LIMIT $start, $per_page");               
		}
	
	//table
	echo "<table id='hits'><tr><th width='5'>Number</th><th width='50'>Title</th></th><th width='5'>Copy</th></tr>";

		$num_rows = 0;
		$num_rows = $start;
    
	    //$count = $result->rowcount();       
	    
        while ($runrows = $getquery->fetch() )                  
        //while($runrows = mysql_fetch_assoc($getquery))
      
		{
		$num_rows++;
		$call = "";
        $pub = "";
 		//$bkid = $runrows['bkid'];           
		$MyString1 = $runrows['maintext'];
		$MyArray1 = explode("", $MyString1);

		if ($mtype == 'archive'){
			$desc = 'archive';
			$copy = 'na';
			$bkid = $runrows['txtid'];	
		}	
		elseif ($mtype == 'museum'){
			$desc = 'museum';	
			$copy = 'na';	
			$bkid = $runrows['museumid'];				
		}
            
		elseif ($mtype == 'thesaurus'){
			$desc = 'thesaurus';	
			$copy = 'na';	
			$bkid = $runrows['id'];				
		}            
            
		else{
			$desc = $runrows['tm'];
			$tm = $runrows['tm'];
			$copy = $runrows['copy'];
			$bkid = $runrows['bkid'];				
		}
	
		//link validation
		if ($desc=='book') 
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
			$TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
			$TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);
			$TitleStr[11] = str_replace("<0011>", "", $MyArray1[10]);
			$TitleStr[24] = str_replace("<0024>", "", $MyArray1[23]);
			$TitleStr[25] = str_replace("<0025>", "", $MyArray1[24]);
		
			if ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] <> "")
				$pub = trim($TitleStr[9]) . ' : ' . trim($TitleStr[10]) . ', ' . trim($TitleStr[11]);
			elseif ($TitleStr[9] == "" && $TitleStr[10] <> "" && $TitleStr[11] <> "")
			{
				$pub = 'Place of publication not identified : ' . trim($TitleStr[10]) . ', ' . trim($TitleStr[11]);
			}
			elseif ($TitleStr[9] <> "" && $TitleStr[10] == "" && $TitleStr[11] <> "")
			{
				$pub = trim($TitleStr[9]) . ': ' . 'publisher not identified, ' . trim($TitleStr[11]);
			}
			elseif ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] == "")
			{
				$pub = trim($TitleStr[9]) . ' : ' . trim($TitleStr[10]) . ', date of publication not identified';
			}	
			//call number
			if ($TitleStr[24] <> "" && $TitleStr[25] <> "")
				$call = trim($TitleStr[24]) . ' ' . trim($TitleStr[25]);
			elseif ($TitleStr[25] <> "")
			{
				$call = trim($TitleStr[25]);
			}			
			
			$link = 'display_Book'.'.php?bkid';
			$desc = '<i class="fa fa-book" style="font-size:48px" title="Book and manuscript"></i>';	
		}
		elseif ($desc=='td')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
			$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
			$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);			
			
			$link = 'display_td'.'.php?bkid';	
			$desc = '<i class="fa fa-graduation-cap" style="font-size:48px" title="Academic coursework"></i>';			
		}
		elseif ($desc=='av')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
			$TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
			$TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);
			$TitleStr[11] = str_replace("<0011>", "", $MyArray1[10]);
			$TitleStr[24] = str_replace("<0024>", "", $MyArray1[23]);
			$TitleStr[25] = str_replace("<0025>", "", $MyArray1[24]);
		
			if ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] <> ""){
				$pub = trim($TitleStr[9]) . ' : ' . trim($TitleStr[10]) . ', ' . trim($TitleStr[11]);
            }
			elseif ($TitleStr[9] == "" && $TitleStr[10] <> "" && $TitleStr[11] <> ""){
				$pub = 'Place of publication not identified : ' . trim($TitleStr[10]) . ', ' . trim($TitleStr[11]);
			}
			elseif ($TitleStr[9] <> "" && $TitleStr[10] == "" && $TitleStr[11] <> "")
			{
				$pub = trim($TitleStr[9]) . ': ' . 'publisher not identified, ' . trim($TitleStr[11]);
			}
			elseif ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] == "")
			{
				$pub = trim($TitleStr[9]) . ' : ' . trim($TitleStr[10]) . ', date of publication not identified';
			}	
			//call number
			if ($TitleStr[24] <> "" && $TitleStr[25] <> ""){
				$call = trim($TitleStr[24]) . ' ' . trim($TitleStr[25]);
            }
			elseif ($TitleStr[25] <> "")
			{
				$call = trim($TitleStr[25]);
			}			
				
			$link = 'display_av'.'.php?bkid';
			$desc = '<i class="fa fa-camera" style="font-size:48px" title="Audio-visual"></i>';	
		}
		elseif ($desc=='pr')
		{			
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
			$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
			$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
			$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);

			if ($TitleStr[4] <> "" && $TitleStr[5] <> "" && $TitleStr[6] <> "" && $TitleStr[7] <> ""){
				$locator = trim($TitleStr[4]) . ':' . trim($TitleStr[5]) . ' (' . trim($TitleStr[6]) . '), ' . trim($TitleStr[7]);
            }
			elseif ($TitleStr[4] == "" && $TitleStr[5] <> "" && $TitleStr[6] <> "" && $TitleStr[7] <> "")
			{
				$locator = trim($TitleStr[5]) . ' (' . trim($TitleStr[6]) . '), ' . trim($TitleStr[7]);
			}
			elseif ($TitleStr[4] <> "" && $TitleStr[5] == "" && $TitleStr[6] <> "" && $TitleStr[7] <> "")
			{
				$locator = trim($TitleStr[4]) . ' (' . trim($TitleStr[6]) . '), ' . trim($TitleStr[7]);
			}
			elseif ($TitleStr[4] <> "" && $TitleStr[5] <> "" && $TitleStr[6] == "" && $TitleStr[7] <> "")
			{
				$locator = trim($TitleStr[4]) . ':' . trim($TitleStr[5]) . '), ' . trim($TitleStr[7]);
			}	
			elseif ($TitleStr[4] <> "" && $TitleStr[5] <> "" && $TitleStr[6] <> "" && $TitleStr[7] == "")
			{
				$locator = trim($TitleStr[4]) . ':' . trim($TitleStr[5]) . ' (' . trim($TitleStr[6]) . ')';
			}				
			$link = 'display_Periodical'.'.php?bkid';
			$desc = '<i class="fa fa-newspaper-o" style="font-size:48px" title="Periodical article"></i>';			
		}		
		elseif ($desc=='ba')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
			$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
			$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);
			$TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);

			if ($TitleStr[5] <> "" && $TitleStr[6] <> "" && $TitleStr[7] <> "")
				$pub = trim($TitleStr[5]) . ' : ' . trim($TitleStr[6]) . ', ' . trim($TitleStr[7]);
			elseif ($TitleStr[5] == "" && $TitleStr[6] <> "" && $TitleStr[7] <> "")
			{
				$pub = 'Place of publication not identified : ' . trim($TitleStr[6]) . ', ' . trim($TitleStr[7]);
			}
			elseif ($TitleStr[5] <> "" && $TitleStr[6] == "" && $TitleStr[7] <> "")
			{
				$pub = trim($TitleStr[5]) . ': ' . 'publisher not identified, ' . trim($TitleStr[7]);
			}
			elseif ($TitleStr[5] <> "" && $TitleStr[6] <> "" && $TitleStr[7] == "")
			{
				$pub = trim($TitleStr[5]) . ' : ' . trim($TitleStr[6]) . ', date of publication not identified';
			}			
			
			$link = 'display_analytic'.'.php?bkid';	
			$desc = '<i class="fa fa-file-image-o" style="font-size:48px" title="Analytic and literature index"></i>';		
		}	
		elseif ($desc=='vf')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
			$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);			
			
			$link = 'display_vf'.'.php?bkid';	
			$desc = '<i class="fa fa-folder-open" style="font-size:48px" title="Vertical file"></i>';				
		}		
		elseif ($desc=='ca')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
			$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);			
			
			$link = 'display_case'.'.php?bkid';
			$desc = '<i class="fa fa-balance-scale" style="font-size:48px" title="Case and jurisprudence"></i>';	
		}		
		elseif ($desc=='er')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
			$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);			
			
			$link = 'display_er'.'.php?bkid';
			$desc = '<i class="fa fa-database" style="font-size:48px" title="Electronic resource"></i>';		
		}		
		elseif ($desc=='itr')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
			$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
			$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);

			if ($TitleStr[4] <> "" && $TitleStr[5] <> "" && $TitleStr[6] <> "")
				$pub = trim($TitleStr[4]) . ' : ' . trim($TitleStr[5]) . ', ' . trim($TitleStr[6]);
			elseif ($TitleStr[4] == "" && $TitleStr[5] <> "" && $TitleStr[6] <> "")
			{
				$pub = 'Place of publication not identified : ' . trim($TitleStr[5]) . ', ' . trim($TitleStr[6]);
			}
			elseif ($TitleStr[4] <> "" && $TitleStr[5] == "" && $TitleStr[6] <> "")
			{
				$pub = trim($TitleStr[4]) . ': ' . 'publisher not identified, ' . trim($TitleStr[6]);
			}
			elseif ($TitleStr[4] <> "" && $TitleStr[5] <> "" && $TitleStr[6] == "")
			{
				$pub = trim($TitleStr[4]) . ' : ' . trim($TitleStr[5]) . ', date of publication not identified';
			}				
			$link = 'display_itr'.'.php?bkid';		
			$desc = '<i class="fa fa-globe" style="font-size:48px" title="Website"></i>';		
		}		
		elseif ($desc=='audio')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[32] = str_replace("<0032>", "", $MyArray1[31]);
			$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);
			$TitleStr[8] = str_replace("<008>", "", $MyArray1[7]);
			$TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
			
			$TitleStr[47] = str_replace("<0047>", "", $MyArray1[46]);
			$TitleStr[45] = str_replace("<0045>", "", $MyArray1[44]);	
			if ($TitleStr[45] <> "" && $TitleStr[47] <> "")
				$call = trim($TitleStr[45]) . ' ' . trim($TitleStr[47]);
			elseif ($TitleStr[45] <> "")
			{
				$call = trim($TitleStr[45]);
			}
			if ($TitleStr[7] <> "" && $TitleStr[8] <> "" && $TitleStr[9] <> "")
				$pub = trim($TitleStr[7]) . ' : ' . trim($TitleStr[8]) . ', ' . trim($TitleStr[9]);
			elseif ($TitleStr[7] == "" && $TitleStr[8] <> "" && $TitleStr[9] <> "")
			{
				$pub = 'Place of publication not identified : ' . trim($TitleStr[8]) . ', ' . trim($TitleStr[9]);
			}
			elseif ($TitleStr[7] <> "" && $TitleStr[8] == "" && $TitleStr[9] <> "")
			{
				$pub = trim($TitleStr[7]) . ': ' . 'publisher not identified, ' . trim($TitleStr[9]);
			}
			elseif ($TitleStr[7] <> "" && $TitleStr[8] <> "" && $TitleStr[9] == "")
			{
				$pub = trim($TitleStr[7]) . ' : ' . trim($TitleStr[8]) . ', date of publication not identified';
			}			
			
			$link = 'display_audio'.'.php?bkid';	
			$desc = '<i class="fa fa-volume-up" style="font-size:48px" title="Audio-recording"></i>';		
		}		
		elseif ($desc=='video')
				{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);
			$TitleStr[8] = str_replace("<008>", "", $MyArray1[7]);
			$TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
			$TitleStr[58] = str_replace("<0058>", "", $MyArray1[57]);
			$TitleStr[60] = str_replace("<0060>", "", $MyArray1[59]);

			if ($TitleStr[7] <> "" && $TitleStr[8] <> "" && $TitleStr[9] <> "")
				$pub = trim($TitleStr[7]) . ' : ' . trim($TitleStr[8]) . ', ' . trim($TitleStr[9]);
			elseif ($TitleStr[7] == "" && $TitleStr[8] <> "" && $TitleStr[9] <> "")
			{
				$pub = 'Place of publication not identified : ' . trim($TitleStr[8]) . ', ' . trim($TitleStr[9]);
			}
			elseif ($TitleStr[7] <> "" && $TitleStr[8] == "" && $TitleStr[9] <> "")
			{
				$pub = trim($TitleStr[7]) . ': ' . 'publisher not identified, ' . trim($TitleStr[9]);
			}
			elseif ($TitleStr[7] <> "" && $TitleStr[8] <> "" && $TitleStr[9] == "")
			{
				$pub = trim($TitleStr[7]) . ' : ' . trim($TitleStr[8]) . ', date of publication not identified';
			}	

			if ($TitleStr[58] <> "" && $TitleStr[60] <> "")
				$call = trim($TitleStr[58]) . ' ' . trim($TitleStr[60]);
			elseif ($TitleStr[60] <> "")
			{
				$call = trim($TitleStr[60]);
			}				
			$link = 'display_video'.'.php?bkid';
			$desc = '<i class="fa fa-video-camera" style="font-size:48px" title="Video-recording"></i>';		
		}		
		elseif ($desc=='museum')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
			$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);			
					
			$link = 'display_museum'.'.php?museumid';
			$desc = '<i class="fa fa-university" style="font-size:48px" title="Museum"></i>';		
		}	
		elseif ($desc=='archive')
		{
			
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);			
					
			$link = 'display_archive'.'.php?txtid';
			$desc = '<i class="fa fa-archive" style="font-size:48px" title="Archive"></i>';			
		}
            
		elseif ($desc=='thesaurus')
		{
			
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);			
					
			$link = 'display_thesaurus'.'.php?id';
			$desc = '<i class="fa fa-gift" style="font-size:48px" title="Thesaurus"></i>';			
		}            
		elseif ($desc=='se')
		{
			$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
			$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
			$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
			$TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);	
			
			if ($TitleStr[2] <> "" && $TitleStr[3] <> "")
				$pub = trim($TitleStr[2]) . ' : ' . trim($TitleStr[3]);
			elseif ($TitleStr[2] == "" && $TitleStr[3] <> "")
			{
				$pub = 'Place of publication not identified : ' . trim($TitleStr[3]);
			}
			elseif ($TitleStr[2] <> "" && $TitleStr[3] == "")
			{
				$pub = trim($TitleStr[2]) . ': ' . 'publisher not identified';
			}
			$link = 'display_serial'.'.php?bkid';
			$desc = '<i class="fa fa-calendar" style="font-size:48px" title="Serial"></i>';		
		}	
            
             
		  
			echo "<tr class='save_mem<?php echo $bkid ?>'>
                
				<td align='center' width='3'>$num_rows $desc &nbsp;<input type='checkbox' name='item[]' value='$TitleStr[1].  $pub  [$call]' </td>";
            
				if ($mtype=='archive')
					echo "<td class='opac' width='75%' valign='top'><a href='$link=$bkid'> <b>$TitleStr[3]</b></a>";
				
				else{	
					echo "<td class='opac' width='75%' valign='top'><a href='$link=$bkid'> <b>$TitleStr[1]</b></a>";
				}

				if ($mtype=='book')
					if ($TitleStr[4] <> ""){
						echo "<br>$TitleStr[4]<br>$pub<br>$call
						<br>

                   
						</td>";
                    }
					else{
						echo "<br>$pub<br>$call

                       
						</td>";
					}
				elseif ($mtype=='pr')
				{
					if ($TitleStr[2] <> "")
						echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
						<br>

						</td>";


					else{
						echo "<br>$TitleStr[3]<br>$locator

						</td>";

					}
				}
				
				elseif ($mtype=='av')
				{
					if ($TitleStr[2] <> "")
						//echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
                        echo "<br>$TitleStr[2]<br>$pub<br>$call

						</td>";
									
					else{
						//echo "<br>$TitleStr[3]<br>$locator
                        echo "<br>$pub<br>$call					
						</td>";
					}
				}

				elseif ($mtype=='ba')
				{
					if ($TitleStr[2] <> "")
						echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$pub<br>$TitleStr[10]

						</td>";
									
					else{
						echo "<br>$TitleStr[3]<br>$pub<br>$TitleStr[10]
					
						</td>";
					}
				}				
				
				elseif ($mtype=='td')
				{
					if ($TitleStr[2] <> "")
						echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]<br>$TitleStr[7]

						</td>";
									
					else{
						echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]<br>$TitleStr[7]
				
						</td>";
					}
				}	

				elseif ($mtype=='vf')
				{
					if ($TitleStr[2] <> "")
						echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]

						</td>";
									
					else{
						echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
					
						</td>";
					}
				}

				elseif ($mtype=='ca')
				{
					if ($TitleStr[2] <> "")
						echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]

						</td>";
									
					else{
						echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
				
						</td>";
					}
				}	

				elseif ($mtype=='er')
				{
					if ($TitleStr[2] <> "")
						echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]

						</td>";
									
					else{
						echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
					
						</td>";
					}
				}					

				elseif ($mtype=='audio')
				{
					if ($TitleStr[32] <> "")
						echo "<br>$TitleStr[32]<br>$pub<br>$call

						</td>";
					else{
						echo "<br>$pub<br>$call
					
						</td>";
					}
				}

				elseif ($mtype=='video')
				{
					if ($TitleStr[32] <> "")
						echo "<br>$TitleStr[32]<br>$pub<br>$call

						</td>";
					else{
						echo "<br>$pub<br>$call
					
						</td>";
					}
				}
				
				elseif ($mtype=='itr')
				{
					if ($TitleStr[22] <> "")
						echo "<br>$TitleStr[22]<br>$pub

						</td>";
					else{
						echo "<br>$pub
					
						</td>";
					}
				}
				elseif ($mtype=='se')
				{
					if ($TitleStr[10] <> "")
						echo "<br>$pub<br>$TitleStr[10]

						</td>";
					else{
						echo "<br>$pub
					
						</td>";
					}
				}				
				elseif ($mtype=='archive')
				{
					if ($TitleStr[3] <> "")
						echo "<br>$TitleStr[2]<br>$TitleStr[4]<br>$TitleStr[1]

						</td>";
					else{
						echo "<br>$TitleStr[2]<br>$TitleStr[4]<br>$TitleStr[1]
						
						</td>";
					}
				}				
				elseif ($mtype=='museum')
				{
					if ($TitleStr[6] <> "")
						echo "<br>$TitleStr[6]<br>$TitleStr[7]

						</td>";
					else{
						echo "<br>$TitleStr[7]
					
						</td>";
					}
				}
				elseif ($mtype=='thesaurus')
				{
					if ($TitleStr[2] <> "")
						echo "<br>Scope Note: $TitleStr[2]
						<br>

						</td>";
					else{
						echo "<br>Broader term: $TitleStr[3]
					
						</td>";
					}
				}            
				
				//selecting all materials
				else
				{
					if ($tm=='book')
						if ($TitleStr[4] <> "")
							echo "<br>$TitleStr[4]<br>$pub<br>$call
							<br>

							</td>";
						else{
							echo "<br>$pub<br>$call
					
							</td>";
					
							}
					
					elseif ($tm=='pr')
						{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
							<br>

							</td>";
											
						else{
							echo "<br>$TitleStr[3]<br>$locator
					
							</td>";
							}
						}					
				
					elseif ($tm=='av')
					{
						if ($TitleStr[2] <> "")
							//echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
                            echo "<br>$TitleStr[2]<br>$pub<br>$call
							<br>

							</td>";
										
						else{
							//echo "<br>$TitleStr[3]<br>$locator
                            echo "<br>$pub<br>$call 
					
							</td>";
							}
					}	
					
					elseif ($tm=='ba')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$pub<br>$TitleStr[10]
							<br>

							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$pub<br>$TitleStr[10]
					
							</td>";
							}
					}						
					
				    elseif ($tm=='td')
                    {
                        if ($TitleStr[2] <> "")
                            echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]<br>$TitleStr[7]
                            <br>

                            </td>";

                        else{
                            echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]<br>$TitleStr[7]
					
                            </td>";
                        }
                    }
				
                    elseif ($tm=='vf')
                    {
                        if ($TitleStr[2] <> "")
                            echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
                            </td>";

                        else{
                            echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
					
                            </td>";
                        }
                    }	

                    elseif ($tm=='ca')
                    {
                        if ($TitleStr[2] <> "")
                            echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
                            <br>

                            </td>";

                        else{
                            echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
						
                            </td>";
                        }
                    }	
                    
                    elseif ($tm=='er')
                    {
                        if ($TitleStr[2] <> "")
                            echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
                            <br>

                            </td>";

                        else{
                            echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
					
                            </td>";
                        }
                    }	

                    elseif ($tm=='audio')
                    {
                        if ($TitleStr[32] <> "")
                            echo "<br>$TitleStr[32]<br>$pub<br>$call
                            <br>

                            </td>";
                        else{
                            echo "<br>$pub<br>$call
					
                            </td>";
                        }
                    }

                    elseif ($tm=='video')
                    {
                        if ($TitleStr[32] <> "")
                            echo "<br>$TitleStr[32]<br>$pub<br>$call
                            <br>

                            </td>";
                        else{
                            echo "<br>$pub<br>$call
					
                            </td>";
                        }
                    }				
				
                    elseif ($tm=='itr')
                    {
                        if ($TitleStr[22] <> "")
                            echo "<br>$TitleStr[22]<br>$pub
                            <br>

                            </td>";
                        else{
                            echo "<br>$pub
					
                            </td>";
                        }
                    }	
                    
                    elseif ($tm=='se')
                    {
                        if ($TitleStr[10] <> "")
                            echo "<br>$pub<br>$TitleStr[10]
                            <br>

                            </td>";
                        else{
                            echo "<br>$pub
					
                            </td>";
                        }
                    }		
                    
                    elseif ($tm=='archive')
                    {
                        if ($TitleStr[3] <> "")
                            echo "<br>$TitleStr[2]<br>$TitleStr[4]<br>$TitleStr[1]
                            <br>

                            </td>";
                        else{
                            echo "<br>$TitleStr[2]<br>$TitleStr[4]<br>$TitleStr[1]
 					
                            </td>";
                        }
                    }					
				
                    elseif ($tm=='museum')
                    {
                        if ($TitleStr[5] <> "")
                            echo "<br>$TitleStr[6]<br>$TitleStr[7]
                            <br>

                            </td>";
                        else{
                            echo "<br>$TitleStr[7]
					
                            </td>";
                        }
                    }
                    
                    elseif ($tm=='thesaurus')
                    {
                        if ($TitleStr[1] <> "")
                            echo "<br>$TitleStr[1]<br>$TitleStr[2]<br>$TitleStr[3]
                            <br>

                            </td>";
                        else{
                            echo "<br>$TitleStr[1]<br>$TitleStr[2]<br>$TitleStr[3]
					
                            </td>";
                        }
                    }                   
                    
                    
							
			}
				
				echo "<td align='center' width='3'>$copy</td>
			 </tr>";
			
		}
				
	echo "</table>";
	
//Pagination Starts
echo "<center>";
  
$prev = $start - $per_page;
$next = $start + $per_page;
                       
$adjacents = 3;
$last = $max_pages - 1;
  
if($max_pages > 1)
{   
//previous button
if (!($start<=0)) 
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$prev'>Prev</a> ";    
          
//pages 
if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
{
$i = 0;   
for ($counter = 1; $counter <= $max_pages; $counter++)
{
if ($i == $start){
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
}  
$i = $i + $per_page;                 
}
}
elseif($max_pages > 5 + ($adjacents * 2))    //enough pages to hide some
{
//close to beginning; only hide later pages
if(($start/$per_page) < 1 + ($adjacents * 2))        
{
$i = 0;
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($i == $start){
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
} 
$i = $i + $per_page;                                       
}
                          
}
//in middle; hide some front and some back
elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
{
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=0'>1</a> ";
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$per_page'>2</a> .... ";
 
$i = $start;                 
for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
{
if ($i == $start){
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
}   
$i = $i + $per_page;                
}
                                  
}
//close to end; only hide early pages
else
{
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=0'>1</a> ";
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$per_page'>2</a> .... ";
 
$i = $start;                
for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
{
if ($i == $start){
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";   
} 
$i = $i + $per_page;              
}
}
}
    
//next button
if (!($start >=$foundnum-$per_page))
echo " <a href='results.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$next'>Next</a> ";    
}   
echo "</center>    <br />";
} 


?>
    
<center>
                         <ol>
                            <li>
							<button class='button' name="checked_item" type= "submit" id="btn_virtual_shelf" onclick="getSelectedChbox()" value = "Print Selected Item" style='color:navy;'>Print selected item</button>
                      
							</li>
                        </ol>	 
 </center>   
    
</div>

</form>