<?php 
	session_start();

	// variable declaration
	$username = "";
	$type ="";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$type = mysqli_real_escape_string($db, $_POST['type']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($type)) { array_push($errors, "Account type is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, type, email, password) 
					  VALUES('$username', '$type', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['type'] = $type;
			$_SESSION['success'] = "You are now logged in";
			
			if ($type == "A") {
			header('location: admin/index.php');
				}
			if ($type == "P") {
					header('location: parent/index.php');
				}
			if ($type == "S") {
					header('location: student/index.php');
				}
			if ($type == "T") {
					header('location: teacher/index.php');
				}
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			
			
			$results = mysqli_query($db, $query);
			$rows = mysqli_num_rows($results); 
        		if ($rows==1){ 
            			while($rs = mysqli_fetch_array($results)){  
                 			$type=$rs["type"]; 
            			 } 
         		} 

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['type'] = $type;
				$_SESSION['success'] = "You are now logged in";
				if ($type == "A") {
					header('location: admin/index.php');
				}
				if ($type == "P") {
					header('location: parent/index.php');
				}
				if ($type == "S") {
					header('location: student/index.php');
				}
				if ($type == "T") {
					header('location: teacher/index.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>