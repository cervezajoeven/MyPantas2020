
<title>Book details display</title>

 
<script>
function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}
</script>
    
<?PHP 
require("header.php");
require("style.php");
require_once("connect.php");

   //connection
	$bkid = $_GET['bkid'];				    
	//$sql_select = "select * from books where bkid=$bkid";
	//$sel_result = mysql_query($sql_select) or die(mysql_error());
    //$numr = mysql_num_rows($sel_result);
	//$mrow = mysql_fetch_array($sel_result);

    $sel_result = $sLink->query("select * from books where bkid=$bkid");                         
    $numr = $sel_result->rowcount();
    $mrow = $sel_result->fetch(PDO::FETCH_ASSOC);

	$MyString1 = $mrow['maintext'];
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

	if ($TitleStr[24] <> "" && $TitleStr[25] <> "")
		$call = trim($TitleStr[24]) . ' ' . trim($TitleStr[25]);
	elseif ($TitleStr[25] <> "")
	{
		$call = trim($TitleStr[25]);
	}	

	if ($TitleStr[42] <> "")
	     $imahe = trim($TitleStr[42]);
	else{
         $imahe = './images/rdabook'.'.png';
	}	
	
	//if ($TitleStr[42] <> "") {
	//	$fname = str_replace("C:\\", "", $TitleStr[42]);
	//	$fname = str_replace("D:\\", "", $fname);
	//	$fname = str_replace("F:\\", "", $fname);
	//	$fname = str_replace("G:\\", "", $fname);
	//	$fname = str_replace("\\", "/", $fname);
	//}
	
?>

<br />

<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu" style="background:blue;">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large"><i class="fa fa-close"></i> Close</button>
  <a href="export2txt.php?button=save&biblio=<?php echo $TitleStr[1] ?>+<?php echo $pub ?>+<?php echo $call ?>" class="w3-bar-item w3-button"><i class="fa fa-save"></i> Save</a>
  <a href="export2txt.php?button=print" class="w3-bar-item w3-button"><i class="fa fa-print"></i> Print</a>
  <a href="export2csv.php?$button=export&biblio=$call+$TitleStr[1]+$pub" class="w3-bar-item w3-button"><i class="fa fa-recycle"></i> Export</a>
   <a href="#" class="w3-bar-item w3-button"><i class="fa fa-edit"></i> Cite</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-share"></i> Share</a>
  <a href="export2txt.php?button=clear" class="w3-bar-item w3-button"><i class="fa fa-trash"></i> Empty</a>   
   <a href="export2txt.php?button=clear" class="w3-bar-item w3-button"><i class="fa fa-medium"></i> Marc</a>      
</div>

<div class="w3-orange">

  <button class="w3-button w3-orange w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>

