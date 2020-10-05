<br />

<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right w3-indigo" style="display:none;right:0;" id="rightMenu" style="background:blue;">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large"><i class="fa fa-close" style="font-size:24px; color:aqua;" ></i> Close</button>
  <a href="export2txt.php?button=save&biblio=<?php echo $TitleStr[1] ?>+<?php echo $pub ?>+<?php echo $call ?>" class="w3-bar-item w3-button"><i class="fa fa-save" style="font-size:24px; color:aqua;"></i> Save</a>
  <!--<a href="export2txt.php?button=print" class="w3-bar-item w3-button"><i class="fa fa-print" style="font-size:24px; color:aqua;"></i> Print</a>-->
  <a href="#" class="w3-bar-item w3-button" onclick="myFunction()"><i class="fa fa-print" style="font-size:24px; color:aqua;"></i> Print</a>    
  <a href="export2csv.php?$button=export&biblio=$call+$TitleStr[1]+$pub" class="w3-bar-item w3-button"><i class="fa fa-recycle" style="font-size:24px; color:aqua;"></i> Export</a>
  <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('idcite').style.display='block'"> <i class="fa fa-edit" style="font-size:24px; color:aqua;" title="Cite" ></i> Cite</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-share" style="font-size:24px; color:aqua;"></i> Share</a>
  <a href="export2txt.php?button=clear" class="w3-bar-item w3-button"><i class="fa fa-trash" style="font-size:24px; color:aqua;" ></i> Empty</a>   
  <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('idmarc').style.display='block'"><i class="fa fa-medium" style="font-size:24px; color:aqua;" ></i> Marc</a>    
  <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('idvshelf').style.display='block'"><i class="fa fa-get-pocket" style="font-size:24px; color:aqua;" ></i> V-Shelf</a>    
</div>

<script>
function myFunction() {
    window.print();
}
</script>