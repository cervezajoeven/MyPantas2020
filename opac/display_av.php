<title>Audio-visual details display</title>

     
<script>
function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}
</script>



<?php require("header.php");
require("style.php");
require_once("connect.php");

   //connection
	$bkid = $_GET['bkid'];				    
	//$sql_select = "select * from books where bkid=$bkid";
	//$sel_result = mysql_query($sql_select) or die(mysql_error());
	//$numr = mysql_num_rows($sel_result);
	//$mrow = mysql_fetch_array($sel_result);

    $sel_result = $sLink->query("select * from books where bkid=$bkid");                         
    $numr = $sel_result->rowcount();
    $mrow = $sel_result->fetch(PDO::FETCH_ASSOC);

	$MyString1 = $mrow['maintext'];
	$MyArray1 = explode("", $MyString1);

	$TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
	$TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);
	$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
	$TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
	$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);
	$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
	$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);
	$TitleStr[8] = str_replace("<008>", "", $MyArray1[7]);
	$TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
	$TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);
	$TitleStr[11] = str_replace("<0011>", "", $MyArray1[10]);
	$TitleStr[12] = str_replace("<0012>", "", $MyArray1[11]);
	$TitleStr[13] = str_replace("<0013>", "", $MyArray1[12]);
	$TitleStr[14] = str_replace("<0014>", "", $MyArray1[13]);
	$TitleStr[15] = str_replace("<0015>", "", $MyArray1[14]);
	$TitleStr[16] = str_replace("<0016>", "", $MyArray1[15]);
	$TitleStr[17] = str_replace("<0017>", "", $MyArray1[16]);
	$TitleStr[18] = str_replace("<0018>", "", $MyArray1[17]);
	
	$TitleStr[19] = str_replace("<0019>", "", $MyArray1[18]);
	$TitleStr[20] = str_replace("<0020>", "", $MyArray1[19]);
	$TitleStr[21] = str_replace("<0021>", "", $MyArray1[20]);
	$TitleStr[22] = str_replace("<0022>", "", $MyArray1[21]);
	$TitleStr[23] = str_replace("<0023>", "", $MyArray1[22]);
	$TitleStr[24] = str_replace("<0024>", "", $MyArray1[23]);
	$TitleStr[25] = str_replace("<0025>", "", $MyArray1[24]);
	$TitleStr[26] = str_replace("<0026>", "", $MyArray1[25]);
	$TitleStr[27] = str_replace("<0027>", "", $MyArray1[26]);
	$TitleStr[28] = str_replace("<0028>", "", $MyArray1[27]);	
	
	$TitleStr[29] = str_replace("<0029>", "", $MyArray1[28]);
	$TitleStr[30] = str_replace("<0030>", "", $MyArray1[29]);
	$TitleStr[31] = str_replace("<0031>", "", $MyArray1[30]);
	$TitleStr[32] = str_replace("<0032>", "", $MyArray1[31]);
	$TitleStr[33] = str_replace("<0033>", "", $MyArray1[32]);
	$TitleStr[34] = str_replace("<0034>", "", $MyArray1[33]);
	$TitleStr[35] = str_replace("<0035>", "", $MyArray1[34]);
	
	$TitleStr[36] = str_replace("<0036>", "", $MyArray1[35]);
	$TitleStr[37] = str_replace("<0037>", "", $MyArray1[36]);
	$TitleStr[38] = str_replace("<0038>", "", $MyArray1[37]);
	$TitleStr[39] = str_replace("<0039>", "", $MyArray1[38]);
	$TitleStr[40] = str_replace("<0040>", "", $MyArray1[39]);
	$TitleStr[41] = str_replace("<0041>", "", $MyArray1[40]); //cover

	if ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] <> "")
		$pub = trim($TitleStr[9]) . ' : ' . trim($TitleStr[10]) . ', ' . trim($TitleStr[11]);
	elseif ($TitleStr[9] == "" && $TitleStr[10] <> "" && $TitleStr[11] <> "")
	{
		$pub = 'Place of publication not identified : ' . trim($TitleStr[10]) . ', ' . trim($TitleStr[11]);
	}
	elseif ($TitleStr[9] <> "" && $TitleStr[10] == "" && $TitleStr[11] <> "")
	{
		$pub = trim($TitleStr[9]) . ': ' . 'publisher not identified, ' . trim($TitleStr[11]);
	}
	elseif ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] == "")
	{
		$pub = trim($TitleStr[9]) . ' : ' . trim($TitleStr[10]) . ', date of publication not identified';
	}	

	if ($TitleStr[24] <> "" && $TitleStr[25] <> "")
		$call = trim($TitleStr[24]) . ' ' . trim($TitleStr[25]);
	elseif ($TitleStr[25] <> "")
	{
		$call = trim($TitleStr[25]);
	}	

	if ($TitleStr[41] <> "")
	     $imahe = trim($TitleStr[41]);
	//else{
    //     $imahe = 'images/myAV'.'.png';
	//}
	
	if ($TitleStr[18] <> "") {
		$fname = str_replace("C:\\", "", $TitleStr[18]);
		$fname = str_replace("D:\\", "", $fname);
		$fname = str_replace("F:\\", "", $fname);
		$fname = str_replace("G:\\", "", $fname);
		$fname = str_replace("\\", "/", $fname);
	}

