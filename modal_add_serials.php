<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Serials Item</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Serials Item</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="serial_title" class="col-sm-3 control-label">Serial title</label>
						<div class="col-sm-7">
						  <input type="text" name="serial_title"  class="form-control" id="serial_title" placeholder="Serial title..." required>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="issn" class="col-sm-3 control-label">ISSN</label>
						<div class="col-sm-7">
						  <input type="text" name="issn"  class="form-control" id="issn" placeholder="ISSN.....">
						</div>
					  </div>
                        

                        
                        <div class="form-group">
						<label for="frequency" class="col-sm-3 control-label">Frequency</label>
						<div class="col-sm-7">
						  <select name="frequency" class="form-control" >
                            <option></option>  
                            <option>Annually</option>
                            <option>Bi-annually</option>
                            <option>Bi-monthly</option>
                            <option>Daily</option>
                            <option>Forthnightly</option>
                            <option>Monthly</option>
							<option>Semi-annually</option>
                            <option>Quarterly</option>
                            <option>Weekly</option>			
						  </select>
						</div>
					  </div>                     
					  
                       <div class="form-group">
						<label for="agent" class="col-sm-3 control-label">Vendor</label>
						<div class="col-sm-7">
						  <select name="agent" class="form-control" >
                            <option></option> 
                            <option>Litera</option>
                            <option>Universal Magazine</option>
                            <option>Jetspeed</option>
                            <option>Global</option>	
						  </select>
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="price" class="col-sm-3 control-label">Price</label>
						<div class="col-sm-7">
						  <input type="text" name="price" value="0" class="form-control" id="price" placeholder="Price...">
						</div>
					  </div>
                        
                        
     					  <div class="form-group">
						<label for="focus" class="col-sm-3 control-label">Focus</label>
						<div class="col-sm-7">
						  <select name="focus" class="form-control" >
                            <option></option>
                            <option>International</option>
                            <option>Local</option>
                            <option>National</option>
                            <option>Regional</option>						
						  </select>
						</div>
					  </div>                   
                        
	  
            
                        
                        
					  <div class="form-group">
						<label for="subject" class="col-sm-3 control-label">Subject coverage</label>
						<div class="col-sm-7">
						  <input type="text" name="subject"  class="form-control" id="subject" placeholder="Subject.....">
						</div>
					  </div>
                        
       					  <div class="form-group">
						<label for="expiration" class="col-sm-3 control-label">Expiration</label>
						<div class="col-sm-7">
						  <input type="date" name="expiration"  class="form-control" id="expiration" placeholder="Expiration.....">
						</div>
					  </div>	                     
                        
					  <div class="form-group">
						<label for="date_renewed" class="col-sm-3 control-label">Renewal date</label>
						<div class="col-sm-7">
						  <input type="date" name="date_renewed"  class="form-control" id="date_renewed" placeholder="Renewal date.....">
						</div>
					  </div>
                        
   					  <div class="form-group">
						<label for="timesout" class="col-sm-3 control-label">Times out</label>
						<div class="col-sm-7">
						  <input type="text" name="t_timesout" value="0" class="form-control" id="timesout" placeholder="Times out...">
						</div>
					  </div>                    
                        
   					  <div class="form-group">
						<label for="period" class="col-sm-3 control-label">Period</label>
						<div class="col-sm-7">
						  <input type="text" name="period"  class="form-control" id="period" placeholder="Period...">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="status" class="col-sm-3 control-label">Current?</label>
						<div class="col-sm-7">
						  <input type="text" name="status"  class="form-control" id="status" placeholder="Status.....">
						</div>
					  </div>
                        
        					  <div class="form-group">
						<label for="code" class="col-sm-3 control-label">Item code</label>
						<div class="col-sm-7">
						  <input type="text" name="itemcode" value="<?php echo $row['code']; ?>" class="form-control" id="code" placeholder="Item code..." required>
						</div>
					  </div>                 
                        
      		        <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-7">
						  <input type="text" name="remarks" value="<?php echo $row['remarks']; ?>" class="form-control" id="remarks" placeholder="Remarks...">
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

						$title=$_POST['serial_title'];
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        }     
						$issn=$_POST['issn'];
						$frequency=$_POST['frequency'];
						$agent=$_POST['agent'];
    
    					$price=$_POST['price'];
						$focus=$_POST['focus'];
    
 						$subject=$_POST['subject'];
						//$expiration=$_POST['expiration'];   
    
     					//$date_renewed=$_POST['date_renewed'];
						$t_timesout=$_POST['t_timesout'];
    
 						$period=$_POST['period'];
						$status=$_POST['status'];     
    
     					$itemcode=$_POST['itemcode'];
						$remarks=$_POST['remarks'];
    
						$date1 = strtr($_POST['expiration'], '/', '-');
						$expiration = date('Y-m-d', strtotime($date1));
                            
						$date2 = strtr($_POST['date_renewed'], '/', '-');
						$date_renewed = date('Y-m-d', strtotime($date2));                            
						
						{
                            
 						//mysql_query ("INSERT INTO serial_title (serial_title,issn,frequency,agent,price,focus,subject,expiration,date_renewed,t_timesout,period,status,itemcode,remarks) VALUES ('$title','$issn','$frequency','$agent','$price','$focus','$subject','$expiration','$date_renewed','$t_timesout','$period','$status','$itemcode','$remarks')") or die(mysql_error());
                                                       
                            
                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO serial_title (serial_title,issn,frequency,agent,price,focus,subject,expiration,date_renewed,t_timesout,period,status,itemcode,remarks) VALUES ('$title','$issn','$frequency','$agent','$price','$focus','$subject','$expiration','$date_renewed','$t_timesout','$period','$status','$itemcode','$remarks')";

                        $sLink->exec($sql); 
                            
                            
						}
						echo "<script>alert('Serials item successfully added!'); window.location='list_of_serials.php'</script>";
						 
						}
						?>
	  
      </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>