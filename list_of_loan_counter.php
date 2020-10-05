<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">BOOK LOAN COUNTER LIST</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i>BOOK LOAN COUNTER LIST</h2>

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

                        <a class="btn btn-primary" href="javascript:history.back()" class="card"><i class="glyphicon glyphicon-hand-left icon-yellow"> Back</i></a>                       
                        <a href="print_internet_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>                          
					</div>
                
     
                
                
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
						<th style="width: 100">Number</th>
						<th style="width: 250" >Title</th>
                        <th style="width: 250" >Creator</th>	
                        <th style="width: 100" >Prefix</th>			
						<th style="width: 300">Call number</th>
                       	<th style="width: 100">Counter</th> 
					</tr>
					</thead>
					<tbody>
							<?php
    						//unset($mtype);
                            //if (isset($_GET['item'])) {
                            //    $item=$_GET['item'];
                            //    $letter = "<0025>".$item;
                                $result = $sLink->query("select * from books where tm='book' and t_timesout > 0 order by t_timesout desc");  
                                $count = $result->rowcount();        
                            //}                
                                       
                            if ($count > 0){
                                $num_rows = 0;
                                $num_rows = $start;

                                while ($row = $result->fetch() ){                        
                                $id=$row['bkid'];
                                    
                                $MyString1 = $row['maintext'];
                                $MyArray1 = explode("", $MyString1);
                                $title = str_replace("<001>", "", $MyArray1[0]);
                                $creator = str_replace("<004>", "", $MyArray1[3]);    
                                $prefix = str_replace("<0024>", "", $MyArray1[23]);          
                                $callnumber = str_replace("<0025>", "", $MyArray1[24]);      
                                $num_rows++;

							?>
                        
                        
                        <tr>
                                <td style="text-align:center"><?php echo $num_rows; ?></td>
                                <td><?php echo $title; ?></td>
                                <td><?php echo $creator; ?></td>
                                <td><?php echo $prefix; ?></td>
                                <td><?php echo $callnumber; ?></td>
                                <td><?php echo $row['t_timesout']; ?></td>


                        </tr>
				            <?php } } ?>
                        
					</tbody>
					</table>
				
                <!-- end content here -->
            </div>
        </div>
    </div>
</div><!--/row-->



<?php include('footer.php'); ?>
