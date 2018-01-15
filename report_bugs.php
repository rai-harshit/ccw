<?php

    session_start();
    //echo($_SESSION['eid']);
    if(isset($_SESSION['eid']) && isset($_SESSION['uname']))
    {
        $email = $_SESSION['eid'];
        $name = $_SESSION['uname'];
    }
    else
    {
        $email = "";
        $name = "";
    }

?>
<!DOCTYPE html>
<html>

<head>
    <!-- mobile specific metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <!-- CSS
================================================== -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.min.css">

    <!--------------- CUSTOM CSS -------------->
<!--     <link href="styles/css/index.css" rel="stylesheet" type="text/css"> -->
<!--     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles/natn/css/base.css">
    <link rel="stylesheet" href="styles/natn/css/vendor.css">
    
    <link href="styles/natn/css/style.css" rel="stylesheet">
    <link href="styles/natn/css/custom.css" rel="stylesheet"> -->
<!--         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="styles/natn/css/main.css"> -->

    <!--------------- CUSTOM CSS -------------->
    <link href="styles/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!------------ NORMALIZE CSS -------------->
    <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        input {
            width: 100%;
            border-color: 1px solid black !important;
        }

        .button {
            width: 100%;
        }

        h3 {
            text-align: center;
            padding-top: 5%;
        }

        #logout {
            right: 0;
        }
        textarea {
            resize: none;
        }
        #blue-btn{
            background: none repeat scroll 0 0 #0cbbfc;
            border:1px solid #0cbbfc;
            border-radius:5px;
            color: white;
            font-weight: 400;
            padding: 0.8em 0.9em;
            display: block;
            margin:0.8em 0em;
        }
        #find_us{
            padding-left:40px;
        }
        .other_links{
            padding-bottom: 3px;
        }
        #others{
            padding-left: 20%;
        }
        small{
            color:white;
        }
        #form-div{
            background-color: #dee2e6;
            padding: 5%;
        }



    </style>

    <!-- script
================================================== -->
<!--     <script src="styles/natn/js/modernizr.js"></script>
    <script src="styles/natn/js/pace.min.js"></script>
    <script src="styles/natn/js/jquery2.js"></script>
    <script src="styles/natn/js/bootstrap.min.js"></script>
    <script src="styles/natn/js/main.js"></script> -->


    <title>Report a bug</title>
    <meta charset="utf-8">

</head>

<body>
    <div class=home>
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
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
                <a class="nav-link" href="find_resources.php">Resources</a>
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



        <!---------------------------------------------------
    -------------------------END NAVIGATION--------------
    ---------------------------------------------------->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6" id="form-div">
                            <div class='login'>
                                <h2>Report a Bug</h2>

                                <form method="POST" action="bugs_upload.php" id='bugs_form' enctype="multipart/form-data">

                                <label for="email">Email ID:</label>
                                <input id="email" class="form-control" type="email" name="email" required="true" value="<?=$email?>" size:'35' placeholder="Enter your Email ID here">
        
       
                                <label for="email">Name:</label>
                                <input class="form-control" id="name" type="text" name="name" required="true" placeholder="Enter your name here" value="<?=$name?>"></td>
          
        
                                <label for="bug-info">Describe the issue:</label>
                                <textarea class="form-control" id="bug_info" rows="5" cols="32" form='bugs_form' name="bug_info" required="true"></textarea></td>
          
        
                                <label for="files">Add Screenshot :</label>
                                <input id="bug_ss" class="form-control" type="file" name="bug_ss" accept="image/*">
                                <input id="blue-btn" type="submit" value="SUBMIT REPORT" name="bugs_upload">
                            </form>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========FOOTER======================-->
    <div id="footer">
            <div class="row">
                <div class="col-md-6" id="other_links">
                    <h3 style="margin-bottom: 5%">Other Links</h3>
                    <div class="row">
                        <div class="col-md-5">
                            <ul id="others">
                                <li class="other_links"><a href="support_us.php" style="text-decoration: none;color: white">Support Us</a></li>
                                <li class="other_links"><a href="#" style="text-decoration: none;color: white">Leaderboard</a></li>
                            </ul>
                        </div>
                        <div class='col-md-6'>
                            <ul id="others">
                                <li class="other_links"><a href="report_bugs.php" style="text-decoration: none;color: white">Report a Bug</a>
                                <li class="other_links"><a href="#" style="text-decoration: none;color: white">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="find_us" >
<!--                     <h3>Find us at</h3>
                     <iframe width="95%" height="400" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq8XY4MrG5zsR2KIsZh1I9Ls&key=AIzaSyCS9ABZV-9Z6I4IqbZ0NGnKapD60xjMmiE" allowfullscreen></iframe>  -->
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
            <small><b>&lt;Made by Coders' Club&copy;,FCRIT/&gt;</b></small></i>
        </div>
    </div>

    <!--===========END OF FOOTER======================-->
           <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
        <script src="styles/bootstrap/js/bootstrap.min.js"></script>
<!--         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js " integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4 " crossorigin="anonymous "></script> -->
    

</body>

</html>
