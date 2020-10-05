<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Equipment Item</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Equipment Item</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>			
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Equipment name</label>
						<div class="col-sm-7">
						  <input type="text" name="description" class="form-control" id="inputEmail3" placeholder="Name....." required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Brand</label>
						<div class="col-sm-7">
						  <input type="text" name="brand" class="form-control" id="inputPassword3" placeholder="Brand....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Model</label>
						<div class="col-sm-7">
						  <input type="text" name="model" class="form-control" id="inputPassword3" placeholder="Model....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Serial number</label>
						<div class="col-sm-7">
						  <input type="text" name="serial" class="form-control" id="inputPassword3" placeholder="Serial....."  />
						</div>
					  </div>					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Price</label>
						<div class="col-sm-7">
						  <input type="number" name="price" class="form-control" id="inputPassword3" placeholder="Price....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Mode of acquistion</label>
						<div class="col-sm-7">
						  <select name="mode" class="form-control"  />
							<option value="Purchase">Purchase</option>
							<option value="Donation">Donation</option>
							<option value="Gift">Gift</option>							
						  </select>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Barcode</label>
						<div class="col-sm-7">
						  <input type="text" name="bar_code" class="form-control" id="inputPassword3" placeholder="Barcode....." required />
						</div>
					  </div>	
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Accessories</label>
						<div class="col-sm-7">
						  <input type="text" name="accessories" class="form-control" id="inputPassword3" placeholder="Accessories....."  />
						</div>
					  </div>					  

						  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">IT control number</label>
						<div class="col-sm-7">
						  <input type="text" name="ctl_number" class="form-control" id="inputPassword3" placeholder="Control number....."  />
						</div>
					  </div>		

							  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date of acquisition</label>
						<div class="col-sm-7">
						  <input type="date" name="date_acquisition" class="form-control" id="inputPassword3" placeholder="Date of acquisition....." required />
						</div>
					  </div>

					  

						  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Accountability</label>
						<div class="col-sm-7">
						  <input type="text" name="accountability" class="form-control" id="inputPassword3" placeholder="Accountability....."  />
						</div>
					  </div>	

						  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Status</label>
						<div class="col-sm-7">
						  <input type="text" name="status" class="form-control" id="inputPassword3" placeholder="Status....."  />
						</div>
					  </div>	

						  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Location</label>
						<div class="col-sm-7">
						  <input type="text" name="location" class="form-control" id="inputPassword3" placeholder="Location....."  />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-7">
						<!---  <input type="text" name="item_description" class="form-control" id="inputPassword3" placeholder="Description....."> -->
						<textarea class="form-control" name="remarks" id="inputPassword3" placeholder="Remarks....."  /></textarea>
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
							
						$description=$_POST['description'];
						$brand=$_POST['brand'];
						$model=$_POST['model'];
						$serial=$_POST['serial'];
						$price=$_POST['price'];
						$mode=$_POST['mode'];
						$barcode=$_POST['bar_code'];						
						$status=$_POST['status'];
						$accessories=$_POST['accessories'];			
						$ctl_number=$_POST['ctl_number'];
						$accountability=$_POST['accountability'];								
						$remarks=$_POST['remarks'];	
                        $remarks = str_replace("'", "`", $remarks);                           
						$location=$_POST['location'];
						
						//$insertdate = date('Y-m-d', $_POST['date_acquisition']);	
						$date1 = strtr($_POST['date_acquisition'], '/', '-');
						$insertdate = date('Y-m-d', strtotime($date1));

						
						{
                            
                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO newequipment (description,brand,model,sn,price,mode_acquisition,barcode,status,accessories,date_acquisition,ctl_number,accountable,remarks,location) VALUES ('$description','$brand','$model','$serial','$price','$mode','$barcode','$status','$accessories','$insertdate','$ctl_number','$accountability','$remarks','$location')";
                        $sLink->exec($sql);                            
                            
						//mysql_query ("INSERT INTO newequipment (description,brand,model,sn,price,mode_acquisition,barcode,status,accessories,date_acquisition,ctl_number,accountable,remarks,location) VALUES ('$description','$brand','$model','$serial','$price','$mode','$barcode','$status','$accessories','$insertdate','$ctl_number','$accountability','$remarks','$location')") or die(mysql_error());

						}
						echo "<script>alert('Equipment item successfully added!'); window.location='list_of_equipment.php'</script>";
						 
						}
						?>
	  
      </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>