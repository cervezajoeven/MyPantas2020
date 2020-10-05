
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
			<h1 align="center">LIST OF BOOKS</h1>
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
							<th width="70%">Title of book</th>
                            <th width="10%">Type</th>							
							<th width="10%">Edit</th>
							<th width="10%">Delete</th>
                      
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
					<h4 class="modal-title">Add Book</h4>
				</div>
            
				<div class="modal-body">


                    <label>Title</label>
					<input type="text" name="str0" value="<?php echo $TitleStr[1]; ?>"  id="title" class="form-control" required />

                    <label>Statement of Responsibility</label>
					<input type="text" name="str1" value="<?php echo $TitleStr[2]; ?>"  id="responsibility" class="form-control" />
		
                    <label>Parallel title</label>
					<input type="text" name="str2" value="<?php echo $TitleStr[3]; ?>"  id="parallel" class="form-control" />
							  
                    <label>Preferred title</label>
					<input type="text" name="str36" value="<?php echo $TitleStr[37]; ?>"  id="preferred" class="form-control"  />

                    <label>Main creator</label>
					<input type="text" name="str3" value="<?php echo $TitleStr[4]; ?>"  id="main_creator" class="form-control" />
		  
                    <label>Other creator</label>
					<input type="text" name="str5" value="<?php echo $TitleStr[6]; ?>"  id="other_creator" class="form-control" />
				  
                    <label>Contributors</label>
					<input type="text"  name="str6" value="<?php echo $TitleStr[7]; ?>"  id="contributors" class="form-control" />

                    <label>Corporate body</label>
					<input type="text"  name="str7" value="<?php echo $TitleStr[8]; ?>"  id="corporate_body" class="form-control" />

                    <label>Place of publication</label>
					<input type="text"  name="str8" value="<?php echo $TitleStr[9]; ?>"  id="place" class="form-control" />
					  
                    <label>Publisher</label>
					<input type="text"  name="str9" value="<?php echo $TitleStr[10]; ?>"  id="publisher" class="form-control" />
					
                    <label>Date of publication</label>
					<input type="text"  name="str10" value="<?php echo $TitleStr[11]; ?>"  id="date_of_publication" class="form-control" />

                    <label>Edition statement</label>
					<input type="text" name="str11" value="<?php echo $TitleStr[12]; ?>"  id="edition" class="form-control"  />

                    <label>Extent of text</label>
					<input type="text" name="str12" value="<?php echo $TitleStr[13]; ?>"  id="extent" class="form-control"  />

                    <label>Illustrative content</label>
					<input type="text" name="str13" value="<?php echo $TitleStr[14]; ?>"  id="illustrative_content" class="form-control" />

                    <label>Dimension</label>
					<input type="text" name="str14" value="<?php echo $TitleStr[15]; ?>"  id="dimension" class="form-control" />

                    <label>Accompanying materials</label>
					<input type="text" name="str15" value="<?php echo $TitleStr[16]; ?>"  id="accompanying_materials" class="form-control" />

                    <label>Series title</label>
					<input type="text" name="str16" value="<?php echo $TitleStr[17]; ?>"  id="series" class="form-control" />

                    <label>Supplementary content</label>
					<input type="text" name="str17" value="<?php echo $TitleStr[18]; ?>"  id="supplementary" class="form-control" />
					  
                    <label>Identifier/ISBN</label>
					<input type="text" name="str18" value="<?php echo $TitleStr[19]; ?>"  id="isbn" class="form-control" />
					  
                    <label>Content type</label>
                   <select name="str38" class="form-control" >
							<option value="content_type">Text</option>
					</select>					  
						  
                    <label>Media type</label>
                    <select name="str39" class="form-control" >
							<option value="media_type">Unmediated</option>				
					</select>					  
					  
                    <label>Carrier type</label>
                    <select name="str40" class="form-control" >
							<option value="carrier_type">Volume</option>				
					</select>	

                    <label>Uniform Resource Locator</label>
					<input type="text" name="str37" value="<?php echo $TitleStr[38]; ?>"  id="url" class="form-control" />
					 
                    <label>Access point - Topical</label>
					<input type="text" name="str19" value="<?php echo $TitleStr[20]; ?>"  id="topical" class="form-control" />
		
                    <label>Access point - Personal</label>
					<input type="text"  name="str20" value="<?php echo $TitleStr[21]; ?>" id="personal" class="form-control" />
						  
                    <label>Access point - Corporate</label>
					<input type="text"  name="str21" value="<?php echo $TitleStr[22]; ?>" id="corporate" class="form-control" />
					  
                    <label>Access point - Geographical</label>
					<input type="text"  name="str22" value="<?php echo $TitleStr[23]; ?>" id="geographical" class="form-control" />
					  
                    <label>Prefix</label>
                    <select name="str23" id="prefix" class="form-control" >
						<option ><?php echo $TitleStr[24]; ?></option>						  
						<?php include('prefix.php'); ?>		
					</select>

                    <label>Call number</label>
					<input type="text"  name="str24" value="<?php echo $TitleStr[25]; ?>" id="call_number" class="form-control" />
					  
                    <label>Accession number</label>
					<input type="text"  name="str25" value="<?php echo $TitleStr[26]; ?>" id="accession" class="form-control" />
					  
                    <label>Language of text</label>
                    <select name="str26" id="language" class="form-control" >
						<option ><?php echo $TitleStr[27]; ?></option>
						<?php include('language.php'); ?>
					</select>

                    <label>Library/Location</label>
                    <select name="str27" id="location" class="form-control" >	
						<option ><?php echo $TitleStr[28]; ?></option>
						<?php include('location.php'); ?>						
					</select>				  

                    <label>Electronic access</label>
					<input type="text"  name="str28" value="<?php echo $TitleStr[29]; ?>" id="electronic_access" class="form-control"  />
					  
                    <label>Cover image</label>
					<input type="text"  name="str41" value="<?php echo $row['images']; ?>" id="cover" class="form-control" />

	
                    <label>Type of material</label>
						<select name="mtype" id="mtype" class="form-control selectpicker" data-live-search="true" multiple>
							<option value="bio">Biography</option>
							<option value="circ">Circulation</option>
							<option value="easy">Easy book</option>
							<option value="fic">Fiction</option>
							<option value="fil">Filipiniana</option>
							<option value="fr">Filipiniana/Reference</option>
							<option value="gc">General circulation</option>
							<option value="ref">Reference</option>
							<option value="res">Reserve</option>
							<option value="schl">Scholastic</option>						
							<option value="sm">Special collection</option>						
							<option value="tr">Teacher/Reference</option>
						</select>
		
                    <label>Type of material</label>
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="gc" value="gc" <?php echo $gcchecked; ?> >General circulation</div>
						  <div class="col-sm-4"><input type="checkbox" name="tr" value="tr" <?php echo $trchecked; ?> >Teacher reference</div>
						</div>	
					
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="fr" value="fr" <?php echo $frchecked; ?> >Filipiniana/Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="circ" value="circ" <?php echo $circchecked; ?> >Circulation</div>
						</div>						

						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="ref" value="ref" <?php echo $refchecked; ?> id = "ref">Reference</div>
						  <div class="col-sm-4"><input type="checkbox" name="fil" value="fil" <?php echo $filchecked; ?> id="fil" >Filipiniana</div>
						</div>	

						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="sm" value="sm" <?php echo $smchecked; ?>>Special collection</div>
						  <div class="col-sm-4"><input type="checkbox" name="bio" value="bio" <?php echo $biochecked; ?> >Biography</div>
						</div>	
					
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="res" value="res" <?php echo $reschecked; ?> >Reserve</div>
						  <div class="col-sm-4"><input type="checkbox" name="schl" value="schl" <?php echo $schlchecked; ?> >Scholastic</div>
						</div>		
						
						<div class="row">
						  <div class="col-sm-4"><input type="checkbox" name="easy" value="easy" <?php echo $easychecked; ?> >Easy</div>
						  <div class="col-sm-4"><input type="checkbox" name="fic" value="fic" <?php echo $ficchecked; ?> >Fiction</div>
						</div>							
					  
                    <label>Volume/Copy</label>
					<input type="text"  name="str29" value="<?php echo $row['copy']; ?>" id="n_copy" class="form-control" required />

                    <label>On-shelf</label>
					<input type="text"  name="str30" value="<?php echo $row['inn']; ?>" id="on_shelf" class="form-control" required />
					  
                    <label>Out</label>
					<input type="text"  name="str31" value="<?php echo $row['t_out']; ?>" id="t_out" class="form-control" required />

                    <label>Times Out</label>
					<input type="text"  name="str35" value="<?php echo $row['t_timesout']; ?>" id="t_timesout" class="form-control" />

                    <label>Content note</label>
					<textarea class="form-control" rows="5" id="content" name="str32"><?php echo $TitleStr[33]; ?></textarea>

                    <label>Abstract/Summary</label>
                    <textarea class="form-control" rows="5" id="abstract" name="str33"><?php echo $TitleStr[34]; ?></textarea>
					  
                    <label>Review</label>
                    <textarea class="form-control" rows="5" id="review" name="str34"><?php echo $TitleStr[35]; ?></textarea>

                    <label>Entered by</label>
					<input type="text"  name="entered_by" value="<?php echo $row['entered_by']; ?>" id="entered_by" class="form-control"  />
					  
                    <label>Updated by</label>
                    <input type="text" name="updated_by" value="<?php echo $row['updated_by']; ?>" id="updated_by" class="form-control"   />

                    <label>Date entered</label>
                    <input type="text" name="date_entered" value="<?php echo $row['date_entered']; ?>" id="date_entered" class="form-control"   />

                    <label>Date updated</label>
                    <input type="text" name="date_updated" value="<?php echo $row['date_updated']; ?>"id="date_updated"  class="form-control"   />
					  
		  
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
		$('.modal-title').text("Add book and monograph");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch_books.php",
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
		var title = $('#title').val();
		//var maintext = $('#maintext').val();      
        
		//if(title != '' && maintext != '')
		if(title != '')            
		{
			$.ajax({
				url:"insert_books.php",
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
			url:"fetch_single_books.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');

				$('#title').val(data.title);
				$('#responsibility').val(data.responsibility);
				$('#parallel').val(data.parallel);
				$('#preferred').val(data.preferred);
                $('#main_creator').val(data.main_creator);              
                $('#call_number').val(data.call_number);
                $('#other_creator').val(data.other_creator); 
                $('#corporate_body').val(data.corporate_body); 				    
				$('#contributors').val(data.contributors);              
                $('#place').val(data.place);                
                $('#publisher').val(data.publisher);              
                $('#date_of_publication').val(data.date_of_publication); 
				$('#edition').val(data.edition);               
                $('#extent').val(data.extent); 
				$('#illustrative_content').val(data.illustrative_content); 
				$('#dimension').val(data.dimension);                 
                $('#language').val(data.language);    

				$('#accompanying_materials').val(data.accompanying_materials);                 
                $('#series').val(data.series); 
				
				$('#isbn').val(data.isbn);                 
                $('#supplementary').val(data.supplementary); 

				$('#prefix').val(data.prefix);                 
                $('#url').val(data.url); 

                $('#topical').val(data.topical);   
				$('#personal').val(data.personal);         
				$('#corporate').val(data.corporate); 
				$('#geographical').val(data.geographical); 
                $('#accession').val(data.accession);   
				$('#location').val(data.location);
				$('#n_copy').val(data.n_copy);              
                $('#on_shelf').val(data.on_shelf);               
				$('#t_out').val(data.t_out);              
                $('#t_timesout').val(data.t_timesout);   

				$('#content').val(data.content);  
				$('#abstract').val(data.abstract);  
				$('#review').val(data.review);               
                $('#electronic_access').val(data.electronic_access);             
                $('#cover').val(data.cover);   

				$('#entered_by').val(data.entered_by);  
				$('#updated_by').val(data.updated_by);  
				$('#date_entered').val(data.date_entered);               
                $('#date_updated').val(data.date_updated);  

				$('#mtype').val(data.mtype); 
				$('#ref').val(data.ref); 

				//$('#filchecked').val(data.fil);

				$('.modal-title').text("Edit book catalog record");
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
			url:"view_single_books.php",
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
                

				$('.modal-title').text("View book catalog record");
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
				url:"delete_books.php",
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


