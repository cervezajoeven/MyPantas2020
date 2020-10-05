<?php
//delete.php
//$connect = mysqli_connect("localhost", "root", "divine", "eidosdb");
require ('connect.php'); 

if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {


                            //if (isset($_POST['submit'])){
                            //$id=$_POST['id'];				
                            $stmt = $sLink->query("select * from books where bkid='$id'");
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            $call = "";
                            $title = $row['title'];
                            $pub = "";   
                            $idnumber =$id;
     
                            $MyString1 = $row['maintext'];
                            $MyArray1 = explode("", $MyString1);

                            $TitleStr[1] = str_replace("<001>", "", $MyArray1[0]);
     
                            $TitleStr[4] = str_replace("<004>", "", $MyArray1[3]);
                            $name = $TitleStr[4];
                            $TitleStr[9] = str_replace("<009>", "", $MyArray1[8]);
                            $TitleStr[10] = str_replace("<0010>", "", $MyArray1[9]);
                            $TitleStr[11] = str_replace("<0011>", "", $MyArray1[10]);
                            $TitleStr[24] = str_replace("<0024>", "", $MyArray1[23]);
                            $TitleStr[25] = str_replace("<0025>", "", $MyArray1[24]);
                            $TitleStr[28] = str_replace("<0028>", "", $MyArray1[27]);     
                            $location = $TitleStr[28];
                
                            if ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] <> "")
                                    $pub = trim($TitleStr[9]) . ' : ' . trim($TitleStr[10]) . ', ' . trim($TitleStr[11]);
                            elseif ($TitleStr[9] == "" && $TitleStr[10] <> "" && $TitleStr[11] <> "")
                                {
                                    $pub = 'Place of publication not identified : ' . trim($TitleStr[10]) . ', ' . trim($TitleStr[11]);
                                }
                            elseif ($TitleStr[9] <> "" && $TitleStr[10] == "" && $TitleStr[11] <> "")
                                {
                                    $pub = trim($TitleStr[9]) . ': ' . 'publisher not identified, ' . trim($TitleStr[11]);
                                }
                            elseif ($TitleStr[9] <> "" && $TitleStr[10] <> "" && $TitleStr[11] == "")
                                {
                                    $pub = trim($TitleStr[9]) . ' : ' . trim($TitleStr[10]) . ', date of publication not identified';
                                }	
                            //call number
                            if ($TitleStr[24] <> "" && $TitleStr[25] <> "")
                                    $call = trim($TitleStr[24]) . ' ' . trim($TitleStr[25]);
                            elseif ($TitleStr[25] <> "")
                                {
                                    $call = trim($TitleStr[25]);
                                }
     
     

                            {

                                $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "INSERT INTO myshelf (title,publication,idnum,call_number,name,location) VALUES ('$title','$pub','$idnumber','$call','$name','$location')";

                                $sLink->exec($sql);      


                            }
                            //echo "<script>alert('Reservation item successfully added!');</script>";

						//}
						      
     
     
 }
}
?>