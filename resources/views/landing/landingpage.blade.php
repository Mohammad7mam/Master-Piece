<!DOCTYPE html>
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@section('title')
    الاقسام
@stop

@endsection

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="ThemeStarz" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"
    />
    <link
      rel="stylesheet"
      href="assets/bootstrap/css/bootstrap.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="assets/font-awesome/css/fontawesome-all.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <title>AppStorm - Application Startup HTML Template</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
    <div class="ts-page-wrapper" id="page-top">
      <!--*********************************************************************************************************-->
      <!--************ HERO ***************************************************************************************-->
      <!--*********************************************************************************************************-->
      <header
        id="ts-hero"
        class="ts-full-screen"
        data-bg-parallax="scroll"
        data-bg-parallax-speed="3"
      >
        <!--NAVIGATION ******************************************************************************************-->
        <nav
          class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element"
          data-bg-color="#004FBE"
        >
          <div class="container">
            <a class="navbar-brand" href="#page-top">
              <img src="assets/img/logo-w.png" alt="" />
            </a>
            <!--end navbar-brand-->
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <!--end navbar-toggler-->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active ts-scroll" href="#page-top"
                  >Home <span class="sr-only">(current)</span></a
                >
                <a class="nav-item nav-link ts-scroll" href="#how-it-looks"
                  >How It Looks</a
                >
                <a class="nav-item nav-link ts-scroll" href="#what-is-appstorm"
                  >About</a
                >
                <a class="nav-item nav-link ts-scroll" href="#pricing"
                  >Pricing</a
                >
                <a class="nav-item nav-link ts-scroll" href="#our-clients"
                  >Our Clients</a
                >
                <a class="nav-item nav-link ts-scroll" href="#gallery"
                  >Galley</a
                >
                <a class="nav-item nav-link ts-scroll" href="#form-contact"
                  >Contact</a
                >
                <a
                  class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
                  style="background-color: #1b1464; border: #1b1464 solid 2.5px"
                  href="#download"
                  >Download</a
                >
              </div>
              <!--end navbar-nav-->
            </div>
            <!--end collapse-->
          </div>
          <!--end container-->
        </nav>
        <!--end navbar-->

        <!--HERO CONTENT ****************************************************************************************-->
        <div class="container align-self-center">
          <div class="row align-items-center">
            <!--end col-sm-7 col-md-7-->
            <div class="col-sm-5 d-none d-sm-block">
              <div
                class="owl-carousel text-center"
                data-owl-nav="1"
                data-owl-loop="1"
              >
                <img
                  src="assets/img/img-phone-1st-screen.png"
                  class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto"
                  alt=""
                />
                <img
                  src="assets/img/img-phone-2nd-screen.png"
                  class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto"
                  alt=""
                />
              </div>
            </div>
            <!--end col-sm-5 col-md-5 col-xl-5-->
            <div class="col-sm-7">
              <h3 class="ts-opacity__50">كن منظمًا!</h3>
              <h1>كل أنشطتك في مكان واحد</h1>
              <a href="#how-it-works" class="btn btn-light btn-lg ts-scroll"
                >سجل الان</a
              >
            </div>
          </div>
          <!--end row-->
        </div>
        <!--end container-->

        <div
          class="ts-background"
          data-bg-image-opacity=".6"
          data-bg-parallax="scroll"
          data-bg-parallax-speed="3"
        >
          <div class="ts-svg ts-z-index__2">
            <img
              src="assets/svg/wave-static-02.svg"
              class="w-100 position-absolute ts-bottom__0"
            />
            <img
              src="assets/svg/wave-static-01.svg"
              class="w-100 position-absolute ts-bottom__0"
            />
          </div>
          <div class="owl-carousel ts-hero-slider" data-owl-loop="1">
            <div
              class="ts-background-image ts-parallax-element"
              data-bg-color="#00BBFF"
              data-bg-image="assets/img/fin-0rHxkbcvQAE-unsplash.png"
              data-bg-blend-mode="multiply"
            ></div>
            <div
              class="ts-background-image ts-parallax-element"
              data-bg-color="#00BBFF"
              data-bg-image="assets/img/H9ISFBWM_output_0.png"
              data-bg-blend-mode="multiply"
            ></div>
          </div>
        </div>
      </header>
      <!--end #hero-->

      <!--*********************************************************************************************************-->
      <!--************ CONTENT ************************************************************************************-->
      <!--*********************************************************************************************************-->
      <main id="ts-content">
        <!--HOW IT WORKS ****************************************************************************************-->
        <section id="how-it-works" class="ts-block text-center">
          <div class="container">
            <div class="ts-title">
              <h2>How It Works</h2>
            </div>
            <!--end ts-title-->
            <div class="row">
              <div class="col-sm-6 col-md-4 col-xl-4">
                <figure data-animate="ts-fadeInUp">
                  <figure class="icon mb-5 p-2">
                    <img src="assets/img/icon-watch-heart.png" alt="" />
                    <div
                      class="ts-svg"
                      data-animate="ts-zoomInShort"
                      data-bg-image="assets/svg/organic-shape-01.svg"
                    ></div>
                  </figure>
                  <h4>Monitor Your Activity</h4>
                  <p>
                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse
                    tempor turpis mattis
                  </p>
                </figure>
              </div>
              <!--end col-xl-4-->
              <div class="col-sm-6 col-md-4 col-xl-4">
                <figure data-animate="ts-fadeInUp" data-delay="0.1s">
                  <figure class="icon mb-5 p-2">
                    <img src="assets/img/icon-lcd-chart.png" alt="" />
                    <div
                      class="ts-svg"
                      data-animate="ts-zoomInShort"
                      data-bg-image="assets/svg/organic-shape-02.svg"
                    ></div>
                  </figure>
                  <h4>Analyze Your Results</h4>
                  <p>
                    Curabitur tellus enim, aliquet et porttitor id, accumsan at
                    nulla. Praesent vestibulum
                  </p>
                </figure>
              </div>
              <!--end col-xl-4-->
              <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                  <figure class="icon mb-5 p-2">
                    <img src="assets/img/icon-cup-winner.png" alt="" />
                    <div
                      class="ts-svg"
                      data-animate="ts-zoomInShort"
                      data-bg-image="assets/svg/organic-shape-03.svg"
                    ></div>
                  </figure>
                  <h4>Get Better!</h4>
                  <p>
                    In non turpis convallis nunc fermentum porttitor sed quis
                    sapien. Etiam et neque
                  </p>
                </figure>
              </div>
              <!--end col-xl-4-->
            </div>
            <!--end row-->
          </div>
          <!--end container-->
        </section>
        <!--END HOW IT WORKS ************************************************************************************-->

        <!--PARTNERS ********************************************************************************************-->

        <!--END PARTNERS ****************************************************************************************-->

        <!--HOW IT LOOKS ****************************************************************************************-->
        <section
          id="how-it-looks"
          class="pb-0 ts-block text-center ts-overflow__hidden ts-shape-mask__down"
          data-bg-color="#ededed"
          data-bg-image="assets/img/bg-shapes-image.png"
          data-bg-repeat="no-repeat"
          data-bg-position="bottom"
          data-bg-size="inherit"
        >
          <div class="container">
            <div class="ts-title">
              <h2>How It Looks</h2>
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
            </div>
            <!--end ts-title-->

            <ul
              class="nav nav-tabs justify-content-center my-5"
              id="myTab"
              role="tablist"
            >
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="desktop-tab"
                  data-toggle="tab"
                  href="#desktop"
                  role="tab"
                  aria-controls="desktop"
                  aria-selected="true"
                >
                  <h4>Desktop</h4>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="tablet-tab"
                  data-toggle="tab"
                  href="#tablet"
                  role="tab"
                  aria-controls="tablet"
                  aria-selected="false"
                >
                  <h4>Tablet</h4>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="mobile-tab"
                  data-toggle="tab"
                  href="#mobile"
                  role="tab"
                  aria-controls="mobile"
                  aria-selected="false"
                >
                  <h4>Mobile</h4>
                </a>
              </li>
            </ul>

            <div
              class="tab-content pt-5 ts-tabs-presentation"
              id="myTabContent"
              data-animate="ts-fadeInUp"
            >
              <div
                class="tab-pane fade show active"
                id="desktop"
                role="tabpanel"
                aria-labelledby="desktop"
              >
                <img src="assets/img/img-desktop.png" class="mw-100" alt="" />
              </div>
              <div
                class="tab-pane fade"
                id="tablet"
                role="tabpanel"
                aria-labelledby="tablet"
              >
                <img src="assets/img/img-tablet.png" class="mw-100" alt="" />
              </div>
              <div
                class="tab-pane fade"
                id="mobile"
                role="tabpanel"
                aria-labelledby="mobile"
              >
                <img src="assets/img/img-phone2.png" class="mw-100" alt="" />
              </div>
            </div>
          </div>
        </section>
        <!--END HOW IT LOOKS ************************************************************************************-->

        <!--WHAT IS APPSTORM ************************************************************************************-->
        <section id="what-is-appstorm" class="ts-block">
          <div class="container">
            <div class="ts-title">
              <h2>What Is AppStorm?</h2>
            </div>
            <!--end ts-title-->
            <div class="row">
              <div
                class="col-md-5 col-xl-5"
                data-animate="ts-fadeInUp"
                data-offset="100"
              >
                <p>
                  Vivamus fermentum magna non faucibus dignissim. Sed a
                  venenatis mi, vel tempus neque. Fusce pharetra, diam in
                  hendrerit facilisis, enim diam cursus augue, egestas egestas
                  purus diam at felis. Nullam tellus turpis, molestie ac urna
                  quis, pulvinar semper massa.
                </p>
                <p>
                  Nam tristique Sed nisl justo, commodo ac gravida vitae,
                  sodales maximus erat. Phasellus euismod nunc metus, et posuere
                  elit venenatis eget. Nunc non risus libero.
                </p>
                <a href="#download" class="btn btn-primary mb-4 ts-scroll"
                  >Download Now!</a
                >
              </div>
              <!--end col-xl-5-->
              <div
                class="col-md-7 col-xl-7 text-center"
                data-animate="ts-fadeInUp"
                data-delay="0.1s"
                data-offset="100"
              >
                <div class="px-3">
                  <img
                    src="assets/img/img-screen-desktop.jpg"
                    class="mw-100 ts-shadow__lg ts-border-radius__md"
                    alt=""
                  />
                </div>
              </div>
              <!--end col-xl-7-->
            </div>
            <!--end row-->
          </div>
          <!--end container-->
        </section>
        <!--END WHAT IS APPSTORM ********************************************************************************-->

        <!--FEATURES ********************************************************************************************-->
        <section
          id="features"
          class="ts-block"
          data-bg-image="assets/img/bg-shapes-image-02.png"
          data-bg-size="inherit"
          data-bg-position="left"
          data-bg-repeat="no-repeat"
        >
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-xl-7 text-center">
                <div class="position-relative">
                  <figure
                    class="position-absolute text-center w-100 ts-z-index__1"
                    data-animate="ts-zoomInShort"
                  >
                    <img
                      src="assets/img/img-screen-small-01.jpg"
                      class="mw-100 d-inline-block ts-shadow__lg"
                      alt=""
                    />
                  </figure>
                  <figure
                    class="p-5"
                    data-animate="ts-zoomInShort"
                    data-delay="0.1s"
                  >
                    <img
                      src="assets/img/img-screen-desktop.jpg"
                      class="mw-100 ts-shadow__lg"
                      alt=""
                    />
                  </figure>
                  <figure
                    class="position-absolute ts-bottom__0 ts-left__0 ts-z-index__2"
                    data-animate="ts-zoomInShort"
                    data-delay="0.2s"
                  >
                    <img
                      src="assets/img/img-screen-small-02.jpg"
                      class="mw-100 d-inline-block ts-shadow__lg"
                      alt=""
                    />
                  </figure>
                </div>
              </div>
              <!--end col-xl-7-->
              <div
                class="col-md-5 col-xl-5"
                data-animate="ts-fadeInUp"
                data-offset="100"
              >
                <div class="ts-title">
                  <h2>Features</h2>
                </div>
                <!--end ts-title-->
                <p>
                  Vivamus fermentum magna non faucibus dignissim. Sed a
                  venenatis mi, vel tempus neque. Fusce pharetra, diam in
                  hendrerit facilisis, enim diam cursus augue.
                </p>
                <!--features list-->
                <ul class="list-unstyled ts-list-divided">
                  <li>
                    <a
                      href="#feature-1"
                      class="ts-font-color__black"
                      data-toggle="collapse"
                      role="button"
                      aria-expanded="false"
                      aria-controls="feature-1"
                    >
                      <h6 class="my-2">Real Time Statistics</h6>
                    </a>
                    <div class="collapse" id="feature-1">
                      <p>
                        Proin dapibus augue vitae massa placerat, vitae pulvinar
                        lectus sodales. Suspendisse lobortis justo sed sapien
                        placerat eleifend.
                      </p>
                    </div>
                    <!--end collapse-->
                  </li>
                  <li>
                    <a
                      href="#feature-2"
                      class="ts-font-color__black"
                      data-toggle="collapse"
                      role="button"
                      aria-expanded="false"
                      aria-controls="feature-2"
                    >
                      <h6 class="my-2">Beautiful Charts</h6>
                    </a>
                    <div class="collapse" id="feature-2">
                      <p>
                        Proin dapibus augue vitae massa placerat, vitae pulvinar
                        lectus sodales. Suspendisse lobortis justo sed sapien
                        placerat eleifend.
                      </p>
                    </div>
                    <!--end collapse-->
                  </li>
                  <li>
                    <a
                      href="#feature-3"
                      class="ts-font-color__black"
                      data-toggle="collapse"
                      role="button"
                      aria-expanded="false"
                      aria-controls="feature-3"
                    >
                      <h6 class="my-2">Activity Reminder</h6>
                    </a>
                    <div class="collapse" id="feature-3">
                      <p>
                        Proin dapibus augue vitae massa placerat, vitae pulvinar
                        lectus sodales. Suspendisse lobortis justo sed sapien
                        placerat eleifend.
                      </p>
                    </div>
                    <!--end collapse-->
                  </li>
                </ul>
                <!--end features list-->
              </div>
              <!--end col-xl-5-->
            </div>
            <!--end row-->
          </div>
          <!--end container-->
        </section>
        <!--FEATURES ********************************************************************************************-->

        <!--SUBSCRIBE *******************************************************************************************-->
        <!--END SUBSCRIBE ***************************************************************************************-->

        <!--PRICING *********************************************************************************************-->

        <!--NUMBERS *********************************************************************************************-->
        <section
          id="numbers"
          class="ts-block ts-separate-bg-element"
          data-bg-image-opacity=".05"
          data-bg-size="inherit"
          data-bg-repeat="repeat"
        >
          <!--end container-->
        </section>
        <!--END NUMBERS *****************************************************************************************-->
      </main>
      <!--end #content-->

      <!--*********************************************************************************************************-->
      <!--************ FOOTER *************************************************************************************-->
      <!--*********************************************************************************************************-->
      <footer id="ts-footer">
        <section
          id="contact"
          class="ts-separate-bg-element"
          data-bg-image="assets/img/bg-desk.jpg"
          data-bg-image-opacity=".1"
          data-bg-color="#004fbe"
        >
          <br /><br /><br /><br /><br /><br />
          <div class="container">
            <div class="ts-box mb-0 p-5 ts-mt__n-10">
              <div class="row">
                <div class="col-md-4">
                  <h3>Contact Us</h3>
                  <address>
                    <figure>2590 Rocky Road Philadelphia, PA 19108</figure>
                    <br />
                    <figure>
                      <div class="font-weight-bold">Email:</div>
                      <a href="#">office@example.com</a>
                    </figure>
                    <figure>
                      <div class="font-weight-bold">Phone:</div>
                      +1 215-606-0391
                    </figure>
                    <div class="font-weight-bold">Skype:</div>
                    crypto.agency
                  </address>
                  <!--end address-->
                </div>
                <!--end col-md-4-->
                <div class="col-md-8">
                  <h3>Contact Form</h3>
                  <form
                    id="form-contact"
                    method="post"
                    class="clearfix ts-form ts-form-email ts-inputs__transparent"
                    data-php-path="assets/php/email.php"
                  >
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                          <label for="form-contact-name">Your Name *</label>
                          <input
                            type="text"
                            class="form-control"
                            id="form-contact-name"
                            name="name"
                            placeholder="Your Name"
                            required
                          />
                        </div>
                        <!--end form-group -->
                      </div>
                      <!--end col-md-6 col-sm-6 -->
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                          <label for="form-contact-email">Your Email *</label>
                          <input
                            type="email"
                            class="form-control"
                            id="form-contact-email"
                            name="email"
                            placeholder="Your Email"
                            required
                          />
                        </div>
                        <!--end form-group -->
                      </div>
                      <!--end col-md-6 col-sm-6 -->
                    </div>
                    <!--end row -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="form-contact-message"
                            >Your Message *</label
                          >
                          <textarea
                            class="form-control"
                            id="form-contact-message"
                            rows="5"
                            name="message"
                            placeholder="Your Message"
                            required
                          ></textarea>
                        </div>
                        <!--end form-group -->
                      </div>
                      <!--end col-md-12 -->
                    </div>
                    <!--end row -->
                    <div class="form-group clearfix">
                      <button
                        type="submit"
                        class="btn btn-primary float-right"
                        id="form-contact-submit"
                      >
                        Send a Message
                      </button>
                    </div>
                    <!--end form-group -->
                    <div class="form-contact-status"></div>
                  </form>
                  <!--end form-contact -->
                </div>
              </div>
              <!--end row-->
            </div>
            <!--end ts-box-->
            <div class="text-center text-white py-4">
              <small>© 2018 ThemeStarz, All Rights Reserved</small>
            </div>
          </div>
          <!--end container-->
        </section>
      </footer>
      <!--end #footer-->
    </div>
    <!--end page-->

    <script>
      if (document.getElementsByClassName("ts-full-screen").length) {
        document.getElementsByClassName("ts-full-screen")[0].style.height =
          window.innerHeight + "px";
      }
    </script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
    <script src="assets/js/isInViewport.jquery.js"></script>
    <script src="assets/js/jquery.particleground.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
    <script src="assets/js/jquery.wavify.js"></script>

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>-->
    <script src="assets/js/custom.js"></script>

    <!--Google map-->

    <script>
      var latitude = 34.038405;
      var longitude = -117.946944;
      var markerImage = "assets/img/map-marker.png";
      var mapElement = "map";
      var mapStyle = [
        {
          featureType: "administrative",
          elementType: "labels.text.fill",
          stylers: [{ color: "#444444" }],
        },
        {
          featureType: "landscape",
          elementType: "all",
          stylers: [{ color: "#f2f2f2" }],
        },
        {
          featureType: "poi",
          elementType: "all",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "poi",
          elementType: "labels.text",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "road",
          elementType: "all",
          stylers: [{ saturation: -100 }, { lightness: 45 }],
        },
        {
          featureType: "road.highway",
          elementType: "all",
          stylers: [{ visibility: "simplified" }],
        },
        {
          featureType: "road.arterial",
          elementType: "labels.icon",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "transit",
          elementType: "all",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "water",
          elementType: "all",
          stylers: [{ color: "#dbdbdb" }, { visibility: "on" }],
        },
      ];
      google.maps.event.addDomListener(
        window,
        "load",
        simpleMap(latitude, longitude, markerImage, mapStyle, mapElement)
      );
    </script>
  </body>
</html>
