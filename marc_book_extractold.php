<!Doctype html>
<html>

<?php  

//Dim myvalue, inputdata, dat1, dat2, dat3, i, x, d, last
//Dim sep1, filepath, bk, mf, txtstr1, txtstr2, txtstr3
//Dim aksession, DirArray(150), DirArray2(150), strArray(150), TitleStr(100)
//Dim marcRec, leader, directory, txtArray, dirTxt, txt11, marc_record

//If ($_POST['marc'] == "")
//{
//    echo "<center><h3 style='color: red;'>No MARC file entered into input box.</h3></center>";
//}
//else
//{
    
    $marcrec = file_get_contents("1.txt");
    //$marcrec = "01500cam a2200361 a 450000100070000000500170000700700110002400800410003501000170007604000270009308200170012008400190013710000210015624500980017725000130027526000660028830000280035433600390038233700330042133800320045450601720048653400750065854600250073358800800075865000480083865500170088665500290090370000810093274000450101385200340105890600250109295500210111767589220160712185108.0fb|a bnnnn830106s1982    enk           000 0 eng    a  2010993174  a DLC-B b eng c DLC-B00a 423.1 2 19  a BRA18770 2 z1 a Lloyd, Susan M.10a Roget's thesaurus of English words and phrases / c prepared by Susan M. Lloyd. h [braille]  a New ed.  a London : b Royal National Institute for the Blind, c 1982.  a 48 volumes of braille.  a tactile text b tct 2 rdacontent  a unmediated b n 2 rdamedia  a volume b nc 2 rdacarrier  a Availability restricted to persons meeting the eligibility requirements of the National Library Service for the Blind and Physically Handicapped, Library of Congress.  p Transcription of: c Harlow, Essex : Longman, 1982. z 9780582556355.  b Contracted braille.  a Description based on the print edition used for the braille transcription. 0a English language x Synonyms and antonyms. 4a Nonfiction. 7a Braille books. 2 lcgft1 a Roget, Peter Mark, d 1779-1869. t Thesaurus of English words and phrases.01a Thesaurus of English words and phrases.81a DLC-B c BRA18770 z NLS/BPH  a 7 b cbc c blndbks  a retrordapartial";
    
    //$_POST['marc'];
//}


$marcrec = str_replace("", "^", $marcrec); //field terminator
$marcrec = str_replace("", "#", $marcrec); //record terminator
$marcrec = str_replace("", "|", $marcrec); //delimeter

$m = strpos($marcrec, "^");
//$lead = strpos($marcrec, 24);
    
$dat1 = substr($marcrec, 1, $m-1);
$leader = substr($dat1, 0, 23);
$directory = substr($dat1, 23); 
$dirnum = strlen($directory) / 12;
$dat2 = substr($marcrec, $m + 1);

echo $dat1 . "<br />" . "<br />";
echo $leader. "<br />" . "<br />";
echo $directory. "<br />" . "<br />";  
echo $dirnum. "<br />" . "<br />";   
echo $dat2 . "<br /><br />";
    
$MyString1 = $directory;   
$MyArray1 = str_split($MyString1, 12);

	echo $MyArray1[0]. "<br />" . "<br />";
	echo $MyArray1[1]. "<br />" . "<br />";  
	echo $MyArray1[2]. "<br />" . "<br />";
	echo $MyArray1[3]. "<br />" . "<br />";  
	echo $MyArray1[4]. "<br />" . "<br />";
	echo $MyArray1[5]. "<br />" . "<br />";  
	echo $MyArray1[6]. "<br />" . "<br />";
	echo $MyArray1[7]. "<br />" . "<br />";  
	echo $MyArray1[8]. "<br />" . "<br />";
	echo $MyArray1[9]. "<br />" . "<br />";  
	echo $MyArray1[10]. "<br />" . "<br />";
	echo $MyArray1[11]. "<br />" . "<br />";  
	echo $MyArray1[12]. "<br />" . "<br />";
	echo $MyArray1[13]. "<br />" . "<br />";  
	echo $MyArray1[14]. "<br />" . "<br />";    
    
echo $tag[1] = substr($MyArray1[0], 0, 3). "<br />";
echo $tag[2] = substr($MyArray1[1], 0, 3). "<br />";   
echo $tag[3] = substr($MyArray1[2], 0, 3). "<br />";
echo $tag[4] = substr($MyArray1[3], 0, 3). "<br />";       
echo $tag[5] = substr($MyArray1[4], 0, 3). "<br />";
echo $tag[6] = substr($MyArray1[5], 0, 3). "<br />";   
echo $tag[7] = substr($MyArray1[6], 0, 3). "<br />";
echo $tag[8] = substr($MyArray1[7], 0, 3). "<br />";       
echo $tag[9] = substr($MyArray1[8], 0, 3). "<br />";
echo $tag[10] = substr($MyArray1[9], 0, 3). "<br />";   
echo $tag[11] = substr($MyArray1[10], 0, 3). "<br />";
echo $tag[12] = substr($MyArray1[11], 0, 3). "<br />";       
echo $tag[13] = substr($MyArray1[12], 0, 3). "<br />";
echo $tag[14] = substr($MyArray1[13], 0, 3). "<br />";   
echo $tag[15] = substr($MyArray1[14], 0, 3). "<br /><br />";
    
$MyString1 = $dat2;
$MyArray1 = explode("^", $MyString1);   
    
 	echo $MyArray1[0]. "<br />" . "<br />";
	echo $MyArray1[1]. "<br />" . "<br />";  
	echo $MyArray1[2]. "<br />" . "<br />";
	echo $MyArray1[3]. "<br />" . "<br />";  
	echo $MyArray1[4]. "<br />" . "<br />";
	echo $MyArray1[5]. "<br />" . "<br />";  
	echo $MyArray1[6]. "<br />" . "<br />";
	echo $MyArray1[7]. "<br />" . "<br />";  
	echo $MyArray1[8]. "<br />" . "<br />";
	echo $MyArray1[9]. "<br />" . "<br />";  
	echo $MyArray1[10]. "<br />" . "<br />";
	echo $MyArray1[11]. "<br />" . "<br />";  
	echo $MyArray1[12]. "<br />" . "<br />";
	echo $MyArray1[13]. "<br />" . "<br />";  
	echo $MyArray1[14]. "<br />" . "<br />";      
    
for ($x = 1; $x <= $dirnum; $x++) {
  echo $MyArray1[$x] . "The number is: $x <br>";
}    
                  
 ?>
    
