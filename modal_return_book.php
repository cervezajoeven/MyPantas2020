<!-- Return book Item Modal -->
<div class="modal fade" id="return_book<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Checked-out Item Detail</h4>
      </div>
        
      
        <?php
				if (isset($_POST['details'])){
								$id=$_GET['return_book'];    
								$result= mysql_query("select * from borrower where id = '$id'") or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								}
				}
        ?>

        
        <div class="modal-body">   

   					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		         
				
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >ID number:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" value="<?php echo $row['id_number']; ?>"  class="form-control" id="title" placeholder="ID number....."  />
						</div>
					  </div>
					  
							  <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Accession:</label>
						<div class="col-sm-9">
						  <input type="text" name="str1" value="<?php echo $row['accession_number']; ?>" class="form-control" id="accession" placeholder="Accession....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Title:</label>
						<div class="col-sm-9">
						  <input type="text" name="str2" value="<?php echo $row['title']; ?>" class="form-control" id="title" placeholder="Title....."  />
						</div>
					  </div>
                        
   					  <div class="form-group">
						<label for="type" class="col-sm-3 control-label" >Type of material:</label>
						<div class="col-sm-9">
						  <input type="text" name="str6" value="<?php echo $row['type']; ?>" class="form-control" id="type" placeholder="Type of material...."  />
						</div>
					  </div>                       
					  
					  <div class="form-group">
						<label for="date_borrowed" class="col-sm-3 control-label" >Date borrowed:</label>
						<div class="col-sm-9">
						  <input type="text" name="str36" value="<?php echo $row['date_borrowed']; ?>" class="form-control" id="date_borrowed" placeholder="Date borrowed....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="date_due" class="col-sm-3 control-label" >Date due:</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" value="<?php echo $row['due_date']; ?>" class="form-control" id="date_due" placeholder="Date due....."  />
						</div>
					  </div>
                        <div class="form-group">
						<label for="date_returned" class="col-sm-3 control-label" >Date requested:</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" value="<?php echo $row['date_returned']; ?>" class="form-control" id="date_returned" placeholder="Date requested....."  />
						</div>
					  </div> 
                        
					  <div class="form-group">
						<label for="library" class="col-sm-3 control-label" >Library:</label>
						<div class="col-sm-9">
						  <input type="text" name="str5" value="<?php echo $row['library']; ?>" class="form-control" id="library" placeholder="Library....."  />
						</div>
					  </div>
  					  <div class="form-group">
						<label for="status" class="col-sm-3 control-label" >Status:</label>
						<div class="col-sm-9">
						  <input type="text" name="str5" value="<?php echo $row['status']; ?>" class="form-control" id="status" placeholder="status....."  />
						</div>
					  </div>    
                        
					  <div class="form-group">
						<label for="charge" class="col-sm-3 control-label" >Charger:</label>
						<div class="col-sm-9">
						  <input type="text" name="str5" value="<?php echo $row['charger']; ?>" class="form-control" id="charge" placeholder="charger....."  />
						</div>
					  </div>                        
        
            </form>
            
            
			<div class="modal-footer">
			<button class="btn btn-warning" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
			</div> 
        </div>
        
     
        
    </div>
  </div>
</div>