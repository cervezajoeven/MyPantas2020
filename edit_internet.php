<?php include('header.php'); 

$ID=$_GET['item_id'];
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Internet Computer Item</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT INTERNET COMPUTER ITEM DETAILS</h2>

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
						<a href="list_of_internet.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
    $stmt = $sLink->query("select * from computer where id='$ID'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);   
                                
  //$query=mysql_query("select * from computer where id='$ID'")or die(mysql_error());
  //$row=mysql_fetch_array($query);
?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
					  <div class="form-group">
						<label for="computer" class="col-sm-3 control-label">Computer Name</label>
						<div class="col-sm-4">
						  <input type="text" name="computer" value="<?php echo $row['computer']; ?>" class="form-control" id="computer" placeholder="Computer name...">
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
		
						$computer=$_POST['computer'];
						$barcode=$_POST['barcode'];						


{
    
                        $sql = " UPDATE computer SET computer='$computer', barcode='$barcode' WHERE id = '$id' ";
                        $sLink->exec($sql);   
    
//mysql_query(" UPDATE computer SET computer='$computer', barcode='$barcode' WHERE id = '$id' ")or die(mysql_error());
    
echo "<script>alert('Successfully updated computer item information!'); window.location='list_of_internet.php'</script>";

}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
