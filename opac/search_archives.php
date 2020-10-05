<br />
	  
<div class="col-sm-8 text-left">

    <form action="results.php" name="mySearch" id="mySearch" onsubmit="return checkscript()" method="GET">
                            <input type="hidden" name="mtype" value="archive" checked>
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <div class="col-md-6 col-md-offset-3 column">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="search" id="search" size="60" placeholder="Enter archives keywords....." autofocus required />
                                                <div class="input-group-btn">
                                                    <button class="btn btn-info" type="submit" name="archives" value="archives" id="archives"><i class="fa fa-archive"></i> Archives Search <i class="fa fa-search"></i></button>
                                                </div>
                                            </div> 
                                    </div>
                                </div>
                            </div>    
		   

    </form>
    
    <br />
    
<?php include 'carousel.php' ?>

