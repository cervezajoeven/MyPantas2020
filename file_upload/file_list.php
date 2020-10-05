<?php include ("connect/connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MyPantas File Upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">	

	<style>
		.container{
			background:none;
		}

		h1{
			background:lightblue;
			
		}
		h2{
			background:orange;
		}
	</style>
</head>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="./index.php">File upload</a>
        </li>
        <li>
            <a href="#">/file list</a>
        </li>
    </ul>
</div> 

<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px;">myPANTAS File Uploader</h1>
	<hr>

	<div class="table">
	<h2>Records</h2> 
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td>File Name</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
			<?php
			include ("connect/connect.php");
				$file_list = $con->prepare("SELECT * FROM file");
					$file_list->execute();
				$fetch = $file_list->fetchall();

				foreach ($fetch as $key => $row) {
					?>
				<td><?php echo $row['file_id'] ?></td>
				<td><?php echo $row['file_name'] ?></td>
				<td><a href="delete_query.php?file_id=<?php echo$row['file_id']; ?>">Delete</a></td>
			</tbody>
			<?php } ?>
		</table>
		
	</div>
	<br>
</div>
</body>
</html>