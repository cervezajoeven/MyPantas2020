<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Supplier</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Supplier Information</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Supplier name</label>
						<div class="col-sm-7">
						  <input type="text" name="supplier_name" class="form-control" id="inputEmail3" placeholder="Supplier name....." required />
						</div>
					  </div>
                        
       					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Contact name</label>
						<div class="col-sm-7">
						  <input type="text" name="contact_name" class="form-control" id="inputEmail3" placeholder="Contact name....."  />
						</div>
					  </div>      
                        
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Address</label>
						<div class="col-sm-7">
						  <input type="text" name="company_address" class="form-control" id="inputEmail3" placeholder="Company address....."  />
						</div>
					  </div>
                        
       					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Contact number</label>
						<div class="col-sm-7">
						  <input type="text" name="contact_number" class="form-control" id="inputEmail3" placeholder="Contact number....."  />
						</div>
					  </div>                             

       					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-7">
						  <input type="text" name="email_address" class="form-control" id="inputEmail3" placeholder="Email....."  />
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
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO supplier (company_name,contact_name,company_address,contact_number,email_address)VALUES('$supplier_name','$contact_name','$company_address','$contact_number','$email_address')";

                            $sLink->exec($sql);                             

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