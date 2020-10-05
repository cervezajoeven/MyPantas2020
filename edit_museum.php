<?php include('header.php'); 


$id=$_GET['bkid'];


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Museum description</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> EDIT MUSEUM ITEM DESCRIPTION</h2>

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
						<a href="list_of_museum.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
     $stmt = $sLink->query("select * from museum where museumid='$id'");
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
	$TitleStr[11] = str_replace("<0011>", "", $MyArray1[10]);
	$TitleStr[12] = str_replace("<0012>", "", $MyArray1[11]);
	$TitleStr[13] = str_replace("<0013>", "", $MyArray1[12]);                
	$TitleStr[14] = str_replace("<0014>", "", $MyArray1[13]);   
	$TitleStr[15] = str_replace("<0015>", "", $MyArray1[14]);   
 	$TitleStr[16] = str_replace("<0016>", "", $MyArray1[15]);                
	$TitleStr[17] = str_replace("<0017>", "", $MyArray1[16]);   
	$TitleStr[18] = str_replace("<0018>", "", $MyArray1[17]);                
 	$TitleStr[19] = str_replace("<0019>", "", $MyArray1[18]);
	$TitleStr[20] = str_replace("<0020>", "", $MyArray1[19]);
	$TitleStr[21] = str_replace("<0021>", "", $MyArray1[20]);
	$TitleStr[22] = str_replace("<0022>", "", $MyArray1[21]);
	$TitleStr[23] = str_replace("<0023>", "", $MyArray1[22]);                
	$TitleStr[24] = str_replace("<0024>", "", $MyArray1[23]);   
	$TitleStr[25] = str_replace("<0025>", "", $MyArray1[24]);                   
	$TitleStr[26] = str_replace("<0026>", "", $MyArray1[25]);
	$TitleStr[27] = str_replace("<0027>", "", $MyArray1[26]);
	$TitleStr[28] = str_replace("<0028>", "", $MyArray1[27]);
	$TitleStr[29] = str_replace("<0029>", "", $MyArray1[28]);
	$TitleStr[30] = str_replace("<0030>", "", $MyArray1[29]);
	$TitleStr[31] = str_replace("<0031>", "", $MyArray1[30]);
	$TitleStr[32] = str_replace("<0032>", "", $MyArray1[31]);
	$TitleStr[33] = str_replace("<0033>", "", $MyArray1[32]);                
	$TitleStr[34] = str_replace("<0034>", "", $MyArray1[33]);   
	$TitleStr[35] = str_replace("<0035>", "", $MyArray1[34]);   
 	$TitleStr[36] = str_replace("<0036>", "", $MyArray1[35]);                
	$TitleStr[37] = str_replace("<0037>", "", $MyArray1[36]);   
	$TitleStr[38] = str_replace("<0038>", "", $MyArray1[37]);                
 	$TitleStr[39] = str_replace("<0039>", "", $MyArray1[38]);
	$TitleStr[40] = str_replace("<0040>", "", $MyArray1[39]);
	$TitleStr[41] = str_replace("<0041>", "", $MyArray1[40]);
	$TitleStr[42] = str_replace("<0042>", "", $MyArray1[41]);
	$TitleStr[43] = str_replace("<0043>", "", $MyArray1[42]);                
	$TitleStr[44] = str_replace("<0044>", "", $MyArray1[43]);   
	$TitleStr[45] = str_replace("<0045>", "", $MyArray1[44]);                   
                
	$TitleStr[46] = str_replace("<0046>", "", $MyArray1[45]);
	$TitleStr[47] = str_replace("<0047>", "", $MyArray1[46]);
	$TitleStr[48] = str_replace("<0048>", "", $MyArray1[47]);
	$TitleStr[49] = str_replace("<0049>", "", $MyArray1[48]);
	$TitleStr[50] = str_replace("<0050>", "", $MyArray1[49]);
	$TitleStr[51] = str_replace("<0051>", "", $MyArray1[50]);
	$TitleStr[52] = str_replace("<0052>", "", $MyArray1[51]);
	$TitleStr[53] = str_replace("<0053>", "", $MyArray1[52]);                
	$TitleStr[54] = str_replace("<0054>", "", $MyArray1[53]);   
	$TitleStr[55] = str_replace("<0055>", "", $MyArray1[54]);   
 	$TitleStr[56] = str_replace("<0056>", "", $MyArray1[55]);                
	$TitleStr[57] = str_replace("<0057>", "", $MyArray1[56]);   
	$TitleStr[58] = str_replace("<0058>", "", $MyArray1[57]);                
 	$TitleStr[59] = str_replace("<0059>", "", $MyArray1[58]);
	$TitleStr[60] = str_replace("<0060>", "", $MyArray1[59]);
	$TitleStr[61] = str_replace("<0061>", "", $MyArray1[60]);
	$TitleStr[62] = str_replace("<0062>", "", $MyArray1[61]);
	$TitleStr[63] = str_replace("<0063>", "", $MyArray1[62]);                
	$TitleStr[64] = str_replace("<0064>", "", $MyArray1[63]);   
	$TitleStr[65] = str_replace("<0065>", "", $MyArray1[64]);                   
	$TitleStr[66] = str_replace("<0066>", "", $MyArray1[65]);
	$TitleStr[67] = str_replace("<0067>", "", $MyArray1[66]);
	$TitleStr[68] = str_replace("<0068>", "", $MyArray1[67]);
	$TitleStr[69] = str_replace("<0069>", "", $MyArray1[68]);
	$TitleStr[70] = str_replace("<0070>", "", $MyArray1[69]);
	$TitleStr[71] = str_replace("<0071>", "", $MyArray1[70]);
	$TitleStr[72] = str_replace("<0072>", "", $MyArray1[71]);
	$TitleStr[73] = str_replace("<0073>", "", $MyArray1[72]);                
	$TitleStr[74] = str_replace("<0074>", "", $MyArray1[73]);   
	$TitleStr[75] = str_replace("<0075>", "", $MyArray1[74]);   
 	$TitleStr[76] = str_replace("<0076>", "", $MyArray1[75]);                
                  
     $TitleStr[1] = str_replace(chr(34), "", $TitleStr[1]);                   
                
                
  ?>
  
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">	
                        
	                          <div align="center">
                            <center> 

                            <table border="0" cellpadding="1" cellspacing="1" width="80%" bgcolor = "">
                              <col width=25% align="right" bgcolor="">
                              <col width=75%>	


                                <tr>
                                <td colspan="2" align="center">

                                      <h3>Object title information</h3>
                                </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Title:<font color="#FF0000">*</font></th>
                                 <td><input type="text" name="str0" size="50" value="<?php echo $TitleStr[1]; ?>" font size = "4"></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Title type:</th>
                                 <td><input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                <th class="columnheader">Title translation:</th>
                                <td><input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>" size="50"></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">

                                      <h3>Object name information</h3>
                            </td>
                                </tr>

                            <tr>
                                <th class="columnheader">Object name:</th>
                                <td><input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                <th class="columnheader">Object name type:</th>
                                <td><input type="text" name="str4" value="<?php echo $TitleStr[5]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Object name authority:</th>
                                <td><input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">

                                      <h3>Object number information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Object number:</th>
                                 <td><input type="text" name="str6" value="<?php echo $TitleStr[7]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Object number type:</th>
                                 <td><input type="text" name="str7" value="<?php echo $TitleStr[8]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Object number date:</th>
                                 <td><input type="text" name="str8" value="<?php echo $TitleStr[9]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Object production information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Production place:</th>
                                 <td><input type="text" name="str9" value="<?php echo $TitleStr[10]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Production date:</th>
                                 <td><input type="text" name="str10" value="<?php echo $TitleStr[11]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Production group/person name:</th>
                                 <td><input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Production role:</th>
                                 <td><input type="text" name="str12" value="<?php echo $TitleStr[13]; ?>"size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Reproduction condition:</th>
                                 <td><input type="text" name="str13" value="<?php echo $TitleStr[14]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Object association information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Associated place:</th>
                                 <td><input type="text" name="str14" value="<?php echo $TitleStr[15]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Associated date:</th>
                                 <td><input type="text" name="str15" value="<?php echo $TitleStr[16]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Associated group/person name:</th>
                                 <td><input type="text" name="str16" value="<?php echo $TitleStr[17]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Associated type:</th>
                                 <td><input type="text" name="str17" value="<?php echo $TitleStr[18]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Original function:</th>
                                 <td><input type="text" name="str18" value="<?php echo $TitleStr[19]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Object collection information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Collection place:</th>
                                 <td><input type="text" name="str19" value="<?php echo $TitleStr[20]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Collection date:</th>
                                 <td><input type="text" name="str20" value="<?php echo $TitleStr[21]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Collector:</th>
                                 <td><input type="text" name="str21" value="<?php echo $TitleStr[22]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Collection method:</th>
                                 <td><input type="text" name="str22" value="<?php echo $TitleStr[23]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Object entry information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Current owner:</th>
                                 <td><input type="text" name="str23" value="<?php echo $TitleStr[24]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Depositor:</th>
                                 <td><input type="text" name="str24" value="<?php echo $TitleStr[25]; ?>" size="50"></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Entry date:</th>
                                 <td><input type="text" name="str25" value="<?php echo $TitleStr[26]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Entry number:</th>
                                 <td><input type="text" name="str26" value="<?php echo $TitleStr[27]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Entry reason:</th>
                                 <td><input type="text" name="str27" value="<?php echo $TitleStr[28]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Location information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Current location:</th>
                                 <td><input type="text" name="str28" value="<?php echo $TitleStr[29]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Current location date:</th>
                                 <td><input type="text" name="str29" value="<?php echo $TitleStr[30]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Current location type:</th>
                                 <td><input type="text" name="str30" value="<?php echo $TitleStr[31]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Normal location:</th>
                                 <td><input type="text" name="str31" value="<?php echo $TitleStr[32]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Electronic file location:</th>
                                 <td><input type="text" name="str32" value="<?php echo $TitleStr[33]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Acquisition information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Acquisition method:</th>
                                 <td><input type="text" name="str33" value="<?php echo $TitleStr[34]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Acquisition date:</th>
                                 <td><input type="text" name="str34" value="<?php echo $TitleStr[35]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Accompanying source:</th>
                                 <td><input type="text" name="str35" value="<?php echo $TitleStr[36]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Condition information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Condition:</th>
                                 <td><input type="text" name="str36" value="<?php echo $TitleStr[37]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Condition summary:</th>
                                 <td><input type="text" name="str37" value="<?php echo $TitleStr[38]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Condition date:</th>
                                 <td><input type="text" name="str38" value="<?php echo $TitleStr[39]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Institution information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Institution name:</th>
                                 <td><input type="text" name="str39" value="<?php echo $TitleStr[40]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Institution sub-body name:</th>
                                 <td><input type="text" name="str40" value="<?php echo $TitleStr[41]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Institution address:</th>
                                 <td><input type="text" name="str41" value="<?php echo $TitleStr[42]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Institution country:</th>
                                 <td><input type="text" name="str42" value="<?php echo $TitleStr[43]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Reference information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Reference:</th>
                                 <td><input type="text" name="str43" value="<?php echo $TitleStr[44]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Reference type:</th>
                                 <td><input type="text" name="str44" value="<?php echo $TitleStr[45]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Description information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Physical description:</th>
                                 <td><input type="text" name="str45" value="<?php echo $TitleStr[46]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Speciment status:</th>
                                 <td><input type="text" name="str46" value="<?php echo $TitleStr[47]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Image information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Image type:</th>
                                 <td><input type="text" name="str47" value="<?php echo $TitleStr[48]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Image reference number:</th>
                                 <td><input type="text" name="str48" value="<?php echo $TitleStr[49]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Measurement information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Dimension:</th>
                                 <td><input type="text" name="str49" value="<?php echo $TitleStr[50]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Measurement:</th>
                                 <td><input type="text" name="str50" value="<?php echo $TitleStr[51]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Measurement unit:</th>
                                 <td><input type="text" name="str51" value="<?php echo $TitleStr[52]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Measured part:</th>
                                 <td><input type="text" name="str52" value="<?php echo $TitleStr[53]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Mark and inscription information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Mark/inscription text:</th>
                                 <td><input type="text" name="str53" value="<?php echo $TitleStr[54]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Mark/inscription type:</th>
                                 <td><input type="text" name="str54" value="<?php echo $TitleStr[55]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Mark/inscription description:</th>
                                 <td><input type="text" name="str55" value="<?php echo $TitleStr[56]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Mark/inscription technique:</th>
                                 <td><input type="text" name="str56" value="<?php echo $TitleStr[57]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Mark/inscription position:</th>
                                 <td><input type="text" name="str57" value="<?php echo $TitleStr[58]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Mark/inscription language:</th>
                                 <td><input type="text" name="str58" value="<?php echo $TitleStr[59]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Mark/inscription translation:</th>
                                 <td><input type="text" name="str59" value="<?php echo $TitleStr[60]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Material and technique information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Material:</th>
                                 <td><input type="text" name="str60" value="<?php echo $TitleStr[61]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Technique:</th>
                                 <td><input type="text" name="str61" value="<?php echo $TitleStr[62]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Part of component description:</th>
                                 <td><input type="text" name="str62" value="<?php echo $TitleStr[63]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Reproduction rights information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Reproduction rights note:</th>
                                 <td><input type="text" name="str63" value="<?php echo $TitleStr[64]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Reproduction rights owner:</th>
                                 <td><input type="text" name="str64" value="<?php echo $TitleStr[65]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Deaccession and disposal information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Deaccession date:</th>
                                 <td><input type="text" name="str65" value="<?php echo $TitleStr[66]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Disposal date:</th>
                                 <td><input type="text" name="str66" value="<?php echo $TitleStr[67]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Disposal method:</th>
                                 <td><input type="text" name="str67" value="<?php echo $TitleStr[68]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Disposal recipient:</th>
                                 <td><input type="text" name="str68" value="<?php echo $TitleStr[69]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Part and component information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Number of parts or components:</th>
                                 <td><input type="text" name="str69" value="<?php echo $TitleStr[70]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Description of parts or components:</th>
                                 <td><input type="text" name="str70" value="<?php echo $TitleStr[71]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Subjects depicted information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Subjects depicted:</th>
                                 <td><input type="text" name="str71" value="<?php echo $TitleStr[72]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Subjects depicted description:</th>
                                 <td><input type="text" name="str72" value="<?php echo $TitleStr[73]; ?>" size="50" ></td>
                            </tr>

                                <tr>
                                <td colspan="2" align="center">
                                      <h3>Recorder information</h3>
                            </td>
                                </tr>

                            <tr>
                                 <th class="columnheader">Recorder:</th>
                                 <td><input type="text" name="str73" value="<?php echo $TitleStr[74]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Recording date:</th>
                                 <td><input type="text" name="str74" value="<?php echo $TitleStr[75]; ?>" size="50" ></td>
                            </tr>

                            <tr>
                                 <th class="columnheader">Authority:</th>
                                 <td><input type="text" name="str75" value="<?php echo $TitleStr[76]; ?>" size="50" ></td>
                            </tr>


                            </table>
                            </center>
                          </div>

                        <br />
                        
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
                            $txtstr = $txtstr . "<0014>" . $_POST['str13'] . ""; //'pages/extent                         
                            $txtstr = $txtstr . "<0015>" . $_POST['str14'] . ""; //'edition
                            $txtstr = $txtstr . "<0016>" . $_POST['str15'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0017>" . $_POST['str16'] . ""; //'pages/extent             
                            $txtstr = $txtstr . "<0018>" . $_POST['str17'] . ""; //'corporate author
                            $txtstr = $txtstr . "<0019>" . $_POST['str18'] . ""; //'place of publication
                            $txtstr = $txtstr . "<0020>" . $_POST['str19'] . ""; //'publisher
                            $txtstr = $txtstr . "<0021>" . $_POST['str20'] . ""; //'year of publication
                            $txtstr = $txtstr . "<0022>" . $_POST['str21'] . ""; //'edition
                            $txtstr = $txtstr . "<0023>" . $_POST['str22'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0024>" . $_POST['str23'] . ""; //'pages/extent                
                            $txtstr = $txtstr . "<0025>" . $_POST['str24'] . ""; //'edition
                            $txtstr = $txtstr . "<0026>" . $_POST['str25'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0027>" . $_POST['str26'] . ""; //'pages/extent             
                            $txtstr = $txtstr . "<0028>" . $_POST['str27'] . ""; //'corporate author
                            $txtstr = $txtstr . "<0029>" . $_POST['str28'] . ""; //'place of publication
                            $txtstr = $txtstr . "<0030>" . $_POST['str29'] . ""; //'publisher
                            $txtstr = $txtstr . "<0031>" . $_POST['str30'] . ""; //'year of publication
                            $txtstr = $txtstr . "<0032>" . $_POST['str31'] . ""; //'edition
                            $txtstr = $txtstr . "<0033>" . $_POST['str32'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0034>" . $_POST['str33'] . ""; //'pages/extent                           
                            $txtstr = $txtstr . "<0035>" . $_POST['str34'] . ""; //'pages/extent
                            
                            $txtstr = $txtstr . "<0036>" . $_POST['str35'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0037>" . $_POST['str36'] . ""; //'pages/extent             
                            $txtstr = $txtstr . "<0038>" . $_POST['str37'] . ""; //'corporate author
                            $txtstr = $txtstr . "<0039>" . $_POST['str38'] . ""; //'place of publication
                            $txtstr = $txtstr . "<0040>" . $_POST['str39'] . ""; //'publisher
                            $txtstr = $txtstr . "<0041>" . $_POST['str40'] . ""; //'year of publication
                            $txtstr = $txtstr . "<0042>" . $_POST['str41'] . ""; //'edition
                            $txtstr = $txtstr . "<0043>" . $_POST['str42'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0044>" . $_POST['str43'] . ""; //'pages/extent      
                            $txtstr = $txtstr . "<0045>" . $_POST['str44'] . ""; //'pages/extent   
                            
                            $txtstr = $txtstr . "<0046>" . $_POST['str45'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0047>" . $_POST['str46'] . ""; //'pages/extent             
                            $txtstr = $txtstr . "<0048>" . $_POST['str47'] . ""; //'corporate author
                            $txtstr = $txtstr . "<0049>" . $_POST['str48'] . ""; //'place of publication
                            $txtstr = $txtstr . "<0050>" . $_POST['str49'] . ""; //'publisher
                            $txtstr = $txtstr . "<0051>" . $_POST['str50'] . ""; //'year of publication
                            $txtstr = $txtstr . "<0052>" . $_POST['str51'] . ""; //'edition
                            $txtstr = $txtstr . "<0053>" . $_POST['str52'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0054>" . $_POST['str53'] . ""; //'pages/extent                             
                                                        
                            $txtstr = $txtstr . "<0055>" . $_POST['str54'] . ""; //'pages/extent   
                            $txtstr = $txtstr . "<0056>" . $_POST['str55'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0057>" . $_POST['str56'] . ""; //'pages/extent             
                            $txtstr = $txtstr . "<0058>" . $_POST['str57'] . ""; //'corporate author
                            $txtstr = $txtstr . "<0059>" . $_POST['str58'] . ""; //'place of publication
                            $txtstr = $txtstr . "<0060>" . $_POST['str59'] . ""; //'publisher
                            $txtstr = $txtstr . "<0061>" . $_POST['str60'] . ""; //'year of publication
                            $txtstr = $txtstr . "<0062>" . $_POST['str61'] . ""; //'edition
                            $txtstr = $txtstr . "<0063>" . $_POST['str62'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0064>" . $_POST['str63'] . ""; //'pages/extent        
                            
                            $txtstr = $txtstr . "<0065>" . $_POST['str64'] . ""; //'pages/extent   
                            $txtstr = $txtstr . "<0066>" . $_POST['str65'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0067>" . $_POST['str66'] . ""; //'pages/extent             
                            $txtstr = $txtstr . "<0068>" . $_POST['str67'] . ""; //'corporate author
                            $txtstr = $txtstr . "<0069>" . $_POST['str68'] . ""; //'place of publication
                            $txtstr = $txtstr . "<0070>" . $_POST['str69'] . ""; //'publisher
                            $txtstr = $txtstr . "<0071>" . $_POST['str70'] . ""; //'year of publication
                            $txtstr = $txtstr . "<0072>" . $_POST['str71'] . ""; //'edition
                            $txtstr = $txtstr . "<0073>" . $_POST['str72'] . ""; //'pages/extent
                            $txtstr = $txtstr . "<0074>" . $_POST['str73'] . ""; //'pages/extent                             
                            $txtstr = $txtstr . "<0075>" . $_POST['str74'] . ""; //'pages/extent                               
                            $maintext = $txtstr . "<0076>" . $_POST['str75'] . ""; 
                            $maintext = str_replace("'", "`", $maintext);
						
						$title = $_POST['str0'];
                        $title = str_replace("'", "`", $title);
                        $charlength = strlen($title);
                        if ($charlength > 250){
                            $title = mb_substr($title,0,250,'UTF-8');                                  
                        } 				
						
						//$entered_by = $_POST['entered_by'];
						//$updated_by = $_POST['updated_by'];
                        //$updated_by = $_SESSION['charger'];     
						//$date_updated = date("Y-m-d H:i:s");

						{

                         // $sql = " UPDATE museum SET title='$title', maintext='$maintext', updated_by='$updated_by', date_updated='$date_updated' WHERE museumid = '$id' ";
    
                        $sql = " UPDATE museum SET title='$title', maintext='$maintext' WHERE museumid = '$id' ";
    
                        $sLink->exec($sql);  
    
						echo "<script>alert('Successfully updated museum item description!'); window.location='list_of_museum.php'</script>";
						}

}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
