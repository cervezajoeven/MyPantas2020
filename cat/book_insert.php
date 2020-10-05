
<!-- #include file="../includes/redirect.asp" -->
<!-- #include file="../includes/connObjTop.asp" -->
<!--
<%

id = Request.Form("id")
username = Session("username")

Function ChkString(str)	 
	str = replace(str, "'", "`") 
	ChkString = str
End Function


dim txtstr
txtstr = ""
txtstr = "<001>" + trim(ChkString(Request.form("str0"))) + "" 'title
txtstr = txtstr + "<002>" + trim(ChkString(Request.form("str1"))) + "" 'responsible
txtstr = txtstr + "<003>" + trim(ChkString(Request.form("str2"))) + "" 'parallel
txtstr = txtstr + "<004>" + trim(ChkString(Request.form("str3"))) + "" 'main author
txtstr = txtstr + "<005>" + trim(ChkString(Request.form("str4"))) + "" 'numeration
txtstr = txtstr + "<006>" + trim(ChkString(Request.form("str5"))) + "" 'other_author
txtstr = txtstr + "<007>" + trim(ChkString(Request.form("str6"))) + "" 'editors...
txtstr = txtstr + "<008>" + trim(ChkString(Request.form("str7"))) + "" 'corporate author
txtstr = txtstr + "<009>" + trim(ChkString(Request.form("str8"))) + "" 'place of publication
txtstr = txtstr + "<0010>" + trim(ChkString(Request.form("str9"))) + "" 'publisher
txtstr = txtstr + "<0011>" + trim(ChkString(Request.form("str10"))) + "" 'year of publication
txtstr = txtstr + "<0012>" + trim(ChkString(Request.form("str11"))) + "" 'edition
txtstr = txtstr + "<0013>" + trim(ChkString(Request.form("str12"))) + "" 'pages/extent
txtstr = txtstr + "<0014>" + trim(ChkString(Request.form("str13"))) + "" 'other details
txtstr = txtstr + "<0015>" + trim(ChkString(Request.form("str14"))) + "" 'dimension
txtstr = txtstr + "<0016>" + trim(ChkString(Request.form("str15"))) + "" 'accompanying materials
txtstr = txtstr + "<0017>" + trim(ChkString(Request.form("str16"))) + "" 'series
txtstr = txtstr + "<0018>" + trim(ChkString(Request.form("str17"))) + "" 'general notes
txtstr = txtstr + "<0019>" + trim(ChkString(Request.form("str18"))) + "" 'isbn
txtstr = txtstr + "<0020>" + trim(ChkString(Request.form("str19"))) + "" 'topical
txtstr = txtstr + "<0021>" + trim(ChkString(Request.form("str20"))) + "" 'personal
txtstr = txtstr + "<0022>" + trim(ChkString(Request.form("str21"))) + "" 'corporate
txtstr = txtstr + "<0023>" + trim(ChkString(Request.form("str22"))) + "" 'geographical
txtstr = txtstr + "<0024>" + trim(ChkString(Request.form("str23"))) + "" 'prefix
txtstr = txtstr + "<0025>" + trim(ChkString(Request.form("str24"))) + "" 'call number
txtstr = txtstr + "<0026>" + trim(ChkString(Request.form("str25"))) + "" 'accession
txtstr = txtstr + "<0027>" + trim(ChkString(Request.form("str26"))) + "" 'language
txtstr = txtstr + "<0028>" + trim(ChkString(Request.form("str27"))) + "" 'location
txtstr = txtstr + "<0029>" + trim(ChkString(Request.form("str28"))) + "" 'filename
txtstr = replace(txtstr, "\", "/")
txtstr = txtstr + "<0030>" + trim(ChkString(Request.form("str29"))) + "" 'copy
txtstr = txtstr + "<0031>" + trim(ChkString(Request.form("str30"))) + "" 'inn
txtstr = txtstr + "<0032>" + trim(ChkString(Request.form("str31"))) + "" 'out
txtstr = txtstr + "<0033>" + trim(ChkString(Request.form("str32"))) + "" 'content
txtstr = txtstr + "<0034>" + trim(ChkString(Request.form("str33"))) + "" 'summary
txtstr = txtstr + "<0035>" + trim(ChkString(Request.form("str34"))) + "" 'abstract
txtstr = txtstr + "<0036>" + trim(ChkString(Request.form("str35"))) + "" 'timesout
txtstr = txtstr + "<0037>" + trim(ChkString(Request.form("str36"))) + "" 
txtstr = txtstr + "<0038>" + trim(ChkString(Request.form("str37"))) + "" 
txtstr = txtstr + "<0039>" + trim(ChkString(Request.form("str38"))) + "" 
txtstr = txtstr + "<0040>" + trim(ChkString(Request.form("str39"))) + "" 
txtstr = txtstr + "<0041>" + trim(ChkString(Request.form("str40"))) + "" 
txtstr = txtstr + "<0042>" + trim(ChkString(Request.form("str41"))) + "" 

gc = trim(ChkString(Request.form("gc"))) 'type
tref = trim(ChkString(Request.form("tref"))) 'type
fr = trim(ChkString(Request.form("fr"))) 'type
circ = trim(ChkString(Request.form("circ"))) 'type
ref = trim(ChkString(Request.form("ref"))) 'type
fil = trim(ChkString(Request.form("fil"))) 'type
sp = trim(ChkString(Request.form("sp"))) 'type
bio = trim(ChkString(Request.form("bio"))) 'type
res = trim(ChkString(Request.form("res"))) 'type
schl = trim(ChkString(Request.form("schl"))) 'type
easy = trim(ChkString(Request.form("easy"))) 'type
fic = trim(ChkString(Request.form("fic"))) 'type

tcopy = trim(ChkString(Request.form("str29")))
inn = trim(ChkString(Request.form("str30")))
out = trim(ChkString(Request.form("str31")))
t_timesout = trim(ChkString(Request.form("str35")))
'id = Request.form("id")

'Function used to pad numeric values, i.e 1 to 01
'zeros - Number of zero's to prefix the value with.
Function format_zeros(value, zeros)
  If Len(value) < zeros Then
    Do Until Len(value) = zeros
      value = "0" & value
    Loop
  End If
  format_zeros = value
End Function

Dim somedate, sometime, somedatetimestamp
'Build the date string in the format yyyy-mm-dd
somedate = Year(Date()) & "-" & format_zeros(Month(Date()), 2) & "-" & format_zeros(Day(Date()), 2)
'Build the time string in the format hh:mm:ss
sometime = format_zeros(Hour(Time()), 2) & ":" & format_zeros(Minute(Time()), 2) & ":" & format_zeros(Second(Time()), 2)
'Concatenate both together to build the timestamp yyyy-mm-dd hh:mm:ss
somedatetimestamp = somedate & " " & sometime

if (trim(id) = "") or (isnull(id)) then id = 0 end if
	
if cdbl(id) = 0 then

		sql ="select * from books limit 1"
		rs.open sql,conn,1,3
		rs.AddNew
		If Len(Request.form("str0")) > 255 Then
			  sub1 = Mid(Request.form("str0"), 1, 255)
			  RS("title") = Replace(Trim(sub1), "'", "`")
		Else
			  RS("title") = Replace(Trim(Request.form("str0")), "'", "`")
		End If
		Txtstr = Replace(Trim(Txtstr),chr(34), "")
		RS("Maintext") = Replace(Txtstr, "'", "`")   
		M = ""
		M = InStr(gc, "gc")
		If M > 0 Then
			rs("gc") = 1
		End If
		M = ""
		M = InStr(tref, "tref")
		If M > 0 Then
			rs("tr") = 1
		End If	
		M = ""
		M = InStr(fr, "fr")
		If M > 0 Then
			rs("fr") = 1
		End If	
       M = ""
       M = InStr(circ, "circ")
       If M > 0 Then
		rs("circ") = 1
       End If	   
       M = ""
       M = InStr(sp, "sp")
       If M > 0 Then
		rs("sm") = 1
       End If	   
       M = ""
       M = InStr(schl, "schl")
       If M > 0 Then
		rs("schl") = 1
       End If	   
       M = ""
       M = InStr(easy, "easy")
       If M > 0 Then
		rs("easy") = 1
       End If	   
	
       M = ""
       M = InStr(fil, "fil")
       If M > 0 Then
		rs("fil") = 1
       End If

       M = ""
       M = InStr(ref, "ref")
       If M > 0 Then
		rs("ref") = 1
       End If

       M = ""
       M = InStr(res, "res")
       If M > 0 Then
		rs("res") = 1
       End If

       M = ""
       M = InStr(bio, "bio")
       If M > 0 Then
		rs("bio") = 1
       End If

       M = ""
       M = InStr(fic, "fic")
       If M > 0 Then
		    rs("fic") = 1
       End If

       If not tcopy = "" Then
		    rs("Copy") = cint(tcopy)
       End If

       If not inn = "" Then
		      rs("Inn") = cint(inn)
       End If
	   
       rs("tm") = "book"
       
	   rs("entered_by") = username
	   rs("updated_by") = username
       rs("date_entered") = somedatetimestamp
       rs("date_updated") = somedatetimestamp
	   rs.update
		
	   rs.close
	   Conn.Close 
	   set Conn = nothing
	   set rs = nothing	

       response.redirect("book_index.asp?strStatus=INC")
	   response.End
else

    sql ="select * from books WHERE bkID='" & id & "'"
    rs.open sql,conn,1,3

    If Len(Request.form("str0")) > 255 Then
          sub1 = Mid(Request.form("str0"), 1, 255)
          rs("title") = Replace(Trim(sub1), "'", "`")
    Else
          rs("title") = Replace(Trim(Request.form("str0")), "'", "`")
    End If
    txtstr = Replace(Trim(txtstr),chr(34), "")
    rs("maintext") = Replace(txtstr, "'", "`")
	 	   
    M = ""
    M = InStr(gc, "gc")
    If M > 0 Then
		    rs("gc") = 1
    else
		    rs("gc") = "0"
    End If
    M = ""
    M = InStr(tref, "tref")
    If M > 0 Then
		    rs("tr") = 1
    else
		    rs("tr") = "0"   
    End If
    M = ""
    M = InStr(fr, "fr")
    If M > 0 Then
		    rs("fr") = 1
    else
		    rs("fr") = "0"   
    End If	
    M = ""
    M = InStr(circ, "circ")
    If M > 0 Then
		    rs("circ") = 1
    else
		    rs("circ") = "0"   
    End If	   
    M = ""
    M = InStr(sp, "sp")
    If M > 0 Then
		    rs("sm") = 1
    else
		    rs("sm") = "0"    
    End If	   
    M = ""
    M = InStr(schl, "schl")
    If M > 0 Then
		  rs("schl") = "1"
    else
		  rs("schl") = "0"
    End If	   
    M = ""
    M = InStr(easy, "easy")
    If M > 0 Then
		    rs("easy") = 1
    else
		    rs("easy") = "0"
    End If	   
    M = ""
    M = InStr(fil, "fil")
    If M > 0 Then
		    rs("fil") = 1
    else
		    rs("fil") = "0"
    End If
    M = ""
    M = InStr(ref, "ref")
    If M > 0 Then
		  rs("ref") = "1"
    else
		  rs("ref") = "0"      
    End If
    M = ""
    M = InStr(res, "res")
    If M > 0 Then
		  rs("res") = "1"
    else
		  rs("res") = "0"    
    End If
    M = ""
    M = InStr(bio, "bio")
    If M > 0 Then
		  rs("bio") = "1"
     else
		  rs("bio") = "0"     
    End If
    M = ""
    M = InStr(fic, "fic")
    If M > 0 Then
		    rs("fic") = 1
    else
		    rs("fic") = "0"   
    End If

    If Len(trim(tcopy)) > 0 Then
      rs.fields("copy") = Int(tcopy) 
    Else
      rs.fields("copy") = "0"
    End If   

    If trim(inn) <> "" Then
		    rs("inn") = Int(inn)
    End If
	   
    rs("tm") = "book"
	rs("updated_by") = username
    rs("date_updated") = somedatetimestamp	
    rs.update		

    rs.close
    conn.Close 
    set conn = nothing
    set rs = nothing	 
	
	response.redirect("book_index.asp?strStatus=ALT")
	response.End
end if

%>
-->