<?php include('header.php'); 


$id=$_GET['bkid'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">SERIALS CATALOGUING</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT SERIALS CATALOG ENTRY</h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
				
					<div class="alert alert-info">
						<a href="list_of_serialscat.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php

    $stmt = $sLink->query("select * from books where bkid='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);   
                
	$MyString1 = $row['maintext'];
	$MyArray1 = explode("", $MyString1);

	$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
    $TitleStr[1] = str_replace(chr(34), "", $TitleStr[1]);                
                
	$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
	$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
	$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
	$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
	$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
	$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);
	$TitleStr[8] = str_replace("<008>", "", $MyArray1[7]);
	$TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
	$TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);
	$TitleStr[11] = str_replace("<0011>", "", $MyArray1[10]);
	$TitleStr[12] = str_replace("<0012>", "", $MyArray1[11]);
	$TitleStr[13] = str_replace("<0013>", "", $MyArray1[12]);        
 	$TitleStr[14] = str_replace("<0014>", "", $MyArray1[13]);
	$TitleStr[15] = str_replace("<0015>", "", $MyArray1[14]);
	$TitleStr[16] = str_replace("<0016>", "", $MyArray1[15]);
	$TitleStr[17] = str_replace("<0017>", "", $MyArray1[16]);                  

  ?>
 
                
            
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
 					  <div class="form-group">
						<label for="call_number" class="col-sm-3 control-label" >Call number:</label>
						<div class="col-sm-7">
						  <input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" class="form-control" id="call_number" placeholder="Call number....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Serials title:</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>" class="form-control" id="title" placeholder="Serials title....." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="place" class="col-sm-3 control-label" >Place of publication:</label>
						<div class="col-sm-7">
						  <input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" class="form-control" id="place" placeholder="Place of publication..." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="publisher" class="col-sm-3 control-label" >Publisher:</label>
						<div class="col-sm-7">
						  <input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" class="form-control" id="publisher" placeholder="Publisher..."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="description" class="col-sm-3 control-label" >Description:</label>
						<div class="col-sm-7">
						  <input type="text" name="str14" value="<?php echo $TitleStr[15]; ?>" class="form-control" id="description" placeholder="Description..."  />
						</div>
					  </div>                       
					  
					  <div class="form-group">
						<label for="frequency" class="col-sm-3 control-label" >Frequency:</label>
						<div class="col-sm-7">
						  <input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>" class="form-control" id="frequency" placeholder="Frequency..."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="latest" class="col-sm-3 control-label" >Latest received:</label>
						<div class="col-sm-7">
						  <input type="text" name="str4" value="<?php echo $TitleStr[5]; ?>" class="form-control" id="latest" placeholder="Latest received..."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="notes" class="col-sm-3 control-label" >Notes:</label>
						<div class="col-sm-7">
						  <input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" class="form-control" id="notes" placeholder="Notes..."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="holding" class="col-sm-3 control-label" >Holding:</label>
						<div class="col-sm-7">
						  <input type="text" name="str6" value="<?php echo $TitleStr[7]; ?>" class="form-control" id="holding" placeholder="Holding..."  />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="subject" class="col-sm-3 control-label" >Subject/Keyword:</label>
						<div class="col-sm-7">
						  <input type="text" name="str7" value="<?php echo $TitleStr[8]; ?>" class="form-control" id="subject" placeholder="Subject or keyword....."  />
						</div>
					  </div>
                        
  					  <div class="form-group">
						<label for="corporate" class="col-sm-3 control-label" >Corporate:</label>
						<div class="col-sm-7">
						  <input type="text" name="str15" value="<?php echo $TitleStr[16]; ?>" class="form-control" id="corporate" placeholder="Corporate..."  />
						</div>
					  </div> 
                        
					  <div class="form-group">
						<label for="discipline" class="col-sm-3 control-label" >Discipline:</label>
						<div class="col-sm-7">
						  <input type="text" name="str12" value="<?php echo $TitleStr[13]; ?>" class="form-control" id="discipline" placeholder="Discipline..."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="issn" class="col-sm-3 control-label" >ISSN:</label>
						<div class="col-sm-7">
						  <input type="text" name="str10" value="<?php echo $TitleStr[11]; ?>" class="form-control" id="issn" placeholder="ISSN..."  />
						</div>
					  </div>                        
                        
 					  <div class="form-group">
						<label for="location" class="col-sm-3 control-label" >Location:</label>
						<div class="col-sm-7">
						  <input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>" class="form-control" id="location" placeholder="Location..."  />
						</div>
					  </div>   
                        
    				 <div class="form-group">
						<label for="barcode" class="col-sm-3 control-label" >Accession/Barcode:</label>
						<div class="col-sm-7">
						  <input type="text" name="str13" value="<?php echo $TitleStr[14]; ?>" class="form-control" id="barcode" placeholder="Accession/barcode..."  />
						</div>
					  </div> 
                        
  					  <div class="form-group">
						<label for="electronic_access" class="col-sm-3 control-label" >Electronic access:</label>
						<div class="col-sm-7">
						  <input type="text" name="str16" value="<?php echo $TitleStr[17]; ?>" class="form-control" id="electronic_access" placeholder="Electronic access....."  />
						</div>
					  </div>                      
                        
                      <input type=hidden name="str8" >

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
                        
					</form>
							
