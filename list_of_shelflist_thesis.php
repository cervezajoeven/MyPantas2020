<?php include('header.php'); ?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Academic Courseworks Shelf list</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-graduation-cap"></i>ACADEMIC COURSEWORKS SHELF LIST RECORDS</h2>

                <div class="box-icon">
                    <!--<a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
			
				
        </div>    
    </div> 


     	<div class="alert alert-info">
		<?php include ('modal_none.php') ?>   
        
        <a href="print_thesis_shelflist_list.php" target="_blank" style="background:none;">
		      <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
        </a>   
            
        <a href="export_to_csv.php?action=14" target="_blank" style="background:none;">
		      <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
		</a>             
                        
        </div>
    
    <div class="box-content">
       
         <!-- Start content here -->
    <table id="galileo" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                        <th>Call number</th> 
						<th width='250'>Title</th>
						<th>Creator</th>
						<th>Date/Year</th>
                        <th width='200'>Publisher</th> 
   						<th>Accession</th>    
                        <th>Action</th>   
            </tr>
        </thead>
       <tbody>
         
       </tbody>
    </table>
              


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <!-- datatables js -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>   


    <!-- let's begin the script -->
    <script type="text/javascript">
     $("#galileo").dataTable({
           'bProcessing': true,
            'bServerSide': true,
            //disable order dan searching pada tombol aksi
              "columnDefs": [ {
              "targets": [6],
              "orderable": false,
              "searchable": false

            } ],
            "ajax":{
            url :"data_shelflist_thesis.php",
            type: "post",  // method  , by default get
            //bisa kirim data ke server
            /*data: function ( d ) {
              
                      d.jurusan = "3223";
                  },*/
          error: function (xhr, error, thrown) {
            console.log(xhr);

            }
          },

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
