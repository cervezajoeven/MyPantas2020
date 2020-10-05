<!Doctype html>
<html>
<%@ LANGUAGE="VBSCRIPT" %>
<% Response.Buffer = true%>

<!--#include file="connObjTop.asp"-->
<!-- #INCLUDE FILE="Header.asp" -->
<!-- #INCLUDE FILE="Footer.asp" -->

<head>
<META NAME = "Keywords" content="library information sytem, myrizal, platonixz, libro system">
<META NAME = "description" content="online library information system">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0"> 
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="refresh" content="6000">

<TITLE>LC List</TITLE>

<script language="JavaScript">
	function setFocus()
	{
		circ_transaction.idnum.focus()
	}
	div {
		text-transform:uppercase;
	}
</script>

</head>

<body onLoad="setFocus()";>

<center>
 <table width = "100%" border="1" cellpadding="4" cellspacing="3" bordercolorlight="Blue">
  <tr>
   <td valign="top">
   <% heading_Show %>
   </td>
  </tr>
 </table>
</center>
<br />
<table align="center">
    	<tr>
			<td><a href="javascript:history.back()" class="card">Back</a></td>
    	</tr>
</table>
<br />

<%

	' Declare all of the variables that will be used in the page.
	Dim objConn			' ADO Connection Object
	Dim Rs				' ADO Recordset Object
	Dim strYear			' The year that we are searching for.
	Dim sql1, sql2			' Our SQL statement
	Dim intPageCount		' The number of pages in the recordset.
	Dim intRecordCount		' The number of records in the recordset.
	Dim intPage			' The current page that we are on.
	Dim intRecord			' Counter used to iterate through the recordset.
	Dim intStart			' The record that we are starting on.
	Dim intFinish			' The record that we are finishing on.
	Dim name1, name2, marc
	Dim count, place, pub, petitioner, respondent
	Dim MyString, MyArray, strTitle, strGR, strPub, strAuthor, pr, vol, num, yr, pg

	If Request.QueryString("NAV") = "" Then
	    intPage = 1	
	Else
	    intPage = Request.QueryString("NAV")
	End If
	
'the two functions below return the next 10 and prev 10 page number
Function getNext10(num)
   pageLen = len(num)
   If pageLen = 1 Then
      next10 = 10
   Else If pageLen>1 Then
      pageRem = 10
      pageTen = right(num, 1)
      next10 = num + pageRem - pageTen
      End If
   End If
   getNext10 = next10
End Function

Function getPrev10(num)
   pageLen = len(num)
   If pageLen = 1 then
      prev10 = 1
   Else If pageLen>1 then
       	   lastNumber = right(num, 1)
           prev10 = num - lastNumber - 10
        End If
   End If
   If prev10 = 0 then
      prev10 = 1
   End If
   getPrev10 = prev10
