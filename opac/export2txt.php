<?php
//$button = $_GET['button'];
if ($_GET['button']=='clear')
{
	//create a file handler by opening the file
	$myTextFileHandler = @fopen("textfile.txt","r+");

	//truncate the file to zero
	//or you could have used the write method and written nothing to it
	@ftruncate($myTextFileHandler, 0);
}

elseif ($_GET['button']=='save') 
{
	$file = 'textfile.txt';
	$biblio = $_GET['biblio'];
	// Open the file to get existing content
	$current = file_get_contents($file);
	// Append a new person to the file
	$current .= "$biblio <br /> \r\n \r\n";
	// Write the contents back to the file
	file_put_contents($file, $current);
}

elseif ($_GET['button']=='print') 
{
?>
	
	<html>
	<head>
	<title>Save text file output</title>
	</head>
	<body>
	<h1>Save text file output</h1>
	<?php
	$file = "textfile.txt";
	$f = fopen($file, "r");
	while ( $line = fgets($f, 1000) ) {
	print $line;
	}
	?>
	</body>
	</html>
<?PHP } ?>
