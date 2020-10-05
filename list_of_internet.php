<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Internet Computer Item List</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> INTERNET COMPUTER ITEM LIST</h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
				-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
				
					<div class="alert alert-info">
						<?php include ('modal_add_internet.php') ?>
                        
                        <a href="print_internet_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>  
                        
                         <a href="export_to_csv.php?action=3" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
						</a>                                           
					</div>
                
     
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
                          <th style="width:100px;">Number</th>                             
						<th>Computer name</th>
						<th>Barcode</th>				
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
							<?php
    
                            $result = $sLink->query("select * from computer order by computer ");                         
                            $count = $result->rowcount();              
                        
                            if ($count > 0){
                                $num_rows = 0;
                                $num_rows = $start;                    
                        
                                while ($row = $result->fetch() ){                        
                                    $id=$row['id'];      
                                    $num_rows++;
                            
							?>
                    <tr class="delete_mem<?php echo $id ?>">
                        <td style="text-align:center"><?php echo $num_rows; ?> </td>  
						<td><?php echo $row['computer']; ?></td>
						<td><?php echo $row['barcode']; ?></td>
						<td class="center">
         

							<a class="btn btn-primary" href="edit_internet.php<?php echo '?item_id='.$id; ?>">
								<i class="glyphicon glyphicon-edit icon-white"> </i> Edit
							</a>
                            <a class="btn btn-danger" id="<?php echo $id; ?>">
                                <i class="glyphicon glyphicon-trash icon-white"> </i> Delete
                             </a>
						</td>
					</tr>
							<?php } } ?>
					</tbody>
					</table>
				
                <!-- end content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<p class="bg-primary"><h4 class="modal-title">Update Computer Item Record</h4></p>
				</div>
				<div class="modal-body">
					<label for="computer" class="col-sm-8 control-label">Computer Name</label>
                    <input type="text" name="computer" class="form-control" id="computer" placeholder="Computer name....." required />
                    <br />
					<label for="barcode" class="col-sm-8 control-label">Barcode</label>
                    <input type="text" name="barcode" class="form-control" id="barcode" placeholder="Barcode....." required />
				</div>
            
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-info" value="Update" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('.btn-danger').click(function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    type: "POST",
                    url: "delete_internet.php",
                    data: ({
                        id:id
                    }),
                    cache: false,
                    success: function(html) {
                        $(".delete_mem" + id).fadeOut('slow');
                    }
                });
            } else {
                return false;
            }
        });
        
        
        
        $(document).on('click', '.update', function(){
            var user_id = $(this).attr("user_id");
            $.ajax({
                url:"fetch_single_computer.php",
                method:"POST",
                data:{user_id:user_id},
                dataType:"json",
                success:function(data)
                {
                    $('#userModal').modal('show');
                    $('#computer').val(data.computer);
                    $('#barcode').val(data.barcode);

                    $('.modal-title').text("Edit User");
                    $('#user_id').val(user_id);

                    $('#action').val("Edit");
                    $('#operation').val("Edit");
                }
            })
        });        
        
        
        
        
        $('#btn_delete').click(function(){

          if(confirm("Are you sure you want to delete this record?"))
          {
           var id = [];

           $(':checkbox:checked').each(function(i){
            id[i] = $(this).val();
           });

           if(id.length === 0) //tell you if the array is empty
           {
            alert("Please Select atleast one checkbox");
           }
           else
           {
            $.ajax({
             url:'delete_visitor_ajax.php',
             method:'POST',
             data:{id:id},
             success:function()
             {
              for(var i=0; i<id.length; i++)
              {
               $('tr#'+id[i]+'').css('background-color', '#ccc');
               $('tr#'+id[i]+'').fadeOut('slow');
              }
             }

            });
           }

          }
          else
          {
           return false;
          }
         });       
        
        
    });
    
    
    
</script>


<?php include('footer.php'); ?>
