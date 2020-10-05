<!-- Delete Item Modal -->
<div class="modal fade" id="add_renewal<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Serials Item Renewal</h4>
      </div>
        
      <div class="modal-body">

					<form method="post" action="save_serials_query_renewal.php" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label">Journal title</label>
						<div class="col-sm-7">
						  <input type="text" name="title" value="<?php echo $title; ?>"  class="form-control" id="title" placeholder="Journal title....." required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="itemcode" class="col-sm-3 control-label">Item code</label>
						<div class="col-sm-7">
						  <input type="text" name="itemcode" value="<?php echo $item; ?>" class="form-control" id="itemcode" placeholder="Item code....."  />
						</div>
					  </div>	
                        
 					  <div class="form-group">
						<label for="date_order" class="col-sm-3 control-label">Date order</label>
						<div class="col-sm-7">
						  <input type="date" name="date_order" class="form-control" id="date_order" placeholder="Date order....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="period" class="col-sm-3 control-label">Period cover</label>
						<div class="col-sm-7">
						  <input type="text" name="period" class="form-control" id="period" placeholder="Period cover....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="amount" class="col-sm-3 control-label">Subscription fee</label>
						<div class="col-sm-7">
						  <input type="number" name="amount" min="0" step="0.01" value="0.00" class="form-control" id="amount" />
						</div>
					  </div>  
                        
  					  <div class="form-group">
						<label for="source" class="col-sm-3 control-label">Source</label>
						<div class="col-sm-7">
						  <input type="text" name="source" class="form-control" id="source" placeholder="Source....."  />
						</div>
					  </div>      
                        
    					  <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-7">
						  <input type="text" name="remarks" class="form-control" id="remarks" placeholder="Remarks....."  />
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

						//include('connect.php');
          
						//if (isset($_POST['submit'])){

                        //    $itemcode=$_GET['itemcode'];
                        //    $date_year=$_GET['date_year'];
                        //    $volume=$_GET['volume'];
                        //    $issue=$_GET['issue'];                           

                        //    $date1 = strtr($_GET['date_encoded'], '/', '-');
                        //    $date_encoded = date('Y-m-d', strtotime($date1));				

                            //mysql_query ("INSERT INTO serials (code,date_year,volume,number,date_received) VALUES ('$code','$date_year','$volume','$issue','$date_encoded')") or die(mysql_error());              
                            
                        //    {
                        //    mysql_query ("INSERT INTO serials (itemcode) VALUES ('$itemcode')") or die(mysql_error());
                        //    }
                            
                        //    echo "<script>alert('Serials item issue successfully added!')</script>";
						 
						//}
          
						?>  
	  
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>   
        
    </div>
  </div>
</div>