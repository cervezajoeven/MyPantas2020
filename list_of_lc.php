<?php include('header.php'); ?>


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

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i>CLASS ITEM LIST</h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
				-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
				
					<div class="alert alert-info">

                        <a class="btn btn-primary" href="javascript:history.back()" class="card"><i class="glyphicon glyphicon-hand-left icon-yellow"> Back</i></a>                       
                        <a href="print_internet_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>                          
					</div>
                
     
                
                
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
						<th style="width: 100">Number</th>
						<th style="width: 250" >Title</th>
                        <th style="width: 200" >Creator</th>	
                        <th style="width: 100" >Prefix</th>			
						<th style="width: 200">Call number</th>
                       	<th style="width: 200">Location</th> 
					</tr>
					</thead>
					<tbody>
							<?php
    						unset($mtype);
                            if (isset($_GET['item'])) {
                                $item=$_GET['item'];
                                $letter = "<0025>".$item;
                                $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$letter%' order by title");  
                                $count = $result->rowcount();        
                            }
                            elseif (isset($_POST['mtype'])) {
                                $mtype=$_POST['mtype'];
                                
                                if (isset($_POST['taon'])) {
                                    $taon=$_POST['taon'];                               
                                    $taon = "<0011>".$taon;
                                }
                                if (isset($_POST['keyword'])) {
                                    $keyword=$_POST['keyword'];                               
                                }                               
                                
                                switch ($mtype) {
                                    case "Fiction":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and fic = '1' and maintext LIKE '%$taon%' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and fic = '1' and maintext LIKE '%$taon%' order by title");      
                                        } 
                                        elseif ($taon = "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and fic = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }                                      
                                        else {    
                                            $result = $sLink->query("select * from books where tm='book' and fic = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;
                                        
                                    case "Filipiniana":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and fil = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and fil = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and fil = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else { 
                                            $result = $sLink->query("select * from books where tm='book' and fil = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;      
                                        
                                    case "Reference":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and ref = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and ref = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and ref = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                         
                                            $result = $sLink->query("select * from books where tm='book' and ref = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;                                         
                                        
                                    case "Biography":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and bio = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and bio = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and bio = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                        
                                            $result = $sLink->query("select * from books where tm='book' and bio = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;     
                                        
                                    case "Reserve":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and res = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and res = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and res = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                       
                                            $result = $sLink->query("select * from books where tm='book' and res = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;
                                        
                                    case "Scholastic":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and schl = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and schl = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and schl = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                        
                                            $result = $sLink->query("select * from books where tm='book' and schl = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;
                                        
                                    case "Easy":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and easy = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and easy = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and easy = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                         
                                            $result = $sLink->query("select * from books where tm='book' and easy = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;      
                                        
                                    case "Teacher reference":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and tr = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and tr = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and tr = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                         
                                            $result = $sLink->query("select * from books where tm='book' and tr = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;  
                                        
                                    case "Circulation":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and circ = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and circ = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and circ = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                         
                                            $result = $sLink->query("select * from books where tm='book' and circ = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;
                                        
                                    case "General circulation":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and gc = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and gc = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and gc = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                          
                                            $result = $sLink->query("select * from books where tm='book' and gc = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;  
                                        
                                     case "Reference-Filipiniana":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and fr = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and fr = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and fr = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                          
                                            $result = $sLink->query("select * from books where tm='book' and fr = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;   
                                        
                                    case "Special collection":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and sm = '1' and maintext LIKE '%$taon%'and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        elseif ($taon <> "" and $keyword == ""){
                                            $result = $sLink->query("select * from books where tm='book' and sm = '1' and maintext LIKE '%$taon%' order by title");      
                                        }
                                        elseif ($taon == "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and sm = '1' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else {                                          
                                            $result = $sLink->query("select * from books where tm='book' and sm = '1' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;  
                                    
                                    case "Class":
                                        $keyword = "<0025>".$keyword;
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$taon%' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else{
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$keyword%' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;   
                                        
                                    case "Year":
                                        if ($taon <> "" and $keyword <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$taon%' and maintext LIKE '%$keyword%' order by title");      
                                        }
                                        else{
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$taon%' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;  
                                        
                                    case "Prefix":
                                        $prefix = "<0024>".$keyword;
                                        if ($taon <> "" and $prefix <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$taon%' and maintext LIKE '%$prefix%' order by title");      
                                        }
                                        else{
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$prefix%' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;  
                                        
                                    case "Location":
                                        $location = $keyword;
                                        if ($taon <> "" and $location <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$taon%' and maintext LIKE '%$location%' order by title");      
                                        }
                                        else{
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$location%' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;
                                        
                                    case "Bibliography":
                                        $biblio = $keyword;
                                        if ($taon <> "" and $biblio <> ""){
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$taon%' and maintext LIKE '%$biblio%' order by title");      
                                        }
                                        else{
                                            $result = $sLink->query("select * from books where tm='book' and maintext LIKE '%$biblio%' order by title");  
                                        }
                                        $count = $result->rowcount();                      
                                        break;                                        
                                        
                                }
                                

                            }                     
                                       
                            if ($count > 0){
                                $num_rows = 0;
                                $num_rows = $start;

                                while ($row = $result->fetch() ){                        
                                $id=$row['bkid'];
                                $MyString1 = $row['maintext'];
                                $MyArray1 = explode("", $MyString1);
                                $title = str_replace("<001>", "", $MyArray1[0]);
                                $creator = str_replace("<004>", "", $MyArray1[3]);    
                                $prefix = str_replace("<0024>", "", $MyArray1[23]);          
                                $callnumber = str_replace("<0025>", "", $MyArray1[24]);   
                                $location = str_replace("<0028>", "", $MyArray1[27]);       
                                $num_rows++;

                                    ?>

                        
                                <tr>
                                    <td style="text-align:center"><?php echo $num_rows; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $creator; ?></td>
                                    <td><?php echo $prefix; ?></td>
                                    <td><?php echo $callnumber; ?></td>
                                    <td><?php echo $location; ?></td> 

                                </tr>
                        
				            <?php } }  ?>
                        
					</tbody>
					</table>
				
                <!-- end content here -->
            </div>
        </div>
    </div>
</div><!--/row-->



<?php include('footer.php'); ?>
