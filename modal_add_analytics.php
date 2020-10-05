<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add new record</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Analytic and Book Literature Indexing Module</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
        
      <div class="modal-body">          

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Article title:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" class="form-control" id="title" placeholder="Article title....." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="creator" class="col-sm-3 control-label" >Creator(s):</label>
						<div class="col-sm-9">
						  <input type="text" name="str1" class="form-control" id="creator" placeholder="Creator or author....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="book" class="col-sm-3 control-label" >Title of book:</label>
						<div class="col-sm-9">
						  <input type="text" name="str2" class="form-control" id="book" placeholder="Title of book....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="contributor" class="col-sm-3 control-label" >Contributor(s):</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" class="form-control" id="contributor" placeholder="Contributor....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="place" class="col-sm-3 control-label" >Place of publication:</label>
						<div class="col-sm-9">
						  <input type="text" name="str4" class="form-control" id="place" placeholder="Place of publication....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="publisher" class="col-sm-3 control-label" >Publisher:</label>
						<div class="col-sm-9">
						  <input type="text" name="str5" class="form-control" id="publisher" placeholder="Publisher....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="date" class="col-sm-3 control-label" >Date of publication:</label>
						<div class="col-sm-9">
						  <input type="text" name="str6" class="form-control" id="date" placeholder="Date of publication...."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="pagination" class="col-sm-3 control-label" >Pagination:</label>
						<div class="col-sm-9">
						  <input type="text" name="str7" class="form-control" id="pages" placeholder="Pagination...."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="language" class="col-sm-3 control-label" >Language:</label>
						<div class="col-sm-9">
						  <input type="text" name="str8" class="form-control" id="language" placeholder="Language....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="call_number" class="col-sm-3 control-label" >Call number:</label>
						<div class="col-sm-9">
						  <input type="text" name="str9" class="form-control" id="call_number" placeholder="Call number....."  />
						</div>
					  </div>                        

					  <div class="form-group">
						<label for="location" class="col-sm-3 control-label" >Location:</label>
						<div class="col-sm-9">
						  <input type="text" name="str10" class="form-control" id="location" placeholder="Location....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="electronic_access" class="col-sm-3 control-label" >Electronic access:</label>
						<div class="col-sm-9">
						  <input type="text" name="str11" class="form-control" id="electronic_access" placeholder="Electronic access....."  />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="subject" class="col-sm-3 control-label" >Subject/Keyword:</label>
						<div class="col-sm-9">
						  <input type="text" name="str12" class="form-control" id="subject" placeholder="Subject or keyword....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="abstract" class="col-sm-3 control-label" >Abstract/Summary:</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" id="abstract" name="str13"></textarea>
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
                            $maintext = $txtstr . "<0014>" . $_POST['str13'] . ""; //'pages/extent                           
                            $maintext = str_replace("'", "`", $maintext);

                            $title = $_POST['str0'];
                            $title = str_replace("'", "`", $title);
                            $charlength = strlen($title);
                            if ($charlength > 250){
                                $title = mb_substr($title,0,250,'UTF-8');                                  
                            }                            
                            $tm = 'ba';

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
                            echo "<script>alert('Analytic or literature index is successfully added!'); window.location='list_of_analytics.php'</script>";
                        
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>