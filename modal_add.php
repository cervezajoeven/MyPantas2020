	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Add new record</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
    <div class="modal-header">
    <h3 id="myModalLabel">Add</h3>
    </div>

<div class="modal-body">
<form method="post" action="book_add.php"  enctype="multipart/form-data">
					
    <table  align="center" border="1" cellpadding="1" cellspacing="1" bgcolor = "#A7C942" width="100%">
    <tr>
	<th colspan="2" style="background-color: #336699; text-align:center; border-style: outset; border-width: 1"><font style="font-size: 14pt; color: #FFFFFF; font-weight: bold; face: calibri" >Book cataloguing module</font></th>
    </tr>

	<tr>        
		<th><label style="color:#3a87ad; font-size:12px;">Title:<font color="#FF0000">*</font></label></th>
		<td><input type="Text" name="str0" size="110%"  value="<?php echo $TitleStr[1] ; ?>"></td>

	</tr>

	<tr>
	<th><label style="color:#3a87ad; font-size:12px;">Statement of responsibility:</label></th>
	<td><input type="Text" name="str1" size="110%"  value="<?php echo $TitleStr[2] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Parallel title:</label></th>
	    <td><input type="Text" name="str2" size="110%" value="<?php echo $TitleStr[3] ; ?>"></td>
	</tr>
	
	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Preferred title:</label></th>
	    <td><input type="Text" name="str36" size="110%" value="<?php echo $TitleStr[37] ; ?>"></td>
	</tr>	

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Main creator:</label></th>
	    <td><input type="Text" name="str3" size="110%" value="<?php echo $TitleStr[4] ; ?>"></td>
	</tr>
	
	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Other creator:</label></th>
	    <td><input type="Text" name="str5" size="110%" value="<?php echo $TitleStr[6] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Contributors:</label></th>
	<td><input type="Text" name="str6" size="110%" value="<?php echo $TitleStr[7] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Corporate body:</label></th>
	<td><input type="Text" name="str7" size="110%" value="<?php echo $TitleStr[8] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Place of publication:</label></th>
	<td><input type="Text" name="str8" size="110%" value="<?php echo $TitleStr[9] ; ?>"></td>
	</tr>

	<tr>        
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Publisher:</label></th>
		<td><input type="Text" name="str9" size="110%" value="<?php echo $TitleStr[10] ; ?>"></td>
	</tr>

	<tr>
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Date of publication:</label></th>
		<td><input type="Text" name="str10" size="110%" value="<?php echo $TitleStr[11] ; ?>"></td>
	</tr>
	
	<tr>        
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Edition statement:</label></th>
		<td><input type="Text" name="str11" size="110%" value="<?php echo $TitleStr[12] ; ?>"></td>
	</tr>	

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Extent of text:</label></th>
	<td><input type="Text" name="str12" size="110%" value="<?php echo $TitleStr[13] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Illustrative content:</label></th>
	<td><input type="Text" name="str13" size="110%" value="<?php echo $TitleStr[14] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Dimension:</label></th>
	<td><input type="Text" name="str14" size="110%" value="<?php echo $TitleStr[15] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Accompanying materials:</label></th>
	<td><input type="Text" name="str15" size="110%" value="<?php echo $TitleStr[16] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Series title:</label></th>
	<td><input type="Text" name="str16" size="110%" value="<?php echo $TitleStr[17] ; ?>"></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Supplementary content:</label></th>
	<td><input type="Text" name="str17" size="110%" value="<?php echo $TitleStr[18] ; ?>"></td>
	</tr>
	
	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Identifier/ISBN:</label></th>
	<td><input type="Text" name="str18" size="110%" value="<?php echo $TitleStr[19] ; ?>"></td>
	</tr>

      <tr>
        <th width="111"><label style="color:#3a87ad; font-size:12px;">Content type:</label></th>
        <td>
            <SELECT NAME="str38" value="<?php echo $TitleStr[39] ; ?>">
              <OPTION><?php echo $TitleStr[39] ; ?>
              <OPTION>Text
            </SELECT>
        </td>
      </tr>
	
      <tr>
        <th width="111"><label style="color:#3a87ad; font-size:12px;">Media type:</label></th>
        <td>
            <SELECT NAME="str39" value="<?php echo $TitleStr[40] ; ?>">
              <OPTION><?php echo $TitleStr[40] ; ?>
              <OPTION>Unmediated
            </SELECT>
        </td>
      </tr>	
	
      <tr>
        <th width="111"><label style="color:#3a87ad; font-size:12px;">Carrier type:</label></th>
        <td>
            <SELECT NAME="str40" value="<?php echo $TitleStr[41] ; ?>">
              <OPTION><?php echo $TitleStr[41] ; ?>
              <OPTION>Volume
            </SELECT>
        </td>
      </tr>	
	  
	<tr>
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">URL:</label></th>
		<td><input type="Text" name="str37" size="110%" value="<?php echo $TitleStr[38] ; ?>"></td>
	</tr>	
	
	<tr>
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Subject - Topical:</label></th>
		<td><input type="Text" name="str19" size="110%" value="<?php echo $TitleStr[20] ; ?>"></td>
	</tr>

	<tr><th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Subject - Personal:</label></th>
	<td><input type="Text" name="str20" size="110%" value="<?php echo $TitleStr[21] ; ?>"></td>
	</tr>

	<tr><th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Subject - Corporate:</label></th>
	<td><input type="Text" name="str21" size="110%" value="<?php echo $TitleStr[22] ; ?>"></td>
	</tr>

	<tr><th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Subject - Geographical:</label></th>
	<td><input type="Text" name="str22" size="110%" value="<?php echo $TitleStr[23] ; ?>"></td>
	</tr>

      <tr>
        <th width="111"><label style="color:#3a87ad; font-size:12px;">Prefix:</label></th>
        <td>
            <SELECT NAME="str23" >
				<OPTION><?php echo $TitleStr[24] ; ?>
				<Option>B
				<OPTION>BIO
				<OPTION>C
				<OPTION>CF
				<OPTION>CIR
				<OPTION>CUR
				<OPTION>CNF
				<OPTION>E
				<OPTION>EASY
				<OPTION>F
				<OPTION>FIC
				<OPTION>FIL
				<OPTION>FOLIO
				<OPTION>GC
				<OPTION>PAP
				<OPTION>PB
				<OPTION>R
				<OPTION>REF
				<OPTION>RES
				<OPTION>RF
				<OPTION>SP
				<OPTION>TR
				<OPTION>TRF
				<OPTION>TXT
            </SELECT>
		</td>
	</tr>
      <tr>
        <th width="111"><label style="color:#3a87ad; font-size:12px;">Call number:</label></th>
        <td>	
			<input type="Text" name="str24" size="95%" value="<?php echo $TitleStr[25] ; ?>">

        </td>
      </tr>
	  
	<tr>
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Accession number:</label></th>
		<td><input type="Text" name="str25" size="110%" value="<?php echo $TitleStr[26] ; ?>"></td>
	</tr>

	<tr>
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Language of text:</label></th>
		<td><input type="Text" name="str26" size="110%" value="<?php echo $TitleStr[27] ; ?>"></td>
	</tr>
	
	<tr>
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Library/Location:</label></th>
		<td><input type="Text" name="str27" size="110%" value="<?php echo $TitleStr[28] ; ?>"></td>
	</tr>	

	<tr>        
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Electronic access:</label></th>
		<td><input type="Text" name="str28" size="110%" value="<?php echo $TitleStr[29] ; ?>"></td>
	</tr>
	
	<tr>        
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Cover image:</label></th>
		<td><input type="Text" name="str41" size="110%" value="<?php echo $TitleStr[42] ; ?>"></td>
	</tr>	

	<tr>        
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Type of material:</label></th>
			<td >
				   <input type="checkbox" name="gc" value="gc" <?php echo gc; ?>>General circulation
				   <input type="checkbox" name="tr" value="tr" <?php echo tr; ?>>Teacher reference<br />
				   <input type="checkbox" name="fr" value="fr" <?php echo fr; ?>>Filipiniana/Reference
				   <input type="checkbox" name="circ" value="circ" <?php echo circ; ?>>Circulation<br />
				   <input type="checkbox" name="ref" value="ref" <?php echo ref; ?>>Reference
				   <input type="checkbox" name="fil" value="fil" <?php echo fil; ?>>Filipiniana <br />
				   <input type="checkbox" name="sm" value="sm" <?php echo sm; ?>>Special collection
				   <input type="checkbox" name="bio" value="bio" <?php echo bio; ?>>Biography<br />
				   <input type="checkbox" name="res" value="res" <?php echo res; ?>>Reserve	
				   <input type="checkbox" name="schl" value="schl" <?php echo schl; ?>>Scholastic<br />
				   <input type="checkbox" name="easy" value="easy" <?php echo easy; ?>>Easy
				   <input type="checkbox" name="fic" value="fic" <?php echo fic; ?>>Fiction					   
			</td>
			
