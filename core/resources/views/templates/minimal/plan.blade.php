<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>Purpose Website UI Kit - Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</title>
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


@guest

        @php
            $planCaption = getContent('plan.caption',true);
        @endphp

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
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Go to Bootstrap Themes">
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
        <!-- ========Ticket-Section Starts Here ========-->
        <section class="ticket-section padding-bottom c-shape-wrapper padding-top">
            <div class="container">


                <div class="row">
                    <div class="col-12">
                        <div class="section-header">
                            <h2 class="title">{{__(@$planCaption->data_values->title)}}</h2>
                            <p>{{__(@$planCaption->data_values->short_details)}}</p>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center mb-30-none mt-5">
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
                        {{__($data->interest)}} % /
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

                       <a href="javascript:void(0)"  style="color: black ;font-weight: bold; " data-toggle="modal" data-target="#depoModal"data-resource="{{$data}}"class="btn btn-sm btn-neutral mb-3 investButton">@lang('Invest Now')
                            </a>
                     </div>
                    </div>
                   </div>
                  @endforeach

                </div>
            </div>
        </section>
        <!-- ========Ticket-Section Ends Here ========-->


    @endguest
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>

    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    @auth
                    <h5 class="modal-title" id="ModalLabel">@lang('Confirm to invest on') <strong class="planName text-white"></strong></h5>
                    @endauth
                    @guest
                    <h5 class="modal-title" id="ModalLabel">@lang('Need Sign In') </h5>
                    @endguest
                </div>
                <form action="{{route('user.buy.plan')}}" method="post">
                    @csrf
                    @auth
                    <div class="modal-body">

                        <div class="form-group">
                            <h5 class="text-center investAmountRenge"></h5>

                            <p class="text-center interestDetails"></p>
                            <p class="text-center interestValidaty"></p>

                            <div class="form-group">
                                <strong>@lang('Select Wallet')</strong>
                                <select class="form-control"  name="wallet_type">
                                    @foreach($wallets as $k=>$data)
                                        <option value="{{$data->id}}"> {{__(str_replace('_',' ',$data->type))}} ({{formatter_money($data->balance)}} {{__($general->currency)}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="plan_id" class="plan_id">


                            <div class="form-group">
                                <strong>@lang('Invest Amount')</strong>
                                <input type="text" class="form-control fixedAmount" id="fixedAmount" name="amount" value="{{old('amount')}}" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                            </div>
                        </div>
                    </div>

                        <div class="modal-footer">
                            <button type="submit"  class="btn btn-success " >@lang('Yes')</button>
                            <button type="button" class="btn btn-danger " data-dismiss="modal">@lang('No')</button>
                        </div>
                    @endauth

                    @guest
                        <div class="modal-footer">
                            <a href="{{route('user.login')}}" type="button" class="btn btn-success custom-success" >@lang('Please, Signin your account at first')</a>
                        </div>
                    @endguest
                </form>
            </div>
        </div>
    </div>
    @auth
    @include(activeTemplate().'layouts.new_user')

    <section class="slice slice-lg">
       <div class="container">

           <div class="actions-toolbar py-2 mb-4">
                    <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                        <span style="padding: 15px;">{{__($page_title)}} </span>
                    </h3>
            </div>


            <!-- ========User-Panel-Section Starte Here ========-->
        <section class="user-panel-section padding-bottom padding-top">
            <div class="container user-panel-container">
                <div class=" user-panel-tab">
                    <div class="row">
                        <div class="tab-area fullscreen-width">
                                <div class="tab-item active">
                                    <div class="row justify-content-center mb-30-none mt-5">
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
                                            {{__($data->interest)}} % /
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
                                                    @elseif($data->capital_back_status == 1)
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

                                        <a href="javascript:void(0)"  style="color: black ;font-weight: bold; " data-toggle="modal" data-target="#depoModal"data-resource="{{$data}}"class="btn btn-sm btn-neutral mb-3 investButton">@lang('Invest Now')
                                                </a>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
            <!-- ========User-Panel-Section Ends Here ========-->
           </div>
    </section>

@endauth
@include('partials.notify-js')
 @include('partials.notify-css')
@push('renderModal')
    @php
        $wallets = \App\UserWallet::where('user_id', Auth::id())->get();
    @endphp

    <!-- Modal -->
    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    @auth
                    <h5 class="modal-title" id="ModalLabel">@lang('Confirm to invest on') <strong class="planName text-white"></strong></h5>
                    @endauth
                    @guest
                    <h5 class="modal-title" id="ModalLabel">@lang('Need Sign In') </h5>
                    @endguest
                </div>
                <form action="{{route('user.buy.plan')}}" method="post">
                    @csrf
                    @auth
                    <div class="modal-body">

                        <div class="form-group">
                            <h5 class="text-center investAmountRenge"></h5>

                            <p class="text-center interestDetails"></p>
                            <p class="text-center interestValidaty"></p>

                            <div class="form-group">
                                <strong>@lang('Select Wallet')</strong>
                                <select class="form-control"  name="wallet_type">
                                    @foreach($wallets as $k=>$data)
                                        <option value="{{$data->id}}"> {{__(str_replace('_',' ',$data->type))}} ({{formatter_money($data->balance)}} {{__($general->currency)}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" name="plan_id" class="plan_id">


                            <div class="form-group">
                                <strong>@lang('Invest Amount')</strong>
                                <input type="text" class="form-control fixedAmount" id="fixedAmount" name="amount" value="{{old('amount')}}" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                            </div>
                        </div>
                    </div>

                        <div class="modal-footer">
                            <button type="submit"  class="btn btn-success " >@lang('Yes')</button>
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">@lang('No')</button>
                        </div>
                    @endauth

                    @guest
                        <div class="modal-footer">
                            <a href="{{route('user.login')}}" type="button" class="btn btn-success custom-success" >@lang('Please, Signin your account at first')</a>
                        </div>
                    @endguest
                </form>
            </div>
        </div>
    </div>


@endpush
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
@push('js')

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
                        $('.interestDetails').html(`<strong> @lang('Interest'): ${data.interest}% </strong>`);
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

                    console.log(data);

                });
            });
        })(jQuery);

    </script>
