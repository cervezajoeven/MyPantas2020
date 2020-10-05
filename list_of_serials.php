<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Serials management</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> SERIALS ITEM LIST</h2>

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
						<?php include ('modal_add_serials.php') ?>
                        
                        <a href="print_serial_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>                            
                        
					</div>
            
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
						<th style="width:200px" >Serial title</th>
						<th>ISSN</th>	
						<th>Frequency</th>
						<th style="width:150px">Subject</th>	                        
						<th style="width:600px">Actions</th>
					</tr>
					</thead>
                        
					<tbody>
							<?php
                            $result = $sLink->query("select * from serial_title order by serial_title");                         
                            while ($row = $result->fetch() ){                        
                            //$id=$row['id'];   
    
							//$result= mysql_query("select * from serial_title order by serial_title") or die (mysql_error());
							//while ($row= mysql_fetch_array ($result) ){
							$id=$row['id'];
							$item=$row['itemcode'];
                            $title=$row['serial_title'];
							?>
                        
                        <tr>

                            <td><?php echo $row['serial_title']; ?></td>
                            <td><?php echo $row['issn']; ?></td>
                            <td><?php echo $row['frequency']; ?></td>
                            <td><?php echo $row['subject']; ?></td>                            
                            
                            <td class="center">
                                <!--<a class="btn btn-success" href="#">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    View
                                </a>-->

                                <a class="btn btn-primary" href="edit_serials.php<?php echo '?item_id='.$id; ?>" title="Edit specific item issue">
                                    <span class="label-info label label-default"></span>
                                    <i class="glyphicon glyphicon-edit icon-white"></i> Edit
                                </a>
                                
                                <a class="btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" title="Delete specific item issue" data-target="#delete<?php echo $id;?>">
                                   <span class="label-danger label label-default"></span> 
                                    <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                </a>
                                <?php include('modal_delete_serials.php'); ?>
                                
                                <a class="btn btn-info" href="#delete<?php echo $id;?>" data-toggle="modal" title="Add serials issue" data-target="#add_issues<?php echo $id;?>">
                                    <span class="label-success label label-default"></span>
                                    <i class="glyphicon glyphicon-plus-sign icon-white"></i> Issues
                                </a>
                                <?php include('modal_serials_add_issues.php'); ?>                        
                                
                                <a class="btn btn-info" href="list_of_serials_view_issues.php<?php echo '?title=' . $title; ?><?php echo '&itemcode=' . $item; ?>" title="View serials issues">
                                    <span class="label-success label label-success"></span>
                                    <i class="glyphicon glyphicon-eye-open icon-white"></i> Issues
                                </a>
                                
                                <a class="btn btn-warning" href="#add_renewal<?php echo $id;?>" data-toggle="modal" title="Add renewal transaction" data-target="#add_renewal<?php echo $id;?>">
                                    <span class="label-warning label label-default"></span>
                                    <i class="glyphicon glyphicon-plus-sign icon-white"></i> Renewal
                                </a>
                                <?php include('modal_serials_add_renewal.php'); ?>
                                
                                <a class="btn btn-warning" href="list_of_serials_view_renewal.php<?php echo '?title=' . $title; ?><?php echo '&itemcode=' . $item; ?>" title="View renewal transaction">
                                    <span class="label-warning label label-default"></span>
                                    <i class="glyphicon glyphicon-eye-open icon-white"></i> Renewal
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



<?php include('footer.php'); ?>
