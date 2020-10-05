<?php include('header.php'); 

$id=$_GET['item_id'];


?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="#">Serials Item Renewal</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT SERIAL ITEM RENEWAL DETAILS</h2>

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
  $stmt = $sLink->query("select * from renewal where id='$id'");
  $row = $stmt->fetch(PDO::FETCH_ASSOC);                   
  //$query=mysql_query("select * from renewal where id='$ID'")or die(mysql_error());
  //$row=mysql_fetch_array($query);
                
    $title=$row['title'];;
    $itemcode=$row['itemcode'];
    $source=$row['source'];
    $remarks=$row['remarks'];
    $period=$row['period_cover'];
    $amount=$row['amount'];

    $id =$row['id'];

    $date1 = strtr($row['date_order'], '/', '-');
    $date_order = date('Y-m-d', strtotime($date1));	   
                
?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label">Journal title</label>
						<div class="col-sm-7">
						  <input type="text" name="title" value="<?php echo $title; ?>"  class="form-control" id="title" placeholder="Journal title....." required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="itemcode" class="col-sm-3 control-label">Item code</label>
						<div class="col-sm-7">
						  <input type="text" name="itemcode" value="<?php echo $itemcode; ?>" class="form-control" id="itemcode" placeholder="Item code....."  />
						</div>
					  </div>	
                        
 					  <div class="form-group">
						<label for="date_order" class="col-sm-3 control-label">Date order</label>
						<div class="col-sm-7">
						  <input type="date" name="date_order" value="<?php echo $date_order; ?>" class="form-control" id="date_order" placeholder="Date order....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="period" class="col-sm-3 control-label">Period cover</label>
						<div class="col-sm-7">
						  <input type="text" name="period" value="<?php echo $period; ?>" class="form-control" id="period" placeholder="Period cover....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="amount" class="col-sm-3 control-label">Subscription fee</label>
						<div class="col-sm-7">
						  <input type="number" name="amount" min="0" step="0.01" value="<?php echo $amount; ?>" class="form-control" id="amount" placeholder="Subscription fee....." />
						</div>
					  </div>  
                        
  					  <div class="form-group">
						<label for="source" class="col-sm-3 control-label">Source</label>
						<div class="col-sm-7">
						  <input type="text" name="source" value="<?php echo $source; ?>" class="form-control" id="source" placeholder="Source....."  />
						</div>
					  </div>      
                        
    					  <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-7">
						  <input type="text" name="remarks" value="<?php echo $remarks; ?>" class="form-control" id="remarks" placeholder="Remarks....."  />
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
		
    $title=$_POST['title'];
    $itemcode=$_POST['itemcode'];
    $source=$_POST['source'];
    $remarks=$_POST['remarks'];
    $period=$_POST['period'];
    $amount=$_POST['amount'];

    $date1 = strtr($_POST['date_order'], '/', '-');
    $date_order = date('Y-m-d', strtotime($date1));	     
    

{
                        $sql = " UPDATE renewal SET title='$title', itemcode='$itemcode', source='$source', remarks='$remarks', period_cover='$period', date_order='$date_order', amount='$amount' WHERE id = '$id' ";
                        $sLink->exec($sql); 
    
							//mysql_query(" UPDATE renewal SET title='$title', itemcode='$itemcode', source='$source', remarks='$remarks', period='$period', date_order='$date_order', amount='$amount' WHERE id = '$id' ")or die(mysql_error());
	
                        echo "<script>alert('Successfully updated serials item renewal information!'); window.location='list_of_serials.php'</script>";

}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
