<?php include('adminnav.php') ?>

<?php include('server.php'); 
     if(empty($_SESSION['user'])) {
     	header("Location:LoginV.php");
     }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet"  >
</head>
<body>

<div class = "content">
	<?php if (isset($_SESSION['success'])): ?>
	<div class="success">
		<h3>
			<?php 
			echo $_SESSION['success'];
			unset($_SESSION['success']);

			 ?>
		</h3>
	</div>

	<?php endif ?>
	<?php if (isset($_SESSION['user'])): ?>
		<h3 class="box">Welcome <strong><?php echo $_SESSION['user']; ?></strong></h3>
		<button><a href="LoginV.php?logout='1'" style="color:red;">Logout</a></button>
	<?php endif ; ?>
</div>

</body>
</html>