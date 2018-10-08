<?php
	include("all/connection.php");
	$pid = $_GET['id'];

	$query = "DELETE FROM POSTS WHERE P_ID='$pid'";
	$data = mysqli_query($conn , $query);

	if ($data) 
	{
		header('location:admin.php?view=view');
	}
	else
	{
		echo "sorry";
	}
?>