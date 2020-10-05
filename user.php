<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="#">User</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> USER`S RECORDS</h2>

                <div class="box-icon">
                    <!--<a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
				
					<div class="alert alert-info">
						<?php include ('modal_add_user.php') ?>
                        
                        <a href="print_user_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>   
                        
                          <a href="export_to_csv.php?action=7" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
						</a>                         
                        
					</div>
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
                        <th>Number</th>                        
						<th>Name</th>
						<th>Username</th>
						<th>Group</th>
                        <th>Date Added</th>
						<th style="width: 200px;">Actions</th>
					</tr>
					</thead>
					<tbody>
							<?php
                             $result = $sLink->query("select * from user order by id DESC ");                         
                             $count = $result->rowcount();              
                        
                             if ($count > 0){
                                $num_rows = 0;
                                $num_rows = $start;                      
                        
                                while ($row = $result->fetch() ){                        
                                $id=$row['id'];      
                                $num_rows++;
                                                            
                             ?>
                              <tr class="delete_mem<?php echo $id ?>">
                                <td style="text-align:center"><?php echo $num_rows; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['grp']; ?></td>
                                <td><?php echo date("M d, Y H:i:s",strtotime($row['user_added'])); ?></td>
                                <td class="center">
							<!--<a class="btn btn-success" href="#">
								<i class="glyphicon glyphicon-zoom-in icon-white"></i>
								View
							</a>-->
							<a class="btn btn-primary" href="edit_user.php<?php echo '?user_id='.$id; ?>">
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

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
    $(document).ready(function() {
        $('.btn-danger').click(function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to delete this Member?")) {
                $.ajax({
                    type: "POST",
                    url: "delete_user.php",
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
        
        
         $('#btn_delete').click(function(){

          if(confirm("Are you sure you want to delete this?"))
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
