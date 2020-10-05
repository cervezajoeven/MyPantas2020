<% 

	' MYSQL Create the Connection Object DSN-less
	Set conn = Server.CreateObject("ADODB.Connection")
	conn.Open ("Driver={MySQL ODBC 5.1 Driver};Server=unit3;Database=newrdadb_latest;User=root;Password=divine;Option=4;")
	'Conn.Open ("Driver={MySQL ODBC 5.1 Driver};Server=dtheu-smt-250;Database=newlmcrizal;User=root;Password=divine;Option=4;")			
	'Conn.Open ("Driver={MySQL ODBC 5.1 Driver};Server=unit3;Database=newrdadb_latest;User=root;Password=divine;Option=4;")	
	Set rs = Server.CreateObject ("ADODB.Recordset")
	rs.ActiveConnection = Conn

%>