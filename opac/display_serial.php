<title>Serials catalog display</title>

 
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


         $imahe = './images/myPeriodical.png';


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
    <legend align="center"><h3>Serial catalog data display</h3></legend>		
    <table class="table" >
		<col width=25% >
		<col width=75% >

		  <?php if ($TitleStr[1] <> "") {?>
			 <tr>
				<th class="danger">Serial title :</th>
				<td class="danger"><b><?PHP echo $TitleStr[1] ?></b></td>
				<td border="0" rowspan="100%" valign="top" >
    				<div style="width:200px;float:right;text-align:center;color:orange; background:; font-family:arial">
					   <i class="fa fa-calendar" style="font-size:200px" title="Serial catalog"></i>
      				</div>
                </td>					
			</tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[10] <> "") {?>
			 <tr>
				<th >Call number :</th>
				<td ><?PHP echo $TitleStr[10] ?></td>
			</tr>
		  <?PHP } ?>		  
		  
		  <?PHP if ($TitleStr[2] <> "") {?>
			 <tr>
				<th >Place of publication :</th>
				<td><?PHP echo $TitleStr[2] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[3] <> "") {?>
			 <tr>
				<th >Publisher :</th>
				<td><?PHP echo $TitleStr[3] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[15] <> "") {?>
			 <tr>
				<th >Description :</th>
				<td ><?PHP echo $TitleStr[15] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[4] <> "") {?>
			 <tr>
				<th >Frequency :</th>
				<td ><?PHP echo $TitleStr[4] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[5] <> "") {?>
			 <tr>
				<th >Latest received :</th>
				<td ><?PHP echo $TitleStr[5] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[6] <> "") {?>
			 <tr>
				<th >Notes :</th>
				<td ><?PHP echo $TitleStr[6] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[7] <> "") {?>
			 <tr>
				<th >Holding :</th>
				<td ><?PHP echo $TitleStr[7] ?></td></tr>
		  <?PHP } ?>

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[8];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Subject:</th>
						<td><a href='results.php?mtype=serial&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  
		  
		  <?PHP if ($TitleStr[16] <> "") {?>
			 <tr>
				<th >Corporate :</th>
				<td ><?PHP echo $TitleStr[16] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[13] <> "") {?>
			 <tr>
				<th >Discipline :</th>
				<td ><?PHP echo $TitleStr[13] ?></td></tr>
		  <?PHP } ?>	

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[13];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Discipline:</th>
						<td><a href='results.php?mtype=serial&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>		  
		  
		  <?PHP if ($TitleStr[11] <> "") {?>
			 <tr>
				<th >ISSN :</th>
				<td ><?PHP echo $TitleStr[11] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[12] <> "") {?>
			 <tr>
				<th >Location :</th>
				<td ><?PHP echo $TitleStr[12] ?></td></tr>
		  <?PHP } ?>	

		  <?PHP if ($TitleStr[14] <> "") {?>
			 <tr>
				<th >Barcode :</th>
				<td ><?PHP echo $TitleStr[14] ?></td></tr>
		  <?PHP } ?>	

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[17];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Electronic access:</th>
						<td><a href='results.php?mtype=serial&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
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