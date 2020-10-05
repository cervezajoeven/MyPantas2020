<!-- Add Product -->
    <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addproduct.php" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
                            
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Title:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                        </div>
                            
     						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Author:</span>
                            <input type="text" style="width:400px;" class="form-control" name="author" >
                        </div>   
                            
  						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">ISBN:</span>
                            <input type="text" style="width:400px; " class="form-control" name="isbn" >
                        </div>      
                            
   						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Publisher:</span>
                            <input type="text" style="width:400px; " class="form-control" name="publisher" >
                        </div>      
                            
    				    <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Pub date:</span>
                            <input type="text" style="width:400px; " class="form-control" name="pub_date" >
                        </div>                                  
                            
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Category:</span>
                            <select style="width:400px;" class="form-control" name="category">
								<?php
									$cat=mysqli_query($conn,"select * from category");
									while($catrow=mysqli_fetch_array($cat)){
										?>
											<option value="<?php echo $catrow['categoryid']; ?>"><?php echo $catrow['category_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Supplier:</span>
                            <select style="width:400px;" class="form-control" name="supplier">
								<?php
									$sup=mysqli_query($conn,"select * from supplier");
									while($suprow=mysqli_fetch_array($sup)){
										?>
											<option value="<?php echo $suprow['userid']; ?>"><?php echo $suprow['company_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Price:</span>
                            <input type="text" style="width:400px;" class="form-control" name="price" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Quantity:</span>
                            <input type="text" style="width:400px;" class="form-control" name="qty">
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Photo:</span>
                            <input type="file" style="width:400px;" class="form-control" name="image">
                        </div>            
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->

<!-- Add Customer -->
    <div class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Customer</h4></center>
                </div>
                
                <div class="modal-body">
                    <div class="container-fluid">
                        <form role="form" method="POST" action="addcustomer.php" enctype="multipart/form-data">
                            <div class="container-fluid">
                                <div style="height:15px;"></div>
                                
                                <div class="form-group input-group">
                                    <span style="width:120px;" class="input-group-addon">Institution:</span>
                                    <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="institution" required>
                                </div>
                                
                                <div class="form-group input-group">
                                    <span style="width:120px;" class="input-group-addon">Name:</span>
                                    <input type="text" style="width:400px;" class="form-control" name="contact_name" >
                                </div>                      
                                <div class="form-group input-group">
                                    <span style="width:120px;" class="input-group-addon">Contact:</span>
                                    <input type="text" style="width:400px;" class="form-control" name="contact_number">
                                </div>                        
                                <div class="form-group input-group">
                                    <span style="width:120px;" class="input-group-addon">Email:</span>
                                    <input type="text" style="width:400px;" class="form-control" name="email" >
                                </div>
                                <div class="form-group input-group">
                                    <span style="width:120px;" class="input-group-addon">Address:</span>
                                    <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="address">
                                </div>                           
                            </div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->

<!-- Add Supplier -->
    <div class="modal fade" id="addsupplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Supplier</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addsupplier.php" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Company name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="company_name" required>
                        </div>
                            
    						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contact name:</span>
                            <input type="text" style="width:400px;" class="form-control" name="contact_name" required>
                        </div>
                            
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon"> Address:   </span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="company_address">
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contact number:</span>
                            <input type="text" style="width:400px;" class="form-control" name="contact_number">
                        </div>

						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Email:</span>
                            <input type="text" style="width:400px;" class="form-control" name="email_address">
                        </div>
                            
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>

<!-- Add Category -->
    <div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Category</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addcategory.php" enctype="multipart/form-data">
						<div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Category name:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                            </div> 
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->

<!-- Add Agent -->
    <div class="modal fade" id="addagent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Agent</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addagent.php" enctype="multipart/form-data">
                        
						<div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Name:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                            </div> 
						</div>
                        
  						<div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Address:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="address" required>
                            </div> 
						</div> 
                        
 						<div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Contact:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="contact" required>
                            </div> 
						</div>                       
                        
    						<div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Status:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="status" required>
                            </div> 
						</div>                    
                        
                  
						<div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Area:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="area" required>
                            </div> 
						</div>      
                        
      						<div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Client list:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="client" required>
                            </div> 
						</div>                        
                          
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->

<!-- Add new staff -->
    <div class="modal fade" id="addstaff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Staff</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addstaff.php" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Access:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="access" required>
                        </div>

						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Username:</span>
                            <input type="text" style="width:400px;" class="form-control" name="username" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Password:</span>
                            <input type="password" style="width:400px;" class="form-control" name="password" required>
                        </div>  						
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->