<?php


$id =$_GET['bkid'];
if (isset($_POST['update'])) {
						
						unset($txtstr);
						$txtstr = "<001>" . $_POST['str0'] . ""; //'title
						$txtstr = $txtstr . "<002>" . $_POST['str1'] . ""; 
						$txtstr = $txtstr . "<003>" . $_POST['str2'] . ""; 
						$txtstr = $txtstr . "<004>" . $_POST['str3'] . ""; 
						$txtstr = $txtstr . "<005>" . $_POST['str4'] . ""; //numeration
						$txtstr = $txtstr . "<006>" . $_POST['str5'] . ""; //'other_author
						$txtstr = $txtstr . "<007>" . $_POST['str6'] . ""; //'editors...
						$txtstr = $txtstr . "<008>" . $_POST['str7'] . ""; //'corporate author
						$txtstr = $txtstr . "<009>" . $_POST['str8'] . ""; //'place of publication
						$txtstr = $txtstr . "<0010>" . $_POST['str9'] . ""; //'publisher
						$txtstr = $txtstr . "<0011>" . $_POST['str10'] . ""; //'year of publication
						$txtstr = $txtstr . "<0012>" . $_POST['str11'] . ""; //'edition
						$txtstr = $txtstr . "<0013>" . $_POST['str12'] . ""; //'pages/extent
						$txtstr = $txtstr . "<0014>" . $_POST['str13'] . ""; //'other details
						$txtstr = $txtstr . "<0015>" . $_POST['str14'] . ""; //'year of publication
						$txtstr = $txtstr . "<0016>" . $_POST['str15'] . ""; //'edition
						$maintext = $txtstr . "<0017>" . $_POST['str16'] . ""; //'other details
                        $maintext = str_replace("'", "`", $maintext);
						
						$title = $_POST['str0'];
                        $title = str_replace("'", "`", $title);
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        }  
						$tm = 'se';
						$tmpID = $_POST['bkID'];				
						
						//$entered_by = $_POST['entered_by'];
						$updated_by = $_POST['updated_by'];
						$date_updated = date("Y-m-d H:i:s");

						{
    
                        $sql = " UPDATE books SET title='$title', maintext='$maintext', tm='$tm', updated_by='$updated_by', date_updated='$date_updated' WHERE bkid = '$id' ";
                        $sLink->exec($sql);
    
    
						echo "<script>alert('Successfully updated serial catalog information!'); window.location='list_of_serialscat.php'</script>";
						}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
