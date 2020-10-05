<?php include('header.php'); 

$id=$_GET['id'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Other Policies</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT OTHER POLICIES</h2>

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
						<a href="list_of_other_policies.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
    $stmt = $sLink->query("select * from overduecharge where ID='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);                 
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Monday</label>
						<div class="col-sm-4">
						  <select name="other_monday" class="form-control">
							<option value="<?php echo $row['Monday']; ?>"><?php echo $row['Monday']; ?></option>
							<option value="True">True</option>
							<option value="False">False</option>

						  </select>
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Friday</label>
						<div class="col-sm-4">
						  <select name="other_friday" class="form-control">
							<option value="<?php echo $row['Friday']; ?>"><?php echo $row['Friday']; ?></option>
							<option value="True">True</option>
							<option value="False">False</option>

						  </select>
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Saturday</label>
						<div class="col-sm-4">
						  <select name="other_saturday" class="form-control">
							<option value="<?php echo $row['Saturday']; ?>"><?php echo $row['Saturday']; ?></option>
							<option value="True">True</option>
							<option value="False">False</option>

						  </select>
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Sunday</label>
						<div class="col-sm-4">
						  <select name="other_sunday" class="form-control">
							<option value="<?php echo $row['Sunday']; ?>"><?php echo $row['Sunday']; ?></option>
							<option value="True">True</option>
							<option value="False">False</option>

						  </select>
						</div>
					  </div>	
                        
 					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Heading</label>
						<div class="col-sm-3">
						  <input type="text" style="width: 400px" name="other_heading" value="<?php echo $row['Heading']; ?>" class="form-control" id="inputEmail3" placeholder="heading">
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

						$other_monday=$_POST['other_monday'];
						$other_friday=$_POST['other_friday'];
						$other_saturday=$_POST['other_saturday'];
						$other_sunday=$_POST['other_sunday'];
						$other_heading=$_POST['other_heading'];
						



{

                $sql = " UPDATE overduecharge SET Monday='$other_monday', Friday='$other_friday', Saturday='$other_saturday', Sunday='$other_sunday', Heading='$other_heading' WHERE ID = '$id' ";
                $sLink->exec($sql);  
    
                echo "<script>alert('Successfully updated information!'); window.location='list_of_other_policies.php'</script>";
}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
