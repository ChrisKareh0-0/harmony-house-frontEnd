<?php
// Start the session at the very top of the file
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Harmony House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .carousel-img {
            max-height: 600px; /* Adjust this value to your desired height */
            width:200px;
            object-fit:contain;
        }

        .product .img-prod {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 300px; /* Set the desired height */
            overflow: hidden;
            position: relative;
        }

        .product .img-prod img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }
    </style>
  </head>
  <body class="goto-here">
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">Harmony House</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
              <!-- <li class="nav-item"><a href="shop.html" class="nav-link">Shop</a></li> -->
              <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
              <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
              <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item cta cta-colored"><a href="../cart/cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
              <?php
              if (isset($_SESSION['username'])) {
                  $username = htmlspecialchars($_SESSION['username']);
                  echo '
                  <li class="nav-item"><a class="nav-link">Hello, '.$username.'</a></li>
                  <li class="nav-item"><a href="../logout.php" class="nav-link">Logout</a></li>
                  ';
              } else {
                  echo '
                  <li class="nav-item"><a href="../login.html" class="nav-link">Log In</a></li>
                  ';
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
      <div class="home-slider owl-carousel">
          <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <img class="one-third order-md-last img-fluid carousel-img" src="images/bg_1.png" alt="">
                <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                  <div class="text">
                    <span class="subheading">#New Arrival</span>
                    <div class="horizontal">
                        <h1 class="mb-4 mt-3">Guitars Collection 2024</h1>
                        <p class="mb-4">Checkout the awesome collection of high-end guitars</p>
                        <p><a href="#" class="btn-custom">Discover Now</a></p>
                      </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <img class="one-third order-md-last img-fluid carousel-img" src="images/bg_2.png" alt="">
                <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                  <div class="text">
                    <span class="subheading">#New Arrival</span>
                    <div class="horizontal">
                        <h1 class="mb-4 mt-3">New Guitars Summer Collection</h1>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                        <p><a href="#" class="btn-custom">Discover Now</a></p>
                      </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="flaticon-bag"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <p>We provide free shipping accross the Lebanese Lands</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support Customer</h3>
                <p>We make sure that our customers are satisified, if you're facing any issue or you're unsatisfied with our service please contact us.</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="flaticon-payment-security"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Secure Payments</h3>
                <p>We use the most secure payment gateways in the market, to ensure safe transactions</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">New Guitars Arrival</h2>
            <p>Checkout these beauties</p>
          </div>
        </div>       
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
            <div class="product d-flex flex-column">
              <a href="#" class="img-prod product-link" data-id="1" data-name="Gretch Falcon" data-price="120.00" data-image="images/Gretsch Falcon.jpg" data-description="Gretch Falcon Description">
                <img class="img-fluid" src="images/Gretsch Falcon.jpg" alt="Gretch Falcon">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3">
                <h3><a href="#" class="product-link" data-id="1" data-name="Gretch Falcon" data-price="120.00" data-image="images/Gretsch Falcon.jpg" data-description="Gretch Falcon Description">Gretch Falcon</a></h3>
                <div class="pricing">
                  <p class="price"><span>$120.00</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
            <div class="product d-flex flex-column">
              <a href="#" class="img-prod product-link" data-id="2" data-name="Classic Woody" data-price="80.00" data-image="images/stratocaster_relic3.jpg" data-description="Classic Woody Description">
                <img class="img-fluid" src="images/stratocaster_relic3.jpg" alt="Classic Woody">
                <span class="status">50% Off</span>
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3">
                <h3><a href="#" class="product-link" data-id="2" data-name="Classic Woody" data-price="80.00" data-image="images/stratocaster_relic3.jpg" data-description="Classic Woody Description">Classic Woody</a></h3>
                <div class="pricing">
                  <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
            <div class="product d-flex flex-column">
              <a href="#" class="img-prod product-link" data-id="3" data-name="Guitar Boobacla" data-price="120.00" data-image="images/stratocaster_relic2.jpg" data-description="Guitar Boobacla Description">
                <img class="img-fluid" src="images/stratocaster_relic2.jpg" alt="Guitar Boobacla">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3">
                <h3><a href="#" class="product-link" data-id="3" data-name="Guitar Boobacla" data-price="120.00" data-image="images/stratocaster_relic2.jpg" data-description="Guitar Boobacla Description">Guitar Boobacla</a></h3>
                <div class="pricing">
                  <p class="price"><span>$120.00</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
            <div class="product d-flex flex-column">
              <a href="#" class="img-prod product-link" data-id="4" data-name="Brown Sugar" data-price="120.00" data-image="images/stratocaster_relic.jpg" data-description="Brown Sugar Description">
                <img class="img-fluid" src="images/stratocaster_relic.jpg" alt="Brown Sugar">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3">
                <h3><a href="#" class="product-link" data-id="4" data-name="Brown Sugar" data-price="120.00" data-image="images/stratocaster_relic.jpg" data-description="Brown Sugar Description">Brown Sugar</a></h3>
                <div class="pricing">
                  <p class="price"><span>$120.00</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-deal bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/clarinet.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-6">
            <div class="heading-section heading-section-white">
              <span class="subheading">Deal of the month</span>
              <h2 class="mb-3">Deal of the month</h2>
            </div>
            <div id="timer" class="d-flex mb-4">
              <div class="time" id="days"></div>
              <div class="time pl-4" id="hours"></div>
              <div class="time pl-4" id="minutes"></div>
              <div class="time pl-4" id="seconds"></div>
            </div>
            <div class="text-deal">
              <h2><a href="#">Clarinet</a></h2>
              <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
              <ul class="thumb-deal d-flex mt-4">
                <li class="img" style="background-image: url(images/clarinet.png);"></li>
                <li class="img" style="background-image: url(images/bass_clarinet.png);"></li>
                <li class="img" style="background-image: url(images/clarinetb.png);"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-gallery">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4">Follow Us On Instagram</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="row no-gutters">
          <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="mouse">
            <a href="#" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
            </a>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Harmony House</h2>
              <p>Your stop for the best music store</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                  <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                  <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                  <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                  <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                </ul>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">FAQs</a></li>
                  <li><a href="#" class="py-2 d-block">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Zouk Mikael - Lebanon</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+961 810 472</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">harmony.house.lb@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
          </div>
        </div>
      </div>
    </footer>
    
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

  <script>
    $(document).ready(function() {
      $('.product-link').on('click', function(e) {
        e.preventDefault();
        const productId = $(this).data('id');
        const productName = $(this).data('name');
        const productPrice = $(this).data('price');
        const productImage = $(this).data('image');
        const productDescription = $(this).data('description');
        
        window.location.href = `../product_info/product_Info.php?id=${productId}&name=${encodeURIComponent(productName)}&price=${productPrice}&image=${encodeURIComponent(productImage)}&description=${encodeURIComponent(productDescription)}`;
      });
    });
  </script>
  </body>
</html>
