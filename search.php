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
	<link href="https://fonts.googleapis.com/css?family=Arimo|Black+Han+Sans|Cabin|Sunflower:300" rel="stylesheet">

	<!--subscripion box-->
	<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/138659/script.js');
</script>
</head>
<body>
	<!-- widget bar area-->
	<div id="top">
		<h2 id="par"> 
			THE  COMPLETE  SOLUTION  OF  MARVEL  CAPTAIN  AMERICA
		</h2>
	</div>

	<!-- header area-->
	<div>
		<?php include ("all/header.php"); ?>
	</div>

	<!-- navbar area-->
	<div>
		<?php include ("all/nav.php"); ?>
	</div>	
	<hr>
	<!------ sidebar area-->
	<div>
		<?php include ("all/sidebar.php"); ?>
	</div>

	<!-- body area-->
	<div id="body">
		<?php 
			include("all/connection.php");

			if(isset($_GET['submit']))
			{
				$word = $_GET['input'];

				$query = "SELECT * FROM POSTS WHERE keywords like '%$word%'";
				$data = mysqli_query($conn , $query);

				while($result = mysqli_fetch_assoc($data))
				{
				$id = $result['p_id'];
				$title = $result['p_title'];
				$author = $result['p_author'];
				$date = $result['p_date'];
				$image = $result['p_image'];
				$content = substr( $result['p_content'],0, 250);
			
			?>

		
	<h2><a href="pages.php?id=<?php echo $id ?>"><?php echo $title; ?></a></h2>
	<h3>By. <?php echo $author; ?> | Date. <?php echo $date; ?></h3>
	<a href="pages.php?id=<?php echo $id ?>">
	<img src="<?php echo $image; ?> "/>
	</a> 
	<p><?php echo $content; ?><a href="pages.php?id=<?php echo $id ?>">Read more</a></p><br><br><br>
	<?php } ?>
	<?php } ?>
	</div>

	<!-- footer area-->
	<div id="foot">
		footer area
	</div>
</body>
</html>
