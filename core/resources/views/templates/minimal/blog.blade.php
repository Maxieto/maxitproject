<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>Purpose Website UI Kit - Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets_new/img/brand/favicon.png') }}" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="{{asset('assets_new/libs/@fortawesome/fontawesome-free/css/all.min.css') }}"><!-- Page CSS -->
  <link type="text/css" href="{{asset('assets_new/libs/swiper/dist/css/swiper.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{asset('assets_new/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}" rel="stylesheet">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="{{asset('assets_new/css/purpose.css') }}" id="stylesheet">
</head>

<body>
  <header class="header header-transparent" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <span class="navbar-text mr-3">Purpose - Website UI Kit</span>
          </div>
          <div>
            <ul class="nav">
              <li class="nav-item dropdown ml-lg-2">
                <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                  <img alt="Image placeholder" src="{{asset('assets_new/img/icons/flags/us.svg') }}">
                  <span class="d-none d-lg-inline-block">United States</span>
                  <span class="d-lg-none">EN</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm">
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="{{asset('assets_new/img/icons/flags/es.svg') }}">Spanish</a>
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="{{asset('assets_new/img/icons/flags/ro.svg') }}">Romanian</a>
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="{{asset('assets_new/img/icons/flags/gr.svg') }}">Greek</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="ml-auto">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/utility/support.html">Support</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="fas fa-search"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/shop/checkout-cart.html"><i class="fas fa-shopping-cart"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <h6 class="dropdown-header">User menu</h6>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user"></i>Account
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="float-right badge badge-primary">4</span>
                    <i class="fas fa-envelope"></i>Messages
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cog"></i>Settings
                  </a>
                  <div class="dropdown-divider" role="presentation"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-sign-out-alt"></i>Sign out
                  </a>
                </div>
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
        <a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
          <img alt="Image placeholder" src="{{asset('assets_new/img/brand/white.png') }}" id="navbar-logo" style="height: 50px;">
        </a>
        <!-- Navbar collapse trigger -->
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar nav -->
        <div class="collapse navbar-collapse" id="navbar-main-collapse">
          <ul class="navbar-nav align-items-lg-center">
            <!-- Home - Overview  -->
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('/') }}">Overview</a>
            </li>
            <!-- Pages menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/Code_2.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Landing</h6>
                          <p class="mb-0">A great point to start from.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/agency.html">
                          Agency
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/app.html">
                          App
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/blog') }}">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/classic.html">
                          Classic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/cloud-hosting.html">
                          Cloud hosting
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/digital.html">
                          Digital
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/event-music.html">
                          Event music
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/features.html">
                          Features
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/presentation.html">
                          Presentation
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/saas.html">
                          Saas
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/services.html">
                          Services
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/software.html">
                          Software
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/Code.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Secondary</h6>
                          <p class="mb-0">Examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/about-classic.html">
                          About classic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/about.html">
                          About
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/blog') }}">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/blog-article.html">
                          Blog article
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/blog-masonry.html">
                          Blog masonry
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/careers.html">
                          Careers
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/careers-single.html">
                          Careers single
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/contact.html">
                          Contact
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/contact-simple.html">
                          Contact simple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/get-started.html">
                          Get started
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/portfolio-fullscreen.html">
                          Portfolio fullscreen
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/pricing-charts.html">
                          Pricing charts
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/pricing-comparison.html">
                          Pricing comparison
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/pricing-simple.html">
                          Pricing simple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/services.html">
                          Services
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/team.html">
                          Team
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/Secure_Files.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Authentication</h6>
                          <p class="mb-0">Examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Basic</li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/user/login') }}">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/user/register')}}">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/basic-recover.html">
                          Recover
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Cover</li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/user/login') }}">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/user/register') }}">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/cover-recover.html">
                          Recover
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Simple</li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/user/login') }}">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/user/register') }}">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/simple-recover.html">
                          Recover
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/Task.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Account</h6>
                          <p class="mb-0">Account management made cool.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Account</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-billing.html">
                          Billing
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-notifications.html">
                          Notifications
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-profile.html">
                          Profile
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-profile-public.html">
                          Profile public
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-settings.html">
                          Settings
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Board</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/board-connections.html">
                          Connections
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/') }}">
                          Overview
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/board-projects.html">
                          Projects
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/board-tasks.html">
                          Tasks
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Listing</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/listing-orders.html">
                          Orders
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/listing-projects.html">
                          Projects
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/listing-users.html">
                          Users
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/Cart_Add_2.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Shop</h6>
                          <p class="mb-0">Complete flow for online shops.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Shop</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/shop-landing.html">
                          Landing
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/shop-products.html">
                          Products
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/shop-product.html">
                          Product
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Checkout</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-cart.html">
                          Cart
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-cart-empty.html">
                          Cart empty
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-customer.html">
                          Customer
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-payment.html">
                          Payment
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-shipping.html">
                          Shipping
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/Cog_Wheels.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Utility</h6>
                          <p class="mb-0">Error pages and everything else.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/coming-soon.html">
                          Coming soon
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/error-404.html">
                          Error 404
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/faq.html">
                          Faq
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/support.html">
                          Support
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/topic.html">
                          Topic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/topic-simple.html">
                          Topic simple
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Sections menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sections</a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="../../sections.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/Apps.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Explore all sections</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                  <div class="row">
                    <div class="col-sm-4">
                      <a href="../../sections.html#headers" class="dropdown-item">Headers</a>
                      <a href="../../sections.html#footers" class="dropdown-item">Footers</a>
                      <a href="{{ url('/blog') }}" class="dropdown-item">Blog</a>
                      <a href="../../sections.html#call-to-action" class="dropdown-item">Call to action</a>
                      <a href="../../sections.html#clients" class="dropdown-item">Clients</a>
                      <a href="../../sections.html#collapse" class="dropdown-item">Collapse</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="../../sections.html#covers" class="dropdown-item">Covers</a>
                      <a href="../../sections.html#features" class="dropdown-item">Features</a>
                      <a href="../../sections.html#milestone" class="dropdown-item">Milestone</a>
                      <a href="../../sections.html#pricing" class="dropdown-item">Pricing</a>
                      <a href="../../sections.html#projects" class="dropdown-item">Projects</a>
                      <a href="../../sections.html#subscribe" class="dropdown-item">Subscribe</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="../../sections.html#swiper" class="dropdown-item">Swiper</a>
                      <a href="../../sections.html#tables" class="dropdown-item">Tables</a>
                      <a href="../../sections.html#team" class="dropdown-item">Team</a>
                      <a href="../../sections.html#testimonials" class="dropdown-item">Testimonials</a>
                      <a href="../../sections.html#video" class="dropdown-item">Video</a>
                    </div>
                  </div>
                </div>
                <div class="delimiter-top py-3 px-4">
                  <span class="badge badge-soft-success">Yaass!</span>
                  <p class="mt-2 mb-0">
                    Explore, switch, customize any component, section or page and make your website rich its full potential.
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="../../docs/index.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/DOC_File.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Documentation</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="../../docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{asset('assets_new/img/icons/essential/detailed/Mobile_UI.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Components</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                  <div class="row">
                    <div class="col-sm-6">
                      <a href="../../docs/getting-started/installation.html" class="dropdown-item">Installation</a>
                      <a href="../../docs/getting-started/file-structure.html" class="dropdown-item">File structure</a>
                      <a href="../../docs/getting-started/build-tools.html" class="dropdown-item">Build tools</a>
                      <a href="../../docs/getting-started/customization.html" class="dropdown-item">Customization</a>
                    </div>
                    <div class="col-sm-6">
                      <a href="../../docs/getting-started/plugins.html" class="dropdown-item">Using plugins</a>
                      <a href="../../docs/components/index.html" class="dropdown-item">Components</a>
                      <a href="../../docs/plugins/animate.html" class="dropdown-item">Plugins</a>
                      <a href="../../docs/support.html" class="dropdown-item">Support</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item d-lg-none d-xl-block">
              <a class="nav-link" href="../../docs/changelog.html" target="_blank">What's new</a>
            </li>
            <li class="nav-item mr-0">
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Go to Bootstrap Themes">
                <span class="btn-inner--icon"><i class="fas fa-shopping-cart"></i></span>
                <span class="btn-inner--text">Purchase now</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
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
    <!-- Header (v4) -->

    <section class="spotlight bg-cover bg-size--cover" data-spotlight="fullscreen" data-offset-top"#header-main" 
    style="background-image: url({{asset('assets_new/img/backgrounds/img-11.jpg') }});">
      <div class="spotlight-holder pt-5 pb-7 py-lg-0">
        <span class="mask bg-gradient-primary opacity-6"></span>
        <div class="container d-flex align-items-center">
          <div class="col">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-9 col-lg-7 text-center">
                <h1 class="text-white lh-150 mb-4">Keep your face always toward the sunshine - and shadows will fall behind you.</h1>
                <ul class="list-inline">
                  <li class="list-inline-item text-white">August 21, 2018</li>
                  <li class="list-inline-item text-white">Written by Destiny Erykah</li>
                </ul>
                <span class="clearfix"></span>
                <a href="#" class="btn btn-white rounded-pill btn-icon mt-5">
                  <span class="btn-inner--text">Continue reading</span>
                  <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog (v2) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="mt--200">
          <div class="card-group">
            <div class="card border-0 text-white hover-scale-110 hover-shadow-lg overflow-hidden">
              <figure class="figure">
                <img alt="Image placeholder" class="img-fluid" src="{{asset('assets_new/img/theme/light/img-1-800x600.jpg') }}">
              </figure>
              <span class="mask hover-mask bg-dark opacity-7"></span>
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="text-center">
                  <div class="animate-item--visible opacity-10">
                    <a href="#" class="h3 text-white mb-1 stretched-link">Technology</a>
                    <p class="card-text text-white">25 articles</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card border-0 text-white hover-scale-110 hover-shadow-lg overflow-hidden">
              <figure class="figure">
                <img alt="Image placeholder" class="img-fluid" src="{{asset('assets_new/img/theme/light/img-2-800x600.jpg') }}">
              </figure>
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="text-center">
                  <div class="animate-item--visible opacity-10">
                    <a href="#" class="h3 text-white mb-1 stretched-link">Culture</a>
                    <p class="card-text text-white">30 articles</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card border-0 text-white hover-scale-110 hover-shadow-lg overflow-hidden">
              <figure class="figure">
                <img alt="Image placeholder" class="img-fluid" src="{{asset('assets_new/img/theme/light/img-3-800x600.jpg') }}">
              </figure>
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="text-center">
                  <div class="animate-item--visible opacity-10">
                    <a href="#" class="h3 text-white mb-1 mb-1 stretched-link">Creativity</a>
                    <p class="card-text text-white">45 articles</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog (v3) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="row row-grid">
          <div class="col-lg-3">
            <h4 class="mt-3">Experience quality</h4>
            <p class="lead mt-4">Purpose is a professional Bootstrap theme which includes over 150 ready to use layouts. From business and corporate to real estate, education, health and much more. It comes with three complete shop layouts.</p>
            <a href="#" class="btn btn-primary btn-icon rounded-pill hover-scale-110 mt-4">
              <span class="btn-inner--icon">
                <i class="fas fa-angle-right"></i>
              </span>
              <span class="btn-inner--text">Read more</span>
            </a>
          </div>
          <div class="col-lg-6">
            <div class="px-4">
              <img alt="Image placeholder" src="{{asset('assets_new/img/theme/light/img-1-600x800.jpg') }}" class="img-fluid rounded shadow-lg hover-scale-110">
            </div>
          </div>
          <div class="col-lg-3 d-lg-flex flex-lg-column">
            <div class="mt-lg-auto">
              <p class="lead">When you purchase Purpose you also get free updates for life and dedicated support from our team. You can now relax because we will take care of everything else.</p>
            </div>
            <div class="mt-lg-auto">
              <p class="lead mb-0">You can now relax because we will take care of everything else.</p>
              <div class="row align-items-center mt-5">
                <div class="col-xl-4">
                  <small class="d-block text-uppercase text-muted ls-1 font-weight-600">Share:</small>
                </div>
                <div class="col-xl-8">
                  <ul class="nav ml-lg-auto mb-0">
                    <li class="nav-item">
                      <a class="nav-link pl-0" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog (v4) -->
    <section class="slice slice-lg bg-section-secondary">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class=" mt-4">Latest from the blog</h3>
          <div class="fluid-paragraph mt-3">
            <p class="lead lh-180">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
          </div>
        </div>
        <div class="row">
           @foreach($blogs as $k=> $data)
          <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              {{-- <a href="#">
                <img alt="Image placeholder" src="{{asset('assets_new/img/theme/light/img-1-800x600.jpg') }}" class="card-img-top">
              </a> --}}
               <a href="{{route('home.blog.details',[str_slug($data->value->title),$data->id])}}">
                 <img  class="card-img-top"  alt="Image placeholder" src="{{get_image(config('constants.frontend.blog.post.path').'/'.$data->value->image)}}" alt="{{$data->value->title}}">
              </a>


              <div class="card-body py-5 text-center">
               <a href="{{route('home.blog.details',[str_slug($data->value->title),$data->id])}}"> {{__($data->value->title)}}
                </a>
                <h6 class="text-muted mt-4 mb-0">{{date('d-M-Y', strtotime($data->created_at))}}</h6>
              </div>
              <div class="card-footer delimiter-top">
                <div class="row">
                  <div class="col text-center">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item pr-4">
                        <a href="#" class="text-muted"><i class="fas fa-share mr-1 text-muted"></i> 131</a>
                      </li>
                      <li class="list-inline-item pr-4">
                        <a href="#" class="text-muted"><i class="fas fa-eye mr-1 text-muted"></i> 255</a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="text-muted"><i class="fas fa-comments mr-1 text-muted"></i> 14</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          <div class="blog-pagination">

              {{$blogs->links()}}

           </div>
        {{--   <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <a href="#">
                <img alt="Image placeholder" src="{{asset('assets_new/img/theme/light/img-2-800x600.jpg') }}" class="card-img-top">
              </a>
              <div class="card-body py-5 text-center">
                <a href="#" class="d-block h5 lh-150">How to find the right design for your specific product</a>
                <h6 class="text-muted mt-4 mb-0">23 Aug 2019</h6>
              </div>
              <div class="card-footer delimiter-top">
                <div class="row">
                  <div class="col text-center">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item pr-4">
                        <a href="#" class="text-muted"><i class="fas fa-share mr-1 text-muted"></i> 131</a>
                      </li>
                      <li class="list-inline-item pr-4">
                        <a href="#" class="text-muted"><i class="fas fa-eye mr-1 text-muted"></i> 255</a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="text-muted"><i class="fas fa-comments mr-1 text-muted"></i> 14</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> --}}
         {{--  </div>
          <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <a href="#">
                <img alt="Image placeholder" src="{{asset('assets_new/img/theme/light/img-3-800x600.jpg') }}" class="card-img-top">
              </a>
              <div class="card-body py-5 text-center">
                <a href="#" class="d-block h5 lh-150">How to win buyers and influence sales with marketing</a>
                <h6 class="text-muted mt-4 mb-0">27 Aug 2019</h6>
              </div>
              <div class="card-footer delimiter-top">
                <div class="row">
                  <div class="col text-center">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item pr-4">
                        <a href="#" class="text-muted"><i class="fas fa-share mr-1 text-muted"></i> 131</a>
                      </li>
                      <li class="list-inline-item pr-4">
                        <a href="#" class="text-muted"><i class="fas fa-eye mr-1 text-muted"></i> 255</a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="text-muted"><i class="fas fa-comments mr-1 text-muted"></i> 14</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
    <!-- Subscribe (v1) -->
    <section class="slice slice-lg bg-gradient-dark overflow-hidden">
      <!-- SVG background -->
      <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
        <figure class="w-100">
          <img alt="Image placeholder" src="{{asset('assets_new/img/svg/backgrounds/bg-2.svg') }}" class="svg-inject">
        </figure>
      </div>
      <div class="container position-relative zindex-100">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6 col-md-8">
            <div class="alert alert-modern alert-dark">
              <span class="badge badge-danger badge-pill">
                Hot
              </span>
              <span class="alert-content">Dark mode, awesome shortcode library and more.</span>
            </div>
            <h2 class="my-4">
              <span class="display-4 text-white">See it. Love it</span>
            </h2>
            <p class="lead text-muted">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
            <form class="mt-5">
              <div class="form-group mb-0">
                <div class="input-group input-group-lg input-group-merge rounded-pill bg-white">
                  <input type="email" class="form-control form-control-flush" name="email" placeholder="Enter your email address" aria-label="Enter your email address">
                  <div class="input-group-append">
                    <button class="btn btn-white text-primary" type="button">
                      <span class="fas fa-paper-plane"></span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog (v4) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-lg-5 order-lg-2 ml-lg-auto">
            <small class="text-muted text-uppercase ls-1">25 Oct, 2019</small>
            <h3 class="mt-2">Experience quality</h3>
            <p class="lead mt-4">Purpose is a professional Bootstrap theme which includes over 150 ready to use layouts. From business and corporate to real estate, education, health and much more. It comes with three complete shop layouts.</p>
            <a href="#" class="btn btn-dark btn-icon rounded-pill hover-scale-110 mt-4">
              <span class="btn-inner--text">Read more</span>
              <span class="btn-inner--icon">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
          <div class="col-lg-6 order-lg-1">
            <img alt="Image placeholder" src="{{asset('assets_new/img/theme/light/img-1-800x600.jpg') }}" class="img-fluid rounded shadow-lg hover-translate-y-n3">
          </div>
        </div>
      </div>
    </section>
    <!-- Clients (v1) -->
    <section class="slice clients delimiter-top delimiter-bottom">
      <div class="container">
        <div class="client-group row justify-content-center">
          <div class="client col-lg-2 col-md-3 col-4 py-3">
            <img alt="Image placeholder" src="{{asset('assets_new/img/clients/svg/amazon-gray.svg') }}">
          </div>
          <div class="client col-lg-2 col-md-3 col-4 py-3">
            <img alt="Image placeholder" src="{{asset('assets_new/img/clients/svg/spotify-gray.svg') }}">
          </div>
          <div class="client col-lg-2 col-md-3 col-4 py-3">
            <img alt="Image placeholder" src="{{asset('assets_new/img/clients/svg/airbnb-gray.svg') }}">
          </div>
          <div class="client col-lg-2 col-md-3 col-4 py-3">
            <img alt="Image placeholder" src="{{asset('assets_new/img/clients/svg/paypal-gray.svg') }}">
          </div>
          <div class="client col-lg-2 col-md-3 col-4 py-3">
            <img alt="Image placeholder" src="{{asset('assets_new/img/clients/svg/slack-gray.svg')}}">
          </div>
          <div class="client col-lg-2 col-md-3 col-4 py-3">
            <img alt="Image placeholder" src="{{asset('assets_new/img/clients/svg/airbnb-gray.svg') }}">
          </div>
        </div>
      </div>
    </section>
  </div>
    <footer id="footer-main">
      <div class="footer footer-dark bg-gradient-primary">
       <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="{{ url('/') }}">
              <img src="assets_new/img/brand/white.png" alt="Footer logo" style="height: 70px;">
            </a>
            <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">Account</h6>
            <ul class="list-unstyled">
              <li><a href="{{ url('/user/login') }}">Login</a></li>
              <li><a href="{{ url('user/register') }}">Registation</a></li>
              <li><a href="{{ url('/plan') }}">Plan</a></li>{{-- 
              <li><a href="pages/account-notifications.html">Notifications</a></li> --}}
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">About</h6>
            <ul class="list-unstyled text-small">
              <li><a href="{{ url('/plan') }}">Plan </a></li>
              <li><a href="{{ url('/rules') }}">Rules</a></li>
              <li><a href="{{ url('/contact') }}">Contact
                 </a>
            </li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Company</h6>
            <ul class="list-unstyled">
              <li><a href="{{ url('/blog') }}">Blog</a></li>
              <li><a href="{{  url('/') }}">Home</a></li>
                   @foreach($company_policy as $policy)
                            <li>
                                <a href="{{route('home.policy',[$policy, str_slug($policy->value->title)])}}">
                                    {{__($policy->value->title)}}
                                </a>
                            </li>
                        @endforeach
              {{-- <li><a href="{{ url('/privacy') }}">Privacy</a></li> --}}
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
                <a class="nav-link" href="#" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
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
  <script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
  <!-- Page JS -->
  <script src="{{asset('assets_new/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
  <script src="{{asset('assets_new/libs/swiper/dist/js/swiper.min.js') }}"></script>
  <!-- Purpose JS -->
  <script src="{{asset('assets_new/js/purpose.js')}}"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="{{asset('assets_new/js/demo.js')}}"></script>
</body>

</html>