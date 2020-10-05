<?php include('./policy/header_policy.php'); ?>   
    
<div>
    <ul class="breadcrumb">
        <li>
            <a href="./home.php">Home</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
    </ul>
</div>

	<body>
		<div class="container box">
			<h1 align="center">GROUP ITEM RECORDS</h1>
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
                                            <th width="40%">Computer name</th>
                                            <th width="30%">Barcode</th>
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
					<p class="bg-primary"><h4 class="modal-title">Update Computer Item Record</h4></p>
				</div>
				<div class="modal-body">
					<label for="computer" class="col-sm-8 control-label">Computer Name</label>
                    <input type="text" name="computer" class="form-control" id="computer" placeholder="Computer name....." required />
                    <br />
					<label for="barcode" class="col-sm-8 control-label">Barcode</label>
                    <input type="text" name="barcode" class="form-control" id="barcode" placeholder="Barcode....." required />
				</div>
            
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-info" value="Update" />
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
			url:"fetch_computer.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[2, 3],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var name = $('#computer').val();
		var loan_limit = $('#barcode').val();      
        
		if(computer != '' && barcode != '')
		{
			$.ajax({
				url:"insert_computer.php",
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
			url:"fetch_single_computer.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#computer').val(data.computer);
				$('#barcode').val(data.barcode);
                                      
				$('.modal-title').text("Edit user");
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
				url:"delete_computer.php",
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


<?php include('footer.php'); ?>
