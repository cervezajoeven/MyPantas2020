
<?php include('header.php'); ?>  

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Books</a>
        </li>
    </ul>
</div>

    	$sub_array[] = $row["library_name"];
	$sub_array[] = $row["heading"];
	$sub_array[] = $row["photo_hour"];
	$sub_array[] = $row["photo_fine"];  
	$sub_array[] = $row["ov_cutoff"];
	$sub_array[] = $row["ov_fine_hour"]; 
	$sub_array[] = $row["time_open"];
	$sub_array[] = $row["time_closing"];
	$sub_array[] = $row["photo_path"];  
    
	<body>
		<div class="container box">
			<h1 align="center">GROUP NAME</h1>
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
							<th width="40%">Library/Service</th>
 							<th width="30%">Heading</th>
							<th width="30%">Photocopy hour</th>        
							<th width="25%">Photocopy fine</th>
 							<th width="25%">Overnight cutoff</th>
							<th width="25%">Overnight fine</th>     
 							<th width="25%">Time open</th>
 							<th width="25%">Time closing</th>
							<th width="25%">Picture path</th>                             
							<th width="30%">Edit</th>
							<th width="30%">Delete</th>
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
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<label>Enter Group Name</label>
					<input type="text" name="name" id="name" class="form-control" />
					<br />
					<label>Enter Loan Limit</label>
					<input type="text" name="loan_limit" id="loan_limit" class="form-control" />
					<br />
					<label>Enter Loan Period</label>
					<input type="text" name="loan_period" id="loan_period" class="form-control" />
					<br />
					<label>Enter Reserve Limit</label>
					<input type="text" name="reserve_limit" id="reserve_limit" class="form-control" />
					<br />

					<label>Enter Reborrow Limit</label>
					<input type="text" name="reborrow_limit" id="reborrow_limit" class="form-control" />
					<br />
					<label>Enter Fine Each Day</label>
					<input type="text" name="fine_each_day" id="fine_each_day" class="form-control" />
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
		$('.modal-title').text("Add User");
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
		var name = $('#name').val();
		var loan_limit = $('#loan_limit').val();
        
		var loan_period = $('#loan_period').val();
		var reserve_limit = $('#reserve_limit').val();      
        
 		var reborrow_limit = $('#reborrow_limit').val();
		var fine_each_day = $('#fine_each_day').val();        
        
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
        
		if(name != '' && loan_limit != '' && fine_each_day != '')
		{
			$.ajax({
				url:"insert.php",
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
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#name').val(data.name);
				$('#loan_limit').val(data.loan_limit);
                
				$('#loan_period').val(data.loan_period);
				$('#reserve_limit').val(data.reserve_limit);
                
				$('#reborrow_limit').val(data.reborrow_limit);
				$('#fine_each_day').val(data.fine_each_day);                
                      
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"delete.php",
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