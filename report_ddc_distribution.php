<?php 
include('header.php'); 
ini_set("memory_limit","1024M");
?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">CLASS ITEM LIST</a>
        </li>
    </ul>
</div>

<br />
    <table style="text-align: center">
    	<tr>
			<td><a class="btn btn-primary" href="javascript:history.back()" class="card"><i class="glyphicon glyphicon-hand-left icon-yellow"> Back</i></a></td>
    	</tr>
	</table>
<br />

<?php
$d1=0;
$d2=0;
$d3=0;
$d4=0;
$d5=0;
$d6=0;
$d7=0;
$d8=0;
$d9=0;
$d0=0;
$total = 0;
$total_volume = 0;     

if (isset($_POST['ddc_submit'])){

    if (isset($_POST['ddc_type'])) {
        $ddc_type=$_POST['ddc_type'];

            $result = $sLink->query("select * from books where tm='book'");     
            $num_rows = $result->rowCount();
        
            while ($row = $result->fetch() ){ 
                unset($num);
                $volume = intval($row['copy']);               
                $MyString1 = $row['maintext'];
                $MyArray1 = explode("", $MyString1);
                $callnumber = str_replace("<0025>", "", $MyArray1[24]);     
                $total_volume = $total_volume + $volume;                
                //$num_rows++;
                $num = substr("$callnumber",0,1);
                
                switch ($num) {
                    case "0":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d0++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d0 += intval($volume);
                            $total += intval($volume);
                        }                       
                        break;
                    case "1":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d1++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d1 = $d1 + $volume;
                            $total += $volume;
                        }                       
                        break;
                    case "2":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d2++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d2 = $d2 + $volume;
                            $total = $total + $volume;
                        }
                        break;
                      case "3":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d3++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d3 = $d3 + $volume;
                            $total = $total + $volume;
                        }
                        break;  
                      case "4":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d4++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d4 = $d4 + $volume;
                            $total = $total + $volume;
                        }
                        break;     
                     case "5":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d5++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d5 = $d5 + $volume;
                            $total = $total + $volume;
                        }
                        break;
                    case "6":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d6++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d6 = $d6 + $volume;
                            $total = $total + $volume;
                        }
                        break;   
                    case "7":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d7++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d7 = $d7 + $volume;
                            $total = $total + $volume;
                        }
                        break;   
                    case "8":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d8++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d8 = $d8 + $volume;
                            $total = $total + $volume;
                        }
                        break;  
                    case "9":
                        if ($ddc_type == "3" or $ddc_type == "4"){
                            $d9++;
                            $total++;                       
                        }
                        elseif ($ddc_type == "1" or $ddc_type == "2") {
                            $d9 = $d9 + $volume;
                            $total = $total + $volume;
                        }
                        break;                       
                        
                }              
                
            }
        }
    
        if ($ddc_type == "4") {
            $d0 = round($d0 / $num_rows * 100,2);    
            $d1 = round($d1 / $num_rows * 100,2);
            $d2 = round($d2 / $num_rows * 100,2);    
            $d3 = round($d3 / $num_rows * 100,2);
            $d4 = round($d4 / $num_rows * 100,2);    
            $d5 = round($d5 / $num_rows * 100,2);
            $d6 = round($d6 / $num_rows * 100,2);    
            $d7 = round($d7 / $num_rows * 100,2);
            $d8 = round($d8 / $num_rows * 100,2);    
            $d9 = round($d9 / $num_rows * 100,2);

            $total = $d0 + $d1 + $d2 + $d3 + $d4 + $d5 + $d6 + $d7 + $d8 + $d9;

        }                        

        if ($ddc_type == "2") {
            $d0 = round($d0 / $total_volume * 100,2);    
            $d1 = round($d1 / $total_volume * 100,2);
            $d2 = round($d2 / $total_volume * 100,2);    
            $d3 = round($d3 / $total_volume * 100,2);
            $d4 = round($d4 / $total_volume * 100,2);    
            $d5 = round($d5 / $total_volume * 100,2);
            $d6 = round($d6 / $total_volume * 100,2);    
            $d7 = round($d7 / $total_volume * 100,2);
            $d8 = round($d8 / $total_volume * 100,2);    
            $d9 = round($d9 / $total_volume * 100,2);

            $total = $d0 + $d1 + $d2 + $d3 + $d4 + $d5 + $d6 + $d7 + $d8 + $d9;

        }     
       
}