require("rightsidebar.php");
	
?>

                              
                        <div class="w3-container">                  
                            <div id="idcite" class="w3-modal w3-animate-opacity ">  
                              <div class="w3-modal-content">  
                                  
                                  <center>                                 
                                <header class="w3-container w3-indigo"> 
                                  <span onclick="document.getElementById('idcite').style.display='none'" 
                                  class="w3-button w3-display-topright">&times;</span>
                                  <h3>Citation</h3>
                                </header>
                                  </center>
                                
                                <div class="w3-container w3-orange">
                                    
                                   <div class="w3-panel w3-round-xxlarge w3-teal">  
                                      <h4>APA</h4>                                     
                                      <?php 
                                       echo $apa;
                                       ?>
                                      <h4>MLA</h4>                                     
                                      <?php 
                                       echo $mla;
                                       ?>
                                      <h4>Chicago Style</h4>                                     
                                      <?php 
                                       echo $chicago;
                                       ?>
                                       <p>
                                    </div>
                                    
                                </div>
                              </div>
                            </div>
                        </div>

                        <form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:10px;">
                                  <center>     
                                    <div class="w3-container">                  
                                    <div id="idvshelf" class="w3-modal w3-animate-opacity ">  
                                      <div class="w3-modal-content">  


                                        <header class="w3-container w3-aqua"> 
                                          <span onclick="document.getElementById('idvshelf').style.display='none'" 
                                          class="w3-button w3-display-topright">&times;</span>
                                          <h3>Virtual Shelf</h3>
                                        </header>

                                        <div class="w3-container w3-orange">

                                           <div class="w3-panel w3-round-xxlarge w3-teal">  
                                              <h4>Enter Your ID Number.</h4>                                     
                                              <?php 
                                              // echo $apa;
                                               ?>

                                                <div class="row clearfix">
                                                    <div class="col-md-12 column">
                                                        <div class="col-md-6 col-md-offset-3 column">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="pwd" id="search" size="60" placeholder="Enter password.." autofocus required />
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-info" type="submit" name="submit_shelf" value="submit_shelf" id="submit"><i class="fa fa-search"></i> Submit </button>
                                                                    </div>
                                                                </div> 
                                                        </div>
                                                    </div>
                                                </div>

                                               <p>
                                            </div>

                                        </div>
                                      </div>
                                    </div>
                                </div>

                               </center>     
                            
                                <?php 
                                include('connect.php');
                                if (isset($_POST['submit_shelf'])){
                                        $opt = $_POST['submit_shelf'];
                                        if ($opt == "submit_shelf"){
                                            $id=$_POST['pwd'];				
                                            $stmt = $sLink->query("select * from client where idnum='$id'");
                                            //$row = $stmt->fetch(PDO::FETCH_ASSOC);  
                                            $found = $stmt->rowcount();   
                                            if ($found==0){
                                                echo "<script>alert('Not a valid ID number.  Kindly verify!');</script>";
                                            }
                                            else{
                                                $row = $stmt->fetch(PDO::FETCH_ASSOC);  
                                                $idnumber=$_POST['pwd'];
                                                $title=$TitleStr[1];
                                                $creator=$TitleStr[4];   
                                                $pub_date=$TitleStr[11];
                                                $location=$TitleStr[28];
                                                $idnum=$row['idnum'];
                                                
                                                {
                                                    $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    $sql = "INSERT INTO vshelf (title,creator,publication,pub_date,idnum,call_number,location) VALUES ('$title','$creator','$pub','$pub_date','$idnum','$call','$location')";
                                                    $sLink->exec($sql);
                                                }
                                                echo "<script>alert('Saving in your virtual shelf is successful!');</script>";
                                             }
                                        } 
                                ?>                

                              <?PHP } ?>                         

                        </form>
   

                        <div class="w3-container">                  
                            <div id="idmarc" class="w3-modal w3-animate-opacity ">  
                              <div class="w3-modal-content">  
                                  
                                <center>  
                                <header class="w3-container w3-indigo"> 
                                  <span onclick="document.getElementById('idmarc').style.display='none'" 
                                  class="w3-button w3-display-topright">&times;</span>
                                  <h3>Marc Display</h3>
                                </header>
                                </center>
                                <div class="w3-container w3-orange">
                                    
                                   <div class="w3-panel w3-round-xxlarge w3-teal"> 
                                       
                                       <?php
      	                               if ($TitleStr[27] <> "") {      
                                            $language = "<b>041</b>     " . Trim($TitleStr[27]);
                                            echo $language . "<br />";
                                       }                                       
                                       
       	                               if ($call <> "") {      
                                            $call = "<b>090 1#</b>     " . "<b>|a</b>" . Trim($call);
                                            echo $call . "<br />";
                                       }                                     
                                       
     	                               if ($TitleStr[4] <> "") {      
                                            $author = "<b>100     12</b>     " . "<b>|a</b>" . Trim($TitleStr[4]);
                                            echo $author . "<br />";
                                       }   
                                       
     	                               if ($TitleStr[6] <> "") {      
                                            $author2 = "<b>100     12</b>     " . "<b>|a</b>" . Trim($TitleStr[6]);
                                            echo $author2 . "<br />";
                                       }                                         
                                       
    	                               if ($TitleStr[1] <> "" && $TitleStr[2] <> "" ) {      
                                            $marcstr = "<b>|a</b> " . Trim($TitleStr[1]) . " / " . "<b> |c </b>" . Trim($TitleStr[2]) . ".";
                                       }
                                       ElseIf ($TitleStr[1] <> "" ) {
                                            $marcstr = "<b>|a </b>" . Trim($TitleStr[1]) . ".";
                                       }
                                    
                                       If (trim($marcstr) <> ""){
                                           //marcstr = Replace(marcstr, ":", " |b:")
	                                       $marcstr = str_replace(":", "<b>|b:</b>", $marcstr);                                                
                                            $tagg = "245";
                                            If (Trim($TitleStr[6]) <> ""){
                                                $indd = "1";
                                            }
                                            Else{
                                                $indd = "0";
                                            }

                                            If (substr($TitleStr[1],0,4) == "The " Or substr($TitleStr[1],0,4) == "the "){
                                                $indd = $indd . "4";
                                            }

                                            elseIf (substr($TitleStr[1], 0,3) == "An " Or substr($TtleStr[1], 0,3) == "an ")
                                            {                                               
                                                $indd = $indd . "3";
                                            }

                                            elseIf (substr($TitleStr[1], 0,2) == "A " Or substr($TitleStr[1],0,2) == "a "){
                                                $indd = $indd . "2";
                                            }
                                            Else{
                                                $indd = $indd . "0";
                                            }
                                            $title = "<b>" . $tagg . "</b>     <b>" . $indd . "</b>     " . $marcstr;
                                            echo $title . "<br />";
                                        }
                                       
     	                               if ($TitleStr[3] <> "") {      
                                            $parallel = "<b>246 1#</b>     " . "<b>|a</b>" . Trim($TitleStr[3]);
                                            echo $parallel . "<br />";
                                       }   
                                       
      	                               if ($TitleStr[12] <> "") {      
                                            $edition = "<b>250 1#/b>     " . "<b>|a</b>" . Trim($TitleStr[12]);
                                            echo $edition . "<br />";
                                       }
                                       
       	                               if ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] <> "") {
                                            $imprint = "<b>|a</b>" . trim($TitleStr[9]) . ': <b>|b</b>' . trim($TitleStr[10]) . ', <b>|c</b>' . trim($TitleStr[11]) . '. '; 
                                       }
                                       elseif ($TitleStr[9] == "" && $TitleStr[10] <> "" && $TitleStr[11] <> ""){
                                            $imprint = '<b>|b</b>' . trim($TitleStr[10]) . ', <b>|c</b>' . trim($TitleStr[11]) . '. '; 
                                       } 
                                      elseif ($TitleStr[9] <> "" && $TitleStr[10] == "" && $TitleStr[11] <> ""){
                                            $imprint = "<b>|a</b>" . trim($TitleStr[9]) . ', <b>|c</b>' . trim($TitleStr[11]) . '. '; 
                                       }   
                                      elseif ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] == ""){
                                            $imprint = "<b>|a</b>" . trim($TitleStr[9]) . ': <b>|b</b>' . trim($TitleStr[10]) . '. '; 
                                       }  
                                      echo "<b>260 1#</b> " . $imprint . "<br />";
                                       
                                       
                                      //DESCRIPTION
                                      if ($TitleStr[13] <> ""){
                                            $description1 = "<b>|a</b>" . trim($TitleStr[13]);
                                        }
                                      if ($TitleStr[14] <> ""){
                                            $description2 = " : <b>|b</b>" . trim($TitleStr[14]);
                                        }
                                      if ($TitleStr[15] <> ""){
                                           $description3 = ", <b>|c</b>" . trim($TitleStr[15]);
                                        }
                                      if ($TitleStr[16] <> ""){
                                            $description4 = "; <b>|d</b>" . trim($TitleStr[16]);
                                        }
                                      echo "<b>300 1#</b> " . $description1 . $description2 . $description3 . $description4 . "<br />";   
                                       
                                      if ($TitleStr[39] <> "") {
                                         $TitleStr[39] = $TitleStr[39] . " $2 rdacontent";
                                         echo "<b>336 ## </b" . "<b>|a</b>" . $TitleStr[39]. "<br />"; 
                                       }
                                       
                                       if ($TitleStr[40] <> "") {
                                         $TitleStr[40] = $TitleStr[40] . " $2 rdamedia";
                                         echo "<b>337 ## </b" . "<b>|a</b>" . $TitleStr[40]. "<br />"; 
                                       }   
                                       
                                       if ($TitleStr[19] <> "") {
                                         $TitleStr[19] = $TitleStr[19] . " $2 rdacarrier";
                                         echo "<b>338 ## </b" . "<b>|a</b>" . $TitleStr[19] . "<br />"; 
                                       }                           
                                        
                                       if ($TitleStr[17] <> "") {
                                         echo "<b>440 1#</b" . "<b>|a</b>" . $TitleStr[17]. "<br />"; 
                                       } 
                                       
                                       if ($TitleStr[18] <> "") {
                                         echo "<b>504 1#</b" . "<b>|a</b>" . $TitleStr[18]. "<br />"; 
                                       } 
                                       
                                       if ($TitleStr[33] <> "") {
                                         echo "<b>520 3#</b" . "<b>|a</b>" . $TitleStr[33]. "<br />"; 
                                       }   
                                       
                                       if ($TitleStr[21] <> "") {
                                            $var = "";		  
                                            $element = "";
                                            $var= $TitleStr[21];
                                            $pieces = explode(";", $var);
                                            foreach($pieces as $element)				
                                                if ($element <> "" ) {
                                                     echo "<b>600 17 </b>" . "<b>|a</b>" . $element . "<br />";                                       
                                                }
                                       }   
                                       
                                       if ($TitleStr[22] <> "") {
                                            $var = "";		  
                                            $element = "";
                                            $var= $TitleStr[22];
                                            $pieces = explode(";", $var);
                                            foreach($pieces as $element)				
                                                if ($element <> "" ) {
                                                     echo "<b>610 14 </b>" . "<b>|a</b>" . $element . "<br />";                                       
                                                }
                                       }                                     
                                       
                                       if ($TitleStr[20] <> "") {
                                            $var = "";		  
                                            $element = "";
                                            $var= $TitleStr[20];
                                            $pieces = explode(";", $var);
                                            foreach($pieces as $element)				
                                                if ($element <> "" ) {
                                                     echo "<b>650 14 </b>" . "<b>|a</b>" . $element . "<br />";                                       
                                                }
                                       }
                                       
                                       if ($TitleStr[23] <> "") {
                                            $var = "";		  
                                            $element = "";
                                            $var= $TitleStr[23];
                                            $pieces = explode(";", $var);
                                            foreach($pieces as $element)				
                                                if ($element <> "" ) {
                                                     echo "<b>651 #4 </b>" . "<b>|a</b>" . $element . "<br />";                                       
                                                }
                                       }      
                                       
                                       if ($TitleStr[7] <> "") {
                                         echo "<b>700 04 </b" . "<b>|a</b>" . $TitleStr[7]. "<br />"; 
                                       } 
                                       
                                       if ($TitleStr[8] <> "") {
                                         echo "<b>710 0# </b" . "<b>|a</b>" . $TitleStr[8]. "<br />"; 
                                       }                                      
                                                                              
                                       if ($TitleStr[28] <> "") {
                                         echo "<b>852 ## </b" . "<b>|a</b>" . $TitleStr[28]. "<br />"; 
                                       } 
                                       
                                        if ($TitleStr[29] <> "") {
                                         echo "<b>856 ## </b" . "<b>|a</b>" . $TitleStr[29]. "<br />"; 
                                       }  
                                       
                                        if ($TitleStr[26] <> "") {
                                         echo "<b>919 ## </b" . "<b>|a</b>" . $TitleStr[26]. "<br />"; 
                                       }                                        
                                       
                                        ?>
                                    </div>
                                    
                                </div>
                              </div>
                            </div>
                        </div>
                        
