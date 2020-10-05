<?PHP 
require("header.php");
require("style.php");
require_once("connect.php");


$id=$_GET['id'];




    $stmt = $sLink->query("select * from thesaurus where id='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);  
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
                                <th style="text-align:right; width:20%">Scope note : &nbsp;&nbsp;</th>
                                <td style="width:80%"><?PHP echo $TitleStr[2] ?></td>
                            </tr>  
                     <?PHP } ?> 

                     <?PHP
                    $var = "";		  
                    $element = "";
                    $term = "Broader term : &nbsp;&nbsp;";
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
                    $term = "Narrower term : &nbsp;&nbsp;";
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
                    $term = "Related term : &nbsp;&nbsp;";
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
                    $term = "Use : &nbsp;&nbsp;";
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
                    $term = "Use for : &nbsp;&nbsp;";
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
                    $term = "Discipline : &nbsp;&nbsp;";
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
                                <th style="text-align:right; width:20%">Reference : &nbsp;&nbsp;</th>
                                <td style="width:100%"><?PHP echo $TitleStr[10] ?></td>
                            </tr>  
                     <?PHP } ?>                     
                          
					   
                 
                        </table>

					</form>
							
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
