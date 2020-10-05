<!-- #include file="../includes/redirect.asp" -->
<!-- #include file="../includes/connObjTop.asp" -->

<!--
<%

strStatus = Request.Item("strStatus")
strMsg = ""

select case trim(ucase(strStatus))
  case "INC"
    strMsg = "<center><h4>Addition of new record is successful.</h4></center>"
  case "ALT"
    strMsg = "<center><h4>Updating of record is successful.</h4></center>"
  case "EXC"
    strMsg = "<center><h4>Deletion is successful.</h4></center>"
  case "NON"
    strMsg = "<center><h4>No record found.</h4></center>"	
  case else
    strMsg = ""
end select
%>
-->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><%=s_head%></title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="../w34/font-awesome.min.css">
  <style>
    body {
      padding-top: 50px;
    }
    .starter-template {
      padding: 40px 15px;
      text-align: ;
    }
	
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
  </style>
</head>

<body>

	<div class="topnav">
		  <a class="active" href="#">Home</a>
		  <a href="#about">About</a>
		  <a href="#contact">Contact</a>
		  <div class="search-container">
			<form action="">
			  <input type="text" size="40" placeholder="Search.." name="search">
			  <button type="submit"><i class="fa fa-search"></i></button>
			</form>
		  </div>
	</div>


  <div class="container">


    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    </div>

	
    <div class="starter-template">
      <h1 align="center">List of Books and Monographs</h1>
      <p align="right">
        <a href="book_add.php?id=0" class="btn btn-warning btn-cons" data-toggle="modal" data-target="#confirm-add" alt="" title=""><i class="glyphicon glyphicon-plus"></i> Add new record</a>
      </p>


      <table class="table table-bordered"> 
        <thead>
          <tr>
            <th>Counter</th>
            <th>Title</th>
            <th>Material type</th>
            <th>Copy/Volume</th>
            <th>Açtion</th>
          </tr>
        </thead>
        <tbody>



            <tr>
			  <td align="center"> <input type="checkbox" name="mtype" id="checkid" value=""> </td>
              <td width="50%"></td>
              <td></td>
			  <td></td>
              <td>
                <a href="book_edit.php" class="btn btn-success" data-toggle="modal" data-target="#confirm-save"  alt="" title=""><i class="glyphicon glyphicon-pencil"></i>  Edit</a>

                <a data-href="book_delete.php" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete" alt="" title=""><i class="glyphicon glyphicon-remove"></i>  Delete</a>
              </td>
            </tr>



        </tbody>
      </table>
	  


 

    <!-- MODAL Exclusão-->
    <div class="modal fade stick-up" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header clearfix text-left">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
            </button>
            <h5>Confirm <span class="semi-bold">Deletion</span></h5>
          </div>
          <div class="modal-body">
            <!--<p class="debug-url"></p>-->
            <p>Are you sure you want to delete this record?</p>
          </div>                
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-deletar">Delete</a>
          </div>
        </div>
      </div>
    </div>
	
    <div class="modal fade stick-up" id="confirm-save" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

        </div>
      </div>
    </div>	
	
	<div class="modal fade stick-up" id="confirm-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

        </div>
      </div>
    </div>	

  </div><!-- /.container -->

  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(function()
    { 
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-deletar').attr('href', $(e.relatedTarget).data('href'));
        //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-deletar').attr('href') + '</strong>');
      });
    });
	
    $(function()	
	{ 
      $('#confirm-save').on('show.bs.modal', function(e) {
        $(this).find('.btn-save').attr('href', $(e.relatedTarget).data('href'));
       });
    });
  </script>
</html>


<!--
<%

end if



conn.close()

set conn = Nothing

%>
-->
