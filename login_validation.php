<?php

	if(!isset($_POST['login_validation']))
	{
		echo("Invalid");
	}
	else
	{
		$conn = mysqli_connect('localhost','root','','ccw');
		///echo("Data Received");
		$email = $_POST['email'];
		$password = $_POST['password'];
		//echo($email);
		//echo($password);

		$sql1 = "select roll_no,email,password,acc_status,last_login from accounts where email = '$email'";

			$query_result1 = mysqli_query($conn,$sql1);
			if(mysqli_num_rows($query_result1) > 0)
			{
				$result = mysqli_fetch_array($query_result1);
				$acc_status = $result['acc_status'];
				$password_hash = $result['password'];
				if($acc_status === 'activated')
				{
					$login = password_verify($password,$password_hash);
					//echo($login);
					if($login == 1)
					{
						$sql2 = "update accounts set last_login=CURRENT_TIMESTAMP where email='$email'";
						$query_result2 = mysqli_query($conn, $sql2);
						if($query_result2)
						{
							session_start();
							//echo("Login Successful...");
							$_SESSION['rn'] = $result['roll_no'];
							$_SESSION['eid'] = $result['email'];
							//echo($_SESSION['roll_no']);
							//echo($_SESSION['email']);
							header( "refresh:0 ;url=profile.php" ); 
						}
						else
						{
							echo("Error Occured in updating the login time");
						}
					}
					else
					{
						echo("Wrong Password. Please try again.");
					}
				}
				else
				{
					echo("Your account doesn't seem to be activated yet. Please activate your account.");
				}
			}
			else
			{
				echo("The Email-ID is not associated with any account. Please try again.");
			}

	}

?>














<!-- 
						$_SESSION['roll_no'] = $result['roll_no'];
                  $_SESSION['email'] = $result['email'];
                  $_SESSION['first_name'] = $result['first_name'];
                  $_SESSION['last_name'] = $result['last_name']; -->