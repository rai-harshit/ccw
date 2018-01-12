<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if(!isset($_POST['pr_submit']))
{	
	echo("Error 404");
	header( "refresh:3; url=home.php" );
}
else
{
	$conn = mysqli_connect('localhost','root','','ccw');

	if(!isset($conn))
	{
		echo("Could not connect to the DB. Please try again later.");
	}
	else
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$profession = $_POST['profession'];
		$organization = $_POST['organization'];
		$project_type = $_POST['project_type'];
		$project_description = $_POST['proj_descr'];

		// echo("<br>$name</br>");
		// echo("<br>$email</br>");
		// echo("<br>$contact</br>");
		// echo("<br>$profession</br>");
		// echo("<br>$organization</br>");
		// echo("<br>$project_type</br>");
		// echo("<br>$project_description</br>");

		$sql = "insert into project_requests(name,email,contact,profession,organization,project_type,project_description) values ('$name','$email','$contact','$profession','$organization','$project_type','$project_description')";

		//echo($sql);

		$query_result = mysqli_query($conn,$sql);

		if($query_result)
		{	

			$mail = new PHPMailer(true);

			$mail->isSMTP();                            // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                     // Enable SMTP authentication
			$mail->Username = 'codersclub.fcrit@gmail.com';          // SMTP username
			$mail->Password = 'project@cc'; // SMTP password
			$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                          // TCP port to connect to

			$mail->setFrom('codersclub.fcrit@gmail.com', 'CC-FCRIT');
			$mail->addReplyTo('codersclub.fcrit@gmail.com', 'CC-FCRIT');
			$mail->addAddress('codersclub.fcrit@gmail.com');   // Add a recipient
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			$mail->isHTML(true);  // Set email format to HTML

			$bodyContent = "<h2>Project Request</h2><h4>Name : $name <br> Email : $email <br> Contact : $contact <br> Profession : $profession <br> Organization : $organization <br> Project Type : $project_type <br> Project Description : $project_description</h4>";             //message content using html

			//echo($bodyContent);

			$mail->Subject = "PR by $name";
			$mail->Body    = $bodyContent;

			if(!$mail->send()) {
			    die("Could not submit the project request. Please try resubmitting the request.");
			    //echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo('Project Request Submitted Succesfully');
			}
		}
		else
		{
			die("Could not submit the project request. Please try resubmitting the request.");
		}
	}
}



?>