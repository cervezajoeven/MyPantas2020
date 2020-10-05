<head>
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
		
		a.linkage{
			background-color:#EAF2D3;			
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

	<TITLE>Library Media Center Web Retrieval System</TITLE>	
	
</head>

<header>
    <figure>
        <img src="images/banner.png" alt="Logo" class="menu" width="90%" height="130" align="center">
    </figure>
</header>
<div align="center">
<ul >
<li class="center" ><a href="websearch.php" class="menu">Home</a></li>
<li class="center"><a href="AdvanceSearch.php" class="menu">Advance search</a></li>
<li class="center"><a href="ArchiveSearch.php" class="menu">Archives</a></li>
<li class="center"><a href="MuseumSearch.php" class="menu">Museum</a></li>
<li class="center"><a href="Other_library.php" class="menu">Other catalogs</a></li>
<li class="center"><a href="#" class="menu">About</a></li>
</ul>
</div>