elseif (isset($_POST['lc_submit'])){
    $aa=0;
    $bb=0;
    $cc=0;
    $dd=0;
    $ee=0;
    $ff=0;
    $gg=0;
    $hh=0;
    $jj=0;
    $kk=0;
    $ll=0;
    $mm=0;
    $nn=0;
    $pp=0;
    $qq=0;
    $rr=0;
    $ss=0;
    $tt=0;
    $uu=0;
    $vv=0;
    $zz=0;    
    
    $total = 0;
    $total_volume = 0;  
    
     if (isset($_POST['lc_type'])) {
        $lc_type=$_POST['lc_type'];

            $result = $sLink->query("select * from books where tm='book'");     
            $num_rows = $result->rowCount();
        
            while ($row = $result->fetch() ){ 
                unset($num);
                $volume = intval($row['copy']);               
                $MyString1 = $row['maintext'];
                $MyArray1 = explode("", $MyString1);
                $callnumber = str_replace("<0025>", "", $MyArray1[24]);     
                $total_volume = $total_volume + $volume;                
                //$num_rows++;
                $num = substr("$callnumber",0,1);
                
                switch ($num) {
                    case "A":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $aa++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $aa += intval($volume);
                            $total += intval($volume);
                        }                       
                        break;
                    case "B":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $bb++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $bb = $bb + $volume;
                            $total += $volume;
                        }                       
                        break;
                    case "C":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $cc++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $cc = $cc + $volume;
                            $total = $total + $volume;
                        }
                        break;
                      case "D":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $dd++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $dd = $dd + $volume;
                            $total = $total + $volume;
                        }
                        break;  
                      case "E":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $ee++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $ee = $ee + $volume;
                            $total = $total + $volume;
                        }
                        break;     
                     case "F":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $ff++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $ff = $ff + $volume;
                            $total = $total + $volume;
                        }
                        break;
                    case "G":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $gg++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $gg = $gg + $volume;
                            $total = $total + $volume;
                        }
                        break;   
                    case "H":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $hh++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $hh = $hh + $volume;
                            $total = $total + $volume;
                        }
                        break;   
                    case "J":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $jj++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $jj = $jj + $volume;
                            $total = $total + $volume;
                        }
                        break;  
                    case "K":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $kk++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $kk = $kk + $volume;
                            $total = $total + $volume;
                        }
                        break;   
                        
                    case "L":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $ll++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $ll = $ll + $volume;
                            $total = $total + $volume;
                        }
                        break;
                        
                      case "M":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $mm++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $mm = $mm + $volume;
                            $total = $total + $volume;
                        }
                        break;   
                        
                     case "N":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $nn++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $nn = $nn + $volume;
                            $total = $total + $volume;
                        }
                        break;  
                        
                    case "P":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $pp++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $pp = $pp + $volume;
                            $total = $total + $volume;
                        }
                        break;       
                        
                      case "Q":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $qq++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $qq = $qq + $volume;
                            $total = $total + $volume;
                        }
                        break;                        
                        
                      case "R":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $rr++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $rr = $rr + $volume;
                            $total = $total + $volume;
                        }
                        break;      
                        
                     case "S":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $ss++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $ss = $ss + $volume;
                            $total = $total + $volume;
                        }
                        break;    
                        
                     case "T":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $tt++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $tt = $tt + $volume;
                            $total = $total + $volume;
                        }
                        break;       
                        
                     case "U":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $uu++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $uu = $uu + $volume;
                            $total = $total + $volume;
                        }
                        break;
                        
                     case "V":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $vv++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $vv = $vv + $volume;
                            $total = $total + $volume;
                        }
                        break;       
                        
                       case "Z":
                        if ($lc_type == "3" or $lc_type == "4"){
                            $zz++;
                            $total++;                       
                        }
                        elseif ($lc_type == "1" or $lc_type == "2") {
                            $zz = $zz + $volume;
                            $total = $total + $volume;
                        }
                        break;                       
                        
                        
                }              
                
            }
        }
    
        if ($lc_type == "4") {
            
            $aa=round($aa / $num_rows * 100,2);
            $bb=round($bb / $num_rows * 100,2);
            $cc=round($cc / $num_rows * 100,2);
            $dd=round($dd / $num_rows * 100,2);
            $ee=round($ee / $num_rows * 100,2);
            $ff=round($ff / $num_rows * 100,2);
            $gg=round($gg / $num_rows * 100,2);
            $hh=round($hh / $num_rows * 100,2);
            $jj=round($jj / $num_rows * 100,2);
            $kk=round($kk / $num_rows * 100,2);
            $ll=round($ll / $num_rows * 100,2);
            $mm=round($mm / $num_rows * 100,2);
            $nn=round($nn / $num_rows * 100,2);
            $pp=round($pp / $num_rows * 100,2);            
            $qq=round($qq / $num_rows * 100,2);
            $rr=round($rr / $num_rows * 100,2);
            $ss=round($ss / $num_rows * 100,2);
            $tt=round($tt / $num_rows * 100,2);
            $uu=round($uu / $num_rows * 100,2);
            $vv=round($vv / $num_rows * 100,2);
            $zz=round($zz / $num_rows * 100,2);     

            $total = $aa + $bb + $cc + $dd + $ee + $ff + $gg + $hh + $jj + $kk + $ll + $mm + $nn + $pp + $qq + $rr + $ss + $tt + $uu + $vv + $zz;        

        }                        

        if ($lc_type == "2") {
            
            $aa=round($aa / $total_volume * 100,2);
            $bb=round($bb / $total_volume * 100,2);
            $cc=round($cc / $total_volume * 100,2);
            $dd=round($dd / $total_volume * 100,2);
            $ee=round($ee / $total_volume * 100,2);
            $ff=round($ff / $total_volume * 100,2);
            $gg=round($gg / $total_volume * 100,2);
            $hh=round($hh / $total_volume * 100,2);
            $jj=round($jj / $total_volume * 100,2);
            $kk=round($kk / $total_volume * 100,2);
            $ll=round($ll / $total_volume * 100,2);
            $mm=round($mm / $total_volume * 100,2);
            $nn=round($nn / $total_volume * 100,2);
            $pp=round($pp / $total_volume * 100,2);         
            $qq=round($qq / $total_volume * 100,2);
            $rr=round($rr / $total_volume * 100,2);
            $ss=round($ss / $total_volume * 100,2);
            $tt=round($tt / $total_volume * 100,2);
            $uu=round($uu / $total_volume * 100,2);
            $vv=round($vv / $total_volume * 100,2);
            $zz=round($zz / $total_volume * 100,2);     

            $total = $aa + $bb + $cc + $dd + $ee + $ff + $gg + $hh + $jj + $kk + $ll + $mm + $nn + $pp + $qq + $rr + $ss + $tt + $uu + $vv + $zz;              

        }        
    
    

}

