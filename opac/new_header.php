<header>
    <figure>
        <img src="images/banner.png" alt="Logo" class="menu" width="90%" height="130" align="center">
    </figure>
</header>
<div align="center">
<ul >
<li class="center" ><a href="websearch.php" class="menu">Home</a></li>
<li class="center"><a href="AdvanceSearch.php" class="menu">Advance search</a></li>
<li class="center"><a href="ArchiveSearch.php" class="menu">Archives</a></li>
<li class="center"><a href="MuseumSearch.php" class="menu">Museum</a></li>
<li class="center"><a href="Other_library.php" class="menu">Other catalogs</a></li>
<li class="center"><a href="#" class="menu">About</a></li>
</ul>
</div>

<FORM ACTION="SearchHits.php" name="mySearch" id="mySearch" onsubmit="return checkscript()" METHOD="GET">

		<table  width="100%"  cellpadding="0" cellspacing="0" bordercolor="#9C9ACE" class="goback">
		  <FONT FACE="Trebuchet MS, Calibri, arial, verdana"  SIZE="2">	
			   <tr>
				<td COLSPAN="1" ALIGN="CENTER" class="opac">
		
					<marquee behavior="alternate" bgcolor="#EAF2D3" h3 style=margin-bottom:0;" align="center"><B>Select a type of material for searching</B</h1></marquee>
							 <input type="radio" name="mtype" value="all" checked> <B>All materials</B>			  
							 <input type="radio" name="mtype" value="td"> <B>Academic Research</B>	
							 <input type="radio" name="mtype" value="ba"> <B>Analytic</B>					 
							 <input type="radio" name="mtype" value="audio"> <B>Audio recording</B>	
							 <input type="radio" name="mtype" value="av"> <B>AV-Materials</B>				 
							 <input type="radio" name="mtype" value="book" ><B>Books</B><br>
							 <input type="radio" name="mtype" value="ca"> <B>Cases and jurisprudence</B>
							 <input type="radio" name="mtype" value="er"> <B>Electronic resources</B>
							 <input type="radio" name="mtype" value="pr"> <B>Periodical articles</B>					 
							 <input type="radio" name="mtype" value="se"> <B>Serials</B>
							 <input type="radio" name="mtype" value="vf"> <B>V-Files</B>
							 <input type="radio" name="mtype" value="video"> <B>Video recording</B>					 
							 <input type="radio" name="mtype" value="itr"> <B>Web site</B>					 
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
</form>
<br>
