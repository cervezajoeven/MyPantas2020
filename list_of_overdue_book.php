<?php include('header.php'); 

?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Books</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> LIST OF OVERDUE BOOK</h2>

                
                <div class="box-icon">
                    <!--<a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
                
            
            </div>
			
		
            <tbody>	
                
				<form method="POST" name="circ_transaction" id="circ_transaction">   		

                
				</form>				
					

                
                    <?php include('modal_client_detail.php'); ?>	
        
			</tbody>				
				
        </div>    
    </div> 

    <div class="box-content">
         <!-- Start content here -->

					<div class="alert alert-info">

                        <a class="btn btn-primary" href="javascript:history.back()" class="card"><i class="glyphicon glyphicon-hand-left icon-yellow"> Back</i></a>                       
                        <a href="print_overdue_book.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a> 
                       <a href="export_to_csv.php?action=21" target="_blank" style="background:none;">
                      <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
                    </a>                     
                        
					</div>    
        
        
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
            
          
			<thead>
				<tr>
					<th width="25">ID number</th>
					<th width="25">Name</th>                    
					<th width="25">Accession</th>
					<th width="30">Title</th>
					<th width="30">Date borrowed</th>
					<th width="30">Date due</th>	
 					<th width="35">Library</th>	                           

				</tr>
            </thead>
					
			<tbody>
					<?php   
    
                    //$result = $sLink->query("select * from borrower where DATE_FORMAT(due_date, '%Y-%m-%d')<CURDATE()");     
                    $result = $sLink->query("select client.name, borrower.* from borrower INNER JOIN client on borrower.id_number = client.idnum where DATE_FORMAT(due_date, '%Y-%m-%d') < CURDATE()");
                
                    while ($row = $result->fetch() ){                        
					//$id=$row['id'];
				
                    ?>
					<tr>
						<td><?php echo $row['id_number']; ?></td>
  						<td><?php echo $row['name']; ?></td>                      
						<td><?php echo $row['accession_number']; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['date_borrowed']; ?></td>
						<td><?php echo $row['due_date']; ?></td>
 			            <td><?php echo $row['library']; ?></td>                           

				    </tr>
					<?php } ?>
				</tbody>
        </table>

        <!-- end content here -->
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
