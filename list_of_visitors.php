<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Visiting researcher</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> VISITING RESEARCHERS ITEM LIST</h2>

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
						<?php include ('modal_add_visitors.php') ?>
                        
                        <a href="print_visitor_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>   
                        
                         <a href="export_to_csv.php?action=6" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
						</a>          
                       
                       <a style="background:none;">
                        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-warning pull-right"><i class=" glyphicon glyphicon-remove-circle"></i> Multiple delete</button>
                       </a>                         
					</div>

					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                       <thead>
                          <tr>
                            <th>Number</th>  
                            <th>Name</th>
                            <th>Institution</th>
                            <th>Topic of research</th>
                            <th>Fee</th>
                            <th>Date of visit</th>
                     
                            <th>Actions</th>
                          </tr>
                       </thead>
                       <tbody>
                          <?php
                             //$result = $sLink->prepare ("SELECT * FROM outside_user");
                             //$result ->execute();
                             
                             $result = $sLink->query("SELECT * FROM outside_user");  
                             $count = $result->rowcount();              
                        
                             if ($count > 0){
                                $num_rows = 0;
                                $num_rows = $start;                      
                        
                             //for ($count=0; $row = $result ->fetch(); $count++){
                             //$id = $row['id'];
                            while ($row = $result->fetch() ){                        
                            $id=$row['id'];      
                            $num_rows++;
                                                            
                             ?>
                              <tr class="delete_mem<?php echo $id ?>">
                                <td style="text-align:center"><?php echo $num_rows; ?>&nbsp;<input type="checkbox" name="id_recod[]" class="delete_customer" value="<?php echo $row["id"]; ?>" /></td>                                 
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['institution']; ?></td>
                                <td><?php echo $row['topic']; ?></td>
                                <td><?php echo $row['fee']; ?></td>
                                <td><?php echo date("M d, Y H:i:s",strtotime($row['date_of_visit'])); ?></td>

                             
                                <td width="200">
                                 
                                <a class="btn btn-primary" href="edit_visitors.php<?php echo '?client_id='.$id; ?>">
                                    <i class="glyphicon glyphicon-edit icon-white"> </i> Edit
                                </a>                                
                                <a class="btn btn-danger" id="<?php echo $id; ?>">
                                   <i class="glyphicon glyphicon-trash icon-white"> </i> Delete
                                 </a>
                             </td>
                          </tr>
                          <?php }  } ?>
                           
                           
                       </tbody>
                    </table>

                <!-- end content here -->
            </div>
        </div>
    </div>
</div><!--/row-->



<script type="text/javascript">
    $(document).ready(function() {
        $('.btn-danger').click(function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    type: "POST",
                    url: "delete_visitor.php",
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

          if(confirm("Are you sure you want to delete these records?"))
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
