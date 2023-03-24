<?php
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
      <div class="position-relative">
        <section class="section section-lg section-hero section-shaped">
          <!-- Background circles -->
          <div class="shape shape-style-1 shape-primary">
            <span class="span-150"></span> <span class="span-50"></span>
            <span class="span-50"></span> <span class="span-75"></span>
            <span class="span-100"></span> <span class="span-75"></span>
            <span class="span-50"></span> <span class="span-100"></span>
            <span class="span-50"></span> <span class="span-100"></span>
          </div>
          <div
            class="container shape-container d-flex align-items-center py-lg"
          >
            <div class="col px-0">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                  <img
                    src="<?php echo base_url(); ?>assets/img/brand/argon-react-white.png"
                    style="width: 200px"
                    class="img-fluid"
                  />
                  <p class="lead text-white">
                    We are constantly doing updates on the product and
                    documentation, so please check the onshape version.
                  </p>
                  <div class="btn-wrapper mt-5">
                    <a
                      href="https://demos.creative-tim.com/argon-design-system-react/#/documentation/overview?ref=adsr-static-docs"
                      class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0"
                    >
                      <span class="btn-inner--icon"
                        ><i class="ni ni-cloud-download-95"></i
                      ></span>
                      <span class="btn-inner--text">Open Docs</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- SVG separator -->
          <div class="separator separator-bottom separator-skew zindex-100">
            <svg
              x="0"
              y="0"
              viewBox="0 0 2560 100"
              preserveAspectRatio="none"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
            >
              <polygon
                class="fill-white"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>
        </section>
      </div>
    </main>
    <!-- Core -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
