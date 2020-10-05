<!-- Patron Item Detail Modal -->
<div class="modal fade" id="patron<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Patron Item Details</h4>
      </div>
        
      
        <?php
		if (isset($_POST['patron'])){
            $id=$_GET['patron'];    
            $result= mysql_query("select * from client where id = '$id'") or die (mysql_error());
            while ($row= mysql_fetch_array ($result) ){
            $id=$row['id'];
            }
        }
        ?>

        <div class="modal-body">   

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">ID Number</label>
						<div class="col-sm-9">
						  <input type="number" name="idnum" value="<?php echo $row['idnum']; ?>" class="form-control" id="inputEmail3" placeholder="ID number.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9">
						  <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="inputEmail3" placeholder="Name.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Group</label>
						<div class="col-sm-9">
						  <select name="group" class="form-control">
							<option value="<?php echo $row['dgroup']; ?>"><?php echo $row['dgroup']; ?></option>
							<option value="Student">Student</option>
							<option value="Faculty">Faculty</option>
							<option value="GS">Grade School</option>							
							<option value="LS">Lower School</option>							
							<option value="MS">Middle School</option>
							<option value="HS">High School</option>	
							<option value="PS">Pre-School</option>		
							<option value="Nun">College</option>								
							<option value="Admin">Administrator</option>
							<option value="Manager">Manager</option>								
							<option value="Nun">Nun</option>		
							<option value="Pastor">Pastor</option>							
							<option value="Personnel">Personnel</option>
							<option value="Priest">Priest</option>									
							<option value="Staff">Staff</option>	
						  </select>
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Description</label>
						<div class="col-sm-9">
						  <input type="text" name="description"  value="<?php echo $row['description']; ?>" class="form-control" id="inputPassword3" placeholder="Description.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Address</label>
						<div class="col-sm-9">
						  <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" id="inputPassword3" placeholder="Address.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
						  <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="inputPassword3" placeholder="Email.....">
						</div>
					  </div>					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Contact</label>
						<div class="col-sm-9">
						  <input type="number" name="contact" value="<?php echo $row['telephone']; ?>" class="form-control" id="inputPassword3" placeholder="Contact.....">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">On loan</label>
						<div class="col-sm-9">
						  <input type="number" name="loan" value="<?php echo $row['bkloan']; ?>" class="form-control" id="inputPassword3" placeholder="On loan.....">
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Fine</label>
						<div class="col-sm-9">
						  <input type="text" name="fine" value="<?php echo $row['overdue']; ?>" class="form-control" id="inputPassword3" placeholder="Fine.....">
						</div>
					  </div>	

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date encoded</label>
						<div class="col-sm-9">
						  <input type="text" name="date_encoded" value="<?php echo $row['dateapplied']; ?>" class="form-control" id="inputPassword3" placeholder="Date encoded.....">
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date expired</label>
						<div class="col-sm-9">
						  <input type="text" name="date_expired" value="<?php echo $row['dateexpired']; ?>" class="form-control" id="inputPassword3" placeholder="Date encoded.....">
						</div>
					  </div>                    
        
            </form>
            
            
					<div class="modal-footer">
					<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
					</div> 
        </div>   
    </div>
  </div>
</div>