<?php include('header.php'); ?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="#">Books</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> BOOKS AND MANUSCRIPTS</h2>


                <div class="box-icon">
                    <!--<a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
            
					<div class="alert alert-info">
						<?php include ('modal_add_book.php') ?>
                     
 						<?php include ('modal_marc_book.php') ?>  
                        
                        <a href="print_book_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>     
                        
                        <!--
                        <a href="marc_book_extract.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Marc import</button>
						</a>   
                        -->

                        <a href="./multiple_file_upload/index.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Marc file upload</button>
						</a>                    
                    </div>

                    
                    <form ACTION="" name="mySearch" id="mySearch" onsubmit="return checkscript()" METHOD="GET">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="col-md-6 col-md-offset-3 column">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search" id="search" size="60" placeholder="Enter keywords....." autofocus required />
                                            <div class="input-group-btn">
                                                <button class="btn btn-info" type="submit" name="btn_click" value="basic" id="btn_basic"><i class="fa fa-search"></i> Find </button>
                                            </div>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </form>
                    <br />

                 
                    <table id="galileo" class="table table-striped table-bordered" cellspacing="0" width="100%">

                        <thead>
                            <tr>
                           
                                <th style="width:1000px">Title</th>
                                <th style="width:150px">Type</th>
                                <th style="width:150px; text-align:center">Copy</th>
                                <th style="width:250px">Action</th>
                            </tr>
                        </thead>
                        
                       <tbody>
                           
                                <?php

                                if ($_REQUEST['submit']) {
                                     if (isset($_GET['search']) && $_GET['search']!=""); 
                                        $search = $_POST['search'];
                                        //$result = mysqli_query($con,"SELECT * FROM `books` WHERE maintext like '%$search%'");
                                        $result = $sLink->query("SELECT * FROM books WHERE maintext like '%$search%' ");                         
                                                                                                
                                        //$result = $sLink->query("select * from client order by name");                         
                                        $count = $result->rowcount();              
                                    
                                        if ($count > 0){
                                            $num_rows = 0;
                                            $num_rows = $start;                    
                                    
                                            while ($row = $result->fetch() ){                        
                                                $id=$row['bkid'];      
                                                $num_rows++;
                                        
                                        ?>

                                        <tr class="delete_mem<?php echo $id ?>">

                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['tm']; ?></td>
                                            <td><?php echo $row['copy']; ?></td>

                                            <td class="center">
                                                <a class="btn btn-primary" href="edit_client.php<?php echo '?id='.$id; ?>">
                                                    <i class="glyphicon glyphicon-edit icon-white"> </i> Edit
                                                </a>
                                                <a class="btn btn-danger" id="<?php echo $id; ?>">
                                                    <i class="glyphicon glyphicon-trash icon-white"> </i> Delete
                                                </a>
                                            </td>
                                        
                                        </tr>

                                <?php } } } ?>                    

                       </tbody>
                    </table>
                    
            
                <!-- end content here -->




            </div>
        </div>
    </div>
    
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <!-- datatables js -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>   


    <!-- let's begin the script -->
    <script type="text/javascript" language="javascript" >

         $("#galileo").dataTable({
               'bProcessing': true,
               'bServerSide': true,


                //disable order and searching 
                  "columnDefs": [ {
                  "targets": [3],
                  "orderable": false,
                  "searchable": false
                } ],
                "ajax":{
                url :"data_book.php",
                type: "post",
                //cache: false,
                //async: false,
                //'responsive': true,
                //'deferRender': true,
                //'deferLoading': 10,               

              error: function (xhr, error, thrown) {
                console.log(xhr);

                }
              },

            });

        $(document).ready(function() {
            $('.btn-danger').click(function() {
                var id = $(this).attr("bkid");
                if (confirm("Are you sure you want to delete this record?")) {
                    $.ajax({
                        type: "POST",
                        url: "delete_book_ajax.php",
                        data: ({
                            id:id
                        }),
                        cache: false,
                        success: function(html) {
                            $(".delete_mem" + id).fadeOut('slow');
                        }
                    });
                } else {
                    return false;
                }
            });

            });       
        </script>   
   
</div><!--/row-->


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>
