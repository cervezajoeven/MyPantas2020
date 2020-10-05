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
				<center><h5 style = "font-style:Calibri; margin-top:-14px;">EQUIPMENT ITEM LIST</h5> </center>
            <br />
            <center><button type="submit" id="print" onclick="printPage()">Print</button>	</center>
			
	
            
		<br/>
		<br/>
		<br/>
<?php
	
                            $result = $sLink->query("select * from newequipment order by description"); 
            
?>
						<table class="table table-striped" border="1">
						  <thead>
								<tr>
									<th style="width:100px;">Number</th>
                                    <th style="width:300px;">Item name</th>
                                    <th style="width:150px;">Barcode</th>
                                    <th style="width:150px;">Brand</th>
                                    <th style="width:150px;">Model</th>
                                    <th style="width:150px;">Serial number</th>
                                    <th style="width:100px;">Price</th>
                                    <th style="width:100px;">Status</th>	
                                    
								</tr>
						  </thead>   
						  <tbody>
<?php
                            $num_rows = 0;  
                            while ($row = $result->fetch() ){        
                            $num_rows++;    
                            $MyString1 = $row['maintext'];
  
?>
							<tr>                                
                                <td	style="text-align:center;"><?php echo $num_rows; ?></td>
                                <td style="text-align:left;"><?php echo $row['description']; ?></td>
                                <td style="text-align:left;"><?php echo $row['barcode']; ?></td>
                                <td style="text-align:left;"><?php echo $row['brand']; ?></td>
                                <td style="text-align:left;"><?php echo $row['model']; ?></td>
                                <td style="text-align:left;"><?php echo $row['sn']; ?></td>
                                <td style="text-align:left;"><?php echo $row['price']; ?> </td>
                                <td style="text-align:left;"><?php echo $row['status']; ?> </td> 
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