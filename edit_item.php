<?php include('header.php'); 


$ID=$_GET['item_id'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Edit Equipment Item</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> Edit Item Details</h2>

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
						<a href="list_of_equipment.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
 $query = $sLink->query("select * from newequipment where eqid='$ID'");
 $row = $query->fetch();
                
 //$query=mysql_query("select * from newequipment where eqid='$ID'")or die(mysql_error());
 //$row=mysql_fetch_array($query);
                
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Equipment name</label>
						<div class="col-sm-4">
						  <input type="text" name="description" width="50" value="<?php echo $row['description']; ?>" class="form-control" id="inputEmail3" >
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Brand</label>
						<div class="col-sm-4">
						  <input type="text" name="brand" value="<?php echo $row['brand']; ?>" class="form-control" id="inputPassword3" placeholder="Brand.....">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Model</label>
						<div class="col-sm-4">
						  <input type="text" name="model" value="<?php echo $row['model']; ?>" class="form-control" id="inputPassword3" placeholder="Model.....">
						</div>
					  </div>	

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Serial number</label>
						<div class="col-sm-4">
						  <input type="text" name="serial" value="<?php echo $row['sn']; ?>" class="form-control" id="inputPassword3" placeholder="Serial.....">
						</div>
					  </div>	
					  
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Accessories</label>
						<div class="col-sm-4">
						  <input type="text" name="accessories" value="<?php echo $row['accessories']; ?>" class="form-control" id="inputPassword3" placeholder="Accessories.....">
						</div>						  
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Barcode</label>
						<div class="col-sm-4">
						  <input type="text" name="barcode" value="<?php echo $row['barcode']; ?>" class="form-control" id="inputPassword3" placeholder="Barcode.....">
						</div>
					  </div>						  


					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Price</label>
						<div class="col-sm-2">
						  <input type="number" name="price" value="<?php echo $row['price']; ?>" class="form-control" id="inputPassword3" placeholder="Price.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Mode of acquisition</label>
						<div class="col-sm-3">
						  <select name="mode" class="form-control">
							<option value="<?php echo $row['mode_acquisition']; ?>"><?php echo $row['mode_acquisition']; ?></option>
							<option value="Purchase">Purchase</option>
							<option value="Donation">Donation</option>
							<option value="Gift">Gift</option>							
						  </select>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date of acquisition</label>
						<div class="col-sm-4">
						  <input type="text" name="date_acquisition" value="<?php echo $row['date_acquisition']; ?>" class="form-control" id="inputPassword3" placeholder="Date of acquisition.....">
						</div>	
						  </div>					
						  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Status</label>
						<div class="col-sm-4">
						  <input type="text" name="status" value="<?php echo $row['status']; ?>" class="form-control" id="inputPassword3" placeholder="Status.....">
						</div>	
					  </div>						
						  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">IT control number</label>
						<div class="col-sm-4">
						  <input type="text" name="ctnumber" value="<?php echo $row['ctl_number']; ?>" class="form-control" id="inputPassword3" placeholder="IT control number.....">
						</div>							
					  </div>
							  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Accountability</label>
						<div class="col-sm-4">
						  <input type="text" name="accountability" value="<?php echo $row['accountable']; ?>" class="form-control" id="inputPassword3" placeholder="Accountability.....">
						</div>		
					  </div>
						  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Location</label>
						<div class="col-sm-4">
						  <input type="text" name="location" value="<?php echo $row['location']; ?>" class="form-control" id="inputPassword3" placeholder="Location.....">
						</div>							
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-4">
						<!---  <input type="text" name="item_description" class="form-control" id="inputPassword3" placeholder="Description....."> -->
						<textarea class="form-control" name="remarks" value="<?php echo $row['remarks']; ?>" id="inputPassword3" placeholder="Remarks..."><?php echo $row['remarks']; ?></textarea>
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
$id =$_GET['item_id'];
if (isset($_POST['update'])) {


						
						$description=$_POST['description'];
						$brand=$_POST['brand'];
						$model=$_POST['model'];
						$serial=$_POST['serial'];
						$price=$_POST['price'];
						$mode=$_POST['mode'];
						$barcode=$_POST['barcode'];						
						$status=$_POST['status'];
						$accessories=$_POST['accessories'];			
						$date_acquisition=$_POST['date_acquisition'];			
						$ctnumber=$_POST['ctnumber'];
						$accountability=$_POST['accountability'];								
						$remarks=$_POST['remarks'];			
						$location=$_POST['location'];								



{

$sql = " UPDATE newequipment SET description='$description', brand='$brand', model='$model', sn='$serial', price='$price', mode_acquisition='$mode', barcode='$barcode', status='$status', accessories='$accessories', date_acquisition='$date_acquisition', ctl_number='$ctnumber', accountable='$accountability', remarks='$remarks', location='$location' WHERE eqid = '$id' ";
$sLink->exec($sql);     
    
//mysql_query(" UPDATE newequipment SET description='$description', brand='$brand', model='$model', sn='$serial', price='$price', mode_acquisition='$mode', barcode='$barcode', status='$status', accessories='$accessories', date_acquisition='$date_acquisition', ctl_number='$ctnumber', accountable='$accountability', remarks='$remarks', location='$location' WHERE eqid = '$id' ")or die(mysql_error());

echo "<script>alert('Successfully updated equipment item information!'); window.location='list_of_equipment.php'</script>";



}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
