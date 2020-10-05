<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MyPANTAS Restore Database Utility</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
	<style>
		h3 {
			text-align: center;
			background: orange;
		}
		h1 {
			text-align: center;
			background: lightblue;
		}
	</style>

</head>
    
 <div>
    <ul class="breadcrumb">
        <li>
            <a href="../home.php">Home</a>
        </li>
        
        <li>
            <a href="#">/Restore</a>
        </li>
    </ul>
</div>     
    
<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px;">MyPANTAS Restore Database Utility</h1>
	<hr>
	<div class="row justify-content-center">
		<div class="col-sm-6">
			<?php
				if(isset($_SESSION['error'])){
					?>
					<div class="alert alert-danger text-center">
						<?php echo $_SESSION['error']; ?>
					</div>
					<?php

					unset($_SESSION['error']);
				}

				if(isset($_SESSION['success'])){
					?>
					<div class="alert alert-success text-center">
						<?php echo $_SESSION['success']; ?>
					</div>
					<?php

					unset($_SESSION['success']);
				}
			?>
			<div class="card">
				<div class="card-body">
					<h3>Database name and specifications</h3>
					<br>
					<form method="POST" action="restore.php" enctype="multipart/form-data">
					    <div class="form-group row">
					     	<label for="server" class="col-sm-3 col-form-label">Server</label>
					      	<div class="col-sm-9">
					        	<input type="text" class="form-control" id="server" name="server" placeholder="ex 'localhost'" required>
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<label for="username" class="col-sm-3 col-form-label">Username</label>
					      	<div class="col-sm-9">
					        	<input type="text" class="form-control" id="username" name="username" placeholder="ex 'root'" required>
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<label for="password" class="col-sm-3 col-form-label">Password</label>
					      	<div class="col-sm-9">
					        	<input type="text" class="form-control" id="password" name="password" placeholder="db password">
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<label for="dbname" class="col-sm-3 col-form-label">Database</label>
					      	<div class="col-sm-9">
					        	<input type="text" class="form-control" id="dbname" name="dbname" placeholder="database you want to restore to" required>
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<label for="sql" class="col-sm-3 col-form-label">File</label>
					      	<div class="col-sm-9">
					        	<input type="file" class="form-control-file" id="sql" name="sql" placeholder="database you want to restore to" required>
					      	</div>
					    </div>
						<div class="text-right"> 
					    <button type="submit" class="btn btn-primary" name="restore" >Restore</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>