<!-- Return book Item Modal -->
<div class="modal fade" id="history_loan_book<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Loan History Locker Item Details</h4>
      </div>
        
      
        <?php
		if (isset($_POST['details'])){
            $id=$_GET['history_loan_book'];    
            //$result= mysql_query("select * from locker_history where id_record = '$id'") or die (mysql_error());
            //while ($row= mysql_fetch_array ($result) ){
            
            $result = $sLink->query("select * from locker_history where id_record = '$id'");     
            while ($row = $result->fetch() ){      
            $id=$row['id_record'];
            }
        }
        ?>

        
        <div class="modal-body">   
        
   					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		         
				
 					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Name:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" value="<?php echo $row['name']; ?>"  class="form-control" id="name" placeholder="Name....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="idnum" class="col-sm-3 control-label" >ID number:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" value="<?php echo $row['client_id']; ?>"  class="form-control" id="idnum" placeholder="ID number....."  />
						</div>
					  </div>
					  
   					  <div class="form-group">
						<label for="type" class="col-sm-3 control-label" >Group:</label>
						<div class="col-sm-9">
						  <input type="text" name="str6" value="<?php echo $row['level']; ?>" class="form-control" id="type" placeholder="Group...."  />
						</div>
					  </div>  					  
					  
				      <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" >Barcode:</label>
						<div class="col-sm-9">
						  <input type="text" name="str1" value="<?php echo $row['barcode']; ?>" class="form-control" id="accession" placeholder="Barcode....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Item name:</label>
						<div class="col-sm-9">
						  <input type="text" name="str2" value="<?php echo $row['locker']; ?>" class="form-control" id="title" placeholder="Item name....."  />
						</div>
					  </div>                    
					  
					  <div class="form-group">
						<label for="date_borrowed" class="col-sm-3 control-label" >Time borrowed:</label>
						<div class="col-sm-9">
						  <input type="text" name="str36" value="<?php echo $row['time_borrowed']; ?>" class="form-control" id="date_borrowed" placeholder="Date borrowed....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="date_due" class="col-sm-3 control-label" >Time due:</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" value="<?php echo $row['time_date']; ?>" class="form-control" id="date_due" placeholder="Date due....."  />
						</div>
					  </div>
                        <div class="form-group">
						<label for="date_returned" class="col-sm-3 control-label" >Time returned:</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" value="<?php echo $row['time_returned']; ?>" class="form-control" id="date_returned" placeholder="Date reported....."  />
						</div>
					  </div> 
                        
					  <div class="form-group">
						<label for="charge" class="col-sm-3 control-label" >Charger:</label>
						<div class="col-sm-9">
						  <input type="text" name="str5" value="<?php echo $row['charger']; ?>" class="form-control" id="charge" placeholder="Charger....."  />
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