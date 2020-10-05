<?php
	include('session.php');
	
	$company_name=$_POST['company_name'];
	$company_address=$_POST['company_address'];
	$contact_number=$_POST['contact_number'];
	$contact_name=$_POST['contact_name'];
	$email_address=$_POST['email_address'];
	//$username=$_POST['username'];
	//$password=md5($_POST['password']);
	
	//mysqli_query($conn,"insert into user (username, password, access) values ('$username', '$password', '3')");
	//$userid=mysqli_insert_id($conn);
	
	//mysqli_query($conn,"insert into supplier (userid, company_name, company_address, contact) values ('$userid', '$name', '$address', '$contact')");
	mysqli_query($conn,"insert into supplier (contact_name, company_name, company_address, contact_number, email_address) values ('$contact_name', '$company_name', '$company_address', '$contact_number', '$email_address')");

	?>
		<script>
			window.alert('Supplier added successfully!');
			//window.history.back();
            window.location='supplier.php';
		</script>
	<?php
?>