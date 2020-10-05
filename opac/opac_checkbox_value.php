<?php

require_once("connect.php");

if(isset($_GET['submit']))
{
	if(!empty($_GET['mtype'])) 
	{
		// Counting number of checked checkboxes.
		$checked_count = count($_GET['mtype']);
		
		echo "You have selected following ".$checked_count." option(s): <br/>";
		
		// Loop to store and display values of individual checked checkbox.
		foreach($_GET['mtype'] as $selected) 
		{
			echo "<p>".$selected ."</p>";
		}
		echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
	}
	else
	{
		echo "<b>Please Select Atleast One Option.</b>";
	}
}
?>