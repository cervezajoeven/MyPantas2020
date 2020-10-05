<!-- Patron Item Modal -->
<div class="modal fade" id="patron_detail<?php  echo $idnum;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Patron Item Detail</h4>
      </div>
        
      
        <?php
				//if (isset($_POST['details'])){
				//				$mfn=$_GET['patron_detail'];    
				//				$c_result= mysql_query("select * from client where idnum = '$mfn'") or die (mysql_error());
				//				while ($c_row= mysql_fetch_array ($c_result) ){
				//				$mfn=$c_row['id'];
				//				}
				//}
        ?>

        
        <div class="modal-body">   

   					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		         
				
							<div class="form-group">
								<label for="idnumber" class="col-sm-3 control-label" >ID number:</label>
								<div class="col-sm-7">
									<input type="text" name="str0" value="<?php echo $idnum; ?>"  class="form-control" id="title" placeholder="ID number....."  />
								</div>
							</div>
							
							<div class="form-group">
								<label for="name" class="col-sm-3 control-label" >Name:</label>
								<div class="col-sm-7">
									<input type="text" name="name" value="<?php echo $name; ?>" class="form-control" id="name" placeholder="Name....." />
								</div>
							</div>			  
							
							<div class="form-group">
								<label for="dgroup" class="col-sm-3 control-label" >Group:</label>
								<div class="col-sm-7">
									<input type="text" name="dgroup" value="<?php echo $group; ?>" class="form-control" id="dgroup" placeholder="Group....."  />
								</div>
							</div>

							<div class="form-group">
								<label for="description" class="col-sm-3 control-label" >Description:</label>
								<div class="col-sm-7">
									<input type="text" name="description" value="<?php echo $description; ?>"  class="form-control" id="title" placeholder="Description....."  />
								</div>
							</div>

							<div class="form-group">
								<label for="onloan" class="col-sm-3 control-label" >On loan:</label>
								<div class="col-sm-7">
									<input type="text" name="bkloan" value="<?php echo $loan; ?>"  class="form-control" id="title" placeholder="On loan....."  />
								</div>
							</div>	

							<div class="form-group">
								<label for="address" class="col-sm-3 control-label" >Address:</label>
								<div class="col-sm-7">
									<input type="text" name="address" value="<?php echo $address; ?>"  class="form-control" id="Address" placeholder="Address....."  />
								</div>
							</div>		

							<div class="form-group">
								<label for="contact" class="col-sm-3 control-label" >Contact:</label>
								<div class="col-sm-7">
									<input type="text" name="contact" value="<?php echo $contact; ?>"  class="form-control" id="contact" placeholder="Contact number....."  />
								</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-sm-3 control-label" >Email:</label>
								<div class="col-sm-7">
									<input type="text" name="email" value="<?php echo $email ?>"  class="form-control" id="email" placeholder="Email address....."  />
								</div>
							</div>
                        
 							<div class="form-group">
								<label for="fine" class="col-sm-3 control-label" >Fine:</label>
								<div class="col-sm-7">
									<input type="text" name="fine" value="<?php echo $overdue ?>"  class="form-control" id="fine" placeholder="Fine or overdue....."  />
								</div>
							</div>                       

							<div class="form-group">
								<label for="dateapplied" class="col-sm-3 control-label" >Date encoded:</label>
								<div class="col-sm-7">
									<input type="text" name="dateapplied" value="<?php echo $date_applied; ?>"  class="form-control" id="dateapplied" placeholder="Date encoded....."  />
								</div>
							</div>	

							<div class="form-group">
								<label for="dateexpired" class="col-sm-3 control-label" >Expiration date:</label>
								<div class="col-sm-7">
									<input type="text" name="dateexpired" value="<?php echo $date_expired; ?>"  class="form-control" id="dateexpired" placeholder="Expiration date....."  />
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