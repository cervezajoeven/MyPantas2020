<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Acquisition List Module</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> ACQUISITION LIST</h2>

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
						<?php include ('modal_add_acquisition.php') ?>
                        
                        <a href="print_acquisition_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>   
                        
                        <a href="export_to_csv.php?action=2" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
						</a> 
                        
					</div>
                
                
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
                         <th>Number</th>                         
						<th>Title</th>
						<th>Creator</th>
						<th>Publisher</th>
						<th>Date</th>
						<th>Quantity</th>
						<th>Net Price</th>
						<th>Status</th>						
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
							<?php
                            $result = $sLink->query("select * from acquisition order by title DESC ");       
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
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['author']; ?></td>
                                    <td><?php echo $row['publisher']; ?></td>
                                    <td><?php echo $row['ye_ar']; ?></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td><?php echo $row['net_price']; ?> </td>
                                    <td><?php echo $row['status']; ?> </td>
                                    <td class="center">
                                    <!--<a class="btn btn-success" href="#">
                                        <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                        View
                                    </a>-->

                                    <a class="btn btn-primary" href="edit_acquisition.php<?php echo '?id='.$id; ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i> Edit
                                    </a>
                                    <a class="btn btn-danger" id="<?php echo $id; ?>">
                                   <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>
						</td>
					</tr>
							<?php } }?>
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
            if (confirm("Are you sure you want to delete this Member?")) {
                $.ajax({
                    type: "POST",
                    url: "delete_acquisition.php",
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
