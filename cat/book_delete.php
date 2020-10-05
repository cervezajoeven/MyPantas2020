<% @ LANGUAGE="VBSCRIPT" %>
<!-- #include file="../includes/redirect.asp" -->
<!-- #include file="../includes/connObjTop.asp" -->
<%

id = Request.QueryString ("id")

if trim(id) = "" or isnull(id) or trim(id) = "0" then
	Response.Write ("<script>alert('Alert!'); document.location='book_index.php';</script>")
	Response.End
end If

strSQL = "delete from books where bkid = " & id

conn.execute(strSQL)

Response.Redirect ("book_index.asp?strStatus=EXC")
Response.End

%>