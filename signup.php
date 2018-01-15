<?php

session_start();

if(isset($_SESSION['rn']) && isset($_SESSION['eid']))
{
    header("Location: index.php"); 
}

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">
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
                if ((roll_no < 501201) || (roll_no > 501699)) {
                    alert("Please Enter a Valid Roll Number");
                    return (false);
                }

                //email validation
                if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(signup_form.email.value))) {
                    alert("PLease enter a valid Email ID.");
                    return (false);
                }

                //password validation
                if (password === conf_password) {
                    return (true);
                } else {
                    alert("The passwords entered by you dont match.")
                    return (false);
                }
            }

        </script>
        <!--=======================CSS==========================-->
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.css">
        <!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->

        <!--------------- CUSTOM CSS -------------->
        <link href="styles/css/signup.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!------------ NORMALIZE CSS -------------->
        <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            input {
                width: 100%;
            }
            #gender{
                width:25%;
            }
            .button {
                width: 70%;
            }

            #footer {
                height: 100%;
            }

            h3 {
                text-align: center;
                padding-top: 3%;
            }

            #others {
                padding-left: 20%;
                list-style-type: none;
                text-align: center;
            }

            #social-networks {
                margin-top: 1%;
            }
            #form-div{
                background-color: #dee2e6;
                margin:1%;
            }

        </style>
    </head>

    <body>
        <div class="home">
            <nav class="navbar navbar-expand-md bg-light navbar-light">
                <a class="navbar-brand" href="index.php">Coders' Club</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="box-shadow: 0px 3px 5px">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project_request.php">Project Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blogs.php">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="resources.php">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>
                    </ul>
                    <?php
                if(isset($_SESSION['rn']))
                {
                    print("<ul class='navbar-nav'>
                                <li class='nav-item'>
                                    <span class='glyphicon glyphicon-user'></span>
                                    <a class='nav-link' href='profile.php'>Profile</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='logout.php'>Logout</a>
                                </li>
                            </ul>");
                }
            ?>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6" id="form-div">
                                <form id="signup_form" name="signup_form" action="signup_validation.php" method="post" onsubmit="return validateForm()">
                                    <h2>Fill in your details and register for a new account today !</h2>
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
                                    <div class=row>
                                        <div class="col-md-6">
                                            <input id=gender type="radio" name="gender" value="male" checked> Male
                                        </div>
                                        <div class="col-md-6">
                                            <input id="gender" type="radio" name="gender" value="female"> Female
                                        </div>
                                    </div>
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
                            </div>
                            <!--end of col-mid-6-->
                        </div>
                        <div class="col-md-3">
                        </div>
                        <!--end of class row-->
                    </div>
                    <!--end of col-md-12-->
                </div>
                <!--end of class row-->
            </div>
            <!--end of container-fluid-->
            <!-----------FOOTER------------>
            <div id="footer">
                <div class="row">
                    <div class="col-md-12" id="other_links">
                        <h3 style="margin-bottom:3%">Other links</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul id="others">
                                    <li><a href="#" style="text-decoration: none;color: white">Donate</a></li>
                                    <li><a href="#" style="text-decoration: none;color: white">Leaderboard</a></li>
                                </ul>
                            </div>
                            <div class='col-md-6'>
                                <ul id="others">
                                    <li><a href="#" style="text-decoration: none;color: white">Report a Bug</a>
                                        <li><a href="#" style="text-decoration: none;color: white">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-12' id="social-networks">
                    <a href="https://twitter.com/FCRITcodersclub" style="text-decoration: none">
                        <div id="twitter" class="social-sprites"></div>
                    </a>
                    <a href="#" style="text-decoration: none">
                        <div id="facebook" class="social-sprites"></div>
                    </a>
                    <a href="https://plus.google.com/u/2/110531617173128497831" style="text-decoration: none">
                        <div id="google" class="social-sprites"></div>
                    </a>
                    <a href="#" style="text-decoration: none">
                        <div id="linkedin" class="social-sprites"></div>
                    </a>
                </div>
                <div class="col-md-12" id="make">
                    <small>&lt;Made by Coders' Club&copy;,FCRIT/&gt;</small></i>
                </div>
            </div>
            <!-- /.container


        <!-- Bootstrap core JavaScript
        ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js " integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4 " crossorigin="anonymous "></script>

        </div>
    </body>

    </html>
