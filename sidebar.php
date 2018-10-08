<div id="sidebar">
	<h3>CHECK OUT LATEST POST'S</h3>
	<hr>
	<table>
		<tr>
	
	<?php
		include ("connection.php");

		$query = "SELECT * FROM POSTS order by 1 DESC LIMIT 0,4";
		$data = mysqli_query($conn , $query);
		
		while ($result = mysqli_fetch_assoc($data)) 
		{
			$id = $result['p_id'];
			$pt = $result['p_title'];
			$pi = $result['p_image'];
		
	?>

	
		<td>
			<a href="pages.php?id=<?php echo $id; ?>"><img src="<?php echo $pi; ?>" width="100"  height="60" /></a>
		</td>
		<td>
			<a href="pages.php?id=<?php echo $id; ?>"><h4><?php echo $pt."</br>"; ?></h4><br></a>
		</td>
		</tr>
	<?php } ?>
	</table>
	<br><br>
	<a href="http://fa9a8z3oq9obeoikpkjiwlla6r.hop.clickbank.net/" target="_top">
		<img src="img/wood2.jpg" width="310" />
	</a>
	<br><br>
	<a href="http://fa9a8z3oq9obeoikpkjiwlla6r.hop.clickbank.net/" target="_top">
		<img src="img/dead.jpg" width="310" />
	</a>
	<br><br>
	<a href="http://fa9a8z3oq9obeoikpkjiwlla6r.hop.clickbank.net/" target="_top">
		<img src="img/par.jpg" width="310" />
	</a>
	<br><br>
	<a href="http://fa9a8z3oq9obeoikpkjiwlla6r.hop.clickbank.net/" target="_top">
		<img src="img/av.jpg" width="350" />
	</a>
	<br><br>
	<a href="http://9c56b43or7fajbqxykuitcwo2b.hop.clickbank.net/" target="_top">
		<img src="img/crp3.png" width="350" />
	</a>
</div>