
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Swiper slider-->
 
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="wide" id="all">
      <!-- Top bar-->
      <div class="top-bar py-2" id="topBar" style="background: #555">
        <div class="container px-lg-0 text-light py-1">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p class="mb-0 text-xs">Contact us on 00000000000 </p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline d-block d-md-none mb-0">
                  <li class="list-inline-item"><a class="text-xs" href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a class="text-xs" href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="text-xs text-uppercase fw-bold text-reset" href="login.php" ><i class="fas fa-door-open me-2"></i><span class="d-none d-md-inline-block">Sign In</span></a></li>
                  <li class="list-inline-item"><a class="text-xs text-uppercase fw-bold text-reset" href="registration.php"><i class="fas fa-user me-2"></i><span class="d-none d-md-inline-block">Sign Up</span></a></li>
                </ul>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-uppercase" id="login-modalLabel">Customer Login</h4>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group mb-3">
                  <input class="form-control" id="email_modal" type="text" placeholder="email">
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" id="password_modal" type="password" placeholder="password">
                </div>
                <p class="text-center">
                  <button class="btn btn-outline-primary"><i class="fas fa-door-open"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted small">Not registered yet?</p>
              <p class="text-center text-muted small"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Sticky-->
      <header class="nav-holder make-sticky">
        <div class="navbar navbar-light bg-white navbar-expand-lg py-0" id="navbar">
        
        </div>
      </header>
      <!-- HERO SLIDER SECTION-->
      <section class="text-white bg-cover bg-center primary-overlay overlay-dense" style="background: url('img/photogrid.jpg') repeat">
        <div class="overlay-content py-5">
          <div class="container py-4">
            <!-- Hero slider-->
            <div class="swiper-container homepage-slider">
              <div class="swiper-wrapper">
                <!-- Hero Slide-->
                
                
                <!-- Hero Slide-->
                <div class="swiper-slide h-auto mb-5">
                  <div class="row gy-5 h-100 align-items-center">
                    <div class="col-lg-5 text-lg-end">
                      <h1 class="text-uppercase">proudcuts</h1>
                      <ul class="list-unstyled text-uppercase fw-bold mb-0">
                        <li class="mb-2">Diveces</li>
                        
                        <li>laptop & moblile and other devices</li>
                      </ul>
                    </div>
                    <div class="col-md-7"><img class="img-fluid" src="images/onlineshop_ecommerce_teaser.jpg" alt=""></div>
                  </div>
                </div>
                <!-- Hero Slide-->
                <div class="swiper-slide h-auto mb-5">
                  <div class="row gy-5 h-100 align-items-center">
                    <div class="col-lg-7"><img class="img-fluid" src="img/template-easy-code.png" alt=""></div>
                    <div class="col-lg-5">
                      <h1 class="text-uppercase">you can by your product</h1>
                      <ul class="list-unstyled text-uppercase fw-bold mb-0">
                        <li class="mb-2">by visa card</li>
                        <li>by paypal</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination swiper-pagination-light"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- SERVICES SECTION-->
      <section class="py-5">
        <div class="container py-4">
          <div class="row gy-4">
            <!-- Service-->
            <div class="col-lg-4 col-md-6 block-icon-hover text-center">
              <div class="icon icon-outlined icon-outlined-primary icon-thin mx-auto mb-3"><i class="fas fa-desktop"></i></div>
              <h4 class="text-uppercase mb-3">cart</h4>
              <p class="text-gray-600 text-sm">you can get prouducts do you want and added on your cart.</p>
            </div>
            <!-- Service-->
            <div class="col-lg-4 col-md-6 block-icon-hover text-center">
              <div class="icon icon-outlined icon-outlined-primary icon-thin mx-auto mb-3"><i class="fas fa-print"></i></div>
              <h4 class="text-uppercase mb-3">type</h4>
              <p class="text-gray-600 text-sm">we show you the newest products on our we sit that can get it easier </p>
            </div>
            
          </header>
          <!-- Customer slider-->
         
        </div>
      </section>
      <!-- GET IT-->
      <div class="bg-primary py-5 text-white">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 p-3">
              <h3 class="text-uppercase mb-0">you can regesting with use and will arrived any thing new</h3>
            </div>
            <div class="col-lg-4 p-3">   <a class="btn btn-outline-light" href="#">registring  now</a></div>
          </div>
        </div>
      </div>
      <footer>
        <!-- MAIN FOOTER-->
        <div class="bg-gray-700 text-white py-5">
          <div class="container py-4">
            <div class="row gy-4">
              <div class="col-lg-3">
                <h4 class="mb-3 text-uppercase">About Us</h4>
                <p class="text-sm text-gray-500">we want to display the product and you can by it form our online shop </p>
                <hr>
                <h4 class="h6 text-uppercase">Designer</h4>
            
              </div>
 
              <div class="col-lg-3">
                <h4 class="mb-3 text-uppercase">Contact</h4>
                <p class="text-uppercase text-sm text-gray-500"><strong>Universal Ecommerce</strong><br>New web sit for shop online <br>web design <br>00000<br>syrian  <br><strong>Damascuse/strong></p>
              </div>
     
            </div>
          </div>
        </div>
        <!-- COPYRIGHTSonli                -->
        <div class="bg-dark py-5">
          <div class="container">
            <div class="row align-items-cenrer gy-3 text-center">
              <div class="col-md-6 text-md-start">
                <p class="mb-0 text-sm text-gray-500">&copy; 2023. All right reseved.</p>
              </div>
              <div class="col-md-6 text text-md-end">
                <p class="mb-0 text-sm text-gray-500">website designed by  me
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/attribution-free-license. Thank you.-->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/waypoints/lib/noframework.waypoints.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.js"></script>
    <script src="js/theme.js"></script>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