if (isset($_POST['ddc_submit'])){
    
//Now that we've created such a nice heading for our html table, lets create a heading for our csv table
    $csv_hdr = "000, 100, 200, 300, 400, 500, 600, 700, 800, 900, Total";

     //Quickly create a variable for our output that'll go into the CSV file (we'll make it blank to start).
    $csv_output=$d0 . ',' . $d1 . ',' . $d2 . ',' . $d3 . ',' . $d4 . ',' . $d5 . ',' . $d6 . ',' . $d7 . ',' . $d8 . ',' . $d9 . ',' . $total;

?>

<form name="export" action="export.php" method="post">

  <div style="text-align:center;">

    
    <table border="1" cellpadding="1" cellspacing="1" width="70%" bgcolor = "#A7C942" align="center">

        <tr>
      <th colspan="4"  style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1"><font style="font-size: 14pt; color: #FFFFFF; font-weight: bold; face: calibri" >DDC COLLECTION DISTRIBUTION</font></th>

        </tr>
        
	<tr>
	    <th class="columnheader"> 000 - Generalities</th>
	    <td><input type="text" name="D0" size="10" value="<?php echo $d0; ?>" style="width:200px;"></td>
       
	    <th class="columnheader"> 100 - Philosophy</th>
	    <td><input type="text" name="D1" size="10" value="<?php echo $d1; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> 200 - Religion</th>
	    <td><input type="text" name="D2" size="10" value="<?php echo $d2; ?>" style="width:200px;"></td>
	    <th class="columnheader"> 300 - Social sciences</th>
	    <td><input type="text" name="D3" size="10" value="<?php echo $d3; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> 400 - Language</th>
	    <td><input type="text" name="D4" size="10" value="<?php echo $d4; ?>" style="width:200px;"></td>
	    <th class="columnheader"> 500 - Natural sciences and Math</th>
	    <td><input type="text" name="D5" size="10" value="<?php echo $d5; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> 600 - Technology</th>
	    <td><input type="text" name="D6" size="10" value="<?php echo $d6; ?>" style="width:200px;"></td>
	    <th class="columnheader"> 700 - Fine Arts</th>
	    <td><input type="text" name="D7" size="10" value="<?php echo $d7; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> 800 - Literature</th>
	    <td><input type="text" name="D8" size="10" value="<?php echo $d8; ?>" style="width:200px;"></td>
	    <th class="columnheader"> 900 - Geography and History</th>
	    <td><input type="text" name="D9" size="10" value="<?php echo $d9; ?>" style="width:200px;"></td>
	</tr>
	
	<tr>
        <td colspan="4" style="text-align: center;"> <b>Total:</b> <input type="text" name="total" size="10" font size = "4" value="<?php echo $total; ?>" style="width:200px;"></td>
	</tr>
        
     <input type="hidden" value="<? echo $csv_hdr; ?>" name="csv_hdr">
    <input type="hidden" value="<? echo $csv_output; ?>" name="csv_output">     
        
     <tr >
        <td colspan="4" style="text-align: center;">
            <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok-sign"></i> Convert to CSV</button>
         </td >
	</tr>
  

    </table>
  </div>
</form>

<?php }  


