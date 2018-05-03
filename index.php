<?php include('server.php'); 
header("Location: login.php");
exit;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	
	
	

	
		
		<div class="login-admin">
		<?php include('errors.php'); ?>
	<h1 id="head-admin">Sign in</h1>
	<form id="adminForm" action="index.php" method="post" >
		<input type="text" placeholder="Username" name="username">
		<input type="Password" placeholder="Password" name="password"><br>
		<button type="submit" id="sub-admin">Log in</button>
		<h1 id="result-admin"></h1>
	</form>
</div>





</body>
</html>