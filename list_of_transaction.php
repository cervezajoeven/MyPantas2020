<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Transaction History</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> List of Transaction History</h2>

                <div class="box-icon">
                 <!---   <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
				

					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
						<th>Name</th>
						<th>ID number</th>
						<th>Accession</th>
						<th>Title</th>
                        <th>Date loan</th>
					</tr>
					</thead>
					<tbody>
						 
                            <?php  
                            
                            $query=mysql_query("select * from returned order by name, date_loan desc")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$id=$row['id'];
   							$name=$row['name'];                             
							$idnumber=$row['id_number'];
							$accession=$row['accession'];
							$title=$row['title'];
                        
                            //$user_query=mysql_query("select * from transaction_history 
							//LEFT JOIN client ON transaction_history.client_id = client.client_id
							//LEFT JOIN item ON transaction_history.item_id = item.item_id
							//ORDER BY transaction_history.transaction_history_id DESC")or die(mysql_error());
							//while($row=mysql_fetch_array($user_query)){
							//$id=$row['transaction_history_id'];
							//$item_id=$row['item_id'];
							//$release_id=$row['release_id'];
							//$client_id=$row['client_id'];
							//$client_name=$row['firstname']." ".$row['lastname'];
                                
							?>
					<tr>
						<td><?php echo $name; ?></td>
						<td><?php echo $idnumber; ?></td>
                        <td><?php echo $accession; ?></td>
                        <td><?php echo $title; ?></td>
						<td><span class="label-success label label-default"><?php echo date("M d, Y H:i:s",strtotime($row['date_loan'])); ?></span></td>

					<!--	<td class="center">
							<a class="btn btn-success" href="#">
								<i class="glyphicon glyphicon-zoom-in icon-white"></i>
								View
							</a>
							<a class="btn btn-info" href="edit_client.php<?php // echo '?client_id='.$id; ?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
							</a>
							<a class="btn btn-danger" href="#delete<?php // echo $id;?>" data-toggle="modal" data-target="#delete<?php // echo $id;?>">
								<i class="glyphicon glyphicon-trash icon-white"></i>
							</a>
							<?php // include('modal_delete_client.php'); ?>
						</td>-->
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
