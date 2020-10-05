<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Other Policies</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> OTHER POLICIES</h2>

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
						<?php include ('modal_none.php') ?>
                                
					</div>

					
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">

                        <thead>
                        <tr>
                            <th style="width: 75px">ID</th>                            
                            <th style="width: 75px">Monday</th> 
                            <th style="width: 75px">Friday</th>                      
                            <th style="width: 75px">Saturday</th>
                            <th style="width: 75px">Sunday</th>
                            <th style="width: 200px">Heading</th>
                            <th style="width: 150px">Actions</th>
                        </tr>
                        </thead>
                        
                        <tbody>
							<?php
                            $result = $sLink->query("select * from overduecharge");                         
                            $count = $result->rowcount();              
                        
                            if ($count > 0){
                                $num_rows = 0;
                                $num_rows = $start;                    
                        
                                while ($row = $result->fetch() ){                        
                                    $id=$row['ID'];      
                                    $num_rows++;
                            
							?>
                            <tr class="delete_mem<?php echo $id ?>">
                                <td style="text-align:center"><?php echo $num_rows; ?> </td>  
                                <td><?php echo $row['Monday']; ?></td>
                                <td><?php echo $row['Friday']; ?></td>
                                <td><?php echo $row['Saturday']; ?></td>
                                <td><?php echo $row['Sunday']; ?></td>
                                <td><?php echo $row['Heading']; ?></td>

                                <td class="center">
                                    <a class="btn btn-primary" href="edit_other_policies.php<?php echo '?id='.$id; ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"> </i> Edit
                                    </a>
                                    <!-- <a class="btn btn-danger" id="<?php echo $id; ?>">
                                        <i class="glyphicon glyphicon-trash icon-white"> </i> Delete
                                    </a>-->
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
            if (confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    type: "POST",
                    url: "delete_other_policies.php",
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
             url:'delete_other_policies_ajax.php',
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
