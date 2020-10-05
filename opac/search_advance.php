
<div class="col-sm-8 text-left">

<form ACTION="results_advance.php" name="mySearch" id="mySearch" onsubmit="return checkscript()" METHOD="GET">
     <div class="container" style="width:90%;">
         <center><h4><span class="label label-warning">Select any type of material for searching</span></h4></center>

      <table class="table table-striped">
        <tbody>
          <tr>

            <td><input type="radio" name="mtype" value="td" Onclick="document.mySearch.search.focus();"> <B>Academic research</B></td>  
            <td><input type="radio" name="mtype" value="ba" Onclick="document.mySearch.search.focus();"> <B>Analytic/Literatre index</B></td>             
            <td><input type="radio" name="mtype" value="av" Onclick="document.mySearch.search.focus();"> <B>AV material</B></td>
            <td><input type="radio" name="mtype" value="book" Onclick="document.mySearch.search.focus();"><B>Book and manuscript</B></td>
            <td><input type="radio" name="mtype" value="ca" Onclick="document.mySearch.search.focus();"> <B>Cases and jurisprudence</B></td>              
          </tr>

          <tr>
        
            <td><input type="radio" name="mtype" value="er" Onclick="document.mySearch.search.focus();"> <B>E-Resources</B></td>
            <td><input type="radio" name="mtype" value="pr" Onclick="document.mySearch.search.focus();"> <B>Periodical article</B></td>          
            <td><input type="radio" name="mtype" value="se" Onclick="document.mySearch.search.focus();"> <B>Serial catalog</B></td>             
            <td><input type="radio" name="mtype" value="vf" Onclick="document.mySearch.search.focus();"> <B>Vertical file</B></td>
            <td><input type="radio" name="mtype" value="itr" Onclick="document.mySearch.search.focus();"> <B>Web site</B></td>      
         
          </tr>
        </tbody>
      </table>
    </div> 

        
		<table align="center" class="advance">
				<tr>				
					<td>
						<select size="1" name="field1">
							<option value="Title" selected>Title</option>
							<option value="Author">Author</option>
							<option value="Subject">Subject</option>
							<option value="Call Number">Call Number</option>
							<option value="Any Field">Any Field</option>
						</select>
					</td>
				
					<td COLSPAN="1" VALIGN="middle" ALIGN="CENTER" class="search">

                            <input type="text" class="form-control" name="search1" id="search1" size="60" placeholder="Enter title or keywords....." autofocus required />
					</td>
					
					<td>
						<select size="1" name="optr1">
							<option value="AND">AND</option>
							<option value="OR">OR</option>
							<option value="AND NOT">AND NOT</option>
						</select>
					</td>	

				</tr>	
		

				<tr>
					<td>
						<select size="1" name="field2">
							<option value="Title">Title</option>
							<option value="Author"  selected>Author</option>
							<option value="Subject">Subject</option>
							<option value="Call Number">Call Number</option>
							<option value="Any Field">Any Field</option>
						</select>
					</td>

					<td colspan="1" valign="middle" align="center" class="search">

                            <input type="text" class="form-control" name="search2" id="search2" size="60" placeholder="Enter author or keywords....."  />
					</td>
					
					<td>
						<select size="1" name="optr2">
							<option value="AND">AND</option>
							<option value="OR">OR</option>
							<option value="AND NOT">AND NOT</option>
						</select>
					</td>
			  </tr>
			  
				<tr>
					<td>
						<select size="1" name="field3">
							<option value="Title" >Title</option>
							<option value="Author">Author</option>
							<option value="Subject"  selected>Subject</option>
							<option value="Call Number">Call Number</option>
							<option value="Any Field">Any Field</option>
						</select>
					</td>

					<td colspan="1" valign="middle" align="center" class="search">

                            <input type="text" class="form-control" name="search3" id="search3" size="60" placeholder="Enter subject or keywords....."  />
					</td>
					
				</tr>
		</table>			
		<br />
		<table align="center" width="45%">		
				<tr>
					<td align="center" >

                        <button class="btn btn-info" type="reset" name="reset" value="basic" id="btn_basic"><i class="fa fa-close"></i> Cancel</button>  
                        <button class="btn btn-info" type="submit" name="btn_click" value="basic" id="btn_basic"><i class="fa fa-search"></i> Search</button>
                           
					</td>
				</tr>
					
		</table>				

<!----- Including PHP Script ----->	
</form>
    
 <br />   
    
<?php include 'carousel.php' ?>
    

    
