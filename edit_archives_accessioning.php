<?php include('header.php'); 

$id=$_GET['bkid'];

?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Archives accessioning</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT ACCESSION OF ARCHIVES RECORD</h2>

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
						<a href="list_of_archives_accessioning.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
    $stmt = $sLink->query("select * from accessioning where id='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);             
	//$query=mysql_query("select * from accessioning where id='$id'")or die(mysql_error());
	//$row=mysql_fetch_array($query);

	$title = $row['title'];
    $charlength = strlen($title);
    if ($charlength > 250){
        $title = mb_substr($title,0,250,'UTF-8');                                  
    }             
	$creator = $row['creator'];
	$accession = $row['acc_number'];
	$date_received = $row['date_received'];                
	$donor = $row['donor'];
	$address = $row['donor_address'];               
	$restrictions = $row['restrictions'];
	$location = $row['location'];
	$total = $row['total_size'];
	$gdcm = $row['gdcm'];
	$sdm = $row['sdm'];
	$arrangement = $row['arrangement'];                
 	$app_dates = $row['app_inc_dates'];
	$accessioned_by = $row['accessioned_by'];               
  	$date = $row['da_te'];
	$remarks = $row['add_remarks'];
  ?>
  
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">	
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Title:</label>
						<div class="col-sm-7">
						  <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" id="title" placeholder="Title....." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="creator" class="col-sm-3 control-label" >Creator:</label>
						<div class="col-sm-7">
						  <input type="text" name="creator" value="<?php echo $creator; ?>" class="form-control" id="creator" placeholder="Creator....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Accession number:</label>
						<div class="col-sm-7">
						  <input type="text" name="accession" value="<?php echo $accession; ?>" class="form-control" id="accession" placeholder="Accession number....."  />
						</div>
					  </div>
					  
 					  <div class="form-group">
						<label for="date_received" class="col-sm-3 control-label" >Date received:</label>
						<div class="col-sm-7">
						  <input type="text" name="date_received" value="<?php echo $date_received; ?>" class="form-control" id="date_received" placeholder="Date received....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="donor" class="col-sm-3 control-label" >Donor:</label>
						<div class="col-sm-7">
						  <input type="text" name="donor" value="<?php echo $donor; ?>" class="form-control" id="donor" placeholder="Donor....."  />
						</div>
					  </div>                     
                                            
					  <div class="form-group">
						<label for="address" class="col-sm-3 control-label" >Donor address:</label>
						<div class="col-sm-7">
						  <input type="text" name="address" value="<?php echo $address; ?>" class="form-control" id="address" placeholder="Donor address....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="restrictions" class="col-sm-3 control-label" >Restrictions:</label>
						<div class="col-sm-7">
						  <input type="text" name="restrictions" value="<?php echo $restrictions; ?>" class="form-control" id="restrictions" placeholder="Restriction....."  />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="location" class="col-sm-3 control-label" >Location:</label>
						<div class="col-sm-7">
						  <input type="text" name="location" value="<?php echo $location; ?>" class="form-control" id="location" placeholder="Location....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="total" class="col-sm-3 control-label" >Total size:</label>
						<div class="col-sm-7">
						  <input type="text" name="total" value="<?php echo $total; ?>" class="form-control" id="total" placeholder="Total size....."  />
						</div>
					  </div>  
                                         
 					  <div class="form-group">
						<label for="arrangement" class="col-sm-3 control-label" >Arrangement:</label>
						<div class="col-sm-7">
						  <input type="text" name="arrangement" value="<?php echo $arrangement; ?>" class="form-control" id="arrangement" placeholder="Arrangement....."  />
						</div>
					  </div>                       
                        
 					  <div class="form-group">
						<label for="gdcm" class="col-sm-3 control-label" >GDCM:</label>
						<div class="col-sm-7">
						  <input type="text" name="gdcm" value="<?php echo $gdcm; ?>" class="form-control" id="gdcm" placeholder="GDCM....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="sdm" class="col-sm-3 control-label" >SDM:</label>
						<div class="col-sm-7">
						  <input type="text" name="sdm" value="<?php echo $sdm; ?>" class="form-control" id="sdm" placeholder="SDM....."  />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="app_dates" class="col-sm-3 control-label" >App inc dates:</label>
						<div class="col-sm-7">
						  <input type="text" name="app_dates" value="<?php echo $app_dates; ?>" class="form-control" id="app_dates" placeholder="App inc dates....."  />
						</div>
					  </div>
                        
    				  <div class="form-group">
						<label for="accessioned_by" class="col-sm-3 control-label" >Aaccessioned by:</label>
						<div class="col-sm-7">
						  <input type="text" name="accessioned_by" value="<?php echo $accessioned_by; ?>" class="form-control" id="accessioned_by" placeholder="accessioned_by....."  />
						</div>
					  </div>                        
                       
      		         <div class="form-group">
						<label for="odate" class="col-sm-3 control-label" >Date:</label>
						<div class="col-sm-7">
						  <input type="text" name="odate" value="<?php echo $date; ?>" class="form-control" id="odate" placeholder="Date....."  />
						</div>
					  </div>

 					  <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label" >Additional remarks:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="remarks" name="remarks"><?php echo $remarks; ?></textarea>
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
						
 							$title = $_POST['title'];
                            $creator = $_POST['creator'];
                            $accession = $_POST['accession'];
                            $date_received = $_POST['date_received'];                
                            $donor = $_POST['donor'];
                            $address = $_POST['address'];               
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


						{
						//mysql_query(" UPDATE accessioning SET title='$title', creator='$creator', acc_number='$accession', date_received='$date_received', donor='$donor', donor_address='$address', restrictions='$restrictions', location='$location', total_size='$total',gdcm='$gdcm', sdm='$sdm', arrangement='$arrangement', app_inc_dates='$app_dates', accessioned_by='$accessioned_by', da_te='$date_encoded', add_remarks='$remarks' WHERE id = '$id' ")or die(mysql_error());
    
                        $sql = " UPDATE accessioning SET title='$title', creator='$creator', acc_number='$accession', date_received='$date_received', donor='$donor', donor_address='$address', restrictions='$restrictions', location='$location', total_size='$total',gdcm='$gdcm', sdm='$sdm', arrangement='$arrangement', app_inc_dates='$app_dates', accessioned_by='$accessioned_by', da_te='$date_encoded', add_remarks='$remarks' WHERE id = '$id' ";
                        $sLink->exec($sql);  
						
                        echo "<script>alert('Successfully updated archives accession record!'); window.location='list_of_archives_accessioning.php'</script>";
						}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
