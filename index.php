<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.css">
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->

    <!--------------- CUSTOM CSS -------------->
    <link href="styles/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!------------ NORMALIZE CSS -------------->
    <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        input{
            width:100%;
        }
        .signin_submit{
            clear:both;
        }
        .login{
            padding-right: 0%;
            padding-left: 10%;
            padding-top: 3%;
            padding-bottom:0%;
            position: relative;
        }
        .post_login{
            padding-right: 10%;
            padding-left: 10%;
            padding-top: 10%;
            padding-bottom:5%;
            position: relative;
        }
        #login_form
        {
            padding-right:12%; 
            border-right:1px solid white;
        }
        .ideas{
            background: #212737;
            margin:5%;
            position: relative;
            color:#b3b3b3;
            background: url(images/idea.jpg) 30% 20% no-repeat;
            height:80%;
        }
        #gotideas{
            color: white;
            padding-top:10%;
            font-weight: 800;
            font-family:courier new,cursive;
            font-size: 30px;
            text-align: center;
        }
        #fancy_submit{
            margin-left:15%;
            /*margin-bottom: 5%;*/
        }
        .button{
            width:70%;
        }
        #twitter_widget{
            padding:5px;
            width: 100%;
            margin-top: 1%;
        }
        #footer{
            height:100%;
        }
        h3{
            text-align: center;
            padding-top:5%;
        }
        #others{
            padding-left: 20%;
        }
        #social-networks{
            margin-top: 1%;
        }
        #logout{
            right:0;
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


        <!--------SLIDER----------->
        <!-------------------------
        ---------APPLY OVERLAY HERE PLEASE---------->
        <div class="slider">
            <div style="width:100%;margin-right: 0px;padding-right: 0px">
                <img class="mySlides" src="images/slider1.jpg" style="width: 100%;height: 100%;position: relative;list-style-type: none">
                <div class="overlay">
                    <!--p class="slider-data">Lorem Ipsum</p-->
                </div>
                <img class="mySlides" src="images/slider2.jpg" style="width: 100%;height: 100%;position: relative;list-style-type: none">
                <div class="overlay">
                    <!--p class="slider-data">Lorem Ipsum</p-->
                </div>
                <img class="mySlides" src="images/slider3.jpg" style="width: 100%;height: 100%;position: relative;list-style-type: none">
                <div class="overlay">
                    <!--p class="slider-data">Lorem Ipsum</p-->
                </div>
            </div>
        </div>


        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 3500); // Change image every 2 seconds
            }

        </script>


        <!--SIGN IN-->
        <div class="signin_submit">
        <div class="row" style="background:#212737 !important;">
            <!-- <div class="col-md-6" style="background:  #212737;color: #b3b3b3;"> -->
            <div class="col-md-6" style="background: #212737;color: #b3b3b3;">
                <?php
                    if(!isset($_SESSION['rn']))
                    {
                        print("<div class='login'>
                            <form id='login_form' method='POST' action='login_validation.php'>
                                <legend>Login</legend>
                                <label for='email'>Email-ID</label>
                                <input class='input' type='text' name='email' size='35'>
                                <label for='password'>Password</label>
                                <input class='input' type='password' name='password' size='35'>
                                <input type='submit' name='login_validation' value='Login' style='background: none repeat scroll 0 0 #0cbbfc;border:1px solid #0cbbfc;border-radius:5px;color: white;font-weight: 400;padding: 0.8em 0.9em;display: block;margin:0.8em 0em;'>
                                <p id='sign-up'><a href='signup.php'>Create an account? Sign up here</a></p>
                            </form>
                        </div>");
                    }
                    else{
                        $name = $_SESSION['uname'];
                        print("<div class='post_login'>
                            <h1 style='margin-left:10px'>Welcome, <b>$name</b></h1>
                            <h3>Something Interesting coming for you in this section...</h3>
                        </div>");

                    }
                ?>
            </div>
            <div class="col-md-6" style="margin-top: 10%;clear:both">
                <div class="ideas">
                    <p id="gotideas">Got any cool ideas?</p>
                    <!-- <small style="color: white;margin-left: 15%;font-size: 14px">Submit us your project ideas and we will turn them into reality. --></small>
                    <div>
                        <button class="button" id='fancy_submit'><span>Submit Idea</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>









        <!-------TWITTTTTEEEEEEEEEEERRRRRRRRRR------------>
        <div id="twitter_widget">
            <div style="width:auto;margin-left: 40%">
                <img src="images/twitter_logo.png" width="150px" height="75px">
                <div id="tweet">
                    <h4><b>Coming soon...</b></h4>
                </div>
            </div>
        </div>

        <!-----------FOOTER------------>
        <div id="footer">
            <div class="row">
                <div class="col-md-6" id="other_links">
                    <h3 style="margin-bottom: 5%">Other links</h3>
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
                <div class="col-md-6" id="find_us" >
                    <h3>Find us at</h3>
                     <iframe width="600" height="400" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq8XY4MrG5zsR2KIsZh1I9Ls&key=AIzaSyCS9ABZV-9Z6I4IqbZ0NGnKapD60xjMmiE" allowfullscreen></iframe> 
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
