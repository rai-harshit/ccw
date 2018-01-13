<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{
  $err = 403;
  header("Location: error.php?err=$err"); 
}
else
{
  include('db_conn.php');
  
  $roll_no = $_SESSION['rn'];
  $email = $_SESSION['eid'];

  $sql="SELECT  *  FROM  profiles  where  roll_no=$roll_no";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  $first_name = $row['first_name'];
  //echo("$first_name");
  $last_name = $row['last_name'];
  $name = $first_name.' '.$last_name;
  $gender = $row['gender'];
  $contact = $row['contact'];
  $profession = $row['profession'];
  if($row['dob'] == '0000-00-00')
  {
    $dob = NULL;
  }
  else
  {
    $dob = $row['dob'];
  }
  $hobbies = $row['hobbies'];
  $languages = $row['languages_known'];
  $previous_works = $row['previous_works'];
  $github = $row['github'];
  $linkedin = $row['linkedin'];
  $profile_pic = $row['profile_pic'];
  // header("Content-type: image/jpg");
 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	
</head>
<body>

<div class="logout"><a href="logout.php">LOGOUT</a></div>

<center>
  <h2>Profile</h2>
    <form action="edit_profile.php" name="profile" method="post">
   
        <input type="submit" name="edit_profile" value="Edit Profile"><br>

        <?php echo '<img class="img-responsive rounded" src="data:image/png;base64,' . base64_encode($profile_pic) . '" height=100p width=150pxx/><br>'; ?>
  	   
        <label  for="roll_no">Roll No.</label>
        <span><?=$roll_no?></span><br>

      
  	    <label  for="name">Name</label>
        <span><?=$name?></span><br>

        <label  for="gender">Gender</label>
        <span><?=$gender?></span><br>
      
    
        <label  for="email">Email</label>
        <span><?=$email?></span><br>

      

        <label   for="contact-no">Contact No.</label>
        <span><?=$contact?></span><br>

      
      
       
        <label  for="dob">Date of Birth</label>
        <span><?=$dob?></span><br>

        

        <label  for="dob">Profession</label>
        <span><?=$profession?></span><br>

      
      
        <label  for="hobbies">Hobbies</label>
        <span><?=$hobbies?></span><br>
   
      

        <label for="languages_known">Language Know</label>
        <span><?=$languages?></span><br>

      
      

        <label for="project">Previous Works(Any Projects)</label>
        <span><?=$previous_works?></span><br><br>


        <label  for="account-detail">Other Accounts:</label><br>
        <label  for="GitHub">GitHub</label><span><?=$github?></span><br>
        <label  for="Linkdein">LinkdIn</label><span><?=$linkedin?></span><br>
    </form>

  </center>

</body>
</html>