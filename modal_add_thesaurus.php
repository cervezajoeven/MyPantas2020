<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Thesaurus entry</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Thesaurus Construction Module</h4>
      </div>
        
      <div class="modal-body">          

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		
                        
					  <div class="form-group">
						<label for="description" class="col-sm-3 control-label" >Descriptor:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" class="form-control" id="descriptor" placeholder="Descriptor..." required  />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="sn" class="col-sm-3 control-label" >Scope Note:</label>
						<div class="col-sm-9">
						  <input type="text" name="str1" class="form-control" id="sn" placeholder="Scope note..." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="bt" class="col-sm-3 control-label" >Broader Term:</label>
						<div class="col-sm-9">
						  <input type="text" name="str2" class="form-control" id="bt" placeholder="Broader term..." />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="nt" class="col-sm-3 control-label" >Narrower Term:</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" class="form-control" id="nt" placeholder="Narrower term..."  />
						</div>
					  </div>                       
					  
					  <div class="form-group">
						<label for="rt" class="col-sm-3 control-label" >Related Term:</label>
						<div class="col-sm-9">
						  <input type="text" name="str4" class="form-control" id="rt" placeholder="Related term..." />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="used" class="col-sm-3 control-label" >Use:</label>
						<div class="col-sm-9">
						  <input type="text" name="str5" class="form-control" id="used" placeholder="Use..." />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="uf" class="col-sm-3 control-label" >Use for:</label>
						<div class="col-sm-9">
						  <input type="text" name="str6" class="form-control" id="uf" placeholder="Use for..." />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="discipline" class="col-sm-3 control-label" >Descipline/Subject:</label>
						<div class="col-sm-9">
						  <input type="text" name="str7" class="form-control" id="discipline" placeholder="Discipline..."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="language" class="col-sm-3 control-label" >Language used:</label>
						<div class="col-sm-9">
						  <input type="text" name="str8" class="form-control" id="language" placeholder="Language..."  />
						</div>
					  </div>
                        
   					  <div class="form-group">
						<label for="ref" class="col-sm-3 control-label" >Reference:</label>
						<div class="col-sm-9">
						  <input type="text" name="str9" class="form-control" id="ref" placeholder="Reference..."  />
						</div>
					  </div> 
                        
                        
     			      <div class="form-group">
                        <label for="image_location" class="col-sm-3 control-label" >Upload image:</label>
						<div class="col-sm-9">
						  <input type="file" name="image">
						</div>
					  </div>                       
                        
                        
					  <div class="form-group">
						<label for="save" class="col-sm-3 control-label"></label>
						<div class="col-sm-9">
						  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Save</button>
						</div>
					  </div>
                        
                        
          
					</form>
					
						<?php 

						include('connect.php');						
						if (isset($_POST['submit'])){
                            

                            move_uploaded_file($_FILES["image"]["tmp_name"],"uploads_image/" . $_FILES["image"]["name"]);			
                            $imglocation=$_FILES["image"]["name"];
                            if ($imglocation <> "")
                            {
                                  $imglocation=$_FILES["image"]["name"];
                            }
                            else
                            {
                                  $imglocation= '';                              
                            }
                         
							
                            unset($txtstr);
                            $txtstr = "<001>" . $_POST['str0'] . ""; //'title
                            $txtstr = $txtstr . "<002>" . $_POST['str1'] . ""; 
                            $txtstr = $txtstr . "<003>" . $_POST['str2'] . ""; 
                            $txtstr = $txtstr . "<004>" . $_POST['str3'] . ""; 
                            $txtstr = $txtstr . "<005>" . $_POST['str4'] . ""; 
                            $txtstr = $txtstr . "<006>" . $_POST['str5'] . ""; 
                            $txtstr = $txtstr . "<007>" . $_POST['str6'] . "";     
                            $txtstr = $txtstr . "<008>" . $_POST['str7'] . "";    
                            $txtstr = $txtstr . "<009>" . $_POST['str8'] . "";                                
                            $maintext = $txtstr . "<0010>" . $_POST['str9'] . ""; 
                            $maintext = str_replace("'", "`", $maintext);
                            
                            $title = $_POST['str0'];
                            $title = str_replace("'", "`", $title);                          
                            $charlength = strlen($title);
                            if ($charlength > 250){
                                $title = mb_substr($title,0,250,'UTF-8');                                  
                            }                            
                            //$tm = 'ba';

                            $entered_by = $_SESSION['charger'];
                            $updated_by = $_SESSION['charger'];                            

                            $date_entered = date("Y-m-d H:i:s");						
                            $date_updated = date("Y-m-d H:i:s");
                            {
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO thesaurus (title,maintext,entered_by,updated_by,date_entered,date_updated,image_location)VALUES ('$title','$maintext','$entered_by','$updated_by','$date_entered','$date_updated','$imglocation')";

                            $sLink->exec($sql);  
                            
                            //mysql_query ("INSERT INTO books (title,maintext,tm,entered_by,updated_by,date_entered,date_updated)VALUES ('$title','$maintext','$tm','$entered_by','$updated_by','$date_entered','$date_updated')")or die(mysql_error());
                            
                            }
                            echo "<script>alert('Thesaurus entry is successfully added!'); window.location='list_of_thesaurus.php'</script>";
                        
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>