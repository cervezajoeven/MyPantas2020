<?php include('header.php'); 

$ID=$_GET['item_id'];
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="list_of_loan_history_locker.php">Locker loan history</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> LOCKER LOAN HISTORY ITEM DETAILS</h2>

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
						<a href="list_of_loan_history_locker.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
  $stmt = $sLink->query("select * from locker_history where id_record='$ID'");
  $row = $stmt->fetch(PDO::FETCH_ASSOC);                
  //$query=mysql_query("select * from aclist where id='$ID'")or die(mysql_error());
  //$row=mysql_fetch_array($query);
              $id=$row['id'];
              //$accession=$row['accession'];    
              //$accession=$row['accession'];                             
              //$title=$row['title'];
              //$author=$row['author'];
              //$publisher=$row['publisher'];
              //$callnumber=$row['call_number'];                             
              //$isbn=$row['isbn'];
              //$taon=$row['ye_ar'];
              //$location=$row['location'];  
              //$status=$row['status'];                   
                  
?>					

				<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Name:</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" value="<?php echo $row['name']; ?>"  class="form-control" id="name" placeholder="Name....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >ID number:</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" value="<?php echo $row['client_id']; ?>"  class="form-control" id="title" placeholder="ID number....."  />
						</div>
					  </div>
					  
   					  <div class="form-group">
						<label for="type" class="col-sm-3 control-label" >Group:</label>
						<div class="col-sm-7">
						  <input type="text" name="str6" value="<?php echo $row['level']; ?>" class="form-control" id="type" placeholder="Group...."  />
						</div>
					  </div>  					  
					  
				      <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Barcode:</label>
						<div class="col-sm-7">
						  <input type="text" name="str1" value="<?php echo $row['barcode']; ?>" class="form-control" id="accession" placeholder="Accession....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Item name:</label>
						<div class="col-sm-7">
						  <input type="text" name="str2" value="<?php echo $row['locker']; ?>" class="form-control" id="title" placeholder="Title....."  />
						</div>
					  </div>
                        
                     
					  
					  <div class="form-group">
						<label for="date_borrowed" class="col-sm-3 control-label" >Date borrowed:</label>
						<div class="col-sm-7">
						  <input type="text" name="str36" value="<?php echo $row['time_borrowed']; ?>" class="form-control" id="date_borrowed" placeholder="Date borrowed....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="date_due" class="col-sm-3 control-label" >Date due:</label>
						<div class="col-sm-7">
						  <input type="text" name="str3" value="<?php echo $row['time_due']; ?>" class="form-control" id="date_due" placeholder="Date due....."  />
						</div>
					  </div>
                        <div class="form-group">
						<label for="date_returned" class="col-sm-3 control-label" >Date returned:</label>
						<div class="col-sm-7">
						  <input type="text" name="str3" value="<?php echo $row['time_returned']; ?>" class="form-control" id="date_returned" placeholder="Date reported....."  />
						</div>
					  </div> 
    
                        
					  <div class="form-group">
						<label for="charge" class="col-sm-3 control-label" >Charger:</label>
						<div class="col-sm-7">
						  <input type="text" name="str5" value="<?php echo $row['charger']; ?>" class="form-control" id="charge" placeholder="Charger....."  />
						</div>
					  </div>  				  
 
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="close" class="btn btn-warning"><i class="glyphicon glyphicon-check"></i> Close</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['item_id'];
if (isset($_POST['close'])) {
		

              //$accession=$_POST['accession'];                             
              //$title=$_POST['title'];
              //$author=$_POST['author'];
              //$publisher=$_POST['publisher'];
              //$callnumber=$_POST['callnumber'];                             
              //$isbn=$_POST['isbn'];
              //$taon=$_POST['taon'];
              //$location=$_POST['location'];  
              //$status=$_POST['status'];      


{
//$sql = " UPDATE aclist SET accession='$accession', title='$title',author='$author',publisher='$publisher',call_number='$callnumber',isbn='$isbn',ye_ar='$taon',location='$location',status='$status' WHERE id = '$id' ";
//$sLink->exec($sql);

    
echo "<script>window.location='list_of_loan_history_locker.php'</script>";

}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
