<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__($page_title)); ?></title>
    <link rel="icon" href="<?php echo e(asset('assets/images/logoIcon/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/images/logoIcon/favicon.png')); ?>"/>

    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/bootstrap.min.css')); ?> ">
        <link href="<?php echo e(asset('assets/admin/css/bootstrap-fileinput.css')); ?> " rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/all.min.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/animate.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/odometer.css')); ?>>
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/owl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/iziToast.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/odometer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_new/css/purpose.css')); ?>" id="stylesheet">
       <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/user.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/build/css/intlTelInput.css')); ?>">
    <style>
        .intl-tel-input {
            position: relative;
            display: inline-block;
            width: 100%;!important;
        }
    </style>
</head>
<body>

 <?php echo $__env->make('partials.notify-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                  <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/flags/us.svg">
                  <span class="d-none d-lg-inline-block">United States</span>
                  <span class="d-lg-none">EN</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm">
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/flags/es.svg">Spanish</a>
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/flags/ro.svg">Romanian</a>
                  <a href="#" class="dropdown-item"><img alt="Image placeholder"
                    src="http://localhost/maxit/assets_new/img/icons/flags/gr.svg">Greek</a>
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
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark" id="navbar-main">
      <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="../../index.html">
          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/brand/white.png&quot; id=&quot;navbar-logo" style="height: 50px;">
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
              <a class="nav-link" href="../../index.html">Overview</a>
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/Code_2.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="../../pages/landing/blog.html">
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/Code.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="../../pages/secondary/blog.html">
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/Secure_Files.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="../../pages/authentication/basic-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/basic-register.html">
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
                        <a class="dropdown-item" href="../../pages/authentication/cover-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/cover-register.html">
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
                        <a class="dropdown-item" href="../../pages/authentication/simple-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/simple-register.html">
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/Task.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="#">
                          Profile
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-notifications.html">
                          2FA Security
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="">
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
                        <a class="dropdown-item" href="../../pages/account/board-overview.html">
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/Cart_Add_2.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/Cog_Wheels.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/Apps.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                      <a href="../../sections.html#blog" class="dropdown-item">Blog</a>
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                          <img alt="Image placeholder" src="http://localhost/maxit/assets_new/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
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
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" data-offset-top="#header-main">
           <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row">
          <div class=" col-lg-12">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-md-5 mb-4 mb-md-0">
                <span class="h2 mb-0 text-white d-block">Welcome ,<?php echo e(Auth::user()->username); ?> </span>
                <span class="text-white">Your dashboard never gets Old </span>
              </div>
              <div class="col-auto flex-fill d-none d-xl-block">
                <ul class="list-inline row justify-content-lg-end mb-0">
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-success"></i>Sales
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                      20.5%
                      <small class="fas fa-angle-up text-success"></small>
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-warning"></i>Tasks
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                      5.7%
                      <small class="fas fa-angle-up text-warning"></small>
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-danger"></i>Sales
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                      -3.24%
                      <small class="fas fa-angle-down text-danger"></small>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <a href="<?php echo e(route('user.home')); ?> " class="btn btn-icon btn-group-nav shadow btn-neutral">
                <span class="btn-inner--icon"><i class="fas fa-user"></i></span>
                <span class="btn-inner--text d-none d-md-inline-block">Dashboard</span>
              </a>
              <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
                <div class="btn-group" role="group">
                  <button id="btn-group-settings" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="fas fa-sliders-h"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Account</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                 <a class="dropdown-item" href="<?php echo e(route('user.edit-profile')); ?>">Profile</a>
                    <a class="dropdown-item" href="<?php echo e(route('user.twoFA')); ?>"><?php echo app('translator')->get('2FA Security'); ?></a>
                    <a class="dropdown-item" href="<?php echo e(route('user.change-password')); ?>"><?php echo app('translator')->get('Change Password'); ?></a>
                    <a class="dropdown-item" href="<?php echo e(route('user.logout')); ?> "><?php echo app('translator')->get('Logout'); ?></a>
                  </div>
                </div>

                <div class="btn-group" role="group">
                  <button id="btn-group-settings" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-balance-scale"></i>
                    <span class="btn-inner--text d-none d-sm-inline-block"> INVESTMENT SYSTEM </span>
                  </button>

                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <a class="dropdown-item" href="<?php echo e(route('user.deposit')); ?> "><?php echo app('translator')->get('Deposit Now'); ?> </a>
                     <a class="dropdown-item" href="<?php echo e(route('home.plan')); ?>" >Invest Plan</a>
                    <a class="dropdown-item" href="<?php echo e(route('user.withdraw.money')); ?> "> <?php echo app('translator')->get('Withdraw Now'); ?> </a>
                    <a class="dropdown-item" href="<?php echo e(route('user.referral')); ?> "><?php echo app('translator')->get('Referral Statistic'); ?></a>
                  </div>
                </div>

                <div class="btn-group" role="group">
                  <button id="btn-group-boards" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="fas fa-chart-line"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">LOGS</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                    <a class="dropdown-item" href="<?php echo e(route('user.deposit.history')); ?> "><?php echo app('translator')->get('Deposit History'); ?> </a>
                    <a class="dropdown-item" href="<?php echo e(route('user.withdrawLog')); ?> "><?php echo app('translator')->get('Withdraw History'); ?>  </a>
                    <a class="dropdown-item" href="<?php echo e(route('user.transactions')); ?> "><?php echo app('translator')->get('Transaction History'); ?> </a>
                    <a class="dropdown-item" href="<?php echo e(route('user.interest.log')); ?> "><?php echo app('translator')->get('Return Interest Log'); ?> </a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-listing" type="button" class="btn btn-neutral btn-icon rounded-right" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="fas fa-list-ul"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Support</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <a class="dropdown-item" href="<?php echo e(route('user.ticket')); ?> "><?php echo app('translator')->get('Support Ticket'); ?> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ========User-Panel-Section Starte Here ========-->
    <section class="user-panel-section padding-bottom padding-top">
        <div class="container user-panel-container">
                  <div class="actions-toolbar py-2 mb-4">
                                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                                    <span style="padding: 15px;"><?php echo e(__($page_title)); ?> </span>
                                </h3>
                    </div>

            <div class=" user-panel-tab">
                <div class="row">
                    <div class="col-lg-3">

                       </div>
                    <div class="col-lg-9" >


                        <div class="tab-area fullscreen-width">
                            <div class="tab-item active">
                            <form action="" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="InputFirstname" class="col-form-label"><?php echo app('translator')->get('First Name:'); ?></label>
                                        <input type="text" class="form-control form-control-lg" id="InputFirstname" name="firstname" placeholder="<?php echo app('translator')->get('First Name'); ?>" value="<?php echo e($user->firstname); ?>" >
                                     </div>

                                    <div class="form-group col-sm-6">
                                        <label for="lastname" class="col-form-label"><?php echo app('translator')->get('Last Name:'); ?></label>
                                            <input type="text" class="form-control form-control-lg" id="lastname" name="lastname"placeholder="<?php echo app('translator')->get('Last Name'); ?>" value="<?php echo e($user->lastname); ?>">
                                     </div>

                                    </div>

                                       <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label for="email" class="col-form-label"><?php echo app('translator')->get('E-mail Address:'); ?></label>
                                                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="<?php echo app('translator')->get('E-mail Address'); ?>" value="<?php echo e($user->email); ?>" required="">
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <input type="hidden" id="track" name="country_code">
                                                    <label for="phone" class="col-form-label"><?php echo app('translator')->get('Mobile Number'); ?></label>
                                                    <input type="tel" class="form-control form-control-lg pranto-control" id="phone" name="mobile" value="<?php echo e($user->mobile); ?>" placeholder="<?php echo app('translator')->get('Your Contact Number'); ?>" required>
                                                </div>
                                                <input type="hidden" name="country" id="country" class="form-control d-none" value="<?php echo e($user->address->country); ?>">
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label for="address" class="col-form-label"><?php echo app('translator')->get('Address:'); ?></label>
                                                    <input type="text" class="form-control form-control-lg" id="address" name="address"
                                                           placeholder="<?php echo app('translator')->get('Address'); ?>" value="<?php echo e($user->address->address); ?>" required="">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="state" class="col-form-label"><?php echo app('translator')->get('State:'); ?></label>
                                                    <input type="text" class="form-control form-control-lg" id="state" name="state" placeholder="<?php echo app('translator')->get('state'); ?>" value="<?php echo e($user->address->state); ?>" required="">
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label for="zip" class="col-form-label"><?php echo app('translator')->get('Zip Code:'); ?></label>
                                                    <input type="text" class="form-control form-control-lg" id="zip" name="zip" placeholder="<?php echo app('translator')->get('Zip Code'); ?>" value="<?php echo e($user->address->zip); ?>" required="">
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label for="city" class="col-form-label"><?php echo app('translator')->get('City:'); ?></label>
                                                    <input type="text" class="form-control form-control-lg" id="city" name="city"
                                                           placeholder="<?php echo app('translator')->get('City'); ?>" value="<?php echo e($user->address->city); ?>" required="">
                                                </div>

                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new " data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                                                                 data-trigger="fileinput">
                                                                <img  src="<?php echo e(get_image(config('constants.user.profile.path') .'/'. $user->image)); ?>" alt="...">

                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                                 style="max-width: 200px; max-height: 150px"></div>

                                                            <div class="img-input-div">
                                        <span class="btn btn-info btn-file">
                                            <span class="fileinput-new "> <?php echo app('translator')->get('Select image'); ?></span>
                                            <span class="fileinput-exists"> <?php echo app('translator')->get('Change'); ?></span>
                                            <input type="file" name="image" accept="image/*">
                                        </span>
                                                                <a href="#" class="btn btn-danger fileinput-exists"
                                                                   data-dismiss="fileinput"> <?php echo app('translator')->get('Remove'); ?></a>
                                                            </div>

                                                            <code><?php echo app('translator')->get('Image size 800*800'); ?></code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group row pt-5">
                                                <div class="col-sm-12 text-center">
                                                    <button type="submit" class="custom-button bg-3"><?php echo app('translator')->get('Update Profile'); ?></button>
                                                </div>
                                            </div>
                                        </form>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========User-Panel-Section Ends Here ========-->

    <!-- ========Footer-Section Starts Here ========-->

<!-- ========Footer-Section Ends Here ========-->

</div>



 <footer class="footer p-0 footer-light bg-section-secondary" id="footer-main">
     <div class="container">
      <div class="py-4">
        <div class="row align-items-md-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="d-flex align-items-center">
              <p class="text-sm mb-0">&copy; Purpose. 2019 <a href="https://webpixels.io" target="_blank">Webpixels</a>. All rights reserved.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
             <ul class="nav justify-content-center">
                <?php $__currentLoopData = $company_policy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                        <a  class="nav-link"  href="<?php echo e(route('home.policy',[$policy, str_slug($policy->value->title)])); ?>">
                        <?php echo e(__($policy->value->title)); ?>

                    </a>
                  </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <li><a  class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact
                 </a>
            </li>
         </ul>
          </div>
          <div class="col-sm-6 col-md-4">
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
 <script src="<?php echo e(asset('assets_new/js/purpose.core.js')); ?>"></script>
  <!-- Purpose JS -->
  <script src="<?php echo e(asset('assets_new/js/purpose.js')); ?>"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?php echo e(asset('assets_new/js/demo.js')); ?>"></script>

<script src="<?php echo e(asset('assets/templates/minimul/js/modernizr-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/owl.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/bootstrap-fileinput.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/odometer.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/viewport.jquery.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/nice-select.js')); ?> "></script>
<script src="<?php echo e(asset('assets/admin/js/iziToast.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/paroller.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/build/js/intlTelInput.js')); ?> "></script>

    <script>
        $('select[name=country]').val("");


        $("#phone").on("countrychange", function(e, countryData) {
            // do something with countryData

            var data =  $(this).val('+' + countryData.dialCode)
            $('#track').val(data);
            var country = countryData.name;
            var country = country.split('(')[0];
            $('#country').val(country);
        });
        $("#phone").intlTelInput({
            geoIpLookup: function(callback) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },

            // hiddenInput: "full_number",
            initialCountry: "auto",
            utilsScript: "<?php echo e(asset('assets/admin/build/js/utils.js')); ?>"
        });
    </script>



</body>
</html>

<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/edit-profile.blade.php ENDPATH**/ ?>