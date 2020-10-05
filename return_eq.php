<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Check-in transaction</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Check-in transaction</h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start your content here -->
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID Number</th>
        <th>Name</th>	
        <th>Item</th>		
        <th>Barcode</th>			
        <th>Date Borrowed</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>								 

									
                                  <?php  $user_query=mysql_query("select * from equip_borrower ORDER BY id_number DESC")or die(mysql_error());
									$row=mysql_fetch_array($user_query);
									{
									//$idnum = $row['id_number'];
									$idnum = $row['name'];	
									$item = $row['description'];
									$barcode = $row['barcode'];																		
									$id = $row['id'];
									
									?>
    <tr class="del<?php echo $id ?>">
	
        <td><?php echo $row['id_number']; ?></td>
		<td><?php echo $row['name']; ?></td>
        <td><?php echo $row['barcode']; ?></td>	
        <td><?php echo $row['barcode']; ?></td>			
		<td><?php echo date("M d, Y H:i:s",strtotime($row['date_borrowed'])); ?></td>

		<td>
			<a class="btn btn-primary"  id="<?php echo $id; ?>" href="#delete_book<?php echo $idnum;?>" data-toggle="modal" data-target="#delete_book<?php echo $release_details_id;?>" <?php echo (($row['release_status'] == 'returned' )) ? "disabled onclick='return false;'" : ""; ?>>
				<i class="glyphicon glyphicon-check icon-white"></i> Returned
			</a>
			<?php include('modal_return.php'); ?>
		</td>
		
    </tr>
									<?php  }  ?>
    </tbody>
    </table>
                <!-- end your content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
