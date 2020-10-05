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

	if ($TitleStr[11] <> "") {
		$fname = str_replace("C:\\", "", $TitleStr[11]);
		$fname = str_replace("D:\\", "", $fname);
		$fname = str_replace("F:\\", "", $fname);
		$fname = str_replace("G:\\", "", $fname);
		$fname = str_replace("\\", "/", $fname);
	}
	
	$imahe = 'images/myVF.png';			

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
    <legend align="center"><h3>Vertical File Information Display</h3></legend>		
    <table class="table" >
		<col width=25% >
		<col width=75% >

		  <?PHP if ($TitleStr[1] <> "") {?>
			 <tr >
				<th class="danger">Title :</th>
				<td class="danger"><b><?PHP echo $TitleStr[1] ?></b></td>
				
				<td border="0" rowspan="100%" valign="top" cellpadding="">
     				<div style="width:200px;float:right;text-align:center;color:orange; background:; font-family:arial">
					   <i class="fa fa-folder-open" style="font-size:200px" title="Vertical file"></i>
      				</div>
			    </td>					
			</tr>
		  <?PHP } ?>
	 
		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[2];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th class="display">Creator:</th>
						<td><a href='results.php?mtype=vf&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  
		  
		  <?PHP if ($TitleStr[3] <> "") {?>
			 <tr>
				<th class="display">Source :</th>
				<td><?PHP echo $TitleStr[3] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[4] <> "") {?>
			 <tr>
				<th class="display">Date :</th>
				<td ><?PHP echo $TitleStr[4] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[5] <> "") {?>
			 <tr>
				<th class="display">Reference code :</th>
				<td ><?PHP echo $TitleStr[5] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[6] <> "") {?>
			 <tr>
				<th class="display">Description :</th>
				<td ><?PHP echo $TitleStr[6] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[7] <> "") {?>
			 <tr>
				<th class="display">Document type :</th>
				<td ><?PHP echo $TitleStr[7] ?></td></tr>
		  <?PHP } ?>		  

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[11];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th class="display">Subject:</th>
						<td><a href='results.php?mtype=vf&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>				  
		  
		  <?PHP if ($TitleStr[8] <> "") {?>
			 <tr>
				<th class="display">Location :</th>
				<td ><?PHP echo $TitleStr[8] ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[10] <> "") {?>
			 <tr>
				<th class="display">Electronic access :</th>
				<td ><?PHP echo $TitleStr[10] ?></td></tr>
		  <?PHP } ?>		  
		  
		  <?PHP if ($TitleStr[12] <> "") {?>
			 <tr>
				<th class="display">Abstract :</th>
				<td ><?PHP echo $TitleStr[12] ?></td></tr>
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