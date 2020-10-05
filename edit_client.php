<?php include('header.php'); 


$ID=$_GET['client_id'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Patron</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT PATRON INFORMATION</h2>

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
						<a href="list_of_client.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
    $stmt = $sLink->query("select * from client where id='$ID'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);                 

//$query=mysql_query("select * from client where id='$ID'")or die(mysql_error());
//$row=mysql_fetch_array($query);
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">ID Number</label>
						<div class="col-sm-3">
						  <input type="text" name="idnum" value="<?php echo $row['idnum']; ?>" class="form-control" id="inputEmail3" placeholder="ID number.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="inputEmail3" placeholder="Name.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Group</label>
						<div class="col-sm-4">
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
						<div class="col-sm-4">
						  <input type="text" name="description"  value="<?php echo $row['description']; ?>" class="form-control" id="inputPassword3" placeholder="Description.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Address</label>
						<div class="col-sm-4">
						  <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" id="inputPassword3" placeholder="Address.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-4">
						  <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="inputPassword3" placeholder="Email.....">
						</div>
					  </div>					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Contact</label>
						<div class="col-sm-4">
						  <input type="number" name="contact" value="<?php echo $row['telephone']; ?>" class="form-control" id="inputPassword3" placeholder="Contact.....">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">On loan</label>
						<div class="col-sm-4">
						  <input type="number" name="loan" value="<?php echo $row['bkloan']; ?>" class="form-control" id="inputPassword3" placeholder="On loan.....">
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Fine</label>
						<div class="col-sm-4">
						  <input type="number" name="fine" min="0" step="0.01" value="<?php echo $row['overdue']; ?>" class="form-control" id="inputPassword3" placeholder="Fine.....">
						</div>
					  </div>	

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date encoded</label>
						<div class="col-sm-4">
						  <input type="text" name="date_encoded" value="<?php echo $row['dateapplied']; ?>" class="form-control" id="inputPassword3" placeholder="Date encoded.....">
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date expired</label>
						<div class="col-sm-4">
						  <input type="text" name="date_expired" value="<?php echo $row['dateexpired']; ?>" class="form-control" id="inputPassword3" placeholder="Date encoded.....">
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
$id =$_GET['client_id'];
if (isset($_POST['update'])) {

						$idnum=$_POST['idnum'];
						$name=$_POST['name'];
						$group=$_POST['group'];
						$description=$_POST['description'];
						$address=$_POST['address'];
						$email=$_POST['email'];
						$contact=$_POST['contact'];
						$fine=$_POST['fine'];						
						$loan=$_POST['loan'];
						$remarks=$_POST['remarks'];	
						$date_encoded=$_POST['date_encoded'];
						$date_expired=$_POST['date_expired'];							



{
//mysql_query(" UPDATE client SET idnum='$idnum', name='$name', dgroup='$group', description='$description', address='$address', email='$email', telephone='$contact', overdue='$fine', bkloan='$loan', remarks='$remarks', dateapplied='$date_encoded', dateexpired='$date_expired' WHERE id = '$id' ")or die(mysql_error());
    
                $sql = " UPDATE client SET idnum='$idnum', name='$name', dgroup='$group', description='$description', address='$address', email='$email', telephone='$contact', overdue='$fine', bkloan='$loan', remarks='$remarks', dateapplied='$date_encoded', dateexpired='$date_expired' WHERE id = '$id' ";
                $sLink->exec($sql);  
    
echo "<script>alert('Successfully updated patron information!'); window.location='list_of_client.php'</script>";
}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
