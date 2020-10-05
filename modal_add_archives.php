<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Archives Record</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Archival Description Module</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
        
      <div class="modal-body">          

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">
                        
                        
					  <div class="form-group">
						<label for="Reference_code" class="col-sm-3 control-label" >Reference code:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>" class="form-control" id="Reference_code" placeholder="Reference code....." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="Title" class="col-sm-3 control-label" >Title:</label>
						<div class="col-sm-9">
						  <input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" class="form-control" id="Title" placeholder="Title....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="Date" class="col-sm-3 control-label" >Date(s):</label>
						<div class="col-sm-9">
						  <input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" class="form-control" id="Date(s)" placeholder="Date coverage....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="level" class="col-sm-3 control-label" >Level of description:</label>
						<div class="col-sm-9">
						  <select name="str3" id="level" class="form-control" >
                           <option><?php echo $TitleStr[4]; ?></option>						  
                           <option>Depository
                           <option>Sub-depository
                           <option>Sub-sub-depository
                           <option>Fonds
                           <option>Sub-fonds
                           <option>Sub-sub-fonds
                           <option>Series
                           <option>Sub-series
                           <option>Sub-sub-series
                           <option>Files
                           <option>Items       
						  </select>
						</div>
					  </div>                        
					  
 					  <div class="form-group">
						<label for="Extent" class="col-sm-3 control-label" >Extent/Form:</label>
						<div class="col-sm-9">
						  <input type="text" name="str4" value="<?php echo $TitleStr[5]; ?>" class="form-control" id="Extent" placeholder="Extent and Form....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="creator" class="col-sm-3 control-label" >Name of creator:</label>
						<div class="col-sm-9">
						  <input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" class="form-control" id="creator" placeholder="Name of creator....."  />
						</div>
					  </div>
                        
   					  <div class="form-group">
						<label for="admin_history" class="col-sm-3 control-label" >Administrative or Biographical history:</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" id="admin_history" name="str6"><?php echo $TitleStr[7]; ?></textarea>
						</div>
					  </div>                     
                        
    				  <div class="form-group">
						<label for="archival_history" class="col-sm-3 control-label" >Archival history:</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" id="archival_history" name="str7"><?php echo $TitleStr[8]; ?></textarea>
						</div>
					  </div>                       
                                            
					  <div class="form-group">
						<label for="Source" class="col-sm-3 control-label" >Source or Transfer:</label>
						<div class="col-sm-9">
						  <input type="text" name="str8" value="<?php echo $TitleStr[9]; ?>" class="form-control" id="Source" placeholder="Source or Transfer....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="Scope" class="col-sm-3 control-label" >Scope and content:</label>
						<div class="col-sm-9">
						  <input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" class="form-control" id="Scope" placeholder="Scope and content....."  />
						</div>
					  </div>
                        
                        
  					  <div class="form-group">
						<label for="Appraisal" class="col-sm-3 control-label" >Appraisal:</label>
						<div class="col-sm-9">
						  <input type="text" name="str10" value="<?php echo $TitleStr[11]; ?>" class="form-control" id="Appraisal" placeholder="Appraisal....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="Accruals" class="col-sm-3 control-label" >Accruals:</label>
						<div class="col-sm-9">
						  <input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>" class="form-control" id="Accruals" placeholder="Accruals....."  />
						</div>
					  </div>  
                                         
 					  <div class="form-group">
						<label for="Arrangement" class="col-sm-3 control-label" >Arrangement:</label>
						<div class="col-sm-9">
						  <input type="text" name="str12" value="<?php echo $TitleStr[13]; ?>" class="form-control" id="Arrangement" placeholder="Arrangement....."  />
						</div>
					  </div>                       
                        
 					  <div class="form-group">
						<label for="Access_condition" class="col-sm-3 control-label" >Access condition:</label>
						<div class="col-sm-9">
						  <input type="text" name="str13" value="<?php echo $TitleStr[14]; ?>" class="form-control" id="Access_condition" placeholder="Access condition....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="Reproduction" class="col-sm-3 control-label" >Reproduction condition:</label>
						<div class="col-sm-9">
						  <input type="text" name="str14" value="<?php echo $TitleStr[15]; ?>" class="form-control" id="Reproduction" placeholder="Reproduction condition....."  />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="Language" class="col-sm-3 control-label" >Language:</label>
						<div class="col-sm-9">
						  <input type="text" name="str15" value="<?php echo $TitleStr[16]; ?>" class="form-control" id="Language" placeholder="Language....."  />
						</div>
					  </div>
                        
    				  <div class="form-group">
						<label for="Physical_characteristics" class="col-sm-3 control-label" >Physical characteristics:</label>
						<div class="col-sm-9">
						  <input type="text" name="str16" value="<?php echo $TitleStr[17]; ?>" class="form-control" id="Physical_characteristics" placeholder="Physical characteristics....."  />
						</div>
					  </div>                        
                       
      		         <div class="form-group">
						<label for="Finding_aids" class="col-sm-3 control-label" >Finding aids:</label>
						<div class="col-sm-9">
						  <input type="text" name="str17" value="<?php echo $TitleStr[18]; ?>" class="form-control" id="Finding_aids" placeholder="Finding aids....."  />
						</div>
					  </div>
                        
       		         <div class="form-group">
						<label for="Location_originals" class="col-sm-3 control-label" >Location of originals:</label>
						<div class="col-sm-9">
						  <input type="text" name="str18" value="<?php echo $TitleStr[19]; ?>" class="form-control" id="Location_originals" placeholder="Location of originals....."  />
						</div>
					  </div>                          
                                              
        		      <div class="form-group">
						<label for="Existence_copies" class="col-sm-3 control-label" >Existence of copies:</label>
						<div class="col-sm-9">
						  <input type="text" name="str19" value="<?php echo $TitleStr[20]; ?>" class="form-control" id="Existence_copies" placeholder="Existence of copies....."  />
						</div>
					  </div>    
                        
         		      <div class="form-group">
						<label for="Related_units" class="col-sm-3 control-label" >Related units:</label>
						<div class="col-sm-9">
						  <input type="text" name="str20" value="<?php echo $TitleStr[21]; ?>" class="form-control" id="Related_units" placeholder="Related units....."  />
						</div>
					  </div>
                        
          		      <div class="form-group">
						<label for="Publication_notes" class="col-sm-3 control-label" >Publication notes:</label>
						<div class="col-sm-9">
						  <input type="text" name="str21" value="<?php echo $TitleStr[22]; ?>" class="form-control" id="Publication_notes" placeholder="Publication notes....."  />
						</div>
					  </div>  
                        
 					  <div class="form-group">
						<label for="Note" class="col-sm-3 control-label" >Note:</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" id="Note" name="str22"><?php echo $TitleStr[23]; ?></textarea>
						</div>
					  </div>
                          
 					  <div class="form-group">
						<label for="archivist_note" class="col-sm-3 control-label" >Archivist note:</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" id="archivist_note" name="str23"><?php echo $TitleStr[24]; ?></textarea>
						</div>
					  </div>                       
                           
            		  <div class="form-group">
						<label for="Rules_Conventions" class="col-sm-3 control-label" >Rules/Conventions:</label>
						<div class="col-sm-9">
						  <input type="text" name="str24" value="<?php echo $TitleStr[25]; ?>" class="form-control" id="Rules_Conventions" placeholder="Rules and Conventionss....."  />
						</div>
					  </div>       
                        
                        <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-9">
						  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Save</button>
						</div>
					  </div>
					</form>
					
						<?php 

						include('connect.php');						
						if (isset($_POST['submit'])){
							
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
                            $txtstr = $txtstr . "<0014>" . $_POST['str13'] . ""; //'pages/extent                         
                            $txtstr = $txtstr . "<0015>" . $_POST['str14'] . ""; //'edition
                            $txtstr = $txtstr . "<0016>" . $_POST['str15'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0017>" . $_POST['str16'] . ""; //'pages/extent  
                            
                            $txtstr = $txtstr . "<0018>" . $_POST['str17'] . ""; //'corporate author
                            $txtstr = $txtstr . "<0019>" . $_POST['str18'] . ""; //'place of publication
                            $txtstr = $txtstr . "<0020>" . $_POST['str19'] . ""; //'publisher
                            $txtstr = $txtstr . "<0021>" . $_POST['str20'] . ""; //'year of publication
                            $txtstr = $txtstr . "<0022>" . $_POST['str21'] . ""; //'edition
                            $txtstr = $txtstr . "<0023>" . $_POST['str22'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0024>" . $_POST['str23'] . ""; //'pages/extent
                            $maintext = $txtstr . "<0025>" . $_POST['str24'] . ""; 
                            $maintext = str_replace("'", "`", $maintext);
                            
						    $title = $_POST['str1'];
                            $title = str_replace("'", "`", $title);                           
                            $charlength = strlen($title);
                            if ($charlength > 250){
                                $title = mb_substr($title,0,250,'UTF-8');                                  
                            }                            
                            $level = $_POST['str3'];

                            //$entered_by = $_POST['entered_by'];
                            //$updated_by = $_POST['entered_by'];
                            $entered_by = $_SESSION['charger'];
                            $updated_by = $_SESSION['charger'];                            

                            //$date1 = strtr($_POST['date_entered'], '/', '-');
                            //$date_entered = date('Y-m-d', strtotime($date1));
                            $date_entered = date("Y-m-d H:i:s");						
                            //$date2 = strtr($_POST['date_updated'], '/', '-');
                            //$date_updated = date('Y-m-d', strtotime($date2));
                            $date_updated = date("Y-m-d H:i:s");
                            {
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO txtarchive (title,maintext,level,entered_by,updated_by,date_entered,date_updated)VALUES ('$title','$maintext','$level','$entered_by','$updated_by','$date_entered','$date_updated')";

                            $sLink->exec($sql);                            
                            
                            //mysql_query ("INSERT INTO txtarchive (title,maintext,level,entered_by,updated_by,date_entered,date_updated)VALUES ('$title','$maintext','$level','$entered_by','$updated_by','$date_entered','$date_updated')")or die(mysql_error());
                            }
                            echo "<script>alert('Archival description is successfully added!'); window.location='list_of_archives.php'</script>";
                        
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>