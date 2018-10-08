<?php
	session_start();
	error_reporting(0);
?>
<style type="text/css">
</style>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<!--favicon -->
		<link rel="shortcut icon" type="image/png" href="img/Cap_Shield.png">
</head>
<body>
	<div class="loginbox">
		<img src="img/atul.jpg" class="avatar">

		<h1>ATUL K. PRAJAPATI</h1>
		<form action="" method="post">
			<p>Username</p>
			<input type="text" name="username" placeholder="Username">

			<p>Password</p>
			<input type="password" name="password" placeholder="password">

			<input type="submit" name="submit" value="login">

			<br>
			<a href="#">Lost your password?</a>
			<br>
			<a href="#">Don't have an account?</a>
		</form>
	</div>
</body>
</html>
<?php
	
	include("all/connection.php");
	
	if (isset($_POST['submit'])) 
	{
		$user = mysqli_real_escape_string($conn , $_POST['username']);
		$pass = mysqli_real_escape_string($conn , $_POST['password']);

		$pass = md5($pass);

		$query = "SELECT * FROM USER WHERE USERNAME='$user' && PASSWORD='$pass'";
		$data = mysqli_query($conn , $query);
		$total = mysqli_num_rows($data);

		if ($total==1) 
		{
			$_SESSION['user_name']=$user;
			header('location:admin.php');
		}
		else
		{
			echo "you are not admin";
		}
	}
?>