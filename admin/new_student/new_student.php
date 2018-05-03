<?php 

   	

	// variable declaration
	$name = "";
	$fullname ="";
	$gender    = "";
	$dob = "";
	$nationality ="";
	$religion    = "";
	$mothersname = "";
	$mothersnic ="";
	$motherissl    = "";
	$mothersaddress = "";
	$mothersphone ="";
	$mothersemail    = "";
	$fathersname = "";
	$fathersnic ="";
	$fatherissl    = "";
	$fathersaddress = "";
	$fathersphone ="";
	$fathersemail    = "";
 
	$errors = array(); 
	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eduxa');


	// receive all input values from the form
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
	$gender    = mysqli_real_escape_string($db, $_POST['gender']);
	$dob = mysqli_real_escape_string($db, $_POST['dob']);
	$nationality = mysqli_real_escape_string($db, $_POST['nationality']);
	$religion    = mysqli_real_escape_string($db, $_POST['religion']);
	$mothersname = mysqli_real_escape_string($db, $_POST['mothersname']);
	$mothersnic = mysqli_real_escape_string($db, $_POST['mothersnic']);
	$motherissl    = mysqli_real_escape_string($db, $_POST['motherissl']);
	$mothersaddress = mysqli_real_escape_string($db, $_POST['mothersaddress']);
	$mothersphone = mysqli_real_escape_string($db, $_POST['mothersphone']);
	$mothersemail    = mysqli_real_escape_string($db, $_POST['mothersemail']);
	$fathersname = mysqli_real_escape_string($db, $_POST['fathersname']);
	$fathersnic = mysqli_real_escape_string($db, $_POST['fathersnic']);
	$fatherissl    = mysqli_real_escape_string($db, $_POST['fatherissl']);
	$fathersaddress = mysqli_real_escape_string($db, $_POST['fathersaddress']);
	$fathersphone = mysqli_real_escape_string($db, $_POST['fathersphone']);
	$fathersemail   = mysqli_real_escape_string($db, $_POST['fathersemail']);
	
	
	
	


		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($fullname)) { array_push($errors, "Fullname is required"); }
		if (empty($gender)) { array_push($errors, "Gender is required"); }
		if (empty($dob)) { array_push($errors, "DOB is required"); }
		if (empty($nationality)) { array_push($errors, "Nationality is required"); }	
		if (empty($religion)) { array_push($errors, "Religion is required"); }
		if (empty($mothersname)) { array_push($errors, "Mother's name is required"); }
		if (empty($mothersnic)) { array_push($errors, "Mother's nic is required"); }
		if (empty($motherissl)) { array_push($errors, "Mother's nationality is required"); }
		if (empty($mothersaddress)) { array_push($errors, "Mother's address is required"); }
		if (empty($mothersphone)) { array_push($errors, "Mother's phone is required"); }
		if (empty($mothersemail)) { array_push($errors, "Mother's email is required"); }
		if (empty($fathersname)) { array_push($errors, "Father's name is required"); }
		if (empty($fathersnic)) { array_push($errors, "Father's nic is required"); }
		if (empty($fatherissl)) { array_push($errors, "Father's nationality is required"); }
		if (empty($fathersaddress)) { array_push($errors, "Father's address is required"); }
		if (empty($fathersphone)) { array_push($errors, "Father's phone is required"); }
		if (empty($fathersemail)) { array_push($errors, "Father's email is required"); }	
		
		

			


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO student (name,fullname,gender,dob,nationality,religion,mothersname,mothersnic,motherissl,mothersaddress,mothersphone,mothersemail,fathersname,fathersnic,fatherissl,fathersaddress,fathersphone,fathersemail) VALUES('$name','$fullname','$gender','$dob','$nationality','$religion','$mothersname','$mothersnic','$motherissl','$mothersaddress','$mothersphone','$mothersemail','$fathersname','$fathersnic','$fatherissl','$fathersaddress','$fathersphone','$fathersemail')";
			mysqli_query($db, $query);

		}

		if (count($errors) > 0) {
	
		foreach ($errors as $item) {
		echo $item;
  
}

		}

	

?>