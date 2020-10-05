<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Archives Accessioning</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Accessioning of Archival Documents</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
        
      <div class="modal-body">          

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">
       
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Title:</label>
						<div class="col-sm-7">
						  <input type="text" name="title" class="form-control" id="title" placeholder="Title....." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="creator" class="col-sm-3 control-label" >Creator:</label>
						<div class="col-sm-7">
						  <input type="text" name="creator"  class="form-control" id="creator" placeholder="Creator....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Accession number:</label>
						<div class="col-sm-7">
						  <input type="text" name="accession"  class="form-control" id="accession" placeholder="Accession number....."  />
						</div>
					  </div>
					  
 					  <div class="form-group">
						<label for="date_received" class="col-sm-3 control-label" >Date received:</label>
						<div class="col-sm-7">
						  <input type="date" name="date_received" class="form-control" id="date_received" placeholder="Date received....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="donor" class="col-sm-3 control-label" >Donor:</label>
						<div class="col-sm-7">
						  <input type="text" name="donor"  class="form-control" id="donor" placeholder="Donor....."  />
						</div>
					  </div>                     
                                            
					  <div class="form-group">
						<label for="address" class="col-sm-3 control-label" >Donor address:</label>
						<div class="col-sm-7">
						  <input type="text" name="address"  class="form-control" id="address" placeholder="Donor address....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="restrictions" class="col-sm-3 control-label" >Restrictions:</label>
						<div class="col-sm-7">
						  <input type="text" name="restrictions"  class="form-control" id="restrictions" placeholder="Restriction....."  />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="location" class="col-sm-3 control-label" >Location:</label>
						<div class="col-sm-7">
						  <input type="text" name="location"  class="form-control" id="location" placeholder="Location....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="total" class="col-sm-3 control-label" >Total size:</label>
						<div class="col-sm-7">
						  <input type="text" name="total"  class="form-control" id="total" placeholder="Total size....."  />
						</div>
					  </div>  
       
 					  <div class="form-group">
						<label for="gdcm" class="col-sm-3 control-label" >GDCM:</label>
						<div class="col-sm-7">
						  <input type="text" name="gdcm"  class="form-control" id="gdcm" placeholder="GDCM....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="sdm" class="col-sm-3 control-label" >SDM:</label>
						<div class="col-sm-7">
						  <input type="text" name="sdm"  class="form-control" id="sdm" placeholder="SDM....."  />
						</div>
					  </div>
                        
      				  <div class="form-group">
						<label for="arrangement" class="col-sm-3 control-label" >Arrangement:</label>
						<div class="col-sm-7">
						  <input type="text" name="arrangement"  class="form-control" id="arrangement" placeholder="Arrangement....."  />
						</div>
					  </div>                     
                        
  					  <div class="form-group">
						<label for="app_dates" class="col-sm-3 control-label" >App inc dates:</label>
						<div class="col-sm-7">
						  <input type="text" name="app_dates"  class="form-control" id="app_dates" placeholder="App inc dates....."  />
						</div>
					  </div>
                        
    				  <div class="form-group">
						<label for="accessioned_by" class="col-sm-3 control-label" >Aaccessioned by:</label>
						<div class="col-sm-7">
						  <input type="text" name="accessioned_by"  class="form-control" id="accessioned_by" placeholder="accessioned_by....."  />
						</div>
					  </div>                        
                       
 					  <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label" >Additional remarks:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="remarks" name="remarks"></textarea>
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
							
 							$title = $_POST['title'];
                            $title = str_replace("'", "`", $title);                           
                            $charlength = strlen($title);
                            if ($charlength > 250){
                                $title = mb_substr($title,0,250,'UTF-8');                                  
                            } 
                            $creator = $_POST['creator'];
                            $accession = $_POST['accession'];             
                            $donor = $_POST['donor'];
                            $address = $_POST['address'];
                            $address = str_replace("'", "`", $address);                          
                            $restrictions = $_POST['restrictions'];
                            $location = $_POST['location'];
                            $total = $_POST['total'];
                            $gdcm = $_POST['gdcm'];
                            $sdm = $_POST['sdm'];
                            $arrangement = $_POST['arrangement'];                
                            $app_dates = $_POST['app_dates'];
                            $accessioned_by = $_POST['accessioned_by'];               
                            $date_encoded = date("Y-m-d H:i:s");
                            $remarks = $_POST['remarks'];
                            $remarks = str_replace("'", "`", $remarks);                           
                            $date_received=$_POST['date_received'];
							$date1 = strtr($_POST['date_received'], '/', '-');
							$date_received = date('Y-m-d', strtotime($date1)); 

                            {
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO accessioning (title,creator,acc_number,date_received,donor,donor_address,restrictions,location,total_size,gdcm,sdm,arrangement,app_inc_dates,accessioned_by,da_te,add_remarks) VALUES ('$title','$creator','$accession','$date_received','$donor','$address','$restrictions','$location','$total','$gdcm','$sdm','$arrangement','$app_dates','$accessioned_by','$date_encoded','$remarks')";

                            $sLink->exec($sql);  
                            
                            //mysql_query ("INSERT INTO accessioning (title,creator,acc_number,date_received,donor,donor_address,restrictions,location,total_size,gdcm,sdm,arrangement,app_inc_dates,accessioned_by,da_te,add_remarks) VALUES ('$title','$creator','$accession','$date_received','$donor','$address','$restrictions','$location','$total','$gdcm','$sdm','$arrangement','$app_dates','$accessioned_by','$date_encoded','$remarks')")or die(mysql_error());
                                                       
                            }
                            echo "<script>alert('Accession of archival documents is successfully added!'); window.location='list_of_archives_accessioning.php'</script>";
                        
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>