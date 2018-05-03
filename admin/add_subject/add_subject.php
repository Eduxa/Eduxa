<?php 

	// variable declaration
	$username = "";
	$subject ="";
	$marks = "";
	
 
	$errors = array(); 
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eduxa');

	// receive all input values from the form
	$subjectname = mysqli_real_escape_string($db, $_POST['subjectname']);
	$grade = mysqli_real_escape_string($db, $_POST['grade']);
	$teacherincharge    = mysqli_real_escape_string($db, $_POST['teacherincharge']);
	
	


		// form validation: ensure that the form is correctly filled
		if (empty($subjectname)) { array_push($errors, "SubjectName is required"); }
		if (empty($grade)) { array_push($errors, "Grade is required"); }
		if (empty($teacherincharge)) { array_push($errors, "Teacher in charge is required"); }
			

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO subjects (subjectname,grade,teacherincharge) VALUES ('$subjectname','$grade','$teacherincharge')";
			mysqli_query($db, $query);

		}

		if (count($errors) > 0) {
	
		foreach ($errors as $item) {
		echo $item;
  
}

		}

	

?>