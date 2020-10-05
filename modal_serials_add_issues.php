<!-- Delete Item Modal -->
<div class="modal fade" id="add_issues<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Serials Item Issues</h4>
      </div>
        
      <div class="modal-body">

					<form method="post" action="save_serials_query_issues.php" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label">Periodical title</label>
						<div class="col-sm-7">
						  <input type="text" name="title" value="<?php echo $title; ?>"  class="form-control" id="title" placeholder="Periodical title....." required />
						</div>
					  </div>
                        
                        
					  <div class="form-group">
						<label for="itemcode" class="col-sm-3 control-label">Code</label>
						<div class="col-sm-7">
						  <input type="text" name="itemcode" value="<?php echo $item; ?>"  class="form-control" id="itemcode" placeholder="Item code....." required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="odate" class="col-sm-3 control-label">Date/Year</label>
						<div class="col-sm-7">
						  <input type="text" name="date_year" class="form-control" id="date_year" placeholder="Date....."  />
						</div>
					  </div>	
                        
 					  <div class="form-group">
						<label for="volume" class="col-sm-3 control-label">Volume</label>
						<div class="col-sm-7">
						  <input type="text" name="volume" class="form-control" id="volume" placeholder="Volume....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="issue" class="col-sm-3 control-label">Issue/Number</label>
						<div class="col-sm-7">
						  <input type="text" name="issue" class="form-control" id="issue" placeholder="Issue or number....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="date_encoded" class="col-sm-3 control-label">Date encoded</label>
						<div class="col-sm-7">
						  <input type="date" name="date_encoded" class="form-control" id="date_encoded" placeholder="Date encoded....." />
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