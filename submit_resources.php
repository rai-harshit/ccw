<?php 

	print_r($_POST);
	if(isset($_POST['submit_resources']))
	{
		
		$conn = mysqli_connect('localhost','root','','ccw');
		
		
		if (mysqli_connect_errno()) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
			/*echo "connection succesful";*/
			
			$res_topic = mysqli_real_escape_string($conn,$_POST['res_topic']);
			$res_language = mysqli_real_escape_string($conn,$_POST['res_language']);
			$res_type = mysqli_real_escape_string($conn,$_POST['res_type']);
			$res_link = mysqli_real_escape_string($conn,$_POST['res_link']);
			
			$query="insert into resource_contribution(topic,language,type,link) values('$res_topic','$res_language','$res_type','$res_link')";
			//echo("$query");
			$insert_res = mysqli_query($conn,$query);

			if(!$insert_res){
				echo ("query failed".mysqli_error($conn));
			}	
			else
			{
				echo("Resource added succesfully");
			}
		}
	}
	else{

		echo "Some thing went wrong redirecting you to home in 3 seconds";
		//header('refresh:3 url=home.php');
	}


?>