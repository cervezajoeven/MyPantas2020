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
                <h2><i class="glyphicon glyphicon-th-list"></i> THESAURUS ENTRY DISPLAY</h2>

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
	$myimage = "./uploads_image/" . $row['image_location'];                
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
                            
    $MyString =$TitleStr[5];
    $txtarray = explode(";", $MyString);
    $rtarray = $txtarray[0] . "<br>";
    $rtarray = $rtarray . $txtarray[1] . "<br>";                              
                
  ?>
                

				<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
                        
                    <h3><?php echo $TitleStr[1]; ?></h3>  
                        
					  <table>
         
                      <?PHP
                        if ($TitleStr[2] <> "" ) {?>
                            <tr>
                                
                                
                                <th style="text-align:right; width:20%">Scope note:</th>
                                
                                <td style="width:80%"><?PHP echo $TitleStr[2] ?></td>
                                
                   				<td border="0" rowspan="100%" valign="top" >
                                    <div class="w3-container">    
                                    <div style="width:200px;float:right; text-align:center; color:orange; background:; font-family:arial">
                                        <?php if ($myimage <> "") { ?>
                                            <img src="<?php echo $myimage ?>" class="w3-round" alt="" width="200" height="300" border="0">
                                        <?php } else { ?>
                                            <i class="fa fa-book" style="font-size:200px" ></i>
                                        <?php } ?>
                                    </div>
                                    </div>
                                    
                                    
                                    
                                </td>	             
                                
                            </tr>  
                     <?PHP } ?> 
                          
                     <?PHP
                    $var = "";		  
                    $element = "";
                    $term = "Broader term:";
                    $var= $TitleStr[3];
                    $pieces = explode(";", $var);
                    foreach($pieces as $element)				
                        if ($element <> "" ) {?>
                            <tr>
                                <th style="text-align:right; width:20%"><?PHP echo $term ?></th>
                                <td style="width:80%"><?PHP echo $element ?></td>
                            </tr>  
                     <?PHP $term = ""; } ?>                               
                          
                    <?PHP
                    $var = "";		  
                    $element = "";
                    $term = "Narrower term:";
                    $var= $TitleStr[4];
                    $pieces = explode(";", $var);
                    foreach($pieces as $element)				
                        if ($element <> "" ) {?>
                            <tr>
                                <th style="text-align:right; width:20%"><?PHP echo $term ?></th>
                                <td style="width:80%"><?PHP echo $element ?></td>
                            </tr>  
                     <?PHP $term = ""; } ?>                     
                          
                     <?PHP
                    $var = "";		  
                    $element = "";
                    $term = "Related term:";
                    $var= $TitleStr[5];
                    $pieces = explode(";", $var);
                    foreach($pieces as $element)				
                        if ($element <> "" ) {?>
                            <tr>
                                <th style="text-align:right; width:20%"><?PHP echo $term ?></th>
                                <td style="width:80%"><?PHP echo $element ?></td>
                            </tr>  
                     <?PHP $term = ""; } ?>                     
                          
                     <?PHP
                    $var = "";		  
                    $element = "";
                    $term = "Use:";
                    $var= $TitleStr[6];
                    $pieces = explode(";", $var);
                    foreach($pieces as $element)				
                        if ($element <> "" ) {?>
                            <tr>
                                <th style="text-align:right; width:20%"><?PHP echo $term ?></th>
                                <td style="width:80%"><?PHP echo $element ?></td>
                            </tr>  
                     <?PHP $term = ""; } ?>                            
                          
     
                          
                     <?PHP
                    $var = "";		  
                    $element = "";
                    $term = "Use for:";
                    $var= $TitleStr[7];
                    $pieces = explode(";", $var);
                    foreach($pieces as $element)				
                        if ($element <> "" ) {?>
                            <tr>
                                <th style="text-align:right; width:20%"><?PHP echo $term ?></th>
                                <td style="width:80%"><?PHP echo $element ?></td>
                            </tr>  
                     <?PHP $term = ""; } ?>  	  
                          
                     <?PHP
                    $var = "";		  
                    $element = "";
                    $term = "Discipline:";
                    $var= $TitleStr[8];
                    $pieces = explode(";", $var);
                    foreach($pieces as $element)				
                        if ($element <> "" ) {?>
                            <tr>
                                <th style="text-align:right; width:20%"><?PHP echo $term ?></th>
                                <td style="width:80%"><?PHP echo $element ?></td>
                            </tr>  
                     <?PHP $term = ""; } ?>         
                          
                           <?PHP
                        if ($TitleStr[10] <> "" ) {?>
                            <tr>
                                <th style="text-align:right; width:20%">Reference:</th>
                                <td style="width:100%"><?PHP echo $TitleStr[10] ?></td>
                            </tr>  
                     <?PHP } ?>                     
                          
					   
                       <?PHP
                        if ($TitleStr[2] <> "" ) {?>
                            <tr>
                                <th style="text-align:right; width:20%">Image:</th>
                                <td style="width:80%"><?PHP echo $myimage ?></td>
                            </tr>  
                     <?PHP } ?> 
                          
                          
                        </table>

				</form>
							
<?php


$id =$_GET['id'];
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
 						$txtstr = $txtstr . "<009>" . $_POST['str8'] . ""; //'corporate author   
						$maintext = $txtstr . "<0010>" . $_POST['str9'] . ""; //'other details

						$title = $_POST['str0'];
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        } 

						$tmpID = $_POST['id'];				
						
                        $updated_by = $_SESSION['charger'];     
						$date_updated = date("Y-m-d H:i:s");

						{
    
                        $sql = " UPDATE thesaurus SET title='$title', maintext='$maintext', updated_by='$updated_by', date_updated='$date_updated' WHERE id = '$id' ";
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
