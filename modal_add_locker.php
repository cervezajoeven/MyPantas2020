<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Locker Item</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Locker Item</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="locker" class="col-sm-3 control-label">Locker Name</label>
						<div class="col-sm-7">
						  <input type="text" name="locker" class="form-control" id="locker" placeholder="Locker name....." required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="barcode" class="col-sm-3 control-label">Barcode</label>
						<div class="col-sm-7">
						  <input type="text" name="barcode" class="form-control" id="barcode" placeholder="Barcode....." required />
						</div>
					  </div>	
					  
					  <div class="form-group">
						<label for="submit" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
						</div>
					  </div>
                        
					</form>
					
						<?php 
						//include('include/database.php');
						include('connect.php');
						if (isset($_POST['submit'])){

						$locker=$_POST['locker'];
						$barcode=$_POST['barcode'];						

						//$insertdate = date('Y-m-d', $_POST['date_acquisition']);	
						//$date1 = strtr($_POST['date_acquisition'], '/', '-');
						//$insertdate = date('Y-m-d', strtotime($date1));
						
						{
                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO locker (locker,barcode) VALUES ('$locker','$barcode')";

                        $sLink->exec($sql);  
                            
						//mysql_query ("INSERT INTO locker (locker,barcode) VALUES ('$locker','$barcode')") or die(mysql_error());

						}
						echo "<script>alert('Locker item successfully added!'); window.location='list_of_locker.php'</script>";
						 
						}
						?>
	  
      </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>