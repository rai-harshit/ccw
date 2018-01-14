<?php 
	if(isset($_POST['submit_resources']))
	{
		
		// For local hosting
		require('db_conn.php');

		// For live hosting
		//require(' /storage/ssd2/792/4272792/public_html/db_conn.php'); 
		
		if(!$conn)
		{
			$result = 500;
  			header("Location: result.php?res=$result");
		}
		else
		{	
			$res_topic = mysqli_real_escape_string($conn,$_POST['res_topic']);
			$res_language = mysqli_real_escape_string($conn,$_POST['res_language']);
			$res_type = mysqli_real_escape_string($conn,$_POST['res_type']);
			$res_link = mysqli_real_escape_string($conn,$_POST['res_link']);
			
			$query="insert into resource_contribution(topic,language,type,link) values('$res_topic','$res_language','$res_type','$res_link')";
			//echo("$query");
			$insert_res = mysqli_query($conn,$query);

			if(!$insert_res){
				// echo ("query failed".mysqli_error($conn));
				$result = 500;
  				header("Location: result.php?res=$result");
			}	
			else
			{
				//echo("Resource added succesfully");
				$result = 403;
				$com = 'resource submission successful';
  				header("Location: result.php?res=$result&com=$com");
			}
		}
	}
	else{

		// echo "Some thing went wrong redirecting you to home in 3 seconds";
		//header('refresh:3 url=index.php');
		$result = 403;
  		header("Location: result.php?res=$result");
	}


?>