<br />
    <div class="col-sm-2 sidenav">
      <div class="well">
          <p><a href="http://mastersknowledge.weebly.com" target="_blank"><img src="./images/LibroHead.jpg" BORDER=0 ALIGN ="center" ALT="Home" HEIGHT="50px" WIDTH="50px"><br />Knowledge Masters Consultancy Services</a></p>
      </div>
        
      <div class="well">
          <p><a href="http://mastersknowledge.weebly.com" target="_blank">Did You Know?</a></p>
          
              <div class="w3-content" style="max-width:400px">
              <div class="mySlides w3-container w3-red">
                <h3><b>HEU-LMC has </b></h3>
                <h3><i>68,000 Total Book Collection</i></h3>
              </div>

              <div class="mySlides w3-container w3-amber">
                <h3><b>HEU-LMC has </b></h3>
                <h3><i>17 learning spaces equipped with LCD, TVs, Sound Systems, WiFi</i></h3>
              </div>

              <div class="mySlides w3-container w3-green">
                <h3><b>HEU-LMC has </b></h3>
                <h3><i>18 Online databases and EBooks subscription</i></h3>
              </div>                
            </div>          
      </div>
        
      <div class="well">
          <p><a href="http://mastersknowledge.weebly.com" target="_blank">Journals</a></p>
          
         <div class="w3-content" style="max-width:400px">
          <img class="mySlides1" src="./announcement/cej_cover.png" style="width:100%">

          <img class="mySlides1" src="./announcement/jcst_cover.jpg" style="width:100%">

          <div class="mySlides1 w3-container w3-xlarge w3-blue w3-card-4">
            <p><span class="w3-tag w3-yellow">New!</span>
            <p>Childhood Education journal available</p>
            <p>at Periodical section!!!</p>
          </div>

        </div>
          
      </div>  
      <div class="well">
          <p><a href="http://mastersknowledge.weebly.com" target="_blank">Forefront</a></p>
      </div>    
        
    </div>
  </div>
</div>

 <script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); 
}
     
var slideIndex1 = 0;
carousel2();

function carousel2() {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex1++;
    if (slideIndex1 > x.length) {slideIndex1 = 1} 
    x[slideIndex1-1].style.display = "block"; 
    setTimeout(carousel2, 2000); 
}    
</script      