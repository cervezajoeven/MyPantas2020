<?php include('header.php'); 

$ID=$_GET['item_id'];
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Locker Item</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT LOCKER ITEM DETAILS</h2>

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
						<a href="list_of_locker.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
                
    $stmt = $sLink->query("select * from locker where id='$ID'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC); 
                
  //$query=mysql_query("select * from locker where id='$ID'")or die(mysql_error());
  //$row=mysql_fetch_array($query);
?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
					  <div class="form-group">
						<label for="locker" class="col-sm-3 control-label">Locker Name</label>
						<div class="col-sm-4">
						  <input type="text" name="locker" value="<?php echo $row['locker']; ?>" class="form-control" id="locker" placeholder="Locker name...">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="barcode" class="col-sm-3 control-label">Barcode</label>
						<div class="col-sm-4">
						  <input type="text" name="barcode" value="<?php echo $row['barcode']; ?>" class="form-control" id="barcode" placeholder="Barcode.....">
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
$id =$_GET['item_id'];
if (isset($_POST['update'])) {
		
						$locker=$_POST['locker'];
						$barcode=$_POST['barcode'];						


{
                $sql = " UPDATE locker SET locker='$locker', barcode='$barcode' WHERE id = '$id' ";
                $sLink->exec($sql);  
    
//mysql_query(" UPDATE locker SET locker='$locker', barcode='$barcode' WHERE id = '$id' ")or die(mysql_error());
echo "<script>alert('Successfully updated locker item information!'); window.location='list_of_locker.php'</script>";

}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
