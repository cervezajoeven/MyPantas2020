<?php include('header.php'); 

$ID=$_GET['item_id'];

?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Serials Item</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT SERIAL ITEM DETAILS</h2>

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
						<a href="list_of_serials.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
  $stmt = $sLink->query("select * from serial_title where id='$ID'");
  $row = $stmt->fetch(PDO::FETCH_ASSOC);                
  //$query=mysql_query("select * from serial_title where id='$ID'")or die(mysql_error());
  //$row=mysql_fetch_array($query);
                
  $expiration = $row['expiration']; 
  $date1 = strtr($expiration, '/', '-');
  $expiration = date('Y-m-d', strtotime($date1));

  $date_renewed = $row['date_renewed'];                         
  $date2 = strtr($date_renewed, '/', '-');
  $date_renewed = date('Y-m-d', strtotime($date2));      
                
?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
					  <div class="form-group">
						<label for="serial_title" class="col-sm-3 control-label">Serial title</label>
						<div class="col-sm-4">
						  <input type="text" name="serial_title" value="<?php echo $row['serial_title']; ?>" class="form-control" id="serial_title" placeholder="Serial title...">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="issn" class="col-sm-3 control-label">ISSN</label>
						<div class="col-sm-4">
						  <input type="text" name="issn" value="<?php echo $row['issn']; ?>" class="form-control" id="issn" placeholder="ISSN.....">
						</div>
					  </div>
                        

                        
                    <div class="form-group">
						<label for="frequency" class="col-sm-3 control-label">Frequency</label>
						<div class="col-sm-4">
						  <select name="frequency" class="form-control" >
                            <option><?php echo $row['frequency']; ?></option>  
                            <option>Annually</option>
                            <option>Bi-annully</option>
                            <option>Bi-monthly</option>
                            <option>Daily</option>
                            <option>Forthnightly</option>
                            <option>Monthly</option>
                            <option>Quarterly</option>
                            <option>Weekly</option>			
						  </select>
						</div>
					  </div>  
					  
                        
                         <div class="form-group">
						<label for="agent" class="col-sm-3 control-label">Vendor</label>
						<div class="col-sm-4">
						  <select name="agent" class="form-control" >
                            <option><?php echo $row['agent']; ?></option> 
                            <option>JnJ</option>
                            <option>Universal Magazine</option>
                            <option>Jetspeed</option>
                            <option>Global</option>	
						  </select>
						</div>
					  </div>                        
                        
                        
					  <div class="form-group">
						<label for="price" class="col-sm-3 control-label">Price</label>
						<div class="col-sm-4">
						  <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control" id="price" placeholder="Price...">
						</div>
					  </div>
                           
                 	  <div class="form-group">
						<label for="focus" class="col-sm-3 control-label">Focus</label>
						<div class="col-sm-4">
						  <select name="focus" class="form-control" >
                               <option><?php echo $row['focus']; ?></option>                             
                              <option>International</option>
                            <option>Local</option>
                            <option>National</option>
                            <option>Regional</option>						
						  </select>
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="subject" class="col-sm-3 control-label">Subject coverage</label>
						<div class="col-sm-4">
						  <input type="text" name="subject" value="<?php echo $row['subject']; ?>" class="form-control" id="subject" placeholder="Subject.....">
						</div>
					  </div>
                        
       					  <div class="form-group">
						<label for="expiration" class="col-sm-3 control-label">Expiration</label>
						<div class="col-sm-4">
						  <input type="date" name="expiration" value="<?php echo $expiration; ?>" class="form-control" id="expiration" placeholder="Expiration.....">
						</div>
					  </div>	                     
                        
					  <div class="form-group">
						<label for="date_renewed" class="col-sm-3 control-label">Renewal date</label>
						<div class="col-sm-4">
						  <input type="date" name="date_renewed" value="<?php echo $date_renewed; ?>" class="form-control" id="date_renewed" placeholder="Renewal date.....">
						</div>
					  </div>
                        
   					  <div class="form-group">
						<label for="timesout" class="col-sm-3 control-label">Times out</label>
						<div class="col-sm-4">
						  <input type="text" name="t_timesout" value="<?php echo $row['t_timesout']; ?>" class="form-control" id="timesout" placeholder="Times out...">
						</div>
					  </div>                    
                        
   					  <div class="form-group">
						<label for="period" class="col-sm-3 control-label">Period</label>
						<div class="col-sm-4">
						  <input type="text" name="period" value="<?php echo $row['period']; ?>" class="form-control" id="period" placeholder="Period...">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="status" class="col-sm-3 control-label">Status</label>
						<div class="col-sm-4">
						  <input type="text" name="status" value="<?php echo $row['status']; ?>" class="form-control" id="status" placeholder="Status.....">
						</div>
					  </div>
                        
        					  <div class="form-group">
						<label for="code" class="col-sm-3 control-label">Item code</label>
						<div class="col-sm-4">
						  <input type="text" name="itemcode" value="<?php echo $row['itemcode']; ?>" class="form-control" id="code" placeholder="Code...">
						</div>
					  </div>                 
                        
      		        <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-4">
						  <input type="text" name="remarks" value="<?php echo $row['remarks']; ?>" class="form-control" id="remarks" placeholder="Remarks...">
						</div>
					  </div>                     
                        
					  <div class="form-group">
						<label for="update" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['item_id'];
if (isset($_POST['update'])) {
		
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
                        $sql = " UPDATE serial_title SET serial_title='$title', issn='$issn', frequency='$frequency', agent='$agent', price='$price', focus='$focus', subject='$subject', expiration='$expiration', date_renewed='$date_renewed', t_timesout='$t_timesout', period='$period', status='$status', itemcode='$itemcode', remarks='$remarks' WHERE id = '$id' ";
                        $sLink->exec($sql);  
    
                        //mysql_query(" UPDATE serial_title SET serial_title='$title', issn='$issn', frequency='$frequency', agent='$agent', price='$price', focus='$focus', subject='$subject', expiration='$expiration', date_renewed='$date_renewed', t_timesout='$t_timesout', period='$period', status='$status', itemcode='$itemcode', remarks='$remarks' WHERE id = '$id' ")or die(mysql_error());

                        echo "<script>alert('Successfully updated serials item information!'); window.location='list_of_serials.php'</script>";

}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
