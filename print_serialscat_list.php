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
				<center><h5 style = "font-style:Calibri; margin-top:-14px;"></h5> &nbsp; &nbsp; PANTAS: INTEGRATED LIBRARY INFORMATION SYSTEM</center>
				<center><h5 style = "font-style:Calibri; margin-top:-14px;"></h5> <?php echo $print_header; ?></center>
            <br />
			<button type="submit" id="print" onclick="printPage()">Print</button>	
			
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('currentdate.php'); ?>
        </div>			
		<br/>
		<br/>
		<br/>
<?php
							//$result= mysql_query("select * from books where tm='books' order by title DESC ") or die (mysql_error());
                            $result = $sLink->query("select * from books where tm='se' order by title"); 
            
?>
						<table class="table table-striped" border="1">
						  <thead>
								<tr>

									<th style="width:100px;">Number</th>
									<th style="width:400px;">Serial title</th>
									<th style="width:200px;">Call number</th>
									<th style="width:200px;">Holding</th>
                                    <th style="width:100px;">Barcode</th>
                                    <th style="width:100px;">Discipline</th>
									<th style="width:200px;">ISSN</th>
								</tr>
						  </thead>   
						  <tbody>
<?php
                            $num_rows = 0;  

                            while ($row = $result->fetch() ){        

                            $num_rows++;    
                            $MyString1 = $row['maintext'];
							$MyArray1 = explode("", $MyString1);
                            $TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
                            $TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);   
							$TitleStr[7] = str_replace("<007>", "", $MyArray1[6]);
                            $TitleStr[14] = str_replace("<0014>", "", $MyArray1[13]); 
 							$TitleStr[13] = str_replace("<0013>", "", $MyArray1[12]);                               
							$TitleStr[11] = str_replace("<0011>", "", $MyArray1[10]);                             
                                
							$title=$TitleStr[1];
 							$call_number=$TitleStr[10];                               
							$holding=$TitleStr[7];
                            $barcode=$TitleStr[14];
                            $discipline=$TitleStr[13];
                           	$issn=$TitleStr[11];     
?>
							<tr>

                                <td	style="text-align:left;"><?php echo $num_rows; ?></td>
								<td	style="text-align:left;"><?php echo $row['title']; ?></td>
								<td	style="text-align:left;"><?php echo $call_number; ?></td>
 								<td	style="text-align:left;"><?php echo $holding; ?></td>
     							<td	style="text-align:left;"><?php echo $barcode; ?></td>
								<td	style="text-align:left;"><?php echo $discipline; ?></td>
 								<td	style="text-align:left;"><?php echo $issn; ?></td>                           
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />
							<?php
                                $charger = $_SESSION['charger']; 
								//include('include/dbcon.php');
								//include('session.php');
            
								//$user_query=mysql_query("select * from user where username='$charger'")or die(mysql_error());
                                //$row=mysql_fetch_array($user_query); {
            
                                $stmt = $sLink->query("select * from user where username='$charger'");
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);  {  

							?>
                            <h2><i class="glyphicon glyphicon-user"></i> <?php echo '<span style="color:blue; font-size:15px;">Prepared by:'."<br /><br /> ".$row['lastname']." ".$row['grp']." ".'</span>';?></h2>
								<?php } ?>


			</div>
	
	
	
	

	</div>
</body>


</html>