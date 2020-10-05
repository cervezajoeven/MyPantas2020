<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i> Add User</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Add User</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:100px;">
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-7">
						  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name....." required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Group</label>
						<div class="col-sm-7">
						  <input type="text" name="group" class="form-control" id="inputEmail3" placeholder="Group....." required />
						</div>

					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Address</label>
						<div class="col-sm-7">
						  <input type="text" name="address" class="form-control" id="inputPassword3" placeholder="Address....." />
						</div>
						<span style="color:red;">optional</span>						
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Username</label>
						<div class="col-sm-7">
						  <input type="text" name="username" class="form-control" id="inputPassword3" placeholder="Username....." required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-7">
						  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password....." required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
						</div>
					  </div>
					</form>
					
						<?php 
						//include('include/database.php');
						include('connect.php');							
						if (isset($_POST['submit'])){
							
						$name=$_POST['name'];
						$group=$_POST['group'];
						$address=$_POST['address'];
						$username=$_POST['username'];
						//$password=$_POST['password'];
                        $password = md5($_POST['password']);					

						{
                            
                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO user (name,grp,address,username,password,user_added)VALUES ('$name','$group','$address','$username','$password',NOW())";

                        $sLink->exec($sql);  
                            
						//mysql_query ("INSERT INTO user (lastname,grp,address,username,password,user_added)						 VALUES ('$name','$group','$address','$username','$password',NOW())")or die(mysql_error());
						}
						echo "<script>alert('User successfully added!'); window.location='user.php'</script>";
						 
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>