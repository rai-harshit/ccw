<?php

if(!isset($_POST['blog_upload']))
{
	echo("Invalid Link. Redirecting you to home page in 3 seconds...");
	header('refresh:3;url=home.php');
}
else
{
	$conn = mysqli_connect("localhost" , "root" ,"" , "ccw");

	if(!isset($conn))
	{
		echo("Could not connect to database. Redirecting you to home page in 3 seconds...");
		header('refresh:3;url=home.php');
	}
	else
	{
		//$roll_no = $_SESSION['roll_no'];
		//$author = $_SESSION['name'];
		$roll_no = 501550;
		$author = "Harshit Rai";
		$title = $_POST['title'];
		$content = $_POST['content'];
		//print_r($_POST);

		$sql = "insert into blogs (roll_no,blog_timestamp,blog_title,blog_author,blog_content) values ('$roll_no', CURRENT_TIMESTAMP, '$title', '$author', '$content')" ; 

		//echo "$sql";

		$result = mysqli_query($conn,$sql);

		if($result)
		{
			echo("Blog submitted successfully. Redirecting you to the home page in 3 seconds.");
			header('refresh:3;url=home.php');
		}
	}

}

?>