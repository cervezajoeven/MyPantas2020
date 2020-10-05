<?php require('header.php'); ?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
    </ul>
</div>
<div class=" row">

    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of books in the database" class="well top-block" href="list_of_book.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-book yellow"></i>
							<?php
                            $mtype = 'book';
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $query = $sLink->prepare("SELECT tm from books WHERE tm = :tm");
                            $query->bindParam(':tm', $mtype);
                            $query->execute();
                            $num_rows3 = $query->rowcount();  
							?>
            <div>Books and manuscripts</div>
            <div><?php echo $num_rows3; ?></div>
        </a>
    </div>

    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of Audio-visual materials in the database" class="well top-block" href="list_of_av.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-film yellow"></i>
							<?php
                            $mtype = 'av';
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $query = $sLink->prepare("SELECT tm from books WHERE tm = :tm");
                            $query->bindParam(':tm', $mtype);
                            $query->execute();
                            $num_rows3 = $query->rowcount();  
							?>
            <div>Audio-visual materials</div>
            <div><?php echo $num_rows3; ?></div>
        </a>
    </div>    

    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of index to periodical articles" class="well top-block" href="list_of_articles.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-calendar yellow"></i>
							<?php
                            //$query = $sLink->query("SELECT * FROM locker_history");
                            $query = $sLink->query("SELECT * FROM books where tm='pr'");                            
                            $num_rows3 = $query->rowcount();

							?>
            <div>Periodical articles</div>
            <div><?php echo $num_rows3; ?></div>
        </a>
    </div>    

    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of courseworks in the database" class="well top-block" href="list_of_theses.php">
            <i style="font-size:5em;" class="fa fa-graduation-cap yellow"></i>
							<?php
                            $mtype = 'td';
                            $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $query = $sLink->prepare("SELECT tm from books WHERE tm = :tm");
                            $query->bindParam(':tm', $mtype);
                            $query->execute();
                            $num_rows3 = $query->rowcount();  
							?>
            <div>Theses and dissertations</div>
            <div><?php echo $num_rows3; ?></div>
        </a>
    </div>   

    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of electronic resources" class="well top-block" href="list_of_eresources.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-globe yellow"></i>
							<?php
                            $query = $sLink->query("SELECT * FROM books where tm='er'");
                            $t_history = $query->rowcount();
							?>
            <div>Electronic resources</div>
            <div><?php echo $t_history; ?></div>
        </a>
    </div>
    
    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of vertical files" class="well top-block" href="list_of_vf.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-folder-open yellow"></i>
							<?php
                            $query = $sLink->query("SELECT * FROM books where tm='vf'");
                            $t_history = $query->rowcount();
							?>
            <div>Vertical files</div>
            <div><?php echo $t_history; ?></div>
        </a>
    </div>

    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of patron in the database" class="well top-block" href="list_of_client.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-user yellow"></i>
							<?php
                            $query = $sLink->query("SELECT * FROM client");
                            $num_rows1 = $query->rowcount();          
                            ?>
            <div>Total Patron</div>
            <div><?php echo $num_rows1; ?></div>
        </a>
    </div>

    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of patron attendance" class="well top-block" href="list_of_attendance.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-ok yellow"></i>
							<?php
                            $query = $sLink->query("SELECT * FROM clientlog");
                            $num_rows = $query->rowcount();
							?>
            <div>Patron attendance</div>
            <div><?php echo $num_rows; ?></div>
        </a>
    </div>


    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of materials currently on-loan" class="well top-block" href="list_of_borrowed_books.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-check yellow"></i>
							<?php
                            $query = $sLink->query("SELECT * FROM borrower");
                            $num_rows3 = $query->rowcount();              

							?>
            <div>Currently on-loan</div>
            <div><?php echo $num_rows3; ?></div>
        </a>
    </div>
	
    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of books accessioned" class="well top-block" href="list_of_accession.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-sort-by-alphabet yellow"></i>
							<?php
                            $query = $sLink->query("SELECT * FROM aclist");
                            $t_accession = $query->rowcount();
							?>
            <div>Books accession</div>
            <div><?php echo $t_accession; ?></div>
        </a>
    </div>
    
     <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of books transaction history." class="well top-block" href="list_of_borrowed_books.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-random yellow"></i>
							<?php
                            $query = $sLink->query("SELECT * FROM returned");
                            $num_rows3 = $query->rowcount();  

							?>
            <div>Books circulation history</div>
            <div><?php echo $num_rows3; ?></div>
        </a>
    </div>   

    <div class="col-md-2 col-sm-2 col-xs-5" style="margin-left:25px;">
        <a data-toggle="tooltip" title="Total number of book acquisition." class="well top-block" href="list_of_acquisition.php">
            <i style="font-size:5em;" class="glyphicon glyphicon-sort-by-attributes yellow"></i>
							<?php
                            $query = $sLink->query("SELECT * FROM acquisition where mtype='book'");
                            $num_rows3 = $query->rowcount();  

							?>
            <div>Books acquisition</div>
            <div><?php echo $num_rows3; ?></div>
        </a>
    </div>     
    
</div>
<?php require('footer.php'); ?>
