<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>Purpose Website UI Kit - Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo e(asset('assets_new/img/brand/favicon.png')); ?>" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?php echo e(asset('assets_new/libs/@fortawesome/fontawesome-free/css/all.min.css')); ?>"><!-- Purpose CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets_new/css/purpose.css')); ?>" id="stylesheet">
</head>

<body>
  <header class="header header-transparent" id="header-main">

  <?php echo $__env->make('partials.notify-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light bg-white" id="navbar-main">
      <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="<?php echo e(url('/')); ?>">
          <img alt="Image placeholder" src="<?php echo e(asset('assets_new/assets/img/brand/dark.png" id="navbar-logo')); ?>" style="height: 50px;">
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
              <a class="nav-link" href="<?php echo e(url('/')); ?>">Overview</a>
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new//img/icons/essential/detailed/Code_2.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="<?php echo e(url('/blog')); ?>">
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new/s/img/icons/essential/detailed/Code.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="<?php echo e(url('/contact')); ?>">
                          About
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="<?php echo e(url('/blog')); ?>">
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
                        <a class="dropdown-item" href="<?php echo e(url('/contact')); ?>">
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new//img/icons/essential/detailed/Secure_Files.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="<?php echo e(url('/user/register')); ?>">
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
                        <a class="dropdown-item" href="<?php echo e(url('/user/register')); ?>">
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
                        <a class="dropdown-item" href="<?php echo e(url('/user/register')); ?>">
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new//img/icons/essential/detailed/Task.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/icons/essential/detailed/Cart_Add_2.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new//img/icons/essential/detailed/Cog_Wheels.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/icons/essential/detailed/Apps.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
                      <a href="<?php echo e(url('blog')); ?>" class="dropdown-item">Blog</a>
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new//img/icons/essential/detailed/DOC_File.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
                          <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/icons/essential/detailed/Mobile_UI.svg')); ?>" class="svg-inject img-fluid" style="height: 50px;">
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
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-dark btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Go to Bootstrap Themes">
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
    <section class="slice slice-lg min-vh-100 d-flex align-items-center bg-section-secondary">
      <!-- SVG background -->
      <div class="container py-5 px-md-0 d-flex align-items-center">
            <div class="container">
              <div class="mb-5 text-center">
                <h3 class=" mt-4"> <?php echo app('translator')->get($page_title); ?> </h3>
                <div class="fluid-paragraph mt-3">
                  <p class="lead lh-180"><?php echo app('translator')->get(' Enter Your Email Address'); ?> .</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                <form method="POST" action="<?php echo e(route('user.password.email')); ?>" >
                <?php echo csrf_field(); ?>
                    <div class="form-group mb-0">
                      <div class="input-group input-group-lg input-group-merge rounded-pill bg-dark">
                      <input type="email" name="email"  class="form-control form-control-flush"  class="form-control"  id="InputName" placeholder="<?php echo app('translator')->get('E-mail Address'); ?>"
                     required>
                        <div class="input-group-append">
                          <button class="btn btn-dark" type="submit">
                            <span class="fas fa-paper-plane"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
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
            <a href="<?php echo e(url('/')); ?>">
              <img src="assets_new/img/brand/white.png" alt="Footer logo" style="height: 70px;">
            </a>
            <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">Account</h6>
            <ul class="list-unstyled">
              <li><a href="<?php echo e(url('/user/login')); ?>">Login</a></li>
              <li><a href="<?php echo e(url('user/register')); ?>">Registation</a></li>
              <li><a href="<?php echo e(url('/plan')); ?>">Plan</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">About</h6>
            <ul class="list-unstyled text-small">
              <li><a href="<?php echo e(url('/plan')); ?>">Plan </a></li>
              <li><a href="<?php echo e(url('/rules')); ?>">Rules</a></li>
              <li><a href="<?php echo e(url('/contact')); ?>">Contact
                 </a>
            </li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Company</h6>
            <ul class="list-unstyled">
              <li><a href="<?php echo e(url('/blog')); ?>">Blog</a></li>
              <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                   <?php $__currentLoopData = $company_policy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('home.policy',[$policy, str_slug($policy->value->title)])); ?>">
                                    <?php echo e(__($policy->value->title)); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
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
  <script src="<?php echo e(asset('assets_new/assets/js/purpose.core.js')); ?>"></script>
  <!-- Purpose JS -->
  <script src="<?php echo e(asset('assets_new/assets/js/purpose.js')); ?>"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?php echo e(asset('assets_new/assets/js/demo.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/auth/passwords/email.blade.php ENDPATH**/ ?>