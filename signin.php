<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Company Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
	
		<h2>Login</h2>
	</div>
	
	<form method="post" action="server.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="company_name" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<input type="submit" class="btn" name="login_user">
		</div>
		<p>
			Not yet a member? <a href="signup.html">Sign up</a>
		</p>
	</form>


</body>
</html>