 <!DECLARATION HTML>
 <html>
 <head>
 <link href="style.css" rel="stylesheet" type="text/css">
 </head>
<?php
/* NAVIGATION */
?>
<div id="nav">
	<ul class="top-nav" id="nav1">
	<li><a href="index.php">Home</a></li>
	<li class="level0"><a>Search Options</a>
		<div class="child">
		<ul>
		<li><a href="accession.php">Accession Number</a></li>
		<li><a href="title.php">Title</a></li>
		<li><a href="author.php">Author</a></li>
		<li><a href="subject.php">Subject</a></li>
		<li><a href="by_year.php">Copyright Year</a></li>
		<li><a href="advanced_search.php">Advanced Search</a></li>
		<li class="level1"><a href="#">Others</a>
				<div class="child1">
					<ul>
						<li><a href="viewStatus.php?status=E">Existing</li>
						<li><a href="viewStatus.php?status=L">Lost</li>
						<li><a href="viewStatus.php?status=R">Replacement</li>
					</ul>
		</li>
		</ul>
		</div>
	</li>
	<li class="level0"><a>Sections</a>
		<div class="child">
		<ul>
		<li><a href="section.php?section=filipiniana">Filipiniana</a></li>
		<li><a href="section.php?section=circulation">Circulation</a></li>
		<li><a href="section.php?section=feasibility">Feasibility</a></li>				
		<li><a href="section.php?section=magazine">Magazines</a></li>
		<li><a href="section.php?section=references">References</a></li>
		</ul>
		</div>
	</li>
	<li><a href="new.php">What's New</a></li>
	</ul>
	<?php include("app/design/search/quicksearhform.php"); ?>
</div>
</html>