<title>Museum description display</title>

 
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
	$bkid = $_GET['museumid'];				    
	//$sql_select = "select * from museum where museumid=$bkid";
	//$sel_result = mysql_query($sql_select) or die(mysql_error());
	//$numr = mysql_num_rows($sel_result);
	//$mrow = mysql_fetch_array($sel_result);

    $sel_result = $sLink->query("select * from museum where museumid=$bkid");                         
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
	$TitleStr[55] = str_replace("<0055>", "", $MyArray1[54]);		
	
	$TitleStr[56] = str_replace("<0056>", "", $MyArray1[55]);
	$TitleStr[57] = str_replace("<0057>", "", $MyArray1[56]);
	$TitleStr[58] = str_replace("<0058>", "", $MyArray1[57]);
	$TitleStr[59] = str_replace("<0059>", "", $MyArray1[58]);
	$TitleStr[60] = str_replace("<0060>", "", $MyArray1[59]);
	$TitleStr[61] = str_replace("<0061>", "", $MyArray1[60]);
	$TitleStr[62] = str_replace("<0062>", "", $MyArray1[61]);
	$TitleStr[63] = str_replace("<0063>", "", $MyArray1[62]);
	$TitleStr[64] = str_replace("<0064>", "", $MyArray1[63]);
	$TitleStr[65] = str_replace("<0065>", "", $MyArray1[64]);	
	
	$TitleStr[66] = str_replace("<0066>", "", $MyArray1[65]);
	$TitleStr[67] = str_replace("<0067>", "", $MyArray1[66]);
	$TitleStr[68] = str_replace("<0068>", "", $MyArray1[67]);
	$TitleStr[69] = str_replace("<0069>", "", $MyArray1[68]);
	$TitleStr[70] = str_replace("<0070>", "", $MyArray1[69]);
	$TitleStr[71] = str_replace("<0071>", "", $MyArray1[70]);
	$TitleStr[72] = str_replace("<0072>", "", $MyArray1[71]);
	$TitleStr[73] = str_replace("<0073>", "", $MyArray1[72]);
	$TitleStr[74] = str_replace("<0074>", "", $MyArray1[73]);
	$TitleStr[75] = str_replace("<0075>", "", $MyArray1[74]);	

	$MyArray12 = explode(";", $TitleStr[12]);
	for ($y=0; $y<=count($MyArray12); $y++) {
		if (strlen($MyArray12[$y]) > 0) {
			$subj[$y] = trim($MyArray12[$y]);
		}
	}
	
	$imahe = './images/myMuseum.png';
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
    <legend align="center"><h3>Museum Record Description Display</h3></legend>		
      <table class="table" >
		<col width=25% >
		<col width=75% >

     <?PHP if ($TitleStr[1] <> "") {?>
         <tr>
            <th class="danger">Title:</th>
            <td class="danger"><B><?PHP echo $TitleStr[1] ?></B></td>
			
				<td border="0" rowspan="100%" valign="top" cellpadding="">
    				<div style="width:200px;float:right;text-align:center;color:orange; background:; font-family:arial">
					   <i class="fa fa-university" style="font-size:200px" title="Museum object description"></i>
      				</div>
			    </td>				
			
			</tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[2] <> "") {?>
         <tr>
            <th >Title type:</th>
            <td><B><?PHP echo $TitleStr[2] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[3] <> "") {?>
         <tr>
            <th >Title translation:</th>
             <td><B><?PHP echo $TitleStr[3] ?></B></td></tr>
      <?PHP } ?>

      <?PHP if ($TitleStr[4] <> "") {?>
         <tr>
            <th >Object name:</th>
            <td><B><?PHP echo $TitleStr[4] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[5] <> "") {?>
         <tr>
            <th >Object name type:</th>
            <td><B><?PHP echo $TitleStr[5] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[6] <> "") {?>
         <tr>
            <th >Object name authority:</th>
            <td><B><?PHP echo $TitleStr[6] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[7] <> "") {?>
         <tr>
            <th >Object number:</th>
            <td><B><?PHP echo $TitleStr[7] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[8] <> "") {?>
         <tr>
            <th >Object number type:</th>
            <td><B><?PHP echo $TitleStr[8] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[9] <> "") {?>
         <tr>
            <th >Object number date:</th>
            <td><B><?PHP echo $TitleStr[9] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[10] <> "") {?>
         <tr>
            <th >Production place:</th>
            <td><B><?PHP echo $TitleStr[10] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[11] <> "") {?>
         <tr>
            <th >Production date:</th>
            <td><B><?PHP echo $TitleStr[11] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[12] <> "") {?>
         <tr>
            <th >Production group/person name:</th>
            <td><B><?PHP echo $TitleStr[12] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[13] <> "") {?>
         <tr>
            <th >Production role:</th>
            <td><B><?PHP echo $TitleStr[13] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[14] <> "") {?>
         <tr>
            <th >Associated place:</th>
            <td><B><?PHP echo $TitleStr[14] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[15] <> "") {?>
         <tr>
            <th >Associated date:</th>
            <td><B><?PHP echo $TitleStr[15] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[16] <> "") {?>
         <tr>
            <th >Associated group/person name:</th>
            <td><B><?PHP echo $TitleStr[16] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[17] <> "") {?>
         <tr>
            <th >Association type:</th>
            <td><B><?PHP echo $TitleStr[17] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[18] <> "") {?>
         <tr>
            <th >Original function:</th>
            <td><B><?PHP echo $TitleStr[18] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[19] <> "") {?>
         <tr>
            <th >Collection place:</th>
            <td><B><?PHP echo $TitleStr[19] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[20] <> "") {?>
         <tr>
            <th >Collection date:</th>
            <td><B><?PHP echo $TitleStr[20] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[21] <> "") {?>
         <tr>
            <th >Collector:</th>
            <td><B><?PHP echo $TitleStr[21] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[22] <> "") {?>
         <tr>
            <th >Collection method:</th>
            <td><B><?PHP echo $TitleStr[22] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[23] <> "") {?>
         <tr>
            <th >Current owner:</th>
            <td><B><?PHP echo $TitleStr[23] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[24] <> "") {?>
         <tr>
            <th >Depositor:</th>
            <td><B><?PHP echo $TitleStr[24] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[25] <> "") {?>
         <tr>
            <th >Entry date:</th>
            <td><B><?PHP echo $TitleStr[25] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[26] <> "") {?>
         <tr>
            <th >Entry number:</th>
            <td><B><?PHP echo $TitleStr[26] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[27] <> "") {?>
         <tr>
            <th >Entry reason:</th>
            <td><B><?PHP echo $TitleStr[27] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[28] <> "") {?>
         <tr>
            <th >Current location:</th>
            <td><B><?PHP echo $TitleStr[28] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[29] <> "") {?>
         <tr>
            <th >Current location date:</th>
            <td><B><?PHP echo $TitleStr[29] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[30] <> "") {?>
         <tr>
            <th >Current location type:</th>
            <td><B><?PHP echo $TitleStr[30] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[31] <> "") {?>
         <tr>
            <th >Normal location:</th>
            <td><B><?PHP echo $TitleStr[31] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[32] <> "") {?>
         <tr>
            <th >Acquisition method:</th>
            <td><B><?PHP echo $TitleStr[32] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[33] <> "") {?>
         <tr>
            <th >Acquisition date:</th>
            <td><B><?PHP echo $TitleStr[33] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[34] <> "") {?>
         <tr>
            <th >Accompanying source:</th>
            <td><B><?PHP echo $TitleStr[34] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[35] <> "") {?>
         <tr>
            <th >Condition:</th>
            <td><B><?PHP echo $TitleStr[35] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[36] <> "") {?>
         <tr>
            <th >Condition summary:</th>
            <td><B><?PHP echo $TitleStr[36] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[37] <> "") {?>
         <tr>
            <th >Condition date:</th>
            <td><B><?PHP echo $TitleStr[37] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[38] <> "") {?>
         <tr>
            <th >Institution name:</th>
            <td><B><?PHP echo $TitleStr[38] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[39] <> "") {?>
         <tr>
            <th >Institution sub-body name:</th>
            <td><B><?PHP echo $TitleStr[39] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[40] <> "") {?>
         <tr>
            <th >Institution address:</th>
            <td><B><?PHP echo $TitleStr[40] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[41] <> "") {?>
         <tr>
            <th >Institution country:</th>
            <td><B><?PHP echo $TitleStr[41] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[42] <> "") {?>
         <tr>
            <th >Reference:</th>
            <td><B><?PHP echo $TitleStr[42] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[43] <> "") {?>
         <tr>
            <th >Reference type</td>
            <td><B><?PHP echo $TitleStr[43] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[44] <> "") {?>
         <tr>
            <th >Physical description:</th>
            <td><B><?PHP echo $TitleStr[44] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[45] <> "") {?>
         <tr>
            <th >Specimen status:</th>
            <td><B><?PHP echo $TitleStr[45] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[46] <> "") {?>
         <tr>
            <th >Image type:</th>
            <td><B><?PHP echo $TitleStr[46] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[47] <> "") {?>
         <tr>
            <th >Image reference number:</th>
            <td><B><?PHP echo $TitleStr[47] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[48] <> "") {?>
         <tr>
            <th >Dimension:</th>
             <td><B><?PHP echo $TitleStr[48] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[49] <> "") {?>
         <tr>
            <th >Measurement:</th>
            <td><B><?PHP echo $TitleStr[49] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[50] <> "") {?>
         <tr>
            <th >Measurement unit:</th>
            <td><B><?PHP echo $TitleStr[50] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[51] <> "") {?>
         <tr>
            <th >Measured part:</th>
            <td><B><?PHP echo $TitleStr[51] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[52] <> "") {?>
         <tr>
            <th >Mark/inscription text:</th>
            <td><B><?PHP echo $TitleStr[52] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[53] <> "") {?>
         <tr>
            <th >Mark/inscription type:</th>
            <td><B><?PHP echo $TitleStr[53] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[54] <> "") {?>
         <tr>
            <th >Mark/inscription description:</th>
            <td><B><?PHP echo $TitleStr[54] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[55] <> "") {?>
         <tr>
            <th >Mark/inscription technique:</th>
            <td><B><?PHP echo $TitleStr[55] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[56] <> "") {?>
         <tr>
            <th >Mark/inscription position:</th>
            <td><B><?PHP echo $TitleStr[56] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[57] <> "") {?>
         <tr>
            <th >Mark/inscription language:</th>
            <td><B><?PHP echo $TitleStr[57] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[58] <> "") {?>
         <tr>
            <th >Mark/inscription translation:</th>
            <td><B><?PHP echo $TitleStr[58] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[59] <> "") {?>
         <tr>
            <th >Material:</th>
            <td><B><?PHP echo $TitleStr[59] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[60] <> "") {?>
         <tr>
            <th >Technique:</th>
            <td><B><?PHP echo $TitleStr[60] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[61] <> "") {?>
         <tr>
            <th >Part of component description:</th>
            <td><B><?PHP echo $TitleStr[61] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[62] <> "") {?>
         <tr>
            <th >Reproduction rights note:</th>
            <td><B><?PHP echo $TitleStr[62] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[63] <> "") {?>
         <tr>
            <th >Reproduction rights owner:</th>
            <td><B><?PHP echo $TitleStr[63] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[64] <> "") {?>
         <tr>
            <th >Deaccession date:</th>
            <td><B><?PHP echo $TitleStr[64] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[65] <> "") {?>
         <tr>
            <th >Disposal date:</th>
            <td><B><?PHP echo $TitleStr[65] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[66] <> "") {?>
         <tr>
            <th >Disposal method:</th>
            <td><B><?PHP echo $TitleStr[66] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[67] <> "") {?>
         <tr>
            <th >Disposal recipient:</th>
            <td><B><?PHP echo $TitleStr[67] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[68] <> "") {?>
         <tr>
            <th >Number of parts and components:</th>
            <td><B><?PHP echo $TitleStr[68] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[69] <> "") {?>
         <tr>
            <th >Description of parts and components:</th>
            <td><B><?PHP echo $TitleStr[69] ?></B></td></tr>
       <?PHP } ?>

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[70];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Subject depicted:</th>
						<td><a href='results.php?mtype=museum&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  

      <?PHP if ($TitleStr[71] <> "") {?>
         <tr>
            <th >Subject depicted description:</th>
            <td><B><?PHP echo $TitleStr[71] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[72] <> "") {?>
         <tr>
            <th >Recorder:</th>
            <td><B><?PHP echo $TitleStr[72] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[73] <> "") {?>
         <tr>
            <th >Record date:</th>
            <td><B><?PHP echo $TitleStr[73] ?></B></td></tr>
       <?PHP } ?>

      <?PHP if ($TitleStr[74] <> "") {?>
         <tr>
            <th >Authority:</th>
            <td><B><?PHP echo $TitleStr[74] ?></B></td></tr>
       <?PHP } ?>


		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[75];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th >Electronic access:</th>
						<td><a href='results.php?mtype=museum&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
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