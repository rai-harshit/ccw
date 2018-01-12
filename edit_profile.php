<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{
  echo("Please Login to edit your profile.");
  echo("<a href='home.php'>LOGIN</a>");
  header("refresh:3; url=home.php");
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
  $dob = $row['dob'];
  $hobbies = $row['hobbies'];
  $languages = $row['languages_known'];
  $previous_works = $row['previous_works'];
  $github = $row['github'];
  $linkedin = $row['linkedin'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
</head>
<body>
<center>
<h2>Profile</h2>
  

  
  
  <form action="save_profile_changes.php" id="edit_profile" method="post" name="profile" enctype="multipart/form-data">


    <img src="images/default.png" alt="dp" type="file" accept  width="150px" ><br>

    <label>Upload Display Picture</label>
    <input type="file" accept='image/*' name="profile_pic"><br>

    <label for="roll-no">Roll No.</label>
    <input type="text" id="roll_no" name="roll_no" value='<?=$roll_no?>' disabled="true"><br>

    <label  for="name">Name</label>
    <input type="text" id="name" name="name"  value='<?=$name?>' disabled="true"><br>
 
    <label  for="email">Email</label>
    <input type="email" id="email" name="email"  value='<?=$email?>' disabled="true"><br>

    <label  for="email">Gender</label>
    <input type="text" id="gender" name="gender" value='<?=$gender?>' disabled="true"><br>  
    
    <label  for="contact-no">Contact No.</label>
    <input type="text" id="contact_no" placeholder="Enter Mobile No." name="contact_no" value='<?=$contact?>'><br>

    <label class="control-label lead" for="contact-no">Date Of Birth</label>
    <input type="date" id="dob" placeholder="DD-MM-YY" name="dob" value='<?=$dob?>'><br>
  
    <label  for="languages">Languages Know</label>
    <textarea name="languages" id="languages"  cols="30" rows="1" placeholder="Enter know language"  value='<?=$languages?>'>
      <?=$languages?>
    </textarea><br>    
  
    <label  for="project">Previous Works(Any Projects)</label>
    <textarea name="previous_works" id="previous_works" cols="30" rows="1" placeholder="Any project you worked on"  value='<?=$previous_works?>'>
      <?=$previous_works?>
    </textarea><br>

    <label  for="hobbies">Hobbies</label>
    <textarea name="hobbies" id="hobbies" cols="30" rows="1"  placeholder="Enter hobbies"   value='<?=$hobbies?>'>
      <?=$hobbies?>
    </textarea><br>
   
    <label  for="account-detail">Account detail:</label><br>
    <label>GitHub</label> 
    <input id="github_acc" type="text" name="github_acc" placeholder="Enter GitHub Username" value='<?=$github?>'>
    <br>  

    <label>Linkdein</label> 
    <input id="link_dis" type="text" name="linkedin_acc" placeholder="Enter LinkedIn Username" value='<?=$linkedin?>' >
    <br>  

    <br><br><br>

    <input type="submit" name="save_profile_changes"  value="Save Changes"><br>
 
  </form>
    
  
  </center>

</body>
</html>