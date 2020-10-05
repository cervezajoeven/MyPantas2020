<?php include('header.php'); ?>

<?php include('./policy/header_policy.php'); ?> 


	<body>
		<div class="container box">
			<h1 align="center">THESAURUS LIST OF TERMS</h1>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
                
				    <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
                    <a href="../print_internet_list.php" target="_blank" style="background:none;">
 				    <button type="button" id="print_button" class="btn btn-info btn-lg">Print</button>     
                    </a>    
				</div>                
				<br /><br />
				
                <table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<!-- <th width="35%">ID</th> -->
                            <th width="70%">Preferred term</th>
							<th width="10%">Edit</th>
							<th width="10%">Delete</th>
 							<th width="10%">View</th>                           
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</body>
</html>


<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add thesaurus term</h4>
				</div>
            
				<div class="modal-body">
					<label>Descriptor</label>
					<input type="text" name="title" id="title" class="form-control" required />
					<br />

 					<label>Scope note</label>
					<input type="text" name="sn" id="sn" class="form-control" />
					<br />     
                    
  					<label>Broader term</label>
					<input type="text" name="bt" id="bt" class="form-control" />
					<br />    
                    
					<label>Narrower term</label>
					<input type="text" name="nt" id="nt" class="form-control" />
					<br />       
                    
					<label>Related term</label>
					<input type="text" name="rt" id="rt" class="form-control" />
					<br />                    
                    
 					<label>Use</label>
					<input type="text" name="use" id="use" class="form-control" />
					<br />                   
                    
 					<label>Use for</label>
					<input type="text" name="uf" id="uf" class="form-control" />
					<br />    
                    
					<label>Subject</label>
					<input type="text" name="subject" id="subject" class="form-control" />
					<br />
                    
 					<label>Language used</label>
					<input type="text" name="lang" id="lang" class="form-control" />
					<br />      
                    
					<label>Reference</label>
					<input type="text" name="ref" id="ref" class="form-control" />
					<br />    
                    
  					<label>Image location</label>
					<input type="text" name="image_location" id="image_location" class="form-control" />
					<br />                     
                    
  
				</div>
            
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />

					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />                    
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
            
			</div>
		</form>
	</div>
</div>

<div id="userModal2" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add thesaurus term</h4>
				</div>
            
				<div class="modal-body">
					<label>Descriptor</label>
					<input type="text" name="title" id="title" class="form-control" required />
					<br />

 					<label>Scope note</label>
					<input type="text" name="sn" id="sn" class="form-control" />
					<br />     
                    
  					<label>Broader term</label>
					<input type="text" name="bt" id="bt" class="form-control" />
					<br />    
                    
					<label>Narrower term</label>
					<input type="text" name="nt" id="nt" class="form-control" />
					<br />       
                    
					<label>Related term</label>
					<input type="text" name="rt" id="rt" class="form-control" />
					<br />                    
                    
 					<label>Use</label>
					<input type="text" name="use" id="use" class="form-control" />
					<br />                   
                    
 					<label>Use for</label>
					<input type="text" name="uf" id="uf" class="form-control" />
					<br />    
                    
					<label>Subject</label>
					<input type="text" name="subject" id="subject" class="form-control" />
					<br />
                    
 					<label>Language used</label>
					<input type="text" name="lang" id="lang" class="form-control" />
					<br />      
                    
					<label>Reference</label>
					<input type="text" name="ref" id="ref" class="form-control" />
					<br />    
                    
  					<label>Image location</label>
					<input type="text" name="image_location" id="image_location" class="form-control" />
					<br />                     
                    
  
				</div>
            
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />

                 
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
            
			</div>
		</form>
	</div>
</div>


<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add thesaurus term");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch_thesaurus.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[1, 2],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var title = $('#title').val();
		//var maintext = $('#maintext').val();      
        
		//if(title != '' && maintext != '')
		if(title != '')            
		{
			$.ajax({
				url:"insert_thesaurus.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("The fields are required.");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single_thesaurus.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#title').val(data.title);
				//$('#maintext').val(data.maintext);
                $('#sn').val(data.sn);              
                $('#bt').val(data.bt);
                $('#nt').val(data.nt);              
                $('#rt').val(data.rt);                
                $('#use').val(data.use);              
                $('#uf').val(data.uf);                
                $('#subject').val(data.subject);              
                $('#lang').val(data.lang);      
                $('#ref').val(data.ref);              
                $('#image').val(data.image);                
                

				$('.modal-title').text("Edit thesaurus term");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
    
	$(document).on('click', '.view', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"view_single_thesaurus.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#title').val(data.title);
				//$('#maintext').val(data.maintext);
                $('#sn').val(data.sn);              
                $('#bt').val(data.bt);
                $('#nt').val(data.nt);              
                $('#rt').val(data.rt);                
                $('#use').val(data.use);              
                $('#uf').val(data.uf);                
                $('#subject').val(data.subject);              
                $('#lang').val(data.lang);      
                $('#ref').val(data.ref);              
                $('#image').val(data.image);                
                

				$('.modal-title').text("View thesaurus term");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("View");
				$('#operation').val("View");
			}
		})
	});    
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this record?"))
		{
			$.ajax({
				url:"delete_thesaurus.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>


