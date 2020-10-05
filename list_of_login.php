<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="list_of_login.php">Login files</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-bookmark"></i> LOGIN FILES</h2>

                <div class="box-icon">
                    <!---<a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- start history here -->
				
                    <div class="alert alert-info">
                        <?php include ('modal_none.php') ?>   

                        <a href="print_login_list.php" target="_blank" style="background:none;">
                              <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
                        </a> 
                        
                           <a href="export_to_csv.php?action=8" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
						</a>          
                       
                       <a style="background:none;">
                        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-warning pull-right"><i class=" glyphicon glyphicon-remove-circle"></i> Multiple delete</button>
                       </a>                         
                        
                        
                    </div>  
                
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>

 						<th>Name</th>                       
						<th style="width:300px;">Date/Time</th>
 						<th style="width:100px;">Checkbox</th>                       
                        <th style="width:250px; text-align:center;">Action</th>
					</tr>
					</thead>
					<tbody>
							<?php
		
                             $result = $sLink->query("select * from logfile"); 
                             $count = $result->rowcount();              
                        
                             if ($count > 0){
                                //$num_rows = 0;
                                //$num_rows = $start;                      
                        
                                while ($row = $result->fetch() ){                        
                                $id=$row['id'];      
                                //$num_rows++;
                                                            
                             ?>
                              <tr class="delete_mem<?php echo $id ?>">

                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo date("M d, Y H:i:s",strtotime($row['da_te'])); ?></td>
                                <td style="text-align:center"><input type="checkbox" name="id_recod[]" class="delete_customer" value="<?php echo $row["id"]; ?>" /></td>     
                                <td style="text-align:center">
                                    <a class="btn btn-danger" id="<?php echo $id; ?>">
                                       <i class="glyphicon glyphicon-trash icon-white"> </i> Delete
                                    </a>
						        </td>
					           </tr>
							<?php } } ?>
					</tbody>
					</table>
				
                <!-- end history here -->
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
                    url: "delete_login.php",
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
             url:'delete_login_ajax.php',
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
