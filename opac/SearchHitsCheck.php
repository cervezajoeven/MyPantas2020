<!Doctype html>

<HEAD>
	<link href="webfinder/stylistics.css" rel="stylesheet" type="text/css">
	<style type=text/css> 

	{ 
	.body { display:none } 
	} 
	
	table.goback{
		border: 0;
	}
	
	td {
		vertical-align: middle;
		background-color: #EAF2D3;
		color: black;
	}
	
	td.opac {
		font-family: "Trebuchet MS", Calibri, Arial, Helvetica, sans-serif;
		background-color: #EAF2D3;
		color: blue;
		text-decoration: none;
	}
	
	#hits {
		font-family: "Trebuchet MS", Calibri, Arial, Helvetica, sans-serif;
		width: 100%;
		border-collapse: collapse;
	}

	#hits td, #hits th {
		font-size: 1em;
		border: 1px solid #98bf21;
		padding: 3px 7px 2px 7px;
	}

	#hits th {
		font-size: 1.1em;
		text-align: center;
		padding-top: 5px;
		padding-bottom: 4px;
		background-color: #A7C942;
		color: #ffffff;
		height: 30px;
	}

	#hits tr.alt td {
		color: #000000;
		background-color: #EAF2D3;
		text-align: left;
	}

	ul {
		float: left;
		width: 100%;
		padding: 0;
		margin: 0;
		list-style-type: none;
	}

	a.menu {
		float: left;
		width: 10em;
		text-decoration: none;
		color: white;
		background-color: purple;
		padding: 0.2em 0.6em;
		border-right: 1px solid white;
		border-top-left-radius: 2em;
		border-top-right-radius: 2em;
	}

	a.menu:hover {
		background-color: fuchsia;
	}

	li {
		display: inline;
	}	
	
		li.center{
		text-align: center
	}
	
	a.back {
		text-decoration: none;
		background-color: ;
		width: 10em;
		}
		
	h5  {
		color:blue
		}	
	
	 
		<TITLE>Library Media Center Web Retrieval System</TITLE>

		<script language="JavaScript" type="text/JavaScript">
			function checkscript() {
			var x=document.mySearch.Keyword1.value;
			if (x.indexOf(">")>=0 || x.indexOf("<")>=0 || x.indexOf("</")>=0) {
				alert("HTML/Javascript/ASPscript character is not allowed in keyword.\n");
				document.mySearch.Keyword1.focus();
				return false;
			}        
				if (!document.mySearch.Keyword1.value) {
					alert("The keyword textbox must not be blank. \n" + "* Please enter keyword(s) in the textbox. \n");
					document.mySearch.Keyword1.focus();
					return false;
				}
				return true;
			}
		 </script>
		 

	</style>		 
		 
</HEAD>

<body>

<?php
require("new_header.php");
require_once("connect.php");
//$keyword = $_POST['txtKeyword'];

if(isset($_GET['submit'])){
	if(!empty($_GET['mtype'])) {
		// Counting number of checked checkboxes.
		$checked_count = count($_GET['mtype']);
		//echo "You have selected following ".$checked_count." option(s): <br/>";

		// Loop to store and display values of individual checked checkbox.
		foreach($_GET['mtype'] as $selected) {
		 $tmopt = $tmopt . " " . $selected;
		}

		//echo $tmopt = str_replace(" ", " or ", trim($tmopt));
		$tmopt = str_replace(" ", " or ", trim($tmopt));
		$tmopt = '(' . tmopt . ')';
	}
	else{
		echo "<b>Please Select At least One Option.</b>";
	}
}


$button = $_GET ['submit'];
$search = $_GET ['search']; 
//$mtype = $_GET['mtype'];
  
if(strlen($search)<=1)
	echo "Search term too short<center>";
