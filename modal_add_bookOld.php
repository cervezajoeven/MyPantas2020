<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Book</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Book and Manuscript Cataloguing Module</h4>
      </div>
        

        
        
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Title:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" class="form-control" id="title" placeholder="Title....." required />
						</div>
					  </div>
					  
				    <div class="form-group">
						<label for="responsibility" class="col-sm-3 control-label" >Statement of responsibility:</label>
						<div class="col-sm-9">
						  <input type="text" name="str1" class="form-control" id="responsibility" placeholder="Responsibility....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="parallel" class="col-sm-3 control-label" >Parallel title:</label>
						<div class="col-sm-9">
						  <input type="text" name="str2" class="form-control" id="parallel" placeholder="Parallel....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="preferred" class="col-sm-3 control-label" >Preferred title:</label>
						<div class="col-sm-9">
						  <input type="text" name="str36" class="form-control" id="preferred" placeholder="Preferred title....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="main_creator" class="col-sm-3 control-label" >Main creator:</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" class="form-control" id="main_creator" placeholder="Main creator....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="other_creator" class="col-sm-3 control-label" >Other creator:</label>
						<div class="col-sm-9">
						  <input type="text" name="str5" class="form-control" id="other_creator" placeholder="Other creator....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="contributors" class="col-sm-3 control-label" >Contributor:</label>
						<div class="col-sm-9">
						  <input type="text" name="str6" class="form-control" id="contributors" placeholder="Contributors...."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="corporate_body" class="col-sm-3 control-label" >Corporate body:</label>
						<div class="col-sm-9">
						  <input type="text" name="str7" class="form-control" id="corporate_body" placeholder="Corporate body....."  />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="place" class="col-sm-3 control-label" >Place of publication:</label>
						<div class="col-sm-9">
						  <input type="text" name="str8" class="form-control" id="place" placeholder="Place of publication....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="publisher" class="col-sm-3 control-label" >Publisher:</label>
						<div class="col-sm-9">
						  <input type="text" name="str9" class="form-control" id="publisher" placeholder="Publisher....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="date_of_publication" class="col-sm-3 control-label" >Date of publication:</label>
						<div class="col-sm-9">
						  <input type="text" name="str10" class="form-control" id="date_of_publication" placeholder="Date of publication....."  />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="edition" class="col-sm-3 control-label" >Edition statement:</label>
						<div class="col-sm-9">
						  <input type="text" name="str11" class="form-control" id="edition" placeholder="Edition....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="extent" class="col-sm-3 control-label" >Extent of text:</label>
						<div class="col-sm-9">
						  <input type="text" name="str12" class="form-control" id="extent" placeholder="Extent....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="illustrative_content" class="col-sm-3 control-label" >Illustrative content:</label>
						<div class="col-sm-9">
						  <input type="text" name="str13" class="form-control" id="illustrative_content" placeholder="Illustrative....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="dimension" class="col-sm-3 control-label" >Dimension:</label>
						<div class="col-sm-9">
						  <input type="text" name="str14" class="form-control" id="dimension" placeholder="Dimension....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="accompanying_materials" class="col-sm-3 control-label" >Accompanying materials:</label>
						<div class="col-sm-9">
						  <input type="text" name="str15" class="form-control" id="accompanying_materials" placeholder="Accompanying materials....."  />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="series" class="col-sm-3 control-label" >Series title:</label>
						<div class="col-sm-9">
						  <input type="text" name="str16" class="form-control" id="series" placeholder="Series title....."  />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="supplementary" class="col-sm-3 control-label" >Supplementary content:</label>
						<div class="col-sm-9">
						  <input type="text" name="str17" class="form-control" id="supplementary" placeholder="Supplementary content....."  />
						</div>
					  </div>						  
					  
					  <div class="form-group">
						<label for="isbn" class="col-sm-3 control-label" >Identifier/ISBN:</label>
						<div class="col-sm-9">
						  <input type="text" name="str18" class="form-control" id="isbn" placeholder="ISBN....."  />
						</div>
					  </div>						  
					  
					  <div class="form-group">
						<label for="content_type" class="col-sm-3 control-label" >Content type:</label>
						<div class="col-sm-9">
						  <select name="str38" class="form-control" >
							<option value="content_type">Text</option>
			
						  </select>
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="media_type" class="col-sm-3 control-label" >Media type:</label>
						<div class="col-sm-9">
						  <select name="str39" class="form-control" >
							<option value="media_type">Unmediated</option>				
						  </select>
						</div>
					  </div>		

					  <div class="form-group">
						<label for="carrier_type" class="col-sm-3 control-label" >Carrier type:</label>
						<div class="col-sm-9">
						  <select name="str40" class="form-control" required>
							<option value="carrier_type">Volume</option>				
						  </select>
						</div>
					  </div>

					  <div class="form-group">
						<label for="url" class="col-sm-3 control-label" >URL:</label>
						<div class="col-sm-9">
						  <input type="text" name="str37" class="form-control" id="url" placeholder="URL...."  />
						</div>
					  </div>	
					  
					  <div class="form-group">
						<label for="topical" class="col-sm-3 control-label" >Subject - Topical:</label>
						<div class="col-sm-9">
						  <input type="text" name="str19" class="form-control" id="topical" placeholder="Topical...."  />
						</div>
					  </div>						  
					  
					  <div class="form-group">
						<label for="personal" class="col-sm-3 control-label" >Subject - Personal:</label>
						<div class="col-sm-9">
						  <input type="text" name="str20" class="form-control" id="personal" placeholder="Personal...."  />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="corporate" class="col-sm-3 control-label" >Subject - Corporate:</label>
						<div class="col-sm-9">
						  <input type="text" name="str21" class="form-control" id="corporate" placeholder="Corporate...."  />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="geographical" class="col-sm-3 control-label" >Subject - Geographical:</label>
						<div class="col-sm-9">
						  <input type="text" name="str22" class="form-control" id="geographical" placeholder="Geographical...."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="prefix" class="col-sm-3 control-label" >Prefix:</label>
						<div class="col-sm-9">
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
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="call_number" class="col-sm-3 control-label" >Call number:</label>
						<div class="col-sm-9">
						  <input type="text" name="str24" class="form-control" id="call_number" placeholder="Call number...." />
						</div>
					  </div>

					  <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Accession number:</label>
						<div class="col-sm-9">
						  <input type="text" name="str25" class="form-control" id="accession" placeholder="Accession number...." />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="language" class="col-sm-3 control-label" >Language of text:</label>
						<div class="col-sm-9">
						  <input type="text" name="str26" class="form-control" id="language" placeholder="Language of text...." />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="location" class="col-sm-3 control-label" >Library/Location:</label>
						<div class="col-sm-9">
						  <input type="text" name="str27" class="form-control" id="location" placeholder="Library...." />
						</div>
					  </div>	
					  
					  <div class="form-group">
						<label for="electronic_access" class="col-sm-3 control-label" >Electronic access:</label>
						<div class="col-sm-9">
						  <input type="text" name="str28" class="form-control" id="electronic_access" placeholder="Electronic access...." />
						</div>
					  </div>						  
					  
					  <div class="form-group">
						<label for="cover" class="col-sm-3 control-label"  >Cover image:</label>
						<div class="col-sm-9">
						  <input type="hidden" name="str41" class="form-control" id="cover" placeholder="Cover image..." />    
                          <input type="file" name="image" />                          
						</div>
					  </div>		
                        
              
					  					  
					  <div class="form-group">		
						<label for="type_material" class="col-sm-3 control-label" >Material type:</label>				  
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="gc" value="gc"  >General circulation</div>
						  <div class="col-sm-4"><input type="checkbox" name="tr" value="tr"  >Teacher reference</div>
						</div>	
						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="fr" value="fr"  >Filipiniana/Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="circ" value="circ"  >Circulation</div>
						</div>						

						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="ref" value="ref"  >Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="fil" value="fil"  >Filipiniana</div>
						</div>	

						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="sm" value="sm" >Special collection</div>
						  <div class="col-sm-4"><input type="checkbox" name="bio" value="bio"  >Biography</div>
						</div>	
						
						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="res" value="res"  >Reserve</div>
						  <div class="col-sm-4"><input type="checkbox" name="schl" value="schl"  >Scholastic</div>
						</div>		
						
						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="easy" value="easy"  >Easy</div>
						  <div class="col-sm-4"><input type="checkbox" name="fic" value="fic"  >Fiction</div>
						</div>							
					  </div>							  

					  <div class="form-group">
						<label for="content" class="col-sm-3 control-label" >Content:</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" id="content" name="str32"></textarea>
						</div>
					  </div>						  

					  <div class="form-group">
						<label for="abstract" class="col-sm-3 control-label" >Abstract/Summary:</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" id="abstract" name="str33"></textarea>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="review" class="col-sm-3 control-label" >Review:</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" id="review" name="str34"></textarea>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="copy" class="col-sm-3 control-label" >Volume/Copy:</label>
						<div class="col-sm-9">
						  <input type="number" name="str29" class="form-control" id="copy" value = "1" />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="entered_by" class="col-sm-3 control-label" >Entered by:</label>
						<div class="col-sm-9">
						  <input type="text" name="entered_by" class="form-control" id="entered_by" placeholder="Entered by..." />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>




						<div class="col-sm-9">
						
							<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

						  	<button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Save</button>
						</div>
					  </div>
					  
					</form>
					
						<?php 
						//include('include/database.php');
						include('connect.php');						
						if (isset($_POST['submit'])){
                            
							if (!isset($_FILES['image']['tmp_name'])) {
							 echo "";
							}
                            else{
                                $file=$_FILES['image']['tmp_name'];
                                $image = $_FILES["image"] ["name"];
                                $image_name= addslashes($_FILES['image']['name']);
                                $size = $_FILES["image"] ["size"];
                                $error = $_FILES["image"] ["error"];
                            }
							if ($error > 0){
								die("Error uploading file! Code $error.");
				            }
                            else
                            {
								if($size > 10000000) //conditions for the file
								{
								    die("Format is not allowed or file size is too big!");
								}
                                
								else
								{
  
								move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$str41=$_FILES["image"]["name"];  
                                }
                            }
                            
                            
							
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
						$maintext = $txtstr . "<0042>" . $str41 . ""; 
						//$maintext = $txtstr . "<0042>" . $_POST['str41'] . ""; 
                        //$maintext = addslashes($maintext);
                        $maintext = str_replace("'", "`", $maintext);
                            
						$title = $_POST['str0'];
                        //$title = addslashes($title);                      
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
						//$inn = $_POST['str30'];
						$inn = $_POST['str29'];						
						$out = 0; //$_POST['str31'];
						$timesout = 0; //$_POST['str35'];		
						
                        $entered_by = $_SESSION['charger'];
                        $updated_by = $_SESSION['charger']; 
												
						//$date1 = strtr($_POST['date_entered'], '/', '-');
						//$date_entered = date('Y-m-d', strtotime($date1));
						$date_entered = date("Y-m-d H:i:s");						
						//$date2 = strtr($_POST['date_updated'], '/', '-');
						//$date_updated = date('Y-m-d', strtotime($date2));
						$date_updated = date("Y-m-d H:i:s");
						
						if(isset($_POST['tr']) && $_POST['tr'] == 'tr') 
						{
							$tr = 1;
						}
						else
						{
							$tr = 0;
						}  	

						if(isset($_POST['fr']) && $_POST['fr'] == 'fr') 
						{
							$fr = 1;
						}
						else
						{
							$fr = 0;
						}						
						if(isset($_POST['circ']) && $_POST['circ'] == 'circ') 
						{
							$circ = 1;
						}
						else
						{
							$circ = 0;
						}						
						if(isset($_POST['ref']) && $_POST['ref'] == 'ref') 
						{
							$ref = 1;
						}
						else
						{
							$ref = 0;
						}								
						if(isset($_POST['fil']) && $_POST['fil'] == 'fil') 
						{
							$fil = 1;
						}
						else
						{
							$fil = 0;
						}	
						if(isset($_POST['sm']) && $_POST['sm'] == 'sm') 
						{
							$sm = 1;
						}
						else
						{
							$sm = 0;
						}						
						if(isset($_POST['bio']) && $_POST['bio'] == 'bio') 
						{
							$bio = 1;
						}
						else
						{
							$bio = 0;
						}						
						if(isset($_POST['res']) && $_POST['res'] == 'res') 
						{
							$res = 1;
						}
						else
						{
							$res = 0;
						}	
						if(isset($_POST['res']) && $_POST['res'] == 'res') 
						{
							$res = 1;
						}
						else
						{
							$res = 0;
						}	
						if(isset($_POST['schl']) && $_POST['schl'] == 'schl') 
						{
							$schl = 1;
						}
						else
						{
							$schl = 0;
						}							
						if(isset($_POST['easy']) && $_POST['easy'] == 'easy') 
						{
							$easy = 1;
						}
						else
						{
							$easy = 0;
						}	
						if(isset($_POST['fic']) && $_POST['fic'] == 'fic') 
						{
							$fic = 1;
						}
						else
						{
							$fic = 0;
						}
						if(isset($_POST['gc']) && $_POST['gc'] == 'gc') 
						{
							$gc = 1;
						}
						else
						{
							$gc = 0;
						}						
						
						{
                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO books (title,maintext,tm,images,entered_by,updated_by,date_entered,date_updated,tr,fr,circ,ref,fil,sm,bio,res,schl,easy,fic,gc,ncopy,inn,t_out,t_timesout) VALUES ('$title','$maintext','$tm','$image','$entered_by','$updated_by','$date_entered','$date_updated','$tr','$fr','$circ','$ref','$fil','$sm','$bio','$res','$schl','$easy','$fic','$gc','$copy','$inn','$out','$timesout')";
                        $sLink->exec($sql); 
						}
						echo "<script>alert('Catalog information is successfully added!'); window.location='list_of_book.php'</script>";
						 
						}
						?>
	  
			</div>

		</div>
  </div>
</div>