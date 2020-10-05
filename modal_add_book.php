<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add new book record</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        
		<h4 class="modal-title" id="myModalLabel">Book and Manuscript Cataloguing Module</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
        
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">
                        
					  <div class="form-group">
						<label for="title" >Title proper:</label>
						<input type="text" name="str0" class="form-control" id="title" placeholder="Title..." required />

						<label for="responsibility" class="control-label" >Statement of responsibility:</label>
						<input type="text" name="str1" class="form-control" id="responsibility" placeholder="Responsibility..." />

						<label for="parallel" class="control-label">Parallel title:</label>
						<input type="text" name="str2" class="form-control" id="parallel" placeholder="Parallel....."  />	

						<label for="preferred" class="control-label" >Preferred title:</label>
						<input type="text" name="str36" class="form-control" id="preferred" placeholder="Preferred title....."  />

						<label for="main_creator" class="control-label" >Main creator:</label>
						<input type="text" name="str3" class="form-control" id="main_creator" placeholder="Main creator....."  />

						<label for="other_creator" class="control-label" >Other creator:</label>
						<input type="text" name="str5" class="form-control" id="other_creator" placeholder="Other creator....."  />

						<label for="contributors" class="control-label" >Contributor:</label>
  					    <input type="text" name="str6" class="form-control" id="contributors" placeholder="Contributors...."  />

						<label for="corporate_body" class="control-label" >Corporate body:</label>
 					    <input type="text" name="str7" class="form-control" id="corporate_body" placeholder="Corporate body....."  />

						<label for="place" class="control-label" >Place of publication:</label>
						<input type="text" name="str8" class="form-control" id="place" placeholder="Place of publication....."  />

						<label for="publisher" class="control-label" >Publisher:</label>
						<input type="text" name="str9" class="form-control" id="publisher" placeholder="Publisher....."  />

						<label for="date_of_publication" class="control-label" >Date of publication:</label>
						<input type="text" name="str10" class="form-control" id="date_of_publication" placeholder="Date of publication....."  />

						<label for="edition" class="control-label" >Edition statement:</label>
						<input type="text" name="str11" class="form-control" id="edition" placeholder="Edition....."  />

						<label for="extent" class="control-label" >Extent of text:</label>
						<input type="text" name="str12" class="form-control" id="extent" placeholder="Extent....."  />

						<label for="illustrative_content" class="control-label" >Illustrative content:</label>
						<input type="text" name="str13" class="form-control" id="illustrative_content" placeholder="Illustrative....."  />

						<label for="dimension" class="control-label" >Dimension:</label>
						<input type="text" name="str14" class="form-control" id="dimension" placeholder="Dimension....."  />

						<label for="accompanying_materials" class="control-label" >Accompanying materials:</label>
						<input type="text" name="str15" class="form-control" id="accompanying_materials" placeholder="Accompanying materials....."  />

						<label for="series" class="control-label" >Series title:</label>
						<input type="text" name="str16" class="form-control" id="series" placeholder="Series title....."  />

						<label for="supplementary" class="control-label" >Supplementary content:</label>
						<select name="str17" class="form-control" id="supplementary">
							<option value=""></option>							
							<option value="Includes bibliography">Includes bibliography</option>
							<option value="Includes index">Includes index</option>
							<option value="Includes bibliographical references">Includes bibliographical references</option>	
							<option value="Includes index and bibliographical references">Includes bibliographical references</option>																		
						</select>

						<label for="isbn" class="control-label" >Identifier/ISBN:</label>
						<input type="text" name="str18" class="form-control" id="isbn" placeholder="ISBN..."  />
							
						<label for="content_type" class="control-label" >Content type:</label>
						<input type="text" name="str38" value="Text" class="form-control" id="content_type" />

						<label for="media_type" class=" control-label" >Media type:</label>
						<input type="text" name="str39" value="Unmediated" class="form-control" id="media_type" />						

						<label for="carrier_type" class="control-label" >Carrier type:</label>
						<input type="text" name="str40" value="Volume" class="form-control" id="carrier_type" />							

						<label for="url" class="control-label" >URL:</label>
						<input type="text" name="str37" class="form-control" id="url" placeholder="URL...."  />

						<label for="topical" class="control-label" >Subject - Topical:</label>
						<input type="text" name="str19" class="form-control" id="topical" placeholder="Topical...."  />

						<label for="personal" class="control-label" >Subject - Personal:</label>
  				  		<input type="text" name="str20" class="form-control" id="personal" placeholder="Personal...."  />

						<label for="corporate" class="control-label" >Subject - Corporate:</label>
						<input type="text" name="str21" class="form-control" id="corporate" placeholder="Corporate...."  />

						<label for="geographical" class="control-label" >Subject - Geographical:</label>
						<input type="text" name="str22" class="form-control" id="geographical" placeholder="Geographical...."  />

						<label for="prefix" class="control-label" >Prefix:</label>
						<select name="str23" class="form-control" >
							<option ></option>						  
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

						<label for="call_number" class="control-label" >Call number:</label>
						<input type="text" name="str24" class="form-control" id="call_number" placeholder="Call number..." />

						<label for="accession" class="control-label" >Accession number:</label>
						<input type="text" name="str25" class="form-control" id="accession" placeholder="Accession number..." />

						<label for="language" class="control-label" >Language of text:</label>
						<input type="text" name="str26" class="form-control" id="language" placeholder="Language of text..." />

						<label for="location" class="control-label" >Library/Location:</label>
						<input type="text" name="str27" class="form-control" id="location" placeholder="Library..." />

						<label for="electronic_access" class="control-label" >Electronic access:</label>
						<input type="text" name="str28" class="form-control" id="electronic_access" placeholder="Electronic access..." />

						<label for="cover" class="control-label"  >Cover image location:</label>
						<input type="text" name="str41" class="form-control" id="cover" placeholder="Cover image..." />          
						<!--<input type="file" name="image" />   -->                       

						<label for="type_material" class="control-label" >Material type:</label	><br>				  
						  <input type="checkbox" name="gc" value="gc"  >General circulation
						  <input type="checkbox" name="tr" value="tr"  >Teacher reference
						  <input type="checkbox" name="fr" value="fr"  >Filipiniana/Reference
						  <input type="checkbox" name="circ" value="circ"  >Circulation <br>
						  <input type="checkbox" name="ref" value="ref"  >Reference
						  <input type="checkbox" name="fil" value="fil"  >Filipiniana 
						  <input type="checkbox" name="sm" value="sm" >Special collection
						  <input type="checkbox" name="bio" value="bio"  >Biography <br>
						  <input type="checkbox" name="res" value="res"  >Reserve 
						  <input type="checkbox" name="schl" value="schl"  >Scholastic
						  <input type="checkbox" name="easy" value="easy"  >Easy
						  <input type="checkbox" name="fic" value="fic"  >Fiction <br>
							
						<label for="content" class="control-label" >Content:</label>
						<textarea class="form-control" rows="5" id="content" name="str32"></textarea>
		
						<label for="abstract" class="control-label" >Abstract/Summary:</label>
						<textarea class="form-control" rows="5" id="abstract" name="str33"></textarea>

						<label for="review" class="control-label" >Review:</label>
						<textarea class="form-control" rows="5" id="review" name="str34"></textarea>

						<label for="copy" class="control-label" >Volume/Copy:</label>
						<input type="number" name="str29" class="form-control" id="copy" value = "1" />
						<!--
						<label for="entered_by" class="control-label" >Entered by:</label>
						<input type="text" name="entered_by" class="form-control" id="entered_by" placeholder="Entered by..." /> 
						-->
					  </div>					  

					  <div class="form-group" >
						<div class="buttonSave">
							<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
						  	<button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Save</button>
						</div>
					  </div>
					  
					</form>
					
						<?php 
						//include('include/database.php');
						include('connect.php');						
						if (isset($_POST['submit'])){
                            
							//if (!isset($_FILES['image']['tmp_name'])) {
							// echo "";
							//}
                            //else{
                            //    $file=$_FILES['image']['tmp_name'];
                            //    $image = $_FILES["image"] ["name"];
                             //   $image_name= addslashes($_FILES['image']['name']);
                            //    $size = $_FILES["image"] ["size"];
                            //    $error = $_FILES["image"] ["error"];
                           // }
							//if ($error > 0){
							//	die("Error uploading file! Code $error.");
				            //}
                            //else
                           // {
							//	if($size > 10000000) //conditions for the file
							//	{
							//	    die("Format is not allowed or file size is too big!");
							//	}
                                
							//	else{
							//	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
							//		$str41=$_FILES["image"]["name"];  
                            //    }
                           // }
                            
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
							//$maintext = $txtstr . "<0042>" . $str41 . ""; 
							$maintext = $txtstr . "<0042>" . $$_POST['str41'] . ""; 							
							$maintext = str_replace("'", "`", $maintext);
                            
							$title = $_POST['str0'];
							$title = str_replace("'", "`", $title);                           
							$charlength = strlen($title);
							if ($charlength > 400){
								$title = mb_substr($title,0,400,'UTF-8');                                  
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
							$inn = $_POST['str29'];						
							$out = 0;
							$timesout = 0;	
						
							$entered_by = $_SESSION['charger'];
							$updated_by = $_SESSION['charger']; 					
							$date_entered = date("Y-m-d H:i:s");						
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
							if(isset($_POST['res']) && $_POST['res'] == 'res'){
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
							if(isset($_POST['schl']) && $_POST['schl'] == 'schl'){
								$schl = 1;
							}
							else{
								$schl = 0;
							}							
							if(isset($_POST['easy']) && $_POST['easy'] == 'easy'){
								$easy = 1;
							}
							else{
								$easy = 0;
							}	
							if(isset($_POST['fic']) && $_POST['fic'] == 'fic'){
								$fic = 1;
							}
							else{
								$fic = 0;
							}
							if(isset($_POST['gc']) && $_POST['gc'] == 'gc'){
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
							else{
								$subj4 = $subj3;
							}							
				
							{                           
							$sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$sql = "INSERT INTO books (author,other_author,date_publication,subject_entry,title,maintext,tm,entered_by,updated_by,date_entered,date_updated,tr,fr,circ,ref,fil,sm,bio,res,schl,easy,fic,gc,copy,inn,t_out,t_timesout) VALUES ('$creator','$otherCreator','$datePublication','$subj4','$title','$maintext','$tm','$entered_by','$updated_by','$date_entered','$date_updated','$tr','$fr','$circ','$ref','$fil','$sm','$bio','$res','$schl','$easy','$fic','$gc','$copy','$inn','$out','$timesout')";
							$sLink->exec($sql); 

							}
							echo "<script>alert('Catalog information is successfully added!'); window.location='list_of_book.php'</script>";

						}
						?>
	  
			</div>

		</div>
  </div>
</div>