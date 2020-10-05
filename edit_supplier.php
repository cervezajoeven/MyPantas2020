<?php include('header.php'); 


$ID=$_GET['id'];

   
$stmt = $sLink->query("select * from supplier where userid='$ID'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);                 

?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Supplier</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT SUPPLIER INFORMATION</h2>

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
						<a href="list_of_supplier.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>


                
                
                
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
						  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Supplier name</label>
						<div class="col-sm-7">
						  <input type="text" name="company_name" value="<?php echo $row['company_name']; ?>"  class="form-control" id="inputEmail3" placeholder="Supplier name....." required />
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
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
					</form>
							
						<?php 
                        //$id =$_GET['ID'];
						include('connect.php');						
						if (isset($_POST['update'])){
							
                            $company_name=$_POST['company_name'];
                            $company_address=$_POST['company_address']; 
                            $contact_number=$_POST['contact_number'];                            
                            $contact_name=$_POST['contact_name'];
                            $email_address=$_POST['email_address'];

                            {

                            $sql = "UPDATE supplier set company_name='$company_name', company_address='$company_address', contact_number='$contact_number', contact_name='$contact_name', email_address='$email_address' where userid='$ID'";
                            $sLink->exec($sql); 

                            echo "<script>alert('Supplier information successfully added!'); window.location='list_of_supplier.php'</script>";                                       

                            }

						}
						?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
