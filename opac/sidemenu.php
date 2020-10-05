<?php include 'sidebar.php' ?>

<?php 
   if (isset($_POST['submit'])) {
       if (button==basic) {
            include 'search.php';
        }
       elseif (button==advance) {
            include 'advancesearch.php';     
       }
    }
    else{
       include 'search.php'; 
    }
?>
    
    
