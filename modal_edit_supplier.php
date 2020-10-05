<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-plus"></i> Edit Supplier</button>

<?php
    $stmt = $sLink->query("select * from supplier where userid='$ID'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);     
?>


<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Edit Supplier Information</h4>
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Supplier name</label>
						<div class="col-sm-7">
						  <input type="text" name="supplier_name" value="<?php echo $row['company_name']; ?>"  class="form-control" id="inputEmail3" placeholder="Supplier name....." required />
						</div>
					  </div>
                        
       					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Contact name</label>
						<div class="col-sm-7">
						  <input type="text" name="contact_name" value="<?php echo $row['contact_name']; ?>" class="form-control" id="inputEmail3" placeholder="Contact name....."  />
						</div>
					  </div>      
                        
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Address</label>
						<div class="col-sm-7">
						  <input type="text" name="company_address" value="<?php echo $row['company_address']; ?>" class="form-control" id="inputEmail3" placeholder="Company address....."  />
						</div>
					  </div>
                        
       					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Contact number</label>
						<div class="col-sm-7">
						  <input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>" class="form-control" id="inputEmail3" placeholder="Contact number....."  />
						</div>
					  </div>                             

       					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-7">
						  <input type="text" name="email_address" value="<?php echo $row['email_address']; ?>" class="form-control" id="inputEmail3" placeholder="Email....."  />
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
						//include('include/database.php');
						include('connect.php');						
						if (isset($_POST['submit'])){
							
		
						$supplier_name=$_POST['supplier_name'];
						$contact_name=$_POST['contact_name'];
						$company_address=$_POST['company_address'];
						$contact_number=$_POST['contact_number'];
						$email_address=$_POST['email_address'];
                                                
						
						{
                        $sql = "update supplier set company_name='$company_name', company_address='$company_address', contact_number='$contact_number', contact_name='$contact_name', email_address='$email_address' where userid='$id'";
                        $sLink->exec($sql);       
                            
                            
                       //	mysqli_query($conn,"update supplier set company_name='$company_name', company_address='$company_address', contact_number='$contact_number', contact_name='$contact_name', email_address='$email_address' where userid='$id'");                         
                            
						}
						echo "<script>alert('Supplier information successfully added!'); window.location='list_of_supplier.php'</script>";
						 
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>