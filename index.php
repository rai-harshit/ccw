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
</head>


<body>

    <nav class="navbar navbar-expand-md w3-animate-left" style="z-index: 100">
        <a class="navbar-brand" href="#">Coder's Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#signin-submit-section">Project Request</a>
                </li>
            </ul>

        </div>
    </nav>


    <!--------SLIDER----------->
    <!-------------------------
    ---------APPLY OVERLAY HERE PLEASE--------->
    <div class="container" style="max-width: 100%;margin-right: 0px;padding-right: 0px">
        <div style="width:100%;margin-right: 0px;padding-right: 0px">
            <img class="mySlides" src="image_code1.jpg" style="left: -0.5em;width: 100%;height: 100%;position: relative;list-style-type: none">
            <div class="overlay">
                <!--p class="slider-data">Lorem Ipsum</p-->
            </div>
            <img class="mySlides" src="ps_image_11.jpg" style="left: -0.5em; width: 100%;height: 100%;position: relative;list-style-type: none">
            <div class="overlay">
                <!--p class="slider-data">Lorem Ipsum</p-->
            </div>
            <img class="mySlides" src="ps_image1.jpg" style="left: -0.5em;width: 100%;height: 100%;position: relative;list-style-type: none">
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
    <div class="clearfix">
        <div id="signin-submit-section">
            <form id="sign-in" style="border-right: 1px solid rgb(241, 241, 241);left:20em;width: 40%">

                <legend>Login</legend>
                <label for="username">Username</label>
                <input class="input" type="text" id="username" size="35">
                <label for="password">Password</label>
                <input class="input" type="password" id="password" size="35">
                <input type="submit" name="Submit" style="background: none repeat scroll 0 0 #0cbbfc;border:1px solid #0cbbfc;border-radius:5px;color: white;font-weight: 400;padding: 0.8em 0.9em;display: block;margin:0.8em 0em;">
                <p id="sign-up"><a href="#">Create an account? Sign up here</a></p>
            </form>
            <div id="submit-project">
                <p style="color: white;font-weight: 800;font-family:courier new,cursive;font-size: 36px;text-align: center;margin-top: 8%">Got any cool ideas?</p>
                <small style="color: white;margin-left: 15%;font-size: 14px">Submit us your project ideas and we will turn them into reality.</small>
                <!--button id="sub-idea">Submit Idea</button-->
                <button class="button"><span>Submit Idea</span></button>
            </div>
        </div>
    </div>

    <!-------TWITTTTTEEEEEEEEEEERRRRRRRRRR----------->
    <div id="twitter-post">
        <img src="twitter_logo.png" width="15%" height="5%">
        <div id="tweet-">
            <h2>Coming soon...</h2>
        </div>
    </div>

    <!-----------FOOTER----------->
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
            <small>&lt;Made by Coder's club&copy; ,FCRIT/&gt;</small></i>
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
