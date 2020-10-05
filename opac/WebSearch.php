<!DOCTYPE HTML>

<HEAD>

	<link href="css/stylistics.css" rel="stylesheet">
	<link href="css/display.css" rel="stylesheet">
	<link href="css/php_checkbox.css" rel="stylesheet">	
	
	<style type=text/css>
	{ 
	.body { display:none } 
	} 
	
	table.goback{
		border: 0;
	}
	
	td {

		vertical-align: middle;
		width: 50;
		background-color: #EAF2D3;
		color: black;
	}
	td.opac {
		background-color:#EAF2D3;
		color: blue;
		}
	
	}
		img.menu{
			display:inline-block;
			height:50px;
			margin: 0 auto;
	}	
		
		ul {
			float: left;
			width: 100%;
			padding: 0;
			margin: 0;
			list-style-type: none;

	}
	
	a.menu {
		float: middle;
		width: 10em;
		text-decoration: none;
		color: white;
		background-color: purple;
		padding: 0.2em 0.6em;
		border-right: 1px solid white;
		border-top-left-radius: 2em;
		border-top-right-radius: 2em;
	}

	a.menu:hover {
		background-color: fuchsia;
	}

	a {
		float: left;
		width: 10em;
		text-decoration: none;
		color: white;
		background-color: purple;
		padding: 0.2em 0.6em;
		border-right: 1px solid white;
	}

	a:hover {
		background-color: fuchsia;
	}
	

	li {
		display: inline;
	}	
	
	li.center{
		text-align: center
	}
	
	/*layout.php*/
	nav {
		line-height:30px;
		background-color:#EAF2D3;
		height:300px;
		width:200px;
		float:left;
		padding:5px;	      
		}

	nav#navright {
		line-height:30px;
		background-color:#EAF2D3;
		height:300px;
		width:200px;
		float:right;
		padding:5px;	      
	}

	section {
		width:850px;
		float:left;
		padding:10px;	 	 
	}
			 
	}
	footer {
		background-color:black;
		color:white;
		clear:both;
		text-align:center;
		padding:5px;	 	 
	}

	/*class*/	
	.tips {
	float: middle;
	margin: 5px;
	padding: 5px;
	width: 300px;
	height: 100%px;
	border: 1px solid green;
	}	
	</style>
	
	<TITLE>myPANTAS ONLINE SEARCH</TITLE>

	<script language="JavaScript" type="text/JavaScript">
		function checkscript() {
		var x=document.mySearch.Keyword1.value;
		if (x.indexOf(">")>=0 || x.indexOf("<")>=0 || x.indexOf("</")>=0) {
			alert("HTML/Javascript/ASPscript character is not allowed in keyword.\n");
			document.mySearch.Keyword1.focus();
			return false;
		}        
			if (!document.mySearch.Keyword1.value) {
				alert("The keyword textbox must not be blank. \n" + "* Please enter keyword(s) in the textbox. \n");
				document.mySearch.Keyword1.focus();
				return false;
			}
			return true;
		}
	 </script>
</HEAD>

<body>
	<?PHP require("navigation.php")?>
	<?PHP require("opac_header.php")?>

	<nav>
	Ask a librarian<br>
	Course tool<br>
	Venue reservation<br>
	Acquisition<br>
	Services<br>
	Special collection<br>
	Writing tools<br>
	</nav>
	
	<nav id="navright">
	E-Articles<br>
	E-Books<br>
	E-Journals<br>
	E-References<br>
	Digital resources<br>
	Online databases<br>
	Publication<br>
	</nav>

	<section>
		<marquee behavior="scroll" direction="right">
			<img src="cover/WhatHumanBeingFrierson2013.png" width="300" height="300" alt=""/> 
			<img src="cover/WholeGrainVeganBakingSteen2013.png" width="300" height="300" alt=""/> 
			<img src="cover/WhyArtPhotographySoutter2013.png" width="300" height="300" alt=""/> 
			<img src="cover/WhyGenesSelfishPeopleNiceTudge2013.png" width="300" height="300" alt=""/> 
			<img src="cover/WordWitnessVargas2013.png" width="300" height="300" alt=""/> 
			<img src="cover/WorkThroConfFolger2013.png" width="300" height="300" alt=""/>

			<img src="cover/WorldGreenestBuildingsYudelson2013.png" width="300" height="300" alt=""/> 
			<img src="cover/WorldReligionsMatthew2013.png" width="300" height="300" alt=""/> 
			<img src="cover/YoungDhildWittmer2013.png" width="300" height="300" alt=""/> 
			<img src="cover/YourUndergraduateDegreePsychologyHettich2014.png" width="300" height="300" alt=""/> 
			<img src="cover/WhatEnlFleischacker2013.png" width="300" height="300" alt=""/> 
			<img src="cover/WesterncivilizationBeyondBoundaries2014.png" width="300" height="300" alt=""/>
		</marquee>
	</section>

	<footer>
	<?PHP require("footer.php")?>
	</footer>
</body>
</html>

