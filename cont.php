<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form action="" method="post">
		<table align="center">
			<tr>
				<th colspan="5" align="center">Feel free to contact us</th>
			</tr>

			<tr>
				<td align="right">Fullname :</td>
				<td><input type="text" name="name" value="" /></td>
			</tr>

			<tr>
				<td align="right">Subject :</td>
				<td><input type="text" name="subject" value="" /></td>
			</tr>

			<tr>
				<td align="right">Email Id :</td>
				<td><input type="email" name="email" value="" /></td>
			</tr>

			<tr>
				<td align="right">Message :</td>
				<td><textarea name="message" cols="40" rows="5"></textarea></td>
			</tr>

			<tr>
				<td align="center" colspan="5"><input type="submit" name="submit" value="send" /></td>
			</tr>
		</table>
	</form><br><br><br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17924.461769593385!2d72.84169020140179!3d19.18847878850014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6fce085e839%3A0xd02915d194bba599!2sIT+HUB!5e0!3m2!1sen!2sin!4v1527404680668" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</center>
</body>
</html>
<?php
	error_reporting(0);
	if (isset($_POST['submit'])) 
	{
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$to = "atulkprajapati2000@gmail.com";

		if ($name=='' or $subject=='' or $email=='' or $message=='' or $to=='') 
		{
			echo "<script>alert('Please fill all fields')</script>";
			exit();
		}

		mail($to, $subject, $message,$name,$email);

		$sname = $_POST['name'];
		$ssub = $_POST['subject'];
		$semail = $_POST['email'];
		$smess = "Thank You for message,we will response ASAP.";
		$from = "atulkprajapati2000@gmail.com";

		mail($semail, $ssub, $smess, $from,$sname);

		echo "<script>alert('Message send successfully')</script>";
	}
?>