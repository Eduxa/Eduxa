<?php 

	// variable declaration
	$name = "";
	$fullname ="";
	$address = "";
	$phone ="";
	$email    = "";
	$nic ="";
	$gender    = "";
	$dob = "";
 
	$errors = array(); 
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eduxa');

	// receive all input values from the form
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
	$address    = mysqli_real_escape_string($db, $_POST['address']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$nic    = mysqli_real_escape_string($db, $_POST['nic']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$dob = mysqli_real_escape_string($db, $_POST['dob']);
	


		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($fullname)) { array_push($errors, "Fullname is required"); }
		if (empty($address)) { array_push($errors, "Address is required"); }
		if (empty($phone)) { array_push($errors, "PhoneNumber is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }	
		if (empty($nic)) { array_push($errors, "NIC is required"); }
		if (empty($gender)) { array_push($errors, "Gender is required"); }
		if (empty($dob)) { array_push($errors, "DOB is required"); }		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO teacher (name,fullname,address,phone,email,nic,gender,dob) VALUES ('$name','$fullname','$address','$phone','$email','$nic','$gender','$dob')";
			mysqli_query($db, $query);

		}

		if (count($errors) > 0) {
	
		foreach ($errors as $item) {
		echo $item;
  
}

		}

	

?>