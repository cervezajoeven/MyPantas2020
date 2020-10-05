<?php include('header.php'); 

$ID=$_GET['item_id'];
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Serials Accession</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> Edit Serials Accession/Shelf list Item Details</h2>

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
						<a href="list_of_accession_serial.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
  $stmt = $sLink->query("select * from accaudio where id='$ID'");
  $row = $stmt->fetch(PDO::FETCH_ASSOC);                 
  //$query=mysql_query("select * from accaudio where id='$ID'")or die(mysql_error());
  //$row=mysql_fetch_array($query);
              $id=$row['id'];
              $accession=$row['accession'];                             
              $title=$row['title'];
              $author=$row['author'];
              $publisher=$row['publisher'];

              $callnumber=$row['call_number'];                             
              //$isbn=$row['isbn'];
              $taon=$row['ye_ar'];
              $location=$row['location'];  
              $status=$row['status'];                   
              //$mtype=$row['type'];             
?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
					  <div class="form-group">
						<label for="accession" class="col-sm-2 control-label">Accession</label>
						<div class="col-sm-7">
						  <input type="text" name="accession" value="<?php echo $accession; ?>" class="form-control" id="accession" required />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="title" class="col-sm-2 control-label">Title</label>
						<div class="col-sm-7">
						  <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" id="title" placeholder="Title..." required />
						</div>
					  </div>                       

					  <div class="form-group">
						<label for="creator" class="col-sm-2 control-label">Creator</label>
						<div class="col-sm-7">
						  <input type="text" name="author" value="<?php echo $author; ?>" class="form-control" id="author" placeholder="Creator..." required />
						</div>
					  </div> 
                        
 					  <div class="form-group">
						<label for="publisher" class="col-sm-2 control-label">Publisher</label>
						<div class="col-sm-7">
						  <input type="text" name="publisher" value="<?php echo $publisher; ?>" class="form-control" id="publisher" placeholder="Publisher..." required />
						</div>
					  </div>                       
                                                
    				  <div class="form-group">
						<label for="taon" class="col-sm-2 control-label">Date/Year</label>
						<div class="col-sm-7">
						  <input type="text" name="taon" value="<?php echo $taon; ?>" class="form-control" id="taon" />
						</div>
					  </div>
                        

                        
               			<div class="form-group">
						<label for="call_number" class="col-sm-2 control-label">Call number</label>
						<div class="col-sm-7">
						  <input type="text" name="callnumber" value="<?php echo $callnumber; ?>" class="form-control" id="callnumber" />
						</div>
					  </div>   
                        
                  
                        
             			<div class="form-group">
						<label for="location" class="col-sm-2 control-label">Location</label>
						<div class="col-sm-7">
						  <input type="text" name="location" value="<?php echo $location; ?>" class="form-control" id="location" />
						</div>
					  </div> 
                        
             			<div class="form-group">
						<label for="status" class="col-sm-2 control-label">Status</label>
						<div class="col-sm-7">
						  <input type="text" name="status" value="<?php echo $status; ?>" class="form-control" id="status" />
						</div>
					  </div>   					  
 
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['item_id'];
if (isset($_POST['update'])) {
		

              $accession=$_POST['accession'];                             
              $title=$_POST['title'];
              $author=$_POST['author'];
              $publisher=$_POST['publisher'];

              $callnumber=$_POST['callnumber'];                             
              //$isbn=$_POST['isbn'];
              $taon=$_POST['taon'];
              $location=$_POST['location'];  
              $status=$_POST['status'];      
              //$mtype=$_POST['mtype'];     

{
    
$sql = " UPDATE accaudio SET accession='$accession', title='$title',author='$author',publisher='$publisher',call_number='$callnumber',ye_ar='$taon',location='$location',status='$status' WHERE id = '$id' ";
$sLink->exec($sql);
//mysql_query(" UPDATE accaudio SET accession='$accession', title='$title',author='$author',publisher='$publisher',call_number='$callnumber',ye_ar='$taon',location='$location',status='$status' WHERE id = '$id' ")or die(mysql_error());
    
echo "<script>alert('Successfully updated Serial accession item information!'); window.location='list_of_accession_serial.php'</script>";

}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
