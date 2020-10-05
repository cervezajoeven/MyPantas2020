<!DOCTYPE html>
<html>
<!--
<%@ LANGUAGE="VBSCRIPT" %>
-->

<!-- #include file="../includes/redirect.asp" -->
<!--#include file="../includes/connObjTop.asp"-->

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagemaster V.7.0</title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <script src="./js/jquery-1.8.2.min.js"></script>

</head>

<body >
	
<!--<% 
'Dim MyString1, MyArray1, textstr, titulo, author, description, cnumber, subjstr
Dim TitleStr(100), username

username = Session("username")

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
%>
-->

    <div class="container">
		<h5>ADD BOOK CATALOGUE RECORD</h5>
    	<div class="starter">
    		<div class="row">
    			<div class="col-sm-6">
		    	    <h1></h1>
			        <div class="modal-body">
		    			<form role="form" id="db-form" name="db-form" method="post" action="book_insert.php">
		    				<div class="form-group-attached">
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Title proper</label>
	    								<input type="text" name="str0" id="title" class="form-control" placeholder="title" value="" required>
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Statement of responsibility</label>
	    								<input type="text" name="str1" id="responsibility" class="form-control" placeholder="statement of responsibility" value="" >
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Parallel title</label>
	    								<input type="text" name="str2" id="parallel_title" class="form-control" placeholder="parallel title" value=""" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Preferred title</label>
	    								<input type="text" name="str36" id="preferred_title" class="form-control" placeholder="preferred title" value="" >
	    							</div>
		    					</div>	
								
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Main creator</label>
	    								<input type="text" name="str3" id="main_creator" class="form-control" placeholder="main creator" value="" >
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Other creator</label>
	    								<input type="text" name="str5" id="other_creator" class="form-control" placeholder="other creator" value="" >
	    							</div>
		    					</div>		
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Contributor</label>
	    								<input type="text" name="str6" id="contributor" class="form-control" placeholder="contributor" value="" >
	    							</div>
		    					</div>	
			    				<div class="row">
	    							<div class="form-group">
	    								<label>Corporate body</label>
	    								<input type="text" name="str7" id="corporate_body" class="form-control" placeholder="corporate_body" value="" >
	    							</div>
		    					</div>								
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Place of publication</label>
	    								<input type="text" name="str8" id="place_of_publication" class="form-control" placeholder="place of publication" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Publisher</label>
	    								<input type="text" name="str9" id="publisher" class="form-control" placeholder="publisher" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Date of publication</label>
	    								<input type="text" name="str10" id="place_of_publication" class="form-control" placeholder="other creator" value="" >
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Edition statement</label>
	    								<input type="text" name="str11" id="edition" class="form-control" placeholder="edition" value="" >
	    							</div>
		    					</div>			    				
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Extent of text</label>
	    								<input type="text" name="str12" id="extent_of_text" class="form-control" placeholder="extent of text" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Illustrative content</label>
	    								<input type="text" name="str13" id="illustrative_content" class="form-control" placeholder="illustrative content" value="" >
	    							</div>
		    					</div>	
						    	<div class="row">
	    							<div class="form-group">
	    								<label>Dimension</label>
	    								<input type="text" name="str14" id="dimension" class="form-control" placeholder="dimension" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Accompanying material</label>
	    								<input type="text" name="str15" id="accompanying_material" class="form-control" placeholder="accompanying material" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Series title</label>
	    								<input type="text" name="str16" id="series" class="form-control" placeholder="series title" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Notes and supplementary content</label>
	    								<input type="text" name="str17" id="notes" class="form-control" placeholder="notes and supplementary content" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>ISBN / Identifier for the manifestation</label>
	    								<input type="text" name="str18" id="isbn" class="form-control" placeholder="ISBN / Identifier for the manifestation" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Content type</label>
	    								<input type="text" name="str38" id="content_type" class="form-control" placeholder="content type" value="text" >
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Media type</label>
	    								<input type="text" name="str39" id="media_type" class="form-control" placeholder="media type" value="unmediated" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Carrier type</label>
	    								<input type="text" name="str40" id="carrier_type" class="form-control" placeholder="carrier type" value="volume" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Uniform Resource Locator (URL)</label>
	    								<input type="text" name="str37" id="url" class="form-control" placeholder="url" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Access point - topical</label>
	    								<input type="text" name="str19" id="topical" class="form-control" placeholder="topical" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Access point - personal</label>
	    								<input type="text" name="str20" id="personal" class="form-control" placeholder="personal" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Access point - corporate</label>
	    								<input type="text" name="str21" id="ap_corporate" class="form-control" placeholder="corporate" value="" >
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Access point - geographical</label>
	    								<input type="text" name="str22" id="geographical" class="form-control" placeholder="geographical" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Prefix</label>
									   <SELECT NAME="str23" name="prefix" id="prefix" class="form-control">
											<OPTION> </Option>
											<!-- #INCLUDE FILE="../includes/prefix.inc" -->
										</SELECT>										
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Call number</label>
	    								<input type="text" name="str24" id="call_number" class="form-control" placeholder="call number" value="" >
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Accession number</label>
	    								<input type="text" name="str25" id="accession" class="form-control" placeholder="accession" value="" >
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Language of text</label>
	    								<input type="text" name="str26" id="language" class="form-control" placeholder="language" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Library/Location</label>
	    								<input type="text" name="str27" id="location" class="form-control" placeholder="library or location" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Electronic access</label>
	    								<input type="text" name="str28" id="electronic_access" class="form-control" placeholder="electronic access" value="" >
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Cover image</label>
	    								<input type="text" name="str41" id="cover" class="form-control" placeholder="cover" value="" >
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Circulation type</label><br />
									   <input type="checkbox" name="gc"  value="gc"  >General circulation
									   <input type="checkbox" name="tref"  value="tref" >Teacher reference
									   <input type="checkbox" name="fr"  value="fr" >Filipiniana/Reference<br />
									   <input type="checkbox" name="circ"  value="circ" >Circulation
									   <input type="checkbox" name="ref"  value="ref" >Reference
									   <input type="checkbox" name="fil"  value="fil" >Filipiniana 
									   <input type="checkbox" name="sp"  value="sp" >Special collection<br />
									   <input type="checkbox" name="bio"  value="bio" >Biography
									   <input type="checkbox" name="res"  value="res" >Reserve
									   <input type="checkbox" name="schl"  value="schl" >Scholastic
									   <input type="checkbox" name="easy"  value="easy" >Easy
									   <input type="checkbox" name="fic"  value="fic" >Fiction											
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Content notes</label>
	    								<textarea name="str32" class="form-control" rows="5" ></textarea>
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Abstract/Summary</label>
	    								<textarea name="str33" class="form-control" rows="5" ></textarea>
	    							</div>
		    					</div>									
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Review</label>
	    								<textarea name="str34" class="form-control" rows="5" ></textarea>
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Volume/Copy</label>
	    								<input type="text" name="str29" id="vol_copy" class="form-control" placeholder="" value="1" required>
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>On-shelf</label>
	    								<input type="text" name="str30" id="on_shelf" class="form-control" placeholder="" value="1" required>
	    							</div>
		    					</div>								
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Out</label>
	    								<input type="text" name="str31" id="t_out" class="form-control" placeholder="" value="0" required>
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Number of times borrowed</label>
	    								<input type="text" name="str35" id="t_timesout" class="form-control" placeholder="" value="0" required>
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Entered by</label>
	    								<input type="text" name="strEnterby" id="strEnterby" class="form-control" placeholder="entered by" value="<%=username%>">
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Updated by</label>
	    								<input type="text" name="strUpdateby" id="strUpdateby" class="form-control" placeholder="updated by" value="<%=username%>">
	    							</div>
		    					</div>	
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Date entered</label>
	    								<input type="text" name="strDateEnter" id="strDateEnter" class="form-control" placeholder="date entered" value="<%=somedatetimestamp%>">
	    							</div>
		    					</div>
		    					<div class="row">
	    							<div class="form-group">
	    								<label>Date updated</label>
	    								<input type="text" name="strDateUpdate" id="strDateUpdate" class="form-control" placeholder="date updated" value="<%=somedatetimestamp%>">
	    							</div>
		    					</div>								
							</div>
							
		    				<div class="row">
		    					<div class="form-group">
		    						<input type="hidden" name="id" id="id" value="<%=id%>">
		    						<button type="submit" class="btn btn-warning">Save</button>
		    						<a href="book_index.php" class="btn btn-info" data-dismiss="modal">Cancel</a>
		    					</div>
		    				</div>
		    			</form>	    
		    		</div>
		    	</div>
		    </div>
    	</div>	  
    </div><!-- /.container --> 
	

</body>
</html>