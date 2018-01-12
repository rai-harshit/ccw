<?php

$conn = mysqli_connect('localhost','root','','ccw');   

if(!$conn)
{
	echo("Could not connect to server. Try again later.");
}
else
{
	$sql = "Select * from blogs";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==0)
	{
		echo("No Blogs Have been Added Yet.");
	}
	else
	{
		while($data = mysqli_fetch_array($result))
		{
			$title = $data['blog_title'];
			$author = $data['blog_author'];
			$timestamp = $data['blog_timestamp'];
			$content = $data['blog_content'];
			echo("<br><br>");
			print("$title<br>");
			print("Written by : $author");
			print("\ton $timestamp <br>");
			print("$content");
		}
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>CC : Blogs</title>
</head>
<body>
	<form id=blod_add_form action="add_blogs.php">
		<input type="submit" name="add_blogs" value="ADD A NEW BLOG">
	</form>
</body>
</html>