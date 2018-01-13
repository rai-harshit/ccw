<?php

	if(!isset($_POST['login_validation']))
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
			///echo("Data Received");
			$email = $_POST['email'];
			$password = $_POST['password'];
			//echo($email);
			//echo($password);
			$sql1 = "select roll_no,email,password,acc_status from accounts where email = '$email'";
			$query_result1 = mysqli_query($conn,$sql1);
			if(mysqli_num_rows($query_result1) > 0)
			{
				$result = mysqli_fetch_array($query_result1);
				$roll_no = $result['roll_no'];
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
							$sql3 = "select first_name, last_name from profiles where roll_no = '$roll_no'";
							$query_result3 = mysqli_query($conn, $sql3);
							$row = mysqli_fetch_array($query_result3);
							session_start();
							//echo("Login Successful...");
							$_SESSION['uname'] = $row['first_name'].' '.$row['last_name'] ;
							$_SESSION['rn'] = $result['roll_no'];
							$_SESSION['eid'] = $result['email'];
							//print_r($_SESSION);
							//echo($_SESSION['email']);
							header( "refresh:0 ;url=profile.php" ); 
						}
						else
						{
							//echo("Error Occured in updating the login time");
							$result = 500;
							header("Location: result.php?res=$result");

						}
					}
					else
					{
						//echo("Wrong Password. Please try again.");
						$result = -71;
						header("Location: result.php?res=$result");
					}
				}
				else
				{
					//echo("Your account doesn't seem to be activated yet. Please activate your account.");
					$result = -99;
					header("Location: result.php?res=$result");
				}
			}
			else
			{
				// echo("The Email-ID is not associated with any account. Please try again.");
				$result = -69;
				header("Location: result.php?res=$result");
			}
		}
	}

?>














<!-- 
						$_SESSION['roll_no'] = $result['roll_no'];
                  $_SESSION['email'] = $result['email'];
                  $_SESSION['first_name'] = $result['first_name'];
                  $_SESSION['last_name'] = $result['last_name']; -->