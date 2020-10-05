<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">	
	  
  	<script src="css/jquery.min.js"></script>
  	<script src="css/bootstrap.min.js"></script>  
 	<!--<link href='css/bootstrap.min.css' rel='stylesheet'> -->
    
	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	-->    

<style>

		h1 {
			text-align: center;
			background: lightblue;
		}
		h3 {
			text-align: center;
			background: orange;
		}	
		h6 {
			text-align: center;
			background: blue;
			color: white;
			padding: 5px;
		}			
		span{
			color:blue;
			font-weight:bold;
		}

		.container{
			background:none;
		}
	</style>

</head>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="../list_of_book.php">Home</a>
        </li>
        <li>
            <a href="#">/Upload</a>
        </li>
    </ul>
</div> 

<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px;">myPANTAS File Uploader</h1>
	<hr>
	<div class="form">
		<form action="addfile_query.php" method="POST" enctype = "multipart/form-data">
			<h3>Upload File:</h3>
			<input type= "file" name="file" id="file">
			<br><br>
			<div>
			<!-- <button type="submit" name="addfile">Submit</button>-->
			<button type="submit" name="addfile" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button> 
			</div>    
			<br>
			<a href="file_list.php"><span><h6>View records</h6></span></a>
		</form>
		<br>
	</div>
	<br>
</div>
</body>
</html>