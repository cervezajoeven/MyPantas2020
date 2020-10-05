<?php  
//require ('connect.php');

//$conn=mysql_connect("localhost","root","divinity") or die("Could not connect");
//mysql_select_db("pantasdbnew",$conn) or die("could not connect database");

$conn = mysqli_connect("localhost", "root", "divinity", "pantasdbnew");
//mysqli_select_db("pantasdbnew",$conn) or die("could not connect database");

//export.php  
if(isset($_GET["action"]))  
 {  
     if ($_GET["action"]==1)
         {
         $SQL = "SELECT * from client ORDER BY idnum DESC";         
         //$sLink = "SELECT * from client ORDER BY idnum DESC";               
          //$connect = mysqli_connect("localhost", "root", "divine", "Eidosdb");

          //header('Content-Type: text/csv; charset=utf-8');  
          //header('Content-Disposition: attachment; filename=client.csv');  
          //$output = fopen("php://output", "w");  
          //fputcsv($output, array('Name', 'Address', 'NA', 'Group', 'Description', 'ID number', 'Date applied', 'Date expired', 'On loan', 'Contact', 'Fine', 'Email', 'Remark'));  
          //$query = "SELECT * from client ORDER BY idnum DESC";  
          //$result = mysqli_query($connect, $query);  
          //while($row = mysqli_fetch_assoc($result))  
          //{  
        //       fputcsv($output, $row);  
        //  }  
        //  fclose($output); 
         }
     
     elseif ($_GET["action"]==2)
     {
        $SQL = "SELECT  * from acquisition order by title";
     }    
     
     elseif ($_GET["action"]==3)
     {
        $SQL = "SELECT * from computer order by computer";  
     }
     elseif ($_GET["action"]==4)
     {
        $SQL = "SELECT * from newequipment order by description";  
     } 
     elseif ($_GET["action"]==5)
     {
        $SQL = "select * from locker order by locker";  
     }   
     elseif ($_GET["action"]==6)
     {
        $SQL = "select * from outside_user order by name";  
     }       
     elseif ($_GET["action"]==7)
     {
        $SQL = "select * from user order by id DESC";  
     }   
     elseif ($_GET["action"]==8)
     {
        $SQL = "select * from aclist order by accession";  
     }      
     elseif ($_GET["action"]==9)
     {
        $SQL = "select * from accsm order by accession";  
     }        
      elseif ($_GET["action"]==10)
     {
        $SQL = "select * from acctd order by accession";  
     }  
       elseif ($_GET["action"]==11)
     {
        $SQL = "select * from accaudio order by accession";  
     }     
       elseif ($_GET["action"]==12)
     {
        $SQL = "select * from aclist order by call_number";  
     }       
       elseif ($_GET["action"]==13)
     {
        $SQL = "select * from accsm order by call_number";  
     } 
        elseif ($_GET["action"]==14)
     {
        $SQL = "select * from acctd order by call_number";  
     }    
        elseif ($_GET["action"]==15)
     {
        $SQL = "select * from accaudio order by call_number";  
     }     
        elseif ($_GET["action"]==16)
     {
        $SQL = "select * from venue_schedule order by room, date_reservation, time_reservation";  
     }     
         elseif ($_GET["action"]==17)
     {
        $SQL = "select * from equipmentnew_schedule order by equipment, date_reservation, time_reservation";  
     }     
      elseif ($_GET["action"]==18)
     {
        $SQL = "select * from returned order by name, accession, date_returned";  
     }      
      elseif ($_GET["action"]==19)
     {
        $SQL = "select * from equipment_history order by name, barcode, date_returned";  
     }      
       elseif ($_GET["action"]==20)
     {
        $SQL = "select * from history order by name, barcode, time_in";  
     }
        elseif ($_GET["action"]==21)
     {
        $SQL = "select client.name, borrower.* from borrower INNER JOIN client on borrower.id_number = client.idnum where DATE_FORMAT(due_date, '%Y-%m-%d') < CURDATE()";  
     }
      elseif ($_GET["action"]==22)
     {
        $SQL = "select * from locker_history order by name, client_id, barcode, time_returned";  
     }
      elseif ($_GET["action"]==23)
     {
        $SQL = "select * from supplier order by company_name";  
     }        
    
    $header = '';
    $result ='';

    //$exportData = mysql_query ($SQL ) or die ( "Sql error : " . mysql_error( ) );
    //$fields = mysql_num_fields ( $exportData );

    $exportData=mysqli_query($conn,$SQL);
    $fields=mysqli_num_fields($exportData);


    for ( $i = 0; $i < $fields; $i++ )
        {
        //$header .= mysql_field_name( $exportData , $i ) . "\t";
        $header .= mysqli_fetch_field( $exportData , $i ) . "\t";
        }

        //while( $row = mysql_fetch_row( $exportData ) )
        while( $row = $exportData -> fetch_row())        
        {
            $line = '';
            foreach( $row as $value )
            {                                            
                if ( ( !isset( $value ) ) || ( $value == "" ) )
                {
                    $value = "\t";
                }
                else
                {
                    $value = str_replace( '"' , '""' , $value );
                    $value = '"' . $value . '"' . "\t";
                }
                $line .= $value;
            }
            $result .= trim( $line ) . "\n";
        }
        $result = str_replace( "\r" , "" , $result );

        if ( $result == "" )
        {
            $result = "\nNo Record(s) Found!\n";                        
        }

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=export.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    print "$header\n$result";    
     
     
 }  
 ?>  
