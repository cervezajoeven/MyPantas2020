<?php include('header.php'); 
                            
    //$idnum=$_POST['idnumber'];
    //$keyword=$_POST['keyword'];
    $keyword=$_GET['itemcode'];
    $title=$_GET['title'];

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
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="#">View Serials Renewal</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> LIST OF SERIALS RENEWAL TRANSACTON</h2>

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
                    <label class="radio-inline"><input type="radio" name="opt" value="name" <?php echo $name_checked;?> >Name</label>
                    <label class="radio-inline"><input type="radio" name="opt" value ="group" <?php echo $group_checked;?> >Group</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "idnumber" <?php echo $idnumber_checked;?> >ID number</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "type" <?php echo $type_checked;?> >Type</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "all" <?php echo $all_checked;?> >All</label>					
                    </div>

                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <input type="text" name="title" value="<?php echo $title; ?>" style="width:400px;" class="form-control" placeholder="Title" />
                        
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
                        <input type="text" name="keyword" value="<?php echo $keyword; ?>" style="" class="form-control" placeholder="Keywords" autofocus />                        
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>				
                        <input type="date" name="date1" value="<?php echo $date1; ?>" style="" class="form-control"  />
                        
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>				
                        <input type="date" name="date2" value="<?php echo $date2; ?>" style=";" class="form-control" />
                        <div class="input-group-btn">
                            <button name="submit" class="btn btn-primary" type="submit" ><i class="glyphicon glyphicon-open"></i>Submit</button>
                        </div>
                    </div>	

                        
						<?php 

                            if (isset($_POST['submit'])) {
                                $selected_radio = $_POST['opt'];
                                $keyword = $_POST['keyword'];
                                
								if ($selected_radio == 'name') {
									//$result=mysql_query("select * from renewal where itemcode = '$keyword' and date_received between '$start' and '$end'");
                                    $result = $sLink->query("select * from renewal where itemcode = '$keyword' and date_received between '$start' and '$end'");
								   } 
								elseif ($selected_radio == 'group') {
									//$result=mysql_query("select * from renewal where itemcode = '$keyword' and (date_received between '$start' and '$end')");   
                                    $result = $sLink->query("select * from renewal where itemcode = '$keyword' and (date_received between '$start' and '$end')");
								   } 
								elseif ($selected_radio == 'idnumber') {
									//$result=mysql_query("select * from renewal where idnum = '$keyword' and (date_received between '$start' and '$end')");   
                                    $result = $sLink->query("select * from renewal where idnum = '$keyword' and (date_received between '$start' and '$end')");
								   }	
								elseif ($selected_radio == 'type') {
									//$result=mysql_query("select * from renewal where status = '$keyword' and (date_received between '$start' and '$end')");  
                                    $result = $sLink->query("select * from renewal where status = '$keyword' and (date_received between '$start' and '$end')");
								   }
								else {
                                    $result = $sLink->query("select * from renewal where itemcode = '$keyword'");					   
								}
							}
							else {
                                $keyword=$_GET['itemcode'];
                                $result = $sLink->query("select * from renewal where itemcode = '$keyword'");	
							    //$result= mysql_query("select * from renewal where itemcode = '$keyword'") or die (mysql_error());
                                
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
                    <th width="20">Item code</th>
					<th width="10">Source</th>
					<th width="10">Period cover</th>
					<th width="30">Amount</th>  
                    <th width="30">Date order</th>  
                    <th width="10">Actions</th>
				</tr>
            </thead>
					
			<tbody>
					<?php

					//while ($row= mysql_fetch_array ($result) ){
                    while ($row = $result->fetch() ){     
					$id=$row['id'];
					//$petsa=$row['date_received'];
                    ?>
					<tr>
                        
 
                        <td><?php echo $row['itemcode']; ?></td>
						<td><?php echo $row['source']; ?></td>
						<td><?php echo $row['period_cover']; ?></td>
						<td><?php echo $row['amount']; ?></td>     
                        <td><?php echo $row['date_order']; ?></td>    

				        <td class="center">
                            <!--<a class="btn btn-success" href="#">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                            </a>-->

                                <a class="btn btn-primary" href="edit_serials_renewal.php<?php echo '?item_id='.$id; ?>">
                                    <span class="label-info label label-default"></span>
                                    <i class="glyphicon glyphicon-edit icon-white"></i> Edit
                                </a>
                            
                            <a class="btn btn-danger" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
								<span class="label-info label label-danger"></span><i class="glyphicon glyphicon-trash icon-white"></i> Delete
							</a>
                            <?php include('modal_delete_serials_renewal.php'); ?>
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
