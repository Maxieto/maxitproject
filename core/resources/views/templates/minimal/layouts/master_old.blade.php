<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>Purpose Website UI Kit - Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="{{asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css') }}"><!-- Page CSS -->
  <link rel="stylesheet" href="{{asset('assets/libs/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/libs/swiper/dist/css/swiper.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">
  <!-- Additional fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/purpose.css') }}" id="stylesheet">
</head>

<body>
 <!--  <header class="header header-transparent" id="header-main">
    <!-- Topbar -->
        <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
          <div class="container px-0">
            <div class="navbar-nav align-items-center">
              <div class="d-none d-lg-inline-block">
                <span class="navbar-text mr-3">Purpose - Website UI Kit</span>
              </div>
              <div>
                <ul class="nav">
                </ul>
              </div>
              <div class="ml-auto">
                <ul class="nav">
                
                  <li class="nav-item">
                    <li class="nav-item dropdown ml-lg-2">
                      <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                        <img alt="Image placeholder" src="{{ asset('assets/img/icons/flags/us.svg') }}">
                        <span class="d-none d-lg-inline-block">United States</span>
                        <span class="d-lg-none">EN</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-sm">
                        <a href="#" class="dropdown-item"><img alt="Image placeholder" src="{{asset('assets/img/icons/flags/es.svg') }}">Spanish</a>
                        <a href="#" class="dropdown-item"><img alt="Image placeholder" src="{{asset('assets/img/icons/flags/ro.svg') }}">Romanian</a>
                        <a href="#" class="dropdown-item"><img alt="Image placeholder" src="{{asset('assets/img/icons/flags/gr.svg') }}">Greek</a>
                      </div>
                    </li>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="{{ url('user/login') }}"  aria-expanded="false">
                      <i class="fas fa-user-circle" style="font-weight:bold ;fon">LOGIN</i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
      <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="index.html">
          <img alt="Image placeholder" src="{{asset('assets/img/brand/white.png') }}" id="navbar-logo" style="height: 50px;">
        </a>
        <!-- Navbar collapse trigger -->
        <button class="navbar-toggler pr-0" type="button"
         data-toggle="collapse" data-target="#navbar-main-collapse"
          aria-controls="navbar-main-collapse" aria-expanded="false" 
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar nav -->
        <div class="collapse navbar-collapse" id="navbar-main-collapse">
          <ul class="navbar-nav align-items-lg-center">
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto" >

            <a class="nav-link" href="{{ Url('/') }}" style="font-weight:bold; color:white ;font-size:18px">HOME</a>
            <a class="nav-link" href="{{ Url('/plan') }}" style="font-weight:bold; color:white ;font-size:18px">PLANE</a>
            <a class="nav-link" href="{{ Url('/blog') }}" style="font-weight:bold; color:white ;font-size:18px">BLOG</a>
            <a class="nav-link" href="{{ url('/contact') }}" style="font-weight:bold; color:white ;font-size:18px" >CONTACT</a>
            
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover"  >
              <a class="nav-link" href="{{ url('user/register') }}"      style="font-weight: bold;
              color: white;
              font-size: 18px;
              display: inline-block;
              background-color: #f01313;
              border-radius: 16px;"   target="_blank">JOIN WITH US</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
 <!--  </header> --> -->
  <!-- Omnisearch -->
  <div id="omnisearch" class="omnisearch">
    <div class="container">
      <!-- Search form -->
      <form class="omnisearch-form">
        <div class="form-group">
          <div class="input-group input-group-merge input-group-flush">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Type and hit enter ...">
          </div>
        </div>
      </form>
      <div class="omnisearch-suggestions">
        <h6 class="heading">Search Suggestions</h6>
        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a class="list-link" href="#">
                  <i class="fas fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="fas fa-search"></i>
                  <span>iphone 8</span> in Smartphones
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="fas fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="fas fa-search"></i>
                  <span>beats pro solo 3</span> in Headphones
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="fas fa-search"></i>
                  <span>smasung galaxy 10</span> in Phones
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content">
    <!-- <nav class="nav flex-column nav-dots py-3 bg-translucent-dark rounded shadow hover-shadow-lg d-none d-lg-flex" id="nav-sections">
      <a href="#headers" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Headers"></a>
      <a href="#2ndsection" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="call-to-action"></a>
      <a href="#features" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Features"></a>
      <a href="#pricing" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Pricing"></a>
       <a href="#2_feature" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Power full Tool"></a> 
       <a href="#subscribe" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Subscribe"></a>
       <a href="#team" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Team"></a>
       <a href="#testimonials" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Testimonials"></a> 
       <a href="#collapse" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Collapse"></a>
       <a href="#blog" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Blog"></a>
       <a href="#clients" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Clients"></a>
      <a href="#footer-main" class="nav-link" data-toggle="tooltip" data-placement="left" data-original-title="Footers"></a>
    </nav> -->
     <section class="bg-section-secondary position-relative" data-spy="scroll" data-target="#nav-sections" data-offset="0" style="height: 100%; overflow-y: scroll;">
      <!-- Headers -->
      <span id="headers"></span>
      <div>
        <!-- Header 1 -->
        <div id="headers-header-1" title="headers/header-1.html">
          <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
            <div class="section-inner bg-gradient-primary"></div>
            <!-- SVG illustration -->
            <div class="pt-7 position-absolute middle right-0 col-lg-7 col-xl-6 d-none d-lg-block">
              <figure class="w-100" style="max-width: 1000px;">
                <img alt="Image placeholder" src="{{asset('assets/img/svg/illustrations/work-chat.svg') }}" class="svg-inject img-fluid" style="height: 1000px;">
              </figure>
            </div>
            <!-- SVG background -->
            <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
              <figure class="w-100 d-none d-lg-block">
                <img alt="Image placeholder" src="{{asset('assets/img/svg/backgrounds/bg-4.svg') }}" class="svg-inject" style="height: 1000px;">
              </figure>
            </div>
            <!-- Hero container -->
            <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
              <div class="col">
                <div class="row">
                  <div class="col-lg-5 col-xl-6 text-center text-lg-left">
             
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    
  </div>
@yield('content')
  <footer id="footer-main">
    <div class="footer footer-dark bg-gradient-primary">
      <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="index.html">
              <img src="{{asset('assets/img/brand/white.png') }}" alt="Footer logo" style="height: 70px;">
            </a>
            <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">Account</h6>
            <ul class="list-unstyled">
              <li><a href="pages/account-profile.html">Profile</a></li>
              <li><a href="pages/account-settings.html">Settings</a></li>
              <li><a href="pages/account-billing.html">Billing</a></li>
              <li><a href="pages/account-notifications.html">Notifications</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">About</h6>
            <ul class="list-unstyled text-small">
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Company</h6>
            <ul class="list-unstyled">
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Support</a></li>
            </ul>
          </div>
        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
          <div class="col-md-6">
            <div class="copyright text-sm font-weight-bold text-center text-md-left">
              &copy; 2018-2019 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="{{asset('assets/js/purpose.core.js') }}"></script>
  <!-- Page JS -->
  <script src="{{asset('assets/libs/swiper/dist/js/swiper.min.js') }}"></script>
  <script src="{{asset('assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
  <script src="{{asset('assets/libs/typed.js/lib/typed.min.js') }}"></script>
  <script src="{{asset('assets/libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset('assets/libs/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
  <!-- Google maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBuyKngB9VC3zgY_uEB-DKL9BKYMekbeY"></script>
  <!-- Purpose JS -->
  <script src="{{asset('assets/js/purpose.js') }}"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="{{asset('assets/js/demo.js') }}"></script>
</body>

</html>