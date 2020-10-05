<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Patron</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add Patron Information</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>		
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:60px;">

					  <div class="form-group">
						<label for="name" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-7">
						  <input type="text" name="name" class="form-control" id="name" placeholder="Name....." required />
						</div>
					  </div>
					  
							  <div class="form-group">
						<label for="idnum" class="col-sm-3 control-label">ID number</label>
						<div class="col-sm-7">
						  <input type="text" name="idnum" class="form-control" id="idnum" placeholder="ID number....." required />
						</div>
					  </div>			  
					  
					  <div class="form-group">
						<label for="pGroup" class="col-sm-3 control-label">Group</label>
						<div class="col-sm-7">
						  <select name="group" class="form-control" required>
 							<option></option>                             
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
						<label for="description" class="col-sm-3 control-label">Description</label>
						<div class="col-sm-7">
						  <input type="text" name="description" class="form-control" id="description" placeholder="Description....." required />
						</div>

					  </div>
					  <div class="form-group">
						<label for="address" class="col-sm-3 control-label">Address</label>
						<div class="col-sm-7">
						  <input type="text" name="address" class="form-control" id="address" placeholder="Address....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-7">
						  <input type="email" name="email" class="form-control" id="email" placeholder="Email....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="contact" class="col-sm-3 control-label">Contact</label>
						<div class="col-sm-7">
						  <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="loan" class="col-sm-3 control-label">On loan</label>
						<div class="col-sm-7">
						  <input type="number" name="loan" class="form-control" id="loan" value="0"  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="fine" class="col-sm-3 control-label">Fine</label>
						<div class="col-sm-7">
						  <input type="number" name="fine" min="0" step="0.01" class="form-control" id="fine" value="0"  />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="date_encoded" class="col-sm-3 control-label">Date encoded</label>
						<div class="col-sm-7">
						  <input type="date" name="date_encoded" class="form-control" id="date_encoded" placeholder="Date encoded....." required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="date_expired" class="col-sm-3 control-label">Date expired</label>
						<div class="col-sm-7">
						  <input type="date" name="date_expired" class="form-control" id="date_expired" placeholder="Date expired....." required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="remarks" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-7">
						<textarea class="form-control" name="remarks" id="remarks" placeholder="Remarks....."  /></textarea>
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
						//include('include/database.php');
						include('connect.php');						
						if (isset($_POST['submit'])){
							
						$idnum=$_POST['idnum'];
						$name=$_POST['name'];
                        $name = str_replace("'", "`", $name);                           
						$group=$_POST['group'];
						$description=$_POST['description'];
						$address=$_POST['address'];
                        $address = str_replace("'", "`", $address);                           
						$email=$_POST['email'];
						$contact=$_POST['contact'];
						$fine=$_POST['fine'];						
						$loan=$_POST['loan'];
						$remarks=$_POST['remarks'];	
                        $remarks = str_replace("'", "`", $remarks);
                            
						//echo date('Y-m-d', strtotime($date1))						
						$date1 = strtr($_POST['date_encoded'], '/', '-');
						$insertdate1 = date('Y-m-d', strtotime($date1));
						$date2 = strtr($_POST['date_expired'], '/', '-');
						$insertdate2 = date('Y-m-d', strtotime($date2));
						
						{
                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO client (idnum,name,dgroup,description,address,email,telephone,overdue,bkloan,remarks,dateapplied,dateexpired) 						
						 VALUES ('$idnum','$name','$group','$description','$address','$email','$contact','$fine','$loan','$remarks','$insertdate1','$insertdate2')";

                        $sLink->exec($sql);                             
                            
						}
						echo "<script>alert('Patron information successfully added!'); window.location='list_of_client.php'</script>";
						 
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