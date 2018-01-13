<?php

session_start();

if(isset($_SESSION['rn']) && isset($_SESSION['eid']))
{	
	require('db_conn.php');
	if(!$conn)
	{
		$err = 500;
    	header("Location: error.php?err=$err"); 
	}
	else
	{
		$roll_no = $_SESSION['rn'];
		$name = $_SESSION['uname'];
		$email = $_SESSION['eid'];
		$sql = "select contact, profession from profiles where roll_no = '$roll_no'";
		//echo($sql);
		$result = mysqli_query($conn,$sql);

		if(!$result)
		{
			$err = 500;
    		header("Location: error.php?err=$err"); 
		}
		else
		{
			$row = mysqli_fetch_array($result);
			$contact = $row['contact'];
			$profession = $row['profession'];
			//print_r($row);
		}
		
	}
}
else
{
	$name = "";
	$email = "";
	$contact = "";
	$profession = "";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>CC : Project Request</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="float">
		<div class="page_heading">
			<h1>
				Contact Us
			</h1> 
		</div>
		<div id="message_for_clients">
			<p>
				Do you have an idea you wish to implement ? Or want us to develop a solution for you business ? We're here to help you out !
			</p>
			<p>
				Provide your details in the form below and we will get back to you as soon as possible.<br>
				<b>And don't worry, your idea is safe with us.</b>
			</p>
		</div>
		<div>
			<form id="project_request_form" method="POST" action="pr_submit.php">
				<label>Name </label>
				<input type="text" name="name" required="true" placeholder="Enter your Name here" value="<?=$name?>">
				<br>
				<label>Email </label>
				<input type="email" name="email" placeholder="Enter your Email here" value="<?=$email?>">
				<br>
				<label>Contact </label>
				<input type="text" name="contact" required="true" placeholder="Enter your Contact here" value="<?=$contact?>">
				<br>
				<label>Profession </label>
				<input type="text" name="profession" required="true" placeholder="Enter your Profession here" value="<?=$profession?>">
				<br>
				<label>Organization / Company / Institute </label>
				<input type="text" name="organization" required="true" placeholder="Enter your Organization name here">
				<br>
				<label>Project Type </label>
				<select required="true" name="project_type">
	              <option value="" disabled selected="selected">Select Project Type</option>
	              <option value="software">Software</option>
	              <option value="hardware">Hardware</option>
	              <option value="iot">IOT (Internet of Things)</option>
	              <option value="other">Other</option>
            	</select>
				<br>
				<label>Project Description</label>
				<textarea id = "proj_descr" name="proj_descr" form="project_request_form" placeholder="Enter your project description here" required="required" maxlength="500" >
				</textarea>
				<br>
				<input name="pr_submit" type="submit" name="submit" value="Submit Form">
			</form>
		</div>
	</div>
</body>
</html>