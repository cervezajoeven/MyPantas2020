<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Collection Management</a>
        </li>
    </ul>
</div>



<?php
//dim dy, mth, yr, dtoday, oras, sql2
//dim A,B,C,D,E,F,G,H,J,K,L,M,N,P,Q,R,S,T,U,V,Z
//dim d1,d2,d3,d4,d5,d6,d7,d8,d9,d0, total
$A=0;
$B=0;
$C=0;
$D=0;
$E=0;
$F=0;
$G=0;
$H=0;
$J=0;
$K=0;
$L=0;
$M=0;
$N=0;
$P=0;
$Q=0;
$R=0;
$S=0;
$T=0;
$U=0;
$V=0;
$Z=0;

$d1=0;
$d2=0;
$d3=0;
$d4=0;
$d5=0;
$d6=0;
$d7=0;
$d8=0;
$d9=0;
$d0=0;

//$c_type = session("c_type");

//$t_type = request("t_type");
?>

if request.form("submit") <> "" then
	session("taon") = Request("taon")
	session("item") = Request("item")
	session("keyword") = Request("keyword") 
	response.redirect "view_lc_list.asp"
	
elseif request.form("distribution") <> "" then
	if request("keyword") <> "" then
			keyword = trim(request("keyword"))
			set rs=conn.execute("select * from books where tm='book' and Maintext like '%" & keyword & "%'")
		else
			set rs=conn.execute("select * from books where tm='book'")
		end if

		if request("c_type") = "LC" then
			c_type = "LC"

			do while not rs.eof
				on error resume next
				MyString = Rs.fields("Maintext").value
				MyArray = Split(MyString,"")
				For L=0 to UBound(MyArray)
				MyArray(L) = trim(MyArray(L))
				Next

				callnumber = replace(MyArray(24), "<0025>", "")

				If UCase(Mid(callnumber, 1, 1)) = "A" Then
					A = A + 1
					Total = Total + 1
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "B" Then
					if rs.fields("Bio") <> 1 then
					   B = B + 1
					   Total = Total + 1
					end if
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "C" Then
					C = C + 1
					Total = Total + 1
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "D" Then
					D = D + 1
					Total = Total + 1
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "E" Then
					E = E + 1
					Total = Total + 1
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "F" Then
					if rs.fields("Fil") <> 1 or  rs.fields("Fic") <> 1 then
					   F = F + 1
					   Total = Total + 1
					end if
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "G" Then
					G = G + 1
					Total = Total + 1
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "H" Then
					H = H + 1
					Total = Total + 1
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "J" Then
					J = J + 1
					Total = Total + 1
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "K" Then
					K = K + 1
					Total = Total + 1
					
				ElseIf UCase(Mid(callnumber, 1, 1)) = "L" Then
					L = L + 1
					Total = Total + 1
				ElseIf UCase(Mid(callnumber, 1, 1)) = "M" Then
					M = M + 1
					Total = Total + 1
				
				ElseIf UCase(Mid(callnumber, 1, 1)) = "N" Then
					N = N + 1
					Total = Total + 1
				ElseIf UCase(Mid(callnumber, 1, 1)) = "P" Then
					P = P + 1
					Total = Total + 1
				ElseIf UCase(Mid(callnumber, 1, 1)) = "Q" Then
					Q = Q + 1
					Total = Total + 1
				ElseIf UCase(Mid(callnumber, 1, 1)) = "R" Then
					if rs.fields("Ref") <> 1 then
					   R = R + 1
					   Total = Total + 1
					end if
				ElseIf UCase(Mid(callnumber, 1, 1)) = "S" Then
					S = S + 1
					Total = Total + 1
				ElseIf UCase(Mid(callnumber, 1, 1)) = "T" Then
					T = T + 1
					Total = Total + 1
				ElseIf UCase(Mid(callnumber, 1, 1)) = "U" Then
					U = U + 1
					Total = Total + 1
				ElseIf UCase(Mid(callnumber, 1, 1)) = "V" Then
					V = V + 1
					Total = Total + 1
				ElseIf UCase(Mid(callnumber, 1, 1)) = "Z" Then
					Z = Z + 1
					Total = Total + 1
				end if
				rs.movenext
			loop

			rs.close
			set rs = nothing
			conn.close
			set conn = nothing

		Elseif request("c_type") = "DDC" then
			session("t_type") = "Distribution"
			session("c_tye") = "DDC"
			application("keyword") = trim(request("keyword"))
			response.redirect "report_ddc_distribution.asp"
	  
		end if

	Elseif c_type = "volume" then
		 total = ""

		 a = session("a")
		 b = session("b")
		 c = session("c")
		 d = session("d")
		 e = session("e")
		 f = session("f")
		 g = session("g")
		 h = session("h")
		 j = session("j")
		 k = session("k")
		 l = session("l")
		 m = session("m")
		 n = session("n")
		 p = session("p")
		 q = session("q")
		 r = session("r")
		 s = session("s")
		 t = session("t")
		 u = session("u")
		 v = session("v")
		 z = session("z")
		 total = session("total") 

	Elseif c_type = "percent" then
		 total = session("total")

		 a = session("a") / total * 100
		 'a = format(a, "##.##")

		 b = session("b") / total * 100
		 c = session("c") / total * 100
		 d = session("d") / total * 100
		 e = session("e") / total * 100
		 f = session("f") / total * 100
		 g = session("g") / total * 100
		 h = session("h") / total * 100
		 j = session("j") / total * 100
		 k = session("k") / total * 100
		 l = session("l") / total * 100
		 m = session("m") / total * 100
		 n = session("n") / total * 100
		 p = session("p") / total * 100
		 q = session("q") / total * 100
		 r = session("r") / total * 100
		 s = session("s") / total * 100
		 t = session("t") / total * 100
		 u = session("u") / total * 100
		 v = session("v") / total * 100
		 z = session("z") / total * 100
		 total = session("total") / total * 100 

	else
	  response.write "<center><b>No transaction has been selected.</b></center>"
	  response.end
	end if



        
