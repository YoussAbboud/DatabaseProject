<!DOCTYPE html>
<html lang="en">

<?php 
session_start();
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="google-signin-client_id" content="361584695413-p0l4bdov2nkk0vl1gj4o6rp4er1rnf51.apps.googleusercontent.com">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/main.css">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="js/homepage.js" type="text/javascript"></script>

  <title>Welcome!</title>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                  <h1> The Dealer </h1>
                  
            
            
            
                  <div class="form-inline my-2 my-lg-0 ml-auto">
                    <form method='POST'>
                              <input type="text" id="inputemail" class="form-control" placeholder="Email" name="email2">
                              <input type="password" id="inputpassword" name="password2" class="form-control" placeholder="Password" style="margin-left: 10px;">
                          
                    <button class="btn btn-outline-success my-2 my-sm-0 btt_search" type="button" style="margin-left: 10px;" id="signin_btt">Log In</button>
</form>
                  </div>
                </div>
              </nav>


  <div class="container-fluid">
    <div class="row">
      <div class="col-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">

            <div class="carousel-content">
              <h3>
              <h1 class="slogan col-sm-12 text-sm-left">We make it simple.</h1>
              <h3 class="subslogan col-sm-12 text-sm-left"> Find the Perfect Dealership in a click of a button <br>
              </h3>
            </div>
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/performance-hero@2.jpg" alt="First slide" style="width: 100%">
              <div class="carousel-caption d-none d-md-block">
                <h5>Tesla</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/Porsche_2016_718_506805_2880x1800.jpg" alt="Second slide"
                style="width: 100%">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 bmw-img" src="img/photo-1556189250-72ba954cfc2b.jpg" alt="Third slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100 mercedes-img"
                src="img/mercedes-benz-passenger-cars-2018-a-class-w-177-amg-line-digital-white-pearl-2560x1440-2560x1440.jpg"
                alt="Fourth slide" style="width: 100%">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100 audi-img" src="img/2019-audi-a6.jpg" alt="Fifth slide" style="width: 100%">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      

      <div class="col-4 mx-auto">
        </br>
        </br>
        </br>
<h2>Or Sign Up</h2>
          <form method='POST'>
              <table>
                  <tr>
                      <td><input type="text" class="form-control" placeholder="FirstName" name="ftname" id="fn"></td>
                      <td><input type="text"  class="form-control" placeholder="LastName" name="lname" style="margin-left: 15px;" id="ln"></td>
                  </tr>
                  </table>
                </br>
            <input type="email" id="inputEmail" name="email1" class="form-control" placeholder="Email address" required autofocus style="width:71.5%">
</br>

           <input type="date" id="inputDate" name="date" class="form-control" required autofocus style="width:71.5%">

</br>

<input type="text" id="inputAddress" name="address" class="form-control" placeholder="Address" required autofocus style="width:71.5%">

</br>
          <!--Password-->
            <input type="password" id="inputPassword" name="password1" class="form-control" placeholder="New Password" required autofocus style="width:71.5%">
          
</br>

          <!--Submit button-->
          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="signup_btt"style="width:50%">Sign Up</button>
</form>
          <hr class="my-4">

          <!--Sign in using google-->
          <div class="g-signin2" data-onsuccess="onSignIn"></div>
      </div>


    </div>
  </div>

  </br>

  <!-- Footer -->
  <footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Database Project</h5>
          <p>Unnamed Project 443 strives to make your stay in Lebanon most memorable. For more info about what we do,
            click <a href="#">here.</a></p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Useful Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Join us!</a>
            </li>
            <li>
              <a href="#!">Location</a>
            </li>
            <li>
              <a href="#!">Pricing</a>
            </li>
            <li>
              <a href="#!">Settings</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">About</a>
            </li>
            <li>
              <a href="#!">Careers</a>
            </li>
            <li>
              <a href="#!">Privacy Policy</a>
            </li>
            <li>
              <a href="#!">Terms and Conditions</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Developers</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Haidar Harmanani</a>
            </li>
            <li>
              <a href="https://www.instagram.com/georges_younes" target="_blank">Georges Younes</a>
            </li>
            <li>
              <a href="https://www.instagram.com/youssabboud" target="_blank">Youssef Abboud</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center social-media">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1" href="facebook.com" target="_blank">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1" href="www.twitter.com" target="_blank">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1" href="www.google.com" target="_blank">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1" href="linkedin.com" target="_blank">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a class="WebGroup" href="https://github.com/YoussAbboud/Database" target="_blank"> Web Group</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>



</html>