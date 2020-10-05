<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add New Acquisition</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add New Acquisition Item</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>			
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:10px;">

					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label">Title</label>
						<div class="col-sm-8">
						  <input type="text" name="title"  class="form-control" id="title" placeholder="Title....." required>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="author" class="col-sm-3 control-label">Creator</label>
						<div class="col-sm-8">
						  <input type="text" name="author"  class="form-control" id="author" placeholder="Creator or author.....">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="publisher" class="col-sm-3 control-label">Publisher</label>
						<div class="col-sm-8">
						  <input type="text" name="publisher"  class="form-control" id="publisher" placeholder="Publisher.....">
						</div>
					  </div>	

					  <div class="form-group">
						<label for="ye_ar" class="col-sm-3 control-label">Date</label>
						<div class="col-sm-8">
						  <input type="text" name="ye_ar"  class="form-control" id="ye_ar" placeholder="Date or year of publication.....">
						</div>
					  </div>	
                        
 					<div class="form-group">
						<label for="edition" class="col-sm-3 control-label">Edition</label>
						<div class="col-sm-8">
						  <input type="text" name="edition"  class="form-control" id="isbn" placeholder="Edition.....">
						</div>						  
					  </div>                       
					  
					<div class="form-group">
						<label for="isbn" class="col-sm-3 control-label">ISBN</label>
						<div class="col-sm-8">
						  <input type="text" name="isbn"  class="form-control" id="isbn" placeholder="ISBN.....">
						</div>						  
					  </div>
					  
					  <div class="form-group">
						<label for="quantity" class="col-sm-3 control-label">Quantity</label>
						<div class="col-sm-8">
						  <input type="number" name="quantity" value="1" class="form-control" id="quantity" >
						</div>
					  </div>						  

					  <div class="form-group">
						<label for="unit_price" class="col-sm-3 control-label">Unit Price</label>
						<div class="col-sm-8">
						  <input type="number" name="unit_price" min="0" step="0.01" value="0" class="form-control" id="unit_price" >
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="total_price" class="col-sm-3 control-label">Total Price</label>
						<div class="col-sm-8">
						  <input type="number" name="total_price" min="0" step="0.01" value="0" class="form-control" id="total_price">
						</div>
					  </div>       
                        
 					  <div class="form-group">
						<label for="discount" class="col-sm-3 control-label">Discount (%)</label>
						<div class="col-sm-8">
						  <input type="number" name="discount"  min="0" step="0.01" value="0" class="form-control" id="discount" >
						</div>
					  </div>
                        
   					  <div class="form-group">
						<label for="discount_amount" class="col-sm-3 control-label">Discount amount</label>
						<div class="col-sm-8">
						  <input type="number" name="discount_amount" min="0" step="0.01" value="0" class="form-control" id="discount_amount" >
						</div>
					  </div> 
                        
 					  <div class="form-group">
						<label for="net_price" class="col-sm-3 control-label">Net Price</label>
						<div class="col-sm-8">
						  <input type="number" name="net_price" min="0" step="0.01" value="0" class="form-control" id="net_price" >
						</div>
					  </div>
                        
				      <div class="form-group">
						<label for="recommend" class="col-sm-3 control-label">Recommended by</label>
						<div class="col-sm-8">
						  <input type="text" name="recommend" value="<?php echo $row['recommended']; ?>" class="form-control" id="recommend" placeholder="Recommended by.....">
						</div>	
					  </div>
                                                
					  <div class="form-group">
						<label for="department" class="col-sm-3 control-label">Unit/Program</label>
						<div class="col-sm-8">
						  <select name="department" class="form-control">
                              <option></option>
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
						<div class="col-sm-8">
						  <select name="mtype" class="form-control">
                              <option></option>
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
						<div class="col-sm-8">
						  <select name="mode" class="form-control">
							<option></option>
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
						<div class="col-sm-8">
						  <select name="status" class="form-control">
                              <option></option>
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
						<div class="col-sm-8">
						  <select name="dealer" class="form-control">
                              <option></option>
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
						<div class="col-sm-8">
						  <select name="whereis" class="form-control">
                              <option></option>
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
						<div class="col-sm-8">
						  <input type="text" name="tagg"  class="form-control" id="tagg" placeholder="Course tag.....">
						</div>							
					  </div>                      
                         
					  <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-8">
						<textarea class="form-control" name="remarks"  id="remarks" placeholder="Remarks..."></textarea>
						</div>
					  </div>
                        
					  <div class="form-group">
						<div class="btn_center">
							<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>						
						   <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
						</div>
					  </div>
                        
					</form>
					
						<?php 
						include('connect.php');
						if (isset($_POST['submit'])){
				
						$title=$_POST['title'];
                        $title = str_replace("'", "`", $title);                          
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        }     
						$author=$_POST['author'];
						$publisher=$_POST['publisher'];
                        $publisher = str_replace("'", "`", $publisher);                           
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
						$whereis=$_POST['whereis'];
						$remarks=$_POST['remarks'];			
						$tagg=$_POST['tagg'];
						
						$da_te = date("Y-m-d H:i:s");
						{
                        
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO acquisition (title,author,publisher,ye_ar,edition,isbn,quantity,unit_price,total_price,net_price,discount,discount_amount,status,mode,mtype,recommended,dept,dealer,whereis,remarks,tagg,da_te) VALUES ('$title','$author','$publisher','$ye_ar','$edition','$isbn','$quantity','$unit_price','$total_price','$net_price', '$discount','$discount_amount','$status','$mode','$mtype','$recommend','$department','$dealer','$whereis','$remarks','$tagg','$da_te')";

                            $sLink->exec($sql);      
                            

						}
						echo "<script>alert('Acquisition item successfully added!'); window.location='list_of_acquisition.php'</script>";
						 
						}
						?>
	  
      </div>
	  <!--
		<div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
		</div>
		-->
    </div>
  </div>
</div>