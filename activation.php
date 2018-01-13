<?php

if(!isset($_GET['rn']) || !isset($_GET['aid']) || !isset($_GET['task']))
{
	$result = 403;
  	header("Location: result.php?res=$result"); 
}
else
{
	require('db_conn.php');

	if(!$conn)
	{
		$result = 500;
		header("Location: result.php?res=$result");
	}
	else
	{
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

		$sql1 = "select activation_id from accounts where roll_no = '$roll_no'";

		$result1 = mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			$data = mysqli_fetch_array($result1);
			$original_act_id = $data['activation_id'];
			if(isset($original_act_id)){
				if($incoming_act_id===$original_act_id)
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
			//echo("ACCOUNT DOES NOT EXIST");
			$result = -69;
			header("Location: result.php?res=$result"); 
		}
		if(isset($activation_result))
		{
			if($activation_result == 1)
			{
				$sql2 = "update accounts set acc_status='activated', acc_act_time=CURRENT_TIMESTAMP, activation_id=NULL where roll_no=$roll_no";
				$result2 = mysqli_query($conn,$sql2);
				if($result2)
				{
					// echo("Your account has been verified and activated successfully.");
					// echo("<br><br>");
					// echo("Redirecting you to the Login Page in 5 seconds...");
					// header( "refresh:5; url=home.php" ); 
					$result = 200;
					$com = "account verified and activated";
					header("Location: result.php?res=$result&comment=$com"); 
				}
				else
				{
					//echo("COULD NOT ACTIVATE THE ACCOUNT AT THE MOMENT. PLEASE TRY AGAIN LATER.");
					$result = 500;
					header("Location: result.php?res=$result");
				}
			}
			else if($activation_result == -1)
			{
				//echo("INVALID ACTIVATION LINK !");
				$result=-70;
				header("Location: result.php?res=$result"); 
			}
			else if($activation_result == 0)
			{
				// echo("<b>ACCOUNT ALREADY ACTIVATED !</b>");
				// echo("<br><br>");
				// echo("<b>Redirecting you to the Login Page in 3 seconds...</b>");
				// header('refresh:3;url=home.php');
				$result=99;
				header("Location: result.php?res=$result"); 
			}
		}

	}
}
?>