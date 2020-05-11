<?php require("../data/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<?php session_start();?>

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

    <link rel="stylesheet" href="../css/main.css">

    <script src="../js/homepage.js"></script>

    <title>Welcome!</title>

</head>

<body class="body-class3">

    <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
        <a class="navbar-brand" href="#"> <img src="../img/PNGPIX-COM-Audi-Sports-Car-PNG-Image.png" id="icon-navbar"
                style="width: 50px;"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../index2.php" tabindex="-1" aria-disabled="true"> Home <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link disabled" href="./cardealership/cars.html">Car Selection</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./cardealership.php">CarDealerships</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../contactus/contactus.html">Contact Us</a>
                </li>

        

            </ul>

            <ul class="navbar-nav ml-auto"  style="padding-right:70px">
                

                    <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">  Settings 
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="../index.php" style="margin-left :50px">Log Out</a></li>
                          </ul>
                        </div>
                
            </ul>

            
            <!--CHECKS IF USER IS LOGGED IN TO SEE WHETHER TO DISPLAY LOG IN BUTTON OR NOT-->



            <!--IF USER IS NOT LOGGED IN-->



        </div>
    </nav>



    <?php 
                                $sql = "SELECT * FROM car LIMIT 24";
                               $result = mysqli_query($connection , $sql);
                                ?>
    <div class="container" id="bd">
        <div class="row">
            <?php while($rows = mysqli_fetch_assoc($result))
                                    {
                            ?>
            <div class="col-lg-4 col-sm-6">

                <div class="card" style="height: 410px">
                <?php if($rows['modelid']%10 == 9)
                { ?>
                <img class="card-img-top" src="../img/volk.jpg" alt="Card image">
                <?php } ?>
              
                                    <?php 
                                     if($rows['modelid']%10 == 1)
                                     {  ?>
                <img class="card-img-top" src="../img/tesla.jpg" alt="Card image">
                                    <?php } 

                                     if($rows['modelid']%10 == 2)
                                     {  ?>
                <img class="card-img-top" src="../img/porsche.jpg" alt="Card image">
                                    <?php } 
                                     if($rows['modelid']%10 == 3)
                                     {  ?>
                <img class="card-img-top" src="../img/mercedes.jpg" alt="Card image">
                                    <?php } ?>

                <?php if($rows['modelid']%10 == 4)
                                    {  ?>
                <img class="card-img-top" src="../img/bmw.jpg" alt="Card image">
                                    <?php } 
                                    if($rows['modelid']%10 == 5)
                                    {  ?>
                <img class="card-img-top" src="../img/cheroke.jpg" alt="Card image">
                                    <?php } 
                                     if($rows['modelid']%10 == 0) 
                                    {  ?>
                <img class="card-img-top" src="../img/mkx.jpg" alt="Card image">
                                    <?php } ?>
                                    <?php if($rows['modelid']%10 == 8)
                                    { ?>
                                    <img class="card-img-top" src="../img/cclass.jpg" alt="Card image">
                                    <?php } ?>
                                    <?php if($rows['modelid']%10 == 7)
                                    { ?>
                                    <img class="card-img-top" src="../img/gclass.jpg" alt="Card image">
                                    <?php } ?>
                                    <?php if($rows['modelid']%10 == 6)
                                    { ?>
                                    <img class="card-img-top" src="../img/gclass.jpg" alt="Card image">
                                    <?php } ?>



                    <div class="card-body">

                    <form action="./cars2.php" method="POST">
                        <tr>
                            <input type=hidden name="modelid" value="<?php echo $rows['modelid']; ?>"/>

                            <td>Car Number:</t> <?php echo $rows['modelid']; ?></td></br>
                            <td>Car Year:</t> <?php echo $rows['c_year'] ?></td></br>
                            <td>Car Model:</t> <?php echo $rows['CarModel']?></td></br>
                            <td>Car Color: </t><?php echo $rows['color'] ?></td></br>
                            <td><?php if($rows['forsale'] == '0')
                                        echo("it is Not For Sale");
                                        else
                                        {
                                        echo("it is For Sale"); ?>
                                </br>Price:</t>
                                <?php echo $rows['Price'] ?>
                                <button class="btn btn-outline-success my-2 my-sm-0 btt_submit" type="submit">View Car</button>
                                <?php
                                
                                        }
                                        ?></td>
                        </tr>
                                    </form>
                    </div>

                    </br>
                    </br>
                    </br>
                </div>
                </br>
                    </br>
                    </br>
            </div>

            <?php
            
                                    }
                                    ?>

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
                    <p>Unnamed Project 443 strives to make your stay in Lebanon most memorable. For more info about what
                        we do,
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