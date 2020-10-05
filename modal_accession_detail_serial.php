<!-- Return book Item Modal -->
<div class="modal fade" id="history_loan_book<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Serials Accession / Shelf list Item Details</h4>
      </div>
        
      
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
			<button class="btn btn-warning" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
			</div> 
        </div>
        
     
        
    </div>
  </div>
</div>