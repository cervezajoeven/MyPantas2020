
<?php include('header_policy.php'); ?>  

<div>
    <ul class="breadcrumb">
        <li>
            <a href="../home.php">Home</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
    </ul>
</div>


	<body>
		<div class="container box">
			<h1 align="center">LIBRARY AND SERVICES SETTING</h1>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<!-- <th width="35%">ID</th> -->
							<th width="25%">Library/Service</th>
 							<th width="25%">Heading</th>
							<th width="10%">Photo hour</th>        
							<th width="10%">Photo fine</th>
 							<th width="10%">Over- night cutoff</th>
							<th width="10%">Over- night fine</th>     
 							<th width="10%">Fine per day</th>                                
 							<th width="15%">Time open</th>
 							<th width="15%">Time closing</th>
							<th width="25%">Picture path</th>                             
							<th width="20%">Edit</th>
							<th width="20%">Delete</th>
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
					<h4 class="modal-title">Add Library or Service</h4>
				</div>
				<div class="modal-body">
					<label>Enter Library/Service</label>
					<input type="text" name="library_name" id="library_name" class="form-control" />
					<br />
					<label>Heading</label>
					<input type="text" name="heading" id="heading" class="form-control" />
					<br />
					<label>Photo hour</label>
					<input type="text" name="photo_hour" id="photo_hour" class="form-control" />
					<br />
					<label>Photo fine</label>
					<input type="text" name="photo_fine" id="photo_fine" class="form-control" />
					<br />
					<label>Over- night cutoff</label>
					<input type="text" name="overnight_cutoff" id="overnight_cutoff" class="form-control" />
					<br />
					<label>Over- night fine</label>
					<input type="text" name="overnight_fine" id="overnight_fine" class="form-control" />
					<br />
                    
 					<label>Fine per day</label>
					<input type="text" name="fine_per_day" id="fine_per_day" class="form-control" />
					<br />
					<label>Time open</label>
					<input type="text" name="time_open" id="time_open" class="form-control" />
					<br />
					<label>Time closing</label>
					<input type="text" name="time_closing" id="time_closing" class="form-control" />
					<br />
					<label>Picture path</label>
					<input type="text" name="picture_path" id="picture_path" class="form-control" />
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

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add Library or Service");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch_services.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[10, 11],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var library_name = $('#library_name').val();
		var heading = $('#heading').val();       
		var photo_hour = $('#photo_hour').val();
		var photo_fine = $('#photo_fine').val();
 		var overnight_cutoff = $('#overnight_cutoff').val();
		var overnight_fine = $('#overnight_fine').val();    
		var fine_per_day = $('#fine_per_day').val();
		var time_open = $('#time_open').val();
 		var time_closing = $('#time_closing').val();
		var picture_path = $('#picture_path').val();  
        
		//var extension = $('#user_image').val().split('.').pop().toLowerCase();
		//if(extension != '')
		//{
		//	if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
		//	{
		//		alert("Invalid Image File");
        //				$('#user_image').val('');
		//		return false;
		//	}
		//}	
        
		if(library_name != '' && heading != '' && fine_per_day != '')
		{
			$.ajax({
				url:"insert_services.php",
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
			alert("The fields are required");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single_services.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
                
				$('#library_name').val(data.library_name);
				$('#heading').val(data.heading);   
				$('#photo_hour').val(data.photo_hour);
				$('#photo_fine').val(data.photo_fine);
                
				$('#overnight_cutoff').val(data.overnight_cutoff);
				$('#overnight_fine').val(data.overnight_fine);    
				$('#fine_per_day').val(data.fine_per_day);
				$('#time_open').val(data.time_open);
				$('#time_closing').val(data.time_closing);
				$('#picture_path').val(data.picture_path);                               
                      
				$('.modal-title').text("Edit Library or Service");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this record?"))
		{
			$.ajax({
				url:"delete_services.php",
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