<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Collection Management</a>
        </li>
    </ul>
</div>


<?php
 
$arrAlpha="A|B|C|D|E|F|G|H|J|K|L|M|N|P|Q|R|S|T|U|V|Z";
$arrNum="1|2|3|4|5|6|7|8|9|0";
    
?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> COLLECTION MANAGEMENT </h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
				-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
            <div class="box-content">
                <!-- Start content here -->
				<div class="alert alert-info">
						<?php include ('modal_none.php') ?>
                        
                        <a href="#" target="_blank" style="background:none;">
						<button class="btn btn-warning pull-right"> <i class="glyphicon glyphicon-print"></i> </button>
						</a>                          
				</div>
                
                <FORM ACTION="report_ddc_distribution.php" METHOD="post">           
					<table class="table table-striped table-bordered responsive">
                        <h3 style="text-align:center;">DISTRIBUTION AND LIST GENERATION</h3>
                        
                        <thead>
                        <tr>
                            <th>CLASSIFICATION</th>
                            <th>CODE</th>	
                            <th>OPTION</th>	                     
                            <th>ACTION</th>	

                        </tr>
                        </thead>
                        
					   <tbody>
                        <tr style="font-size: 20px;">
                            <td style="text-align:center;">
                              <b>LC :</b>
                            </td>

                            <td>
                                <?php

                                $myArray = explode("|", $arrAlpha);
                                $arrlength = count($myArray);

                                for($x = 0; $x < $arrlength; $x++) {

                                    echo '<a href="list_of_lc.php?action=lclist&item='.$myArray[$x].'">' . $myArray[$x];
                                    echo '</a>&nbsp;&nbsp;';
                                }   
                                ?>

                            </td>
                            
                                <td style="text-align: center;">

                                <input type="radio" name="lc_type" value="1">volume&nbsp;&nbsp;
                                <input type="radio" name="lc_type" value="2">volume in %&nbsp;&nbsp;
                                <input type="radio" name="lc_type" value="3">title&nbsp;&nbsp;
                                <input type="radio" name="lc_type" value="4">title in %&nbsp;&nbsp;

                             </td >                        
                            
                            
   							<td>
 

                                <button type="submit" name="lc_submit" id="lc_submit" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> LC Distribution</button>
 
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="text-align:center;">
                              <b>DDC :</b>
                            </td>

                            <td>
                                <?php

                                $myArray = explode("|", $arrNum);
                                $arrlength = count($myArray);

                                for($x = 0; $x < $arrlength; $x++) {

                                    echo '<a href="list_of_lc.php?action=lclist&item='.$myArray[$x].'">' . $myArray[$x];
                                    echo "&nbsp;&nbsp;";

                                }            
                                ?>
                            </td>
                            
     
                            <td style="text-align: center;">

                                <input type="radio" name="ddc_type" value="1">volume&nbsp;&nbsp;
                                <input type="radio" name="ddc_type" value="2">volume in %&nbsp;&nbsp;
                                <input type="radio" name="ddc_type" value="3">title&nbsp;&nbsp;
                                <input type="radio" name="ddc_type" value="4">title in %&nbsp;&nbsp;

                             </td >


                            
     			            <td>
 
                       
                            <button type="submit" name="ddc_submit" id="ddc_submit" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> DDC Distribution</button>
                              
                            </td>                          
                         </tr>
                        
                  
                        
                        
					</tbody>
					</table>
                
                </FORM>
                
                <!-- end content here -->
                <FORM ACTION="list_of_lc.php" METHOD="post">
					<table class="table table-striped table-bordered responsive" >
                        <thead >
                            <div >
                                <tr >
                                    <th>SELECT AN ITEM</th>
                                    <th >ENTER CLASS OR PREFIX OR LOCATION</th>	
                                    <th >YEAR</th>	                     
                                    <th >ACTION</th>	

                                </tr>
                            </div>
                        </thead>

                        <tbody>
       
                                <h3 style="text-align:center;"></h3>

                                        <tr>
                                            <td  style="text-align:center">

                                                <div class="form-group">

                                                    <div class="col-sm-8">
                                                      <select name="mtype" class="form-control">
                                                          <option></option>
                                                          <OPTION>Biography</OPTION>
                                                          <OPTION>Circulation</OPTION>
                                                          <OPTION>Easy</OPTION>   
                                                          <OPTION>Fiction</OPTION>
                                                          <OPTION>Filipiniana</OPTION>
                                                          <OPTION>General circulation</OPTION>   
                                                          <OPTION>Reference</OPTION>                                                    
                                                          <OPTION>Reference-Filipiniana</OPTION>   
                                                          <OPTION>Reserve</OPTION>
                                                          <OPTION>Scholastic</OPTION>   
                                                          <OPTION>Special collection</OPTION>                                                      
                                                          <option>Teacher reference</option>                                                
                                                          <option>------</option>                                                
                                                          <OPTION>Class</OPTION> 
                                                          <OPTION>Location</OPTION>                                                      
                                                          <OPTION>Prefix</OPTION>                                                     
                                                          <OPTION>Year</OPTION>	 
                                                          <option>------</option>                                                
                                                          <OPTION>Bibliography</OPTION>                                                           
                                                      </select>
                                                    </div>
                                                  </div>                         
                                            </td>

                                            <td >
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                      <input type="text" name="keyword" class="form-control" id="keyword" placeholder="Enter Class or Prefix or Location or Keyword">
                                                    </div>	
                                                </div>
                                            </td>

                                            <td >                                              
                                                <div class="form-group"  >

                                                    <div class="col-sm-8" >

                                                        <input list="taon" name="taon">
                                                            <datalist id="taon">
                                                                <?php 
                                                                  $right_now = getdate();
                                                                  $this_year = $right_now['year'];
                                                                  $start_year = 2000;
                                                                  while ($start_year <= $this_year) {
                                                                      echo "<option>{$start_year}</option>";
                                                                      $start_year++;
                                                                  }
                                                                 ?>
                                                             </datalist>
                                                        </input>                                              

                                                    </div>
                                                            
                                              </div>
                                            
                                            </td>

                                            <td  >	
                                                <button type="submit" name="submit_gen" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Generate</button>
                                            </td>
                                        </tr>
					   </tbody>
					</table>
                </FORM> 
            </div>
            
                        <?php
                        if (isset($_POST['ddc_submit'])) {

                            ob_start(); //this should be first line of your page
                            header('Location: report_ddc_distribution.php?action=ddc_distribution');
                            ob_end_flush(); //this should be last line of your page      

                        } else {
                            //assume btnSubmit
                        }
                        ?>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>