End Function	
	

	if trim(Request("letter")) = "" then
        taon = session("taon")
        item = session("item") 
        keyword = session("keyword")

    else

        taon = "" 'session("taon")
        item = "" 'session("item") 
        keyword = "" 'session("keyword")

    end if

	If item = "Filipiniana" Then
		if keyword <> "" and taon <> "" then
			'dat = item & " " & keyword & " " & taon
			yr1 = "<0011>" + taon
			yr2 = "<0011>c" + taon
			varLet = "<0025>" + keyword
			sql1 =  "select * from books where tm='book' and  Fil = 1 and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   elseif keyword = "" and taon <> "" then
			'dat = item & " " & taon
			yr1 = "<0011>" + taon
			yr2 = "<0011>c" + taon
			sql1 =  "select * from books where tm='book' and  Fil = 1 and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   else
			'dat = item
			sql1 =  "select * from books where tm='book' and  Fil = 1 order by title"
	   end if

	elseIf item = "Reference"  Then
	   if keyword <> "" and taon <> "" then
	      'dat = item & " " & keyword & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and  Ref = 1 and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   Elseif keyword = "" and taon <> "" then
	      'dat = item & " "  & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      'varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and Ref = 1 and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"

	   else
	      'dat = item
	      sql1 =  "select * from books where tm='book' and Ref = 1 order by title"
	   end if

	elseIf item = "Biography" Then
	   if keyword <> "" and taon <> "" then
	      'dat = item & " " & keyword & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and  Bio = 1 and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   elseif keyword = "" and taon <> "" then
	      'dat = item & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and  Bio = 1 and maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%' order by title"

	   else
	      'dat = item
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      sql1 =  "select * from books where tm='book' and  Bio = 1 order by title"
	   end if

	elseIf item = "Fiction" Then
	   if keyword <> "" and taon <> "" then
	      'dat = item & " " & keyword & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and  Fic = 1 and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   elseif keyword = "" and taon <> "" then
	      'dat = item & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      'varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and  Fic = 1 and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"

	   else
	      'dat = item 
	      sql1 =  "select * from books where tm='book' and  Fic = 1 order by title"
	   end if

	elseIf item = "Reserve" Then
	   if keyword <> "" and taon <> "" then
	      'dat = item & " " & keyword & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and  Res = 1 and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   elseif keyword = "" and taon <> "" then
	      'dat = item & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      sql1 =  "select * from books where tm='book' and  Res = 1 and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"

	   else
	      'dat = item
	      sql1 =  "select * from books where tm='book' and  Res = 1 order by title"
	   end if

	elseIf item = "Prefix" Then
	   if keyword <> "" and taon <> "" then
	      'dat = item & " " & keyword & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0024>" + keyword
	      sql1 =  "select * from books where tm='book' and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   elseif keyword <> "" and taon = "" then
	      'dat = item + " " + keyword
	      varLet = "<0024>" + keyword
	      sql1 =  "select * from books where tm='book' and maintext LIKE '%" & varLet & "%' order by title"

	   else
	      Response.write "<center><b>Kindly enter the PREFIX that you want to generate list.</b></center>"
	      response.end	
	   end if

	elseIf item = "Class" Then
	   if keyword <> "" and taon <> "" then
	      'dat = item & " " & keyword & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   elseif keyword <> "" and taon = "" then
	      'dat = item & " " & keyword
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and maintext LIKE '%" & varLet & "%' order by title"

	   else
	      Response.write "<center><b>Kindly enter the CLASS key to generate list.</b></center>"
	      response.end	
	   end if

	elseIf item = "Year" Then
	   if keyword <> "" and taon <> "" then
	      'dat = item & " " & keyword & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"
	   elseif keyword = "" and taon <> "" then
	      'dat = item & " " & taon
	      yr1 = "<0011>" + taon
	      yr2 = "<0011>c" + taon
	      varLet = "<0025>" + keyword
	      sql1 =  "select * from books where tm='book' and maintext LIKE '%" & varLet & "%' and (maintext LIKE '%" & yr1 & "%' OR maintext LIKE '%" & yr2 & "%') order by title"

	   else
	      Response.write "<center><b>Kindly enter the YEAR to generate list.</b></center>"
	      response.end	
   	   end if

	else
	   If Request("letter") = "" Then
	      Response.write "<center><b>Kindly click a LETTER or NUMBER to generate list.</b></center>"
	      response.end	
	   Else
	      letter = trim(Request("letter"))
	      'dat = letter
	      varLet = "<0025>" + letter
	      sql1 =  "select * from books where tm='book' and  maintext LIKE '%" & varLet & "%' order by title"
	   End If

    end if

	' Create you Recordset Object
	Set Rs = Server.CreateObject("ADODB.Recordset")

	Rs.CursorLocation = 3		'adUseClient
	Rs.CursorType = 3		'adOpenStatic
	Rs.ActiveConnection = Conn
	
    Rs.open Sql1
	
	Rs.PageSize = 10		

	Rs.CacheSize = Rs.PageSize
	intPageCount = Rs.PageCount 
	intRecordCount = Rs.RecordCount 
	
	If CInt(intPage) > CInt(intPageCount) Then intPage = intPageCount
	If CInt(intPage) <= 0 Then intPage = 1
	
	If intRecordCount > 0 Then
	   Rs.AbsolutePage = intPage
	   intStart = Rs.AbsolutePosition
	   If CInt(intPage) = CInt(intPageCount) Then
	      intFinish = intRecordCount
	   Else
	      intFinish = intStart + (Rs.PageSize - 1)
	   End if
	End If
	
next10 = getNext10(intPage)
prev10 = getPrev10(intPage)			
	
	
%>


<CENTER>
   <B>There are <%=intRecordCount%> generated regarding <%=ucase(dat)%> query.</B>
</CENTER>

<%If intRecordCount > 0 Then

%>

<CENTER>
	<B>You are now viewing records 
	<%=intStart%> to <%=intFinish%>.</B>

	
<br />	
	
	<%

		If cdbl(intPage) > 1 Then
	%>
			<a href="view_LC_list.asp?NAV=<%=intPage - 1%>&letter=<%=letter%>"><img src="images/ARROW1.gif"></a>
	   

		<%End IF%>

<%

'the next 2 lines setup the page number for the "previous" and "next" links
RSPrevPage = intPage -1
RSNextPage = intPage + 1

'find out the number of pages returned in the recordset
'if the Next10 page number is greater than the recordset page count
'then set Next10 to the recordset pagecount

If Next10 > Rs.PageCount Then
   Next10 = Rs.PageCount
End If

'the variable start determines where to start the page number navigation
' i.e. 1, 10, 20, 30 and so on. 

If prev10 = 1 AND next10 - 1 < 10 Then
   start = 1
