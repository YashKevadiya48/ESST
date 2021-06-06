<?php
    session_start();
    if(isset($_SESSION['logout'])){
        echo "<br><div class='alert alert-success' role='alert'>".$_SESSION['logout']."</div>";
        unset($_SESSION['logout']);            
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- External css -->
    <link href='https://fonts.googleapis.com/css?family=Trirong' rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <link rel="stylesheet" href="css/style.css">


    <title> EFFICIENT SHOPPING IN SHORT TIME </title>

    <style>
      .hero-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("image/loc29.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        height: 600px;
      }
      .hero-text {
        text-align: center;
        padding-top:180px;
        color: white;
      }
      @media screen and (min-width: 400px){
            .nice {
                padding:0 100px;
            }
        }

    </style>

  </head>
  <body style="font-family:'Trirong';">
      <?php
          include 'includes/header.php';
      ?>
       
<div class="cointainer" style="position: relative; width: auto; overflow-X:hidden;">
      <div class="hero-image"><center>
        <div class="hero-text">
          <h1>EFFICIENT SHOPPING IN SHORT TIME</h1>
          <p class="container nice">Every large building needs an indoor map. Efficient shopping in short time's solutions for shopping malls improve the shopper experience, boosts visibility of your tenants, and increases internal efficiencies.</p> <br>
          <a href="#log"><i class='fas fa-cart-arrow-down' style='font-size:44px;color:#fa2929;position:absolute;bottom:2rem;left:47%'></i></a>
        </div></center>
      </div>
<br>

      <div>
        <section id='log'>
        <center>
        <h1>Your account</h1> <hr style='background-color: black; height:2px; width: 80%;'/>
            <div class='control col-md-6'>
              <a href="signup.php" class="btn">Sign up</a>
              <a href="login.php" class="btn">Login</a>
            </div>
          </center>
        </section>
      </div>
<hr>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="image/loc6.jpg" class="img-fluid"/>
          </div>
          <div class="col-md-6">
            <br>
            <h3>Benefits of Offline shopping with ESST</h3><br>
            <ul class="lead" type="none">
              <li>Our interactive mapping and wayfinding products for malls allow shoppers to search and discover the retailers and services available at your property while delivering valuable insights back to your business.</li>
              <li>Plan your 2D or 3D maps with ESST and provide to your visiters. So that they can make their shopping experience better with their desired products.</li>
            </ul>
          </div>
        </div>
      </div>
<br>
      <div class="container">
        <div class="row">
          <div class="col-md-6"><br>
            <h2>Make your shopping experience better with ESST</h2><br>
            <ul class="lead" type="none">
              <li>ESST's solutions for malls enable your venues to provide functional discovery and navigation to shoppers while also highlighting advertising through existing workflows.</li>
              <li>This, paired with shopper insights and analytics, allows your business to make more informed decisions related to visitor and tenant experiences.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <img src="image/loc5.jpg" class="img-fluid" />
          </div>
        </div>
      </div>

      <br>
      <div class="cointainer" style="margin-bottom: 30px;">
      <div class="row">
          <div class="col-sm-4">
              <center><br>
              <i class='fas fa-route' style='font-size:42px'></i>
              <div class="card-body">
                <h4 class="card-title">Shopping efficiency</h4>
                <p class="card-text">For shoppers</p>
                <p>Allow shoppers more time to discover your shopping mall with outdoor and indoor navigation and provide better experience.</p>
              </div>    </center>       
          </div>
          <div class="col-sm-4">
              <center><i class='fas fa-map-marker-alt' style='font-size:24px'></i><br>
              <i class='fas fa-shopping-cart' style='font-size:40px'></i>
              <div class="card-body">
                <h4 class="card-title">Get your route</h4>
                <p class="card-text">for customers</p>
                <p>Use ESST technology and find route of your desired destination in efficient time. Make your shopping experience better with us.</p>
              </div>    </center>       
          </div>
          <div class="col-sm-4">
              <center><br>
              <i class='fas fa-shopping-basket' style='font-size:40px'></i>
              <div class="card-body">
                <h4 class="card-title">Analyse Products</h4>
                <p class="card-text">Ofcourse for you</p>
                <p> Understand shopper intent through search data, providing a broader picture of what visitors are looking for.</p>
              </div>    </center>
          </div>
        </div>
      </div>


  <section class="section section-lg section-shaped">
    <div class="shape shape-style-1 shape-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container py-md">
      <div class="row row-grid justify-content-between align-items-center">
        <div class="col-lg-6">
          <h2 class="text-white h1">Retailers and Mall owners <span class="text-white h2">build your own indoor map</span></h2>
          <p class="lead text-white">Use this latest technology of indoor mapping and navigation for every small stores or large retails or malls. Use ESST and prepare your own indoor world with also outdoor navigation. So that your customers get route from their home to their desired products. Setup any number of vanues publically. For mapping all you need is a 2D or 3D model of your building with best mapping tools.</p>
          <div class="btn-wrapper" style="position: relative; bottom: 10px;">
            <a href="http://localhost/ESST/admin/signup.php" class="btn btn-light">SignUp Page</a>
            <a href="http://localhost/ESST/admin/login.php" class="btn btn-dark">Login Page</a>
          </div>
        </div><br>
        <div class="col-lg-5 mb-lg-auto" >
            <img src="image/indoor1.gif" class="img-fluid"/>
        </div>
      </div>
    </div>
    <div class="separator separator-bottom separator-skew">
      <svg x="0" y="0" viewBox="0 0 2560 110" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon points="2560 0 2560 110 0 110" fill="white"></polygon>
      </svg>
    </div>
  </section>
   
  
      <div class="section section-demo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="description-carousel" class="carousel fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="image/loc19.jpg" alt="">
                                    </div>
                                    <div class="item active">
                                        <img src="image/indoor.gif" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="image/loc23.jpg" alt="">
                                    </div>
                                </div>
                                <ul class="carousel-indicators  carousel-indicators-red">
                                    <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                                    <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 topp"><center>
                            <h4 class="header-text">Easy to integrate</h4>
                            <p>
                            Our interactive mapping and wayfinding products for malls allow shoppers to search and discover the retailers and services available at your property while delivering valuable insights back to your business.
                            </p>
                            <a href="javascript:void(0);" id="Demo3" class="btn btn-dark" data-button="info">Get Free Demo</a>
                            </center>
                        </div>
                    </div>
                </div>
      </div>

     

</div>
    <!-- Footer -->
      <?php
          include 'includes/footer.php';
      ?>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <!-- <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script> -->
    <script src="js/bootstrap.js" type="text/javascript"></script> 
    <!-- <script src="js/awesome-landing-page.js" type="text/javascript"></script> -->

  </body>
</html>
