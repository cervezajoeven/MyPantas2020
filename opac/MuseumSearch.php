<!DOCTYPE HTML>

<html>


<body>

<?PHP require("navigation.php")?>

<FORM ACTION="SearchHits.php" name="mySearch" id="mySearch" onsubmit="return checkscript()" METHOD="GET">

		<table  width="100%"  cellpadding="0" cellspacing="0" bordercolor="#9C9ACE" class="goback">
		  <FONT FACE="Trebuchet MS, Calibri, arial, verdana"  SIZE="2">	
				<tr>
					<td><td><input type="hidden" name="mtype" value="muse" checked></td>
					</td>
				</tr>
				<tr>
					<td COLSPAN="1" VALIGN="middle" ALIGN="CENTER" class="search">
							<br><b>Enter search terms inside text box.</b><br>
							<strong>Museum collection search:</strong> <INPUT TYPE="text" NAME="search" id="search" size = "100" value="Enter keyword here">
							<INPUT TYPE="submit" name="submit" VALUE="Submit">
					</td>
				</tr>		   
		   </FONT>
		</table>
<!----- Including PHP Script ----->
	
</form>
<br>

</body>
</html>
