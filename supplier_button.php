<!-- Delete Supplier -->
    <div class="modal fade" id="del_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Supplier</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						//$a=mysqli_query($conn,"select * from supplier where userid='".$sqrow['userid']."'");
						//$b=mysqli_fetch_array($a);
                        
                        $stmt = $sLink->query("select * from thesaurus where id='$id'");
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);                     

					?>
                    <h5><center>Company Name: <strong><?php echo $row['company_name']; ?></strong></center></h5>
					<form role="form" method="POST" action="deletesupplier.php<?php echo '?id='.$row['id']; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit supplier -->
    <div class="modal fade" id="edit_<?php echo $sqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Supplier</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						//$a=mysqli_query($conn,"select * from supplier left join user on user.userid=supplier.userid where supplier.userid='".$sqrow['userid']."'");
						//$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_supplier.php<?php echo '?id='.$sqrow['userid']; ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Company name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['company_name']); ?>" class="form-control" name="company_name">
                        </div>
                        
      						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Contact name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo $b['contact_name'] ?>" class="form-control" name="contact_name">
                        </div>      
                        
                        
  						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Contact number:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['contact_number'] ?>" class="form-control" name="contact_number">
                        </div>
                        
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Address:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['company_address']); ?>" class="form-control" name="company_address">
                        </div>

						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Email:</span>
                            <input type="text" style="width:400px; " value="<?php echo ucwords($b['email_address']); ?>" class="form-control" name="email_address">
                        </div>

						<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
    </div>
<!-- /.modal -->