<!-- Delete Client Modal -->
<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Delete logfile record</h4>
      </div>
      <div class="modal-body">
			<div class="alert alert-danger">
				Are you sure you want to delete this selected item?
			</div>
			<div class="modal-footer">
			<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
			<a href="delete_logfile_query.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
			</div>
      </div>
    </div>
  </div>
</div>