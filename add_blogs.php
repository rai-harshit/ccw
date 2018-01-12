<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{
	echo("Please login or signup to add a new blog");
	echo("Redirecting you to the home page in 3 seconds...");
	header('refresh:3;url=home.php');
}
else
{
	require('db_conn.php');

	$roll_no = $_SESSION['rn'];
	$sql = "select first_name, last_name from profiles where roll_no = '$roll_no'";
	//echo($sql);

	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	//print_r($row);
	$name = $row['first_name'].' '.$row['last_name'];
	$_SESSION['name'] = $name;
	//echo($name);
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>CC : Add Blogs</title>
</head>
<body>
	<div id='add_blog_div'>
		<form id='add_blog' method='POST' action='blog_upload.php'>
			<label>Roll No : </label>
			<input name="roll_no" type='text' required="true" disabled="true" value="<?=$roll_no?>">
			<br>
			<label>Author's Name : </label>
			<input name="author" type='text' required='true' disabled="true" value="<?=$name?>">
			<br>
			<label>Blog Title :</label>
			<input name="title" type="text" required="true"><br>
			<label>Blog Content</label>
			<textarea name="content" type="text" required="true" form="add_blog"></textarea><br>
			<input type="submit" value="UPLOAD BLOG" name="blog_upload">

		</form>
	</div>
</body>
</html>

