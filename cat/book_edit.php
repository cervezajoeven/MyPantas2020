<!DOCTYPE html>
<html>

<!--
<%@ LANGUAGE="VBSCRIPT" %>
-->

<!-- #include file="../includes/redirect.asp" -->
<!--#include file="../includes/connObjTop.asp"-->

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagemaster V.7.0</title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <script src="./js/jquery-1.8.2.min.js"></script>

</head>

<body >

<?php

	include('../connect.php');                 
    $stmt = $sLink->query("select * from books where bkid='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);            
                
	//$query=mysql_query("select * from books where bkid='$id'")or die(mysql_error());
	//$row=mysql_fetch_array($query);

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

    $TitleStr[1] = str_replace(chr(34), "", $TitleStr[1]);              
                
                
	$tr = $row['tr'];
	if($tr == '1') 
	{
		$trchecked = "checked";
	}
	
	$fr = $row['fr'];
	if($fr == '1') 
	{
		$frchecked = "checked";
	}	
	
	$circ = $row['circ'];
	if($circ == '1') 
	{
		$circchecked = "checked";
	}	
	
	$ref = $row['ref'];
	if($ref == '1') 
	{
		$refchecked = "checked";
	}

	$fil = $row['fil'];
	if($fil == '1') 
	{
		$filchecked = "checked";
	}	
	
	$sm = $row['sm'];
	if($sm == '1') 
	{
		$smchecked = "checked";
	}

	$bio = $row['bio'];
	if($bio == '1') 
	{
		$biochecked = "checked";
	}	
	
	$res = $row['res'];
	if($res == '1') 
	{
		$reschecked = "checked";
	}
	
	$schl = $row['schl'];
	if($schl == '1') 
	{
		$schlchecked = "checked";
	}	
	
	$easy = $row['easy'];
	if($easy == '1') 
	{
		$easychecked = "checked";
	}	

	$fic = $row['fic'];
	if($fic == '1') 
	{
		$ficchecked = "checked";
	}		
	
	$gc = $row['gc'];
	if($gc == '1') 
	{
		$gcchecked = "checked";
	}
  ?>


    <div class="container">
		<h5>EDIT AND UPDATE BOOK CATALOGUE RECORD</h5>
    	<div class="starter">
    		<div class="row">
    			<div class="col-sm-6">
		    	    <h1></h1>
			        <div class="modal-body">
		    			<form role="form" id="db-form" name="db-form" method="post" action="book_insert.php">
		    				<div class="form-group-attached">



		    					<div class="row">
	    							<div class="form-group">
	    								<label>Title proper</label>
	    								<input type="text" name="str0" id="title" class="form-control" placeholder="title" value="<?php echo $TitleStr[1]; ?>" required>
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Statement of responsibility</label>
	    								<input type="text" name="str1" id="responsibility" class="form-control" placeholder="statement of responsibility" value="<?php echo $TitleStr[2]; ?>" >
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Parallel title</label>
	    								<input type="text" name="str2" id="parallel_title" class="form-control" placeholder="parallel title" value="<%=TitleStr(3)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Preferred title</label>
	    								<input type="text" name="str36" id="preferred_title" class="form-control" placeholder="preferred title" value="<%=TitleStr(37)%>" >
	    							</div>
		    					</div>	
								
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Main creator</label>
	    								<input type="text" name="str3" id="main_creator" class="form-control" placeholder="main creator" value="<%=TitleStr(4)%>" >
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Other creator</label>
	    								<input type="text" name="str5" id="other_creator" class="form-control" placeholder="other creator" value="<%=TitleStr(6)%>" >
	    							</div>
		    					</div>		
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Contributor</label>
	    								<input type="text" name="str6" id="contributor" class="form-control" placeholder="contributor" value="<%=TitleStr(7)%>" >
	    							</div>
		    					</div>	
			    				<div class="row">
	    							<div class="form-group">
	    								<label>Corporate body</label>
	    								<input type="text" name="str7" id="corporate_body" class="form-control" placeholder="corporate_body" value="<%=TitleStr(8)%>" >
	    							</div>
		    					</div>								
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Place of publication</label>
	    								<input type="text" name="str8" id="place_of_publication" class="form-control" placeholder="place of publication" value="<%=TitleStr(9)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Publisher</label>
	    								<input type="text" name="str9" id="publisher" class="form-control" placeholder="publisher" value="<%=TitleStr(10)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Date of publication</label>
	    								<input type="text" name="str10" id="place_of_publication" class="form-control" placeholder="other creator" value="<%=TitleStr(11)%>" >
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Edition statement</label>
	    								<input type="text" name="str11" id="edition" class="form-control" placeholder="edition" value="<%=TitleStr(12)%>" >
	    							</div>
		    					</div>			    				
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Extent of text</label>
	    								<input type="text" name="str12" id="extent_of_text" class="form-control" placeholder="extent of text" value="<%=TitleStr(13)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Illustrative content</label>
	    								<input type="text" name="str13" id="illustrative_content" class="form-control" placeholder="illustrative content" value="<%=TitleStr(14)%>" >
	    							</div>
		    					</div>	
						    	<div class="row">
	    							<div class="form-group">
	    								<label>Dimension</label>
	    								<input type="text" name="str14" id="dimension" class="form-control" placeholder="dimension" value="<%=TitleStr(15)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Accompanying material</label>
	    								<input type="text" name="str15" id="accompanying_material" class="form-control" placeholder="accompanying material" value="<%=TitleStr(16)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Series title</label>
	    								<input type="text" name="str16" id="series" class="form-control" placeholder="series title" value="<%=TitleStr(17)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Notes and supplementary content</label>
	    								<input type="text" name="str17" id="notes" class="form-control" placeholder="notes and supplementary content" value="<%=TitleStr(18)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>ISBN / Identifier for the manifestation</label>
	    								<input type="text" name="str18" id="isbn" class="form-control" placeholder="ISBN / Identifier for the manifestation" value="<%=TitleStr(19)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Content type</label>
	    								<input type="text" name="str38" id="content_type" class="form-control" placeholder="content type" value="<%=TitleStr(39)%>" >
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Media type</label>
	    								<input type="text" name="str39" id="media_type" class="form-control" placeholder="media type" value="<%=TitleStr(40)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Carrier type</label>
	    								<input type="text" name="str40" id="carrier_type" class="form-control" placeholder="carrier type" value="<%=TitleStr(41)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Uniform Resource Locator (URL)</label>
	    								<input type="text" name="str37" id="url" class="form-control" placeholder="url" value="<%=TitleStr(38)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Access point - topical</label>
	    								<input type="text" name="str19" id="topical" class="form-control" placeholder="topical" value="<%=TitleStr(20)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Access point - personal</label>
	    								<input type="text" name="str20" id="personal" class="form-control" placeholder="personal" value="<%=TitleStr(21)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Access point - corporate</label>
	    								<input type="text" name="str21" id="ap_corporate" class="form-control" placeholder="corporate" value="<%=TitleStr(22)%>" >
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Access point - geographical</label>
	    								<input type="text" name="str22" id="geographical" class="form-control" placeholder="geographical" value="<%=TitleStr(23)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Prefix</label>
									   <SELECT NAME="str23" name="prefix" id="prefix" class="form-control">
											<OPTION><%=TitleStr(24)%> </Option>
											<!-- #INCLUDE FILE="../includes/prefix.inc" -->
										</SELECT>										
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Call number</label>
	    								<input type="text" name="str24" id="call_number" class="form-control" placeholder="call number" value="<%=TitleStr(25)%>" >
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Accession number</label>
	    								<input type="text" name="str25" id="accession" class="form-control" placeholder="accession" value="<%=TitleStr(26)%>" >
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Language of text</label>
	    								<input type="text" name="str26" id="language" class="form-control" placeholder="language" value="<%=TitleStr(27)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Library/Location</label>
	    								<input type="text" name="str27" id="location" class="form-control" placeholder="library or location" value="<%=TitleStr(28)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Electronic access</label>
	    								<input type="text" name="str28" id="electronic_access" class="form-control" placeholder="electronic access" value="<%=TitleStr(29)%>" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Cover image</label>
	    								<input type="text" name="str41" id="cover" class="form-control" placeholder="cover" value="<%=TitleStr(42)%>" >
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Circulation type</label><br />
									   <input type="checkbox" name="gc"  value="gc" <%=gc%> >General circulation
									   <input type="checkbox" name="tref"  value="tref" <%=tref%>>Teacher reference
									   <input type="checkbox" name="fr"  value="fr" <%=fr%>>Filipiniana/Reference<br />
									   <input type="checkbox" name="circ"  value="circ" <%=circ%>>Circulation
									   <input type="checkbox" name="ref"  value="ref" <?php echo $refchecked; ?> >Reference
									   <input type="checkbox" name="fil"  value="fil" <?php echo $filchecked; ?> >Filipiniana 
									   <input type="checkbox" name="sp"  value="sp" <%=sp%>>Special collection<br />
									   <input type="checkbox" name="bio"  value="bio" <%=bio%>>Biography
									   <input type="checkbox" name="res"  value="res" <%=res%>>Reserve
									   <input type="checkbox" name="schl"  value="schl" <%=schl%>>Scholastic
									   <input type="checkbox" name="easy"  value="easy" <%=easy%>>Easy
									   <input type="checkbox" name="fic"  value="fic" <%=fic%>>Fiction											
	    							</div>
                                </div>	
                                
                                <div class="form-group">		
                                <label>Circulation type</label><br />			  
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="gc" value="gc" <?php echo $gcchecked; ?> >General circulation</div>
						  <div class="col-sm-4"><input type="checkbox" name="tr" value="tr" <?php echo $trchecked; ?> >Teacher reference</div>
						</div>	
						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="fr" value="fr" <?php echo $frchecked; ?> >Filipiniana/Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="circ" value="circ" <?php echo $circchecked; ?> >Circulation</div>
						</div>						

						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="ref" value="ref" <?php echo $refchecked; ?> >Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="fil" value="fil" <?php echo $filchecked; ?> >Filipiniana</div>
						</div>	

						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="sm" value="sm" <?php echo $smchecked; ?>>Special collection</div>
						  <div class="col-sm-4"><input type="checkbox" name="bio" value="bio" <?php echo $biochecked; ?> >Biography</div>
						</div>	
						
						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="res" value="res" <?php echo $reschecked; ?> >Reserve</div>
						  <div class="col-sm-4"><input type="checkbox" name="schl" value="schl" <?php echo $schlchecked; ?> >Scholastic</div>
						</div>		
						
						<label for="type_material" class="col-sm-3 control-label"></label>						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="easy" value="easy" <?php echo $easychecked; ?> >Easy</div>
						  <div class="col-sm-4"><input type="checkbox" name="fic" value="fic" <?php echo $ficchecked; ?> >Fiction</div>
						</div>							
					  </div>                               



		    					<div class="row">
	    							<div class="form-group">
	    								<label>Content notes</label>
	    								<textarea name="str32" class="form-control" rows="5" ><%=TitleStr(33)%></textarea>
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Abstract/Summary</label>
	    								<textarea name="str33" class="form-control" rows="5" ><%=TitleStr(34)%></textarea>
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Review</label>
	    								<textarea name="str34" class="form-control" rows="5" ><%=TitleStr(35)%></textarea>
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Volume/Copy</label>
	    								<input type="text" name="str29" id="vol_copy" class="form-control" placeholder="1" value="<%=TitleStr(30)%>" required>
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>On-shelf</label>
	    								<input type="text" name="str30" id="on_shelf" class="form-control" placeholder="1" value="<%=TitleStr(31)%>" required>
	    							</div>
		    					</div>								
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Out</label>
	    								<input type="text" name="str31" id="t_out" class="form-control" placeholder="0" value="<%=TitleStr(32)%>" required>
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Number of times borrowed</label>
	    								<input type="text" name="str35" id="t_timesout" class="form-control" placeholder="0" value="<%=TitleStr(36)%>" required>
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Entered by</label>
	    								<input type="text" name="strEnterby" id="strEnterby" class="form-control" placeholder="entered by" value="<%=rs("entered_by")%>">
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Updated by</label>
	    								<input type="text" name="strUpdateby" id="strUpdateby" class="form-control" placeholder="updated by" value="<%=rs("updated_by")%>">
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Date entered</label>
	    								<input type="text" name="strDateEnter" id="strDateEnter" class="form-control" placeholder="date entered" value="<%=rs("date_entered")%>">
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Date updated</label>
	    								<input type="text" name="strDateUpdate" id="strDateUpdate" class="form-control" placeholder="date updated" value="<%=rs("date_updated")%>">
	    							</div>
                                </div>	
                                							
							</div>
							
		    				<div class="row">
		    					<div class="form-group">
									<p align="right">
		    						<input type="hidden" name="id" id="id" value="<%=id%>">
		    						<button type="submit" class="btn btn-warning">Update</button>
		    						<a href="index.asp" class="btn btn-info" data-dismiss="modal">Cancel</a>
									</p>
		    					</div>
		    				</div>
		    			</form>	    
		    		</div>
		    	</div>
		    </div>
    	</div>	  
    </div><!-- /.container --> 
	

</body>
</html>