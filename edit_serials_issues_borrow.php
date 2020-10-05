<?php include('header.php'); 

$ID=$_GET['item_id'];


?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Serials Item Borrowing</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> SERIAL ISSUE BORROWING</h2>

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

  $date_received = $row['date_received'];                         
  $date2 = strtr($date_received, '/', '-');
  $date_received = date('Y-m-d', strtotime($date2)); 
                
  $datedue = date('Y-m-d');                    
                
?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
   					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label">Periodical title</label>
						<div class="col-sm-7">
						  <input type="text" name="title" value="<?php echo $row['title']; ?>"  class="form-control" id="ocode" placeholder="Title of periodical....." required />
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
						  <input type="text" name="idnumber" class="form-control" id="issue" placeholder="ID number....."  autofocus/>
						</div>
					  </div>              
                        
					  <div class="form-group">
						<label for="encoded" class="col-sm-3 control-label">Date due</label>
						<div class="col-sm-7">
						  <input type="date" name="datedue" value="<?php echo $datedue;?>" class="form-control" id="" />
						</div>
					  </div>  

               
                        
					  <div class="form-group">
						<label for="update" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Borrow</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['item_id'];
if (isset($_POST['update'])) {
		
						//$issue=$_POST['issue'];
						//$volume=$_POST['volume'];
						//$date_year=$_POST['date_year'];   
						//$itemcode=$_POST['itemcode'];
						//$title=$_POST['title'];
    
                        $idnumber=$_POST['idnumber'];
                        $date2 = strtr($_POST['datedue'], '/', '-');
						$datedue = date('Y-m-d', strtotime($date2));    
  						$dateout = date('Y-m-d');    
    

{
                        $sql = " UPDATE serials SET idnum='$idnumber', datedue='$datedue', dateout='$dateout' WHERE idd = '$id' ";
                        $sLink->exec($sql); 
    
							//mysql_query(" UPDATE serials SET idnum='$idnumber', datedue='$datedue', dateout='$dateout' WHERE idd = '$id' ")or die(mysql_error());
    
							echo "<script>alert('Successfully borrowed serials item issue!'); window.location='list_of_serials.php'</script>";

}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
