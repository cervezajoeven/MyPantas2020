<!-- Return book Item Modal -->
<div class="modal fade" id="history_loan_book<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Loan History Internet Use Details</h4>
      </div>
        
      
        <?php
		if (isset($_POST['details'])){
            $id=$_GET['return_book'];    
            $result= mysql_query("select * from history where id = '$id'") or die (mysql_error());
            while ($row= mysql_fetch_array ($result) ){
            $id=$row['id'];
            }
        }
        ?>

        
        <div class="modal-body">   
        
   					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		         
				
 					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" style="background-color:#80ffe5">Name:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" value="<?php echo $row['name']; ?>"  class="form-control" id="name" placeholder="Name....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="idnum" class="col-sm-3 control-label" style="background-color:#80ffe5">ID number:</label>
						<div class="col-sm-9">
						  <input type="text" name="str0" value="<?php echo $row['client_id']; ?>"  class="form-control" id="idnum" placeholder="ID number....."  />
						</div>
					  </div>
					  
   					  <div class="form-group">
						<label for="type" class="col-sm-3 control-label" style="background-color:#80ffe5">Group:</label>
						<div class="col-sm-9">
						  <input type="text" name="str6" value="<?php echo $row['level']; ?>" class="form-control" id="type" placeholder="Group...."  />
						</div>
					  </div>  					  
					  
				      <div class="form-group">
						<label for="accession" class="col-sm-3 control-label" style="background-color:#80ffe5">Barcode:</label>
						<div class="col-sm-9">
						  <input type="text" name="str1" value="<?php echo $row['barcode']; ?>" class="form-control" id="accession" placeholder="Barcode....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" style="background-color:#80ffe5">Computer name:</label>
						<div class="col-sm-9">
						  <input type="text" name="str2" value="<?php echo $row['computer']; ?>" class="form-control" id="title" placeholder="Computer name....."  />
						</div>
					  </div>                    
					  
					  <div class="form-group">
						<label for="date_borrowed" class="col-sm-3 control-label" style="background-color:#80ffe5">Time borrowed:</label>
						<div class="col-sm-9">
						  <input type="text" name="str36" value="<?php echo $row['time_out']; ?>" class="form-control" id="date_borrowed" placeholder="Date borrowed....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="date_due" class="col-sm-3 control-label" style="background-color:#80ffe5">Time due:</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" value="<?php echo $row['time_due']; ?>" class="form-control" id="date_due" placeholder="Date due....."  />
						</div>
					  </div>
                        <div class="form-group">
						<label for="date_returned" class="col-sm-3 control-label" style="background-color:#80ffe5">Time returned:</label>
						<div class="col-sm-9">
						  <input type="text" name="str3" value="<?php echo $row['time_in']; ?>" class="form-control" id="date_returned" placeholder="Date reported....."  />
						</div>
					  </div> 
                        
					  <div class="form-group">
						<label for="charge" class="col-sm-3 control-label" style="background-color:#80ffe5">Charger:</label>
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