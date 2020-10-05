<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Items Table</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> Items Table</h2>

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
						<?php include ('modal_add_item.php') ?>
					</div>
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
						<th>Item name</th>
						<th>Barcode</th>
						<th>Brand</th>
						<th>Model</th>
						<th>Serial number</th>
						<th>Price</th>
						<th>Status</th>						
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
							<?php
							//$result= mysql_query("select * from newequipment order by description DESC ") or die (mysql_error());
							//while ($row= mysql_fetch_array ($result) ){
                                
                            $query = $sLink->query("select * from newequipment order by description DESC ");
                            while ($row = $query->fetch() ){       
							$id=$row['eqid'];                           
                                
							//$id=$row['eqid'];
							//$item_qty=$row['item_qty'];
							
									//$borrow_details = mysql_query("select * from equip_borrower where id = '$id'");
									//$row11 = mysql_fetch_array($borrow_details);
									//$count = mysql_num_rows($borrow_details);
									
									//$total =  $item_qty  -  $count; 
				
							?>
					<tr>

						<td><span class="label-success label label-default"><?php echo $row['description']; ?></span></td>
						<td><span class="label-primary label label-default"><?php echo $row['barcode']; ?></span></td>
						<td><?php echo $row['brand']; ?></td>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['sn']; ?></td>
						<td><?php echo $row['price']; ?> </td>
						<td><?php echo $row['status']; ?> </td>
						<td class="center">
							<!--<a class="btn btn-success" href="#">
								<i class="glyphicon glyphicon-zoom-in icon-white"></i>
								View
							</a>-->

							<a class="btn btn-info" href="edit_item.php<?php echo '?item_id='.$id; ?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
							</a>
							<a class="btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
								<i class="glyphicon glyphicon-trash icon-white"></i>
							</a>
							
							<?php include('modal_delete_item.php'); ?>
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
