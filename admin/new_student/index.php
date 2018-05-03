<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../../../login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['type']);
		header("location: ../../login.php");
	}

?>
<!DOCTYPE html>

<html>
	<head>
			<title>Admin Dashboard</title>
			<link rel="stylesheet" type="text/css" href="../style.css">
			<link rel="stylesheet" type="text/css" href="../form.css">
		</head>
		<body>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		   <div id="wrapper">

				<!-- Sidebar -->
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li class="sidebar-brand">
							<a href="#">
								Eduxa SMS
							</a>
						</li>
						<li>
							<a href="index.php">Dashboard</a>
						</li>
								
						<li><a href="">New</a>
						  <ul class="submenu">
						  <li><a href="../index.php">Admin</a></li>
							<li><a href="">Student</a></li>
							<li><a href="../new_teacher">Teacher</a></li>
							<li><a href="">Parent</a></li>
							<li><a href="../add_subject">Subject</a></li>
							<li><a href="../add_class">Class</a></li>
						  </ul>
						</li>
							
				
						<li>
							<a href="#">Overview</a>
						</li>
						<li>
							<a href="#">Events</a>
						</li>
						<li>
							<a href="#">Exams</a>
						</li>
						<li>
							<a href="#">Fees</a>
						</li>
						<li>
							<a href="#">Settings</a>
						</li>
						<li>
							<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>	
						</li>
					</ul>
				</div>
				<!-- /#sidebar-wrapper -->
				
				

				<!-- Page Content -->
				<div id="page-content-wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<h1>Student Registration</h1>
								<p></p>
								<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
							</div>
						</div>
					</div>
				</div>
				
				
				
				

				<form class="Form" method="post" action="new_student.php">

				
					<p>
					<div class="Form-fields" >
					<p id="subhead">Details of the student:</p>

					<div>
						<label>Name with initials:
							<input id="long" type="text" name="name" required></label>
					</div>

					<div>
						<label>Name in full:
							<input id="long" type="text" name="fullname" required></label>
					</div>

					<div>
						<label>Gender:</label>
						<input type="radio" name="gender" value="male" required><label>Male</label>
						<input type="radio" name="gender" value="female" required><label>Female</label>
					</div>

					<div>
						<label>Date of Birth:
							<input type="Date" name="dob" required></label>
					</div>

					<div>
						<label>Nationality:
							<input type="text" name="nationality" required></label>
					</div>

					<div>
						<label>Religion:
							<input type="text" name="religion" required></label>
					</div>
					</p>

				<p id="subhead">Details of the mother:</p>

					<p>
					<div>
						<label>Name:
							<input id="long" type="text" name="mothersname" required></label>
					</div>

					<div>
						<label>NIC No:
							<input type="text" name="mothersnic"></label>
					</div>

					<div>
						<label>Is a Sri Lankan:</label>
						<input type="radio" name="motherissl" value="yes"><label>Yes</label>
						<input type="radio" name="motherissl" value="no"><label>No</label>		
					</div>

					<div>
						<label>Permanent Address:
							<input id="long" type="text" name="mothersaddress"></label>
					</div>

					<div>
						<label>Telephone No:
							<input type="tel" name="mothersphone"></label>
					</div>

					<div>
						<label>Email:
							<input type="email" name="mothersemail"></label>
					</div>
					</p>

				<p id="subhead">Details of the father:</p>

					<p>
					<div>
						<label>Name:
							<input id="long" type="text" name="fathersname" required></label>
					</div>

					<div>
						<label>NIC No:
							<input type="text" name="fathersnic"></label>
					</div>

					<div>
						<label>Is a Sri Lankan:</label>
						<input type="radio" name="fatherissl" value="yes"><label>Yes</label>
						<input type="radio" name="fatherissl" value="no"><label>No</label>		
					</div>

					<div>
						<label>Permanent Address:
							<input id="long" type="text" name="fathersaddress"></label>
					</div>

					<div>
						<label>Telephone No:
							<input type="tel" name="fathersphone"></label>
					</div>

					<div>
						<label>Email:
							<input type="email" name="fathersemail"></label>
					</div>
					</p>
					
					<div>
							<button type="submit"  name="reg">Register</button>
						</div>
					</div>
					
					

				</form>
				<!-- /#page-content-wrapper -->
			

			</div>
			<!-- /#wrapper -->
			 <!-- Menu Toggle Script -->
			<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
			</script>
	
	</body>
</html>