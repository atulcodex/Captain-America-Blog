<?php
	session_start();

	$userprofile = $_SESSION['user_name'];

	if ($userprofile!=true) 
	{
		header('location:index.php');
	}

	$pid = $_GET['id'];
	$ptt = $_GET['title'];
	$pd = $_GET['date'];
	$pa = $_GET['author'];
	$pi = $_GET['image'];
	$pc = $_GET['content'];
	$pk = $_GET['keyword'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Post's</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--favicon -->
	<link rel="shortcut icon" type="image/png" href="img/Cap_Shield.png">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<table border="4" align="center" bgcolor="lightseagreen" width="700">
			<tr>
				<th colspan="2" align="center" bgcolor="powderblue">Insert Post's</th>
			</tr>
			<tr>
				<td align="center">Post Title:</td>
				<td align="left"><input type="text" name="title" size="50" value="<?php echo $ptt; ?>" /></td>
			</tr>

			<tr>
				<td align="center">Post Author:</td>
				<td align="left"><input type="text" name="author" size="30" value="<?php echo $pa; ?>" /></td>
			</tr>

			<tr>
				<td align="center">Post Image:</td>
				<td align="left"><input type="file" name="uploadfile" size="50" /><img src="<?php echo $pi; ?>" height="70" width="100"/><?php echo $pi; ?></td>
			</tr>

			<tr>
				<td align="center">Keywords:</td>
				<td align="left"><textarea name="keyword" value="" cols="40" rows="5" /><?php echo $pk; ?></textarea></td>
			</tr>

			<tr>
				<td align="center">Post Content:</td>
				<td align="left"><textarea name="content" cols="40" rows="10" /><?php echo $pc; ?></textarea></td>
			</tr>

			<tr>
				<td colspan="2" align="center" bgcolor="powderblue"><input type="submit" name="submit" value="	update now"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	error_reporting(0);
	include("all/connection.php");

	if (isset($_POST['submit'])) 
	{
		$pid = $_GET['id'];
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

			$query = "UPDATE POSTS SET P_TITLE='$title',P_DATE='$date',P_AUTHOR='$author',P_IMAGE='$folder',P_CONTENT='$content',KEYWORDS='$keyword' WHERE P_ID='$pid'";
			$data = mysqli_query($conn , $query);

			if ($data) 
			{
				echo "DATA UPDATED SUCCESSFULLY";
			}
			else
			{
				echo "DATA NOT UPDATED";
			}
			
		}
		else
		{
			echo "All fields are required";			
		}	


		
	}
	
?>