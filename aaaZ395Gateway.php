
<HTML>
<HEAD>
<TITLE>Search Form for Z39.50 Servers</TITLE>
</HEAD>
<BODY>
<H2>Z39.50 Search Form (Stateless Gateway Software)</H2>
<P>
<form method=POST
action="//www.loc.gov/cgi-bin/zclient">
<b>First Record to View:</b> <input name="startrec" size=4 value=1>
<b>Maximum Records to Retrieve:</b> <input name="maxrecords" size=4 value=10>
<p>
<b>Address:</b><input name="host" value="lx2.loc.gov" size=30>
<b>Port:</b><input name="port" size=5 value=210>
<p>
<b>DatabaseName:</b><input name="dbname" value="LCDB" size=15>
    
    
<b>Record Syntax:</b><select name="rtype">
<option selected>USMARC
<option>SUTRS
<option>UNIMARC
<option>XML
</select>
<b>Element Set Name:</b><select name="esn">
<option selected>F
<option>B
<option>G
<option>M
</select>
<p>
<b>Enter Term 1:</b> <input name="term_term_1">
<select name="term_use_1">
<option selected>Personal Name
<option>Corporate Name
<option>Conference Name
<option>Title
<option>Series Title
<option>Uniform Title
<option>ISBN
<option>ISSN
<option>LC Control Number
<option>LC Call Number
<option>Dewey Classification
<option>UDC Classification
<option>Local Number
<option>Report Number
<option>Document ID
<option>Government Publication Number
<option>Local Classification
<option>National Bibliography Number
<option>Authority/Format Identifier
<option>Stock Number
<option>Subject
<option>Subject--MESH
<option>Subject--Local
<option>Date
<option>Date of Publication
<option>Music Publisher's Number
<option>Language Code
<option>Place of Publication
<option>Note
<option>Author-Title
<option>Name
<option>Author
<option>Author--Name Personal
<option>Author--Name Corporate
<option>Author--Name Conference
<option>Standard Identifier
<option>Subject Name--Personal
<option>Any
<option>Server Choice
<option>Publisher
<option>Abstract
<option>Record Source
<option>Distributor Name
</select>
<select name="term_struct_1">
<option selected>Word
<option>Phrase
<option>Word List
<option>Date
<option>Derived Key
</select>
<p>
<input TYPE="radio" name="operator_2" value="and" checked>AND
<input TYPE="radio" name="operator_2" value="or">OR
<input TYPE="radio" name="operator_2" value="andnot">AND NOT
<p>
<b>Enter Term 2:</b> <input name="term_term_2">
<select name="term_use_2">
<option selected>Personal Name
<option>Corporate Name
<option>Conference Name
<option>Title
<option>Series Title
<option>Uniform Title
<option>ISBN
<option>ISSN
<option>LC Control Number
<option>LC Call Number
<option>Local Number
<option>Subject
<option>Subject--Local
<option>Date of Publication
<option>Music Publisher's Number
<option>Language Code
<option>Place of Publication
<option>Note
<option>Author
<option>Author--Name Corporate
<option>Any
<option>Server Choice
<option>Abstract
<option>Record Source
<option>Distributor Name
</select>
<select name="term_struct_2">
<option selected>Word
<option>Phrase
<option>Word List
<option>Date
</select>
<p>
<input TYPE="radio" name="operator_3" value="and" checked>AND
<input TYPE="radio" name="operator_3" value="or">OR
<input TYPE="radio" name="operator_3" value="andnot">AND NOT
<p>
<b>Enter Term 3:</b> <input name="term_term_3">
<select name="term_use_3">
<option selected>Personal Name
<option>Corporate Name
<option>Conference Name
<option>Title
<option>Series Title
<option>Uniform Title
<option>ISBN
<option>ISSN
<option>LC Control Number
<option>LC Call Number
<option>Subject
<option>Subject--Local
<option>Date of Publication
<option>Music Publisher's Number
<option>Local Number
<option>Subject
<option>Subject--Local
<option>Date of Publication
<option>Language Code
<option>Place of Publication
<option>Note
<option>Author
<option>Author--Name Corporate
<option>Any
</select>
<select name="term_struct_3">
<option selected>Word
<option>Phrase
<option>Word List
<option>Date
</select>
<p>
<input TYPE="radio" name="operator_4" value="and" checked>AND
<input TYPE="radio" name="operator_4" value="or">OR
<input TYPE="radio" name="operator_4" value="andnot">AND NOT
<p>
<b>Enter Term 4:</b> <input name="term_term_4">
<select name="term_use_4">
<option selected>Personal name
<option>Corporate Name
<option>Conference Name
<option>Title
<option>Series Title
<option>Uniform Title
<option>ISBN
<option>ISSN
<option>LC Control Number
<option>LC Call Number
<option>Local Number
<option>Subject
<option>Date of Publication
<option>Music Publisher's Number
<option>Language Code
<option>Place of Publication
<option>Note
<option>Author
<option>Any
</select>
<select name="term_struct_4">
<option selected>Word
<option>Phrase
<option>Word List
<option>Date
</select>
<p>
<input type="submit" value="Submit Query">
<input type="reset" value="Clear Form"><p>
<HR>
<input name="attrset" type=hidden value=BIB1>
<input name="DisplayRecordSyntax" type=hidden value=HTML>
</form>

<img src="//www.loc.gov/global/yellowball.gif" ALT="[Yellow Ball]">Return
 to <A HREF="//www.loc.gov/z3950/gateway.html">Z39.50 Gateway</A><HR>
<script type='text/javascript' src='//cdn.loc.gov/js/global/metrics/sc/s_code.js'></script></body></HTML>