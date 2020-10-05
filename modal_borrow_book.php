


  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Borrow Book</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Return Book</button>


<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Book and Manuscript Circulation Module</h4>
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:7px;">					
					  <div class="form-group">
						<label for="title" class="col-sm-3 control-label" style="background-color:">ID number:</label>
						<div class="col-sm-7">
						  <input type="text" name="str0" class="form-control" id="id_number" placeholder="ID number....." required />
						</div>
					  </div>
					  
							  <div class="form-group">
						<label for="responsibility" class="col-sm-3 control-label" style="background-color:">Accession:</label>
						<div class="col-sm-7">
						  <input type="text" name="str1" class="form-control" id="accession" placeholder="accession....." />
						</div>
					  </div>			  
					   
					  <div class="form-group">
						<label for="parallel" class="col-sm-3 control-label" style="background-color:">Date due:</label>
						<div class="col-sm-7">
						  <input type="text" name="str2" class="form-control" id="date_due" placeholder="Date due..."  />
						</div>
					  </div>
					  


					  <div class="form-group">
						<label for="entered_by" class="col-sm-3 control-label" style="background-color:">Charged by:</label>
						<div class="col-sm-7">
						  <input type="text" name="entered_by" class="form-control" id="charged_by" placeholder="charged by..." />
						</div>
					  </div>	

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-9">
						  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Borrow</button>
						</div>
					  </div>
					</form>
					
						<?php 
						//include('include/database.php');
						include('connect.php');						
						if (isset($_POST['submit'])){
							
						unset($txtstr);
						$txtstr = "<001>" . $_POST['str0'] . ""; //'title
						$txtstr = $txtstr . "<002>" . $_POST['str1'] . ""; 
						$txtstr = $txtstr . "<003>" . $_POST['str2'] . ""; 
						$txtstr = $txtstr . "<004>" . $_POST['str3'] . ""; 
						$txtstr = $txtstr . "<005>" . $_POST['str4'] . ""; //numeration
						$txtstr = $txtstr . "<006>" . $_POST['str5'] . ""; //'other_author
						$txtstr = $txtstr . "<007>" . $_POST['str6'] . ""; //'editors...
						$txtstr = $txtstr . "<008>" . $_POST['str7'] . ""; //'corporate author
						$txtstr = $txtstr . "<009>" . $_POST['str8'] . ""; //'place of publication
						$txtstr = $txtstr . "<0010>" . $_POST['str9'] . ""; //'publisher
						$txtstr = $txtstr . "<0011>" . $_POST['str10'] . ""; //'year of publication
						$txtstr = $txtstr . "<0012>" . $_POST['str11'] . ""; //'edition
						$txtstr = $txtstr . "<0013>" . $_POST['str12'] . ""; //'pages/extent
						$txtstr = $txtstr . "<0014>" . $_POST['str13'] . ""; //'other details
						$txtstr = $txtstr . "<0015>" . $_POST['str14'] . ""; //'dimension
						$txtstr = $txtstr . "<0016>" . $_POST['str15'] . ""; //'accompanying materials
						$txtstr = $txtstr . "<0017>" . $_POST['str16'] . ""; //'series
						$txtstr = $txtstr . "<0018>" . $_POST['str17'] . ""; //'general notes
						$txtstr = $txtstr . "<0019>" . $_POST['str18'] . ""; //'isbn
						$txtstr = $txtstr . "<0020>" . $_POST['str19'] . ""; //'topical
						$txtstr = $txtstr . "<0021>" . $_POST['str20'] . ""; //'personal
						$txtstr = $txtstr . "<0022>" . $_POST['str21'] . ""; //'corporate
						$txtstr = $txtstr . "<0023>" . $_POST['str22'] . ""; //'geographical
						$txtstr = $txtstr . "<0024>" . $_POST['str23'] . ""; //'prefix
						$txtstr = $txtstr . "<0025>" . $_POST['str24'] . ""; //'call number
						$txtstr = $txtstr . "<0026>" . $_POST['str25'] . ""; //'accession
						$txtstr = $txtstr . "<0027>" . $_POST['str26'] . ""; //'language
						$txtstr = $txtstr . "<0028>" . $_POST['str27'] . ""; //'location
						$txtstr = $txtstr . "<0029>" . $_POST['str28'] . ""; //'filename
						$txtstr = $txtstr . "<0030>" . $_POST['str29'] . ""; //'copy
						$txtstr = $txtstr . "<0031>" . $_POST['str30'] . ""; //'inn
						$txtstr = $txtstr . "<0032>" . $_POST['str31'] . ""; //'out
						$txtstr = $txtstr . "<0033>" . $_POST['str32'] . ""; //'content
						$txtstr = $txtstr . "<0034>" . $_POST['str33'] . ""; //'summary
						$txtstr = $txtstr . "<0035>" . $_POST['str34'] . ""; //'abstract
						$txtstr = $txtstr . "<0036>" . $_POST['str35'] . ""; //'timesout
						$txtstr = $txtstr . "<0037>" . $_POST['str36'] . ""; 
						$txtstr = $txtstr . "<0038>" . $_POST['str37'] . ""; 
						$txtstr = $txtstr . "<0039>" . $_POST['str38'] . ""; 
						$txtstr = $txtstr . "<0040>" . $_POST['str39'] . ""; 
						$txtstr = $txtstr . "<0041>" . $_POST['str40'] . ""; 
						$maintext = $txtstr . "<0042>" . $_POST['str41'] . ""; 
						
						$title = $_POST['str0'];
						$image = $_POST['str41'];
						$tm = 'book';
						
						$tr = $_POST['tr']; //'type
						$fr = $_POST['fr']; //'type
						$circ = $_POST['circ']; //'type
						$ref = $_POST['ref']; //'type
						$fil = $_POST['fil']; //'type
						$sm = $_POST['sm']; //'type
						$bio = $_POST['bio']; //'type
						$res = $_POST['res']; //'type
						$schl = $_POST['schl']; //'type
						$easy = $_POST['easy']; //'type
						$fic = $_POST['fic']; //'type
						$gc = $_POST['gc']; //'type						

						$copy = $_POST['str29'];
						//$inn = $_POST['str30'];
						$inn = $_POST['str29'];						
						$out = 0; //$_POST['str31'];
						$timesout = 0; //$_POST['str35'];		
						
						$entered_by = $_POST['entered_by'];
						$updated_by = $_POST['entered_by'];
						//$updated_by = $_POST['updated_by'];
						
						
						//$date1 = strtr($_POST['date_entered'], '/', '-');
						//$date_entered = date('Y-m-d', strtotime($date1));
						$date_entered = date("Y-m-d H:i:s");						
						//$date2 = strtr($_POST['date_updated'], '/', '-');
						//$date_updated = date('Y-m-d', strtotime($date2));
						$date_updated = date("Y-m-d H:i:s");
						
						if(isset($_POST['tr']) && $_POST['tr'] == 'tr') 
						{
							$tr = 1;
						}
						else
						{
							$tr = 0;
						}  	

						if(isset($_POST['fr']) && $_POST['fr'] == 'fr') 
						{
							$fr = 1;
						}
						else
						{
							$fr = 0;
						}						
						if(isset($_POST['circ']) && $_POST['circ'] == 'circ') 
						{
							$circ = 1;
						}
						else
						{
							$circ = 0;
						}						
						if(isset($_POST['ref']) && $_POST['ref'] == 'ref') 
						{
							$ref = 1;
						}
						else
						{
							$ref = 0;
						}								
						if(isset($_POST['fil']) && $_POST['fil'] == 'fil') 
						{
							$fil = 1;
						}
						else
						{
							$fil = 0;
						}	
						if(isset($_POST['sm']) && $_POST['sm'] == 'sm') 
						{
							$sm = 1;
						}
						else
						{
							$sm = 0;
						}						
						if(isset($_POST['bio']) && $_POST['bio'] == 'bio') 
						{
							$bio = 1;
						}
						else
						{
							$bio = 0;
						}						
						if(isset($_POST['res']) && $_POST['res'] == 'res') 
						{
							$res = 1;
						}
						else
						{
							$res = 0;
						}	
						if(isset($_POST['res']) && $_POST['res'] == 'res') 
						{
							$res = 1;
						}
						else
						{
							$res = 0;
						}	
						if(isset($_POST['schl']) && $_POST['schl'] == 'schl') 
						{
							$schl = 1;
						}
						else
						{
							$schl = 0;
						}							
						if(isset($_POST['easy']) && $_POST['easy'] == 'easy') 
						{
							$easy = 1;
						}
						else
						{
							$easy = 0;
						}	
						if(isset($_POST['fic']) && $_POST['fic'] == 'fic') 
						{
							$fic = 1;
						}
						else
						{
							$fic = 0;
						}
						if(isset($_POST['gc']) && $_POST['gc'] == 'gc') 
						{
							$gc = 1;
						}
						else
						{
							$gc = 0;
						}						
						
						{
						mysql_query ("INSERT INTO books (title,maintext,tm,images,entered_by,updated_by,date_entered,date_updated,tr,fr,circ,ref,fil,sm,bio,res,schl,easy,fic,gc,copy,inn,t_out,t_timesout)VALUES ('$title','$maintext','$tm','$image','$entered_by','$updated_by','$date_entered','$date_updated','$tr','$fr','$circ','$ref','$fil','$sm','$bio','$res','$schl','$easy','$fic','$gc','$copy','$inn','$out','$timesout')")or die(mysql_error());
						 
						//mysql_query ("INSERT INTO books (title,maintext,tm,images,entered_by,updated_by,date_entered,date_updated,tr,fr,circ,ref,fil,sm,bio,'res,schl,easy,fic,gc)VALUES ('$title','$maintext','$tm','$image','$entered_by','$updated_by','$date_entered','$date_updated','$tr','$fr','$circ','$ref','$sm','$bio','$res','$schl','$easy','$fic','$gc')")or die(mysql_error());				 
						 
						 
						}
						echo "<script>alert('Catalog information is successfully added!'); window.location='list_of_book.php'</script>";
						 
						}
						?>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>