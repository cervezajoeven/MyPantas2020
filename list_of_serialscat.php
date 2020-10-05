<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Serials cataloguing</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> SERIALS CATALOGUING</h2>

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
						<?php include ('modal_add_serialscat.php') ?>
                        
                        <a href="print_serialscat_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>
					</div>

					
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">

					<thead>
					<tr>
						<th width="800">Title</th>
						<th>Type</th>
						<th>Copy</th>                     
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
							<?php
                            $result = $sLink->query("select * from books where tm='se' order by title DESC ");                         
                            while ($row = $result->fetch() ){                        
                            $id=$row['bkid'];  
                                
							//$result= mysql_query("select * from accessioning order by title DESC ") or die (mysql_error());
							//while ($row= mysql_fetch_array ($result) ){
							//$id=$row['id'];
							?>
                        
                        <tr class="delete_mem<?php echo $id ?>">
                            <td ><?php echo $row['title']; ?></td>
                            <td><?php echo $row['tm']; ?></td>
                            <td><?php echo $row['copy']; ?></td>


                            <td class="center">
                                <!--<a class="btn btn-success" href="#">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    View
                                </a>-->
                                <a class="btn btn-primary" href="edit_serialscat.php<?php echo '?bkid='.$id; ?>">
                                    <i class="glyphicon glyphicon-edit icon-white"></i> Edit
                                </a>

                                <a class="btn btn-danger" id="<?php echo $id; ?>">
                                    <i class="glyphicon glyphicon-trash icon-white"> </i> Delete
                                </a>                          

                            </td>

                        </tr>
							<?php } ?>
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
                    url: "delete_serialscat.php",
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
