<html>
<head>
<title>MyRDA WEB SEARCH ENGINE</title>
</head>
<body>
<form action='SearchEngine.php' method='GET'>
<center>
<h1>MyRDA Web Search Engine</h1>

	<table>
  	   <TR>
		<TD COLSPAN="1" ALIGN="CENTER" BGCOLOR = "Gold">
		  <FONT FACE="TAHOMA, VERDANA, HELVETICA, SANS-SERIF"  SIZE="3">
			<B>Type of materials</B><br>
		  </FONT>
		  <FONT FACE="TAHOMA, VERDANA, HELVETICA, SANS-SERIF" COLOR="BLUE" SIZE="2">
                     <input type="radio" name="mtype" value="book" checked><B> Books</B>
                     <input type="radio" name="mtype" value="pr"> <B>Periodicals</B>
                     <input type="radio" name="mtype" value="vf"> <B>V-Files</B>
                     <input type="radio" name="mtype" value="ba"> <B>Book article</B>
                     <input type="radio" name="mtype" value="video"> <B>Video/Film</B>
                     <input type="radio" name="mtype" value="av"> <B>S-Materials</B>
                     <input type="radio" name="mtype" value="ca"> <B>Cases</B>
                     <input type="radio" name="mtype" value="td"> <B>Theses</B><br>
		  </FONT>
		</TD>
       </TR>
	</table>
<br>

<input type='text' size='90' name='search'></br></br>
<input type='submit' name='submit' value='Search' ></br></br></br>
</center>
</form>
</body>
</html>