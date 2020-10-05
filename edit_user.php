<?php include('header.php'); 


$id=$_GET['user_id'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">User Item</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT USER`S ITEM DETAILS</h2>

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
						<a href="user.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
     $stmt = $sLink->query("select * from user where id='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);      
                
  //$query=mysql_query("select * from user where id='$id'")or die(mysql_error());
//$row=mysql_fetch_array($query);
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:250px;">
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="inputEmail3" placeholder="Name....." required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Group</label>
						<div class="col-sm-4">
						  <input type="text" name="group" value="<?php echo $row['grp']; ?>" class="form-control" id="inputEmail3" placeholder="Group....." required />
						</div>

					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-4">
						  <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" id="inputPassword3" placeholder="Address....."  />
						</div>
						<span style="color:red;">optional</span>						
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-4">
						  <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" id="inputPassword3" placeholder="Username....." required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-4">
						  <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control" id="inputPassword3" placeholder="Password....." required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['user_id'];
if (isset($_POST['update'])) {

						$name=$_POST['name'];
						$group=$_POST['group'];
						$address=$_POST['address'];
						$username=$_POST['username'];
						$password=$_POST['password'];


{
    
    
//mysql_query(" UPDATE user SET lastname='$name', grp='$group', address='$address', username='$username', password='$password' WHERE id = '$id' ")or die(mysql_error());
    
                $sql = " UPDATE user SET name='$name', grp='$group', address='$address', username='$username', password='$password' WHERE id = '$id' ";
                $sLink->exec($sql);        
    
echo "<script>alert('Successfully updated user information!'); window.location='user.php'</script>";
}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
