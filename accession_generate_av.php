 <?php include('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

  							<?php

                            $sql = "delete from accsm";
                            $sLink->exec($sql);
    
                            $result = $sLink->query("select * from books where tm='av'");  
                            $count = $result->rowcount();   
                                               
                            if ($count > 0){
                                $num_rows = 0;
                                $num_rows = $start;

                                while ($row = $result->fetch() ){                        
                                    $MyString1 = $row['maintext'];
                                    $MyArray1 = explode("", $MyString1);
                                    $title = str_replace("<001>", "", $MyArray1[0]);
                                    $charlength = strlen($title);
                                    if ($charlength > 250){
                                        $title = mb_substr($title,0,250,'UTF-8');                                  
                                    }                                       

                                    $author = str_replace("<004>", "", $MyArray1[3]); 
                                    $charlength = strlen($author);
                                    if ($charlength > 50){
                                        $author = mb_substr($author,0,50,'UTF-8');                                  
                                    }                                  

                                    $publisher = str_replace("<0010>", "", $MyArray1[9]);    
                                    $ye_ar = str_replace("<0011>", "", $MyArray1[10]);          
                                    $callnumber = str_replace("<0025>", "", $MyArray1[24]);   
                                    $accession = $num_rows++;

                                    $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $sql = "INSERT INTO accsm (accession,title,author,publisher,ye_ar,call_number) VALUES ('$accession','$title','$author','$publisher','$ye_ar','$callnumber')";
                                    $sLink->exec($sql);                                         
         
                                    
                                }
                                
                                
                                   
                                                        
                                

                            }
							?>      
    
    
<div style="display:none;" id="myDiv" class="animate-bottom">
  <h2>Done!</h2>
  <p>Generated <?php echo $num_rows ?> records.</p>
</div>
    

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>