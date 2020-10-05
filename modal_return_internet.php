<!-- Return book Item Modal -->
<div class="modal fade" id="return_book<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Internet Utilization Item Detail</h4>
      </div>
        
      
        <?php
				if (isset($_POST['details'])){
								$id=$_GET['return_book'];    
								$result= mysql_query("select * from borrowing where id = '$id'") or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								}
				}
        ?>

        
        <div class="modal-body">   

   					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		         
				
					  <div class="form-group">
						<label for="clientid" class="col-sm-3 control-label" >ID number:</label>
						<div class="col-sm-9">
						  <input type="text" name="clientid" value="<?php echo $row['client_id']; ?>"  class="form-control" id="title" placeholder="ID number....."  />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Barcode:</label>
						<div class="col-sm-9">
						  <input type="text" name="barcode" value="<?php echo $row['barcode']; ?>" class="form-control" id="accession" placeholder="Accession....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Computer name:</label>
						<div class="col-sm-9">
						  <input type="text" name="computer" value="<?php echo $row['computer']; ?>" class="form-control" id="title" placeholder="Title....."  />
						</div>
					  </div>                      
					  
					  <div class="form-group">
						<label for="date_borrowed" class="col-sm-3 control-label" >Time borrowed:</label>
						<div class="col-sm-9">
						  <input type="text" name="time_out" value="<?php echo $row['time_out']; ?>" class="form-control" id="time_out" placeholder="Time borrowed....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="date_due" class="col-sm-3 control-label" >Time due:</label>
						<div class="col-sm-9">
						  <input type="text" name="time_due" value="<?php echo $row['time_due']; ?>" class="form-control" id="time_due" placeholder="Time due....."  />
						</div>
					  </div>
                        <div class="form-group">
						<label for="date_returned" class="col-sm-3 control-label" >Date requested:</label>
						<div class="col-sm-9">
						  <input type="text" name="time_in" value="<?php echo $row['time_in']; ?>" class="form-control" id="date_returned" placeholder="Date requested....."  />
						</div>
					  </div> 
                        
					  <div class="form-group">
						<label for="charger" class="col-sm-3 control-label" >Charger:</label>
						<div class="col-sm-9">
						  <input type="text" name="charger" value="<?php echo $row['charger']; ?>" class="form-control" id="charger" placeholder="Charger....."  />
						</div>
					  </div>                        
        
            </form>
            
            
			<div class="modal-footer">
			<button class="btn btn-warning" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
			</div> 
        </div>
        
     
        
    </div>
  </div>
</div>