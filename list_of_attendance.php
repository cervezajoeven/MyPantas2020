<?php include('header.php'); 
                            
    //$keyword=$_GET['itemcode'];
    $name=$_GET['name'];

    if (isset($_POST['keyword'])) {
            $keyword=$_POST['keyword'];
    }



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
		$date1=$_POST['date1'];		
        $date1 = strtr($_POST['date1'], '/', '-');
        $date1 = date('Y-m-d', strtotime($date1));

    }
    else {
         $date1 = date("Y-m-d");
    }
	
	if (isset($_POST['date2'])) {
        $date2=$_POST['date2'];
		$date2=$_POST['date2'];		
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
            <a href="list_of_attendance.php">Patron attendance</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> PATRON ATTENDANCE MONITORING</h2>

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
                <a href="print_attendance_list.php" target="_blank" style="background:none;">
                      <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
                </a> 
            </div>            
            
              <tbody>					
				<form method="POST">   
                    <div class="box col-md-12">
                    <label class="radio-inline"><input type="radio" name="opt" value="name" <?php echo $name_checked;?> >Name</label>
                    <label class="radio-inline"><input type="radio" name="opt" value ="group" <?php echo $group_checked;?> >Group</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "idnumber" <?php echo $idnumber_checked;?> >ID number</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "description" <?php echo $type_checked;?> >Description</label>
				
                    </div>

                    <div class="input-group" >

                        <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
                        <input type="text" name="keyword" value="<?php echo $keyword; ?>" style="" class="form-control" placeholder="Keywords" autofocus />                        
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>				
                        <input type="date" name="date1" value="<?php echo $date1; ?>" style="" class="form-control"  />
                        
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>				
                        <input type="date" name="date2" value="<?php echo $date2; ?>" style=";" class="form-control" />
                        <div class="input-group-btn">
                            <button name="submit" value="selection" class="btn btn-primary" type="submit" ><i class="glyphicon glyphicon-open"></i>Submit</button>
                        </div>
                    </div>	

                        
						<?php 

                            if (isset($_POST['submit'])) {
                                $selected_radio = $_POST['opt'];
                                $keyword = $_POST['keyword'];
                                
								if ($selected_radio == 'name') {

                                    $result = $sLink->query("select * from clientlog where name like '%$keyword%' and (petsa between '$date1' and '$date2') order by name, petsa");  
								   } 
								elseif ($selected_radio == 'group') {
 
                                    $result = $sLink->query("select * from clientlog where grp like '%$keyword%' and (petsa between '$date1' and '$date2') order by name, petsa"); 
								   } 
								elseif ($selected_radio == 'idnumber') {

                                    $result = $sLink->query("select * from clientlog where id = '$keyword' and (petsa between '$date1' and '$date2') order by name, petsa"); 
								   }	
								elseif ($selected_radio == 'description') {

                                    $result = $sLink->query("select * from clientlog where level = '$keyword' and (petsa between '$date1' and '$date2') order by name, petsa"); 
								   }
								else {
	
                                   $result = $sLink->query("select * from clientlog where name = '$keyword' order by name, petsa");  
								}

							}
						?>							
					</form>				
		
			</tbody>			          
            
            
            <div class="box-content">
                
                <!-- Start content here -->
					<div class="alert alert-info">						
					</div>

        <?php
        if (isset($_POST['submit'])){
        ?>  					
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">

					<thead>
					<tr>
						<th>Name</th>
						<th>ID number</th>
						<th>Group</th>
						<th>Description</th>
						<th>Date/Time entered</th>
						<th>Enter/Exit at</th>       
                    	<th>Status</th>

						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
							<?php
                            while ($row = $result->fetch() ){        
							$id=$row['id'];
							?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['id_number']; ?></td>
						<td><?php echo $row['grp']; ?></td>
						<td><?php echo $row['level']; ?></td>
 						<td><?php echo $row['location']; ?></td>                       
                        <td><?php echo date("M d, Y H:i:s",strtotime($row['petsa'])); ?></td>
						<td><?php echo $row['status']; ?></td> 

						<td class="center">
							<!--<a class="btn btn-success" href="#">
								<i class="glyphicon glyphicon-zoom-in icon-white"></i>
								View
							</a>-->
							<a class="btn btn-info" href="edit_clientlog.php<?php echo '?client_id='.$id; ?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
							</a>
							<a class="btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
								<i class="glyphicon glyphicon-trash icon-white"></i>
							</a>
							<?php include('modal_delete_clientlog.php'); ?>
                            
                            
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
						<th>Name</th>
						<th>ID number</th>
						<th>Group</th>
						<th>Description</th>
						<th>Date/Time entered</th>
						<th>Enter/Exit at</th>       
                    	<th>Status</th>     
                   
						<th>Actions</th>
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
                  "targets": [7],
                  "orderable": false,
                  "searchable": false

                } ],
                "ajax":{
                url :"data_attendance.php",
                type: "post",  // method  , by default get
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
