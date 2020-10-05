<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Courseworks</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">ACADEMIC RESEARCH AND COURSEWORKS</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
        
      <div class="modal-body">          

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">					

					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Title:</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>" class="form-control" id="title" placeholder="Title....." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="creator" class="col-sm-3 control-label" >Creator(s):</label>
						<div class="col-sm-7">
						  <input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" class="form-control" id="creator" placeholder="Creator or author....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="institution" class="col-sm-3 control-label" >Institution:</label>
						<div class="col-sm-7">
						  <input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" class="form-control" id="institution" placeholder="Institution....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="course" class="col-sm-3 control-label" >Program/Course:</label>
						<div class="col-sm-7">
						  <input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>" class="form-control" id="course" placeholder="Program or course....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="da_te" class="col-sm-3 control-label" >Date/Year:</label>
						<div class="col-sm-7">
						  <input type="text" name="str4" value="<?php echo $TitleStr[5]; ?>" class="form-control" id="da_te" placeholder="Date or year....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="description" class="col-sm-3 control-label" >Description:</label>
						<div class="col-sm-7">
						  <input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" class="form-control" id="description" placeholder="Description....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="call_number" class="col-sm-3 control-label" >Call number:</label>
						<div class="col-sm-7">
						  <input type="text" name="str6" value="<?php echo $TitleStr[7]; ?>" class="form-control" id="call_number" placeholder="Call number...."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Accession:</label>
						<div class="col-sm-7">
						  <input type="text" name="str7" value="<?php echo $TitleStr[8]; ?>" class="form-control" id="accession" placeholder="Accession....."  />
						</div>
					  </div>
                        
                      <div class="form-group">
						<label for="language" class="col-sm-3 control-label" >Language:</label>
						<div class="col-sm-7">
						  <input type="text" name="str8" value="<?php echo $TitleStr[9]; ?>" class="form-control" id="language" placeholder="Language....."  />
						</div>
					  </div>                       
                        
 					  <div class="form-group">
						<label for="location" class="col-sm-3 control-label" >Location:</label>
						<div class="col-sm-7">
						  <input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" class="form-control" id="location" placeholder="Location....."  />
						</div>
					  </div>                       
					  
					  <div class="form-group">
						<label for="mtype" class="col-sm-3 control-label" >Type of research:</label>
						<div class="col-sm-7">
						  <select name="str16" id="mtype" class="form-control" >
							<option><?php echo $TitleStr[17]; ?></option>						  
                            <option>Thesis</option>
                            <option>Business plan</option>
                            <option>Case study</option>
                            <option>Dissertation</option>
                            <option>Feasibility study</option>
                            <option>Special problem</option>
                            <option>Strategic management plan</option>
                            <option>Research project</option>      
                            </select>
						</div>
					  </div>	

					  <div class="form-group">
						<label for="electronic_access" class="col-sm-3 control-label" >Electronic access:</label>
						<div class="col-sm-7">
						  <input type="text" name="str10" value="<?php echo $TitleStr[11]; ?>" class="form-control" id="electronic_access" placeholder="Electronic access....."  />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="subject" class="col-sm-3 control-label" >Subject/Keyword:</label>
						<div class="col-sm-7">
						  <input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>" class="form-control" id="subject" placeholder="Subject or keyword....."  />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="copy" class="col-sm-3 control-label" >Copy:</label>
						<div class="col-sm-7">
						  <input type="number" name="str13" value="1" class="form-control" id="copy" />
						</div>
					  </div> 
                        
    				  <div class="form-group">
						<label for="shelf" class="col-sm-3 control-label" >On-shelf:</label>
						<div class="col-sm-7">
						  <input type="number" name="str14" value="1" class="form-control" id="shelf" />
						</div>
					  </div>
                        
     				  <div class="form-group">
						<label for="out" class="col-sm-3 control-label" >On-loan:</label>
						<div class="col-sm-7">
						  <input type="number" name="str15" value="0" class="form-control" id="out" />
						</div>
					  </div>
                        
      				  <div class="form-group">
						<label for="timesout" class="col-sm-3 control-label" >Times out:</label>
						<div class="col-sm-7">
						  <input type="number" name="str17" value="0" class="form-control" id="timesout" />
						</div>
					  </div>                        

					  <div class="form-group">
						<label for="abstract" class="col-sm-3 control-label" >Abstract/Summary:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="abstract" name="str12"><?php echo $TitleStr[13]; ?></textarea>
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
                            $txtstr = $txtstr . "<0014>" . $_POST['str13'] . ""; //'other details
                            $txtstr = $txtstr . "<0015>" . $_POST['str14'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0016>" . $_POST['str15'] . ""; //'other details   
                            $txtstr = $txtstr . "<0017>" . $_POST['str16'] . "";
                            $maintext = $txtstr . "<0018>" . $_POST['str17'] . "";   
                            $maintext = str_replace("'", "`", $maintext);                           

                            $title = $_POST['str0'];
                            $title = str_replace("'", "`", $title);                         
                            $charlength = strlen($title);
                            if ($charlength > 250){
                                $title = mb_substr($title,0,250,'UTF-8');                                  
                            } 
                            $tm = 'td';

                            $copy = $_POST['str13'];
                            $inn = $_POST['str14'];
                            $out = $_POST['str15'];
                            $timesout = $_POST['str17'];                      
                            
                            $entered_by = $_SESSION['charger']; //$_POST['entered_by'];
                            $updated_by = $_SESSION['charger']; //$_POST['entered_by'];

                            //$date1 = strtr($_POST['date_entered'], '/', '-');
                            //$date_entered = date('Y-m-d', strtotime($date1));
                            $date_entered = date("Y-m-d H:i:s");						
                            //$date2 = strtr($_POST['date_updated'], '/', '-');
                            //$date_updated = date('Y-m-d', strtotime($date2));
                            $date_updated = date("Y-m-d H:i:s");
                            {
                            
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO books (title,maintext,tm,entered_by,updated_by,date_entered,date_updated,copy,inn,t_out,t_timesout)VALUES ('$title','$maintext','$tm','$entered_by','$updated_by','$date_entered','$date_updated','$copy','$inn','$out','$timesout')";

                            $sLink->exec($sql);                          
                            
                            //mysql_query ("INSERT INTO books (title,maintext,tm,entered_by,updated_by,date_entered,date_updated,copy,inn,t_out,t_timesout)VALUES ('$title','$maintext','$tm','$entered_by','$updated_by','$date_entered','$date_updated','$copy','$inn','$out','$timesout')")or die(mysql_error());
                            }
                            echo "<script>alert('Cataloging of Thesis and Coursework is successfully added!'); window.location='list_of_theses.php'</script>";
                        
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>