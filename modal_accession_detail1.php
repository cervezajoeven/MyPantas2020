<!-- Return book Item Modal -->
<div class="modal fade" id="history_loan_book<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Accession Item Details</h4>
      </div>
        
      
        <?php
		if (isset($_POST['details'])){
            $id=$_GET['return_book'];    
            $result= mysql_query("select * from aclist where id = '$id'") or die (mysql_error());
            while ($row= mysql_fetch_array ($result) ){
              $id=$row['id'];
              $accession=$row['accession'];                             
              $title=$row['title'];
              $author=$row['author'];
              $publisher=$row['publisher'];

              $callnumber=$row['call_number'];                             
              $isbn=$row['isbn'];
              $taon=$row['ye_ar'];
              $location=$row['location'];  
              $status=$row['status'];               
              //$date1 = strtr($row['date_loan'], '/', '-');
              //$date_loan = date('Y-m-d', strtotime($date1));	
                }
        }
        ?>

        
        <div class="modal-body">   
        
   					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		         
				
					  <div class="form-group">
						<label for="accession" class="col-sm-4 control-label">Accession</label>
						<div class="col-sm-6">
						  <input type="text" name="accession" value="<?php echo $accession; ?>" class="form-control" id="accession" required />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="title" class="col-sm-4 control-label">Title</label>
						<div class="col-sm-6">
						  <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" id="title" placeholder="Title..." required />
						</div>
					  </div>                       

					  <div class="form-group">
						<label for="creator" class="col-sm-4 control-label">Creator</label>
						<div class="col-sm-6">
						  <input type="text" name="creator" value="<?php echo $author; ?>" class="form-control" id="creator" placeholder="Creator..." required />
						</div>
					  </div> 
                        
 					  <div class="form-group">
						<label for="publisher" class="col-sm-4 control-label">Publisher</label>
						<div class="col-sm-6">
						  <input type="text" name="publisher" value="<?php echo $publisher; ?>" class="form-control" id="publisher" placeholder="Publisher..." required />
						</div>
					  </div>                       
                                                
    				  <div class="form-group">
						<label for="taon" class="col-sm-4 control-label">Date/Year</label>
						<div class="col-sm-6">
						  <input type="text" name="taon" value="<?php echo $taon; ?>" class="form-control" id="taon" />
						</div>
					  </div>
                        
         			<div class="form-group">
						<label for="isbn" class="col-sm-4 control-label">ISBN</label>
						<div class="col-sm-6">
						  <input type="text" name="isbn" value="<?php echo $isbn; ?>" class="form-control" id="isbn" />
						</div>
					  </div> 
                        
               			<div class="form-group">
						<label for="callnumber" class="col-sm-4 control-label">Call number</label>
						<div class="col-sm-6">
						  <input type="text" name="callnumber" value="<?php echo $callnumber; ?>" class="form-control" id="callnumber" />
						</div>
					  </div>                       
                        
             			<div class="form-group">
						<label for="location" class="col-sm-4 control-label">Location</label>
						<div class="col-sm-6">
						  <input type="text" name="location" value="<?php echo $location; ?>" class="form-control" id="location" />
						</div>
					  </div> 
                        
             			<div class="form-group">
						<label for="status" class="col-sm-4 control-label">Status</label>
						<div class="col-sm-6">
						  <input type="text" name="status" value="<?php echo $status; ?>" class="form-control" id="status" />
						</div>
					  </div>                     
        
            </form>
            
            
			<div class="modal-footer">
			<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
			</div> 
        </div>
        
     
        
    </div>
  </div>
</div>