</div>
    
  <div class="table-responsive"> 
      <div class="col-md-12 text-left"> 
          <button id="singlebutton" name="singlebutton" class="btn btn-warning btn-sm" role="button" aria-pressed="true">
              <a href="javascript:history.back()"><i class="fa fa-hand-o-left"></i></a></button> 
      </div>
      
	<fieldset style = "width: 80%; margin:  0px auto;" >
    <legend align="center"><h3>Resource information display</h3></legend>

        
    <table class="table">
        <tbody>
		<col width=25% >
		<col width=75% >

		  <?PHP if ($call <> "") {?>
			 <tr>
				<th >Call number:</th>
				<td ><button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm" role="button" aria-pressed="true"><h4><?PHP echo $call ?></h4></button></td>
				
				<td border="0" rowspan="100%" valign="top" cellpadding="">
     				<div style="width:200px;float:right;text-align:center;color:blue; background:; font-family:arial">
					    <img src="<?php echo $imahe ?>" alt="" width="200" height="300" border="0">
      				</div>
			    </td>				
				</tr>
		  <?PHP } ?>				
		
		  <?PHP if ($TitleStr[1] <> "") {?>
			 <tr class="danger">
				<th >Title proper :</th>
				<td><b><?PHP echo $TitleStr[1] ?></b></td>
			</tr>
		  <?PHP } ?>
		  
		  <?PHP if ($TitleStr[2] <> "") {?>
			 <tr>
				<th >Statement of responsibility:</th>
				<td ><?PHP echo $TitleStr[2] ?></td></tr>
		  <?PHP } ?>	

		  <?PHP if ($TitleStr[3] <> "") {?>
			 <tr>
				<th >Parallel title:</th>
				<td><?PHP echo $TitleStr[3] ?></td></tr>
		  <?PHP } ?>		  
  
		  <?PHP if ($TitleStr[4] <> "") {?>
			 <tr>
				<th >Creator:</th>
				<td><a href='results.php?mtype=book&search=<?PHP echo $TitleStr[4]?>&submit=Submit'><b><?PHP echo $TitleStr[4] ?></b></a></td></tr>		
		  <?PHP } ?>
		  
		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[6];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Creator:</th>
						<td><a href='results.php?mtype=book&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[7];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Contributor:</th>
						<td><a href='results.php?mtype=book&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>		  
		  
		  <?PHP if ($TitleStr[8] <> "") {?>
			 <tr>
				<th >Added entry - Corporate:</th>
				<td ><?PHP echo $TitleStr[8] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($pub <> "") {?>
			 <tr>
				<th >Publication:</th>
				<td ><?PHP echo $pub ?></td></tr>
		  <?PHP } ?>	  

		  <?PHP if ($TitleStr[13] <> "") {?>
			 <tr>
				<th >Extent of text:</th>
				<td ><?PHP echo $TitleStr[13] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[14] <> "") {?>
			 <tr>
				<th >Illustrative content:</th>
				<td ><?PHP echo $TitleStr[14] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[15] <> "") {?>
			 <tr>
				<th >Dimension:</th>
				<td ><?PHP echo $TitleStr[15] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[39] <> "") {?>
			 <tr>
				<th >Content type:</th>
				<td ><?PHP echo $TitleStr[39] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[40] <> "") {?>
			 <tr>
				<th >Media type:</th>
				<td ><?PHP echo $TitleStr[40] ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[41] <> "") {?>
			 <tr>
				<th >Carrier type:</th>
				<td ><?PHP echo $TitleStr[41] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[17] <> "") {?>
			 <tr>
				<th >Series:</th>
				<td ><?PHP echo $TitleStr[17] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[18] <> "") {?>
			 <tr>
				<th >Notes:</th>
				<td ><?PHP echo $TitleStr[18] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[19] <> "") {?>
			 <tr>
				<th >ISBN/Identifier:</th>
				<td ><?PHP echo $TitleStr[19] ?></td></tr>
		  <?PHP } ?>		  
 
 		  <?PHP
			$var = "";
			$element = "";
			$var= $TitleStr[20];
			$pieces = explode(";", $var);
			foreach($pieces as $element)			
				if ($element <> "" ) {?>		
					<tr>
						<th >Access point-Topical:</th>
						<td><a href='results.php?mtype=book&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>		  

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[21];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Access point-Creator:</th>
						<td><a href='results.php?mtype=book&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  

 		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[22];
			$pieces = explode(";", $var);
			foreach($pieces as $element)			
				if ($element <> "" ) {?>
		
					<tr>
						<th >Access point-Corporate:</th>
						<td><a href='results.php?mtype=book&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  
		  
 		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[23];
			$pieces = explode(";", $var);
			foreach($pieces as $element)			
				if ($element <> "" ) {?>	
					<tr>
						<th >Access point-Geographical:</th>
						<td><a href='results.php?mtype=book&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>
		  
		  <?PHP if ($TitleStr[27] <> "") {?>
			 <tr>
				<th >Language of text:</th>
				<td ><?PHP echo $TitleStr[27] ?></td></tr>
		  <?PHP } ?>		
	
		  <?PHP if ($TitleStr[29] <> "") {?>
			 <tr>
				<th >Electronic access:</th>
				<td ><?PHP echo $TitleStr[29] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[38] <> "") {?>
			 <tr>
				<th >URL:</th>
				<td ><?PHP echo $TitleStr[38] ?></td></tr>
		  <?PHP } ?>	
	
		  <?PHP if ($TitleStr[33] <> "") {?>
			 <tr>
				<th >Content notes:</th>
				<td ><?PHP echo $TitleStr[33] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[35] <> "") {?>
			 <tr>
				<th >Review:</th>
				<td ><?PHP echo $TitleStr[35] ?></td></tr>
		  <?PHP } ?>		
		  <?PHP if ($TitleStr[34] <> "") {?>
			 <tr>
				<th >Abstract:</th>
				<td ><?PHP echo $TitleStr[34] ?></td></tr>
		  <?PHP } ?>			  
		 </tbody>  		  
   </table>
 </fieldset>
 

 <fieldset style = "width: 80%; margin:  0px auto;" >
 <legend align="center"><h3>Holdings</h3></legend>	
    <table class="table table-sm table-inverse">
      <col width=20% align="center">
      <col width=20% align="center">
      <col width=30% align="center">
      <col width=20% align="center">
      <col width=10% align="center">
        
        <thead>
          <tr bgcolor = "#FFE4C4">
            <th>Accession</th>
            <th>Status</th>
            <th>Library/Location</th>
            <th>Due date</th>
            <th>Action</th>             
          </tr>
        </thead>
 
		 <?php
			$var= $TitleStr[26];
			$pieces = explode(";", $var);
			foreach($pieces as $element)
			{
			if ($element <> "" ) {
                
				//$sql_select = "select * from borrower where Accession_number='$element'";
				//$sel_result = mysql_query($sql_select) or die(mysql_error());
				//$numr = mysql_num_rows($sel_result);
				//$mrow = mysql_fetch_array($sel_result);
                
                $sel_result = $sLink->query("select * from borrower where Accession_number='$element'");                         
                $numr = $sel_result->rowcount();
                $mrow = $sel_result->fetch(PDO::FETCH_ASSOC);              

				if ($numr > 0){
					if (trim($mrow['Accession_number'] <> "")){
						$acc = $mrow['Accession_number'];
					}
					else {
						$acc = 'None';						
					}
					$status = 'Out';
					//$lib = $mrow['Library'];
					if (trim($lib = $mrow['Library'] <> "")){
						$lib = $mrow['Library'];
					}
					else {
						$lib = 'None';						
					}					
					$due = $mrow['Due_date'];}
				else {
					$acc = $element;
					$status = 'On-shelf';
					$lib = $TitleStr[28];
					$due = 'available';
				}
			}					
			?>
        
            <tbody>
			<tr>
				<td scope="row">
					<?php echo $acc ?>
				</td>
				<td >
					<?php echo $status ?>
				</td>	
				<td >
					<?php echo $lib ?>
				</td>	
				<td >
					<?php echo $due ?>
				</td>
 				<td >
                        <a href='$link=$bkid'><button class='button' style='color:navy;'>Put on-hold</button></a>
				</td>               
                
			</tr>
            <tbody>
                
		  <?PHP } ?>
                
    
    </table>
 </fieldset>
 
      <div class="col-md-12 text-center"> 
          <button id="singlebutton" name="singlebutton" class="btn btn-warning btn-sm" role="button" aria-pressed="true">
              <a href="javascript:history.back()"><i class="fa fa-hand-o-left"></i></a></button> 
      </div>      
      
 </div> 

</body>
</html>
    

