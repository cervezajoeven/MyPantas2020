<?php ob_start(); ?>
<?php require ('connect.php'); ?>
<?php require ('session.php'); ?>
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
				<center><h5 style = "font-style:Calibri; margin-top:-14px;">BOOK LOAN HISTORY LIST</h5> </center>
            <br />
            <center><button type="submit" id="print" onclick="printPage()">Print</button>	</center>
			
	
            
		<br/>
		<br/>
		<br/>
<?php

                     //       $result = $sLink->query("select * from borrower order by name, id_number, date_loan"); 
                     $result = $sLink->query("select client.name, borrower.* from borrower INNER JOIN client on borrower.id_number = client.idnum where DATE_FORMAT(due_date, '%Y-%m-%d') < CURDATE()");                
?>
						<table class="table table-striped" border="1">
						  <thead>
								<tr>
  								    <th style="width:80px;">Number</th>             
                                    <th width="25">ID number</th>
                                    <th width="25">Name</th>                                   
                                    <th width="25">Accession</th>
                                    <th width="30">Title</th>
                                    <th width="30">Date borrowed</th>
                                    <th width="30">Date due</th>	
                                    <th width="35">Library</th>	                           
                             
                                 
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
                                <td><?php echo $row['id_number']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['accession_number']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['date_borrowed']; ?></td>
                                <td><?php echo $row['due_date']; ?></td>
                                <td><?php echo $row['library']; ?></td>     
     
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 



							<?php
                                $charger = $_SESSION['charger']; 
                                $stmt = $sLink->query("select * from user where username='$charger'");
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);  { 
							?>
                            <h2><?php echo '<span style="color:blue; font-size:15px;">Prepared by: '. $row['lastname']." (".$row['grp'].") ".'</span>';?></h2>
								<?php } ?>
            
                            
                            <b style="color:blue;">Date Prepared:</b>
                            <b style="color:blue;"><?php include('currentdate.php'); ?></b>



			</div>
	
	
	            <center><button type="submit" id="print" onclick="printPage()">Print</button>	</center>
			
<br />
	

	</div>
</body>


</html>