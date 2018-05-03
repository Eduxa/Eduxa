<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../../login.php');
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
							<a href="../../index.php">Dashboard</a>
						</li>
								
						<li><a href="">New</a>
						  <ul class="submenu">
						  <li><a href="../index.php">Admin</a></li>
							<li><a href="../new_student">Student</a></li>
							<li><a href="../new_teacher">Teacher</a></li>
							<li><a href="">Parent</a></li>
							<li><a href="../add_subject">Subject</a></li>
							<li><a href="">Class</a></li>
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
								<h1>Add Class</h1>
								<p></p>
								<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
							</div>
						</div>
					</div>
				</div>
				
				
				
				

				<form class="Form" method="post" action="add_class.php">

				<p id="subhead">New Class:</p>

					
					<div class="Form-fields" >
						<div>
							<label>Grade:
								<input id="long" type="text" name="grade" required></label>
						</div>
						
						<div>
							<label>Class:
								<input id="long" type="text" name="class" required></label>
						</div>

						<div>
							<label>Class Teacher:
							
							</div>								
				
						<?php
						mysql_connect('localhost', 'root', '');
						mysql_select_db('eduxa');

						$sql = "SELECT name FROM teacher";
						$result = mysql_query($sql);

						echo "<select name='classteacher'>";
						while ($row = mysql_fetch_array($result)) {
							echo "<option value='" . $row['name'] ."'>" . $row['name'] ."</option>";
						}
						echo "</select>";
						?>
						
							

						<div>
							<button type="submit"  name="reg">Save</button>
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