<!DOCTYPE html>
<html lang="en">

<?php
ob_start();
include('includes/config.php');
//date_default_timezone_set('Asia/Manila');
include('../connect.php');
//include('includes/dbcon.php');                    


                        if (isset($_POST['log_in'])){

                            $idnumber=$_POST['idnumber'];

                            $query = $sLink->query("select * from client where idnum = '$idnumber'");
                            $count = $query->rowcount();
                            $row = $query->fetch();                            
                            
                            $name=$row['name'];
                            $idnum=$row['idnum'];
                            $pix = $idnum . ".jpg";
                            $description=$row['description'];
                            $group=$row['dgroup'];
                            $date_today = date("Y-m-d H:i:s"); 
                            $location = $_POST['location'];
                            $status = "Exit";                           
                            if ($count > 0){
                                session_start();
                                $_SESSION['idnumber']=$row['idnum'];

                                //mysql_query("INSERT INTO clientlog (name,id,grp,level,petsa)VALUES('$name','$idnum','$group','$description',NOW())")or die(mysql_error());
                                
                                $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "INSERT INTO clientlog (name,id,grp,level,petsa,location,status)VALUES('$name','$idnum','$group','$description',NOW(),'$location','$status')";
                                $sLink->exec($sql); 
                                            
                                //$sql = "UPDATE client SET bkloan='$bkloan', overdue='$overdue' WHERE idnum = '$idnum' ";
                                //$sLink->exec($sql);  
								
                                //echo "<script>window.location='log.php'</script>";
                                //echo "<script>window.location='log.php'</script>";
                            }
                        else{
                            echo "<center><h3><div class='alert alert-error'>".'ID Number not found!'."</div></h3></center>";
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
    <meta http-equiv="refresh" content="600">
    
    <title>SAINT SEBASTIAN HOUSE OF KNOWLEDGE - Integrated Library Information System</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styling plus plugins -->
    <!-- <link href="css/custom.css" rel="stylesheet"> -->
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

 color:orange;
 font-size:20px;
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

<body style="background:#80e5ff;">
        <br />    <br />    <br />    <br />           
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="col-md-6 col-md-offset-3 column">
                <form role="form" action="" method="post">
                    <center><img src="images/libro_logo_jpg.jpg" alt="Picture" width="100" height="100"><h3 class="blink_text">WELCOME TO SAINT SEBASTIAN ACADEMY!</h3></center>
                    
               
                                                  <div class="col-md-6 col-md-offset-3 column" >
                                                      <select name="location" class="form-control">
                                                          <option></option>
                                                          <OPTION>College Library</OPTION>
                                                          <OPTION>Grade School Library</OPTION>
                                                          <OPTION>High School Library</OPTION>
                                                          <OPTION>Pre-School Library</OPTION>                                                         
                                                          <OPTION>Senior High School Library</OPTION>
                                                      </select>
                                                </div>   
                    
                    <br /><br />
                    <div class="input-group">
                        <span class="input-group-addon" style="color:green"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="idnumber" style="" placeholder="ID Number....." autofocus required />
                        <div class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="log_in"><i class="glyphicon glyphicon-export"></i>Exit</button>
                        </div>
                    </div> 
                    <br />
				    <div class="" >
                        <center><img src="<?php echo $pixpath; ?><?php echo $pix; ?>" alt="Picture" width="300" height="300"></center>           
                    </div>
                    


                    
  					<!-- end content here -->
                    <div class="table-responsive">
                       <table class="table">
                        <thead>
                            <tr >
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
            </div>
        </div>
    </div>
 
</div>                      


                            <div style="align-text:center">
 
                                <center>© <?php echo date('Y'); ?> <i class="fa fa-book"></i> Integrated Library Information System</center>
                            </div>
	
		
 
		

</body>

</html>