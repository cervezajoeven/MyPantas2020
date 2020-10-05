<header id="HEADER#Banner">
    <figure>
        <img src="images/MCheader1.png" alt="Logo" class="menu"/>
    </figure>
</header>

<ul>
<li><a href="websearch.php" class="menu">Home</a></li>
<li><a href="AdvanceSearch.php" class="menu">Advance search</a></li>
<li><a href="#" class="menu">Archives</a></li>
<li><a href="#" class="menu">Museum</a></li>
</ul>

<FORM ACTION="SearchHits.php" name="mySearch" id="mySearch" onsubmit="return checkscript()" METHOD="GET">

		<table  width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#9C9ACE" bgcolor="" class="center">
		  <FONT FACE="calibri, arial, VERDANA, HELVETICA, SANS-SERIF"  SIZE="2">		
			   <TR>
				<TD COLSPAN="1" ALIGN="CENTER" BGCOLOR = "orange">
		
					<B>Select a type of materials</B><br>

							 <input type="radio" name="mtype" value="all" checked> <B>All materials</B>			  
							 <input type="radio" name="mtype" value="td"> <B>Academic Researches</B>	
							 <input type="radio" name="mtype" value="ba"> <B>Analytic</B>					 
							 <input type="radio" name="mtype" value="archive"><B>Archives</B>
							 <input type="radio" name="mtype" value="audio"> <B>Audio recording</B>	
							 <input type="radio" name="mtype" value="av"> <B>AV-Materials</B>				 
							 <input type="radio" name="mtype" value="book" ><B>Books</B><br>
							 <input type="radio" name="mtype" value="ca"> <B>Cases and jurisprudence</B>
							 <input type="radio" name="mtype" value="er"> <B>Electronic resources</B>
							 <input type="radio" name="mtype" value="pr"> <B>Periodicals</B>					 
							 <input type="radio" name="mtype" value="museum"> <B>Museum</B>	
							 <input type="radio" name="mtype" value="se"> <B>Serials</B>
							 <input type="radio" name="mtype" value="vf"> <B>V-Files</B>
							 <input type="radio" name="mtype" value="video"> <B>Video recording</B>					 
							 <input type="radio" name="mtype" value="itr"> <B>Web site</B>					 

				</TD>
			   </TR>
			   <tr><td align="center"></b>Enter search terms inside text box.<bold></td></tr> 	
			   <TR>
				  <TD COLSPAN="1" VALIGN="middle" ALIGN="CENTER" >

						<strong>Search:</strong> <INPUT TYPE="text" NAME="search" id="search" size = "100" value="Enter keyword here">

						<INPUT TYPE="submit" name="submit" VALUE="Submit">
					

				  </TD>
				</TR>		   
		   </FONT>
		</table>

</form>
