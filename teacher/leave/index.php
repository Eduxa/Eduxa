<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('../../../login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['type']);
		header("../../../login.php");
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
								
						<li><a href="">Students</a>
						  <ul class="submenu">
							<li><a href="">Student Info</a></li>
							<li><a href="">Student Attendance</a></li>
							<li><a href="">Student Records</a></li>
						  </ul>
						</li>
							
				
						<li><a href="">Assignments</a>
						  <ul class="submenu">
							<li><a href="">Add new Assignment</a></li>
							<li><a href="">Active Assignments</a></li>
							<li><a href="">Finished Assignments</a></li>
						  </ul>
						</li>
						<li><a href="">Exams</a>
						  <ul class="submenu">
							<li><a href="">Inclass test</a></li>
							<li><a href="">Term Test</a></li>
							<li><a href="results/add_results">Results</a></li>
						  </ul>
						</li>
						<li><a href="">Personal</a>
						  <ul class="submenu">
							<li><a href="">Personal Info</a></li>
							<li><a href="">Personal Records</a></li>
							<li><a href="">Apply leave</a></li>
							<li><a href="">Salary info</a></li>
						  </ul>
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
								<h1>Apply Leave</h1>
								<p></p>
								<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
							</div>
						</div>
					</div>
				</div>
				
				
				
				<form method="post" class="Form" action="appLeave.php">
				
				<p id="subhead">Apply Leave:</p>

					
					<div class="Form-fields" >
					
				<div>
					<label>Name in full:
						
				</div>
				
				<?php
						mysql_connect('localhost', 'root', '');
						mysql_select_db('eduxa');

						$sql = "SELECT name FROM teacher";
						$result = mysql_query($sql);

						echo "<select name='name'>";
						while ($row = mysql_fetch_array($result)) {
							echo "<option value='" . $row['subjectname'] ."'>" . $row['subjectname']."</option>";
						}
						echo "</select>";
						?>

				<div>
					<label>Service No:
						<input type="number" id = "long" name="number" required></label>
				</div>

				<div>
					<label>Duration(No of days):
					<input type="number" id = "long" required></label>
				</div>	

				<div>
					<label>From:
						<input type="Date"  required></label>
					<label>To:
						<input type="Date"  required></label>
				</div>

				<div>
					<label>Reason:
						<input type="text" id = "long" required></label>
				</div>

			<button>Apply</button>
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