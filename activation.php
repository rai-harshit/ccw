<?php

$conn = mysqli_connect("localhost" , "root" ,"" , "ccw");

if(!$conn)
{
	echo("<h3>Could not connect to the server at the moment. Please try again later.</h3><br>");
}
// else
// {
// 	//echo "Successfully connected to the database.<br>";
// }


$roll_no = $_GET['rn'];
//echo($eid);
//echo("<br>");
$aid = $_GET['aid'];
//echo($aid);
//echo("<br>");
$task = $_GET['task'];
//echo($task);
//echo("<br>");
$incoming_act_id = $aid.$task;
//echo($incoming_act_id);
//echo("<br><br>");

$sql1 = "select activation_id from accounts where roll_no = $roll_no";

$result1 = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0)
{
	$data = mysqli_fetch_array($result1);
	$original_act_id = $data['activation_id'];
	if(isset($original_act_id)){
		if($incoming_act_id==$original_act_id)
		{
			$activation_result = 1;
		}
		else
		{
			$activation_result = -1;
		}
	}
	else
	{
		$activation_result = 0;
	}
}
else
{
	echo("Activation Link is Invalid.");
}
if($activation_result == 1)
{
	$sql2 = "update accounts set acc_status='activated', acc_act_time=CURRENT_TIMESTAMP, activation_id=NULL where roll_no=$roll_no";
	$result2 = mysqli_query($conn,$sql2);
	if($result2)
	{
		echo("Your account has been verified and activated successfully.");
		echo("<br><br>");
		echo("Redirecting you to the Login Page in 5 seconds...");
	}
	else
	{
		echo("Account could not be activated at the moment.");
	}
}
else if($activation_result == -1)
{
	echo("Activation Link is Invalid");
}
else if($activation_result == 0)
{
	echo("<b>Your Account is already activated.</b>");
	echo("<br><br>");
	echo("<b>Redirecting you to the Login Page in 5 seconds...</b>");
}

header( "refresh:5; url=home.php" ); 

//use this link to test this page
//http://localhost/jaya/activation.php?eid=91115&aid=79606c7dbab165ab75f68dee6db13e76df03283d&task=0263f22f2a58bc6daf51ce8164c858d4c88548ee

?>