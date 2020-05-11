<?php require("./data/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/main.css">

  <script src="js/homepage.js"></script>

  <title>Welcome!</title>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
    <a class="navbar-brand" href="#"> <img src="./img/PNGPIX-COM-Audi-Sports-Car-PNG-Image.png" id="icon-navbar" style="width: 50px ;"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item active">
                <a class="nav-link disabled" href="index.html" tabindex="-1" aria-disabled="true"> Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="cardealership/cars.php">Cars</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="cardealership/cars.php">CarDealerships</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./contactus/contactus.html">Contact Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto"  style="padding-right:70px">
                

                <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">  Settings 
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="/database/index.php" style="margin-left :50px">Log Out</a></li>
                      </ul>
                    </div>
            
        </ul>

  

            <!--CHECKS IF USER IS LOGGED IN TO SEE WHETHER TO DISPLAY LOG IN BUTTON OR NOT-->

               

             <!--IF USER IS NOT LOGGED IN-->

            
                </div>
          </div>
        </nav>


        
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
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
              <h1 class="slogan col-sm-12 text-sm-left">Welcome!</h1>
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
              <img class="d-block w-100 bmw-img" src="img/photo-1556189250-72ba954cfc2b.jpg" alt="Third slide" style="width: 100% ; height: 1190px">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100 mercedes-img"
                src="img/mercedes-benz-passenger-cars-2018-a-class-w-177-amg-line-digital-white-pearl-2560x1440-2560x1440.jpg"
                alt="Fourth slide"  style="width: 100% ; height: 1190px">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100 audi-img" src="img/2019-audi-a6.jpg" alt="Fifth slide"  style="width: 100% ; height: 1190px">
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
          <p>Unnamed Project 443
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
              <a href="www.instagram.com/georges_younes">Georges Younes</a>
            </li>
            <li>
              <a href="https://www.instagram.com/youssabboud">Youssef Abboud</a>
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
        <a class="btn-floating btn-fb mx-1" href="facebook.com">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1" href="www.twitter.com">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1" href="www.google.com">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1" href="linkedin.com">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a class="WebGroup" href="https://github.com/YoussAbboud/Database"> Web Group</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>



</html>