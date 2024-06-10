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
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+961 76 810 472</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">harmony.house.lb@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
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

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </div>

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

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/demo_video_thumb.png);">
						<a href="./images/video_demo.mp4" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-md-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Stablished Sinced 2022</h2>
	            </div>
	          </div>
	          <div class="pb-md-5 pb-4">
							<p>Harmony House is envisioned as a premier music store dedicated to providing musicians, enthusiasts, and beginners alike with an exceptional range of musical instruments, accessories, and services. Our mission is to create a vibrant community where music lovers can explore, discover, and nurture their musical passions.</p>
							<!-- <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her.</p> -->
							<p><a href="#" class="btn btn-primary">Shop now</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row">
        	<div class="col-lg-5">
        		<div class="services-flow">
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-bag"></span>
        				</div>
        				<div class="text">
	        				<h3>Free Shipping</h3>
	        				<p class="mb-0">We provide free shipping accross the Lebanese Lands</p>
        				</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-heart-box"></span>
        				</div>
        				<div class="text">
	        				<h3>Valuable Gifts</h3>
	        				<p class="mb-0">The more you invest, the more you get value in return</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-payment-security"></span>
        				</div>
        				<div class="text">
	        				<h3>All Day Support</h3>
	        				<p class="mb-0">You need us, you'll find us all just a text away</p>
	        			</div>
        			</div>
        			<!-- <div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-customer-service"></span>
        				</div>
        				<div class="text">
	        				<h3>All Day Support</h3>
	        				<p class="mb-0">yeah ... same as above </p>
	        			</div>
        			</div> -->
        		</div>
        	</div>
          <div class="col-lg-7">
          	<div class="heading-section ftco-animate mb-5">
	            <h2 class="mb-4">Our satisfied customer says</h2>
	            <p>Very sleak and responsive !!!</p>
	          </div>
            <div class="carousel-testimony owl-carousel ftco-animate">
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">User-Friendly and they show care for the customer !!</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
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
              <h2 class="ftco-heading-2">have a question?</h2>
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
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>