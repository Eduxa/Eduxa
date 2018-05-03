<?php 

	// variable declaration
	$grade = "";
	$class ="";
	$classteacher = "";
	
 
	$errors = array(); 
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eduxa');

	// receive all input values from the form
	$grade = mysqli_real_escape_string($db, $_POST['grade']);
	$class = mysqli_real_escape_string($db, $_POST['class']);
	$classteacher    = mysqli_real_escape_string($db, $_POST['classteacher']);
	
	


		// form validation: ensure that the form is correctly filled
		if (empty($grade)) { array_push($errors, "Grade is required"); }
		if (empty($class)) { array_push($errors, "Class is required"); }
		if (empty($classteacher)) { array_push($errors, "Teacher is required"); }
			

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO classes (grade,class,classteacher) VALUES ('$grade','$class','$classteacher')";
			mysqli_query($db, $query);

		}

		if (count($errors) > 0) {
	
		foreach ($errors as $item) {
		echo $item;
  
}

		}

	

?>