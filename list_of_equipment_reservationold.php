<?php include('header.php'); 
                            
    //$idnum=$_POST['idnumber'];
    //$keyword=$_POST['keyword'];
    $keyword=$_GET['itemcode'];
    $equipment=$_GET['equipment'];

    if (isset($_POST['keyword'])) {
            $keyword=$_POST['keyword'];
    }

    if (isset($_POST['title'])) {
            $title=$_POST['title'];
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
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Venue reservation</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> LIST OF EQUIPMENT AND GADGET RESERVATION</h2>

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
				<form method="POST">   
                    <div class="box col-md-12">
                    <label class="radio-inline"><input type="radio" name="opt" value="name" <?php echo $name_checked;?> >Faculty</label>
                    <label class="radio-inline"><input type="radio" name="opt" value ="group" <?php echo $group_checked;?> >Subject</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "idnumber" <?php echo $idnumber_checked;?> >ID number</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "type" <?php echo $type_checked;?> >Equipment</label>		
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
									$result=mysql_query("select * from equipmentnew_schedule where name like '%$keyword%' and (date_reservation between '$start' and '$end') order by equipment, date_reservation, time_reservation");
								   } 
								elseif ($selected_radio == 'group') {
									$result=mysql_query("select * from equipmentnew_schedule where subject like '%$keyword%' and (date_reservation between '$start' and '$end') order by equipment, date_reservation, time_reservation");           
								   } 
								elseif ($selected_radio == 'idnumber') {
									$result=mysql_query("select * from equipmentnew_schedule where id_number = '$keyword' and (date_reservation between '$start' and '$end') order by equipment, date_reservation, time_reservation");           
								   }	
								elseif ($selected_radio == 'type') {
									$result=mysql_query("select * from equipmentnew_schedule where equipment = '$keyword' and (date_reservation between '$start' and '$end') order by equipment, date_reservation, time_reservation");           
								   }
								else {
								   $result= mysql_query("select * from equipmentnew_schedule where equipment = '$keyword' order by equipment, date_reservation, time_reservation" ) or die (mysql_error());								   
								}
							}
							else {
                                $keyword=$_GET['itemcode'];
							    $result= mysql_query("select * from equipmentnew_schedule order by equipment, date_reservation, time_reservation") or die (mysql_error());
                                
							}
						?>							
					</form>				
		
			</tbody>				
				
        </div>    
    </div> 


    
    
    <div class="box-content">
             <div class="alert alert-info">
				<?php include ('modal_add_equipment_reservation.php') ?>
		</div>       

         <!-- Start content here -->
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
			<thead>
				<tr>
                    <th width="20">Venue</th>
					<th width="10">Date reservation</th>
					<th width="10">Time reservation</th>
					<th width="10">Faculty</th>
 					<th width="10">Subject</th>     
                    <th width="30">Purpose</th>  
                    <th width="30">Date submitted</th>  
                    <th width="10">Actions</th>
				</tr>
            </thead>
					
			<tbody>
					<?php
                
					while ($row= mysql_fetch_array ($result) ){
					$id=$row['id'];
					$petsa=$row['date_reservation'];
                    ?>
					<tr>
                        <td><?php echo $row['equipment']; ?></td>
						<td><?php echo $row['date_reservation']; ?></td>
                        <td><?php echo $row['time_reservation']; ?></td>
						<td><?php echo $row['name']; ?></td>   
                        <td><?php echo $row['subject']; ?></td>
 						<td><?php echo $row['purpose']; ?></td>                       
                        <td><?php echo $row['date_submitted']; ?></td>    

				        <td class="center">
                            <!--<a class="btn btn-success" href="#">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                            </a>-->

                                <a class="btn btn-info" href="edit_equipment_reservation.php<?php echo '?item_id='.$id; ?>">
                                    
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                </a>
                            
                            <a class="btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
								<i class="glyphicon glyphicon-trash icon-white"></i>
							</a>
                            <?php include('modal_delete_equipment_reservation.php'); ?>
                            
                            
                       
                            
                            
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
