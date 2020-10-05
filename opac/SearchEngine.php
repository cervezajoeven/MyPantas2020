<?php
//<!-- #INCLUDE FILE="connect.php" -->
require_once("connect.php");
//$keyword = $_POST['txtKeyword'];


// This first query is just to get the total count of rows
//sql = "SELECT COUNT(bkid) FROM books WHERE tm='book'";
//$sql = "SELECT count(bkid) FROM books WHERE maintext LIKE '%$keyword%' AND tm='$mtype'";


    
$button = $_GET ['submit'];
$search = $_GET ['search']; 
$mtype = $_GET['mtype'];
  
if(strlen($search)<=1)
	echo "Search term too short<center>";
else{
	echo "<center>You searched for <b>$search</b> <hr size='1'></br>";

//mysql_connect("localhost","root","divinity");
//mysql_select_db("rdadb");
    
$search_exploded = explode (" ", $search);
 
$x = "";
$construct = "";  
    
foreach($search_exploded as $search_each)
{
$x++;
if($x==1)
	$construct .="maintext LIKE '%$search_each%'";
else
	$construct .="AND maintext LIKE '%$search_each%'";
    
}
  
$constructs ="SELECT * FROM books WHERE tm='$mtype' AND $construct";
$run = mysql_query($constructs);
    
$foundnum = mysql_num_rows($run);
    
if ($foundnum==0)
	echo "Sorry, there are no matching result for <b>$search</b>.</br></br>1. 
	Try more general words. for example: If you want to search 'how to create a website'
	then use general keyword like 'create' 'website'</br>2. Try different words with similar
	 meaning</br>3. Please check your spelling";
	 
else{ 
  
	echo "$foundnum results found !<center><p>";
	  
	$per_page = 10;
	$start = isset($_GET['start']) ? $_GET['start']: '';
	$max_pages = ceil($foundnum / $per_page);
	if(!$start)
	$start=0; 

	$getquery = mysql_query("SELECT * FROM books WHERE tm='$mtype' AND $construct LIMIT $start, $per_page");

	echo "<table width='800' border='1' align='center'><tr><th width='10' align='center'>Title</th><th width='50' align='center'>Type</th><th width='10' align='center'>Copy</th></tr>";

	while($runrows = mysql_fetch_assoc($getquery))
	{
	$title = $runrows['title'];
	$desc = $runrows['tm'];
	$copy = $runrows['copy'];
	$bkid = $runrows['bkid'];
	echo "<tr>
			<td><a href='display_Book.php?bkid=$bkid'> <b>$title</b></a></td>
			<td>$desc</td>
			<td><a href='$url'>$copy</a></td>
		 </tr>";
	}
	echo "</table>";

	//$id = $row["bkid"];
	//$title = $row["title"];
	//$tm = $row["tm"];

	//$list .= '<p><tr><td><a href=view_details.php?bkid='.$id.'>'.$title . '</a></td><td width="10" align="center"> ' .$tm. '</td></tr></p>';
	
//Pagination Starts
echo "<center>";
  
$prev = $start - $per_page;
$next = $start + $per_page;
                       
$adjacents = 3;
$last = $max_pages - 1;
  
if($max_pages > 1)
{   
//previous button
if (!($start<=0)) 
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$prev'>Prev</a> ";    
          
//pages 
if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
{
$i = 0;   
for ($counter = 1; $counter <= $max_pages; $counter++)
{
if ($i == $start){
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
}  
$i = $i + $per_page;                 
}
}
elseif($max_pages > 5 + ($adjacents * 2))    //enough pages to hide some
{
//close to beginning; only hide later pages
if(($start/$per_page) < 1 + ($adjacents * 2))        
{
$i = 0;
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($i == $start){
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
} 
$i = $i + $per_page;                                       
}
                          
}
//in middle; hide some front and some back
elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
{
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=0'>1</a> ";
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$per_page'>2</a> .... ";
 
$i = $start;                 
for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
{
if ($i == $start){
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
}   
$i = $i + $per_page;                
}
                                  
}
//close to end; only hide early pages
else
{
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=0'>1</a> ";
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$per_page'>2</a> .... ";
 
$i = $start;                
for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
{
if ($i == $start){
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$i'>$counter</a> ";   
} 
$i = $i + $per_page;              
}
}
}
          
//next button
if (!($start >=$foundnum-$per_page))
echo " <a href='SearchEngine.php?mtype=$mtype&search=$search&submit=Search+source+code&start=$next'>Next</a> ";    
}   
echo "</center>";
} 
} 
?>