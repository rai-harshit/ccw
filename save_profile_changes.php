<?php

session_start();
//print_r($_POST);
//print_r($_FILES);

if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{

	$err = 403;
  	header("Location: error.php?err=$err");
}
else
{	
	if(isset($_POST['save_profile_changes']))
	{
		require('db_conn.php');
		  $roll_no = $_SESSION['rn'];
		  $sql="SELECT  *  FROM  profiles  where  roll_no=$roll_no";
		  $result=mysqli_query($conn,$sql);
		  $row=mysqli_fetch_array($result);
		  $contact = $row['contact'];
		  $dob = $row['dob'];
		  $profession = $row['profession'];
		  $hobbies = $row['hobbies'];
		  $languages = $row['languages_known'];
		  $previous_works = $row['previous_works'];
		  $github = $row['github'];
		  $linkedin = $row['linkedin'];

		if(isset($_POST['contact_no']))
		{
			$contact = $_POST['contact_no'];
			//echo($contact);
		}

		if(isset($_POST['dob']))
		{	
			$dob = $_POST['dob'];
			//echo($dob);
		}


		if(isset($_POST['profession']))
		{	
			$profession = $_POST['profession'];
			//echo($dob);
		}

		if(isset($_POST['languages']))
		{
			$languages = $_POST['languages'];
			//echo($contact);
		}

		if(isset($_POST['previous_works']))
		{
			$previous_works = $_POST['previous_works'];
			//echo($contact);
		}

		if(isset($_POST['hobbies']))
		{
			$hobbies = $_POST['hobbies'];
			//echo($contact);
		}
		if(isset($_POST['github_acc']))
		{
			$github = $_POST['github_acc'];
			//echo($contact);
		}
		if(isset($_POST['linkedin_acc']))
		{
			$linkedin = $_POST['linkedin_acc'];
			//echo($contact);
		}
		if(isset($_FILES['display_pic']))
		{
			$display_pic = $_FILES['display_pic'];
			//print_r($display_pic);
		}
		$sql = "UPDATE profiles SET contact='$contact', dob='$dob', profession='$profession' ,languages_known='$languages', previous_works='$previous_works', hobbies='$hobbies', github='$github', linkedin='$linkedin'  WHERE roll_no='$roll_no'";
		 
		//echo($sql);
		$result = mysqli_query($conn,$sql);

		if(($_FILES['profile_pic']['size']) > 0)
		{
	        $image = $_FILES['profile_pic']['tmp_name'];
	        $imgContent = addslashes(file_get_contents($image));

	        /*
	         * Insert image data into database
	         */
	        $sql = "UPDATE profiles set profile_pic = '$imgContent' where roll_no='501550'";
	        //Insert image content into database
	        $insert = mysqli_query($conn,$sql);
	        if($insert){
	            echo "Profile photo uploaded successfully.";
	        }else{
	            $err = 500;
  				header("Location: error.php?err=$err");
	        } 
		}

		//echo($result);
		if($result)
		{
			echo("All changes have been saved to your profile. Taking you back to your profile in 3 seconds...");
			header('refresh:3;url=profile.php');	
		}
		else
		{
			$err = 500;
  			header("Location: error.php?err=$err");
		}
	}
	else
	{
		$err = 403;
  		header("Location: error.php?err=$err");
	}
}

?>