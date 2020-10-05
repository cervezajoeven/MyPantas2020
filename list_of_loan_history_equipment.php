<?php include('header.php'); 
                            
    $idnum=$_POST['idnumber'];
    $keyword=$_POST['keyword'];

    $checked = "";
    if ($_POST['opt']) {
       if ($_POST['opt'] == 'name') {
           $name_checked = "checked";
        }
       elseif ($_POST['opt'] == 'group') {
           $group_checked = "checked";               
        }        
       elseif ($_POST['opt'] == 'idnumber') {
           $idnumber_checked = "checked";               
        }  
       elseif ($_POST['opt'] == 'type') {
           $type_checked = "checked";               
        }  	
       elseif ($_POST['opt'] == 'all') {
           $all_checked = "checked";               
        } 		
    }
    
    if (isset($_POST['date1'])) {
        $date1=$_POST['date1'];
		$start=$_POST['date1'];		
        $date1 = strtr($_POST['date1'], '/', '-');
        $date1 = date('Y-m-d', strtotime($date1));

    }
    else {
         $date1 = date("Y-m-d");
    }
	
	if (isset($_POST['date2'])) {
        $date2=$_POST['date2'];
		$end=$_POST['date2'];		
        $date2 = strtr($_POST['date2'], '/', '-');
        $date2 = date('Y-m-d', strtotime($date2));

    }
    else {
        $date2 = date("Y-m-d");
    }
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="list_of_loan_history_equipment.php">Equipment</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> LOAN HISTORY OF EQUIPMENT AND GADGET</h2>

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
                <a href="print_loan_history_equipment.php" target="_blank" style="background:none;">
                      <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
                </a> 
                
                <a href="export_to_csv.php?action=19" target="_blank" style="background:none;">
                  <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
                </a>                 
            </div>        
			
            <tbody>					
				<form method="POST">   
                    <div class="box col-md-12">
                    <label class="radio-inline"><input type="radio" name="opt" value="name" <?php echo $name_checked;?> >Name</label>
                    <label class="radio-inline"><input type="radio" name="opt" value ="group" <?php echo $group_checked;?> >Group</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "idnumber" <?php echo $idnumber_checked;?> >ID number</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "type" <?php echo $type_checked;?> >Item name</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "all" <?php echo $all_checked;?> >All</label>					
                    </div>

                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="keyword" value="<?php echo $keyword; ?>" class="form-control" placeholder="Keywords" autofocus />                        
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>				
                        <input type="date" name="date1" value="<?php echo $date1; ?>" class="form-control" placeholder="date"  />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>				
                        <input type="date" name="date2" value="<?php echo $date2; ?>" class="form-control" placeholder="date"  />
                        <div class="input-group-btn">
                            <button name="submit" class="btn btn-primary" type="submit" ><i class="glyphicon glyphicon-open"></i>Submit</button>
                        </div>
                    </div>	

                        
						<?php 
     
                            
                            if (isset($_POST['submit'])) {
                                $selected_radio = $_POST['opt'];
                                
								if ($selected_radio == 'name') {
									//$result=mysql_query("select * from equipment_history where name like '%$keyword%' and date_loan between '$start' and '$end'");
                                    $result = $sLink->query("select * from equipment_history where name like '%$keyword%' and date_loan between '$date1' and '$date2'");  
								   } 
								elseif ($selected_radio == 'group') {
									//$result=mysql_query("select * from equipment_history where degree_course like '%$keyword%' and (date_loan between '$start' and '$end')");         
                                    $result = $sLink->query("select * from equipment_history where group_type like '%$keyword%' and date_loan between '$date1' and '$date2'");  
								   } 
								elseif ($selected_radio == 'idnumber') {
									//$result=mysql_query("select * from equipment_history where id_number = '$keyword' and (date_loan between '$start' and '$end')");
                                    $result = $sLink->query("select * from equipment_history where id_number like '%$keyword%' and date_loan between '$date1' and '$date2'");
								   }	
								elseif ($selected_radio == 'type') {
									//$result=mysql_query("select * from equipment_history where description = '$keyword' and (date_loan between '$start' and '$end')");
                                    $result = $sLink->query("select * from equipment_history where description like '%$keyword%' and date_loan between '$date1' and '$date2'");
								   }
								else {
								   //$result= mysql_query("select * from equipment_history order by name,degree_course,date_returned") or die (mysql_error());
                                   $result = $sLink->query("select * from equipment_history order by name, description DESC"); 
								}
							}
							else {
							   //$result= mysql_query("select * from equipment_history order by name,degree_course,date_returned") or die (mysql_error());
                               $result = $sLink->query("select * from equipment_history order by name, degree_course DESC");  
							}
						?>							
					</form>				
		
			</tbody>				
				
        </div>    
    </div> 

    <div class="box-content">
        
        <?php
        if (isset($_POST['submit'])){
        ?>     
        
         <!-- Start content here -->
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
			<thead>
				<tr>
                    <th width="20">Name</th>
					<th width="10">ID number</th>
					<th width="30">Item name</th>
					<th width="10">Barcode</th>  
					<th width="10">Group</th>                     
					<th width="10">Date borrowed</th>
					<th width="10">Date returned</th>   
                    <th width="10">Actions</th>
				</tr>
            </thead>
					
			<tbody>
					<?php

					//while ($row= mysql_fetch_array ($result) ){
                    while ($row = $result->fetch() ){      
					$id=$row['id'];
				
                    ?>
					<tr>
                        
 
                        <td><?php echo $row['name']; ?></td>
						<td><?php echo $row['id_number']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['barcode']; ?></td>      
 						<td><?php echo $row['group_type']; ?></td>                          
						<td><?php echo $row['date_loan']; ?></td>    
						<td><?php echo $row['date_returned']; ?></td>                       
				        <td class="center">
                            <!--<a class="btn btn-success" href="#">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                            </a>-->

                            <a class="btn btn-success" type="submit" name="details" href="#history_loan_book<?php echo $id;?>" data-toggle="modal" data-target="#history_loan_book<?php echo $id;?>">
                            <i class="glyphicon glyphicon-eye-open icon-white"></i>
                            </a>
                            <?php include('modal_history_detail_equipment.php'); ?>
                            
                            <a class="btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
								<i class="glyphicon glyphicon-trash icon-white"></i>
							</a>
                            <?php include('modal_delete_history_equipment.php'); ?>
						</td>
				    </tr>
					<?php } ?>
				</tbody>
        </table>
         <?php
        } 
        else 
        {
        ?>	
        
        <!-- Start content here -->
        <table id="galileo" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="20">Name</th>
					<th width="10">ID number</th>
					<th width="30">Item name</th>
 					<th width="10">Barcode</th>      
                    <th width="10">Group</th>  
					<th width="10">Date borrowed</th>
					<th width="10">Date returned</th>   
                    <th width="10">Actions</th>
                </tr>
            </thead>
           <tbody>

           </tbody>
        </table>


          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery-1.12.0.min.js"></script>
        <!-- datatables js -->
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dataTables.bootstrap.min.js"></script>   


        <!-- let's begin the script -->
        <script type="text/javascript">
         $("#galileo").dataTable({
               'bProcessing': true,
                'bServerSide': true,
                //disable order dan searching pada tombol aksi
                  "columnDefs": [ {
                  "targets": [6],
                  "orderable": false,
                  "searchable": false

                } ],
                "ajax":{
                url :"data_loan_history_equipment.php",
                type: "post",  // method  , by default get
                //bisa kirim data ke server
                /*data: function ( d ) {

                          d.jurusan = "3223";
                      },*/
              error: function (xhr, error, thrown) {
                console.log(xhr);

                }
              },

            });
        </script>  	
        
	<?php } ?>	
	
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
