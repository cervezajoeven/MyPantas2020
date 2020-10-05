<?php include('header.php'); 

$ID=$_GET['item_id'];


?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Serials Item</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT SERIAL ISSUE ITEM DETAILS</h2>

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
						<a href="list_of_serials.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
  $stmt = $sLink->query("select * from serials where idd='$ID'");
  $row = $stmt->fetch(PDO::FETCH_ASSOC);               
  //$query=mysql_query("select * from serials where idd='$ID'")or die(mysql_error());
  //$row=mysql_fetch_array($query);
                
  $title = $row['title'];               
  $itemcode = $row['itemcode']; 
  $date_year = $row['date_year']; 
  $volume = $row['volume']; 
  $issue = $row['issue'];                

  $idnumber = $row['idnum'];               
                
  $date_received = $row['date_received'];                         
  $date2 = strtr($date_received, '/', '-');
  $date_received = date('Y-m-d', strtotime($date2));    
                
  $datein = $row['datein'];                         
  $date3 = strtr($datein, '/', '-');
  $datein = date('Y-m-d', strtotime($date3));                
                
  $dateout = $row['dateout'];                         
  $date4 = strtr($dateout, '/', '-');
  $dateout = date('Y-m-d', strtotime($date4)); 
                
  $datedue = $row['datedue'];                         
  $date5 = strtr($datedue, '/', '-');
  $datedue = date('Y-m-d', strtotime($date5));                
                
                
                
?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
   					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label">Periodical title</label>
						<div class="col-sm-7">
						  <input type="text" name="title" value="<?php echo $row['title']; ?>"  class="form-control" id="ocode" placeholder="Title of periodical....." required />
						</div>
					  </div>                     
                        
					  <div class="form-group">
						<label for="itemcode" class="col-sm-3 control-label">Item code</label>
						<div class="col-sm-7">
						  <input type="text" name="itemcode" value="<?php echo $row['itemcode']; ?>"  class="form-control" id="ocode" placeholder="Item code....." required />
						</div>
					  </div>

					  <div class="form-group">
						<label for="odate" class="col-sm-3 control-label">Date/Year</label>
						<div class="col-sm-7">
						  <input type="text" name="date_year" value="<?php echo $row['date_year']; ?>" class="form-control" id="date_year" placeholder="Date....."  />
						</div>
					  </div>	
                        
 					  <div class="form-group">
						<label for="volume" class="col-sm-3 control-label">Volume</label>
						<div class="col-sm-7">
						  <input type="text" name="volume" value="<?php echo $row['volume']; ?>" class="form-control" id="volume" placeholder="Volume....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="issue" class="col-sm-3 control-label">Issue/Number</label>
						<div class="col-sm-7">
						  <input type="text" name="issue" value="<?php echo $row['issue']; ?>" class="form-control" id="issue" placeholder="Issue or number....."  />
						</div>
					  </div>
                        
   					  <div class="form-group">
						<label for="idnumber" class="col-sm-3 control-label">ID Number</label>
						<div class="col-sm-7">
						  <input type="text" name="idnumber" value="<?php echo $row['idnum']; ?>" class="form-control" id="issue" placeholder="Issue or number....."  />
						</div>
					  </div>                     
                        
   					  <div class="form-group">
						<label for="borrow" class="col-sm-3 control-label">Date borrow</label>
						<div class="col-sm-7">
						  <input type="date" name="dateout" value="<?php echo $dateout;?>" class="form-control" id="" />
						</div>
					  </div>                        
                        
                        
   					  <div class="form-group">
						<label for="due" class="col-sm-3 control-label">Date due</label>
						<div class="col-sm-7">
						  <input type="date" name="datedue" value="<?php echo $datedue;?>" class="form-control" id="" />
						</div>
					  </div>                        
                        
 					  <div class="form-group">
						<label for="returned" class="col-sm-3 control-label">Date returned</label>
						<div class="col-sm-7">
						  <input type="date" name="date_returned" value="<?php echo $datein;?>" class="form-control" id="" />
						</div>
					  </div>                        
                        
					  <div class="form-group">
						<label for="encoded" class="col-sm-3 control-label">Date entered</label>
						<div class="col-sm-7">
						  <input type="date" name="date_encoded" value="<?php echo $date_received;?>" class="form-control" id="" />
						</div>
					  </div>  

               
                        
					  <div class="form-group">
						<label for="update" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['item_id'];
if (isset($_POST['update'])) {
		
						$issue=$_POST['issue'];
						$volume=$_POST['volume'];
						$date_year=$_POST['date_year'];   
						$itemcode=$_POST['itemcode'];
						$title=$_POST['title'];
                        
                        $date2 = strtr($_POST['date_encoded'], '/', '-');
						$date_encoded = date('Y-m-d', strtotime($date2));    
    

{
                        $sql = " UPDATE serials SET title='$title', itemcode='$itemcode', issue='$issue', volume='$volume', date_year='$date_year', date_received='$date_encoded' WHERE idd = '$id' ";
                        $sLink->exec($sql); 
    
							//mysql_query(" UPDATE serials SET title='$title', itemcode='$itemcode', issue='$issue', volume='$volume', date_year='$date_year', date_received='$date_encoded' WHERE idd = '$id' ")or die(mysql_error());
    
							echo "<script>alert('Successfully updated serials item issue information!'); window.location='list_of_serials.php'</script>";

}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
