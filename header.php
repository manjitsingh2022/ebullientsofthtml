<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta
      name="description"
      content="CryptoZone - Crypto Trading HTML Template"
    />
    <meta
      property="og:title"
      content="CryptoZone - Crypto Trading HTML Template"
    />
    <meta
      property="og:description"
      content="CryptoZone - Crypto Trading HTML Template"
    />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Title -->
    <title>ebullientsoft</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- Stylesheet -->
    <link
      href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
      rel="stylesheet"
    />
    <link href="vendor/animate/animate.css" rel="stylesheet" />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
  </head>
  <style>
    .content-section {
      display: none;
    }
  </style>
  <script>
    function showContent(id) {
      var contentSections = document.getElementsByClassName("content-section");
      for (var i = 0; i < contentSections.length; i++) {
        contentSections[i].style.display = "none";
      }
      document.getElementById(id).style.display = "block";
    }
  </script>
  <body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="loader"></div>
    <!--*******************
        Preloader end
    ********************-->

    <div class="page-wraper">
      <!-- Header -->
      <header class="site-header mo-left header header-transparent style-1">
        <!-- Main Header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
          <div class="main-bar clearfix">
            <div class="container clearfix">
              <!-- Website Logo -->
              <div class="logo-header">
                <a href="index.html" class="logo-dark"
                  ><img src="images/logo.png" alt="" width="60px"
                /></a>
                <a href="index.html" class="logo-light"
                  ><img src="images/logo-white.png" alt="" width="80px"
                /></a>
              </div>

              <!-- Nav Toggle Button Strat -->
              <button
                class="navbar-toggler collapsed navicon justify-content-end"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span></span>
                <span></span>
                <span></span>
              </button>

              <?php require_once("nav.php");?>
          </div>
        </div>
        <!-- Main Header End -->
      </header>
      <!-- Header -->

      <!-- Page Content Start -->
      <div class="page-content">
        <!-- Main Banner Start -->
        <div class="main-bnr style-1">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 text-center">
                <h1 class="wow fadeInUp" data-wow-delay="0.2s">
                  Empowering Innovation <br />Cutting-Edge Software Solutions
                </h1>
                <p class="text text-primary wow fadeInUp" data-wow-delay="1.1s">
                  Renew Inner Harmony
                </p>
                <a
                  href="about-us.html"
                  class="btn space-lg btn-gradient btn-shadow btn-primary wow fadeInUp"
                  data-wow-delay="0.6s"
                  >Get a Quote</a
                >
                <ul class="image-before">
                  <li class="left-img">
                    <img
                      src="images/home-banner/undraw_conference_re_2yld.svg"
                      alt=""
                    />
                  </li>
                  <li class="right-img">
                    <img
                      src="images/home-banner/undraw_virtual_reality_re_yg8i.svg"
                      alt=""
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <img
            class="bg-shape1"
            src="images/home-banner/shape1.png"
            alt=""
            width="60px"
          />
          <img
            class="bg-shape2"
            src="images/home-banner/shape1.png"
            alt=""
            width="60px"
          />
          <img
            class="bg-shape3"
            src="images/home-banner/undraw_xmas_surprise_-57-p1.svg"
            alt=""
            width="60px"
          />
          <img
            class="bg-shape4"
            src="images/home-banner/undraw_xmas_surprise_-57-p1.svg"
            alt=""
            width="60px"
          />
        </div>
        <!-- Main Banner End -->

        <!-- Crypto Coins Start -->
        <div class="clearfix bg-primary-light">
          <div class="container">
            <div class="currancy-wrapper">
              <div class="row justify-content-center">
                <div
                  class="col-lg-4 col-md-6 m-b30 wow fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <div class="icon-bx-wraper style-1 box-hover">
                    <div class="icon-media">
                      <div class="icon-info">
                        <h5 class="title title-orange">Application Development</h5>
                        <!-- <span>BTC</span> -->
                      </div>
                    </div>
                    <div class="icon-content">
                      <p class="ptext_color">
                        Application development is the art of transforming ideas
                        into innovative solutions that empower individuals and
                        organizations to navigate the digital landscape and
                        achieve their goals.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 m-b30 wow fadeInUp"
                  data-wow-delay="0.4s"
                >
                  <div class="icon-bx-wraper style-1 box-hover">
                    <div class="icon-media">
                      <div class="icon-info">
                        <h5 class="title title-orange">Mobile Development</h5>
                        <!-- <span>ETH</span> -->
                      </div>
                    </div>
                    <div class="icon-content">
                      <p class="ptext_color">
                        Mobile development is the art of transforming
                        imagination into innovation, empowering individuals and
                        connecting the world in the palm of our hands.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 m-b30 wow fadeInUp"
                  data-wow-delay="0.6s"
                >
                  <div class="icon-bx-wraper style-1 box-hover">
                    <div class="icon-media">
                      <div class="icon-info">
                        <h5 class="title title-orange">Artificial Intelligence</h5>
                        <!-- <span>USDT</span> -->
                      </div>
                    </div>
                    <div class="icon-content">
                      <p class="ptext_color">
                        Artificial intelligence is not a substitute for human
                        intelligence; it is a tool that can augment our
                        abilities and help us unlock new frontiers of knowledge
                        and innovation.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Crypto Coins End -->