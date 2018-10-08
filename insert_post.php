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
<style type="text/css">
	h2
	{
		background-color: lightseagreen;
		border: 2px solid black;
		border-radius: 20px;
		height: 50px;
		width: 10%;
		padding: 10px;
		margin: 10px;
		float: center;
	}
	h2 a:link
	{
		padding-left: 20px;
		margin-top: 10px;
		color: black;
		font-family: comic;
		text-decoration: none;
	}
	h2 a:hover
	{
		color: black;
		text-decoration: underline;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Inser Post's</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--favicon -->
	<link rel="shortcut icon" type="image/png" href="img/Cap_Shield.png">
</head>
<body background="img/bg1.jpg">
	<form action="" method="post" enctype="multipart/form-data">
		<table border="4" align="center" bgcolor="lightseagreen" width="700">
			<tr>
				<th colspan="2" align="center" bgcolor="powderblue">Insert Post's</th>
			</tr>
			<tr>
				<td align="center">Post Title:</td>
				<td align="left"><input type="text" name="title" size="50" value="" /></td>
			</tr>

			<tr>
				<td align="center">Post Author:</td>
				<td align="left"><input type="text" name="author" size="30" value="" /></td>
			</tr>

			<tr>
				<td align="center">Post Image:</td>
				<td align="left"><input type="file" name="uploadfile" size="50" value="" /></td>
			</tr>

			<tr>
				<td align="center">Keywords:</td>
				<td align="left"><textarea name="keyword" value="" cols="40" rows="5" /></textarea></td>
			</tr>

			<tr>
				<td align="center">Post Content:</td>
				<td align="left"><textarea name="content" value="" cols="40" rows="10" /></textarea></td>
			</tr>

			<tr>
				<td colspan="2" align="center" bgcolor="powderblue"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
	<h2><a href="admin.php">BACK</a></h2>
</body>
</html>
<?php
	include ("all/connection.php");

	if (isset($_POST['submit'])) 
	{
		$title = $_POST['title'];
		$date = date('y-m-d');
		$author = $_POST['author'];
		$keyword = $_POST['keyword'];
		$content = $_POST['content'];
		$filename = $_all['uploadfile']['name'];
		$tempname = $_all['uploadfile']['tmp_name'];
		$type = $_all['uploadfile']['type'];
		$folder = "images/".$filename;

		
		if ($title!='' && $date!='' && $author!='' && $keyword!='' && $content!='' && $filename!='') 
		{
			if ($type!="image/png" && $type!="image/jpeg") 
			{
				echo "select images not other all";
				exit();
			}

			$query = "INSERT INTO POSTS VALUES('','$title','$date','$author','$folder','$content','$keyword')";
			$data = mysqli_query($conn , $query);

			if ($data) 
			{
				move_uploaded_file($tempname, $folder);
				echo "Data inserted successfully";
			}
			else
			{
				echo "Data not inserted";
			}
			
		}
		else
		{
			echo "All fields are required";			
		}	
	}
?>