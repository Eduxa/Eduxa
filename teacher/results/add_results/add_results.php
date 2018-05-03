<?php 

	// variable declaration
	$username = "";
	$subject ="";
	$marks = "";
	
 
	$errors = array(); 
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eduxa');

	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$subject = mysqli_real_escape_string($db, $_POST['subjectname']);
	$marks    = mysqli_real_escape_string($db, $_POST['mark']);
	
	


		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "UserName is required"); }
		if (empty($subject)) { array_push($errors, "Subject is required"); }
		if (empty($marks)) { array_push($errors, "Marks is required"); }
			

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO examresults (username,subject,marks) VALUES ('$username','$subject','$marks')";
			mysqli_query($db, $query);

		}

		if (count($errors) > 0) {
	
		foreach ($errors as $item) {
		echo $item;
  
}

		}

	

?>