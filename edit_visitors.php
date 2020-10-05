<?php include('header.php'); 


$ID=$_GET['client_id'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Visiting researcher</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT VISITING RESEARCHER INFORMATION</h2>

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
						<a href="list_of_visitors.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
    $stmt = $sLink->query("select * from outside_user where id='$ID'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);                    
                
  //$query=mysql_query("select * from outside_user where id='$ID'")or die(mysql_error());
//$row=mysql_fetch_array($query);
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="inputEmail3" placeholder="Name.....">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Institution</label>
						<div class="col-sm-4">
						  <input type="text" name="institution"  value="<?php echo $row['institution']; ?>" class="form-control" id="inputPassword3" placeholder="Institution.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Topic of research</label>
						<div class="col-sm-4">
						  <input type="text" name="topic" value="<?php echo $row['topic']; ?>" class="form-control" id="inputPassword3" placeholder="Topic of research.....">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Contact</label>
						<div class="col-sm-4">
						  <input type="text" name="contact" value="<?php echo $row['contact']; ?>" class="form-control" id="inputPassword3" placeholder="Contact.....">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Fee</label>
						<div class="col-sm-4">
						  <input type="number" name="fee" min="0" step="0.01" value="<?php echo $row['fee']; ?>" class="form-control" id="inputPassword3" placeholder="Fee.....">
						</div>
					  </div>	

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date of visit</label>
						<div class="col-sm-4">
						  <input type="text" name="date_visit" value="<?php echo $row['date_of_visit']; ?>" class="form-control" id="inputPassword3" placeholder="Date of visit.....">
						</div>
					  </div>					  

  					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Remarks</label>
						<div class="col-sm-4">
						  <input type="text" name="remarks" value="<?php echo $row['remarks']; ?>" class="form-control" id="inputPassword3" placeholder="Remarks.....">
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


						$name=$_POST['name'];
						$institution=$_POST['institution'];
						$topic=$_POST['topic'];
						$contact=$_POST['contact'];
						$fee=$_POST['fee'];						
						$remarks=$_POST['remarks'];	
						$date_visit=$_POST['date_visit'];
						

{
    
    
//mysql_query(" UPDATE outside_user SET name='$name', institution='$institution', topic='$topic', contact='$contact', fee='$fee', remarks='$remarks', date_of_visit='$date_visit' WHERE id = '$id' ")or die(mysql_error());
    
                $sql = " UPDATE outside_user SET name='$name', institution='$institution', topic='$topic', contact='$contact', fee='$fee', remarks='$remarks', date_of_visit='$date_visit' WHERE id = '$id' ";
                $sLink->exec($sql);      
    
echo "<script>alert('Successfully updated visiting researcher information!'); window.location='list_of_visitors.php'</script>";
}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
