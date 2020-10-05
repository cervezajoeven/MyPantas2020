
<title>Analytic or Literature index details display</title>

 
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

<?PHP require("header.php");
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
	$TitleStr[43] = str_replace("<0043>", "", $MyArray1[42]);
	$TitleStr[44] = str_replace("<0044>", "", $MyArray1[43]);
	$TitleStr[45] = str_replace("<0045>", "", $MyArray1[44]);
	$TitleStr[46] = str_replace("<0046>", "", $MyArray1[45]);
	$TitleStr[47] = str_replace("<0047>", "", $MyArray1[46]);
	
	$TitleStr[48] = str_replace("<0048>", "", $MyArray1[47]);
	$TitleStr[49] = str_replace("<0049>", "", $MyArray1[48]);
	$TitleStr[50] = str_replace("<0050>", "", $MyArray1[49]);
	$TitleStr[51] = str_replace("<0051>", "", $MyArray1[50]);
	$TitleStr[52] = str_replace("<0052>", "", $MyArray1[51]);
	$TitleStr[53] = str_replace("<0053>", "", $MyArray1[52]);
	$TitleStr[54] = str_replace("<0054>", "", $MyArray1[53]);	

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

	if ($TitleStr[45] <> "" && $TitleStr[47] <> "")
		$call = trim($TitleStr[45]) . ' ' . trim($TitleStr[47]);
	elseif ($TitleStr[45] <> "")
	{
		$call = trim($TitleStr[45]);
	}	

	if ($TitleStr[46] <> "")
	     $imahe = trim($TitleStr[46]);
	else{
         $imahe = 'images/myAudio.png';
	}
	
	if ($TitleStr[18] <> "") {
		$fname = str_replace("C:\\", "", $TitleStr[18]);
		$fname = str_replace("D:\\", "", $fname);
		$fname = str_replace("F:\\", "", $fname);
		$fname = str_replace("G:\\", "", $fname);
		$fname = str_replace("\\", "/", $fname);
	}

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
      <legend align="center"><h3>Audio Recording Information Display</h3></legend>		
      <table class="table" >
		<col width=25% >
		<col width=75% >

		  <?PHP if ($TitleStr[1] <> "") {?>
			 <tr>
				<th class="danger">Title proper :</th>
				<td class="danger"><b><?PHP echo $TitleStr[1] ?></b></td>
				
				<td border="0" rowspan="100%" valign="top" cellpadding="">
     				<div style="width:200px;float:right; text-align:center;color:blue; background:; font-family:arial">
					    <img src="<?php echo $imahe ?>" alt="" width="200" height="300" border="0">
      				</div>
			    </td>	
			</tr>
		  <?PHP } ?>
		  <?PHP if ($call <> "") {?>
			 <tr>
				<th >Call number:</th>
				<td ><?PHP echo $call ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[5] <> "") {?>
			 <tr>
				<th >Statement of responsibility:</th>
				<td ><?PHP echo $TitleStr[5] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[2] <> "") {?>
			 <tr>
				<th >Other title information:</th>
				<td><?PHP echo $TitleStr[2] ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[3] <> "") {?>
			 <tr>
				<th >Parallel title:</th>
				<td><?PHP echo $TitleStr[3] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[4] <> "") {?>
			 <tr>
				<th >Variant title:</th>
				<td><?PHP echo $TitleStr[4] ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[6] <> "") {?>
			 <tr>
				<th >Edition statement:</th>
				<td><?PHP echo $TitleStr[6] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($pub <> "") {?>
			 <tr>
				<th  >Publication:</th>
				<td ><?PHP echo $pub ?></td></tr>
		  <?PHP } ?>			  

		  <?PHP if ($TitleStr[10] <> "") {?>
			 <tr>
				<th >Place of distribution:</th>
				<td ><?PHP echo $TitleStr[10] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[11] <> "") {?>
			 <tr>
				<th >Distributor`s name:</th>
				<td ><?PHP echo $TitleStr[11] ?></td></tr>
		  <?PHP } ?>			  
		  <?PHP if ($TitleStr[12] <> "") {?>
			 <tr>
				<th >Copyright date:</th>
				<td ><?PHP echo $TitleStr[12] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[13] <> "") {?>
			 <tr>
				<th >Mode of issuance:</th>
				<td ><?PHP echo $TitleStr[13] ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[14] <> "") {?>
			 <tr>
				<th >ISBN/Identifier:</th>
				<td ><?PHP echo $TitleStr[14] ?></td></tr>
		  <?PHP } ?>

		  <?PHP if ($TitleStr[24] <> "") {?>
			 <tr>
				<th >Content type:</th>
				<td ><?PHP echo $TitleStr[24] ?></td></tr>
		  <?PHP } ?>
		  
		  <?PHP if ($TitleStr[16] <> "") {?>
			 <tr>
				<th >Carrier type:</th>
				<td ><?PHP echo $TitleStr[16] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[15] <> "") {?>
			 <tr>
				<th >Media type:</th>
				<td ><?PHP echo $TitleStr[15] ?></td></tr>
		  <?PHP } ?>		  
		  
		  <?PHP if ($TitleStr[17] <> "") {?>
			 <tr>
				<th >Extent:</th>
				<td ><?PHP echo $TitleStr[17] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[18] <> "") {?>
			 <tr>
				<th >Dimension:</th>
				<td ><?PHP echo $TitleStr[18] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[19] <> "") {?>
			 <tr>
				<th >Type of recording:</th>
				<td ><?PHP echo $TitleStr[19] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[42] <> "") {?>
			 <tr>
				<th >Recording medium:</th>
				<td ><?PHP echo $TitleStr[42] ?></td></tr>
		  <?PHP } ?>			  
		  <?PHP if ($TitleStr[20] <> "") {?>
			 <tr>
				<th >Configuration playback:</th>
				<td ><?PHP echo $TitleStr[20] ?></td></tr>
		  <?PHP } ?>		
		  <?PHP if ($TitleStr[43] <> "") {?>
			 <tr>
				<th >Digital file format :</th>
				<td ><?PHP echo $TitleStr[43] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[21] <> "") {?>
			 <tr>
				<th >Terms of availability:</th>
				<td ><?PHP echo $TitleStr[21] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[22] <> "") {?>
			 <tr>
				<th  >Contact information:</th>
				<td ><?PHP echo $TitleStr[22] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[23] <> "") {?>
			 <tr>
				<th >Requirements:</th>
				<td ><?PHP echo $TitleStr[23] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[25] <> "") {?>
			 <tr>
				<th >Nature of the content:</th>
				<td ><?PHP echo $TitleStr[25] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[44] <> "") {?>
			 <tr>
				<th >Listing content:</th>
				<td ><?PHP echo $TitleStr[44] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[26] <> "") {?>
			 <tr>
				<th >Summarization:</th>
				<td ><?PHP echo $TitleStr[26] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[27] <> "") {?>
			 <tr>
				<th >Language used:</th>
				<td ><?PHP echo $TitleStr[27] ?></td></tr>
		  <?PHP } ?>		
		  <?PHP if ($TitleStr[28] <> "") {?>
			 <tr>
				<th >Duration:</th>
				<td ><?PHP echo $TitleStr[28] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[29] <> "") {?>
			 <tr>
				<th >Performers:</th>
				<td ><?PHP echo $TitleStr[29] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[30] <> "") {?>
			 <tr>
				<th >Credit:</th>
				<td ><?PHP echo $TitleStr[30] ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[31] <> "") {?>
			 <tr>
				<th >Work manifested:</th>
				<td ><?PHP echo $TitleStr[31] ?></td></tr>
		  <?PHP } ?>	

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[32];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Creator:</th>
						<td><a href='results.php?mtype=audio&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  
		  
		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[33];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Contributor:</th>
						<td><a href='results.php?mtype=audio&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>		
		  
		  <?PHP if ($TitleStr[34] <> "") {?>
			 <tr>
				<th >Related expression:</th>
				<td ><?PHP echo $TitleStr[34] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[35] <> "") {?>
			 <tr>
				<th >Related manifestation:</th>
				<td ><?PHP echo $TitleStr[35] ?></td></tr>
		  <?PHP } ?>		

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[36];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Access point-Topical:</th>
						<td><a href='results.php?mtype=audio&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>	

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[37];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Access point-Personal:</th>
						<td><a href='results.php?mtype=audio&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>	  

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[38];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Access point-Corporate:</th>
						<td><a href='results.php?mtype=audio&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[39];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Access point-Geographical:</th>
						<td><a href='results.php?mtype=audio&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>	

		  <?PHP if ($TitleStr[48] <> "") {?>
			 <tr>
				<th >Accession:</th>
				<td ><?PHP echo $TitleStr[48] ?></td></tr>
		  <?PHP } ?>		  

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[41];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Electronic access:</th>
						<td><a href='results.php?mtype=audio&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>
		  
		  <?PHP if ($TitleStr[49] <> "") {?>
			 <tr>
				<th >Library:</th>
				<td ><?PHP echo $TitleStr[49] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[50] <> "") {?>
			 <tr>
				<th >Location:</th>
				<td ><?PHP echo $TitleStr[50] ?></td></tr>
		  <?PHP } ?>	
		  
   </table>
 </fieldset>
 
 	<fieldset style = "width: 80%; margin:  0px auto;" >
    <legend align="center"><h3>Holdings</h3></legend>	
   <table class="table table-sm table-inverse">
      <col width=20% align="center">
      <col width=20% align="center">
      <col width=40% align="center">
      <col width=20% align="center">
		
        <thead>
          <tr bgcolor = "#A7C942">
            <th>Accession</th>
            <th>Status</th>
            <th>Library/Location</th>
            <th>Due date</th>
          </tr>
        </thead>

 <?php

			$var= $TitleStr[48];
			$pieces = explode(";", $var);
			foreach($pieces as $element)
			{
				if ($element <> "" ) {
					$sql_select = "select * from borrower where Accession_number='$element'";
					$sel_result = mysql_query($sql_select) or die(mysql_error());
			
					$numr = mysql_num_rows($sel_result);
					$mrow = mysql_fetch_array($sel_result);

					if ($numr > 0){
						$acc = $mrow['Accession_number'];
						$status = 'Out';
						$lib = $mrow['Library'];
						$due = $mrow['Due_date'];
						}
					else {
						$acc = $element;
						$status = 'On-shelf';
						$lib = $TitleStr[49];
						$due = 'available';
					}
			}					
			?>
            <tbody>
			<tr>
				<td scope="row">
					<?PHP echo $acc ?>>
				</td>
				<td >
					<?PHP echo $status ?>
				</td>	
				<td >
					<?PHP echo $lib ?>
				</td>	
				<td >
					<?PHP echo $due ?>
				</td>					
			</tr>
          </tbody>
		  <?PHP } ?>
 
    </table>
 </fieldset>
 <br>
 
    <div class="col-md-12 text-center"> 
          <button id="singlebutton" name="singlebutton" class="btn btn-warning btn-sm" role="button" aria-pressed="true">
          <a href="javascript:history.back()"><i class="fa fa-hand-o-left"></i></a></button> 
    </div> 
    
</div>
</body>
</html>