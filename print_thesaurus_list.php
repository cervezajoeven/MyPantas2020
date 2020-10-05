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

            
                  $result = $sLink->query("select * from thesaurus order by title"); 
            
?>
						<table class="table table-striped" border="1">
						  <thead>
								<tr>

									<th style="width:100px;">Number</th>
									<th style="width:200px;">Descriptor</th>
									<th style="width:400px;">Scope note</th>
									<th style="width:200px;">Broader term</th>
                                    <th style="width:100px;">Narrower term</th>
                                    <th style="width:100px;">Related term</th>
									<th style="width:200px;">Use</th>
									<th style="width:200px;">Use for</th>   
  									<th style="width:200px;">Discipline</th>    
  									<th style="width:200px;">Language</th>
								</tr>
						  </thead>   
						  <tbody>
<?php
                            $num_rows = 0;  
							//while ($row= mysql_fetch_array ($result) ){
                            while ($row = $result->fetch() ){        
							//$id=$row['bkid'];
                            $num_rows++;    
                            $MyString1 = $row['maintext'];
							$MyArray1 = explode("", $MyString1);
                            $TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
                            $TitleStr[2] = str_replace("<002>", "", $MyArray1[1]);   
							$TitleStr[3] = str_replace("<003>", "", $MyArray1[2]);
                            $TitleStr[4] = str_replace("<004>", "", $MyArray1[3]); 
 							$TitleStr[5] = str_replace("<005>", "", $MyArray1[4]);                               
							$TitleStr[6] = str_replace("<006>", "", $MyArray1[5]);
                            $TitleStr[7] = str_replace("<007>", "", $MyArray1[6]); 
 							$TitleStr[8] = str_replace("<008>", "", $MyArray1[7]);                               
							$TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);                                
                                
							//$title=$TitleStr[1];
 							//$author=$TitleStr[2];                               
							//$publisher=$TitleStr[3];
                            //$taon=$TitleStr[4]; 
                            //$prefix=$TitleStr[7];
                           	//$callnumber=$TitleStr[10];     
?>
							<tr>

                                <td	style="text-align:left;"><?php echo $num_rows; ?></td>
								<td	style="text-align:left;"><?php echo $row['title']; ?></td>
								<td	style="text-align:left;"><?php echo $TitleStr[2]; ?></td>
 								<td	style="text-align:left;"><?php echo $TitleStr[3]; ?></td>
     							<td	style="text-align:left;"><?php echo $TitleStr[4]; ?></td>
								<td	style="text-align:left;"><?php echo $TitleStr[5]; ?></td>
 								<td	style="text-align:left;"><?php echo $TitleStr[6]; ?></td>     
     							<td	style="text-align:left;"><?php echo $TitleStr[7]; ?></td>
								<td	style="text-align:left;"><?php echo $TitleStr[8]; ?></td>
 								<td	style="text-align:left;"><?php echo $TitleStr[9]; ?></td>                                   
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