<?php include('header.php'); 
$id=$_GET['bkid'];
?>

<style>
input[type=text], select {
  width: 100%;
  padding: 10px 5px;
  margin: 0px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.container { 
  width: 90%;
  margin-right: 100px;
 
  

}

</style>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Edit Book Catalog Information</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> EDIT BOOK CATALOG INFORMATION</h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
				
					<div class="alert alert-info">
						<a href="list_of_book.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
                
    $stmt = $sLink->query("select * from books where bkid='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);            

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
  ?>
		<div class="container">
			<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
										  
					  <div class="form-group">
						<label for="title" class="control-label" >Title proper</label><br>
						<input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>" width="80%" class="form-control" id="title"  required />
						<br>
						<label for="responsibility" class="control-label" >Statement of responsibility</label><br>
						<input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" class="form-control" id="responsibility"  />
						<br>
						<label for="parallel" class="control-label"  >Parallel title</label><br>
						<input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" class="form-control" id="parallel"  />
						<br>
						<label for="preferred" class="control-label" >Preferred title</label><br>
						<input type="text" name="str36" value="<?php echo $TitleStr[37]; ?>" class="form-control" id="preferred"   />
						<br>
						<label for="main_creator" class="control-label" >Main creator</label><br>
						<input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>" class="form-control" id="main_creator"   />
						<br>
						<label for="other_creator" class="control-label" >Other creator</label><br>
						<input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" class="form-control" id="other_creator"   />
						<br>
						<label for="contributors" class="control-label" >Contributors</label><br>
  					    <input type="text" name="str6" value="<?php echo $TitleStr[7]; ?>" class="form-control" id="contributors"  />
						<br>
						<label for="corporate_body" class="control-label" >Corporate body</label><br>
						<input type="text" name="str7" value="<?php echo $TitleStr[8]; ?>" class="form-control" id="corporate_body"  />
						<br>
						<label for="place" class="control-label" >Place of publication</label><br>
						<input type="text" name="str8" value="<?php echo $TitleStr[9]; ?>" class="form-control" id="place"   />
						<br>
						<label for="publisher" class="control-label" >Publisher</label><br>
  					    <input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" class="form-control" id="publisher"   />
						<br>
						<label for="date_of_publication" class="control-label" >Date of publication</label><br>
						<input type="text" name="str10" value="<?php echo $TitleStr[11]; ?>" class="form-control" id="date_of_publication"   />
						<br>
						<label for="edition" class="control-label" >Edition statement:</label><br>
						<input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>" class="form-control" id="edition"   />
						<br>
						<label for="extent" class="control-label" >Extent of text:</label><br>
						<input type="text" name="str12" value="<?php echo $TitleStr[13]; ?>" class="form-control" id="extent"   />
						<br>
						<label for="illustrative_content" class="control-label" >Illustrative content:</label><br>
						<input type="text" name="str13" value="<?php echo $TitleStr[14]; ?>" class="form-control" id="illustrative_content"   />
						<br>
						<label for="dimension" class="control-label" >Dimension:</label><br>
						<input type="text" name="str14" value="<?php echo $TitleStr[15]; ?>" class="form-control" id="dimension"   />
						<br>
						<label for="accompanying_materials" class="control-label" >Accompanying materials:</label><br>
						<input type="text" name="str15" value="<?php echo $TitleStr[16]; ?>" class="form-control" id="accompanying_materials"   />
						<br>
						<label for="series" class="control-label" >Series title:</label><br>
						<input type="text" name="str16" value="<?php echo $TitleStr[17]; ?>" class="form-control" id="series"  />
						<br>
						<label for="supplementary" class="control-label" >Supplementary content:</label><br>
						<input type="text" name="str17" value="<?php echo $TitleStr[18]; ?>" class="form-control" id="supplementary"   />
						<br>
						<label for="isbn" class="control-label" >Identifier/ISBN:</label><br>
						<input type="text" name="str18" value="<?php echo $TitleStr[19]; ?>" class="form-control" id="isbn"   />
						<br>
						<label for="content_type" class="control-label" >Content type:</label><br>
						<input type="text" name="str38" value="Text" class="form-control" id="content_type"   />							
						<br>
						<label for="media_type" class="control-label" >Media type:</label><br>
						<input type="text" name="str39" value="Unmediated" class="form-control" id="media_type"   />						
						<br>
						<label for="carrier_type" class="control-label" >Carrier type:</label><br>
						<input type="text" name="str40" value="Volume" class="form-control" id="carrier_type"   />	
						<br>
						<label for="url" class="control-label" >Uniform Resource Locator (URL):</label><br>
						<input type="text" name="str37" value="<?php echo $TitleStr[38]; ?>" class="form-control" id="url"   />
						<br>
						<label for="topical" class="control-label" >Subject - Topical:</label><br>
						<input type="text" name="str19" value="<?php echo $TitleStr[20]; ?>" class="form-control" id="topical"   />
						<br>
						<label for="personal" class="control-label" >Subject - Personal:</label><br>
						<input type="text" name="str20" value="<?php echo $TitleStr[21]; ?>" class="form-control" id="personal"   />
						<br>
						<label for="corporate" class="control-label" >Subject - Corporate:</label><br>
						<input type="text" name="str21" value="<?php echo $TitleStr[22]; ?>" class="form-control" id="corporate"   />
						<br>
						<label for="geographical" class="control-label" >Subject - Geographical:</label><br>
						<input type="text" name="str22" value="<?php echo $TitleStr[23]; ?>" class="form-control" id="geographical"  />
						<br>
						<label for="prefix" class=" control-label" >Prefix:</label><br>
						  <select name="str23" class="col-xs-2 form-control" width="150px">
							<option ><?php echo $TitleStr[24]; ?></option>						  
							<option value="bio">BIO</option>
							<option value="cf">CF</option>
							<option value="cir">CIR</option>
							<option value="cur">CUR</option>
							<option value="cnf">CNF</option>
							<option value="easy">EASY</option>
							<option value="fic">FIC</option>
							<option value="fil">FIL</option>
							<option value="folio">FOLIO</option>
							<option value="gc">GC</option>
							<option value="pap">PAP</option>
							<option value="ref">REF</option>
							<option value="res">RES</option>
							<option value="rf">RF</option>
							<option value="sp">SP</option>
							<option value="tr">TR</option>
							<option value="trf">TRF</option>
							<option value="txt">TXT</option>			
						  </select>

						<label for="call_number" class="control-label" >Call number:</label><br>
						<input type="text" name="str24" value="<?php echo $TitleStr[25]; ?>" class="form-control" id="call_number"  />
						<br>
						<label for="accession" class="control-label" >Accession number:</label><br>
						<input type="text" name="str25" value="<?php echo $TitleStr[26]; ?>" class="form-control" id="accession"  />
						<br>
						<label for="language" class="control-label" >Language of text:</label><br>
						<input type="text" name="str26" value="<?php echo $TitleStr[27]; ?>" class="form-control" id="language"  />
						<br>
						<label for="location" class="control-label" >Library/Location:</label><br>
						<input type="text" name="str27" value="<?php echo $TitleStr[28]; ?>" class="form-control" id="location"  />
						<br>
						<label for="electronic_access" class="control-label" >Electronic access:</label><br>
						<input type="text" name="str28" value="<?php echo $TitleStr[29]; ?>" class="form-control" id="electronic_access"  />
						<br>
						<label for="cover" class="control-label" >Cover image:</label><br>
						<input type="text" name="str41" value="<?php echo $row['images']; ?>" class="form-control" id="cover"  />
						<br>
						<label for="type_material" class="control-label" >Type of material:</label	>	<br>			  

						  <div class="col-sm-4"><input type="checkbox" name="gc" value="gc" <?php echo $gcchecked; ?> >General circulation</div>
						  <div class="col-sm-4"><input type="checkbox" name="tr" value="tr" <?php echo $trchecked; ?> >Teacher reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="fr" value="fr" <?php echo $frchecked; ?> >Filipiniana/Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="circ" value="circ" <?php echo $circchecked; ?> >Circulation</div>
					
						  <div class="col-sm-4"><input type="checkbox" name="ref" value="ref" <?php echo $refchecked; ?> >Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="fil" value="fil" <?php echo $filchecked; ?> >Filipiniana</div>

						  <div class="col-sm-4"><input type="checkbox" name="sm" value="sm" <?php echo $smchecked; ?>>Special collection</div>
						  <div class="col-sm-4"><input type="checkbox" name="bio" value="bio" <?php echo $biochecked; ?> >Biography</div>

						  <div class="col-sm-4"><input type="checkbox" name="res" value="res" <?php echo $reschecked; ?> >Reserve</div>
						  <div class="col-sm-4"><input type="checkbox" name="schl" value="schl" <?php echo $schlchecked; ?> >Scholastic</div>
	
						  <div class="col-sm-4"><input type="checkbox" name="easy" value="easy" <?php echo $easychecked; ?> >Easy</div>
						  <div class="col-sm-4"><input type="checkbox" name="fic" value="fic" <?php echo $ficchecked; ?> >Fiction</div>
						

						<label for="copy" class="control-label" >Volume/Copy:</label><br>
						<input type="number" name="str29" value="<?php echo $TitleStr[30]; ?>" class="form-control" id="copy" value = "1" />
						
						<label for="on_shelf" class="control-label" >On-shelf:</label><br>
						<input type="number" name="str30" value="<?php echo $row['inn']; ?>" class="form-control" id="on_shelf" value = "1" />
						
						<label for="out" class="control-label" >Out:</label><br>
						<input type="number" name="str31" value="<?php echo $row['t_out']; ?>" width="100px" class="form-control" id="out" value = "0"  />
						
						<label for="times_out" class="control-label" >Times out:</label><br>
						<input type="number" name="str35" value="<?php echo $row['t_timesout']; ?>" class="form-control" value = "0" id="times_out"  />
						
						<label for="content" class="control-label" >Content:</label>
						<textarea class="form-control" rows="5" id="content" name="str32"><?php echo $TitleStr[33]; ?></textarea>
					
						<label for="abstract" class="control-label" >Abstract/Summary:</label>
						<textarea class="form-control" rows="5" id="abstract" name="str33"><?php echo $TitleStr[34]; ?></textarea>

						<label for="review" class="control-label" >Review:</label>
						<textarea class="form-control" rows="5" cols="10" id="review" name="str34"><?php echo $TitleStr[35]; ?></textarea>

						<label for="entered_by" class="control-label" >Entered by:</label><br>
						<input type="text" name="entered_by" value="<?php echo $row['entered_by']; ?>" class="form-control" id="entered_by"  />
						<br>
						<label for="updated_by" class="control-label" >Updated by:</label><br>
						<input type="text" name="updated_by" value="<?php echo $row['updated_by']; ?>" class="form-control" id="updated_by"  />
						<br>
						<label for="date_entered" class="control-label" >Date entered:</label><br>
						<input type="text" name="date_entered" value="<?php echo $row['date_entered']; ?>" class="form-control" id="date_entered"  />
						<br>
						<label for="date_updated" class="control-label" >Date updated:</label><br>
						<input type="text" name="date_updated" value="<?php echo $row['date_updated']; ?>" class="form-control" id="date_updated"  />

					  </div>	

			  

					  <div class="form-group" style="text-align:right;">
						<label for="inputPassword3" class="control-label"></label>
						<button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
					  </div>
			</form>
	</div>	<!--end of container DIV -->	

<?php


$id =$_GET['bkid'];
if (isset($_POST['update'])) {


						unset($txtstr);
						$txtstr = "<001>" . $_POST['str0'] . ""; //'title
						$txtstr = $txtstr . "<002>" . $_POST['str1'] . ""; 
						$txtstr = $txtstr . "<003>" . $_POST['str2'] . ""; 
						$txtstr = $txtstr . "<004>" . $_POST['str3'] . ""; 
						$txtstr = $txtstr . "<005>" . $_POST['str4'] . ""; //numeration
						$txtstr = $txtstr . "<006>" . $_POST['str5'] . ""; //'other_author
						$txtstr = $txtstr . "<007>" . $_POST['str6'] . ""; //'editors...
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
						$txtstr = $txtstr . "<0037>" . $_POST['str36'] . ""; 
						$txtstr = $txtstr . "<0038>" . $_POST['str37'] . ""; 
						$txtstr = $txtstr . "<0039>" . $_POST['str38'] . ""; 
						$txtstr = $txtstr . "<0040>" . $_POST['str39'] . ""; 
						$txtstr = $txtstr . "<0041>" . $_POST['str40'] . ""; 
						$maintext = $txtstr . "<0042>" . $_POST['str41'] . ""; 
                        $maintext = str_replace("'", "`", $maintext);
    
						$title = $_POST['str0'];
                        $title = str_replace("'", "`", $title);  
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        }         
						$image = $_POST['str41'];
						$tm = 'book';
						
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

						$copy = $_POST['str29'];
						$inn = $_POST['str30'];
						$out = $_POST['str31'];
						$timesout = $_POST['str35'];
						$tmpID = $_POST['bkID'];				
						
						$updated_by = $_POST['updated_by'];
						$date_updated = date("Y-m-d H:i:s");

						if(isset($_POST['tr']) && $_POST['tr'] == 'tr'){
							$tr = 1;
						}
						else{
							$tr = 0;
						}  	

						if(isset($_POST['fr']) && $_POST['fr'] == 'fr'){
							$fr = 1;
						}
						else{
							$fr = 0;
						}						
						if(isset($_POST['circ']) && $_POST['circ'] == 'circ'){
							$circ = 1;
						}
						else{
							$circ = 0;
						}						
						if(isset($_POST['ref']) && $_POST['ref'] == 'ref'){
							$ref = 1;
						}
						else{
							$ref = 0;
						}								
						if(isset($_POST['fil']) && $_POST['fil'] == 'fil'){
							$fil = 1;
						}
						else{
							$fil = 0;
						}	
						if(isset($_POST['sm']) && $_POST['sm'] == 'sm'){
							$sm = 1;
						}
						else{
							$sm = 0;
						}						
						if(isset($_POST['bio']) && $_POST['bio'] == 'bio'){
							$bio = 1;
						}
						else{
							$bio = 0;
						}						
						if(isset($_POST['res']) && $_POST['res'] == 'res') {
							$res = 1;
						}
						else{
							$res = 0;
						}	
						if(isset($_POST['res']) && $_POST['res'] == 'res'){
							$res = 1;
						}
						else{
							$res = 0;
						}	
						if(isset($_POST['schl']) && $_POST['schl'] == 'schl') {
							$schl = 1;
						}
						else{
							$schl = 0;
						}							
						if(isset($_POST['easy']) && $_POST['easy'] == 'easy') {
							$easy = 1;
						}
						else{
							$easy = 0;
						}	
						if(isset($_POST['fic']) && $_POST['fic'] == 'fic') {
							$fic = 1;
						}
						else{
							$fic = 0;
						}
						if(isset($_POST['gc']) && $_POST['gc'] == 'gc') {
							$gc = 1;
						}
						else{
							$gc = 0;
						}
						
						$creator = $_POST['str3'];
						$otherCreator = $_POST['str5'];
						$datePublication = $_POST['str10'];

						if(isset($_POST['str19'])){
							$subj1 = trim($_POST['str19']) . '; ';
						}
						else{
							$subj1 = "";
						}

						if(isset($_POST['str20'])){
							$subj2 = $subj1 . trim($_POST['str20']) . '; ';
						}
						else {
							$subj2 = $subj1;
						}
						if(isset($_POST['str21'])){
							$subj3 = $subj2 . trim($_POST['str21']) . '; ';
						}
						else{
							$subj3 = $subj2;							
						}
						if(isset($_POST['str22'])){
							$subj4 = $subj3 . trim($_POST['str22']);
						}
						else
						{
							$subj4 = $subj3;
						}						

						{
	
						//$sql = " UPDATE books SET title='$title', maintext='$maintext', tm='$tm', tr='$tr', fr='$fr', circ='$circ', ref='$ref', fil='$fil', sm='$sm', bio='$bio', res='$res', schl='$schl', easy='$easy', fic='$fic', gc='$gc', ncopy='$copy', inn='$inn', t_out='$out', t_timesout='$timesout', updated_by='$updated_by', date_updated='$date_updated', images='$image' WHERE bkid = '$id' ";							
                        $sql = " UPDATE books SET title='$title', maintext='$maintext', tm='$tm', tr='$tr', fr='$fr', circ='$circ', ref='$ref', fil='$fil', sm='$sm', bio='$bio', res='$res', schl='$schl', easy='$easy', fic='$fic', gc='$gc', copy='$copy', inn='$inn', t_out='$out', t_timesout='$timesout', updated_by='$updated_by', date_updated='$date_updated', images='$image', author='$creator', other_author='$otherCreator', subject_entry='$subj4', date_publication='$datePublication' WHERE bkid = '$id' ";
						$sLink->exec($sql); 
						  
						echo "<script>alert('Successfully updated catalog information!'); window.location='list_of_book.php'</script>";
						}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
