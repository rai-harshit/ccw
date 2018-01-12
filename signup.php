<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign up page</title>
  <script>
    function validateForm() {
      var roll_no = document.forms["signup_form"]["roll_no"].value;
      console.log(roll_no);
      var password = document.forms["signup_form"]["password"].value;
      console.log(password);
      var conf_password = document.forms["signup_form"]["conf_password"].value;
      console.log(conf_password);

      //roll_no validation
      if ((roll_no < 501201)||(roll_no> 501699)) {
        alert("Please Enter a Valid Roll Number");
        return (false);
      }

      //email validation
      if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(signup_form.email.value)))  
      {  
        alert("PLease enter a valid Email ID.");
        return (false);
      }  
      
      //password validation
      if(password === conf_password)
      {
        return (true);
      }
      else
      {
        alert("The passwords entered by you dont match.")
        return (false);
      }
    }
  </script>
   
</head>
<body>
	<center>
	
  <p>Fill in your details and register for a new account today !</p>
  <form name="signup_form" action="signup_validation.php" method="post" onsubmit="return validateForm()">
      <label>Roll Number</label>
      <input id="rollno" type="text" name="roll_no" placeholder="Roll Number" required="true">
      <br>
      <label>First Name</label>
      <input id="firstname" type="text" name="first_name" placeholder="First Name" required="true">
      <br>
      <label>Last Name</label>
      <input id="lastname" type="text" name="last_name" placeholder="Last Name" required="true">
      <br> 
      <label>Gender</label>
      <input type="radio" name="gender" value="male" checked> Male
      <input type="radio" name="gender" value="female"> Female
      <br> 
      <label>E-mail</label>
      <input id="email" type="email" name="email" placeholder="Email" required="true">
      <br>
      <label>Password</label>
      <input id="password" type="password" name="password" placeholder="Password" required="true" minlength="8">
      <br>
      <label>Confirm Password</label>
      <input id="cnf-password" type="password" name="conf_password" placeholder="Confirm Password" required="true" minlength="8">
      <br><br>
     <input type="submit" name="signup" value="Sign Up">
  </form>
   
</center>   
</body>
</html>