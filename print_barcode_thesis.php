<?php ob_start(); ?>
<?php require ('connect.php'); ?>

<html>

<head>
		<title>PANTAS: INTEGRATED LIBRARY INFORMATION SYSTEM</title>
		
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




<?php
							//$result= mysql_query("select * from acctd order by accession DESC") or die (mysql_error());
                            $result = $sLink->query("select * from acctd order by accession DESC");
?>
						<table class="table" border="1">
						  <thead>
								<tr>
									<th style="width:200px;">Barcode</th>
									<th style="width:200px;">Accession</th>
									<th style="width:400px;">Title</th>
									<th style="width:200px;">Call number</th>                                    
								</tr>
						  </thead>   
						  <tbody>
<?php
							//while ($row= mysql_fetch_array ($result) ){
                            while ($row = $result->fetch() )  {       
							$id=$row['id'];
?>
							<tr>
								<td style="text-align:center;"><?php	echo "<img src = 'BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=10&text=".$row['accession']."&thickness=50&start=NULL&code=BCGcode128' />";?></td>
								<td style="text-align:center;"><?php echo $row['accession']; ?></td> 
								<td style="text-align:center;"><?php echo $row['title']; ?></td>
                                <td style="text-align:center;"><?php echo $row['call_number']; ?></td>
							</tr>

							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 




			</div>
	
	
        <center> <button type="submit" id="print" onclick="printPage()">Print</button>	</center>
	

	</div>
</body>


</html>