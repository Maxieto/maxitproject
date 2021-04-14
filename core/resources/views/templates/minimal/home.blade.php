<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>FLORIE- HOME|Invest And Pensions</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets_new/img/brand/favicon.png')}}" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="{{asset('assets_new/libs/@fortawesome/fontawesome-free/css/all.min.css') }}"><!-- Page CSS -->
  <link rel="stylesheet" href="{{asset('assets_new/libs/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets_new/libs/swiper/dist/css/swiper.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets_new/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">
  <!-- Additional fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="{{asset('assets_new/css/purpose.css') }}" id="stylesheet">
</head>


<body>
   <header class="header header-transparent" id="header-main">
    <!-- Topbar -->

    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
      <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
          <img alt="Image placeholder" src="{{ asset('assets_new/img/brand/white.png') }}" id="navbar-logo" style="height: 50px;">
        </a>
        <!-- Navbar collapse trigger -->
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Navbar nav -->
        <div class="collapse navbar-collapse" id="navbar-main-collapse">
          <ul class="navbar-nav align-items-lg-center">
            <!-- Home - Overview  -->
            <li class="nav-item active">
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
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/Code_2.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="pages/landing/agency.html">
                          Agency
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/app.html">
                          App
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ Url('/blog') }}">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/classic.html">
                          Classic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/cloud-hosting.html">
                          Cloud hosting
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/digital.html">
                          Digital
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/event-music.html">
                          Event music
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/features.html">
                          Features
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/presentation.html">
                          Presentation
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/saas.html">
                          Saas
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/services.html">
                          Services
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/landing/software.html">
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
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/Code.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="pages/secondary/about-classic.html">
                          About classic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/about.html">
                          About
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/blog') }}">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/blog-article.html">
                          Blog article
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/blog-masonry.html">
                          Blog masonry
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/careers.html">
                          Careers
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/careers-single.html">
                          Careers single
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('/contact') }}">
                          Contact
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/contact-simple.html">
                          Contact simple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/get-started.html">
                          Get started
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/portfolio-fullscreen.html">
                          Portfolio fullscreen
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/pricing-charts.html">
                          Pricing charts
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/pricing-comparison.html">
                          Pricing comparison
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/pricing-simple.html">
                          Pricing simple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/services.html">
                          Services
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/secondary/team.html">
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
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/Secure_Files.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="{{route('user.login')}}">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('user/register') }}">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/authentication/basic-recover.html">
                          Recover
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Cover</li>
                      <li>
                        <a class="dropdown-item" href="{{route('user.login')}}">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('user/register') }}">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/authentication/cover-recover.html">
                          Recover
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Simple</li>
                      <li>
                        <a class="dropdown-item" href="{{route('user.login')}}">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('user/register') }}">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/authentication/simple-recover.html">
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
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/Task.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="pages/account/account-billing.html">
                          Billing
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/account-notifications.html">
                          Notifications
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/account-profile.html">
                          Profile
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/account-profile-public.html">
                          Profile public
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/account-settings.html">
                          Settings
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Board</li>
                      <li>
                        <a class="dropdown-item" href="pages/account/board-connections.html">
                          Connections
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/board-overview.html">
                          Overview
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/board-projects.html">
                          Projects
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/board-tasks.html">
                          Tasks
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Listing</li>
                      <li>
                        <a class="dropdown-item" href="pages/account/listing-orders.html">
                          Orders
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/listing-projects.html">
                          Projects
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/account/listing-users.html">
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
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/Cart_Add_2.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="pages/shop/shop-landing.html">
                          Landing
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/shop/shop-products.html">
                          Products
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/shop/shop-product.html">
                          Product
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Checkout</li>
                      <li>
                        <a class="dropdown-item" href="pages/shop/checkout-cart.html">
                          Cart
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/shop/checkout-cart-empty.html">
                          Cart empty
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/shop/checkout-customer.html">
                          Customer
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/shop/checkout-payment.html">
                          Payment
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/shop/checkout-shipping.html">
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
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/Cog_Wheels.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                        <a class="dropdown-item" href="pages/utility/coming-soon.html">
                          Coming soon
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/utility/error-404.html">
                          Error 404
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/utility/faq.html">
                          Faq
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/utility/support.html">
                          Support
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/utility/topic.html">
                          Topic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages/utility/topic-simple.html">
                          Topic simple
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </li>
            @include('partials.notify-js')
            @include('partials.notify-css')
            <!-- Sections menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sections</a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="sections.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/Apps.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                      <a href="sections.html#headers" class="dropdown-item">Headers</a>
                      <a href="sections.html#footers" class="dropdown-item">Footers</a>
                      <a href="{{ url('/blog') }}" class="dropdown-item">Blog</a>
                      <a href="sections.html#call-to-action" class="dropdown-item">Call to action</a>
                      <a href="sections.html#clients" class="dropdown-item">Clients</a>
                      <a href="sections.html#collapse" class="dropdown-item">Collapse</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="sections.html#covers" class="dropdown-item">Covers</a>
                      <a href="sections.html#features" class="dropdown-item">Features</a>
                      <a href="sections.html#milestone" class="dropdown-item">Milestone</a>
                      <a href="sections.html#pricing" class="dropdown-item">Pricing</a>
                      <a href="sections.html#projects" class="dropdown-item">Projects</a>
                      <a href="sections.html#subscribe" class="dropdown-item">Subscribe</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="sections.html#swiper" class="dropdown-item">Swiper</a>
                      <a href="sections.html#tables" class="dropdown-item">Tables</a>
                      <a href="sections.html#team" class="dropdown-item">Team</a>
                      <a href="sections.html#testimonials" class="dropdown-item">Testimonials</a>
                      <a href="sections.html#video" class="dropdown-item">Video</a>
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
                    <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/DOC_File.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                    <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="{{ asset('assets_new/img/icons/essential/detailed/Mobile_UI.svg') }}" class="svg-inject img-fluid" style="height: 50px;">
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
                      <a href="docs/getting-started/installation.html" class="dropdown-item">Installation</a>
                      <a href="docs/getting-started/file-structure.html" class="dropdown-item">File structure</a>
                      <a href="docs/getting-started/build-tools.html" class="dropdown-item">Build tools</a>
                      <a href="docs/getting-started/customization.html" class="dropdown-item">Customization</a>
                    </div>
                    <div class="col-sm-6">
                      <a href="docs/getting-started/plugins.html" class="dropdown-item">Using plugins</a>
                      <a href="docs/components/index.html" class="dropdown-item">Components</a>
                      <a href="docs/plugins/animate.html" class="dropdown-item">Plugins</a>
                      <a href="docs/support.html" class="dropdown-item">Support</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item d-lg-none d-xl-block">
              <a class="nav-link" href="docs/changelog.html" target="_blank">What's new</a>
            </li>
            <li class="nav-item mr-0">
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
              <a href="{{ url('user/login') }}" target="_blank" class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Get Started">
                <span class="btn-inner--icon"><i class="fas fa-sign-in-alt"></i></span>
                <span class="btn-inner--text">Login</span>
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
    <!-- Header (v1) -->
    <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
      <div class="section-inner bg-gradient-primary"></div>
      <!-- SVG illustration -->
      <div class="pt-7 position-absolute middle right-0 col-lg-7 col-xl-6 d-none d-lg-block">
        <figure class="w-100" style="max-width: 1000px;">
          <img alt="Image placeholder" src="{{ asset('assets_new/img/svg/illustrations/work-chat.svg') }}" class="svg-inject img-fluid" style="height: 1000px;">
        </figure>
      </div>
      <!-- SVG background -->

      <!-- Hero container -->
      <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
        <div class="col">
          <div class="row">
            <div class="col-lg-5 col-xl-6 text-center text-lg-left">
              <div class="d-none d-lg-block mb-4">
                <div class="alert alert-modern alert-dark">
                  <span class="badge badge-danger badge-pill">
                    New
                  </span>
                  <span class="alert-content">Decentralized finance trades DeFi, now in portfolio!</span>
                </div>
              </div>
              <div>
                <h2 class="text-white mb-4">
                  <span class="display-4 font-weight-light">Future. Finance.</span>
                  <span class="d-block">Florie <strong class="font-weight-light">does it better</strong></span>
                </h2>
                <p class="lead text-white">A unique, innovative and non-custodial liquidity protocol for earning interest on deposits, monitored virtual assets and specialized trade pairs. A complete solution for an assured path to financial stability.</p>
                <div class="mt-5">
                  <a href="{{ url('user/register') }}" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                    <span class="btn-inner--text">Get Started</span>
                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                  </a>
                  <a href="{{ url('user/register') }}" class="btn btn-outline-white rounded-pill hover-translate-y-n3 btn-icon d-none d-xl-inline-block scroll-me">
                    <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>
                    <span class="btn-inner--text">Learn More</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Omnisearch -->

  <div class="main-content">


    <section class="bg-section-secondary position-relative" data-spy="scroll" data-target="#nav-sections" data-offset="0" style="height: 100%; overflow-y: scroll;">
      <!-- Headers -->
            <!-- 2nd section -->
      <span id="2ndsection"></span>
          <div>
            <!-- Call to action 2 -->
                <div id="call-to-action-call-to-action-2" title="call-to-action/call-to-action-2.html">
                  <section class="slice slice-lg">
                    <div class="container">
                      <div class="text-center">
                        <h1>We've redefined the profit scheme</h1>
                        <div class="fluid-paragraph mt-4">
                          <p class="lead text-muted lh-180">
                            Let our smart order routing technology source the best available Crypto market assets with an outstanding speed of execution from across the most popular DeFi projects worldwide. We ensure minimal counterparty risk, though inevitable. At Florie Invest, we bear all liquidation risks and deliver positive results at all times.
                          </p>
                          <a href="{{ url('user/register') }}" class="btn btn-dark btn-icon rounded-pill hover-scale-110 mt-5">
                            <span class="btn-inner--text">Let's get started</span>
                            <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
            </div>
    <!-- 2nd section end-->


   <!-- Features -->
      <span id="features"></span>
        <div>
          <div id="features-features-28" title="features/features-28.html">
            <section class="slice slice-lg">
              <div class="container">
                <div class="mb-5 text-center">
                  <h3 class=" mt-4">Features keeping you assured</h3>
                  <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">Over time, we've grown to research and incorporate new sustainable strategies, ensuring longetivity and success.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card text-center py-3 hover-translate-y-n10">
                      <div class="card-body">
                        <div class="">
                          <div class="pb-5">
                            <div class="icon bg-white text-primary rounded-circle icon-lg icon-shape shadow">
                              <i class="fas fa-shield-alt"></i>
                            </div>
                          </div>
                          <h5 class="font-weight-bold">Secure Framework</h5>
                          <p class="mt-2 mb-0">We are committed to providing the highest level of security across all aspects of our services, such as tamper-proof hardware, certified and geo-redundant data centres, integrated approval frameworks.</p>
                          <a href="#" class="d-inline-block link link-underline-primary text-primary mt-4">Find out more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card text-center py-3 hover-translate-y-n10">
                      <div class="card-body">
                        <div class="">
                          <div class="pb-5">
                            <div class="icon bg-white text-success rounded-circle icon-lg icon-shape shadow">
                              <i class="fas fa-network-wired"></i>
                            </div>
                          </div>
                          <h5 class="font-weight-bold">Vast Integrations</h5>
                          <p class="mt-2 mb-0">Our solutions are seamlessly integrated into existing environments such as core banking systems, cryptocurrency exchanges, smart contract web sockets and much more.</p>
                          <a href="#" class="d-inline-block link link-underline-success text-success mt-4">Find out more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card text-center py-3 hover-translate-y-n10">
                      <div class="card-body">
                        <div class="">
                          <div class="pb-5">
                            <div class="icon bg-white text-danger rounded-circle icon-lg icon-shape shadow">
                              <i class="fas fa-file-invoice"></i>
                            </div>
                          </div>
                          <h5 class="font-weight-bold">Audit Reports</h5>
                          <p class="mt-2 mb-0">Duijnborgh Audit B.V. audits our organisation and publishes a SOC 2 / ISAE 3000 Type 2 report. Pen tests and security reviews are conducted by major security firms.</p>
                          <a href="#" class="d-inline-block link link-underline-danger text-danger mt-4">Find out more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card text-center py-3 hover-translate-y-n10">
                      <div class="card-body">
                        <div class="">
                          <div class="pb-5">
                            <div class="icon bg-white text-primary rounded-circle icon-lg icon-shape shadow">
                              <i class="fab fa-battle-net"></i>
                            </div>
                          </div>
                          <h5 class="font-weight-bold">Vaults</h5>
                          <p class="mt-2 mb-0">Capital pools that automatically generate yield based on opportunities present in the market. Vaults benefit users by socializing gas costs, automating the yield generation and rebalancing process, and automatically shifting capital as opportunities arise. End users also do not need to have a proficient knowledge of the underlying protocols involved or DeFi, thus the Vaults represent a passive-investing strategy.</p>
                          <a href="#" class="d-inline-block link link-underline-primary text-primary mt-4">Find out more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card text-center py-3 hover-translate-y-n10">
                      <div class="card-body">
                        <div class="">
                          <div class="pb-5">
                            <div class="icon bg-white text-info rounded-circle icon-lg icon-shape shadow">
                              <i class="fas fa-box-open"></i>
                            </div>
                          </div>
                          <h5 class="font-weight-bold">DeFi Integrations</h5>
                          <p class="mt-2 mb-0">Decentralized applications are projects that focus on disrupting financial intermediaries. DeFi projects are working to increase the speed and automation of tools similar to traditional centralized systems to make them more efficient. One of the trends in the DeFi space adopted by Floie is "yield farming," a process that lets users of decentralized applications get rewarded with tokens and yield on top of liquidity supplied to dapps, resulting in unusually high return rates.</p>
                          <a href="#" class="d-inline-block link link-underline-info text-info mt-4">Find out more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card text-center py-3 hover-translate-y-n10">
                      <div class="card-body">
                        <div class="">
                          <div class="pb-5">
                            <div class="icon bg-white text-warning rounded-circle icon-lg icon-shape shadow">
                              <i class="fas fa-comment"></i>
                            </div>
                          </div>
                          <h5 class="font-weight-bold">Active Support</h5>
                          <p class="mt-2 mb-0">Our expertly trained support team is ready to help you get setup, answer your questions and solve your problems 24/7 via phone, email or online live chat. Historically, we handle all requests in due time, and over 85% of issues are resolved on the first instance. The live-chat system provides quick and instant access to a service agent just when you need it most.</p>
                          <a href="#" class="d-inline-block link link-underline-warning text-warning mt-4">Find out more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div id="features-features-24" title="features/features-24.html">
          <section class="slice slice-lg">
            <div class="container-fluid">
              <div class="row row-grid align-items-center justify-content-around">
                <div class="col-lg-5">
                  <div class="img-back-shape">
                    <img alt="Image placeholder" src="{{asset('assets_new/img/theme/light/innovation.png') }}" class="img-center img-fluid">
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="pr-md-4">
                    <h3 class="font-weight-light">Built with <strong class="font-weight-700">intelligence</strong></h3>
                    <p class="lead mb-5">Your Dashboard presents An Intuitive web experience promoting ease of access to your favorite pages and logs to best keep you informed.</p>
                    <div class="card">
                      <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                          <div class="icon bg-gradient-primary text-white rounded-circle icon-shape">
                            <i class="fab fa-html5"></i>
                          </div>
                          <div class="icon-text pl-4">
                            <h5 class="ma-0 ">Created with the latest technologies</h5>
                            <p class="mb-0">Our backend software developed specially for plotting technical and analytic data keeps our staff up to date on the ever changing market trends in real time.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                          <div class="icon bg-gradient-success text-white rounded-circle icon-shape">
                            <i class="fab fa-node-js"></i>
                          </div>
                          <div class="icon-text pl-4">
                            <h5 class="ma-0 ">Fast and Responsive</h5>
                            <p class="mb-0">Get instant access to your Investment dashboard on your computer and on the go, your dashboard easily adapts to the device in use on commonly supported browsers.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
    <!-- Features -->
    @php
      $calculationCaption = getContent('calculation.caption',true);
    @endphp
    @if($calculationCaption)
      @php
        $planList = \App\Plan::where('status', 1)->latest()->get();
      @endphp
      <div id="call-to-action-call-to-action-6" title="call-to-action/call-to-action-6.html">
            <section class="slice slice-xl bg-primary bg-cover bg-size--cover" style="background-image: url('{{ asset("assets/img/backgrounds/img-6.jpg") }}');">
              <span class="mask bg-primary opacity-7"></span>
              <div class="container py-6">
                <div class="row justify-content-center align-items-center">
                  {{-- <div class="col-lg-10 text-center">
                    <h3 class="display-1 font-weight-700 text-white text-uppercase" style="font-family: 'Oswald', sans-serif;">

                    </h3>
                  </div> --}}
                {{--   <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h2 class="title">{{__(@$calculationCaption->data_values->title)}}</h2>
                        <p>{{@$calculationCaption->data_values->sub_title}}</p>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-10 text-center">
                    <h5 class=" font-weight-50 text-white text-uppercase" style="font-family: 'Oswald', sans-serif; font-size: 3rem;">
                     {{__(@$calculationCaption->data_values->title)}}
                    </h5>

                    <p style="color: white; font-weight:bold ">{{@$calculationCaption->data_values->sub_title}}</p>
                  </div>

            <form class="profit-form row justify-content-center">
                <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <h6 class="profil-title" style="font-weight: bold; color: white;" >@lang('Plan')</h6>
                    <select class="form-control select-bar" id="changePlan">
                        <option value="">@lang('Choose Plan')</option>
                        @foreach($planList as $k => $data)
                        <option value="{{$data->id}}" >{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <h6 class="profil-title" style="font-weight: bold; color: white" >@lang('Invest Amount')</h6>
                    <input type="text" placeholder="0.00" class=" form-control invest-input"
                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <h6 class="profil-title" style="font-weight: bold; color: white">@lang('Profit')</h6>
                    <input type="text" placeholder="0.00" class=" form-control  profit-input" readonly>
                    <code class="period"></code>

                    <b style="color: red" class="errors"></b>
                </div>
            </form>

                </div>
              </div>
            </section>
      </div>
    @endif

       <!-- Pricing -->
       <span id="pricing"></span>
       <div>
         <!-- Pricing 2 -->
         @php
            $planCaption = getContent('plan.caption',true);
         @endphp
                  @if($planCaption)
               @php
              $plans = \App\Plan::where('status', 1)->where('featured', 1)->latest()->get();
               @endphp

         <div id="pricing-pricing-2" title="pricing/pricing-2.html">
           <section class="slice slice-lg">
             <div class="container">
               <div class="mb-5 text-center">
                 <h3 class=" mt-4"> {{ isset($planCaption->data_values->title)? __(@$planCaption->data_values->title):'Pricing plans' }}</h3>
                 <div class="fluid-paragraph mt-3">
                   <p class="lead lh-180">
                   {{ isset($planCaption->data_values->short_details)? __(@$planCaption->data_values->short_details):"We'll make sure we build everything you need from now on" }}
                 </p>
                 </div>
               </div>
                @endif

            <div class="pricing-container">

            <div class="pricing card-group flex-column flex-lg-row mb-3">
                 @foreach($plans as $k => $data)
                     @php
                        $time_name = \App\TimeSetting::where('time', $data->times)->first();
                     @endphp
                    <div class="row">
                     <div class="card card-pricing text-center px-3 mb-5 mb-lg-0">
                     <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white">{{$data->name}}
                     </span>
                     <div class="card-header py-5 border-0">
                       <div class="h1 text-primary text-center mb-0" data-pricing-value="12"><span class="price">
                        {{__($data->interest)}}%  @if($data->interest_status == 1) @else {{__($general->cur_text)}}@endif /
                         </span>
                         <span class="h6 ml-2">
                         {{__($time_name->name)}}
                           @if($data->interest_status == 1)
                          @else {{__($general->cur_text)}}
                           @endif
                                @if($data->capital_back_status == 1)
                                 <li  style="margin-top: 8px">
                                      <span class="badge badge-success">@lang('Capital Will Return Back')</span>
                                    </li>
                                  @elseif($data->capital_back_status == 0)
                                     <li style="margin-top: 8px" >
                                      <span class="badge badge-warning">@lang('Capital Will Store')
                                     </span>
                                    </li>

                                @endif

                              </span>
                            </div>
                     </div>
                     <div class="card-body delimiter-top">
                       <ul class="list-unstyled mb-4">
                        <li>
                         @if($data->lifetime_status == 0)
                                   {{__($data->repeat_time)}} @lang('Times') @else @lang('Lifetime')
                                   @endif
                          </li>

                         <li>@lang('24/7Support')</li>
                   @if($data->fixed_amount == 0)
                       <li>@lang('Min.') {{__($general->cur_sym)}}{{__($data->minimum)}}
                          <span>@lang('Max:') {{__($general->cur_sym)}}{{__($data->maximum)}}
                          </span>
                       </li>
                    @else
                        <li>@lang('Invest Amount'): {{__($general->cur_sym)}}{{__($data->maximum)}}
                        </li>
                    @endif

                       <a href="javascript:void(0)"  style="color: black ;font-weight: bold; " data-toggle="modal" data-target="#depoModal"data-resource="{{$data}}"class="btn btn-sm btn-neutral mb-3">@lang('Invest Now')
                         </a>
                     </div>
                    </div>
                   </div>
                  @endforeach
                 </div>
               </div>
             </div>
           </section>
         </div>
       </div>



        <!-- Pricing -->
        <span id="2_feature"></span>
        <div>
           <!-- Feature 2nd phase -->ygb 
          <div id="features-features-13" title="features/features-13.html">
            <section class="slice slice-lg bg-gradient-primary">
              <div class="container">
                <div class="mb-5 text-center">
                  <h3 class="text-white mt-4">Profit on the go!</h3>
                  <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180 text-white">With our mobile applications you can easily log on to access your dashboard at any time, enjoying the convenience of transactions and profile operation as you go. Available soon on Android & iOS! </p>
                  </div>
                </div>
                <div class="row row-grid align-items-center">
                  <div class="col-lg-4">
                    <div class="d-flex align-items-start mb-5">
                      <div class="pr-4">
                        <div class="icon icon-shape bg-white text-primary box-shadow-3 rounded-circle">
                          <i class="fas fa-expand"></i>
                        </div>
                      </div>
                      <div class="icon-text">
                        <h5 class="h5 text-white">Intuitive app design</h5>
                        <p class="mb-0 text-white">Modular and interchangable components between layouts and suggestive actions within screens.</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                      <div class="pr-4">
                        <div class="icon icon-shape bg-white text-primary box-shadow-3 rounded-circle">
                          <i class="fas fa-box-open"></i>
                        </div>
                      </div>
                      <div class="icon-text">
                        <h5 class="text-white">Feature packed</h5>
                        <p class="mb-0 text-white">Exciting features including logs and analytics to help track your portfolio and its management..</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="pr-4">
                        <div class="icon icon-shape bg-white text-primary box-shadow-3 rounded-circle">
                          <i class="fas fa-smile"></i>
                        </div>
                      </div>
                      <div class="icon-text">
                        <h5 class="text-white">Integrated support system</h5>
                        <p class="mb-0 text-white">Make queries, get information and easily connect to a livechat agent directly from your mobile device..</p>
                      </div> 
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="position-relative" style="z-index: 10;">
                      <img alt="Image placeholder" src="{{asset('assets_new/img/theme/light/iphone.png') }}" class="img-center img-fluid">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="d-flex align-items-start mb-5">
                      <div class="pr-4">
                        <div class="icon icon-shape bg-white text-primary box-shadow-3 rounded-circle">
                          <i class="fas fa-file-archive"></i>
                        </div>
                      </div>
                      <div class="icon-text">
                        <h5 class="text-white">Bug free updates</h5>
                        <p class="mb-0 text-white">We squash bugs and review app frequently to release updates that delivers the experience you desire.</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                      <div class="pr-4">
                        <div class="icon icon-shape bg-white text-primary box-shadow-3 rounded-circle">
                          <i class="fab fa-sass"></i>
                        </div>
                      </div>
                      <div class="icon-text">
                        <h5 class="text-white">Mobile OS Compatible</h5>
                        <p class="mb-0 text-white">Android user? iOS user?, we've got you covered on both systems!.</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="pr-4">
                        <div class="icon icon-shape bg-white text-primary box-shadow-3 rounded-circle">
                          <i class="fas fa-palette"></i>
                        </div>
                      </div>
                      <div class="icon-text">
                        <h5 class="text-white">Community Feedback driven</h5>
                        <p class="mb-0 text-white">We listen to your feedback on app performance and user experience. Desired features are implemented based on popular and mandatory demand.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

          <!-- Feature 2nd phase -->


           <!-- Subscribe -->
      <span id="subscribe"></span>
       <div>
        <!-- Subscribe 3 -->
         <div id="subscribe-subscribe-3" title="subscribe/subscribe-3.html">
          <section class="slice slice-lg">
            <div class="container">
              <div class="mb-5 text-center">
                <h3 class=" mt-4">Subscribe to our newsletter</h3>
                <div class="fluid-paragraph mt-3">
                  <p class="lead lh-180">Stay informed on market activity, Token releases, DeFi Charts, Financial advice and much more. Your mail box never felt better!</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                  <form class="mt-4">
                    <div class="form-group mb-0">
                      <div class="input-group input-group-lg input-group-merge rounded-pill bg-dark">
                        <input type="email" class="form-control form-control-flush" name="email" placeholder="Enter your email address" aria-label="Enter your email address">
                        <div class="input-group-append">
                          <button class="btn btn-dark" type="button">
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
        </div>
      </div>
       <!-- Team -->
       <span id="team"></span>
       <div>
         <!-- Team 1 -->
         <div id="team-team-1" title="team/team-1.html">
           <section class="slice slice-lg">
             <div class="container">
               <div class="mb-5 text-center">
                 <h3 class=" mt-4">Our Top Team</h3>
                 <div class="fluid-paragraph mt-3">
                   <p class="lead lh-180">Meet our top officials and understand our driving force, from opening new doors and concepting new ideas to sustaining a better administration at progressive levels.</p>
                 </div>
               </div>
               <div class="row row-grid">
                 <div class="col-lg-3">
                   <div data-animate-hover="2">
                     <div class="animate-this">
                       <a href="#">
                         <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets_new/img/theme/light/team-1-800x800.jpg">
                       </a>
                     </div>
                     <div class="mt-3">
                       <h5 class="card-title mb-0">Heather Wright</h5>
                       <p class="text-muted mb-0">CEO</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-3">
                   <div data-animate-hover="2">
                     <div class="animate-this">
                       <a href="#">
                         <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets_new/img/theme/light/team-2-800x800.jpg">
                       </a>
                     </div>
                     <div class="mt-3">
                       <h5 class="card-title mb-0">Monroe Parker</h5>
                       <p class="text-muted mb-0">CTO</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-3">
                   <div data-animate-hover="2">
                     <div class="animate-this">
                       <a href="#">
                         <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets_new/img/theme/light/team-3-800x800.jpg">
                       </a>
                     </div>
                     <div class="mt-3">
                       <h5 class="card-title mb-0">John Sullivan</h5>
                       <p class="text-muted mb-0">CTO</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-3">
                   <div data-animate-hover="2">
                     <div class="animate-this">
                       <a href="#">
                         <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets_new/img/theme/light/team-4-800x800.jpg">
                       </a>
                     </div>
                     <div class="mt-3">
                       <h5 class="card-title mb-0">James Lewis</h5>
                       <p class="text-muted mb-0">CTO</p>
                     </div>
                   </div>
                 </div>
               </div>
               
             </div>
           </section>
         </div>
       </div>


             <!-- Testimonials -->
      <span id="testimonials"></span>
      <div>
        <!-- Testimonials 1 -->
        <div id="testimonials-testimonials-1" title="testimonials/testimonials-1.html">
          <section class="slice slice-lg">
            <div class="container">
              <div class="mb-5 text-center">
                <h3 class=" mt-4">What our customers say!</h3>
                <div class="fluid-paragraph mt-3">
                  <p class="lead lh-180">Outlining some first hand experience from our clients! Read their testimonials. (All testimonials on this website are completely in the client's words and devoid of modification whatsoever)</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-11">
                  <div class="swiper-js-container overflow-hidden">
                    <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide p-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex align-items-center">
                                <div>
                                  <img alt="Image placeholder" src="assets_new/img/theme/light/team-1-800x800.jpg" class="avatar  rounded-circle">
                                </div>
                                <div class="pl-3">
                                  <h5 class="h6 mb-0">Ayman Klaas</h5>
                                  <small class="d-block text-muted">Financial analyst</small>
                                </div>
                              </div>
                              <p class="mt-4 lh-180">Florie as a pension provider is indeed great, but florie into the crypto currency space is all I have ever sought for. I am indeed impressed with the outstanding performance so far!.</p>
                              <span class="static-rating static-rating-sm">
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide p-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex align-items-center">
                                <div>
                                  <img alt="Image placeholder" src="assets_new/img/theme/light/team-2-800x800.jpg" class="avatar  rounded-circle">
                                </div>
                                <div class="pl-3">
                                  <h5 class="h6 mb-0">Aaltje llana</h5>
                                  <small class="d-block text-muted">Retired Fireman</small>
                                </div>
                              </div>
                              <p class="mt-4 lh-180">Can’t say I have had a bad experience yet, at least all is in terms with the financial improvement they are obliged to provide. I’d stay a longer time with this company.</p>
                              <span class="static-rating static-rating-sm">
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide p-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex align-items-center">
                                <div>
                                  <img alt="Image placeholder" src="assets_new/img/theme/light/team-3-800x800.jpg" class="avatar  rounded-circle">
                                </div>
                                <div class="pl-3">
                                  <h5 class="h6 mb-0">Kendrick Duncan</h5>
                                  <small class="d-block text-muted">Walmart Store manager</small>
                                </div>
                              </div>
                              <p class="mt-4 lh-180"> Top Notch is the description for their service, customer support is first class indeed and apparently the team seems to be well informed as I have posed even the toughest situations and was well clarified. This is merely my personal thoughts though!</p>
                              <span class="static-rating static-rating-sm">
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide p-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex align-items-center">
                                <div>
                                  <img alt="Image placeholder" src="assets_new/img/theme/light/team-4-800x800.jpg" class="avatar  rounded-circle">
                                </div>
                                <div class="pl-3">
                                  <h5 class="h6 mb-0">Robert Olaf</h5>
                                  <small class="d-block text-muted">Independent Forex Trader</small>
                                </div>
                              </div>
                              <p class="mt-4 lh-180">     In the past Florie has performed well and still does, but I would welcome an innovation where I can directly connect my external wallets and Invest directly from them. All the same, I love what I get!.</p>
                              <span class="static-rating static-rating-sm">
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide p-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex align-items-center">
                                <div>
                                  <img alt="Image placeholder" src="assets_new/img/theme/light/team-5-800x800.jpg" class="avatar  rounded-circle">
                                </div>
                                <div class="pl-3">
                                  <h5 class="h6 mb-0">Romero Caius</h5>
                                  <small class="d-block text-muted">Google</small>
                                </div>
                              </div>
                              <p class="mt-4 lh-180">A few years and more for me! Best service compared to some 411 pension and invest companies I have tried out here. Florie has been a big breakthrough for my business projects and short term listings.</p>
                              <span class="static-rating static-rating-sm">
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

          <!-- Collapse -->
      <span id="collapse"></span>
      <div>
        <!-- Collapse 1 -->
        <div id="collapse-collapse-1" title="collapse/collapse-1.html">
          <section class="slice slice-lg bg-section-secondary">
            <div class="container">
              <div class="mb-5 text-center">
                <h3 class=" mt-4">Helpful answers</h3>
                <div class="fluid-paragraph mt-3">
                  <p class="lead lh-180">We’ve put together some frequently asked questions for fast clarification and a smooth experience to your own journey.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-6">
                  <div id="accordion-1" class="accordion accordion-spaced">
                    <!-- Accordion card 1 -->
                    <div class="card">
                      <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                        <h6 class="mb-0"><i class="fas fa-file-pdf mr-3"></i>Who may open an account?</h6>
                      </div>
                      <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                        <div class="card-body">
                          <p>Any individual above the age of 16, whether resident in the Netherlands or international, possessing a valid identification card and proof of address document for KYC.</p>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion card 2 -->
                    <div class="card">
                      <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                        <h6 class="mb-0"><i class="fas fa-lock mr-3"></i>Is Florie Licensed to perform its operations?</h6>
                      </div>
                      <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                        <div class="card-body">
                          <p>Yes, FlORIE BUSINESS VENTURES (Including FLORIE PENSIONS & FLORIE INVEST is registered under the Netherlands chamber of commerce. Registration details :
<p>Florie BV, CoC 52550095 
<p>Establishment no. 000022469729 
<p>Wisentstraat 581402TW Bussum 
<p>Confirm via: <a href="https://www.kvk.nl/orderstraat/bedrijf-kiezen/?orig=#!shop?&q=">Chamber Of commerce</a>
</p>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion card 3 -->
                    <div class="card">
                      <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                        <h6 class="mb-0"><i class="fas fa-credit-card mr-3"></i>How is ‘risk’ managed with Florie?</h6>
                      </div>
                      <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                        <div class="card-body">
                          <p>Like every business, the risk factor is inevitable hence the utilization of special analytic data and experienced forecasters in the Cryptocurrency and DeFi spaces. For every interest we remit to our clients, there is a percentage of profit store in our SAFE ASSET FUNDS which is used to augment for future shortcomings in profit expectation.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div id="accordion-2" class="accordion accordion-spaced">
                    <!-- Accordion card 1 -->
                    <div class="card">
                      <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                        <h6 class="mb-0"><i class="fas fa-file-pdf mr-3"></i>Which license do I need?</h6>
                      </div>
                      <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2">
                        <div class="card-body">
                          <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion card 2 -->
                    <div class="card">
                      <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                        <h6 class="mb-0"><i class="fas fa-lock mr-3"></i>How do I get access to a theme?</h6>
                      </div>
                      <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2">
                        <div class="card-body">
                          <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion card 3 -->
                    <div class="card">
                      <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button" data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                        <h6 class="mb-0"><i class="fas fa-credit-card mr-3"></i>How do I see previous orders?</h6>
                      </div>
                      <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-2">
                        <div class="card-body">
                          <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>


@php
    $blogCaption = getContent('blog.caption',true);
    $blogs = getContent('blog.post',false,3);
@endphp
@if($blogCaption)

            <!-- Blog -->
            <span id="blog"></span>
            <div>
              <!-- Blog 1 -->
              <div id="blog-blog-1" title="blog/blog-1.html">
                <section class="slice-xl delimiter-top">
                  <div class="container">
                    <div class="mb-5 text-center">
                      <h3 class=" mt-4">{{  $blogCaption->data_values->title ? @$blogCaption->data_values->title:'In The New'}}</h3>
                      <p>{{$blogCaption->data_values->short_details? @$blogCaption->data_values->short_details :''}}</p>
                    </div>

                    <div class="row">
                      @foreach($blogs as $k=> $data)
                      <div class="col-lg-4">
                        <div class="mb-5 mb-lg-0" data-animate-hover="1">
                          <div class="animate-this">
                             <a href="{{route('home.blog.details',[str_slug($data->value->title),$data->id])}}">
                                <img   class="img-fluid rounded shadow"  src="{{get_image(config('constants.frontend.blog.post.path').'/'.$data->value->image)}}" alt="{{$data->value->title}}">
                            </a>

                          </div>
                          <div class="pt-4">
                            <small class="text-uppercase">{{date('d-M-Y', strtotime($data->created_at))}} </small>
                            <h5>
                              <a href="{{route('home.blog.details',[str_slug($data->value->title),$data->id])}}"> {{__(str_limit($data->value->title,30))}}</a>
                            </h5>
                            <p class="mt-3">
                              {{str_limit(strip_tags($data->value->body),100)}}
                            </p>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>

                  </div>
                </section>
              </div>

            </div>
            @endif
           <!-- Clients -->
      <span id="clients"></span>
      <div>
        <!-- Clients 3 -->
        <div id="clients-clients-3" title="clients/clients-3.html">
          <section class="slice">
            <div class="container">
              <div class="mb-5 text-center">
                <h3 class=" mt-4">Trusted by over 10.000 clients</h3>
                <div class="fluid-paragraph mt-3">
                  <p class="lead lh-180">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
                </div>
              </div>
              <div class="hover-blurable">
                <a href="#">
                  <div class="blurable-item client-group row justify-content-center">
                    <div class="client col-lg-2 col-md-3 col-4 py-3">
                      <img alt="Image placeholder" src="assets_new/img/clients/svg/amazon-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3">
                      <img alt="Image placeholder" src="assets_new/img/clients/svg/spotify-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3">
                      <img alt="Image placeholder" src="assets_new/img/clients/svg/airbnb-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3">
                      <img alt="Image placeholder" src="assets_new/img/clients/svg/paypal-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3">
                      <img alt="Image placeholder" src="assets_new/img/clients/svg/slack-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3">
                      <img alt="Image placeholder" src="assets_new/img/clients/svg/airbnb-gray.svg">
                    </div>
                  </div>
                  <span class="blurable-hidden btn btn-sm btn-primary rounded-pill">See all customers</span>
                </a>
              </div>
            </div>
          </section>
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

    @php
        $wallets = \App\UserWallet::where('user_id', Auth::id())->get();
    @endphp
    <!-- Modal -->

    <!-- Modal -->
    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <strong class="modal-title" id="ModalLabel">

                        @guest
                            @lang('At First Sign In your Account')
                        @else
                            @lang('Confirm to invest on') <span class="planName"></span>
                        @endguest
                    </strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="{{route('user.buy.plan')}}" method="post">
                    @csrf
                    @auth
                        <div class="modal-body">

                            <div class="form-group">
                                <h6 class="text-center investAmountRenge"></h6>

                                <p class="text-center mt-1 interestDetails"></p>
                                <p class="text-center interestValidaty"></p>

                                <div class="form-group">
                                    <strong>@lang('Select Wallet')</strong>
                                    <select class="form-control" name="wallet_type">
                                        @foreach($wallets as $k=>$data)
                                            <option value="{{$data->id}}"> {{__(str_replace('_',' ',$data->type))}}
                                                ({{formatter_money($data->balance)}} {{__($general->currency)}})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" name="plan_id" class="plan_id">


                                <div class="form-group">
                                    <strong>@lang('Invest Amount')</strong>
                                    <input type="text" class="form-control fixedAmount" id="fixedAmount" name="amount"
                                           value="{{old('amount')}}"
                                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success ">@lang('Yes')</button>
                            <button type="button" class="btn btn-danger btn-sm"
                                    data-dismiss="modal">@lang('No')</button>
                        </div>
                    @endauth

                    @guest

                        <div class="modal-footer">
                            <a href="{{route('user.login')}}" type="button"
                               class="btn btn-success custom-success">@lang('Please, Signin your account at first')</a>
                        </div>
                    @endguest
                </form>
            </div>
        </div>
    </div>


  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
  <!-- Page JS -->
  <script src="{{asset('assets_new/libs/swiper/dist/js/swiper.min.js') }}"></script>
  <script src="{{asset('assets_new/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
  <script src="{{asset('assets_new/libs/typed.js/lib/typed.min.js') }}"></script>
  <script src="{{asset('assets_new/libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset('assets_new/libs/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
  <!-- Google maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBuyKngB9VC3zgY_uEB-DKL9BKYMekbeY"></script>
  <!-- Purpose JS -->
  <script src="{{asset('assets_new/js/purpose.js') }}"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="{{asset('assets_new/js/demo.js') }}"></script>
</body>

</html>

<script>
   (function ($) {
        "use strict";
        $(document).ready(function () {
            $("#changePlan").on('change', function () {
                var planId = $("#changePlan option:selected").val();
                var investInput = $('.invest-input').val();
                var profitInput = $('.profit-input').val('');

                $('.period').text('');

                if (investInput != '' && planId != null) {
                    ajaxPlanCalc(planId, investInput)
                }
            });

            $(".invest-input").on('change', function () {
                var planId = $("#changePlan option:selected").val();
                var investInput = $(this).val();
                var profitInput = $('.profit-input').val('');
                $('.period').text('');
                if (investInput != '' && planId != null) {

                    ajaxPlanCalc(planId, investInput)
                }
            });
        });
    })(jQuery);

    function ajaxPlanCalc(planId, investInput) {

        $.ajax({
            url: "{{route('planCalculator')}}",
            type: "post",
            data: {
                planId,
                investInput
            },
            success: function (response) {

                var alertStatus = "{{$general->alert}}";
                if (response.errors) {
                    // if (alertStatus == '1') {
                    //     iziToast.error({message: response.errors, position: "topRight"});
                    // } else if (alertStatus == '2') {
                    //     $('.errors').text(response.errors);
                    // }

                   $('.errors').text(response.errors);

                   console.log(response.errors);
                }

                console.log(response);

                $('.profit-input').val(response.interest_amount);
                $('.period').text(response.interestValidity);


            }
        });
    }
</script>


    <script>

        (function ($) {
            "use strict";

            $(document).ready(function () {
                $('.investButton').on('click', function () {
                    var data = $(this).data('resource');
                    var symbol = "{{__($general->cur_sym)}}";
                    var currency = "{{__($general->cur_text)}}";

                    if (data.fixed_amount == '0') {
                        $('.investAmountRenge').text(`@lang('Invest'): ${symbol}${data.minimum} - ${symbol}${data.maximum}`);
                        $('.fixedAmount').val('');
                        $('#fixedAmount').attr('readonly', false);

                    } else {
                        $('.investAmountRenge').text(`@lang('Invest'): ${symbol}${data.fixed_amount}`);
                        $('.fixedAmount').val(data.fixed_amount);

                        $('#fixedAmount').attr('readonly', true);
                    }

                    if (data.interest_status == '1') {
                        $('.interestDetails').html(`<strong> @lang('Interest'): ${data.interest} % </strong>`);
                    } else {
                        $('.interestDetails').html(`<strong> @lang('Interest'): ${data.interest} ${currency}  </strong>`);
                    }
                    if (data.lifetime_status == '0') {
                        $('.interestValidaty').html(`<strong>  @lang('Per') ${data.times} @lang('Hours') ,  ${data.repeat_time} @lang('Times')</strong>`);
                    } else {
                        $('.interestValidaty').html(`<strong>  @lang('Per') ${data.times} @lang('Hours'),  @lang('Lifetime') </strong>`);
                    }

                    $('.planName').text(data.name);
                    $('.plan_id').val(data.id);
                    alert(data);

                });
            });
        })(jQuery);

    </script>

