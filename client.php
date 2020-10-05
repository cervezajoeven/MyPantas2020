<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="#">Patron</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> PATRON ITEM LIST</h2>

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
						<?php include ('modal_add_client.php') ?>
                                
                        
                         <a href="print_patron_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>    
                        
                          
                        <a href="export_to_csv.php?action=1" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
						</a>                      
                        
					</div>

					
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">

					<thead>
					<tr>
						<th>ID number</th>
						<th>Name</th>
						<th>Group</th>
						<th>Description</th>
						<th>On-loan</th>
						<th>Date Added</th>
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
							<?php
                            $result = $sLink->query("select * from client order by name");                         
                            while ($row = $result->fetch() ){                        
                            $id=$row['id'];  
                                
							//$result= mysql_query("select * from client order by name DESC ") or die (mysql_error());
							//while ($row= mysql_fetch_array ($result) ){
							//$id=$row['id'];
							?>
					<tr>
						<td><?php echo $row['idnum']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['dgroup']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['bkloan']; ?></td>
						<td><?php echo date("M d, Y H:i:s",strtotime($row['dateapplied'])); ?></td>
						<td class="center">
							<!--<a class="btn btn-success" href="#">
								<i class="glyphicon glyphicon-zoom-in icon-white"></i>
								View
							</a>-->
							<a class="btn btn-info" href="edit_client.php<?php echo '?client_id='.$id; ?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
							</a>
							<a class="btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
								<i class="glyphicon glyphicon-trash icon-white"></i>
							</a>
							<?php include('modal_delete_client.php'); ?>
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

<?php include('footer.php'); ?>
