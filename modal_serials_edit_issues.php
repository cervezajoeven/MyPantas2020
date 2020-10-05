<!-- Return book Item Modal -->
<div class="modal fade" id="get_issue<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Serials Issue Item Details</h4>
      </div>
        
      
        <?php

        		$ID=$_GET['get_issue'];  
				
                if (isset($_POST['details'])){
					//$id=$_GET['return_book'];


                    
                      $query=mysql_query("select * from serials where id='$ID'")or die(mysql_error());
                      $row=mysql_fetch_array($query);

                      $idd = $row['idd']; 

                      $date_received = $row['date_received'];                         
                      $petsa = strtr($date_received, '/', '-');
                      $date_received = date('Y-m-d', strtotime($petsa));  
                                   

				}
        ?>

        
        <div class="modal-body">   
        
                            
            
   					<form method="post"  enctype="multipart/form-data" class="form-horizontal" style="margin-left:5px;">		         
				
-

 					  <div class="form-group">
						<label for="submit" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Update</button>
						</div>
					  </div>                       
        
            </form>


							<?php
							//$id =$_GET['id'];
							if (isset($_POST['update'])) {
									
													$issue=$_POST['issue'];
													$volume=$_POST['volume'];
													$date_year=$_POST['date_year'];   
													$itemcode=$_POST['itemcode'];
													$id=$_POST['id'];
                                
													$date2 = strtr($_POST['date_encoded'], '/', '-');
													$date_encoded = date('Y-m-d', strtotime($date2));     
									

							{

							mysql_query(" UPDATE serials SET itemcode='$itemcode', issue='$issue', volume='$volume', date_year='$date_year', date_received='$date_encoded' WHERE idd = '$id' ")or die(mysql_error());
							echo "<script>alert('Successfully updated serials item issue information!'); window.location='list_of_serials_view_issues.php'</script>";

							}

							}

							?>						
            
            
			<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
			</div> 
        </div>
        
     
        
    </div>
  </div>
</div>