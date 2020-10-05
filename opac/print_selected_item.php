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
				<center><h5 style = "font-style:Calibri; margin-top:-14px;">SELECTED ITEM LIST</h5> </center>
            <br />

		<br/>
            <center>
                        <?php
                           echo '<table border="1">';  
                           echo '<tr style="text-align: center;"><th style="text-align: center; width:50px;">Item</th><th style="text-align: center">Title</th></tr>';                             

                            if (isset($_POST['checked_item'])){
                                if ($_POST['checked_item'] = "checked_item"){
                                    $num = 0;
                                    
                                    foreach($_POST['item'] as $value)
                                    {
 		                                $num++;                                       


                                        echo '<tr><td style="text-align: center">' . $num . '</td><td width="1000">' . $value . '</td></tr>';                                   

                                 
                                    }
                                }
                            }
                            echo '</table>'; 
    
                        ?>   

            </center>
			</div>
	
	<br />
	            <center><button type="submit" id="print" onclick="printPage()">Print</button>	</center>
			
<br />
	

	</div>
</body>


</html>