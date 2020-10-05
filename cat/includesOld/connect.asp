<% 

        'sql connection   
	'Set oConn=Server.CreateObject("ADODB.Connection")
	'oConn.Open "DSN=Lisa;UID=rsebastian;PWD=jKre2#;"
	'Set oRS = Server.CreateObject ("ADODB.Recordset")
	'oRS.CursorLocation = 3	'adUseClient
	'oRS.CursorType = 3		'adOpenStatic
	'oRS.ActiveConnection = oConn


        'dbFilePath1 = Server.MapPath("dbData.mdb")  	
  	'Set conn1 = Server.CreateObject("ADODB.Connection")
	'conn1.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;DATA SOURCE=" & dbFilePath1
	'conn1.Open
	'Set rs1 = Server.CreateObject ("ADODB.Recordset")
	'rs1.CursorLocation = 3	'adUseClient
	'rs1.CursorType = 3		'adOpenStatic
	'rs1.ActiveConnection = conn1


        'dbFilePath = Server.MapPath("myAcquisition.mdb")  	
  	'Set conn = Server.CreateObject("ADODB.Connection")
	'conn.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;DATA SOURCE=" & dbFilePath
	'conn.Open


	' MYSQL Create the Connection Object
	'Set Conn = Server.CreateObject("ADODB.Connection")
	'Conn.Open ("Driver={MySQL ODBC 3.51 Driver};Server=romy-emy;Database=newplato;User=root;Password=edrom;Option=4;")
	'Conn.Open ("Driver={MySQL ODBC 3.51 Driver};Server=sgh115sdx7;Database=odbcPlato;User=root;Password=edrom;Option=4;")
	'Set rs = Server.CreateObject ("ADODB.Recordset")
	'rs.ActiveConnection = Conn

	' MYSQL Create the Connection Object DSN-less
	Set conDB = Server.CreateObject("ADODB.Connection")
	'Conn.Open ("Driver={MySQL ODBC 5.1 Driver};Server=co1469;Database=newlmcrizal;User=root;Password=edrom;Option=4;")
	'Conn.Open ("Driver={MySQL ODBC 5.1 Driver};Server=abram;Database=newrdadb;User=root;Password=edrom;Option=4;")	
	conDB.Open ("Driver={MySQL ODBC 5.1 Driver};Server=unit3;Database=newrdadb_latest;User=root;Password=divine;Option=4;")	

	Set rs = Server.CreateObject ("ADODB.Recordset")
	rs.ActiveConnection = conDB

%>