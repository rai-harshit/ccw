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
    <link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!--------------- CUSTOM CSS -------------->
    <link href="index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!------------ NORMALIZE CSS -------------->
    <link href="normalize.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        #login_form{
            padding:0px;
        }
    </style>
</head>


<body>
    <div class='float' style="width:100% !important;padding:0px !important;">
        <nav class="navbar navbar-expand-md bg-light navbar-light">
          <a class="navbar-brand" href="index.php">Coders' Club</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="box-shadow: 0px 3px 5px">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
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
          </div>  
        </nav>


        <!--------SLIDER------------>
        <!----------APPLY OVERLAY HERE PLEASE---------->
        <div class="float" style="width: 100% !important">
                <img class="mySlides" src="image_code1.jpg" style="width:100%;height: 100%;position: relative;list-style-type: none">
                <div class="overlay">
                    <!--p class="slider-data">Lorem Ipsum</p-->
                </div>
                <img class="mySlides" src="ps_image_11.jpg" style="width: 100%;height: 100%;position: relative;list-style-type: none">
                <div class="overlay">
                    <!--p class="slider-data">Lorem Ipsum</p-->
                </div>
                <img class="mySlides" src="ps_image1.jpg" style="width: 100%;height: 100%;position: relative;list-style-type: none">
                <div class="overlay">
                    <!--p class="slider-data">Lorem Ipsum</p-->
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
        <div class="row">
            <div class="col-md-6" id='login_form'>
                <form style="width:100%">
                            <legend>Login</legend>
                            <label for="username">Username</label>
                            <input class="input" type="text" id="username" size="35">
                            <label for="password">Password</label>
                            <input class="input" type="password" id="password" size="35">
                            <input type="submit" name="Submit" style="background: none repeat scroll 0 0 #0cbbfc;border:1px solid #0cbbfc;border-radius:5px;color: white;font-weight: 400;padding: 0.8em 0.9em;display: block;margin:0.8em 0em;">
                            <p id="sign-up"><a href="#">Create an account? Sign up here</a></p>
                </form>
            </div>
        </div>



        <!-------TWITTTTTEEEEEEEEEEERRRRRRRRRR------------>
        <div id="twitter-post">
            <img src="twitter_logo.png" width="15%" height="5%">
            <div id="tweet-">
                <h2>Coming soon...</h2>
            </div>
        </div>

        <!-----------FOOTER------------>
        <div id="footer">
            <div class="clearfix">
                <div id="footer-list">
                    <h3>Other links</h3>
                    <li><a href="#" style="text-decoration: none;color: white">Donate</a></li>
                    <li><a href="#" style="text-decoration: none;color: white">Report a bug</a></li>
                </div>
                <div id="location">
                    <h3>Find us at</h3>
                    <iframe width="600" height="450" frameborder="0" style="border:0;height: 22em;width: 37em" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq8XY4MrG5zsR2KIsZh1I9Ls&key=AIzaSyCS9ABZV-9Z6I4IqbZ0NGnKapD60xjMmiE" allowfullscreen></iframe>
                </div>
            </div>
            <div id="social-networks">
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
            <div id="make">
                <small>&lt;Made by Coder's club&copy;, FCRIT/&gt;</small></i>
            </div>
        </div>
    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js " integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4 " crossorigin="anonymous "></script>


</body>

</html>
