<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->helper('url');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Start your development with a Design System for Bootstrap 4, React and Reactstrap."
    />
    <meta name="author" content="Creative Tim" />
    <title>
      Argon Design System React - Free Design System for Bootstrap 4
    </title>
    <!-- Favicon -->
    <link
      href="<?php echo base_url(); ?>/assets/img/brand/favicon.png"
      rel="icon"
      type="image/png"
    />
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <!-- Icons -->
    <link href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" rel="stylesheet" />
    <link
      href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- Argon CSS -->
    <link
      type="text/css"
      href="<?php echo base_url(); ?>assets/css/argon-design-system-react.css?v=1.1.0"
      rel="stylesheet"
    />
  </head>

  <body>
    <header class="header-global">
      <nav
        id="navbar-main"
        class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom"
      >
        <div class="container">
          <a class="navbar-brand mr-lg-5" href="../index.html">
            <img src="<?php echo base_url(); ?>assets/img/brand/argon-react-white.png" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbar_global"
            aria-controls="navbar_global"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="../index.html">
                    <img src="<?php echo base_url(); ?>assets/img/brand/blue.png" />
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button
                    type="button"
                    class="navbar-toggler"
                    data-toggle="collapse"
                    data-target="#navbar_global"
                    aria-controls="navbar_global"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span></span> <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link"
                  data-toggle="dropdown"
                  href="#"
                  role="button"
                >
                  <i class="ni ni-ui-04 d-lg-none"></i>
                  <span class="nav-link-inner--text">Components</span>
                </a>
                <div class="dropdown-menu dropdown-menu-xl">
                  <div class="dropdown-menu-inner">
                    <a
                      href="https://demos.creative-tim.com/argon-design-system-react/#/documentation/overview?ref=adsr-static-docs"
                      class="media d-flex align-items-center"
                    >
                      <div
                        class="icon icon-shape bg-gradient-primary rounded-circle text-white"
                      >
                        <i class="ni ni-spaceship"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-primary mb-md-1">
                          Getting started
                        </h6>
                        <p class="description d-none d-md-inline-block mb-0">
                          Learn how to use Argon compiling Scss, change brand
                          colors and more.
                        </p>
                      </div>
                    </a>
                    <a
                      href="https://demos.creative-tim.com/argon-design-system-react/#/documentation/colors?ref=adsr-static-docs"
                      class="media d-flex align-items-center"
                    >
                      <div
                        class="icon icon-shape bg-gradient-success rounded-circle text-white"
                      >
                        <i class="ni ni-palette"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-primary mb-md-1">Foundation</h6>
                        <p class="description d-none d-md-inline-block mb-0">
                          Learn more about colors, typography, icons and the
                          grid system we used for Argon.
                        </p>
                      </div>
                    </a>
                    <a
                      href="https://demos.creative-tim.com/argon-design-system-react/#/documentation/alerts?ref=adsr-static-docs"
                      class="media d-flex align-items-center"
                    >
                      <div
                        class="icon icon-shape bg-gradient-warning rounded-circle text-white"
                      >
                        <i class="ni ni-ui-04"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h5 class="heading text-warning mb-md-1">Components</h5>
                        <p class="description d-none d-md-inline-block mb-0">
                          Browse our 50 beautiful handcrafted components offered
                          in the Free version.
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link"
                  data-toggle="dropdown"
                  href="#"
                  role="button"
                >
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Examples</span>
                </a>
                <div class="dropdown-menu">
                  <a href="../examples/landing.html" class="dropdown-item"
                    >Landing</a
                  >
                  <a href="../examples/profile.html" class="dropdown-item"
                    >Profile</a
                  >
                  <a href="../examples/login.html" class="dropdown-item"
                    >Login</a
                  >
                  <a href="../examples/register.html" class="dropdown-item"
                    >Register</a
                  >
                </div>
              </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
              <li class="nav-item">
                <a
                  class="nav-link nav-link-icon"
                  href="https://www.facebook.com/creativetim"
                  target="_blank"
                  data-toggle="tooltip"
                  title="Like us on Facebook"
                >
                  <i class="fa fa-facebook-square"></i>
                  <span class="nav-link-inner--text d-lg-none">Facebook</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link nav-link-icon"
                  href="https://www.instagram.com/creativetimofficial"
                  target="_blank"
                  data-toggle="tooltip"
                  title="Follow us on Instagram"
                >
                  <i class="fa fa-instagram"></i>
                  <span class="nav-link-inner--text d-lg-none">Instagram</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link nav-link-icon"
                  href="https://twitter.com/creativetim"
                  target="_blank"
                  data-toggle="tooltip"
                  title="Follow us on Twitter"
                >
                  <i class="fa fa-twitter-square"></i>
                  <span class="nav-link-inner--text d-lg-none">Twitter</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link nav-link-icon"
                  href="https://github.com/creativetimofficial/argon-design-system-react"
                  target="_blank"
                  data-toggle="tooltip"
                  title="Star us on Github"
                >
                  <i class="fa fa-github"></i>
                  <span class="nav-link-inner--text d-lg-none">Github</span>
                </a>
              </li>
              <li class="nav-item d-none d-lg-block ml-lg-4">
                <a
                  href="https://www.creative-tim.com/product/argon-design-system-react?ref=adsr-static-docs"
                  target="_blank"
                  class="btn btn-neutral btn-icon"
                >
                  <span class="btn-inner--icon">
                    <i class="fa fa-cloud-download mr-2"></i>
                  </span>
                  <span class="nav-link-inner--text">Download</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>