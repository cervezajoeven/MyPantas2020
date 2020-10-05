<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])) {
		// Counting number of checked checkboxes.
		$checked_count = count($_POST['check_list']);
		//echo "You have selected following ".$checked_count." option(s): <br/>";


		$clause = " OR ";
		$sql="SELECT * FROM books where ";

		// Loop to store and display values of individual checked checkbox.
		foreach($_POST['check_list'] as $selected) {
		 $tm = $tm . " " . $selected;
		}

		//echo $tm = str_replace(" ", " or ", trim($tm));
		$tm = str_replace(" ", " or ", trim($tm));	
		echo $tm = '(' . $tm . ')';

	//echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
	}
	else{
		echo "<b>Please Select Atleast One Option.</b>";
	}
}
?>