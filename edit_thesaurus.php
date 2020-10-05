<?php include('header.php'); 


$id=$_GET['id'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Thesaurus</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT THESAURUS ENTRY</h2>

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
						<a href="list_of_thesaurus.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php

    $stmt = $sLink->query("select * from thesaurus where id='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);  
	$myimage = $row['image'];                
	$MyString1 = $row['maintext'];
	$MyArray1 = explode("", $MyString1);

	$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
	$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
	$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
	$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
	$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
	$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
	$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);
	$TitleStr[8] = str_replace("<008>", "", $MyArray1[7]);
	$TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
	$TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);                
    $TitleStr[1] = str_replace(chr(34), "", $TitleStr[1]);                   
  ?>
  
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">	
                        
					  <div class="form-group">
						<label for="description" class="col-sm-3 control-label" >Descriptor:</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>" class="form-control" id="descriptor" placeholder="descriptor..." required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="sn" class="col-sm-3 control-label" >Scope Note:</label>
						<div class="col-sm-7">
						  <input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" class="form-control" id="sn" placeholder="Scope note..." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="bt" class="col-sm-3 control-label" >Broader Term:</label>
						<div class="col-sm-7">
						  <input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" class="form-control" id="bt" placeholder="Broader term..." />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="nt" class="col-sm-3 control-label" >Narrower Term:</label>
						<div class="col-sm-7">
						  <input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>" class="form-control" id="nt" placeholder="Narrower term..."  />
						</div>
					  </div>                       
					  
					  <div class="form-group">
						<label for="rt" class="col-sm-3 control-label" >Related Term:</label>
						<div class="col-sm-7">
						  <input type="text" name="str4" value="<?php echo $TitleStr[5]; ?>" class="form-control" id="rt" placeholder="Related term..." />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="used" class="col-sm-3 control-label" >Use:</label>
						<div class="col-sm-7">
						  <input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" class="form-control" id="used" placeholder="used..." />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="uf" class="col-sm-3 control-label" >Use for:</label>
						<div class="col-sm-7">
						  <input type="text" name="str6" value="<?php echo $TitleStr[7]; ?>" class="form-control" id="uf" placeholder="use for..."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="discipline" class="col-sm-3 control-label" >Descipline/Subject:</label>
						<div class="col-sm-7">
						  <input type="text" name="str7" value="<?php echo $TitleStr[8]; ?>" class="form-control" id="discipline" placeholder="discipline..."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="language" class="col-sm-3 control-label" >Language used:</label>
						<div class="col-sm-7">
						  <input type="text" name="str8" value="<?php echo $TitleStr[9]; ?>" class="form-control" id="language" placeholder="Language..."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="language" class="col-sm-3 control-label" >Reference:</label>
						<div class="col-sm-7">
						  <input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" class="form-control" id="ref" placeholder="Reference..."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="entered_by" class="col-sm-3 control-label" >Entered by:</label>
						<div class="col-sm-7">
						  <input type="text" name="entered_by" value="<?php echo $row['entered_by']; ?>" class="form-control" id="entered_by"  />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="updated_by" class="col-sm-3 control-label" >Updated by:</label>
						<div class="col-sm-7">
						  <input type="text" name="updated_by" value="<?php echo $row['updated_by']; ?>" class="form-control" id="updated_by"  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="date_entered" class="col-sm-3 control-label" >Date entered:</label>
						<div class="col-sm-7">
						  <input type="text" name="date_entered" value="<?php echo $row['date_entered']; ?>" class="form-control" id="date_entered"  />
						</div>
					  </div>					  
					  
					  <div class="form-group">
						<label for="date_updated" class="col-sm-3 control-label" >Date updated:</label>
						<div class="col-sm-7">
						  <input type="text" name="date_updated" value="<?php echo $row['date_updated']; ?>" class="form-control" id="date_updated"  />
						</div>
					  </div>	
    
					  <div class="form-group">
						<label for="image_location" class="col-sm-3 control-label" >Image:</label>
						<div class="col-sm-7">
						  <input type="text" name="image_location" value="<?php echo $row['image_location']; ?>" class="form-control" id="image_location"  />
						</div>
					  </div>
                       
     			      <div class="form-group">
                        <label for="image_location" class="col-sm-3 control-label" >Update image:</label>
						<div class="col-sm-9">
						  <input type="file" name="image">
						</div>
					  </div>                          
                        

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
					</form>
							
<?php


$id =$_GET['id'];
if (isset($_POST['update'])) {
    
                        move_uploaded_file($_FILES["image"]["tmp_name"],"uploads_image/" . $_FILES["image"]["name"]);			
                        $imglocation=$_FILES["image"]["name"];
                        if ($imglocation <> "")
                        {
                              $imglocation=$_FILES["image"]["name"];
                        }
                        else
                        {
                               $imglocation=$_POST['image_location'];
                           
                        }
						
						unset($txtstr);
						$txtstr = "<001>" . $_POST['str0'] . ""; //'title
						$txtstr = $txtstr . "<002>" . $_POST['str1'] . ""; 
						$txtstr = $txtstr . "<003>" . $_POST['str2'] . ""; 
						$txtstr = $txtstr . "<004>" . $_POST['str3'] . ""; 
						$txtstr = $txtstr . "<005>" . $_POST['str4'] . ""; //numeration
						$txtstr = $txtstr . "<006>" . $_POST['str5'] . ""; //'other_author
						$txtstr = $txtstr . "<007>" . $_POST['str6'] . ""; //'editors...
						$txtstr = $txtstr . "<008>" . $_POST['str7'] . ""; //'corporate author
 						$txtstr = $txtstr . "<009>" . $_POST['str8'] . ""; //'corporate author   
						$maintext = $txtstr . "<0010>" . $_POST['str9'] . ""; //'other details
                        $maintext = str_replace("'", "`", $maintext);
    
						$title = $_POST['str0'];
                        $title = str_replace("'", "`", $title); 
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        } 

						$tmpID = $_POST['id'];				
						
                        $updated_by = $_SESSION['charger'];     
						$date_updated = date("Y-m-d H:i:s");

						{
    
                        $sql = " UPDATE thesaurus SET title='$title', maintext='$maintext', updated_by='$updated_by', date_updated='$date_updated', image_location='$imglocation' WHERE id = '$id' ";
                        $sLink->exec($sql);
						
                        //mysql_query(" UPDATE books SET title='$title', maintext='$maintext', tm='$tm', updated_by='$updated_by', date_updated='$date_updated' WHERE bkid = '$id' ")or die(mysql_error());
    
						echo "<script>alert('Successfully updated thesaurus entry!'); window.location='list_of_thesaurus.php'</script>";
						}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
