<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if(!isset($_POST['bugs_submit']))
{
	echo("Invalid URL. Redirecting you to the Home Page...");
	header('refresh:3; url=home.php');
}
else
{
	$conn = mysqli_connect('localhost','root','','ccw');
	$email = $_POST['email'];
	$bug_info = $_POST['bug_info'];
	$name = $_POST['name'];

	$sql = "insert into bug_reports(name,email,bug_info) values ('$name','$email',$bug_info)";

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

		$mail->setFrom($email, $name);
		$mail->addReplyTo($email, $name);
		$mail->addAddress('codersclub.fcrit@gmail.com');   // Add a recipient
		if(isset($_FILES))
		{
			$mail->AddAttachment($_FILES['bug_ss']['tmp_name'], $_FILES['bug_ss']['name'] );
		}


		$mail->isHTML(true);  // Set email format to HTML

		$bodyContent = "<h2>BUG REPORT</h2><h4>Name : $name <br> Email : $email <br> Bug Description : $bug_info";            
		 //message content using html

		//echo($bodyContent);

		$mail->Subject = "BugRep by $name";
		$mail->Body    = $bodyContent;

		if(!$mail->send()) {
		    echo 'Error sending the bug report. Please try again.';
		    //echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Bug Report submitted successfully !';
		}
	}
	else
	{
		echo("Error sending the bug report. Please try again.");
	}
}

?>