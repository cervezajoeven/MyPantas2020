<?php 
include('header.php'); 

?>

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
                        <!--
			        	<input type="file" class="form-control-file" id="marc" name="marc" placeholder="marc record you want to import" required>
                        -->
                        <a href="print_book_list.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
						</a>     

                        <a href="./file_upload/index.php" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-save"></i> Marc file upload</button>
						</a>                    
                    </div>

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
