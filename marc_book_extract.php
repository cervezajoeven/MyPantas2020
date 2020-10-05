<!Doctype html>
<html>

<?php  

$marcrec = file_get_contents("1.txt");
//$marcrec = file_get_contents("export.txt");
    
$marcrec = str_replace("", "^", $marcrec); //field terminator
$marcrec = str_replace("", "#", $marcrec); //record terminator
$marcrec = str_replace("", "|", $marcrec); //delimeter

$m = strpos($marcrec, "^");

$dat1 = substr($marcrec, 1, $m-1);
$leader = substr($dat1, 0, 23);
$directory = substr($dat1, 23); 
$dirnum = strlen($directory) / 12;
$dat2 = substr($marcrec, $m + 1);

//echo $dat1 . "<br />" . "<br />";
//echo $leader. "<br />" . "<br />";
//echo $directory. "<br />" . "<br />";  
//echo $dirnum. "<br />" . "<br />";   
//echo $dat2 . "<br /><br />";
    
$MyString1 = $directory;   
$tagg = str_split($MyString1, 12);
 
$MyString1 = $dat2;
$MyArray1 = explode("^", $MyString1);   
    
for ($x = 1; $x <= $dirnum; $x++) {
  echo "<" . substr($tagg[$x], 0, 3) . ">" . substr($MyArray1[$x], 4) . "<br>";
}    
                  
?>
    
</html>