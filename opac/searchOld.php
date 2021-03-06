
<div class="col-sm-8 text-left">

<form ACTION="results.php" name="mySearch" id="mySearch" onsubmit="return checkscript()" METHOD="GET">

    
     <div class="container" style="width:90%;">
         <center><h4><span class="label label-warning">Select any type of material for searching</span></h4></center>

      <table class="table table-striped" >
        <tbody>
          <tr>
            <td><input type="radio" name="mtype" value="all" Onclick="document.mySearch.search.focus();" checked> All materials</td>
            <td><input type="radio" name="mtype" value="td" Onclick="document.mySearch.search.focus();"> Academic research</td>  
            <td><input type="radio" name="mtype" value="ba" Onclick="document.mySearch.search.focus();"> Analytic/Literatre index</td>             
            <td><input type="radio" name="mtype" value="av" Onclick="document.mySearch.search.focus();"> Audio-visual material</td>

          </tr>

          <tr>
              <td><input type="radio" name="mtype" value="book" Onclick="document.mySearch.search.focus();"> Book and manuscript</td>         
            <td><input type="radio" name="mtype" value="ca" Onclick="document.mySearch.search.focus();"> Cases and jurisprudence</td>
            <td><input type="radio" name="mtype" value="er" Onclick="document.mySearch.search.focus();"> Electronic resources</td>
            <td><input type="radio" name="mtype" value="pr" Onclick="document.mySearch.search.focus();"> Periodical article</td>          

          </tr>
          <tr>
             <td><input type="radio" name="mtype" value="se" Onclick="document.mySearch.search.focus();"> Serial catalog</td>         
            <td><input type="radio" name="mtype" value="vf" Onclick="document.mySearch.search.focus();"> Vertical file</td>
            <td><input type="radio" name="mtype" value="itr" Onclick="document.mySearch.search.focus();"> Web site</td>      
             <td></td>
         
          </tr>
        </tbody>
      </table>
    </div>   
    

        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="col-md-6 col-md-offset-3 column">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" id="search" size="60" placeholder="Enter keywords....." autofocus required />
                            <div class="input-group-btn">
                                <button class="btn btn-info" type="submit" name="btn_click" value="basic" id="btn_basic"><i class="fa fa-search"></i> Search </button>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
    
</form>
    
<br />
    
<div class="container" style="width:90%;">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>       
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./images/LibroHead.jpg" alt="Libro" style="width:100%; height:450px">
      </div>

      <div class="item">
        <img src="./ads/philippines.png" alt="Libro" style="width:100%; height:450px">
      </div>
    
      <div class="item">
        <img src="./ads/phileagle.png" alt="Libro" style="width:100%; height:450px">
      </div>
        
         <div class="item">
        <img src="./ads/jeep.png" alt="Libro" style="width:100%; height:450px">
      </div>     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="fa fa-hand-o-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="fa fa-hand-o-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>    
    
</div>




