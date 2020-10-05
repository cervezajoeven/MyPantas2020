<?php include('header.php'); 


$id=$_GET['bkid'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Audio-Visual Material</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT AUDIO-VISUAL MATERIAL CATALOG INFORMATION</h2>

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
						<a href="list_of_av.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
    $stmt = $sLink->query("select * from books where bkid='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);                  
	//$query=mysql_query("select * from books where bkid='$id'")or die(mysql_error());
	//$row=mysql_fetch_array($query);

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
                
    $TitleStr[1] = str_replace(chr(34), "", $TitleStr[1]);    
	
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
	
  ?>

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Title:</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>" class="form-control" id="title" placeholder="Title....." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="responsibility" class="col-sm-3 control-label" >Statement of responsibility:</label>
						<div class="col-sm-7">
						  <input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" class="form-control" id="responsibility" placeholder="Responsibility....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="parallel" class="col-sm-3 control-label" >Parallel title:</label>
						<div class="col-sm-7">
						  <input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" class="form-control" id="parallel" placeholder="Parallel....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="preferred" class="col-sm-3 control-label" >Preferred title:</label>
						<div class="col-sm-7">
						  <input type="text" name="str4" value="<?php echo $TitleStr[5]; ?>" class="form-control" id="preferred" placeholder="Preferred title....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="main_creator" class="col-sm-3 control-label" >Main creator:</label>
						<div class="col-sm-7">
						  <input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>" class="form-control" id="main_creator" placeholder="Main creator....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="other_creator" class="col-sm-3 control-label" >Other creator:</label>
						<div class="col-sm-7">
						  <input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" class="form-control" id="other_creator" placeholder="Other creator....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="contributors" class="col-sm-3 control-label" >Contributor:</label>
						<div class="col-sm-7">
						  <input type="text" name="str6" value="<?php echo $TitleStr[7]; ?>" class="form-control" id="contributors" placeholder="Contributors...."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="corporate_body" class="col-sm-3 control-label" >Corporate body:</label>
						<div class="col-sm-7">
						  <input type="text" name="str7" value="<?php echo $TitleStr[8]; ?>" class="form-control" id="corporate_body" placeholder="Corporate body....."  />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="place" class="col-sm-3 control-label" >Place of publication:</label>
						<div class="col-sm-7">
						  <input type="text" name="str8" value="<?php echo $TitleStr[9]; ?>" class="form-control" id="place" placeholder="Place of publication....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="publisher" class="col-sm-3 control-label" >Publisher:</label>
						<div class="col-sm-7">
						  <input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" class="form-control" id="publisher" placeholder="Publisher....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="date_of_publication" class="col-sm-3 control-label" >Date of publication:</label>
						<div class="col-sm-7">
						  <input type="text" name="str10" value="<?php echo $TitleStr[11]; ?>" class="form-control" id="date_of_publication" placeholder="Date of publication....."  />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="edition" class="col-sm-3 control-label" >Edition statement:</label>
						<div class="col-sm-7">
						  <input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>" class="form-control" id="edition" placeholder="Edition....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="mda" class="col-sm-3 control-label" >TERA/MDA:</label>
						<div class="col-sm-7">
						  <input type="text" name="str12" value="<?php echo $TitleStr[13]; ?>" class="form-control" id="mda" placeholder="TERA or MDA....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="description" class="col-sm-3 control-label" >Description:</label>
						<div class="col-sm-7">
						  <input type="text" name="str13" value="<?php echo $TitleStr[14]; ?>" class="form-control" id="description" placeholder="Description....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="supplement" class="col-sm-3 control-label" >Supplementary materials:</label>
						<div class="col-sm-7">
						  <input type="text" name="str14" value="<?php echo $TitleStr[15]; ?>" class="form-control" id="dimension" placeholder="Supplementary materials....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="series" class="col-sm-3 control-label" >Series title:</label>
						<div class="col-sm-7">
						  <input type="text" name="str15" value="<?php echo $TitleStr[16]; ?>" class="form-control" id="series" placeholder="Series title....."  />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="notes" class="col-sm-3 control-label" >General notes:</label>
						<div class="col-sm-7">
						  <input type="text" name="str16" value="<?php echo $TitleStr[17]; ?>" class="form-control" id="notes" placeholder="General notes....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="isbn" class="col-sm-3 control-label" >Identifier/ISBN:</label>
						<div class="col-sm-7">
						  <input type="text" name="str17" value="<?php echo $TitleStr[18]; ?>" class="form-control" id="isbn" placeholder="ISBN....."  />
						</div>
					  </div>                       
					  
					  
					  <div class="form-group">
						<label for="content" class="col-sm-3 control-label" >Content type:</label>
						<div class="col-sm-7">
						  <select name="str38" class="form-control" >
							<option ><?php echo $TitleStr[39]; ?></option>						  
                              <option>cartographic dataset</option>
                              <option>cartographic image</option>
                              <option>cartographic moving image</option>
                              <option>cartographic tactile image</option>
                              <option>cartographic tactile three-dimensional form</option>
                              <option>cartographic three-dimensional form</option>
                              <option>computer dataset</option>
                              <option>computer program</option>
                              <option>notated movement</option>
                              <option>notated music</option>
                              <option>performed music</option>
                              <option>sounds</option>
                              <option>spoken word</option>
                              <option>still image</option>
                              <option>tactile image</option>
                              <option>tactile notated music</option>
                              <option>tactile notated movement</option>
                              <option>tactile text</option>
                              <option>tactile  three-dimensional form</option>
                              <option>text</option>
                              <option>three-dimensional form</option>
                              <option>three-dimensional moving image</option>
                              <option>two-dimensional moving image</option>
                              <option>other</option>
                              <option>unspecified</option>		
						  </select>
						</div>
					  </div>					  
						  
					  <div class="form-group">
						<label for="media" class="col-sm-3 control-label" >Media type:</label>
						<div class="col-sm-7">
						  <select name="str39" class="form-control" >
							<option ><?php echo $TitleStr[40]; ?></option>						  
                              <option>audio</option>
                              <option>computer</option>
                              <option>microform</option>
                              <option>microscopic</option>
                              <option>projected</option>
                              <option>stereographic</option>
                              <option>unmediated</option>
                              <option>video</option>
                              <option>other</option>
                              <option>unspecified</option>
						  </select>
						</div>
					  </div>				  
	
					  <div class="form-group">
						<label for="carrier" class="col-sm-3 control-label" >Carrier type:</label>
						<div class="col-sm-7">
						  <select name="str18" class="form-control" >
							<option ><?php echo $TitleStr[19]; ?></option>						  
                            <option>audio cartridge</option>
                            <option>audio cylinder</option>
                            <option>audio disc</option>
                            <option>aperture card</option>
                            <option>audio roll</option>
                            <option>audio cassette</option>
                            <option>audio tape reel</option>
                            <option>card</option>
                            <option>computer card</option>
                            <option>computer chip cartridge</option>
                            <option>computer disc</option>
                            <option>computer disc cartridge</option>
                            <option>computer tape cartridge</option>
                            <option>computer tape cassette</option>
                            <option>computer tape reel</option>
                            <option>film cartridge</option>
                            <option>film cassette</option>
                            <option>film reel</option>
                            <option>film roll</option>
                            <option>filmslip</option>
                            <option>filmstrip</option>
                            <option>filmstrip cartridge</option>
                            <option>flipchart</option>
                            <option>microfiche</option>
                            <option>microfiche cassette</option>
                            <option>microfilm cartridge</option>
                            <option>microfilm cassette</option>
                            <option>microfilm reel</option>
                            <option>microfilm roll</option>
                            <option>microfilm slip</option>
                            <option>microopaque</option>
                            <option>microscope slide</option>
						  </select>
						</div>
					  </div>	

					  <div class="form-group">
						<label for="url" class="col-sm-3 control-label" >URL:</label>
						<div class="col-sm-7">
						  <input type="text" name="str37" value="<?php echo $TitleStr[38]; ?>" class="form-control" id="url" placeholder="URL...."  />
						</div>
					  </div>	
					  
					  <div class="form-group">
						<label for="topical" class="col-sm-3 control-label" >Subject - Topical:</label>
						<div class="col-sm-7">
						  <input type="text" name="str19" value="<?php echo $TitleStr[20]; ?>" class="form-control" id="topical" placeholder="Topical...."  />
						</div>
					  </div>						  
					  
					  <div class="form-group">
						<label for="personal" class="col-sm-3 control-label" >Subject - Personal:</label>
						<div class="col-sm-7">
						  <input type="text" name="str20" value="<?php echo $TitleStr[21]; ?>" class="form-control" id="personal" placeholder="Personal...."  />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="corporate" class="col-sm-3 control-label" >Subject - Corporate:</label>
						<div class="col-sm-7">
						  <input type="text" name="str21" value="<?php echo $TitleStr[22]; ?>"  class="form-control" id="corporate" placeholder="Corporate...."  />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="geographical" class="col-sm-3 control-label" >Subject - Geographical:</label>
						<div class="col-sm-7">
						  <input type="text" name="str22" value="<?php echo $TitleStr[23]; ?>" class="form-control" id="geographical" placeholder="Geographical...."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="prefix" class="col-sm-3 control-label" >Prefix:</label>
						<div class="col-sm-7">
						  <select name="str23" class="form-control" >
							<option ><?php echo $TitleStr[24]; ?></option>						  
                            <option>Betamax</option>
                            <option>CD-ROM</option>
                            <option>DVD</option>
                            <option>Map</option>
                            <option>Vinyl Record</option>
                            <option>Slide</option>
                            <option>Tape</option>
                            <option>VHS</option>
						  </select>
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="call_number" class="col-sm-3 control-label" >Call number:</label>
						<div class="col-sm-7">
						  <input type="text" name="str24" value="<?php echo $TitleStr[25]; ?>" class="form-control" id="call_number" placeholder="Call number...." />
						</div>
					  </div>

					  <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Accession:</label>
						<div class="col-sm-7">
						  <input type="text" name="str25" value="<?php echo $TitleStr[26]; ?>" class="form-control" id="accession" placeholder="Accession number...." />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="language" class="col-sm-3 control-label" >Language of text:</label>
						<div class="col-sm-7">
						  <input type="text" name="str26" value="<?php echo $TitleStr[27]; ?>" class="form-control" id="language" placeholder="Language of text...." />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="location" class="col-sm-3 control-label" >Library/Location:</label>
						<div class="col-sm-7">
						  <input type="text" name="str27" value="<?php echo $TitleStr[28]; ?>" class="form-control" id="location" placeholder="Library...." />
						</div>
					  </div>	
					  
					  <div class="form-group">
						<label for="electronic_access" class="col-sm-3 control-label" >Electronic access:</label>
						<div class="col-sm-7">
						  <input type="text" name="str28" value="<?php echo $TitleStr[29]; ?>" class="form-control" id="electronic_access" placeholder="Electronic access...." />
						</div>
					  </div>						  
					  
					  <div class="form-group">
						<label for="cover" class="col-sm-3 control-label"  >Cover image:</label>
						<div class="col-sm-7">
						  <input type="text" name="str40" value="<?php echo $TitleStr[41]; ?>" class="form-control" id="cover" placeholder="Cover image..." />
						</div>
					  </div>					  
					  					  
					  <div class="form-group">		
						<label for="type_material" class="col-sm-3 control-label" >Material type:</label>
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="ref" value="ref" <?php echo $refchecked; ?>>Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="fil" value="fil" <?php echo $filchecked; ?>>Filipiniana</div>
						</div>								
					  </div>							  

					  <div class="form-group">
						<label for="content" class="col-sm-3 control-label" >Content:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="content" name="str32"><?php echo $TitleStr[33]; ?></textarea>
						</div>
					  </div>						  

					  <div class="form-group">
						<label for="abstract" class="col-sm-3 control-label" >Abstract/Summary:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="abstract" name="str33"><?php echo $TitleStr[34]; ?></textarea>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="review" class="col-sm-3 control-label" >Review:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="review" name="str34"><?php echo $TitleStr[35]; ?></textarea>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="copy" class="col-sm-3 control-label" >Volume/Copy:</label>
						<div class="col-sm-7">
						  <input type="number" name="str29" value="<?php echo $row['inn']; ?>" class="form-control" id="copy" />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="on_shelf" class="col-sm-3 control-label" >On-shelf:</label>
						<div class="col-sm-4">
						  <input type="number" name="str30" value="<?php echo $row['inn']; ?>" class="form-control" id="on_shelf" value = "1" />
						</div>
					  </div>

					  <div class="form-group">
						<label for="out" class="col-sm-3 control-label" >Out:</label>
						<div class="col-sm-4">
						  <input type="number" name="str31" value="<?php echo $row['t_out']; ?>" class="form-control" id="out" value = "0"  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="times_out" class="col-sm-3 control-label" >Times out:</label>
						<div class="col-sm-4">
						  <input type="number" name="str35" value="<?php echo $row['t_timesout']; ?>" class="form-control" value = "0" id="times_out"  />
						</div>
					  </div>					  
					  

					  <div class="form-group">
						<label for="entered_by" class="col-sm-3 control-label" >Entered by:</label>
						<div class="col-sm-7">
						  <input type="text" name="entered_by" value="<?php echo $row['entered_by']; ?>" class="form-control" id="entered_by"  />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="updated_by" class="col-sm-3 control-label" >Updated by:</label>
						<div class="col-sm-7">
						  <input type="text" name="updated_by" value="<?php echo $row['updated_by']; ?>" class="form-control" id="updated_by"  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="date_entered" class="col-sm-3 control-label" >Date entered:</label>
						<div class="col-sm-7">
						  <input type="text" name="date_entered" value="<?php echo $row['date_entered']; ?>" class="form-control" id="date_entered"  />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="date_updated" class="col-sm-3 control-label" >Date updated:</label>
						<div class="col-sm-7">
						  <input type="text" name="date_updated" value="<?php echo $row['date_updated']; ?>" class="form-control" id="date_updated"  />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
					</form>
							
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
						$maintext = $txtstr . "<0041>" . $_POST['str40'] . ""; 
                        $maintext = str_replace("'", "`", $maintext);
						
						$title = $_POST['str0'];
                        $title = str_replace("'", "`", $title); 
                        $charlength = strlen($title);
                        if ($charlength > 400){
                            $title = mb_substr($title,0,400,'UTF-8');                                  
                        } 
						$image = $_POST['str40'];
						$tm = 'av';

						$ref = $_POST['ref']; //'type
						$fil = $_POST['fil']; //'type
					
						$copy = $_POST['str29'];
						$inn = $_POST['str30'];
						$out = $_POST['str31'];
						$timesout = $_POST['str35'];
						$tmpID = $_POST['bkID'];				
						
						$updated_by = $_POST['updated_by'];
						$date_updated = date("Y-m-d H:i:s");

						if(isset($_POST['ref']) && $_POST['ref'] == 'ref') 	{
							$ref = 1;
						}
						else{
							$ref = 0;
						}								
						if(isset($_POST['fil']) && $_POST['fil'] == 'fil') {
							$fil = 1;
						}
						else{
							$fil = 0;
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
						else{
							$subj4 = $subj3;
						}						

						{
    
                        $sql = " UPDATE books SET title='$title', maintext='$maintext', tm='$tm', ref='$ref', fil='$fil', copy='$copy', inn='$inn', t_out='$out', t_timesout='$timesout', updated_by='$updated_by', date_updated='$date_updated', images='$image', author='$creator', other_author='$otherCreator', subject_entry='$subj4', date_publication='$datePublication' WHERE bkid = '$id' ";
                        $sLink->exec($sql);

						echo "<script>alert('Successfully Updated Audio-visual material Catalog Information!'); window.location='list_of_av.php'</script>";
						}

				}

				?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
