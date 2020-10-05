<?php include('header.php'); ?>


<style type="text/css">
#upload_container {
	border-top:#F0F0F0 2px solid;
	background:#FAF8F8;
	padding:10px;
	width:600px;
}
#upload_container label {
	margin:2px; 
	font-size:1em; 
	font-weight:bold;
	}
.demoInputBox {
	padding:5px; 
	border:#F0F0F0 1px solid; 
	border-radius:4px; 
	background-color:#FFF;
	}
#progress-bar {
	background-color: skyblue;
	height:20px;color: #FFFFFF;
	width:0%;
	-webkit-transition: width .3s;
	-moz-transition: width .3s;
	transition: width .3s;
	}
.btnSubmit {
	background-color:azure;
	padding:10px 40px;
	color:blue;
	border:skyblue 1px solid; 
	border-radius:4px;
	}
#progress-div {
	border:blue 2px solid;
	padding: 5px 0px;
	margin:30px 0px;
	border-radius:4px;
	text-align:center;
	}
#targetLayer {
	width:100%;
	text-align:center;
	}
#targetLayer img {
	border:red 2px solid;
	padding:8px;
	border-radius:8px;
	}

</style>

<script src="js/code_js.js" type="text/javascript"></script>

<script src="js/code_js1.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() { 
	 $('#upload_container').submit(function(e) {	
		if($('#userImage').val()) {
			e.preventDefault();
			$('#loader-icon').show();
			$(this).ajaxSubmit({ 
				target:   '#targetLayer', 
				beforeSubmit: function() {
				  $("#progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){	
					$("#progress-bar").width(percentComplete + '%');
					$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
				},
				success:function (){
					$('#loader-icon').hide();
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
}); 
</script>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Accession list</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> LIST OF ACCESSION RECORDS</h2>
 
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
        
        <a href="accession_generate_book.php" target="_blank" style="background:none;">
            <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-inbox"></i> Generate</button>
        </a>
        
        <a href="print_book_accession_list.php" target="_blank" style="background:none;">
		      <button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> Print </button>
        </a> 
            
        <a href="print_barcode_book.php" target="_blank" style="background:none;">
		<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-barcode"></i> Barcode</button>
		</a>    
                        <a href="export_to_csv.php?action=8" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-export"></i> Export to CSV </button>
						</a>        
	</div>   
    
    <div class="box-content">
       

         <!-- Start content here -->
    <table id="galileo" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
						<th>Accession</th>
						<th width='250px'>Title</th>
						<th>Creator</th>
						<th>Date/Year</th>
                        <th width="200px">Publisher</th> 
                        <th>Call number</th>        
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
            url :"data_accession_book.php",
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
