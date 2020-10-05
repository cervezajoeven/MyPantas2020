<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Case Digest</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Case Digest Indexing</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>			
      </div>
        
      <div class="modal-body">          

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">
                        
                        
					  <div class="form-group">
						<label for="petitioner" class="col-sm-3 control-label" >Petitioner:</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>" class="form-control" id="petitioner" placeholder="Petitioner....." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="p_counsel" class="col-sm-3 control-label" >Petitioner counsel:</label>
						<div class="col-sm-7">
						  <input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" class="form-control" id="p_counsel" placeholder="Petitioner counsel....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="Respondent" class="col-sm-3 control-label" >Respondent:</label>
						<div class="col-sm-7">
						  <input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" class="form-control" id="Respondent" placeholder="Respondent....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="r_counsel" class="col-sm-3 control-label" >Respondent counsel:</label>
						<div class="col-sm-7">
						  <input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>" class="form-control" id="r_counsel" placeholder="Respondent counsel....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="Case" class="col-sm-3 control-label" >Case filed:</label>
						<div class="col-sm-7">
						  <input type="text" name="str4" value="<?php echo $TitleStr[5]; ?>" class="form-control" id="Case" placeholder="Case....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="Judge" class="col-sm-3 control-label" >Presiding Judge:</label>
						<div class="col-sm-7">
						  <input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" class="form-control" id="Judge" placeholder="Presiding Judge....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="Court" class="col-sm-3 control-label" >Court:</label>
						<div class="col-sm-7">
						  <input type="text" name="str6" value="<?php echo $TitleStr[7]; ?>" class="form-control" id="Court" placeholder="Court...."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="Decision" class="col-sm-3 control-label" >Decision:</label>
						<div class="col-sm-7">
						  <input type="text" name="str7" value="<?php echo $TitleStr[8]; ?>" class="form-control" id="Decision" placeholder="Decision...."  />
						</div>
					  </div>                     
                        
					  <div class="form-group">
						<label for="grnumber" class="col-sm-3 control-label" >G.R. number:</label>
						<div class="col-sm-7">
						  <input type="text" name="str8" value="<?php echo $TitleStr[9]; ?>" class="form-control" id="grnumber" placeholder="G.R. number....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="Source" class="col-sm-3 control-label" >Source:</label>
						<div class="col-sm-7">
						  <input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" class="form-control" id="Source" placeholder="Source....."  />
						</div>
					  </div>
                        
                        
  					  <div class="form-group">
						<label for="datefiled" class="col-sm-3 control-label" >Date filed:</label>
						<div class="col-sm-7">
						  <input type="text" name="str10" value="<?php echo $TitleStr[11]; ?>" class="form-control" id="datefiled" placeholder="Date filed....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="datepromulgated" class="col-sm-3 control-label" >Date promulgated:</label>
						<div class="col-sm-7">
						  <input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>" class="form-control" id="datepromulgated" placeholder="Date promulgated....."  />
						</div>
					  </div>  
                                         
 					  <div class="form-group">
						<label for="Status" class="col-sm-3 control-label" >Status:</label>
						<div class="col-sm-7">
						  <input type="text" name="str12" value="<?php echo $TitleStr[13]; ?>" class="form-control" id="Status" placeholder="Status....."  />
						</div>
					  </div>                       
                        
 					  <div class="form-group">
						<label for="subject" class="col-sm-3 control-label" >Subject/Keyword:</label>
						<div class="col-sm-7">
						  <input type="text" name="str13" value="<?php echo $TitleStr[14]; ?>" class="form-control" id="subject" placeholder="Subject or keyword....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="electronic_access" class="col-sm-3 control-label" >Electronic access:</label>
						<div class="col-sm-7">
						  <input type="text" name="str14" value="<?php echo $TitleStr[15]; ?>" class="form-control" id="electronic_access" placeholder="Electronic access....."  />
						</div>
					  </div>                        

					  <div class="form-group">
						<label for="Facts" class="col-sm-3 control-label" >Facts:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="Facts" name="str15"><?php echo $TitleStr[16]; ?></textarea>
						</div>
					  </div>
                        
                        
					  <div class="form-group">
						<label for="Issues" class="col-sm-3 control-label" >Issues:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="Issues" name="str16"><?php echo $TitleStr[17]; ?></textarea>
						</div>
					  </div>
                        
                        
					  <div class="form-group">
						<label for="Held" class="col-sm-3 control-label" >Held:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="Held" name="str17"><?php echo $TitleStr[18]; ?></textarea>
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
                            $maintext = $txtstr . "<0018>" . $_POST['str17'] . ""; 
                            $maintext = str_replace("'", "`", $maintext);                          

						    $title = $_POST['str0'] . ' vs ' . $_POST['str2'];
                            $title = str_replace("'", "`", $title);                           
                            $charlength = strlen($title);
                            if ($charlength > 250){
                                $title = mb_substr($title,0,250,'UTF-8');                                  
                            } 
                            $tm = 'ca';

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
                            $sql = "INSERT INTO books (title,maintext,tm,entered_by,updated_by,date_entered,date_updated)VALUES ('$title','$maintext','$tm','$entered_by','$updated_by','$date_entered','$date_updated')";

                            $sLink->exec($sql); 
                            
                            //mysql_query ("INSERT INTO books (title,maintext,tm,entered_by,updated_by,date_entered,date_updated)VALUES ('$title','$maintext','$tm','$entered_by','$updated_by','$date_entered','$date_updated')")or die(mysql_error());
                            }
                            
                            echo "<script>alert('Case digest index information is successfully added!'); window.location='list_of_cases.php'</script>";
                        
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>