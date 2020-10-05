<?php include('header.php'); 
                            
    //$idnum=$_POST['idnumber'];
    $action=$_POST['action'];
    $keyword=$_POST['keyword'];
    //$equipment=$_GET['equipment'];

    if (isset($_POST['keyword'])) {
            $keyword=$_POST['keyword'];
    }

    if (isset($_POST['action'])) {
            $action=$_POST['action'];
    }

    $checked = "";
    if ($_POST['opt']) {
       if ($_POST['opt'] == 'invbatch') {
           $batch_checked = "checked";
        }
       elseif ($_POST['opt'] == 'invlist') {
           $list_checked = "checked";               
        }        
       elseif ($_POST['opt'] == 'invdate') {
           $idate_checked = "checked";               
        }  
       elseif ($_POST['opt'] == 'invind') {
           $ind_checked = "checked";               
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
            <a href="#">Audio-visual Inventory</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> LIST OF AUDIO-VISUAL INVENTORY RECORDS</h2>

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
				<form method="POST" name="inv_transaction" id="inv_transaction">   
                    <div class="box col-md-12">
                        
                    <label class="radio-inline"><input type="radio" name="opt" value="invbatch" <?php echo $batch_checked;?> Onclick="document.inv_transaction.keyword.focus();">Batch process</label>
                    <label class="radio-inline"><input type="radio" name="opt" value ="invlist" <?php echo $list_checked;?> Onclick="document.inv_transaction.keyword.focus();">Generate inventory list</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "invdate" <?php echo $idate_checked;?> Onclick="document.inv_transaction.keyword.focus();">Inventory date</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "invind" <?php echo $ind_checked;?> Onclick="document.inv_transaction.keyword.focus();">Individual inventory</label>
                    <label class="radio-inline"><input type="radio" name="opt" value = "all" <?php echo $all_checked;?> Onclick="document.inv_transaction.keyword.focus();">All</label>					
                    </div>

                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
						  <select name="action" class="form-control" Onselect="document.inv_transaction.keyword.focus();">
							<option><?php echo $action;?></option>
                              <option>On-shelf</option>
                              <option>On-loan</option>
                              <option>Discarded</option>                             
                              <option>Lost</option>
                              <option>Lost and Paid</option>                              
                              <option>Missing</option>
                              <option>Repair</option>
                              <option>Reprocessing</option>                           
						  </select>                      

                        <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                        <input type="text" name="keyword" value="<?php echo $keyword; ?>" style="" class="form-control" placeholder="Accession or file name" autofocus />                        
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
                                $action = $_POST['action'];
                                if (empty($selected_radio)) {
                                    echo "<script>alert('Select first from radio button option!'); window.location='list_of_inventory_av.php'</script>";
                                    return;
                                }
								if ($selected_radio == 'invbatch') {
                                    $action = 'On-shelf';
                                     if (empty($keyword)) {
                                        echo "<script>alert('You have to enter path or location of file for proccessing.'); window.location='list_of_inventory_av.php'</script>";
                                        return;
                                    }                                   
                                    $file = file($keyword); # read file into array
                                    $count = count($file);
                                    $num = 0;
                                    // Edited to add loop back in... Silly me.
                                    if($count > 0) # file is not empty

                                    {
                                        foreach ($file as $row){
                                            $acc=trim($row);
                                            $stmt = $sLink->query("select * from sm_inventory where accession = '$acc'");
                                            $ac_row = $stmt->fetch(PDO::FETCH_ASSOC);   
                                            $id=$ac_row['id'];
                                            $inventorydate=date("Y-m-d H:i:s");                                          

                                            $sql = " UPDATE sm_inventory SET status='$action', idate='$inventorydate' WHERE id = '$id' ";
                                            $sLink->exec($sql); 
                                            
                                            $num++;
                                        }
                                    }
                                    //echo "<script>alert($num + ' accession records processed successfully!')</script>";
                                    echo "<script>alert($num + ' accession records processed successfully!'); window.location='list_of_inventory_av.php'</script>";
								} 
                                
								elseif ($selected_radio == 'invlist') {
                                    //$result=mysql_query("select * from accsm order by accession");  
                                    //while ($row= mysql_fetch_array ($result) ){
                                    $sql = "delete from sm_inventory";
                                    // use exec() because no results are returned
                                    $sLink->exec($sql);
                                    
                                    $result = $sLink->query("select * from accsm order by accession");                         
                                    while ($row = $result->fetch() ){     
                                        $author=$row['author'];                             
                                        $callnumber=$row['call_number'];
                                        $accession=$row['accession'];
                                        $location=$row['location'];
                                        $title=$row['title'];
                                        //$status=$row['status']; 
                                        
						                $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $sql = "INSERT INTO sm_inventory (accession,title,author,call_number,location) VALUES ('$accession', '$title','$author','$callnumber','$location')";
                                        $sLink->exec($sql); 
                                        
                                        //mysql_query ("INSERT INTO sm_inventory (accession,title,author,call_number,location) VALUES ('$accession', '$title','$author','$callnumber','$location')") or die(mysql_error());
  
                                    }
								   } 
								elseif ($selected_radio == 'invdate') {
                                    $result = $sLink->query("select * from sm_inventory where idate between '$start' and '$end' order by accession");  
									//$result=mysql_query("select * from sm_inventory where idate between '$start' and '$end' order by accession");           
								   }	
								elseif ($selected_radio == 'invind') {
                                    if (empty($action)) {
                                        echo "<script>alert('Status option is empty!'); window.location='list_of_inventory_av.php'</script>";
                                        return;
                                    }
                                    if (empty($keyword)) {
                                        echo "<script>alert('Kindly enter accession number first.'); window.location='list_of_inventory_av.php'</script>";
                                        return;
                                    }
                                    $result = $sLink->query("select * from sm_inventory where accession = '$keyword'");                         
                                    while ($row = $result->fetch() ) 
									//$result=mysql_query("select * from sm_inventory where accession = '$keyword'");
                                    //$row=mysql_fetch_array($result);
                                    $id=$row['id'];
                                    $inventorydate=date("Y-m-d H:i:s");
                                    
                                    $sql = " UPDATE sm_inventory SET status='$action', idate='$inventorydate' WHERE id = '$id' ";
                                    $sLink->exec($sql); 
                                    //mysql_query(" UPDATE sm_inventory SET status='$action', idate='$inventorydate' WHERE id = '$id' ")or die(mysql_error());
                                    
                                    $result = $sLink->query("select * from sm_inventory where accession = '$keyword'");   
                                    //$result=mysql_query("select * from sm_inventory where accession = '$keyword'");
                                
								   }
								else {
                                   $result = $sLink->query("select * from sm_inventory order by accession");  
								   //$result= mysql_query("select * from sm_inventory order by accession" ) or die (mysql_error());								   
								}
							}
							else {
                                $action=$_POST['action'];
                                $keyword=$_POST['keyword'];
                                $result = $sLink->query("select * from sm_inventory order by accession");  
							    //$result= mysql_query("select * from sm_inventory order by accession") or die (mysql_error());
                                
							}
						?>							
					</form>				
		
			</tbody>				
				
        </div>    
    </div> 
    
    <div class="box-content">

         <!-- Start content here -->
    <table id="galileo" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
						<th>Accession</th>
						<th width='250'>Title</th>
						<th>Creator</th>
                        <th>Call number</th>
                        <th>Type</th>  
 						<th>InvDate</th>  
                        <th>Status</th>               
                        <th>Action</th>  
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
            url :"data_inventory_av.php",
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
	
                        <a href="print_av_inventory_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
					</a>        
        
        
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
