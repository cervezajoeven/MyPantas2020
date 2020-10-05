<?php



if ($button='export')
	{
	$ouput = $_GET['biblio'];	
	}



// Download the file

$filename =  "myFile.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;
	
?>
