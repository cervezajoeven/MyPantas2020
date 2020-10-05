<?php include('header.php'); 


$id=$_GET['bkid'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Index to Periodical Literature</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT PERIODICAL ARTICLE INFORMATION</h2>

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
						<a href="list_of_articles.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
	//$query=mysql_query("select * from books where bkid='$id'")or die(mysql_error());
	//$row=mysql_fetch_array($query);
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

  ?>
  
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" >Article title</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>" class="form-control" id="title"  required />
						</div>
					  </div>
					  
				      <div class="form-group">
						<label for="creator" class="col-sm-3 control-label" >Creator(s):</label>
						<div class="col-sm-7">
						  <input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" class="form-control" id="creator" placeholder="Creator or author....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="periodical" class="col-sm-3 control-label" >Periodical title:</label>
						<div class="col-sm-7">
						  <input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" class="form-control" id="periodical" placeholder="Periodical....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="volume" class="col-sm-3 control-label" >Volume:</label>
						<div class="col-sm-7">
						  <input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>" class="form-control" id="volume" placeholder="Volume....."  />
						</div>
					  </div>
                        
 					  <div class="form-group">
						<label for="number" class="col-sm-3 control-label" >Issue/number:</label>
						<div class="col-sm-7">
						  <input type="text" name="str4" value="<?php echo $TitleStr[5]; ?>" class="form-control" id="number" placeholder="Issue or number....."  />
						</div>
					  </div>                       
                        
					  <div class="form-group">
						<label for="date" class="col-sm-3 control-label" >Date:</label>
						<div class="col-sm-7">
						  <input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" class="form-control" id="date" placeholder="Date....."  />
						</div>
					  </div>
                        
					  <div class="form-group">
						<label for="pages" class="col-sm-3 control-label" >Pages:</label>
						<div class="col-sm-7">
						  <input type="text" name="str6" value="<?php echo $TitleStr[7]; ?>" class="form-control" id="pages" placeholder="Pages...."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="mtype" class="col-sm-3 control-label" >Type of article:</label>
						<div class="col-sm-7">
						  <select name="str7" id="str7" class="form-control" >
							<option><?php echo $TitleStr[8]; ?></option>						  
							<option >Article</option>
							<option >Book review</option>
							<option >Case study</option>
							<option >Commentary</option>
							<option >Correspondence</option>
							<option >Discussion article</option>
							<option >Editorial</option>
							<option >Essay</option>
							<option >Featured article</option>
							<option >Interview</option>
							<option >Lesson plan</option>
							<option >Newspaper article</option>
							<option >Opinion</option>
							<option >Poem</option>
							<option >Research article</option>
							<option >Research communication</option>
							<option >Review article</option>
							<option >Short story</option>        
						  </select>
						</div>
					  </div>	

					  <div class="form-group">
						<label for="language" class="col-sm-3 control-label" >Language:</label>
						<div class="col-sm-7">
						  <input type="text" name="str8" value="<?php echo $TitleStr[9]; ?>" class="form-control" id="language" placeholder="Language....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="location" class="col-sm-3 control-label" >Location:</label>
						<div class="col-sm-7">
						  <input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" class="form-control" id="location" placeholder="Location....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="electronic_access" class="col-sm-3 control-label" >Electronic access:</label>
						<div class="col-sm-7">
						  <input type="text" name="str10" value="<?php echo $TitleStr[11]; ?>" class="form-control" id="electronic_access" placeholder="Electronic access....."  />
						</div>
					  </div>		

					  <div class="form-group">
						<label for="subject" class="col-sm-3 control-label" >Subject/Keyword:</label>
						<div class="col-sm-7">
						  <input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>" class="form-control" id="subject" placeholder="Subject or keyword....."  />
						</div>
					  </div>

					  <div class="form-group">
						<label for="abstract" class="col-sm-3 control-label" >Abstract/Summary:</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="5" id="abstract" name="str12"><?php echo $TitleStr[13]; ?></textarea>
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
						$maintext = $txtstr . "<0014>" . $_POST['str13'] . ""; //'other details
                        $maintext = str_replace("'", "`", $maintext);
						
						$title = $_POST['str0'];
                        $title = str_replace("'", "`", $title);  
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        }  
						$tm = 'pr';
						$tmpID = $_POST['bkID'];				
						
						//$entered_by = $_POST['entered_by'];
						$updated_by = $_POST['updated_by'];
						$date_updated = date("Y-m-d H:i:s");

						{
    
                        $sql = " UPDATE books SET title='$title', maintext='$maintext', tm='$tm', updated_by='$updated_by', date_updated='$date_updated' WHERE bkid = '$id' ";
                        $sLink->exec($sql);
    
						//mysql_query(" UPDATE books SET title='$title', maintext='$maintext', tm='$tm', updated_by='$updated_by', date_updated='$date_updated' WHERE bkid = '$id' ")or die(mysql_error());
    
						echo "<script>alert('Successfully updated periodical article information!'); window.location='list_of_articles.php'</script>";
						}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
