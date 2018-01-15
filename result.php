<?php
    session_start();
    if(isset($_GET['res']))
    {
        $result = $_GET['res'];
        //echo("$result");
        if($result==200)
        {
            $image = "images/success.png";
        }
        else
        {
            $image = "images/error.png";
        }
        if($result==-69)
        {
            $commentable = "ACCOUNT DOES NOT EXIST !<br>TRY CREATING A NEW ACCOUNT.";
        }
        if($result==500)
        {
            $commentable = "WE ARE FACING AN INTERNAL ERROR !<br>PLEASE TRY AGAIN LATER.";
        }
        if($result==403)
        {
            $commentable = "PERMISSION DENIED !<br> WE'RE PRETTY SMART TOO... ";
        }
        if($result==-70)
        {
            $commentable = "INVALID ACTIVATION LINK !";
        }
        if($result==99)
        {
            $commentable = "YOUR ACCOUNT IS ALREADY VERIFIED & ACTIVATED !<br> TRY SIGNING IN.";
        }
        if($result==-99)
        {
            $commentable = "YOUR ACCOUNT ISN'T YET ACTIVATED !<br> ACTIVATE YOUR ACCOUNT FIRST.";
        }
        if($result==-71)
        {
            $commentable = "INVALID ACCOUNT CREDENTIALS! <br>PLEASE TRY AGAIN.";
        }
        if($result==111)
        {
            $commentable = "EMAIL ID IS ALREADY ASSOCIATED WITH ANOTHER ACCOUNT.";
        }
    }
    if(isset($_GET['com']))
    {
        $comment = $_GET['com'];
        //echo("$comment");
        if($comment === 'blog submission successful')
        {
            $commentable = "BLOG SUBMITTED SUCCESSFULLY !<br><br> THANKS FOR YOUR TIME.";
        }
        else if($comment === 'account verified and activated')
        {
            $commentable = "ACCOUNT VERIFIED & ACTIVATED SUCCESSFULLY !<br><br> THANKS FOR YOUR TIME.";                            
        }
        else if($comment === 'bug submission successful')
        {
            $commentable = "BUG SUBMITTED SUCCESSFULLY !<br><br> THANKS FOR YOUR TIME.";
        }
        else if($comment === 'preq submission successful')
        {
            $commentable = "PROJECT REQUEST SUBMITTED SUCCESSFULLY !<br><br> THANKS FOR YOUR TIME.";                          
        }
        else if($comment === 'signup Succesful')
        {
            $commentable = "ACTIVATION LINK SENT !<br> PLEASE CHECK YOUR EMAIL & CLICK ON THE ACTIVATION LINK TO ACTIVATE YOUR ACCOUNT.<br><br> THANKS FOR YOUR TIME.";
        }
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">

        <title>ATTENTION !</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.css">

        <!--------------- CUSTOM CSS -------------->
        <link href="styles/css/index.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!------------ NORMALIZE CSS -------------->
        <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            input {
                width: 100%;
            }

            .signin_submit {
                clear: both;
            }

            .login {
                padding-right: 0%;
                padding-left: 10%;
                padding-top: 3%;
                padding-bottom: 0%;
                position: relative;
            }

            .post_login {
                padding-right: 10%;
                padding-left: 10%;
                padding-top: 10%;
                padding-bottom: 5%;
                position: relative;
            }

            #login_form {
                padding-right: 12%;
                border-right: 1px solid white;
            }

            .ideas {
                background: #212737;
                margin: 5%;
                position: relative;
                color: #b3b3b3;
                background: url(images/idea.jpg) 30% 20% no-repeat;
                height: 80%;
            }

            #gotideas {
                color: white;
                padding-top: 10%;
                font-weight: 800;
                font-family: courier new, cursive;
                font-size: 30px;
                text-align: center;
            }

            #fancy_submit {
                margin-left: 15%;
                /*margin-bottom: 5%;*/
            }

            .button {
                width: 70%;
            }

            #twitter_widget {
                padding: 5px;
                width: 100%;
                margin-top: 1%;
            }

            #footer {
                height: 100%;
            }

            h3 {
                text-align: center;
                padding-top: 5%;
            }

            #others {
                padding-left: 20%;
                /*list-style-type: none;*/
            }

            #social-networks {
                margin-top: 1%;
            }

            #logout {
                right: 0;
            }
            #error-message{
                padding-top: 10%;
                padding-left:10%;
                padding-right:10%;
                text-align: center;
                color: #212737;
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
            <!---============ERROR-MAIN-PAGE=============-->
            <div class="row">
                <?php

  
                ?>

                <div class='col-md-7'>
                    <div id='error-message'>
                        <b><h1><b><?=$commentable?></b></h1></b>
                    </div>
                </div>
                <div class='col-md-5'>
                    <div id='error-picture'>
                        <img src='<?=$image?>'' height='100%' width='100%'>
                    </div>
                </div>
            </div>

            <!---============ERROR-MAIN-PAGE=============-->

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
                    <div class="col-md-6" id="find_us">
<!--                         <h3>Find us at</h3>
                        <iframe width="600" height="400" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq8XY4MrG5zsR2KIsZh1I9Ls&key=AIzaSyCS9ABZV-9Z6I4IqbZ0NGnKapD60xjMmiE" allowfullscreen></iframe> -->
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
