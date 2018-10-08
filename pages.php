<!DOCTYPE html>
<html>
<head>
	<title>captain america</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--favicon -->
	<link rel="shortcut icon" type="image/png" href="img/Cap_Shield.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Arimo|Black+Han+Sans|Cabin" rel="stylesheet">
</head>
<body>
	<!-- widget bar area-->
	<div id="top">
		<h1 id="par"> 
			 <img src="img/Cap_Shield.png" height="30" width="40" />THE  COMPLETE  SOLUTION  OF  MARVEL  CAPTAIN  AMERICA
		</h1>
	</div>

	<!-- header area-->
	<div>
		<?php include "all/header.php"; ?>
	</div>

	<!-- navbar area-->
	<div>
		<?php include "all/nav.php"; ?>
	</div>	
	<hr>
	<!------ sidebar area-->
	<div>
		<?php include "all/sidebar.php"; ?>
	</div>

	<!-- body area-->
	<div id="body" >
		<?php
			include("all/connection.php");
			$pid = $_GET['id'];

			$query = "SELECT * FROM POSTS WHERE P_ID='$pid'";
			$data = mysqli_query($conn , $query);
			$result = mysqli_fetch_assoc($data);

			$title = $result['p_title'];
			$date =  $result['p_date'];
			$author = $result['p_author'];
			$image = $result['p_image'];
			$content = $result['p_content'];
		
	?>

	<h2><?php echo $title; ?></h2>
	<h3>By. <?php echo $author; ?> | Date. <?php echo $date; ?></h3>
	<img src="<?php echo $image; ?> "/> 
	<p align="justify"><?php echo $content; ?></p><br><br><br>

	</div>

	<!-- footer area-->
	<div id="foot">
		footer area
	</div>
</body>
</html>