<div class="w3-orange">

  <button class="w3-button w3-orange w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>

</div>

  <div class="table-responsive"> 
      <div class="col-md-12 text-left"> 
          <button id="singlebutton" name="singlebutton" class="btn btn-warning btn-sm" role="button" aria-pressed="true">
              <a href="javascript:history.back()"><i class="fa fa-hand-o-left"></i></a></button> 
      </div>
      
	  <fieldset style = "width: 80%; margin:  0px auto;" >
      <legend align="center"><h3>Audio-Visual Information Display</h3></legend>		
        <table class="table">
            
        <tbody>    
		<col width=25% >
		<col width=75% >

		  <?php if ($call <> "") {?>
			 <tr>
				<th class="display">Call number:</th>
                 <td ><button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm" role="button" aria-pressed="true"><h4><?php echo     $call ?></h4></button>
                 </td>
                 
				<td border="0" rowspan="100%" valign="top">
     				<div style="width:200px;float:right; text-align:center; color:orange; background:; font-family:arial">
                        <?php if ($imahe <> "") { ?>
                            <img src="<?php echo $imahe ?>" alt="" width="200" height="300" border="0">
                        <?php } else { ?>
                            <i class="fa fa-camera" style="font-size:200px" title="Audio-visual material"></i>
                        <?php } ?>
      				</div>
			    </td>	
            </tr>
		  <?PHP } ?>			
		
		  <?PHP if ($TitleStr[1] <> "") {?>
			 <tr class="danger">
				<th class="display">Title proper:</th>
				<td><b><?PHP echo $TitleStr[1] ?></b></td>
			</tr>
		  <?PHP } ?>
		  
		  <?PHP if ($TitleStr[2] <> "") {?>
			 <tr>
				<th class="display">Statement of responsibility:</th>
				<td ><?PHP echo $TitleStr[2] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[3] <> "") {?>
			 <tr>
				<th class="display">Parallel title:</th>
				<td><?PHP echo $TitleStr[3] ?></td></tr>
		  <?PHP } ?>		  
	  
		  <?PHP if ($TitleStr[4] <> "") {?>
			 <tr>
				<th class="display">Creator:</th>
				<td><a href='results.php?mtype=av&search=<?PHP echo $TitleStr[4]?>&submit=Submit'><?PHP echo $TitleStr[4] ?></td></tr>
		  <?PHP } ?>
		  
		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[6];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th class="display">Creator:</th>
						<td><a href='results.php?mtype=av&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>	
		  
		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[7];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th class="display">Contributor:</th>
						<td><a href='results.php?mtype=av&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>
		  
		  <?PHP if ($TitleStr[8] <> "") {?>
			 <tr>
				<th class="display">Added entry - Corporate:</th>
				<td ><?PHP echo $TitleStr[8] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($pub <> "") {?>
			 <tr>
				<th class="display" >Publication:</th>
				<td ><?PHP echo $pub ?></td></tr>
		  <?PHP } ?>	  

		  <?PHP if ($TitleStr[12] <> "") {?>
			 <tr>
				<th class="display">Edition statement:</th>
				<td ><?PHP echo $TitleStr[12] ?></td></tr>
		  <?PHP } ?>			  
		  <?PHP if ($TitleStr[13] <> "") {?>
			 <tr>
				<th class="display">TEMP/MDA:</th>
				<td ><?PHP echo $TitleStr[13] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[14] <> "") {?>
			 <tr>
				<th class="display">Description:</th>
				<td ><?PHP echo $TitleStr[14] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[15] <> "") {?>
			 <tr>
				<th class="display">Supplementary materials:</th>
				<td ><?PHP echo $TitleStr[15] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[39] <> "") {?>
			 <tr>
				<th class="display">Content type:</th>
				<td ><?PHP echo $TitleStr[39] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[40] <> "") {?>
			 <tr>
				<th class="display">Media type:</th>
				<td ><?PHP echo $TitleStr[40] ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[41] <> "") {?>
			 <tr>
				<th class="display">Carrier type:</th>
				<td ><?PHP echo $TitleStr[41] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[16] <> "") {?>
			 <tr>
				<th class="display">Series title:</th>
				<td ><?PHP echo $TitleStr[16] ?></td></tr>
		  <?PHP } ?>		  
		  <?PHP if ($TitleStr[17] <> "") {?>
			 <tr>
				<th class="display">General notes:</th>
				<td ><?PHP echo $TitleStr[17] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[18] <> "") {?>
			 <tr>
				<th class="display">Identifier/ISBN:</th>
				<td ><?PHP echo $TitleStr[18] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[19] <> "") {?>
			 <tr>
				<th class="display">Carrier type:</th>
				<td ><?PHP echo $TitleStr[19] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[37] <> "") {?>
			 <tr>
				<th class="display">Content type:</th>
				<td ><?PHP echo $TitleStr[37] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[38] <> "") {?>
			 <tr>
				<th class="display">Media type:</th>
				<td ><?PHP echo $TitleStr[38] ?></td></tr>
		  <?PHP } ?>	
		  
 		  <?PHP
			$var = "";
			$element = "";
			$var= $TitleStr[20];
			$pieces = explode(";", $var);
			foreach($pieces as $element)			
				if ($element <> "" ) {?>		
					<tr>
						<th class="display">Access point-Topical:</th>
						<td><a href='results.php?mtype=av&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>		  

		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[21];
			$pieces = explode(";", $var);
			foreach($pieces as $element)				
				if ($element <> "" ) {?>
					<tr>
						<th class="display">Access point-Creator:</th>
						<td><a href='results.php?mtype=av&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  

 		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[22];
			$pieces = explode(";", $var);
			foreach($pieces as $element)			
				if ($element <> "" ) {?>
		
					<tr>
						<th class="display">Access point-Corporate:</th>
						<td><a href='results.php?mtype=av&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>			  
		  
 		  <?PHP
			$var = "";		  
			$element = "";
			$var= $TitleStr[23];
			$pieces = explode(";", $var);
			foreach($pieces as $element)			
				if ($element <> "" ) {?>	
					<tr>
						<th class="display">Access point-Geographical:</th>
						<td><a href='results.php?mtype=av&search=<?PHP echo $element?>&submit=Submit'><B><?PHP echo $element ?></B></a></td>
					</tr>  
		  <?PHP } ?>
	
		  <?PHP if ($TitleStr[26] <> "") {?>
			 <tr>
				<th class="display">Accession:</th>
				<td ><?PHP echo $TitleStr[26] ?></td></tr>
		  <?PHP } ?>
	

		  <?PHP if ($TitleStr[27] <> "") {?>
			 <tr>
				<th class="display">Language used:</th>
				<td ><?PHP echo $TitleStr[27] ?></td></tr>
		  <?PHP } ?>		
	
		  <?PHP if ($TitleStr[29] <> "") {?>
			 <tr>
				<th class="display">Electronic access:</th>
				<td ><?PHP echo $TitleStr[29] ?></td></tr>
		  <?PHP } ?>
		  <?PHP if ($TitleStr[38] <> "") {?>
			 <tr>
				<th class="display">URL:</th>
				<td ><?PHP echo $TitleStr[38] ?></td></tr>
		  <?PHP } ?>	
		  	
		  <?PHP if ($TitleStr[33] <> "") {?>
			 <tr>
				<th class="display">Content notes:</th>
				<td ><?PHP echo $TitleStr[33] ?></td></tr>
		  <?PHP } ?>	
		  <?PHP if ($TitleStr[34] <> "") {?>
			 <tr>
				<th class="display">Review:</th>
				<td ><?PHP echo $TitleStr[34] ?></td></tr>
		  <?PHP } ?>		
		  <?PHP if ($TitleStr[35] <> "") {?>
			 <tr>
				<th class="display">Abstract:</th>
				<td ><?PHP echo $TitleStr[35] ?></td></tr>
		  <?PHP } ?>	
        </tbody>
   </table>
 </fieldset>
 
    <fieldset style = "width: 80%; margin:  0px auto;" >
    <legend align="center"><h3>Holdings</h3></legend>	
    <table class="table table-sm table-inverse">
      <col width=20% align="center">
      <col width=20% align="center">
      <col width=30% align="center">
      <col width=20% align="center">
      <col width=10% align="center">
        
        <thead>
          <tr bgcolor = "#FFE4C4">
            <th>Accession</th>
            <th>Status</th>
            <th>Library/Location</th>
            <th>Due date</th>
            <th>Action</th>                  
          </tr>
        </thead>
 
		 <?php
			$var= $TitleStr[26];
			$pieces = explode(";", $var);
			foreach($pieces as $element)
			{
			if ($element <> "" ) {
				//$sql_select = "select * from borrower where Accession_number='$element'";
				//$sel_result = mysql_query($sql_select) or die(mysql_error());
				//$numr = mysql_num_rows($sel_result);
				//$mrow = mysql_fetch_array($sel_result);
                
                $sel_result = $sLink->query("select * from borrower where Accession_number='$element'"); 
                $numr = $sel_result->rowcount();
                $mrow = $sel_result->fetch(PDO::FETCH_ASSOC);                  
                
				$acc = "";
				if ($numr > 0){
					if (trim($mrow['Accession_number'] <> "")){
						$acc = $mrow['Accession_number'];
					}
					else {
						$acc = 'None';						
					}
					$status = 'Out';
	
					if (trim($lib = $mrow['Library'] <> "")){
						$lib = $mrow['Library'];
					}
					else {
						$lib = 'None';						
					}					
					$due = $mrow['Due_date'];}
				else {
					$acc = $element;
					$status = 'On-shelf';
					$lib = $TitleStr[28];
					$due = 'available';
				}
			}					
			?>
            <tbody>
			<tr>
				<td scope="row">
					<?php echo $acc ?>
				</td>
				<td >
					<?php echo $status ?>
				</td>	
				<td >
					<?php echo $lib ?>
				</td>	
				<td >
					<?php echo $due ?>
				</td>
  				<td >
                        <a href='$link=$bkid'><button class='button' style='color:navy;'>Put on-hold</button></a>
				</td>               
                
			</tr>
            <tbody>		
		  <?PHP } ?>
 
        </table>
    </fieldset>
 
    <div class="col-md-12 text-center"> 
          <button id="singlebutton" name="singlebutton" class="btn btn-warning btn-sm" role="button" aria-pressed="true">
          <a href="javascript:history.back()"><i class="fa fa-hand-o-left"></i></a></button> 
    </div>      
      
 </div>
</body>
</html>