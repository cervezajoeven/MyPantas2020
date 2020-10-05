<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Visiting Researcher</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Visiting Researcher Information</h4>
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-7">
						  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name....." required />
						</div>
					  </div>
					  
                        <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Institution</label>
						<div class="col-sm-7">
						  <input type="text" name="institution" class="form-control" id="inputEmail3" placeholder="Institution....." required />
						</div>
					  </div>			  
					  
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Topic of research</label>
						<div class="col-sm-7">
						  <input type="text" name="topic" class="form-control" id="inputEmail3" placeholder="Topic of research..." required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Contact</label>
						<div class="col-sm-7">
						  <input type="text" name="contact" class="form-control" id="inputPassword3" placeholder="Contact....."  />
						</div>
					  </div>
                        

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Fee</label>
						<div class="col-sm-7">
						  <input type="number" name="fee" min="0" step="0.01" class="form-control" id="inputPassword3" value="0"  />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date of visit</label>
						<div class="col-sm-7">
						  <input type="date" name="date_visit" class="form-control" id="inputPassword3" required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-7">
						  <input type="text" name="remarks" class="form-control" id="inputPassword3" placeholder="Remarks....."  />
						</div>
					  </div>					  

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
						</div>
					  </div>
          
					</form>
					
						<?php 

						include('connect.php');						
						if (isset($_POST['submit'])){
							

						$name=$_POST['name'];
						$institution=$_POST['institution'];
						$topic=$_POST['topic'];
						$contact=$_POST['contact'];
						$fee=$_POST['fee'];
						$remarks=$_POST['remarks'];	

						//echo date('Y-m-d', strtotime($date1))						
						$date1 = strtr($_POST['date_visit'], '/', '-');
						$date_visit = date('Y-m-d', strtotime($date1));

									
						{
                            
                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO outside_user (name,institution,topic,contact,fee,remarks,date_of_visit)						 VALUES ('$name','$institution','$topic','$contact','$fee','$remarks','$date_visit')";

                        $sLink->exec($sql);  
                            
						//mysql_query ("INSERT INTO outside_user (name,institution,topic,contact,fee,remarks,date_of_visit)						 VALUES ('$name','$institution','$topic','$contact','$fee','$remarks','$date_visit')")or die(mysql_error());
						}
                        
						echo "<script>alert('Visitin researcher information successfully added!'); window.location='list_of_visitors.php'</script>";
						 
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>