<!DOCTYPE html>
<html lang="en">

<?php
ob_start();
include('includes/config.php');
//date_default_timezone_set('Asia/Manila');
//include('../admin/include/dbcon.php');
include('includes/dbcon.php');                    
//include('includes/config.php');

                        if (isset($_POST['log_in'])){

                            $idnumber=$_POST['idnumber'];

                            $login_query=mysql_query("select * from client where idnum='$idnumber'");
                            $count=mysql_num_rows($login_query);
                            $row=mysql_fetch_array($login_query);
                            $name=$row['name'];
                            $idnum=$row['idnum'];
                            $pix = $idnum . ".jpg";
                            $description=$row['description'];
                            $group=$row['dgroup'];
                            $date_today = date("Y-m-d H:i:s"); 
                            if ($count > 0){
                                session_start();
                                $_SESSION['idnumber']=$row['idnum'];

                                mysql_query("INSERT INTO clientlog (name,id,grp,level,petsa)VALUES('$name','$idnum','$group','$description',NOW())")or die(mysql_error());
                                //echo "<script>window.location='log.php'</script>";
                                //echo "<script>window.location='log.php'</script>";
                            }
                        else{
                            echo "<div class='alert alert-error'>".'ID Number not found'."</div>";
                            ?>
                            <?php 
                            } 
                        }
                        ?>
                    <!-- form -->	



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SAINT SEBASTIAN HOUSE OF KNOWLEDGE - Integrated Library Information System</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>  
  <link href='css/bootstrap.min.css' rel='stylesheet'>
  

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
<style>
.blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 1s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 1s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color:maroon;
 font-size:16px;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
</style>

</head>

<body style="background:#F7F7F7;">
    
    <div class="">

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    
                    <form action="" method="post">
                        <h1 class="blink_text">WELCOME TO SSA!!!</h1>
                        <div>
                            <input type="text" class="form-control" name="idnumber" style="height:45px;" placeholder="ID Number....." autofocus required />
                        </div>
						<div class="clearfix"></div>
	
                        
						<div class="row">
							<div class="col-md-12">
								<div class="">

									<img src="<?php echo $pixpath; ?><?php echo $pix; ?>" alt="Picture" width="300" height="300"> 
                              
								</div>
								
							</div>
						</div>
						
						<br />	
						
                        <div>
								<button class="btn btn-primary submit" type="submit" name="log_in"><i class="glyphicon glyphicon-user"></i> Submit</button>
                        </div>
                        
   					<!-- end content here -->
                    <div class="table-responsive">
                       <table class="table">
                        <thead>
                          <tr>
                                                        <th width="">Name</th>
                                                        <th width="">ID number</th>
                                                        <th width="">Group</th>
                                                        <th width="">Description</th>
                                                        <th width="">Date entered</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="success">
                                                            <td><?php echo $name; ?></td>
                                                            <td><?php echo $idnum; ?></td>
                                                            <td><?php echo $group; ?></td>
                                                            <td><?php echo $description; ?></td>
                                                            <td><?php echo $date_today; ?></td>    
                          </tr>      

                        </tbody>
                      </table>
                    </div>	                      

                    </form>
					



   
					
					
                </section>
                <!-- content -->
				
	
                        

                            <div>
                                <h3><i class="fa fa-university" style="font-size: 26px;"></i> SAINT SEBASTIAN ACADEMY</h3>

                                <p>© <?php echo date('Y'); ?> <i class="fa fa-book"></i> Integrated Library Information System</p>
                            </div>
                        

					</div>	
                
                
                
				
				
            </div>
            
            
            
            
        </div>
		
		
		
		
    </div>
	
		

</body>

</html>