Else
   start = Next10 - 10
   If right(start, 1) > 0 Then
      start = replace(start, right(start, 1), "0")
      start = start + 10
   End If
End If


'This checks to make sure that there is more than one page of results
If Rs.PageCount > 1 Then
   'Loop through the page number navigation using P as our loopcounter variable 
	For P = start to Next10
		If NOT P = intPage then %>

			<a href="view_LC_list.asp?NAV=<%=P%>&letter=<%=letter%>"> <%=P%> </a>
<%
		Else
			'Don't hyperlink the current page number 
			response.write(" <b>" & P & " </b>")
      End If
   Next
End If


%>

   </font>
	   	
	<%
	If cdbl(intPage) < cdbl(intPageCount) Then
	%> 
	        <a href="view_LC_list.asp?NAV=<%=intPage + 1%>&letter=<%=letter%>"><img src="images/ARROW2.gif"></a>
				   

    <%	End If	%>	
		
	

   <table width="90%" border="1" cellpadding="4" cellspacing="3" bordercolorlight="Blue">

</CENTER>
			<tr>
				<th colspan="3" style="background-color: #336699; text-align:center; border-style: outset; border-width: 1"><font style="font-size: 12pt; color: #FFFFFF; font-weight: bold; face: calibri" >LIST OF MATERIALS</font></th>
			</tr>
			
	<%

		if intStart = "" then
		     counter = 1
		else
		     counter = intStart
		end if	
		For intRecord = 1 to Rs.PageSize
		     MyString = Rs.fields("Maintext").value
		     MyArray = Split(MyString,"")
		     For L=0 to UBound(MyArray)
			MyArray(L) = trim(MyArray(L))
		     Next 
		     strTitle = replace(MyArray(0), "<001>", "")
		     strAuthor = replace(MyArray(3), "<004>", "")
 		     strGR = replace(MyArray(24), "<0025>", "")
		     place = replace(MyArray(8), "<009>", "")
		     pub = replace(MyArray(9), "<0010>", "")
		     yr = replace(MyArray(10), "<0011>", "")
		     if place <> "" then
			strPub = place + " : " 'replace(MyArray(9), "<0010>", "") + " : "
		     else
			strPub = "[S.l.] : "
		     end if
		     if pub <> "" then
			strPub = strPub + pub + ", "
		     else
			strPub = strPub + "[s.n.], "
		     end if
		     if yr <> "" then
			strPub = strPub + yr
		     else
			strPub = strPub + "[n.d.]."
		     end if

		    if not strAuthor = "" then
		          biblio = strAuthor & ". " & strTitle & ". " & strPub & "."
		          biblio = replace(biblio, "..", ".")
		    else
		          biblio = strTitle & ". " & strPub
		          biblio = replace(biblio, "..", ".") & "."
		    end if

     		if Count mod 2 <> 0 then
	%>
					<tr bgcolor = "lightyellow">
						<td width="10%" align="center"><%=counter%></td>						
						<td width="25%"><%=strGR%></td>
						<td width="65%"><%=biblio%></td>
                    </tr>
		    <% else %>

					<tr bgcolor = "">
						<td width="10%" align="center"><%=counter%></td>					   
						<td width="25%"><%=strGR%></td>
						<td width="65%"><%=biblio%></td>
                    </tr>
	<%
		     end if

		     Rs.MoveNext
		     Count=Count + 1
			 Counter=Counter + 1		 
		     If Rs.EOF Then Exit for
		Next



	%>

	</table>


<CENTER>

<font face="arial" font size="4"> <font color"Red">

	<%
		' Check to see if the current page is greater than the first page
		' in the recordset.  If it is, then add a "Previous" link

		If cInt(intPage) > 1 Then
	%>
	   	   <a href="view_LC_list.asp?NAV=<%=intPage - 1%>&letter=<%=letter%>"><img src="images/ARROW1.gif"></a>
		<%End IF%>

	   	
	<%
		' Check to see if the current page is less than the last page
		' in the recordset.  If it is, then add a "Next" link.
		    If cInt(intPage) < cInt(intPageCount) Then
	%> 
	   	         <a href="view_LC_list.asp?NAV=<%=intPage + 1%>&letter=<%=letter%>"><img src="images/ARROW2.gif"></a>

      	<%	    End If	
 
 		End If


       %>
	
</FONT>
</CENTER>
<script type="text/javascript">
    // disable angle brackets as input characters
	$("input").keypress( function(e) {
		var chr = String.fromCharCode(e.which);
		if ("<>=%".indexOf(chr) >= 0)
		return false;
	});		
	// if(String.fromCharCode(e.keyCode).toLowerCase()=='a')
	$("ul li a:contains('Reports')").css({"color": "orange", "font-size": "150%"});  
</script>  
