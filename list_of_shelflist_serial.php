<?php include('header.php'); ?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Serials Shelf list</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i>SERIALS SHELF LIST RECORDS</h2>

                <div class="box-icon">
                    <!--<a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
     	<div class="alert alert-info">
		<?php include ('modal_none.php') ?>   
        
        <a href="print_serial_shelflist_list.php" target="_blank" style="background:none;">
		      <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
        </a>   
            
         <a href="export_to_csv.php?action=15" target="_blank" style="background:none;">
		      <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
		</a>            
            
        </div>
                    
			
            <tbody>					
				<form method="POST">   


                        
						<?php 

                            {
                                $result = $sLink->query("select * from accaudio order by accession");
                                //$result= mysql_query("select * from accaudio order by call_number") or die (mysql_error());
                                
							}
						?>							
					</form>				
		
			</tbody>				
				
        </div>    
    </div> 


    
    
    <div class="box-content">
       

         <!-- Start content here -->
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
			<thead>
				<tr>
                        <th>Call number</th>                    
						<th width='300'>Title</th>
						<th>Creator</th>
						<th>Date/Year</th>
                        <th>Publisher</th> 
						<th>Accession</th>      
                        <th>Action</th>                   
				</tr>
            </thead>
					
			<tbody>
					<?php
                
					//while ($row= mysql_fetch_array ($result) ){
                    while ($row = $result->fetch() ){        
							$id=$row['id'];
   							$author=$row['author'];                             
							$callnumber=$row['call_number'];
							$accession=$row['accession'];
							$taon=$row['ye_ar'];
                        	$publisher=$row['publisher'];
                        	$location=$row['location'];
                        	$title=$row['title'];
                            //$isbn=$row['isbn']; 
                            $status=$row['status'];   
                        
                    ?>
					<tr>
	                    <td><?php echo $row['call_number']; ?></td>  
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td><?php echo $row['ye_ar']; ?></td>
                        <td><?php echo $row['publisher']; ?></td>
 					    <td><?php echo $row['accession']; ?></td>                       


				        <td class="center">
                            <!--<a class="btn btn-success" href="#">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                            </a>-->

                            <a class="btn btn-success" type="submit" name="details" title="View detail information" href="#history_loan_book<?php echo $id;?>" data-toggle="modal" data-target="#history_loan_book<?php echo $id;?>">
                            <i class="glyphicon glyphicon-eye-open icon-white"></i> View
                            </a>
                            <?php include('modal_accession_detail_serial.php'); ?>
                            

                       
                            
                            
						</td>
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