</tr>


	<tr > 
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Volume/Copy:</label></th>
	    <td ><input type="Text" name="str29" size="10" maxlength="2" value="<?php echo $TitleStr[30] ; ?>"></td>
	</tr>
	<tr > 
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">On-shelf:</label></th>
	    <td><input type="Text" name="str30" size="10" maxlength="2" value="<?php echo $TitleStr[31] ; ?>"></td>
	</tr>
        	<tr > 
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Out:</label></th>
	    <td>
	    <input type="Text" name="str31" size="10" maxlength="2" value="<?php echo $TitleStr[32] ; ?>"></td>
	</tr>
	
        	<tr > 
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Times out:</label></th>
	    <td>
	    <input type="Text" name="str35" size="10" maxlength="2" value="<?php echo $t_timesout; ?>"></td>
		</td>
	</tr>


	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Content:</label></th>
	    <td><textarea name="str32" cols="80%" rows="5" ><?php echo $TitleStr[33] ; ?></textarea></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Abstract/Summary:</label></th>
	    <td><textarea name="str33" cols="80%" rows=5 ><?php echo $TitleStr[34] ; ?></textarea></td>
	</tr>

	<tr>        <th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Reviews:</label></th>
	    <td><textarea name="str34" cols="80%" rows=5 ><?php echo $TitleStr[35] ; ?></textarea></td>
	</tr>
	
	<tr>
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Entered by:</label></th>
		<td><input type="Text" name="strEnterby" size="110%" value="<?php echo $result[0]["entered_by"]; ?>"></td>
	</tr>	

	<tr>        
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Updated by:</label></th>
		<td><input type="Text" name="strUpdateby" size="110%" value="<?php echo $result[0]["updated_by"] ; ?>"></td>
	</tr>
	
	<tr>
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Date entered:</label></th>
		<td><input type="Text" name="strDateEnter" size="110%" value="<?php echo $result[0]["date_entered"] ; ?>"></td>
	</tr>	

	<tr>        
		<th class="columnheader"><label style="color:#3a87ad; font-size:12px;">Date updated:</label></th>
		<td><input type="Text" name="strDateUpdate" size="110%" value="<?php echo $result[0]["date_updated"] ; ?>"></td>
	</tr>

	<tr>
		<th><label style="color:#3a87ad; font-size:12px;">Image</label></th>

		<td><input type="file" name="image" required /></td>
	</tr>
						

	</table>			
	</div>

	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		<button type="submit" name="Submit" class="btn btn-primary">Add</button>
	</div>
	
	<input type=hidden name="bkid" value="<?php echo $bkid; ?>">
	
</form>
</div>			