elseif (isset($_POST['lc_submit'])){
    
    $csv_hdr = "A, B, C, D, E, F, G, H, J, K, L, M, N, P, Q, R, S, T, U, V, Z, Total";

     //Quickly create a variable for our output that'll go into the CSV file (we'll make it blank to start).
    $csv_output=$aa . ',' . $bb . ',' . $cc . ',' . $dd . ',' . $ee . ',' . $ff . ',' . $gg . ',' . $hh . ',' . $jj . ',' . $kk . ',' . $ll . ',' . $mm . ',' . $nn . ',' . $pp . ',' . $qq . ',' . $rr . ',' . $ss . ',' . $tt . ',' . $uu . ',' . $vv . ',' . $zz . ',' . $total;
    
?>

 <form name="export" action="export.php" method="post">   

  <div align="center">

    <table border="1" cellpadding="1" cellspacing="1" width="70%" bgcolor = "#A7C942">

        <tr>

      <th colspan="4" align=center style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1"><font style="font-size: 14pt; color: #FFFFFF; font-weight: bold; face: calibri" >LC COLLECTION DISTRIBUTION</font></th>
        </tr>

	<tr>
	    <th class="columnheader"> A - General works</th>
	    <td><input type="text" name="A" size="10" value="<?php echo $aa; ?>" style="width:200px;"></td>
	    <th class="columnheader"> B - Philosophy-Psychology</th>
	    <td><input type="text" name="B" size="10" value="<?php echo $bb; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> C - Auxiliary Science of History</th>
	    <td><input type="text" name="C" size="10" value="<?php echo $cc; ?>" style="width:200px;"></td>
	    <th class="columnheader"> D - History, General</th>
	    <td><input type="text" name="D" size="10" value="<?php echo $dd; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> E - History, America</th>
	    <td><input type="text" name="E" size="10" value="<?php echo $ee; ?>" style="width:200px;"></td>
	    <th class="columnheader"> F - History, Western Hemisphere</th>
	    <td><input type="text" name="F" size="10" value="<?php echo $ff; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> G - Geography</th>
	    <td><input type="text" name="G" size="10" value="<?php echo $gg; ?>" style="width:200px;"></td>
	    <th class="columnheader"> H - Social Science</th>
	    <td><input type="text" name="H" size="10" value="<?php echo $hh; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> J - Political Science</th>
	    <td><input type="text" name="J" size="10" value="<?php echo $jj; ?>" style="width:200px;"></td>
	    <th class="columnheader"> K - Law</th>
	    <td><input type="text" name="K" size="10" value="<?php echo $kk; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> L - Education</th>
	    <td><input type="text" name="L" size="10" value="<?php echo $ll; ?>" style="width:200px;"></td>
	    <th class="columnheader"> M - Music</th>
	    <td><input type="text" name="M" size="10" value="<?php echo $mm; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> N - Fine Arts</th>
	    <td><input type="text" name="N" size="10" value="<?php echo $nn; ?>" style="width:200px;"></td>
	    <th class="columnheader"> P - Language and Literature</th>
	    <td><input type="text" name="P" size="10" value="<?php echo $pp; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> Q - Science</th>
	    <td><input type="text" name="Q" size="10" value="<?php echo $qq; ?>" style="width:200px;"></td>
	    <th class="columnheader"> R - Medicine</th>
	    <td><input type="text" name="R" size="10" value="<?php echo $rr; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> S - Agriculture</th>
	    <td><input type="text" name="S" size="10" value="<?php echo $ss; ?>" style="width:200px;"></td>
	    <th class="columnheader"> T - Technology and Engineering</th>
	    <td><input type="text" name="T" size="10" value="<?php echo $tt; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> U - Military Science</th>
	    <td><input type="text" name="U" size="10" value="<?php echo $uu; ?>" style="width:200px;"></td>
	    <th class="columnheader"> V - Naval Science</th>
	    <td><input type="text" name="V" size="10" value="<?php echo $vv; ?>" style="width:200px;"></td>
	</tr>

	<tr>
	    <th class="columnheader"> Z - Library Science</th>
	    <td><input type="text" name="Z" size="10" value="<?php echo $zz; ?>" style="width:200px;"></td>
	    <th class="columnheader"> Total</th>
	    <td><input type="text" name="Total" size="10" value="<?php echo $total; ?>" style="width:200px;"></td>
	</tr>
        
        <input type="hidden" value="<? echo $csv_hdr; ?>" name="csv_hdr">
        <input type="hidden" value="<? echo $csv_output; ?>" name="csv_output">           

     <tr >
        <td colspan="4" style="text-align: center;">
            <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok-sign"></i> Convert to CSV</button>
         </td >
	</tr>

    </table>
      
  </div>  
</form>      


<?php }
?>
    
    

  
