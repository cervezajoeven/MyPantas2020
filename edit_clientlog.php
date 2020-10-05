<?php include('header.php'); 


$ID=$_GET['client_id'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="list_of_attendance.php">Patron attencance</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT PATRON ATTENDANCE RECORD</h2>

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
						<a href="list_of_attendance.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
$stmt = $sLink->query("select * from clientlog where id_record='$ID'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);                 

//$query=mysql_query("select * from clientlog where id_record='$ID'")or die(mysql_error());
//$row=mysql_fetch_array($query);
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
					  <div class="form-group">
						<label for="idnum" class="col-sm-3 control-label">ID Number</label>
						<div class="col-sm-3">
						  <input type="text" name="idnum" value="<?php echo $row['id']; ?>" class="form-control" id="idnum" placeholder="ID number.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="name" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="name" placeholder="Name.....">
						</div>
					  </div>
					  <div class="form-group">
						<label for="grp" class="col-sm-3 control-label">Group</label>
						<div class="col-sm-4">
						  <select name="grp" class="form-control">
							<option value="<?php echo $row['grp']; ?>"><?php echo $row['grp']; ?></option>
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
						<div class="col-sm-4">
						  <input type="text" name="description"  value="<?php echo $row['level']; ?>" class="form-control" id="description" placeholder="Description.....">
						</div>
					  </div>
	

					  <div class="form-group">
						<label for="date_entered" class="col-sm-3 control-label">Date entered</label>
						<div class="col-sm-4">
						  <input type="text" name="date_entered" value="<?php echo $row['petsa']; ?>" class="form-control" id="date_entered" placeholder="Date entered.....">
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
$id =$_GET['client_id'];
if (isset($_POST['update'])) {

						$idnum=$_POST['idnum'];
						$name=$_POST['name'];
						$group=$_POST['grp'];
						$description=$_POST['description'];
						$date_entered=$_POST['date_entered'];
							
{
$sql = " UPDATE clientlog SET id='$idnum', name='$name', grp='$group', level='$description', petsa='$date_entered' WHERE id_record = '$id' ";
$sLink->exec($sql);      
    
//mysql_query(" UPDATE clientlog SET id='$idnum', name='$name', grp='$group', level='$description', petsa='$date_entered' WHERE id_record = '$id' ")or die(mysql_error());
    
echo "<script>alert('Successfully updated patron attendance!'); window.location='list_of_attendance.php'</script>";
}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
