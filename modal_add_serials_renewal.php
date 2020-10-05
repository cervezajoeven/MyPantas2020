<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_issues"><i class="glyphicon glyphicon-plus"></i> Issues</button>

<!-- Modal -->
<div class="modal fade" id="add_issues" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Serials Item Issues</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
        
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="code" class="col-sm-3 control-label">Code</label>
						<div class="col-sm-7">
						  <input type="text" name="code" value="<?php echo $code; ?>"  class="form-control" id="ocode" placeholder="Code....." required />
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
                         <a href="save_serials_query_issues.php<?php echo '?item_id='.$code; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Submit</a> 
						</div>
                        </div>
                        
					</form>
					
						<?php 
			
						//include('connect.php');
          
						//if (isset($_POST['submit'])){

                        //    $ocode=$_POST['ocode'];
                        //    $date_year=$_POST['date_year'];
                        //    $ovolume=$_POST['ovolume'];
                        //    $issue=$_POST['issue'];                           

                        //    $date1 = strtr($_POST['date_encoded'], '/', '-');
                        //    $date_encoded = date('Y-m-d', strtotime($date1));				

                        //		mysql_query ("INSERT INTO serials (code,date_year,volume,number,date_received) VALUES ('$code','$date_year','$volume','$issue','$date_encoded')") or die(mysql_error());              
                            
                        //    {
                        //    mysql_query ("INSERT INTO serials (code) VALUES ('$ocode')") or die(mysql_error());
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