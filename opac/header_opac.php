<header>
    <figure>
        <img src="images/MCheader1.png" alt="Logo" class="menu" width="100%" height="100" align="center">
    </figure>
</header>

<ul >
<li class="center" ><a href="websearch.php" class="menu">Home</a></li>
<li class="center"><a href="AdvanceSearch.php" class="menu">Advance search</a></li>
<li class="center"><a href="#" class="menu">Browse</a></li>
<li class="center"><a href="#" class="menu">Thesaurus</a></li>
<li class="center"><a href="#" class="menu">Other catalogs</a></li>
<li class="center"><a href="#" class="menu">About</a></li>
</ul>

<FORM ACTION="SearchHitsCheck.php" name="mySearch" id="mySearch" onsubmit="return checkscript()" METHOD="GET">

		<table  width="100%"  cellpadding="0" cellspacing="0" bordercolor="#9C9ACE" class="goback">
		  <FONT FACE="Trebuchet MS, Calibri, arial, verdana"  SIZE="2">	
			   <tr>
				<td COLSPAN="1" ALIGN="CENTER" class="opac">
		
					<marquee behavior="alternate" bgcolor="#EAF2D3" h3 style=margin-bottom:0;" align="center"><B>Select a type of material for searching</B</h1></marquee>
							 <input type="checkbox" name="mtype[]" value="all" checked> <B>All materials</B>			  
							 <input type="checkbox" name="mtype[]" value="td"> <B>Academic Research</B>	
							 <input type="checkbox" name="mtype[]" value="ba"> <B>Analytic</B>					 
							 <input type="checkbox" name="mtype[]" value="archive"><B>Archives collection</B>
							 <input type="checkbox" name="mtype[]" value="audio"> <B>Audio recording</B>	
							 <input type="checkbox" name="mtype[]" value="av"> <B>AV-Materials</B>				 
							 <input type="checkbox" name="mtype[]" value="book" ><B>Books</B><br>
							 <input type="checkbox" name="mtype[]" value="ca"> <B>Cases and jurisprudence</B>
							 <input type="checkbox" name="mtype[]" value="er"> <B>Electronic resources</B>
							 <input type="checkbox" name="mtype[]" value="pr"> <B>Periodical articles</B>					 
							 <input type="checkbox" name="mtype[]" value="museum"> <B>Museum</B>	
							 <input type="checkbox" name="mtype[]" value="se"> <B>Serials</B>
							 <input type="checkbox" name="mtype[]" value="vf"> <B>V-Files</B>
							 <input type="checkbox" name="mtype[]" value="video"> <B>Video recording</B>					 
							 <input type="checkbox" name="mtype[]" value="itr"> <B>Web site</B>					 
				</td>
				</tr>
				<tr>
					<td COLSPAN="1" VALIGN="middle" ALIGN="CENTER" class="search">
							<br><b>Enter search terms inside text box.</b><br>
							<strong>Search:</strong> <INPUT TYPE="text" NAME="search" id="search" size = "100" value="Enter keyword here">
							<INPUT TYPE="submit" name="submit" VALUE="Submit">
					</td>
				</tr>		   
		   </FONT>
		</table>
<!----- Including PHP Script ----->
	
</form>
<br>