else{
	echo "<center>You searched for <b>$search</b> <hr size='1'></br>";

	//mysql_connect("localhost","root","divinity");
	//mysql_select_db("rdadb");
		
	$search_exploded = explode (" ", $search);
	 
	$x = "";
	$construct = "";  
		
	foreach($search_exploded as $search_each)
	{
	$x++;
	if($x==1)
		$construct .="Maintext LIKE '%$search_each%'";
	else
		$construct .="AND Maintext LIKE '%$search_each%'";
	}

	//if($mtype=='all')
	//	$constructs ="SELECT * FROM books WHERE $construct";

	//elseif ($mtype=='archive'){
	//	$constructs ="SELECT * FROM txtarchive WHERE $construct";
	//}
	//elseif ($mtype=='muse'){
	//	$constructs ="SELECT * FROM museum WHERE $construct";
	//}
	//else{
		$constructs ="SELECT * FROM books WHERE $tmopt AND $construct";
	//}

	$run = mysql_query($constructs);
		
	$foundnum = mysql_num_rows($run);
		
	if ($foundnum==0)
		echo "Sorry, there are no record found for <b>$search</b>.</br></br>";
		 
	else{ 
	  
		echo "$foundnum results found !<center><p>";
		  
		$per_page = 10;
		$start = isset($_GET['start']) ? $_GET['start']: '';
		$max_pages = ceil($foundnum / $per_page);
		if(!$start)
		$start=0; 

		//$getquery = mysql_query("SELECT * FROM books WHERE tm='$mtype' AND $construct LIMIT $start, $per_page");

		//if($mtype=='all')
		//	$getquery = mysql_query("SELECT * FROM books WHERE $construct ORDER BY Title LIMIT $start, $per_page");
		
		//elseif($mtype=='archive'){
		//	$getquery = mysql_query("SELECT * FROM txtarchive WHERE $construct LIMIT $start, $per_page");	
		//}
		//elseif($mtype=='muse'){
		//	$getquery = mysql_query("SELECT * FROM museum WHERE $construct LIMIT $start, $per_page");	
		//}	
		//else{
			$getquery = mysql_query("SELECT * FROM books WHERE $tmopt AND $construct ORDER BY Title LIMIT $start, $per_page");
		//	}
		
		echo '<center><a href="javascript:history.back()" class="back">&nbsp&nbsp&nbsp<b>Back</b>&nbsp&nbsp&nbsp</a></center><br>';
		
		//table
		echo "<table id='hits'><tr><th width='5'>Number</th><th width='50'>Title</th></th><th width='5'>Copy</th></tr>";
		
			$num_rows = 0;
			$num_rows = $start;
			
			while($runrows = mysql_fetch_assoc($getquery))
			{
			$num_rows++;
					
			$MyString1 = $runrows['Maintext'];
			$MyArray1 = explode("", $MyString1);

			if ($mtype == 'archive'){
				$desc = 'archive';
				$copy = 'na';
				$bkid = $runrows['txtID'];	
			}	
			elseif ($mtype == 'muse'){
				$desc = 'muse';	
				$copy = 'na';	
				$bkid = $runrows['museumID'];				
			}
			else{
				$desc = $runrows['tm'];
				$tm = $runrows['tm'];
				$copy = $runrows['Copy'];
				$bkid = $runrows['bkID'];				
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
				
				$link = 'display_Book'.'.php?bkID';
				$desc = '<img src="images/rdabook.png" height="42" width="42">';
			}
			elseif ($desc=='td')
			{
				$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
				$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
				$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
				$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
				$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
				$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);			
				
				$link = 'display_td'.'.php?bkID';	
				$desc = '<img src="images/myTD1.png" height="42" width="42">';			
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
					
				$link = 'display_av'.'.php?bkID';
				$desc = '<img src="images/myAV.png" height="42" width="42">';			
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

				if ($TitleStr[4] <> "" && $TitleStr[5] <> "" && $TitleStr[6] <> "" && $TitleStr[7] <> "")
					$locator = trim($TitleStr[4]) . ':' . trim($TitleStr[5]) . ' (' . trim($TitleStr[6]) . '), ' . trim($TitleStr[7]);
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
				$link = 'display_Periodical'.'.php?bkID';
				$desc = '<img src="images/myPeriodical2.png" height="42" width="42">';			
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
				
				$link = 'display_analytic'.'.php?bkID';	
				$desc = '<img src="images/myBookArt.png" height="42" width="42">';			
			}	
			elseif ($desc=='vf')
			{
				$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
				$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
				$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
				$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
				$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);			
				
				$link = 'display_vf'.'.php?bkID';	
				$desc = '<img src="images/myVF.png" height="42" width="42">';			
			}		
			elseif ($desc=='ca')
			{
				$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
				$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
				$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
				$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
				$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);			
				
				$link = 'display_ca'.'.php?bkID';
				$desc = '<img src="images/myLaw.ico" height="42" width="42">';			
			}		
			elseif ($desc=='er')
			{
				$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
				$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
				$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
				$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
				$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);			
				
				$link = 'display_er'.'.php?bkID';
				$desc = '<img src="images/myElectronic.png" height="42" width="42">';			
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
				$link = 'display_itr'.'.php?bkID';		
				$desc = '<img src="images/itr.ico" height="42" width="42">';		
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
				
				$link = 'display_audio'.'.php?bkID';	
				$desc = '<img src="images/myAudio.png" height="42" width="42">';			
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
				$link = 'display_video'.'.php?bkID';
				$desc = '<img src="images/myVideo.ico" height="42" width="42">';			
			}		
			elseif ($desc=='muse')
			{
				$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
				$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
				$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);			
						
				$link = 'display_museum'.'.php?museumID';
				$desc = '<img src="images/myMuseum.png" height="42" width="42">';
			}	
			elseif ($desc=='archive')
			{
				
				$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
				$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
				$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
				$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);			
						
				$link = 'display_archive'.'.php?txtID';
				$desc = '<img src="images/myTxtArchive.png" height="42" width="42">';			
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
				$link = 'display_serial'.'.php?bkID';
				$desc = '<img src="images/myPeriodical.png" height="42" width="42">';			
			}		
			
			//copy validation
			//if ($mtype=='archive')
			//	$copy = 'na';
			//	$bkid = $runrows['txtID'];		
			//elseif($mtype=='museum')
			//{
			//	$copy = 'na';	
			//	$bkid = $runrows['museumID'];			
			//}
			//else
			//{
			//	$copy = $runrows['Copy'];
			//	$bkid = $runrows['bkID'];			
			//}
			
			//if ($desc=='archive')
			//	$bkid = $runrows['txtID'];
			//elseif ($desc=='museum'){
			//	$bkid = $runrows['museumID'];		
			//}
			//else{
			//	$bkid = $runrows['bkID'];
			//}

				echo "<tr>
					<td align='center' width='3'>$num_rows  $desc</td>";
					if ($mtype=='archive')
						echo "<td class='opac' width='75%' valign='top'><a href='$link=$bkid'> <b>$TitleStr[3]</b></a>";
					
					else{	
						echo "<td class='opac' width='75%' valign='top'><a href='$link=$bkid'> <b>$TitleStr[1]</b></a>";
					}
					
					if ($mtype=='book')
						if ($TitleStr[4] <> "")
							echo "<br>$TitleStr[4]<br>$pub<br>$call
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub<br>$call
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					elseif ($mtype=='pr')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$locator
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}
					
					elseif ($mtype=='av')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$locator
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}

					elseif ($mtype=='ba')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$pub<br>$TitleStr[10]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$pub<br>$TitleStr[10]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}				
					
					elseif ($mtype=='td')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]<br>$TitleStr[7]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]<br>$TitleStr[7]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}	

					elseif ($mtype=='vf')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}

					elseif ($mtype=='ca')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}	

					elseif ($mtype=='er')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}					

					elseif ($mtype=='audio')
					{
						if ($TitleStr[32] <> "")
							echo "<br>$TitleStr[32]<br>$pub<br>$call
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub<br>$call
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}

					elseif ($mtype=='video')
					{
						if ($TitleStr[32] <> "")
							echo "<br>$TitleStr[32]<br>$pub<br>$call
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub<br>$call
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}
					
					elseif ($mtype=='itr')
					{
						if ($TitleStr[22] <> "")
							echo "<br>$TitleStr[22]<br>$pub
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}
					elseif ($mtype=='se')
					{
						if ($TitleStr[10] <> "")
							echo "<br>$pub<br>$TitleStr[10]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}				
					elseif ($mtype=='archive')
					{
						if ($TitleStr[3] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[4]<br>$TitleStr[1]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$TitleStr[2]<br>$TitleStr[4]<br>$TitleStr[1]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}				
					elseif ($mtype=='muse')
					{
						if ($TitleStr[6] <> "")
							echo "<br>$TitleStr[6]<br>$TitleStr[7]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$TitleStr[7]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
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
								<ol>
								<li><a href='$link=$bkid'><b>Details</b></a>
									&nbsp&nbsp&nbspEmail
									&nbsp&nbsp&nbspExport
									&nbsp&nbsp&nbspSave</li>
								</ol>
								</td>";
							else{
								echo "<br>$pub<br>$call
								<ol>
								<li><a href='$link=$bkid'><b>Details</b></a>
									&nbsp&nbsp&nbspEmail
									&nbsp&nbsp&nbspExport
									&nbsp&nbsp&nbspSave</li>
								</ol>						
								</td>";
						
								}
						
						elseif ($tm=='pr')
							{
							if ($TitleStr[2] <> "")
								echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
								<br>
								<ol>
								<li><a href='$link=$bkid'><b>Details</b></a>
									&nbsp&nbsp&nbspEmail
									&nbsp&nbsp&nbspExport
									&nbsp&nbsp&nbspSave</li>
								</ol>
								</td>";
												
							else{
								echo "<br>$TitleStr[3]<br>$locator
								<ol>
								<li><a href='$link=$bkid'><b>Details</b></a>
									&nbsp&nbsp&nbspEmail
									&nbsp&nbsp&nbspExport
									&nbsp&nbsp&nbspSave</li>
								</ol>						
								</td>";
								}
							}					
					
						elseif ($tm=='av')
						{
							if ($TitleStr[2] <> "")
								echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
								<br>
								<ol>
								<li><a href='$link=$bkid'><b>Details</b></a>
									&nbsp&nbsp&nbspEmail
									&nbsp&nbsp&nbspExport
									&nbsp&nbsp&nbspSave</li>
								</ol>
								</td>";
											
							else{
								echo "<br>$TitleStr[3]<br>$locator
								<ol>
								<li><a href='$link=$bkid'><b>Details</b></a>
									&nbsp&nbsp&nbspEmail
									&nbsp&nbsp&nbspExport
									&nbsp&nbsp&nbspSave</li>
								</ol>						
								</td>";
								}
						}	
						
						elseif ($tm=='ba')
						{
							if ($TitleStr[2] <> "")
								echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$pub<br>$TitleStr[10]
								<br>
								<ol>
								<li><a href='$link=$bkid'><b>Details</b></a>
									&nbsp&nbsp&nbspEmail
									&nbsp&nbsp&nbspExport
									&nbsp&nbsp&nbspSave</li>
								</ol>
								</td>";
											
							else{
								echo "<br>$TitleStr[3]<br>$pub<br>$TitleStr[10]
								<ol>
								<li><a href='$link=$bkid'><b>Details</b></a>
									&nbsp&nbsp&nbspEmail
									&nbsp&nbsp&nbspExport
									&nbsp&nbsp&nbspSave</li>
								</ol>						
								</td>";
								}
						}						
						
					elseif ($tm=='td')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]<br>$TitleStr[7]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]<br>$TitleStr[7]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}
					
					elseif ($tm=='vf')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}	

					elseif ($tm=='ca')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}	
					elseif ($tm=='er')
					{
						if ($TitleStr[2] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
										
						else{
							echo "<br>$TitleStr[3]<br>$TitleStr[4]<br>$TitleStr[5]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}	

					elseif ($tm=='audio')
					{
						if ($TitleStr[32] <> "")
							echo "<br>$TitleStr[32]<br>$pub<br>$call
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub<br>$call
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}

					elseif ($tm=='video')
					{
						if ($TitleStr[32] <> "")
							echo "<br>$TitleStr[32]<br>$pub<br>$call
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub<br>$call
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}				
					
					elseif ($tm=='itr')
					{
						if ($TitleStr[22] <> "")
							echo "<br>$TitleStr[22]<br>$pub
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}				
					elseif ($tm=='se')
					{
						if ($TitleStr[10] <> "")
							echo "<br>$pub<br>$TitleStr[10]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$pub
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}				
					elseif ($tm=='archive')
					{
						if ($TitleStr[3] <> "")
							echo "<br>$TitleStr[2]<br>$TitleStr[4]<br>$TitleStr[1]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$TitleStr[2]<br>$TitleStr[4]<br>$TitleStr[1]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
							</td>";
						}
					}					
					
					elseif ($tm=='muse')
					{
						if ($TitleStr[5] <> "")
							echo "<br>$TitleStr[6]<br>$TitleStr[7]
							<br>
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>
							</td>";
						else{
							echo "<br>$TitleStr[7]
							<ol>
							<li><a href='$link=$bkid'><b>Details</b></a>
								&nbsp&nbsp&nbspEmail
								&nbsp&nbsp&nbspExport
								&nbsp&nbsp&nbspSave</li>
							</ol>						
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
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$prev'>Prev</a> ";    
			  
	//pages 
	if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
	{
	$i = 0;   
	for ($counter = 1; $counter <= $max_pages; $counter++)
	{
	if ($i == $start){
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
	}
	else {
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
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
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
	}
	else {
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
	} 
	$i = $i + $per_page;                                       
	}
							  
	}
	//in middle; hide some front and some back
	elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
	{
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=0'>1</a> ";
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$per_page'>2</a> .... ";
	 
	$i = $start;                 
	for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
	{
	if ($i == $start){
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
	}
	else {
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
	}   
	$i = $i + $per_page;                
	}
									  
	}
	//close to end; only hide early pages
	else
	{
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=0'>1</a> ";
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$per_page'>2</a> .... ";
	 
	$i = $start;                
	for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
	{
	if ($i == $start){
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
	}
	else {
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";   
	} 
	$i = $i + $per_page;              
	}
	}
	}
		
	//next button
	if (!($start >=$foundnum-$per_page))
	echo " <a href='SearchHits.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$next'>Next</a> ";    
	}   
	echo "</center>";
	} 
} 


     	echo '<br><center><a href="javascript:history.back()" class="back">&nbsp&nbsp&nbsp<b>Back</b>&nbsp&nbsp&nbsp</a></center><br>'; 

?>


</body>
</html>