?>


<form method="POST" action="lc_distribution_save.asp">
 
  <div align="center">

    <table border="1" cellpadding="1" cellspacing="1" width="70%" bgcolor = "#A7C942">

        <tr>

      <th colspan="4" align=center style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1"><font style="font-size: 14pt; color: #FFFFFF; font-weight: bold; face: calibri" >LC Collection Distribution</font></th>
        </tr>

	<tr>
	    <th class="columnheader"> A - General works:</th>
	    <td><input type="text" name="A" size="10" value="<%=A%>" style="width:200px;"></td>
	    <th class="columnheader"> B - Philosophy-Psychology:</th>
	    <td><input type="text" name="B" size="10" value="<%=B%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> C - Auxiliary Science of History:</th>
	    <td><input type="text" name="C" size="10" value="<%=C%>" style="width:200px;"></td>
	    <th class="columnheader"> D - History, General:</th>
	    <td><input type="text" name="D" size="10" value="<%=D%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> E - History, America:</th>
	    <td><input type="text" name="E" size="10" value="<%=E%>" style="width:200px;"></td>
	    <th class="columnheader"> F - History, Western Hemisphere:</th>
	    <td><input type="text" name="F" size="10" value="<%=F%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> G - Geography:</th>
	    <td><input type="text" name="G" size="10" value="<%=G%>" style="width:200px;"></td>
	    <th class="columnheader"> H - Social Science:</th>
	    <td><input type="text" name="H" size="10" value="<%=H%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> J - Political Science:</th>
	    <td><input type="text" name="J" size="10" value="<%=J%>" style="width:200px;"></td>
	    <th class="columnheader"> K - Law:</th>
	    <td><input type="text" name="K" size="10" value="<%=K%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> L - Education:</th>
	    <td><input type="text" name="L" size="10" value="<%=L%>" style="width:200px;"></td>
	    <th class="columnheader"> M - Music:</th>
	    <td><input type="text" name="M" size="10" value="<%=M%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> N - Fine Arts:</th>
	    <td><input type="text" name="N" size="10" value="<%=N%>" style="width:200px;"></td>
	    <th class="columnheader"> P - Language and Literature:</th>
	    <td><input type="text" name="P" size="10" value="<%=P%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> Q - Science:</th>
	    <td><input type="text" name="Q" size="10" value="<%=Q%>" style="width:200px;"></td>
	    <th class="columnheader"> R - Medicine:</th>
	    <td><input type="text" name="R" size="10" value="<%=R%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> S - Agriculture:</th>
	    <td><input type="text" name="S" size="10" value="<%=S%>" style="width:200px;"></td>
	    <th class="columnheader"> T - Technology and Engineering:</th>
	    <td><input type="text" name="T" size="10" value="<%=T%>" style="width:200px;"></td>
	</tr>


	<tr>
	    <th class="columnheader"> U - Military Science:</th>
	    <td><input type="text" name="U" size="10" value="<%=U%>" style="width:200px;"></td>
	    <th class="columnheader"> V - Naval Science:</th>
	    <td><input type="text" name="V" size="10" value="<%=V%>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> Z - Library Science:</th>
	    <td><input type="text" name="Z" size="10" value="<%=Z%>" style="width:200px;"></td>
	    <th class="columnheader"> Total:</th>
	    <td><input type="text" name="Total" size="10" value="<%=Total%>" style="width:200px;"></td>
	</tr>


            <input type=hidden name="ID" value="<%=ID%>">


      <tr>
        <td colspan="4" align = "center">
            <input type="radio" name="t_type" value="1" checked>Save
            <input type="radio" name="t_type" value="2">Volume
            <input type="radio" name="t_type" value="3">Volume in %
            <input type="radio" name="t_type" value="4">Title in %
            <input type="radio" name="t_type" value="5">CSV</font></td>
	</tr>

	<tr>
         <td colspan="4" align = "center"><input type="Submit" value="Submit" name="submit"></font></td>
      </tr>

    </table>
    </center>
  </div>
  
</form>

</body>
</html>