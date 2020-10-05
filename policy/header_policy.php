<html>
 
<?php ob_start(); ?>
<?php unset($group_name); ?>
<?php include '../config.php'; ?>
<?php $group_name = $_POST["grp_name"]; ?>
    
	<head>
        
	  <title> <?php echo $group_name ; ?></title>
        
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
      <meta charset="utf-8">    
                    
  <!--
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
-->

        <script src="./js/jquery.min.js"></script>
		<link rel="stylesheet" href="./css/bootstrap.min.css" />
 		<script src="./js/jquery.dataTables.min.js"></script>
        <script src="./js/dataTables.bootstrap.min.js"></script> 

		<link rel="stylesheet" href="./css/dataTables.bootstrap.min.css" />  
	    <script src="./js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


		<style>
			body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:1270px;
				padding:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}

			h1 {
				text-align: center;
				background: orange;
			}

			.btn_add{
				text-align:right;
			}
		</style>
	</head>