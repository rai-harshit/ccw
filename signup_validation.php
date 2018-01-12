<?php
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if(isset($_POST['signup'])) {
   
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$roll_no = $_POST['roll_no'];
	$email = $_POST['email'];
	$password_txt = $_POST['password'];
	$gender = $_POST['gender'];
	echo($gender);
}
   
	//password hashing begins here

	$options = [
	    'cost' => 10,
	];
	$hashed_pass = password_hash($password_txt, PASSWORD_BCRYPT, $options);	//hashed password here
	//echo($hashed_pass);
	//password hashing ends here 
	    
	$conn = mysqli_connect('localhost', 'root', '', 'ccw');    

	if($conn)
	{
		//echo("Connection Succesful !");
	}
	else
	{
		echo("<h3>Could not connect to the server at the moment. Please try again later.</h3><br>");
	}

	//account activation id creation starts here

	$hash1 = sha1($roll_no.$first_name.$email);
	$hash2 = sha1("aCtIvAte@cC0uNt");
	$acc_act_hash = $hash1.$hash2;	//account activation hash here

	//account activation id creation ends here

	//Database name = users. Table name = signup
	$query1 = "INSERT INTO accounts(roll_no,email,password,activation_id)VALUES('$roll_no','$email','$hashed_pass','$acc_act_hash')";
	   echo($query1);
	$result1=mysqli_query($conn,$query1);

	$query2 = "INSERT INTO profiles(roll_no,first_name,last_name,gender)VALUES('$roll_no','$first_name','$last_name','$gender')";
	   echo($query2);
	$result2=mysqli_query($conn,$query2);
	//echo($result);

	if($result1 && $result2)
	{
		$hash1 = sha1($roll_no.$first_name.$email);
		$hash_p1 = "aid=$hash1";
		$hash2 = sha1("aCtIvAte@cC0uNt");
		$hash_p2 = "task=$hash2";
		$act_id = $hash_p1.'&'.$hash_p2;
		$act_url = "localhost/ccw/activation.php?rn=$roll_no&".$act_id;
		//echo($act_url);
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
		$mail->addAddress($email);   // Add a recipient
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		$mail->isHTML(true);  // Set email format to HTML

		$bodyContent = "Dear <b>$first_name</b>, Please click on the link below to activate your account:<br><br><b><a href=$act_url>CLICK TO ACTIVATE</a><b>";             //message content using html

		//echo($bodyContent);

		$mail->Subject = "Activate Your Account : CC-FCRIT";
		$mail->Body    = $bodyContent;

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'An activation mail has been sent to your Email ID.';
		}

	}
	else
	{
		echo("Error Occured...");
	}


?>