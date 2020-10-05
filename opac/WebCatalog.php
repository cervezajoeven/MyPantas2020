<link href="WebFinder/stylistics.css" rel="stylesheet" type="text/css">


<!DOCTYPE HTML>

<HEAD>
<style type=text/css> 

{ 
.body { display:none } 
} 
</style> 
<TITLE>Library Media Center Web Retrieval System</TITLE>

<script language="JavaScript" type="text/JavaScript">
    function checkscript() {
	var x=document.mySearch.Keyword1.value;
	if (x.indexOf(">")>=0 || x.indexOf("<")>=0 || x.indexOf("</")>=0) {
  		alert("HTML/Javascript/ASPscript character is not allowed in keyword.\n");
  		document.mySearch.Keyword1.focus();
  		return false;
  	}        
        if (!document.mySearch.Keyword1.value) {
            alert("The keyword textbox must not be blank. \n" + "* Please enter keyword(s) in the textbox. \n");
            document.mySearch.Keyword1.focus();
            return false;
        }
        return true;
    }
 </script>

</HEAD>
<BODY BGCOLOR="" link="#FF0000" vlink="#0000FF">

<?PHP require("php_header.php")?>;

<FORM ACTION="SearchHits.php" name="mySearch" id="mySearch" onsubmit="return checkscript()" METHOD="GET">

<div> 
	<table align="center" width="" height="" border="0" cellpadding="0" cellspacing="0" bordercolor="#9C9ACE" bgcolor="" class="size1border">
  	   <TR>
		<TD COLSPAN="1" ALIGN="CENTER" BGCOLOR = "orange">
		  <FONT FACE="TAHOMA, VERDANA, HELVETICA, SANS-SERIF"  SIZE="2">
			<B>Type of materials</B><br>
		  </FONT>
		  <FONT FACE="TAHOMA, VERDANA, HELVETICA, SANS-SERIF" COLOR="BLUE" SIZE="2">
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
		  </FONT>
		</TD>
       </TR>
	</table>
</div>

</div>	
	<table align="center" width="" height="" border="0" cellpadding="0" cellspacing="0" bordercolor="#9C9ACE" bgcolor="" class="size1border">
	   <TR>
	      <TD COLSPAN="1" VALIGN="middle" ALIGN="CENTER" >
			<FONT FACE="arial" size="1">
				<a href="default.php"><span class="size11Yarial">Home</span><img src="./images/Home.png" title="Home" height="25" width="30" alt="Home" border="0"></a>&nbsp;

				<INPUT TYPE="text" NAME="search" id="search" size = "80" value="Enter keyword here">

				<INPUT TYPE="submit" name="submit" VALUE="Search">
			
				&nbsp;&nbsp;<a href="./AdvanceSearch.php"><span class="size11Yarial">Advance Search</span><img src="./images/adv-search.png" title="Advance Search" alt="Advance Search" border="0" width="30" height="25"/></a>
		    </FONT>	
		  </TD>
        </TR>
	</table>
</div>

<br /><br />

<marquee behavior="scroll" direction="left">

	<img src="./cover/WhatHumanBeingFrierson2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/WholeGrainVeganBakingSteen2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/WhyArtPhotographySoutter2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/WhyGenesSelfishPeopleNiceTudge2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/WordWitnessVargas2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/WorkThroConfFolger2013.png" width="300" height="300" alt=""/>


	<img src="./cover/WorldGreenestBuildingsYudelson2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/WorldReligionsMatthew2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/YoungDhildWittmer2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/YourUndergraduateDegreePsychologyHettich2014.png" width="300" height="300" alt=""/> 
	<img src="./cover/WhatEnlFleischacker2013.png" width="300" height="300" alt=""/> 
	<img src="./cover/WesterncivilizationBeyondBoundaries2014.png" width="300" height="300" alt=""/>

</marquee>


</form>


<?PHP require("references.php")?>;


<br /><br />

<?PHP require("footer.php")?>;

</Body>
</html>

