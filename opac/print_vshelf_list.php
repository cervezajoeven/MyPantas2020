<?php ob_start(); ?>
<?php require ('connect.php'); ?>
<?php require ('session.php'); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>

<html>

<head>
		<title><?php echo $print_header; ?></title>
		
		<style>
		
		
.container {
	width:100%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}

@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}
		
		</style>
		
<script>
function printPage() {
    window.print();
}
</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
				<img src = "./images/LibroHead.jpg" style = " margin-top:-17px; float:left; margin-left:115px; margin-bottom:-6px; width:100px; height:100px;">
				<img src = "./images/myrda.png" style = " margin-top:-17px; float:right; margin-right:115px; width:100px; height:100px;" >
				<center><h5 style = "font-style:Calibri; margin-top:-14px;"></h5> &nbsp; &nbsp; </center>
				<center><h4 style = "font-style:Calibri; margin-top:-14px;"><?php echo $print_header; ?></h4> </center>
				<center><h5 style = "font-style:Calibri; margin-top:-14px;">MY VIRTUAL SHELF LIST</h5> </center>
            <br />
            <center><button type="submit" id="print" onclick="printPage()">Print</button>	</center>
			
	
            
		<br/>
		<br/>
		<br/>
<?php
                        // Start the session
                        session_start();
                        $idnumber = $_SESSION["idnumber"];            
                        $result = $sLink->query("select * from vshelf where idnum = '$idnumber' order by title"); 
            
?>
						<table class="table table-striped" border="1">
						  <thead>
								<tr>
									<th style="width:100px;">Number</th>
                                    <th style="width:250px;">Title</th>
                                    <th>Author</th>
                                    <th>Publication</th>
                                    <th style="width:100px;">Call number</th>
                                    <th style="width:200px;">Location</th>
                                    
								</tr>
						  </thead>   
						  <tbody>
<?php
                            $num_rows = 0;  
                            while ($row = $result->fetch() ){        
                            $num_rows++;    

  
?>
							<tr>                                
                                <td	style="text-align:center;"><?php echo $num_rows; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['author']; ?></td>
                                <td><?php echo $row['publication']; ?></td>
                                <td><?php echo $row['call_number']; ?></td>
                                <td><?php echo $row['location']; ?></td>
       
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 






			</div>
	
	
	            <center><button type="submit" id="print" onclick="printPage()">Print</button>	</center>
			
<br />
	

	</div>
</body>


</html>