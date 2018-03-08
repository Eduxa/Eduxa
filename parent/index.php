<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['type']);
		header("location: ../login.php");
	}

?>
<!DOCTYPE html>

<html>
	<head>
			<title>Parent Dashboard</title>
			<link rel="stylesheet" type="text/css" href="style.css">
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
								
						<li><a href="">Student Records</a>
						  <ul class="submenu">
						  <li><a href="">Information</a></li>
							<li><a href="">Attendance</a></li>
							<li><a href="">Reports</a></li>
							<li><a href="">Results</a></li>
							<li><a href="">Payments</a></li>
						  </ul>
						</li>
						
						<li><a href="">Student Payments</a>
						  <ul class="submenu">
						  <li><a href="">School Fees</a></li>
							<li><a href="">Other Fees</a></li>
							<li><a href="">Payment History</a></li>
						  </ul>
						</li>
						
						<li><a href="">Events</a>
						  <ul class="submenu">
						  <li><a href="">Notifications</a></li>
							<li><a href="">Contact</a></li>
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
								<h1>Dashboard</h1>
								<p></p>
								<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
							</div>
						</div>
					</div>
				</div>
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