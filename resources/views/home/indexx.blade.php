<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="{{ asset('assets/css/content-style.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/iframe-style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
      rel="stylesheet"
    />
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
      href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/font-awesome/css/fontawesome-all.min.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
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
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="direction: rtl;text-align: right;flot:left">
              <div class="navbar-nav ml-auto">
                <a
                class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
                style="background-color: #00bbff; border: #00bbff solid 2.5px"
                href="{{ route('show-login') }}"
                >تسجيل دخول</a
              >

                <a class="nav-item nav-link active ts-scroll" href="#page-top"
                  >الرئيسية <span class="sr-only">(current)</span></a
                >
{{--                 <a class="nav-item nav-link ts-scroll" href="#how-it-looks"
                  >كيف يبدو</a
                >
 --}}                <a class="nav-item nav-link ts-scroll" href="#what-is-appstorm"
                  >من نحن</a
                >
                <!--                 <a class="nav-item nav-link ts-scroll" href="#pricing"
                  >Pricing</a
                >
                <a class="nav-item nav-link ts-scroll" href="#our-clients"
                  >Our Clients</a
                >
                <a class="nav-item nav-link ts-scroll" href="#gallery"
                  >Galley</a
                >-->
                <a class="nav-item nav-link ts-scroll" href="#form-contact"
                  >اتصل بنا
                  </a
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
                  src="assets/img/img-phone-2nd-screen.png"
                  class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto"
                  alt=""
                />
                <img
                  src="assets/img/img-phone-1st-screen.png"
                  class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto"
                  alt=""
                />
              </div>
            </div>
            <!--end col-sm-5 col-md-5 col-xl-5-->
            <div class="col-sm-7">
              <h3
                class="ts-opacity__50"
                style="direction: rtl; text-align: right"
              >
                نظم فواتيرك
              </h3>
              <h1
                style="
                  font-family: Cairo, sans-serif;
                  direction: rtl;
                  text-align: right;
                "
              >
                كل فواتيرك في مكان واحد
              </h1>
              <a href="#form-contact" class="btn btn-light btn-lg ts-scroll"
                >تواصل معنا</a
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
          <div class="owl-prev owl-carousel ts-hero-slider" data-owl-loop="1">
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
              <h2></h2>
            </div>
            <!--end ts-title-->
            <div class="row">
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
                  <h4>كن افضل</h4>
                  <p>
                    اجعل من التحسين المستمر هدفك الأسمى، واستخدم بياناتك ونتائجك
                    كأداة لتطوير استراتيجياتك وتحقيق نتائج تفوق توقعاتك.
                  </p>
                </figure>
              </div>
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
                  <h4>تحليل النتائج الخاصة بك</h4>
                  <p>
                    استفد من أدوات التحليل المتقدمة لفهم أداء نشاطاتك المالية
                    بشكل أعمق، واكتشف الاتجاهات والنقاط القابلة للتحسين لتعزيز
                    استراتيجياتك المستقبلية.
                  </p>
                </figure>
              </div>
              <!--end col-xl-4-->
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
                  <h4>راقب نشاطاتك</h4>
                  <p>
                    تابع جميع العمليات المالية والمشتريات الخاصة بك بكل سهولة
                    ودقة من خلال لوحة التحكم، وتأكد من متابعة مستمرة لنشاطاتك
                    المالية.
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
            <!--<div class="ts-title">
               <h2>How It Looks</h2>
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5> 
            </div>-->
            <!--end ts-title-->

            <ul
              class="nav nav-tabs justify-content-center my-5"
              id="myTab"
              role="tablist"
            >
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
                  <h4>جوال</h4>
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
                  <h4>جهاز لوحي</h4>
                </a>
              </li>
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
                  <h4>حاسوب</h4>
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
          <div class="container" style="direction: rtl; text-align: right">
            <div class="ts-title">
              <!-- <h2 style="text-align: left">AppStorm</h2> -->
            </div>
            <!--end ts-title-->
            <div class="row">
              <div
                class="col-md-5 col-xl-5"
                data-animate="ts-fadeInUp"
                data-offset="100"
              >
                <p style="color: #303030">
                  <span style="font-size: 2rem; font-weight: 700">ShipPay</span
                  ><br /><br />
                  هو منصة إلكترونية متخصصة تهدف إلى تبسيط عمليات إدارة الفواتير
                  المتعلقة بالشحنات الواردة من الخارج. من خلال هذا الموقع، يمكن
                  للمستخدمين متابعة الفواتير المتعلقة بعمليات الاستيراد بسهولة،
                  سواء كانت مدفوعة أو غير مدفوعة أو مدفوعة جزئيًا. كما يتيح
                  للمستخدمين إمكانية إضافة فئات للمنتجات المستوردة، مثل الهواتف
                  أو الإلكترونيات، مع القدرة على إضافة منتجات فرعية لكل فئة.
                  يوفر الموقع أيضًا نظامًا لإدارة المستخدمين، حيث يمكن للمسؤول
                  الرئيسي (المالك) تخصيص الصلاحيات للمستخدمين الآخرين بناءً على
                  أدوارهم داخل النظام.
                </p>
                <p style="color: #303030">
                  يهدف الموقع إلى تسهيل عملية متابعة الفواتير وتبسيط الإدارة
                  المالية لعمليات الاستيراد، مما يساعد في تحسين الكفاءة وتقليل
                  الأخطاء وتحقيق شفافية أكبر في إدارة العمليات المالية للشحنات.
                </p>
                <a href="#form-contact" class="btn btn-primary mb-4 ts-scroll"
                  >تواصل معنا</a
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
          data-bg-position="right"
          data-bg-repeat="no-repeat"
        >
          <div class="container" style="direction: rtl; text-align: right">
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
                  <h2 style="font-size: 2rem">سمات الموقع</h2>
                </div>
                <!--end ts-title-->
                <p>
                  ميزات موقع دفع الفواتير لاستيراد الشحنات توفر حلولاً متكاملة
                  لإدارة الفواتير وتنظيم العمليات المالية المرتبطة بالشحنات
                  القادمة من الخارج.
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
                      <h6 class="my-2">إدارة الفواتير</h6>
                    </a>
                    <div class="collapse" id="feature-1">
                      <p>
                        تتيح هذه الميزة تتبع الفواتير بسهولة، سواء كانت مدفوعة،
                        غير مدفوعة، أو مدفوعة جزئياً، مما يساعد المستخدمين في
                        تنظيم الشحنات المستوردة والإدارة المالية بدقة.
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
                      <h6 class="my-2">نظام المستخدمين</h6>
                    </a>
                    <div class="collapse" id="feature-2">
                      <p>
                        سمح بإضافة مستخدمين وتحديد أدوار وصلاحيات مختلفة، مما
                        يسهل إدارة الأذونات وفقًا للأدوار والمسؤوليات داخل
                        الشركة.
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
                      <h6 class="my-2">التقارير التفصيلية</h6>
                    </a>
                    <div class="collapse" id="feature-3">
                      <p>
                        توفر تقارير مالية شاملة تعرض معلومات حول الفواتير
                        المدفوعة والمستحقة، وتساعد في اتخاذ قرارات مالية
                        استراتيجية وإدارة التكاليف بشكل أكثر كفاءة.
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
          <div class="container" style=" direction: rtl; text-align: right;">
            <div class="ts-box mb-0 p-5 ts-mt__n-10">
              <div class="row">
                <div class="col-md-4">
                  <h3>تواصل معنا</h3>
                  <address>
                    <figure>
                      شارع المدينة الرياضية, عمان ,الأردن, 11118
                    </figure>
                    <br />
                    <figure>
                      <div class="font-weight-bold">البريد الالكتروني:</div>
                      <a href="#">Mohammadhamam007@Gmail.com</a>
                    </figure>
                    <figure>
                      <div class="font-weight-bold"  >رقم الهاتف:</div>
                      <p style="direction: ltr ;text-align: right; color:#303030">+962 79-535-6845</p>
                    </figure>
{{--                     <div class="font-weight-bold">GitHup:</div>
                    Mohammad7mam
 --}}                  </address>
                  <!--end address-->
                </div>
                <!--end col-md-4-->
                <div class="col-md-8">
                  {{-- <h3>Contact Form</h3> --}}
                  <form
                  id="form-contact"
                  action="/send-email"
                  method="POST"
                  class="clearfix ts-form ts-form-email ts-inputs__transparent"
                >
                  @csrf
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="form-contact-name">الاسم</label>
                        <input
                          type="text"
                          class="form-control"
                          id="form-contact-name"
                          name="name"
                          placeholder="اكتب اسمك"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="form-contact-email">البريد الالكتروني </label>
                        <input
                          type="email"
                          class="form-control"
                          id="form-contact-email"
                          name="email"
                          placeholder="اكتب بريدك الالكتروني"
                          required
                        />
                      </div>
                      <br>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="form-contact-message">الرسالة</label>
                        <textarea
                          class="form-control"
                          id="form-contact-message"
                          rows="7"
                          name="message"
                          placeholder="اكتب رسالتك"
                          required
                        ></textarea>
                      </div>
                    </div>
                  </div>
                
                  <div class="form-group clearfix">
                    <button
                      type="submit"
                      class="btn btn-primary float-right"
                      id="form-contact-submit"
                    >
                      ارسل رسالة
                    </button>
                  </div>
                
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
    {{-- هووووووووووووووووننننننننننننن 
    <script>
      document.getElementById('form-contact').addEventListener('submit', function(event) {
          let name = document.getElementById('form-contact-name').value;
          let email = document.getElementById('form-contact-email').value;
          let message = document.getElementById('form-contact-message').value;
    
          if (name === '' || email === '' || message === '') {
              alert("يرجى ملء جميع الحقول");
              event.preventDefault();
          }
      });
    </script>
      هون --}}

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
    <script src="assets/js/custom1.js"></script>

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
