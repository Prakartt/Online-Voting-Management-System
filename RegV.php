<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form class="box" action="RegV.php" method="post">
		<?php include('errors.php'); ?>
		<h1>Register</h1>
		<input type="text" name="user" placeholder="Username" required>
		<input type="text" name="email" placeholder="Email" required>
		<input type="text" name="phone" placeholder="Phone Number">
		<input type="text" name="aadhar" placeholder="Aadhar Number">
		<input type="date" name="aadhar" placeholder="Date of Birth">
		<input type="text" name="age" placeholder="Age">
		<input type="text" name="aadhar" placeholder="Area">
		<input type="password" name="pass1" placeholder="Password">
		<input type="password" name="pass2" placeholder="Confirm Password">
		<input type="submit" name="register" value="Register">


		<p style="color:white">
		Already a member ? <a href="LoginV.php" type="submit">Sign in</a>
	</p>
	</form>


</body>
</html>