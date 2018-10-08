<div id="body">
	<?php

		include ("connection.php");

		$query = "SELECT * FROM POSTS order by rand() LIMIT 0,6";
		$data = mysqli_query($conn , $query);
		

		while ($result = mysqli_fetch_assoc($data)) 
		{
			$id = $result['p_id'];
			$title = $result['p_title'];
			$date =  $result['p_date'];
			$author = $result['p_author'];
			$image = $result['p_image'];
			$content = substr( $result['p_content'],0, 250);
		
	?>

	<h2><a href="pages.php?id=<?php echo $id ?>"><?php echo $title; ?></a></h2>
	<h3>By. <?php echo $author; ?> | Date. <?php echo $date; ?></h3>
	<a href="pages.php?id=<?php echo $id ?>">
	<img src="<?php echo $image; ?> "/>
	</a> 
	<p><b><?php echo $content; ?></b><a href="pages.php?id=<?php echo $id ?>">Read more</a></p><br><br><br>

<?php }?>
</div>