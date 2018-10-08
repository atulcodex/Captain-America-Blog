<?php
	session_start();

	$userprofile = $_SESSION['user_name'];

	if ($userprofile==true) 
	{
		
	}
	else
	{
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin panel</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Arimo|Black+Han+Sans|Cabin|Sunflower:300|Patua+One" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
	<!--favicon -->
	<link rel="shortcut icon" type="image/png" href="img/Cap_Shield.png">
</head>
<body background="img/bg1.jpg">

	<div id="pic">
		<img src="img/Dead1.png" alt="deadpool" />
	</div>
	<div id=menu>
		<ul>
			<li><i class="fa fa-rocket" aria-hidden="true"></i></li>
			<li><a href="admin.php"> DASHBOARD</a></li>
			<li><a href="insert_post.php">INSERTDATA</a></li>
			<li><a href="admin.php?view=view">VIEWDATA</a></li>
			<li><a href="admin.php?view=view">EDITDATA</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
		</ul><br>
		
			<h2>BE SERIOUS HERE ALL DATA IS SENSITIVE</h2>
			<hr>		
			<h2><?php echo "Welcome Mr. ".$_SESSION['user_name']." How can i help you"; ?></h2>
	</div>
	<div id="content">
			<?php
				include ("all/connection.php");

				if (isset($_GET['view'])) 
				{
					$query = "SELECT * FROM POSTS";
					$data = mysqli_query($conn , $query);
					?>
					<table border="2">
					<tr>
						<th align="center">S.NO</th>
						<th align="center">TITLE</th>
						<th align="center">DATE</th>
						<th align="center">AUTHOR</th>
						<th align="center">IMAGE</th>
						<th align="center">CONTENT</th>
						<th align="center">KEYWORDS</th>
						<th align="center" colspan="2">OPARATION</th>
					</tr>
					<?php
					while ($result = mysqli_fetch_assoc($data)) 
					{
						$id = $result['p_id'];
						echo "<tr>
							<td align='center'>".$result['p_id']."</td>
							<td align='center'>".$result['p_title']."</td>
							<td align='center'>".$result['p_date']."</td>
							<td align='center'>".$result['p_author']."</td>
							<td align='center'><a href='$result[p_image]'/><img src='".$result['p_image']."' width='100' height='100' /></a></td>
							<td align='center'>".substr($result['p_content'],0,200)."</td>
							<td align='center'>".$result['keywords']."</td>
							<td align='center'><a href='delete.php?id=$result[p_id]'>Delete</a></td>
							<td align='center'><a href='edit.php?id=$result[p_id]&title=$result[p_title]&date=$result[p_date]&author=$result[p_author]&image=$result[p_image]&content=$result[p_content]&keyword=$result[keywords]'>edit</a></td>
						</tr>";				
					
				
			?>
<?php }} ?>
	</div>
</tr>
</table>
</body>
</html>