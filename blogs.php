<?php

require('db_conn.php');   

if(!$conn)
{
	$result = 500;
	header("Location: result.php?err=$result"); 
}
else
{
	$sql = "Select * from blogs";
	$result = mysqli_query($conn,$sql);
	if(!$result)
	{
		$result = 500;
		header("Location: result.php?err=$result"); 
	}
	else
	{
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
				print("$title<br>");
				print("Written by : $author");
				print("\ton $timestamp <br>");
				print("$content");
				print("<br><br>");
			}
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
	<form id=add_blogs action="add_blogs.php">
		<input type="submit" name="add_blogs" value="ADD A NEW BLOG">
	</form>
</body>
</html>