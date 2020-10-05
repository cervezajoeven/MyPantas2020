<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Supplier</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> SUPPLIER LIST</h2>

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
						<?php include ('modal_add_supplier.php') ?>
                                
                        
                         <a href="print_supplier_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>    
                        
                          
                        <a href="export_to_csv.php?action=23" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
						</a>                      
                        
					</div>

					
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">

                        <thead>
                        <tr>
                            <th style="width: 75px">Number</th> 
                            <th>Company name</th>
                            <th>Contact name</th>
                            <th>Address</th>
                            <th>Contact number</th>
                            <th>Email</th>                       
                            <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
							<?php
                            $result = $sLink->query("select * from supplier order by company_name");                         
                            $count = $result->rowcount();              
                        
                            if ($count > 0){
                                $num_rows = 0;
                                $num_rows = $start;                    
                        
                                while ($row = $result->fetch() ){                        
                                    $id=$row['userid'];      
                                    $num_rows++;
                            
							?>
                            <tr class="delete_mem<?php echo $id ?>">
                                <td style="text-align:center"><?php echo $num_rows; ?> </td>  
 
                                    <td><?php echo $row['company_name']; ?></td>
                                    <td><?php echo $row['contact_name']; ?></td>
                                    <td><?php echo $row['company_address']; ?></td>
                                    <td><?php echo $row['contact_number']; ?></td>
                                    <td><?php echo $row['email_address']; ?></td>                         
       


                                <td class="center">
                                    <a class="btn btn-primary" href="edit_supplier.php<?php echo '?id='.$id; ?>">
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
            if (confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    type: "POST",
                    url: "delete_supplier.php",
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
    });
</script>

<?php include('footer.php'); ?>
