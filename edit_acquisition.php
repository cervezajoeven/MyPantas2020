<?php include('header.php'); 
$id=$_GET['id']; ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Acquisition</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT ACQUISITION ITEM DETAILS</h2>

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
						<a href="list_of_acquisition.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
    //$query=mysql_query("select * from acquisition where id='$id'")or die(mysql_error());
    //$row=mysql_fetch_array($query);
    $stmt = $sLink->query("select * from acquisition where id='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);   
                
    $date_encode=$row['da_te'];
    $da_te = date('Y-m-d', strtotime($date_encode));   
                
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label">Title</label>
						<div class="col-sm-7">
						  <input type="text" name="title" width="50" value="<?php echo $row['title']; ?>" class="form-control" id="title" placeholder="Creator or author.....">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="author" class="col-sm-3 control-label">Creator</label>
						<div class="col-sm-7">
						  <input type="text" name="author" value="<?php echo $row['author']; ?>" class="form-control" id="author" placeholder="Creator or author.....">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="publisher" class="col-sm-3 control-label">Publisher</label>
						<div class="col-sm-7">
						  <input type="text" name="publisher" value="<?php echo $row['publisher']; ?>" class="form-control" id="publisher" placeholder="Publisher.....">
						</div>
					  </div>	

					  <div class="form-group">
						<label for="ye_ar" class="col-sm-3 control-label">Date</label>
						<div class="col-sm-4">
						  <input type="text" name="ye_ar" value="<?php echo $row['ye_ar']; ?>" class="form-control" id="ye_ar" placeholder="Date or year of publication.....">
						</div>
					  </div>	
                        
 					<div class="form-group">
						<label for="edition" class="col-sm-3 control-label">Edition</label>
						<div class="col-sm-4">
						  <input type="text" name="edition" value="<?php echo $row['edition']; ?>" class="form-control" id="isbn" placeholder="Edition.....">
						</div>						  
					  </div>                       
					  
					<div class="form-group">
						<label for="isbn" class="col-sm-3 control-label">ISBN</label>
						<div class="col-sm-4">
						  <input type="text" name="isbn" value="<?php echo $row['isbn']; ?>" class="form-control" id="isbn" placeholder="ISBN.....">
						</div>						  
					  </div>
					  
					  <div class="form-group">
						<label for="quantity" class="col-sm-3 control-label">Quantity</label>
						<div class="col-sm-4">
						  <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" class="form-control" id="quantity" placeholder="Quantity.....">
						</div>
					  </div>						  


					  <div class="form-group">
						<label for="unit_price" class="col-sm-3 control-label">Unit Price</label>
						<div class="col-sm-4">
						  <input type="number" name="unit_price" min="0" step="0.01" value="<?php echo $row['unit_price']; ?>" class="form-control" id="unit_price" placeholder="Unit price.....">
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="total_price" class="col-sm-3 control-label">Total Price</label>
						<div class="col-sm-4">
						  <input type="number" name="total_price" min="0" step="0.01" value="<?php echo $row['total_price']; ?>" class="form-control" id="total_price" placeholder="Total price.....">
						</div>
					  </div>       
                        
 					  <div class="form-group">
						<label for="discount" class="col-sm-3 control-label">Discount (%)</label>
						<div class="col-sm-4">
						  <input type="number" name="discount" min="0" step="0.01" value="<?php echo $row['discount']; ?>" class="form-control" id="discount" placeholder="Discount.....">
						</div>
					  </div>
                        
   					  <div class="form-group">
						<label for="discount_amount" class="col-sm-3 control-label">Discount amount</label>
						<div class="col-sm-4">
						  <input type="number" name="discount_amount" min="0" step="0.01" value="<?php echo $row['discount_amount']; ?>" class="form-control" id="discount_amount" placeholder="Discount amount.....">
						</div>
					  </div> 
                        
 					  <div class="form-group">
						<label for="net_price" class="col-sm-3 control-label">Net Price</label>
						<div class="col-sm-4">
						  <input type="number" name="net_price" min="0" step="0.01" value="<?php echo $row['net_price']; ?>" class="form-control" id="net_price" placeholder="Net price.....">
						</div>
					  </div>
                        
				      <div class="form-group">
						<label for="recommend" class="col-sm-3 control-label">Recommended by</label>
						<div class="col-sm-7">
						  <input type="text" name="recommend" value="<?php echo $row['recommended']; ?>" class="form-control" id="recommend" placeholder="Recommended by.....">
						</div>	
					  </div>
                                                
					  <div class="form-group">
						<label for="department" class="col-sm-3 control-label">Unit/Program</label>
						<div class="col-sm-7">
						  <select name="department" class="form-control">
                              <option><?php echo $row['dept']; ?></option>
                              <option>Accountancy (CBEA)</option>
                              <option>ACT/Math (CAS)</option>
                              <option>Business Administration (CBEA)</option>
                              <option>Child Development and Education (CED)</option>
                              <option>Communicaton Arts (CAS)</option>
                              <option>English (CAS)</option>
                              <option>Entrepreneurship (CBEA)</option>
                              <option>EPM/Environmental studies (CAS)</option>
                              <option>FDP (CAS)</option>
                              <option>Filipino (CAS)</option>
                              <option>Human Resources (CBEA)</option>
                              <option>Humanities/Forieng language (CAS)</option>
                              <option>International Studies (CIHDS)</option>
                              <option>Migration Studies (CIHDS)</option>
                              <option>NSTP (CAS)</option>
                              <option>Philosophy (CAS)</option>
                              <option>Physical Education (CAS)</option>
                              <option>Psychology (CAS)</option>
                              <option>Science (CAS)</option>
                              <option>Social Science (CAS)</option>
                              <option>Social Work (CIHDS)</option>
                              <option>Special Education (CED)</option>
                              <option>Theology (CAS)</option>                     
						  </select>
						</div>
					  </div>                         
                        
 					  <div class="form-group">
						<label for="mtype" class="col-sm-3 control-label">Material type</label>
						<div class="col-sm-7">
						  <select name="mtype" class="form-control">
                              <option><?php echo $row['mtype']; ?></option>
                              <option>Book</option>
                              <option>CD-ROM</option>
                              <option>VHS</option>
                              <option>DVD</option>
                              <option>VCD</option>
                              <option>MAP</option>
                              <option>Globe</option>                           
						  </select>
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="mode" class="col-sm-3 control-label">Mode of acquisition</label>
						<div class="col-sm-7">
						  <select name="mode" class="form-control">
							<option><?php echo $row['mode']; ?></option>
							<option value="purchase">Purchase</option>
							<option value="donation">Donation</option>
							<option value="gift">Gift</option>
  							<option value="exchange">Exchange</option>
							<option value="deposit">Depository</option>	                              
						  </select>
						</div>
					  </div>
					  
    				  <div class="form-group">
						<label for="status" class="col-sm-3 control-label">Status</label>
						<div class="col-sm-7">
						  <select name="status" class="form-control">
                              <option><?php echo $row['status']; ?></option>
                              <option>acquired</option>
                              <option>direct-order</option>
                              <option>for approval</option>
                              <option>for examination</option>
                              <option>for quotation</option>
                              <option>future order</option>                              
                              <option>indent-order</option>
                              <option>local-order</option>                     
						  </select>
						</div>
					  </div>                       
                        
  					  <div class="form-group">
						<label for="dealer" class="col-sm-3 control-label">Dealer/Vendor</label>
						<div class="col-sm-7">
						  <select name="dealer" class="form-control">
                              <option><?php echo $row['dealer']; ?></option>
                              <option>Belview</option> 
                              <option>CD Books</option>
                              <option>Fastbook</option>                              
                              <option>Forefront</option>
                              <option>F and J</option>
                              <option>Golden Books</option>
                              <option>Great Books</option>
                              <option>JnJ</option>                              
                              <option>Linar</option>
                              <option>Megatext</option>
						  </select>
						</div>
					  </div>                        
                        
 					  <div class="form-group">
						<label for="whereis" class="col-sm-3 control-label">Place of selection</label>
						<div class="col-sm-7">
						  <select name="whereis" class="form-control">
                              <option><?php echo $row['whereis']; ?></option>
                              <option>ABAP</option>
                              <option>Bookstore</option>
                              <option>Bookfair</option>
                              <option>Dealer</option>
                              <option>MIBF</option>
                              <option>Malaysia</option>
                              <option>Showroom</option>                                 
                              <option>Singapore</option>                         
						  </select>
						</div>
					  </div>                       
                     
                         
 				      <div class="form-group">
						<label for="tagg" class="col-sm-3 control-label">Course tag</label>
						<div class="col-sm-7">
						  <input type="text" name="tagg" value="<?php echo $row['tagg']; ?>" class="form-control" id="tagg" placeholder="Course tag.....">
						</div>							
					  </div>                      
                         
					  <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-7">
						<textarea class="form-control" name="remarks" value="<?php echo $row['remarks']; ?>" id="remarks" placeholder="Remarks..."><?php echo $row['remarks']; ?></textarea>
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="date_encoding" class="col-sm-3 control-label">Date of encoding</label>
						<div class="col-sm-7">
						  <input type="date" name="date_encoding" value="<?php echo $da_te; ?>" class="form-control" id="date_encoding" placeholder="Date of encoding.....">
						</div>	
					   </div>				
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['id'];
if (isset($_POST['update'])) {
						
						$title=$_POST['title'];
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        } 
						$author=$_POST['author'];
						$publisher=$_POST['publisher'];
						$ye_ar=$_POST['ye_ar'];
  						$edition=$_POST['edition'];
    					$isbn=$_POST['isbn'];
    					$quantity=$_POST['quantity'];
						$unit_price=$_POST['unit_price'];
						$total_price=$_POST['total_price'];    
						$net_price=$_POST['net_price'];
						$discount=$_POST['discount'];
						$discount_amount=$_POST['discount_amount'];    
						$status=$_POST['status'];
						$mode=$_POST['mode'];
    					$mtype=$_POST['mtype'];
 						$recommend=$_POST['recommend'];   
						$department=$_POST['department'];    
 						$dealer=$_POST['dealer'];   
						$da_te=$_POST['date_encoding'];
						$whereis=$_POST['whereis'];
						$remarks=$_POST['remarks'];			
						$tagg=$_POST['tagg'];
    
						//$date1 = strtr($_POST['date_acquisition'], '/', '-');
						//$da_te = date('Y-m-d', strtotime($date1)); 
    
						//$date_borrowed = date("Y-m-d H:i:s");	
{
                        $sql = " UPDATE acquisition SET title='$title', author='$author', publisher='$publisher', ye_ar='$ye_ar', edition='$edition', isbn='$isbn', quantity='$quantity', unit_price='$unit_price', total_price='$total_price', net_price='$net_price', discount='$discount', discount_amount='$discount_amount', mode='$mode', mtype='$mtype', status='$status', recommended='$recommend', da_te='$da_te', dept='$department', dealer='$dealer', remarks='$remarks', whereis='$whereis', tagg='$tagg' WHERE id = '$id' ";
                        $sLink->exec($sql);    
    
//mysql_query(" UPDATE acquisition SET title='$title', author='$author', publisher='$publisher', ye_ar='$ye_ar', edition='$edition', isbn='$isbn', quantity='$quantity', unit_price='$unit_price', total_price='$total_price', net_price='$net_price', discount='$discount', discount_amount='$discount_amount', mode='$mode', mtype='$mtype', status='$status', recommended='$recommend', da_te='$da_te', dept='$department', dealer='$dealer', remarks='$remarks', whereis='$whereis', tagg='$tagg' WHERE id = '$id' ")or die(mysql_error());
    
echo "<script>alert('Successfully updated acquistion item information!'); window.location='list_of_acquisition.php'</script>";
}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
