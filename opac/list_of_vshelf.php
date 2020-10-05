<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">My Virtual Shelf</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">

            <div class="box-content">
                <!-- Start content here -->
				
					<div class="alert alert-info">
						<?php include ('modal_none.php') ?>
                        
                        <a href="print_vshelf_list.php?" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="fa fa-print"></i> Print </button>
						</a>   
                        
                         <a href="export_to_csv.php?action=24" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="fa fa-exchange"></i> Export to CSV </button>
						</a>          
                       
                       <a style="background:none;">
                        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-warning pull-right"><i class=" fa fa-remove"></i> Multiple delete</button>
                       </a>                         
					</div>

					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                       <thead>
                          <tr>
                            <th>ID</th>                                
                            <th>Title</th>  
                            <th>Author</th>
                            <th>Source</th>
                            <th>Date</th>
                            <th>Call number</th>
                            <th>Location</th>
                            <th>Actions</th>
                          </tr>
                       </thead>
                       <tbody>
                          <?php
    
                            // Start the session
                            session_start();  
                            //$id=$_GET['passwd'];	
                            $id = $_SESSION['passwd'];                        
                            $_SESSION["idnumber"] = $id; //$_GET['passwd'];
                            $stmt = $sLink->query("select * from client where idnum='$id'");
                            $found = $stmt->rowcount();   
                            if ($found==0){
                                echo "<script>alert('ID number not found, kindly verify!');</script>";
                            }
                            else{

                                $result = $sLink->query("SELECT * FROM vshelf where idnum = '$id'");  
                                $count = $result->rowcount();              

                                if ($count > 0){
                                    $num_rows = 0;
                                    $num_rows = $start;                      

                                while ($row = $result->fetch() ){                        
                                $id=$row['id'];      
                                $num_rows++;

                                 ?>
                                  <tr class="delete_mem<?php echo $id ?>">
                                    <td style="text-align:center"><?php echo $num_rows; ?>&nbsp;<input type="checkbox" name="id_recod[]" class="delete_vshelf" value="<?php echo $row["id"]; ?>" /></td>                                 
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['author']; ?></td>
                                    <td><?php echo $row['publication']; ?></td>
                                    <td><?php echo $row['pub_date']; ?></td>
                                    <td><?php echo $row['call_number']; ?></td>
                                    <td><?php echo $row['location']; ?></td>

                                    <td width="100">                                
                                    <a class="btn btn-danger" id="<?php echo $id; ?>">
                                       <i class="fa fa-trash"> </i> Delete
                                     </a>
                                 </td>
                              </tr>
                           
                          <?php }  } }?>
                           
                           
                       </tbody>
                    </table>

                <!-- end content here -->
            </div>
        </div>
    </div>
</div><!--/row-->



<script type="text/javascript">
    $(document).ready(function() {
        $('.btn-danger').click(function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    type: "POST",
                    url: "delete_vshelf.php",
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
        
        
         $('#btn_delete').click(function(){

          if(confirm("Are you sure you want to delete these records?"))
          {
           var id = [];

           $(':checkbox:checked').each(function(i){
            id[i] = $(this).val();
           });

           if(id.length === 0) //tell you if the array is empty
           {
            alert("Please Select atleast one checkbox");
           }
           else
           {
            $.ajax({
             url:'delete_vshelf_ajax.php',
             method:'POST',
             data:{id:id},
             success:function()
             {
              for(var i=0; i<id.length; i++)
              {
               $('tr#'+id[i]+'').css('background-color', '#ccc');
               $('tr#'+id[i]+'').fadeOut('slow');
              }
             }

            });
           }

          }
          else
          {
           return false;
          }
         });       
        
        
    });
    
    
    
</script>



<?php include('footer.php'); ?>
