<?php include('header.php'); 
                       
    $idnum=$_POST['idnumber'];
    $accession=$_POST['accession'];
    
    if (isset($_POST['date_due'])) {
        $date_due=$_POST['date_due'];
        $date1 = strtr($_POST['date_due'], '/', '-');
        $date_due = date('Y-m-d', strtotime($date1));
    }
    else {
        $date_due = date("Y-m-d");
    }
	
	$patron_checked = "checked";
    if ($_POST['opt']) {
       if ($_POST['opt'] == 'borrow') {
           $borrow_checked = "checked";               
        }
       elseif ($_POST['opt'] == 'return') {
           $return_checked = "checked";               
        }        
       elseif ($_POST['opt'] == 'photocopy') {
           $photo_checked = "checked";               
        }
       elseif ($_POST['opt'] == 'overnight') {
           $overnight_checked = "checked";               
        }   
        elseif ($_POST['opt'] == 'room_use') {
           $room_checked = "checked";               
        }  
       elseif ($_POST['opt'] == 'missing') {
           $missing_checked = "checked";               
        } 
       elseif ($_POST['opt'] == 'reserve') {
           $reserve_checked = "checked";               
        }         
       elseif ($_POST['opt'] == 'onhold') {
           $hold_checked = "checked";               
        }     
       elseif ($_POST['opt'] == 'history') {
           $history_checked = "checked";               
        }         
       elseif ($_POST['opt'] == 'due_today') {
           $due_checked = "checked";               
        } 
       elseif ($_POST['opt'] == 'out_today') {
           $out_checked = "checked";             
        }    
       elseif ($_POST['opt'] == 'patron') {
           $patron_checked = "checked";             
        }  		
    }

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
                <h2><i class="glyphicon glyphicon-refresh"></i> CIRCULATION TRANSACTION</h2>
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
                    <div class="box col-md-12">		
						<label class="radio-inline"><input type="radio" name="opt" value="patron" <?php echo $patron_checked;?> Onclick="document.circ_transaction.idnumber.focus();">Patron</label>					
						<label class="radio-inline"><input type="radio" name="opt" value="history" <?php echo $history_checked;?> Onclick="document.circ_transaction.accession.focus();">History</label>
						<label class="radio-inline"><input type="radio" name="opt" value ="out_today" <?php echo $out_checked;?> Onclick="document.circ_transaction.accession.focus();">Out today</label>
						<label class="radio-inline"><input type="radio" name="opt" value = "due_today" <?php echo $due_checked;?> Onclick="document.circ_transaction.accession.focus();">Due today</label>
						<label class="radio-inline"><input type="radio" name="opt" value="missing" <?php echo $missing_checked;?> Onclick="document.circ_transaction.accession.focus();">Missing</label>                         
						<label class="radio-inline"><input type="radio" name="opt" value="onhold" <?php echo $hold_checked;?> Onclick="document.circ_transaction.accession.focus();">On-hold</label>   
						<label class="radio-inline"><input type="radio" name="opt" value = "reserve" <?php echo $reserve_checked;?> Onclick="document.circ_transaction.accession.focus();" >Reserve</label>                      
						<label class="radio-inline"><input type="radio" name="opt" value = "room_use" <?php echo $room_checked;?> Onclick="document.circ_transaction.accession.focus();">Room use</label>    
						<label class="radio-inline"><input type="radio" name="opt" value ="overnight" <?php echo $overnight_checked;?> Onclick="document.circ_transaction.accession.focus();">Overnight</label>
						<label class="radio-inline"><input type="radio" name="opt" value = "photocopy" <?php echo $photo_checked;?> Onclick="document.circ_transaction.accession.focus();">Photocopy</label>
						<label class="radio-inline"><input type="radio" name="opt" value = "return" <?php echo $return_checked;?> Onclick="document.circ_transaction.accession.focus();">Return</label>
						<label class="radio-inline"><input type="radio" name="opt" value = "borrow" <?php echo $borrow_checked;?>  Onclick="document.circ_transaction.accession.focus();">Borrow</label>
                    </div>

                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="idnumber" value="<?php echo $idnum; ?>" class="form-control" placeholder="ID number" autofocus />                        
                        <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>		
                        <input type="text" name="accession" id="accession" value="<?php echo $accession; ?>" class="form-control" placeholder="Accession"  />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>				
                        <input type="date" name="date_due" value="<?php echo $date_due; ?>" class="form-control" placeholder="date"  />
                        <div class="input-group-btn">
                            <button name="submit" class="btn btn-primary" type="submit" ><i class="glyphicon glyphicon-open"></i>Submit</button>
                        </div>
                    </div>	

						<?php 
                            if (isset($_POST['submit'])) {
                                $selected_radio = $_POST['opt'];
                                if ($selected_radio == '') {
                                   	echo "<script>alert('Kindly select radio button first.')</script>";
									return;
                                }
                                if ($selected_radio == 'history') {
                                   header('location:list_of_loan_history_books.php');
                                }
                                
                                elseif ($selected_radio == 'out_today') {
                                    
                                }
                                
                                elseif ($selected_radio == 'due_today') {
                                    
                                } 
								
                                elseif ($selected_radio == 'patron') {
                                    $idnum=$_POST['idnumber'];
                                    $query = $sLink->query("select * from client where idnum = '$idnum'");
                                    $client_row = $query->fetch();
                                    $name=$client_row['name'];
                                    $description=$client_row['description'];
                                    $group=$client_row['dgroup'];	
									$date_applied = $client_row['dateapplied'];	
									$date_expired = $client_row['dateexpired'];	
									$address = $client_row['address'];
									$email = $client_row['email'];
									$contact = $client_row['telephone'];															
									$loan = $client_row['bkloan'];								
									$overdue = $client_row['overdue'];
									$mfn = $client_row['id'];  
									$pix = $client_row['idnum'];
									$pix = $pix . ".jpg";
                                }								
                                
                                elseif ($selected_radio == 'onhold') {
                                    $query = $sLink->query("select * from borrower where id_number = '$idnum' and accession_number = '$accession'");
                                    $row = $query->fetch();
                                    $get_id=$row['id']; 
                                    $status='On hold'; 
                                    $charger = $_SESSION['charger'];
            						$date_reported = date("Y-m-d H:i:s");
                                    $sql = " UPDATE borrower SET status='$status', charger='$charger', date_returned='$date_reported' WHERE id = '$get_id' ";
                                    $sLink->exec($sql);  
                                }                                  
                                 
                                elseif ($selected_radio == 'missing') {
                                    $idnum=$_POST['idnumber'];
                                    $query = $sLink->query("select * from client where idnum = '$idnum'");
                                    $client_row = $query->fetch();
                                    $name=$client_row['name'];
                                    $description=$client_row['description'];
                                    $group=$client_row['dgroup'];
									$date_applied = $client_row['dateapplied'];	
									$date_expired = $client_row['dateexpired'];	
									$address = $client_row['address'];
									$email = $client_row['email'];
									$contact = $client_row['telephone'];														
									$loan = $client_row['bkloan'];								
									$overdue = $client_row['overdue'];
									$mfn = $client_row['id']; 									 
									$pix = $client_row['idnum'];
									$pix = $pix . ".jpg";									
									
                                    $query = $sLink->query("select * from borrower where id_number = '$idnum' and accession_number = '$accession'");
                                    $row = $query->fetch();
                                    
                                    $get_id=$row['id']; 
                                    $status= 'Missing'; //$row['status']; 
                                    $charger = $_SESSION['charger'];
            						$date_reported = date("Y-m-d H:i:s");
                                    $sql = " UPDATE borrower SET status='$status', charger='$charger', date_returned='$date_reported' WHERE id = '$get_id' ";
                                    $sLink->exec($sql); 
                                }                            
                                elseif ($selected_radio == 'return') {
									$idnum=$_POST['idnumber'];
                                    $query = $sLink->query("select * from client where idnum = '$idnum'");
                                    $client_row = $query->fetch();
                                    $name=$client_row['name']; 
                                    $description=$client_row['description'];
                                    $group=$client_row['dgroup'];
									$date_applied = $client_row['dateapplied'];	
									$date_expired = $client_row['dateexpired'];	
									$address = $client_row['address'];
									$email = $client_row['email'];
									$contact = $client_row['telephone'];																		
									$loan = $client_row['bkloan'];
									$bkloan = $client_row['bkloan'] - 1;										
									$overdue = $client_row['overdue'];
									$mfn = $client_row['id']; 										
									$pix = $client_row['idnum'];
									$pix = $pix . ".jpg";

									$query = $sLink->query("select * from group_type where member_type_name = '$group'");
                                    $group_row = $query->fetch();
  									$fine = $group_row['fine_each_day'];
									
                                    $accession=$_POST['accession'];
 									$query = $sLink->query("select * from books where maintext like '%$accession%'");
                                    $b_row = $query->fetch();                                   

                                    $MyString1 = $b_row['maintext'];
                                    $MyArray1 = explode("", $MyString1);
                                    //$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);			
	                                $TitleStr[24] = str_replace("<0024>", "", $MyArray1[23]);
	                                $TitleStr[25] = str_replace("<0025>", "", $MyArray1[24]);	 
                                    if ($TitleStr[24] <> "") {
                                        $call_number = $TitleStr[24] . " " . $TitleStr[25];
                                    }
                                    else { 
                                        $call_number = $TitleStr[25];
                                    }

                                    $query = $sLink->query("select * from borrower where id_number = '$idnum' and accession_number = '$accession'");
                                    $row = $query->fetch(); 
                                    $get_id=$row['id'];
                                    $library=$row['library'];                                    
                                    $title=$row['title'];    
                                    $type=$row['type'];                                      
                                    $date_borrowed = $row['date_borrowed'];
                                    $date_returned = date("Y-m-d H:i:s");
                                    $date_due = $row['due_date'];
									$date1 = strtr($date_due, '/', '-');
									$date_due = date('Y-m-d', strtotime($date1));   
									$datetime1 = new DateTime($date_due);
									$datetime2 = new DateTime($date_returned);
									$numdays = 0;
									if ($datetime2 > $datetime1){
										$difference = $datetime1->diff($datetime2);
										$dteDiff = $difference->d;

										if ($dteDiff > 0){
											if ($sunday == true){
												$no = 0;
												$start = $datetime1;
												$end   = $datetime2;
												$interval = DateInterval::createFromDateString('1 day');
												$period = new DatePeriod($start, $interval, $end);
												foreach ($period as $dt)
												{
													if ($dt->format('N') == 7)
													{
														$no++;
													}
												}
												$numdays = $numdays + $no;
											}
											
											if ($saturday == true){
												$no = 0;
												$start = $datetime1;
												$end   = $datetime2;
												$interval = DateInterval::createFromDateString('1 day');
												$period = new DatePeriod($start, $interval, $end);
												foreach ($period as $dt)
												{
													if ($dt->format('N') == 6)
													{
														$no++;
													}
												}
												$numdays = $numdays + $no;
											}
											
											if ($friday == true){
												$no = 0;
												$start = $datetime1;
												$end   = $datetime2;
												$interval = DateInterval::createFromDateString('1 day');
												$period = new DatePeriod($start, $interval, $end);
												foreach ($period as $dt)
												{
													if ($dt->format('N') == 5)
													{
														$no++;
													}
												}
												$numdays = $numdays + $no;
											}	

											if ($thursday == true){
												$no = 0;
												$start = $datetime1;
												$end   = $datetime2;
												$interval = DateInterval::createFromDateString('1 day');
												$period = new DatePeriod($start, $interval, $end);
												foreach ($period as $dt)
												{
													if ($dt->format('N') == 4)
													{
														$no++;
													}
												}
												$numdays = $numdays + $no;
											}
											
											if ($wednesday == true){
												$no = 0;
												$start = $datetime1;
												$end   = $datetime2;
												$interval = DateInterval::createFromDateString('1 day');
												$period = new DatePeriod($start, $interval, $end);
												foreach ($period as $dt)
												{
													if ($dt->format('N') == 3)
													{
														$no++;
													}
												}
												$numdays = $numdays + $no;
											}	

											if ($tuesday == true){
												$no = 0;
												$start = $datetime1;
												$end   = $datetime2;
												$interval = DateInterval::createFromDateString('1 day');
												$period = new DatePeriod($start, $interval, $end);
												foreach ($period as $dt)
												{
													if ($dt->format('N') == 2)
													{
														$no++;
													}
												}
												$numdays = $numdays + $no;
											}										
											
											if ($monday == true){
												$no = 0;
												$start = $datetime1;
												$end   = $datetime2;
												$interval = DateInterval::createFromDateString('1 day');
												$period = new DatePeriod($start, $interval, $end);
												foreach ($period as $dt)
												{
													if ($dt->format('N') == 1)
													{
														$no++;
													}
												}
												$numdays = $numdays + $no;
											}										

											if ($holiday == true){
                                               $query = $sLink->query("select * from holiday where holiday between '$date_due' And '$date_returned'");
												if($query) {
                                                    $result = $query->rowcount();
													if ($result > 0) {
														$numdays = $numdays - $result;
													}
												}
											}
										}
									
										$dteDiff = $dteDiff - $numdays;
										$amount = $dteDiff * $fine;
										if ($amount > 0){
											$overdue = $overdue + $amount;
										}
										$dteDiff = $dteDiff . ' day(s) equivalent to ' . $amount;
										
										if ($dteDiff > 0){
											echo "<center><h1>This material is overdue of ", $dteDiff  , " peso(s)!</h1></center>";									
										}
									}	
				                    $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $sql = "INSERT INTO returned (id_number, accession, title, name, degree_course, type, date_loan, due_date, date_returned, library, charger, call_number) VALUES ('$idnum','$accession','$title','$name','$description','$type','$date_borrowed','$date_due','$date_returned','$library','$charger','$call_number')";
                                    $sLink->exec($sql); 
    
                                    $sql = "UPDATE client SET bkloan='$bkloan', overdue='$overdue' WHERE idnum = '$idnum' ";
                                    $sLink->exec($sql);  
   
									$sql = "delete from borrower where id = '$get_id' ";
                                    $sLink->exec($sql);
 
                                }                               
                                  
                                else {
                                    
                                    if ($selected_radio == 'borrow') {
                                        $idnum=$_POST['idnumber'];  
                                        $query = $sLink->query("select * from client where idnum = '$idnum'");
                                        $client_row = $query->fetch();
										$name = $client_row['name'];						
										$group = $client_row['dgroup'];
										$description = $client_row['description'];
										$date_applied = $client_row['dateapplied'];	
										$date_expired = $client_row['dateexpired'];	
										$address = $client_row['address'];
										$email = $client_row['email'];
										$contact = $client_row['telephone'];
										$overdue = $client_row['overdue'];																				
										$loan = $client_row['bkloan'];
										$bkloan = $client_row['bkloan'] + 1;
										$mfn = $client_row['id']; 											
										$pix = $client_row['idnum'];
										$pix = $pix . ".jpg";										
										if($query) {
                                            $result = $query->rowcount();
											if ($result == 0) {
												echo "<center><h1>ID number not found, kindly verify!</h1></center>";
												return;
											}
										}
										$query = $sLink->query("select * from group_type where member_type_name = '$group'");
                                        $group_row = $query->fetch();
										$loan_limit = $group_row['loan_limit'];
										if ($loan == $loan_limit){
											echo "<center><h1>Loan limit is already maximized, kindly verify!</h1></center>";
											return;											
										}
																				
										$accession=$_POST['accession'];
                                        $query = $sLink->query("select * from borrower where accession_number = '$accession'");
										if($query) {								
                                            $result = $query->rowcount();
											if ($result > 0) {
												echo "<center><h1>This material was already recorded as borrowed by anothr patron, kindly verify!</h1></center>";
												return;
											}
										}			

										$date_due=$_POST['date_due'];
										$date1 = strtr($_POST['date_due'], '/', '-');
										$date_due = date('Y-m-d', strtotime($date1));                               
										$date_borrowed = date("Y-m-d H:i:s");	
										if($date_borrowed > $date_due){
											echo "<center><h1>Date borrowed is greater than date due, kindly verify!</h1></center>";
											return; 
										}										

										$charger = $_SESSION['charger'];   
										$status='Out';
										$query = $sLink->query("select * from books where maintext like '%$accession%'");
                                        $row = $query->fetch();
										if($query) {								
                                            $result = $query->rowcount();
											if ($result == 0) {
												echo "<center><h1>Accession or barcode not found, kindly verify!</h1></center>";
												return;
											}
										}			
										
										$type = $row['tm'];
										$MyString1 = $row['maintext'];
										$MyArray1 = explode("", $MyString1);
										$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);			
										$TitleStr[28] = str_replace("<0028>", "", $MyArray1[27]);	
										$title=$TitleStr[1];
										$library=$TitleStr[28];                                

                                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $sql = "INSERT INTO borrower (id_number, accession_number, title, library, date_borrowed, due_date, charger, type, status) VALUES ('$idnum','$accession','$title','$library','$date_borrowed','$date_due','$charger','$type','$status')";
                                        $sLink->exec($sql);
	
                                        $sql = " UPDATE client SET bkloan='$bkloan' WHERE idnum = '$idnum' ";
                                        $sLink->exec($sql);   

										echo "<script>alert('Home use borrowing is successful!')</script>";

                                    }
                                    
                                    else {
                                  
                                        $idnum=$_POST['idnumber'];
                                        $accession=$_POST['accession'];
                                        $query = $sLink->query("select * from client where idnum = '$idnum'");
                                        $client_row = $query->fetch();
										$name = $client_row['name'];						
										$group = $client_row['dgroup'];
										$description = $client_row['description'];										
										$loan = $client_row['bkloan'];
										$date_applied = $client_row['dateapplied'];	
										$date_expired = $client_row['dateexpired'];	
										$address = $client_row['address'];
										$email = $client_row['email'];
										$contact = $client_row['telephone'];
										$overdue = $client_row['overdue'];				
										$bkloan = $client_row['bkloan'] + 1;
										$mfn = $client_row['id']; 	
										$pix = $client_row['idnum'];
										$pix = $pix . ".jpg";										
										if($query) {

                                            $result = $query->rowcount();
											if ($result == 0) {
												echo "<center><h1>ID number not found, kindly verify!</h1></center>";
												return;
											}
										}										
										
                                        if ($selected_radio == 'photocopy'){
                                            $query = $sLink->query("select * from borrower where accession_number = '$accession'");
											if($query) {								
                                                $result = $query->rowcount();
												if ($result > 0) {
													echo "<center><h1>This material was already recorded as borrowed for photocopying by another patron, kindly verify!</h1></center>";
													return;
												}
											}
											
                                            $date_borrowed = date("Y-m-d H:i:s");                                      
                                            $start = date("Y-m-d H:i:s");
                                            $date_due = date('Y-m-d H:i',strtotime('+ ' . $photocopy . ' hour +0 minutes',strtotime($start)));
                             
                                        }
                                        else {
                                            $query = $sLink->query("select * from borrower where accession_number = '$accession'");
											if($query) {								
                                                $result = $query->rowcount();
												if ($result > 0) {
													echo "<center><h1>This material was already recorded as borrowed by another patron, kindly verify!</h1></center>";
													return;
												}
											}	
											
                                            $date_due=$_POST['date_due'];
                                            $date1 = strtr($_POST['date_due'], '/', '-');
                                            $date_due = date('Y-m-d', strtotime($date1));                               
                                            $date_borrowed = date("Y-m-d H:i:s");          
                                        }

                                        $charger = $_SESSION['charger'];   
                                        $status=$selected_radio;
										$query = $sLink->query("select * from books where maintext like '%$accession%'");
                                        $row = $query->fetch();

                                        $type = $row['tm'];
                                        $MyString1 = $row['maintext'];
                                        $MyArray1 = explode("", $MyString1);

                                        $TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);			
                                        $TitleStr[28] = str_replace("<0028>", "", $MyArray1[27]);		                                
                                        $title=$TitleStr[1];
                                        $library=$TitleStr[28];                                

                                        {
                                        $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $sql = "INSERT INTO borrower (id_number, accession_number, title, library, date_borrowed, due_date, charger, type, status) VALUES ('$idnum','$accession','$title','$library','$date_borrowed','$date_due','$charger','$type','$status')";
                                        $sLink->exec($sql);  
                                                
                                         }
                                        echo "<script>alert('For ' + $status + ' borrowing is successful!')</script>";
                                              
                                    }                                   
                                    
                                }
  
                        }
						?>		

				
				</div>
                
				</form>	
					

						<div class="box col-md-12">
							<div><img src="<?php echo $pixpath; ?><?php echo $pix; ?>" alt="Photo" align="left" style="width:200px;height:180px;"></div>
							<table style="font-face:calibri; font-size:25px; ">
								<tr>
									<th style="text-align:right; color:#00ff00; height:10px;"><span class="label-default label label-default">Name:</span></th><td style="color:#0000ff;"><span class="label-info label label-info"><?php echo $name; ?></span>
									<a class="btn btn-primary btn-sm" type="submit" name="details" href="#patron_detail<?php echo $idnum;?>" data-toggle="modal" data-target="#patron_detail<?php echo $idnum;?>">
									<i class="glyphicon glyphicon-zoom-in icon-white"></i> Details
									</a></td>
								</tr>
								<tr>
									<th style="text-align:right; color:#00ff00;"><span class="label-default label label-default">Group:</span></th><td style="color:#0000ff;"><span class="label-info label label-info"><?php echo $group; ?></span></td>
								</tr>
								<tr>
									<th style="text-align:right; color:#00ff00;"><span class="label-default label label-default">Description:</span></th><td style="color:#0000ff;"><span class="label-info label label-info"><?php echo $description; ?></span></td>
								</tr>
							</table>
						</div>

										
                    <?php include('modal_client_detail.php'); ?>	
        
			</tbody>				
				
        </div>    
    </div> 

    <div class="box-content">
         <!-- Start content here -->

		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
            
			<thead>
				<tr>
					<th width="25">ID number</th>
					<th width="25">Accession</th>
					<th width="30">Title</th>
					<th width="30">Date borrowed</th>
					<th width="30">Date due</th>	
 					<th width="35">Library</th>	                           
                    <th width="20">Actions</th>
				</tr>
            </thead>
					
			<tbody>
					<?php
                    if ($selected_radio == 'out_today') {      
						$result = $sLink->query("select * from borrower where DATE_FORMAT(date_borrowed, '%Y-%m-%d')=CURDATE()");
                       } 
                    elseif ($selected_radio == 'due_today') {
                       $result = $sLink->query("select * from borrower where DATE_FORMAT(due_date, '%Y-%m-%d')=CURDATE()");          
                       }               
                    else {
                       $result = $sLink->query("select * from borrower order by id_number DESC ");                         
                    }
                    while ($row = $result->fetch() ){                        
					$id=$row['id'];
				
                    ?>
					<tr>
						<td><?php echo $row['id_number']; ?></td>
						<td><?php echo $row['accession_number']; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['date_borrowed']; ?></td>
						<td><?php echo $row['due_date']; ?></td>
 			            <td><?php echo $row['library']; ?></td>                           
				        <td class="center">
                            <a class="btn btn-success" type="submit" name="details" href="#return_book<?php echo $id;?>" data-toggle="modal" data-target="#return_book<?php echo $id;?>">
                            <i class="glyphicon glyphicon-eye-open icon-white"> </i> View
                            </a>
                            <?php include('modal_return_book.php'); ?>
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

            <div style="text-align:center;">
                        <a href="print_borrowed_resource.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>  	
			</div>
						
<?php include('footer.php'); ?>
