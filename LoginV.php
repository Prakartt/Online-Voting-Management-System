<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form class="box" action="LoginV.php" method="post">
		
		<h1>Login</h1>
		<input type="text" name="user1" placeholder="Username" required>
		<input type="password" name="pass1" placeholder="Password" required>

		<p style="color:white">
		<input type="radio" id="user" name="usad" value="2">
<label for="user">User  </label><br>
<input type="radio" id="admin" name="usad" value="1">
<label for="admin">Admin</label><br>
</p>
		<input type="submit" name="login" value="Login">


		<p style="color:white">
		Not a member ? <a href="RegV.php" type="submit">Sign up</a>
	</p>
	</form>
	


</body>

</html>
