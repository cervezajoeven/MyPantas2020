<?php include('header.php'); 

$ID=$_GET['item_id'];
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="list_of_loan_history_books.php">Book loan history</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> DELETE LOAN HISTORY RECORD</h2>

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
						<a href="javascript:history.back()"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>

					</div>
                

<?php
$query = $sLink->query("select * from returned where id='$ID'");
//$count = $query->rowcount();
$row = $query->fetch();
                
  //$query=mysql_query("select * from books where bkid='$ID'")or die(mysql_error());
  //$row=mysql_fetch_array($query);
?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
					  <div class="form-group">
						<label for="locker" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" name="title" value="<?php echo $row['name']; ?>" class="form-control" id="title" placeholder="Title...">
						</div>
					  </div>
 					  <div class="form-group">
						<label for="locker" class="col-sm-3 control-label">ID number</label>
						<div class="col-sm-4">
						  <input type="text" name="title" value="<?php echo $row['id_number']; ?>" class="form-control" id="title" placeholder="Date...">
						</div>
					  </div>      
                        
  					  <div class="form-group">
						<label for="locker" class="col-sm-3 control-label">Title</label>
						<div class="col-sm-4">
						  <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control" id="title" placeholder="Date...">
						</div>
					  </div>   
                        
   					  <div class="form-group">
						<label for="locker" class="col-sm-3 control-label">Accession</label>
						<div class="col-sm-4">
						  <input type="text" name="title" value="<?php echo $row['accession']; ?>" class="form-control" id="title" placeholder="Date...">
						</div>
					  </div>                         
					  
					  <div class="form-group">
						<label for="barcode" class="col-sm-3 control-label">MFN</label>
						<div class="col-sm-4">
						  <input type="text" name="bkid" value="<?php echo $row['id']; ?>" class="form-control" id="barcode" placeholder="MFN.....">
						</div>
					  </div>						  
 
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
                            
						  <button type="submit" name="none" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> No</button>
                            
						  <button type="submit" name="delete" class="btn btn-danger"><i class="glyphicon glyphicon-ok"></i> Yes</button>
						</div>
					  </div>
                        
					</form>
							
<?php
$id =$_GET['item_id'];
if (isset($_POST['delete'])) {
    $sql = "delete from returned where id = '$id' ";
    // use exec() because no results are returned
    $sLink->exec($sql);

    header('location:list_of_loan_history_books.php');

}

elseif (isset($_POST['none']))
    
      header('location:list_of_loan_history_books.php');  


?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
